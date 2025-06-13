<?php


namespace App\Models;

use App\BelongsToTenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory, BelongsToTenant;
    use HasUuids;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'tenant_id',
        'user_id',
        'services',
        'working_hours',
        'is_active'
    ];

    protected $casts = [
        'services' => 'array',
        'working_hours' => 'array',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'staff_services');
    }

    public function isAvailable($startTime, $endTime)
    {
        // Convert to Carbon instances if they're not already
        if (!($startTime instanceof \Carbon\Carbon)) {
            $startTime = \Carbon\Carbon::parse($startTime);
        }

        if (!($endTime instanceof \Carbon\Carbon)) {
            $endTime = \Carbon\Carbon::parse($endTime);
        }

        // Check if the staff member works on this day
        $dayOfWeek = strtolower($startTime->format('l'));

        if (
            empty($this->working_hours[$dayOfWeek]) ||
            !$this->working_hours[$dayOfWeek]['enabled']
        ) {
            return false;
        }

        // Get working hours for that day
        $workStart = \Carbon\Carbon::parse($this->working_hours[$dayOfWeek]['start']);
        $workEnd = \Carbon\Carbon::parse($this->working_hours[$dayOfWeek]['end']);

        // Set the date part of the working hours to match the requested date
        $workStart->setDateFrom($startTime);
        $workEnd->setDateFrom($startTime);

        // Check if the appointment is within working hours
        if ($startTime->lt($workStart) || $endTime->gt($workEnd)) {
            return false;
        }

        // Check for conflicts with existing appointments
        $conflictingAppointments = $this->appointments()
            ->where('status', '!=', 'cancelled')
            ->where(function ($query) use ($startTime, $endTime) {
                $query->where(function ($q) use ($startTime, $endTime) {
                    // Appointment starts during the requested time
                    $q->where('start_time', '>=', $startTime)
                        ->where('start_time', '<', $endTime);
                })->orWhere(function ($q) use ($startTime, $endTime) {
                    // Appointment ends during the requested time
                    $q->where('end_time', '>', $startTime)
                        ->where('end_time', '<=', $endTime);
                })->orWhere(function ($q) use ($startTime, $endTime) {
                    // Appointment encompasses the requested time
                    $q->where('start_time', '<=', $startTime)
                        ->where('end_time', '>=', $endTime);
                });
            })
            ->count();

        return $conflictingAppointments === 0;
    }
}