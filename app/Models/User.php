<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'tenant_id',
        'phone',
        'role',
        'locale',
        'timezone',
        'mpesa_shortcode',
        'email',
        'email_verified_at',
        'phone_verified_at',
        'remember_token',
        'password',
        'profile_photo_path',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Businesses this user works at (as employee)
    public function businesses()
    {
        return $this->belongsToMany(Tenant::class, 'business_user')
            ->withPivot('role', 'status') // 'role' can be 'manager', 'staff'
            ->withTimestamps();
    }

    // Check if user is employee of a business
    public function isEmployeeOf(Tenant $business)
    {
        return $this->businesses()->where('tenant_id', $business->id)->exists();
    }
}
