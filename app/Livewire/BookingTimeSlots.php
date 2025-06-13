<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Service;
use App\Models\Tenant;
use Carbon\Carbon;

class BookingTimeSlots extends Component
{
    public $tenant;
    public $service;
    public $date;
    public $staffId;
    public $availableSlots = [];

    protected $listeners = ['slotSelected' => 'handleSlotSelected'];

    public function mount($tenant, $service, $date, $staffId, $availableSlots)
    {
        $this->tenant = $tenant;
        $this->service = $service;
        $this->date = $date;
        $this->staffId = $staffId;
        $this->availableSlots = $availableSlots;
    }

    public function handleSlotSelected($slot)
    {
        return redirect()->route('booking.form', [
            'service_id' => $this->service->id,
            'staff_id' => $this->staffId,
            'start_time' => $slot['start_time'],
            'end_time' => $slot['end_time']
        ]);
    }

    public function render()
    {
        return view('livewire.booking.time-slots');
    }
}