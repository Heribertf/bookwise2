<?php

namespace App\Models;

use App\BelongsToTenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory, BelongsToTenant;
    use HasUuids;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'tenant_id',
        'name',
        'description',
        'duration',
        'price',
        'currency',
        'buffer_time',
        'max_bookings_per_slot',
        'is_active'
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function staff()
    {
        return $this->belongsToMany(Staff::class, 'staff_services');
    }

    public function getFormattedPriceAttribute()
    {
        return $this->currency . ' ' . number_format($this->price, 2);
    }

    public function getFormattedDurationAttribute()
    {
        if ($this->duration < 60) {
            return $this->duration . ' min';
        }

        $hours = floor($this->duration / 60);
        $minutes = $this->duration % 60;

        if ($minutes === 0) {
            return $hours . ' hr';
        }

        return $hours . ' hr ' . $minutes . ' min';
    }
}
