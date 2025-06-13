<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    use HasUuids;

    protected $keyType = 'string';
    public $incrementing = false;


    protected $fillable = [
        'company_name',
        'slug',
        'business_type',
        'description',
        'website',
        'address',
        'city',
        'country',
        'business_hours',
        'logo_path',
        'email',
        'phone',
        'subscription_plan',
        'subscription_status',
        'subscription_ends_at',
        'settings',
    ];

    protected $casts = [
        'settings' => 'array',
        'subscription_ends_at' => 'datetime',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function owner()
    {
        return $this->hasOne(User::class)->where('role', 'owner');
    }

    public function staff()
    {
        return $this->hasMany(Staff::class);
    }

    // Employees working at this business
    public function employees()
    {
        return $this->belongsToMany(User::class, 'business_user')
            ->withPivot('role', 'status')
            ->withTimestamps();
    }

    // Get managers
    public function managers()
    {
        return $this->employees()->wherePivot('role', 'manager');
    }

    // Business hours
    public function hours()
    {
        return $this->hasMany(BusinessHour::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function payments()
    {
        return $this->hasMany(Transaction::class);
    }

    public function isSubscriptionActive()
    {
        return $this->subscription_status === 'active' &&
            ($this->subscription_ends_at === null || $this->subscription_ends_at->isFuture());
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}