<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Appointment;

class AppointmentsList extends Component
{
    use WithPagination;

    public $statusFilter = 'upcoming';

    protected $queryString = ['statusFilter'];

    public function render()
    {
        $appointments = Appointment::where('client_id', auth()->id())
            ->with(['service', 'staff.user', 'payment'])
            ->when($this->statusFilter === 'upcoming', function ($query) {
                return $query->whereIn('status', ['pending', 'confirmed'])
                    ->where('start_time', '>=', now());
            })
            ->when($this->statusFilter === 'past', function ($query) {
                return $query->whereIn('status', ['completed', 'cancelled'])
                    ->orWhere('start_time', '<', now());
            })
            ->orderBy('start_time', $this->statusFilter === 'upcoming' ? 'asc' : 'desc')
            ->paginate(10);

        return view('livewire.client.appointments-list', [
            'appointments' => $appointments
        ]);
    }

    public function cancelAppointment($appointmentId)
    {
        $appointment = Appointment::findOrFail($appointmentId);

        if ($appointment->client_id !== auth()->id()) {
            abort(403);
        }

        if ($appointment->status === 'pending' || $appointment->status === 'confirmed') {
            $appointment->cancel();
            $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => 'Appointment cancelled successfully'
            ]);
        }
    }

    public function rescheduleAppointment($appointmentId)
    {
        $appointment = Appointment::findOrFail($appointmentId);

        if ($appointment->client_id !== auth()->id()) {
            abort(403);
        }

        return redirect()->route('booking.time-slots', [
            'service_id' => $appointment->service_id,
            'date' => now()->format('Y-m-d'),
            'reschedule' => $appointment->id
        ]);
    }
}