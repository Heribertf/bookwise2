<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Service;

class BookingServicesList extends Component
{
    public $tenant;
    public $services;
    public $search = '';

    public function render()
    {
        $filteredServices = $this->services
            ->when($this->search, function ($query) {
                return $query->filter(function ($service) {
                    return str_contains(strtolower($service->name), strtolower($this->search));
                });
            });

        return view('livewire.booking.services-list', [
            'filteredServices' => $filteredServices
        ]);
    }
}