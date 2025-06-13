<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'tenant_id',
        'appointment_id',
        'amount',
        'currency',
        'reference',
        'payment_method',
        'transaction_id',
        'status',
        'payment_data',
    ];

    protected $casts = [
        'payment_date' => 'datetime',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}
