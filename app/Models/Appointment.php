<?php

namespace App\Models;

use App\BelongsToTenant;
use App\Jobs\SendAppointmentNotificationJob;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Appointment extends Model
{
    use HasFactory, BelongsToTenant;
    use HasUuids;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'tenant_id',
        'client_id',
        'staff_id',
        'service_id',
        'start_time',
        'end_time',
        'status',
        'notes',
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function payment()
    {
        return $this->hasOne(Transaction::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function confirm()
    {
        $this->status = 'confirmed';
        $this->save();

        // Schedule a reminder notification
        $this->scheduleReminder();

        return $this;
    }

    public function cancel()
    {
        $this->status = 'cancelled';
        $this->save();

        // Send cancellation notification
        $this->sendCancellationNotification();

        return $this;
    }

    public function complete()
    {
        $this->status = 'completed';
        $this->save();

        return $this;
    }

    public function scheduleReminder()
    {
        // Schedule a reminder 24 hours before the appointment
        $reminderTime = $this->start_time->copy()->subHours(24);

        if ($reminderTime->isFuture()) {
            // Create notification record
            $notification = $this->notifications()->create([
                'tenant_id' => $this->tenant_id,
                'type' => 'reminder',
                'channel' => 'sms', // Default to SMS
                'status' => 'pending',
                'scheduled_at' => $reminderTime,
            ]);

            // Dispatch the job to send the notification at the scheduled time
            SendAppointmentNotificationJob::dispatch($notification)
                ->delay($reminderTime);
        }
    }

    public function sendCancellationNotification()
    {
        // Create and send cancellation notification immediately
        $notification = $this->notifications()->create([
            'tenant_id' => $this->tenant_id,
            'type' => 'cancellation',
            'channel' => 'sms', // Default to SMS
            'status' => 'pending',
            'scheduled_at' => now(),
        ]);

        // Dispatch the job to send the notification immediately
        SendAppointmentNotificationJob::dispatch($notification);
    }

    public static function getAvailableTimeSlots($tenantId, $serviceId, $date, $staffId = null)
    {
        // Get the service
        $service = Service::findOrFail($serviceId);

        // Get the date as a Carbon instance
        $date = Carbon::parse($date)->startOfDay();

        // Get all staff that can perform this service
        $staffQuery = Staff::where('tenant_id', $tenantId)
            ->where('is_active', true);

        if ($staffId) {
            $staffQuery->where('id', $staffId);
        } else {
            // If no specific staff member is requested, get all that provide this service
            $staffQuery->whereJsonContains('services', $serviceId);
        }

        $staffMembers = $staffQuery->get();

        if ($staffMembers->isEmpty()) {
            return [];
        }

        $availableSlots = [];

        foreach ($staffMembers as $staff) {
            // Check staff working hours for this day
            $dayOfWeek = strtolower($date->format('l'));

            if (
                !isset($staff->working_hours[$dayOfWeek]) ||
                !$staff->working_hours[$dayOfWeek]['enabled']
            ) {
                continue;
            }

            // Get working hours
            $workStart = Carbon::parse($staff->working_hours[$dayOfWeek]['start'])->setDateFrom($date);
            $workEnd = Carbon::parse($staff->working_hours[$dayOfWeek]['end'])->setDateFrom($date);

            // Calculate time slots based on service duration
            $slotStart = $workStart->copy();
            $serviceDuration = $service->duration;
            $bufferTime = $service->buffer_time;
            $totalSlotDuration = $serviceDuration + $bufferTime;

            while ($slotStart->copy()->addMinutes($serviceDuration) <= $workEnd) {
                $slotEnd = $slotStart->copy()->addMinutes($serviceDuration);

                // Check if this slot is available (no existing appointments)
                if ($staff->isAvailable($slotStart, $slotEnd)) {
                    $availableSlots[] = [
                        'staff_id' => $staff->id,
                        'staff_name' => $staff->user->name,
                        'start_time' => $slotStart->format('Y-m-d H:i:s'),
                        'end_time' => $slotEnd->format('Y-m-d H:i:s'),
                        'formatted_time' => $slotStart->format('h:i A') . ' - ' . $slotEnd->format('h:i A')
                    ];
                }

                // Move to next slot
                $slotStart->addMinutes($totalSlotDuration);
            }
        }

        // Sort slots by time
        usort($availableSlots, function ($a, $b) {
            return strtotime($a['start_time']) - strtotime($b['start_time']);
        });

        return $availableSlots;
    }
}