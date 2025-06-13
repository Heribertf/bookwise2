@extends('layouts.app')

@section('title', 'Book an Appointment')

@section('content')
    <div class="py-8 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-teal-600 px-6 py-4">
                        <h1 class="text-2xl font-bold text-white">Book an Appointment</h1>
                        <p class="text-teal-100 mt-1">Select a service to continue</p>
                    </div>

                    <div class="p-6">
                        {{-- @livewire('booking.services-list', ['tenant' => $tenant, 'services' => $services]) --}}
                        <livewire:booking-services-list :tenant="$tenant" :services="$services" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
