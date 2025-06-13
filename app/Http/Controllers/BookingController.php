<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Service;
use App\Models\Staff;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Services\MpesaService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BookingController extends Controller
{
    use AuthorizesRequests;

    /**
     * Display the booking page with services.
     */
    public function index(Request $request)
    {
        $tenant = app('tenant');
        // $services = $tenant->services()->where('is_active', true)->get();
        $services = $tenant
            ? $tenant->services()->where('is_active', true)->get()
            : Service::where('is_active', true)->get();

        return view('booking.index', [
            'tenant' => $tenant,
            'services' => $services
        ]);
    }

    /**
     * Show available time slots for a service.
     */
    public function showTimeSlots(Request $request, $serviceId)
    {
        $validator = Validator::make($request->all(), [
            'date' => 'required|date|after_or_equal:today',
            'staff_id' => 'nullable|exists:staff,id'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $tenant = app('tenant');
        $service = $tenant->services()->findOrFail($serviceId);
        $date = $request->date;
        $staffId = $request->staff_id;

        // Get staff members who can perform this service
        $staffMembers = $tenant->staff()
            ->where('is_active', true)
            ->whereJsonContains('services', $serviceId)
            ->get();

        // Get available time slots
        $availableSlots = Appointment::getAvailableTimeSlots(
            $tenant->id,
            $serviceId,
            $date,
            $staffId
        );

        return view('booking.time_slots', [
            'tenant' => $tenant,
            'service' => $service,
            'date' => $date,
            'staffMembers' => $staffMembers,
            'selectedStaffId' => $staffId,
            'availableSlots' => $availableSlots
        ]);
    }

    /**
     * Show the booking form.
     */
    public function showBookingForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_id' => 'required|exists:services,id',
            'staff_id' => 'required|exists:staff,id',
            'start_time' => 'required|date_format:Y-m-d H:i:s',
            'end_time' => 'required|date_format:Y-m-d H:i:s|after:start_time'
        ]);

        if ($validator->fails()) {
            return redirect()->route('booking.index')->withErrors($validator);
        }

        $tenant = app('tenant');
        $service = $tenant->services()->findOrFail($request->service_id);
        $staff = $tenant->staff()->findOrFail($request->staff_id);
        $startTime = Carbon::parse($request->start_time);
        $endTime = Carbon::parse($request->end_time);

        // Check if this time slot is still available
        if (!$staff->isAvailable($startTime, $endTime)) {
            return redirect()->route('booking.time-slots', [
                'service_id' => $service->id,
                'date' => $startTime->format('Y-m-d')
            ])->with('error', 'The selected time slot is no longer available.');
        }

        return view('booking.form', [
            'tenant' => $tenant,
            'service' => $service,
            'staff' => $staff,
            'startTime' => $startTime,
            'endTime' => $endTime
        ]);
    }
    /**
     * Process the booking submission.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_id' => 'required|exists:services,id',
            'staff_id' => 'required|exists:staff,id',
            'start_time' => 'required|date_format:Y-m-d H:i:s',
            'end_time' => 'required|date_format:Y-m-d H:i:s|after:start_time',
            'client_name' => 'required|string|max:255',
            'client_email' => 'required|email|max:255',
            'client_phone' => 'required|string|max:20',
            'notes' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $tenant = app('tenant');
        $service = $tenant->services()->findOrFail($request->service_id);
        $staff = $tenant->staff()->findOrFail($request->staff_id);
        $startTime = Carbon::parse($request->start_time);
        $endTime = Carbon::parse($request->end_time);

        // Verify the slot is still available
        if (!$staff->isAvailable($startTime, $endTime)) {
            return redirect()->route('booking.time-slots', [
                'service_id' => $service->id,
                'date' => $startTime->format('Y-m-d')
            ])->with('error', 'The selected time slot is no longer available.');
        }

        // Create or find the client user
        $client = User::firstOrCreate(
            ['email' => $request->client_email],
            [
                'name' => $request->client_name,
                'phone' => $request->client_phone,
                'password' => bcrypt(Str::random(16)),
                'role' => 'client'
            ]
        );

        // Create the appointment
        try {
            DB::beginTransaction();

            $appointment = Appointment::create([
                'tenant_id' => $tenant->id,
                'client_id' => $client->id,
                'staff_id' => $staff->id,
                'service_id' => $service->id,
                'start_time' => $startTime,
                'end_time' => $endTime,
                'status' => 'pending',
                'notes' => $request->notes
            ]);

            // Create a payment record
            $payment = $appointment->payment()->create([
                'tenant_id' => $tenant->id,
                'amount' => $service->price,
                'currency' => $service->currency,
                'payment_method' => 'mpesa',
                'status' => 'pending'
            ]);

            DB::commit();

            // Send confirmation notification
            $appointment->sendConfirmationNotification();

            return redirect()->route('booking.confirmation', $appointment->id);

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withInput()->with('error', 'An error occurred while processing your booking. Please try again.');
        }
    }

    /**
     * Show booking confirmation page.
     */
    public function confirmation($id)
    {
        $tenant = app('tenant');
        $appointment = $tenant->appointments()->findOrFail($id);

        return view('booking.confirmation', [
            'tenant' => $tenant,
            'appointment' => $appointment
        ]);
    }

    /**
     * Initiate M-Pesa payment for the booking.
     */
    public function initiatePayment(Request $request, $appointmentId)
    {
        $tenant = app('tenant');
        $appointment = $tenant->appointments()->findOrFail($appointmentId);

        // Verify appointment belongs to the current user
        if (Auth::check() && $appointment->client_id !== Auth::id()) {
            abort(403);
        }

        // Check if payment is already completed
        if ($appointment->payment && $appointment->payment->status === 'completed') {
            return redirect()->route('booking.confirmation', $appointment->id)
                ->with('error', 'Payment has already been completed for this appointment.');
        }

        // Initialize M-Pesa payment
        try {
            $mpesa = new MpesaService();
            $response = $mpesa->stkPush(
                $appointment->client->phone,
                $appointment->payment->amount,
                $appointment->id,
                "Payment for {$appointment->service->name} appointment"
            );

            // Update payment record with request data
            $appointment->payment->update([
                'transaction_id' => $response['MerchantRequestID'],
                'payment_data' => $response
            ]);

            return redirect()->route('booking.confirmation', $appointment->id)
                ->with('success', 'Payment request sent to your phone. Please complete the payment to confirm your booking.');

        } catch (\Exception $e) {
            return redirect()->route('booking.confirmation', $appointment->id)
                ->with('error', 'Failed to initiate payment: ' . $e->getMessage());
        }
    }


    /**
     * Business Dashboard
     */
    public function dashboard()
    {
        $tenant = app('tenant');

        return view('dashboard.index', [
            'todaysAppointments' => $tenant->appointments()
                ->whereDate('start_time', today())
                ->count(),
            'pendingAppointments' => $tenant->appointments()
                ->where('status', 'pending')
                ->count(),
            'monthlyRevenue' => $tenant->payments()
                ->where('status', 'completed')
                ->whereMonth('created_at', now()->month)
                ->sum('amount'),
            'totalClients' => $tenant->users()
                ->where('role', 'client')
                ->count(),
            'recentAppointments' => $tenant->appointments()
                ->with(['client', 'service', 'staff.user'])
                ->latest()
                ->paginate(10)
        ]);
    }

    /**
     * Show appointments list for business
     */
    public function appointments()
    {
        $tenant = app('tenant');
        $appointments = $tenant->appointments()
            ->with(['client', 'service', 'staff.user'])
            ->filter(request(['status', 'date']))
            ->latest()
            ->paginate(15);

        return view('dashboard.appointments.index', compact('appointments'));
    }

    /**
     * Show single appointment
     */
    public function showAppointment(Appointment $appointment)
    {
        $this->authorize('view', $appointment);

        return view('dashboard.appointments.show', [
            'appointment' => $appointment->load(['client', 'service', 'staff.user', 'payment'])
        ]);
    }

    /**
     * Confirm appointment
     */
    public function confirmAppointment(Appointment $appointment)
    {
        $this->authorize('update', $appointment);

        $appointment->confirm();

        return back()->with('success', 'Appointment confirmed successfully');
    }

    /**
     * Cancel appointment
     */
    public function cancelAppointment(Appointment $appointment)
    {
        $this->authorize('update', $appointment);

        $appointment->cancel();

        return back()->with('success', 'Appointment cancelled successfully');
    }

    /**
     * Complete appointment
     */
    public function completeAppointment(Appointment $appointment)
    {
        $this->authorize('update', $appointment);

        $appointment->complete();

        return back()->with('success', 'Appointment marked as completed');
    }

    /**
     * List services
     */
    public function services()
    {
        $tenant = app('tenant');
        $services = $tenant->services()->paginate(10);

        return view('dashboard.services.index', compact('services'));
    }

    /**
     * Show service creation form
     */
    public function createService()
    {
        return view('dashboard.services.create');
    }

    /**
     * Store new service
     */
    public function storeService(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'duration' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'buffer_time' => 'nullable|integer|min:0',
            'max_bookings_per_slot' => 'nullable|integer|min:1'
        ]);

        $tenant = app('tenant');
        $tenant->services()->create($validated);

        return redirect()->route('services.index')
            ->with('success', 'Service created successfully');
    }

    /**
     * Show service edit form
     */
    public function editService(Service $service)
    {
        $this->authorize('update', $service);

        return view('dashboard.services.edit', compact('service'));
    }

    /**
     * Update service
     */
    public function updateService(Request $request, Service $service)
    {
        $this->authorize('update', $service);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'duration' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'buffer_time' => 'nullable|integer|min:0',
            'max_bookings_per_slot' => 'nullable|integer|min:1',
            'is_active' => 'boolean'
        ]);

        $service->update($validated);

        return redirect()->route('services.index')
            ->with('success', 'Service updated successfully');
    }

    /**
     * Delete service
     */
    public function destroyService(Service $service)
    {
        $this->authorize('delete', $service);

        $service->delete();

        return redirect()->route('services.index')
            ->with('success', 'Service deleted successfully');
    }


    /**
     * List staff members
     */
    public function staff()
    {
        $tenant = app('tenant');
        $staffMembers = $tenant->staff()
            ->with(['user', 'services'])
            ->paginate(10);

        return view('dashboard.staff.index', compact('staffMembers'));
    }

    /**
     * Show staff creation form
     */
    public function createStaff()
    {
        $tenant = app('tenant');
        $services = $tenant->services()->where('is_active', true)->get();

        return view('dashboard.staff.create', compact('services'));
    }

    /**
     * Store new staff member
     */
    public function storeStaff(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:20',
            'services' => 'required|array',
            'services.*' => 'exists:services,id',
            'working_hours' => 'nullable|array'
        ]);

        $tenant = app('tenant');

        // Create user account
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'password' => bcrypt(Str::random(16)),
            'role' => 'staff',
            'tenant_id' => $tenant->id
        ]);

        // Create staff profile
        $staff = $user->staff()->create([
            'tenant_id' => $tenant->id,
            'services' => $validated['services'],
            'working_hours' => $validated['working_hours'] ?? null,
            'is_active' => true
        ]);

        return redirect()->route('staff.index')
            ->with('success', 'Staff member added successfully');
    }

    /**
     * Show staff edit form
     */
    public function editStaff(Staff $staff)
    {
        $this->authorize('update', $staff);

        $tenant = app('tenant');
        $services = $tenant->services()->where('is_active', true)->get();

        return view('dashboard.staff.edit', [
            'staff' => $staff->load('user'),
            'services' => $services
        ]);
    }

    /**
     * Update staff member
     */
    public function updateStaff(Request $request, Staff $staff)
    {
        $this->authorize('update', $staff);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $staff->user_id,
            'phone' => 'required|string|max:20',
            'services' => 'required|array',
            'services.*' => 'exists:services,id',
            'working_hours' => 'nullable|array',
            'is_active' => 'boolean'
        ]);

        // Update user account
        $staff->user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone']
        ]);

        // Update staff profile
        $staff->update([
            'services' => $validated['services'],
            'working_hours' => $validated['working_hours'] ?? null,
            'is_active' => $validated['is_active'] ?? true
        ]);

        return redirect()->route('staff.index')
            ->with('success', 'Staff member updated successfully');
    }

    /**
     * Delete staff member
     */
    public function destroyStaff(Staff $staff)
    {
        $this->authorize('delete', $staff);

        $staff->user()->delete();
        $staff->delete();

        return redirect()->route('staff.index')
            ->with('success', 'Staff member removed successfully');
    }
}