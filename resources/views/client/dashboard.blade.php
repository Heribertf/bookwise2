@extends('layouts.app')

@section('title', 'My Appointments')

@section('content')
    <div class="py-8 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">My Appointments</h1>
                    <a href="{{ route('booking.index') }}"
                        class="bg-teal-600 text-white px-4 py-2 rounded-md hover:bg-teal-700 transition">
                        Book New Appointment
                    </a>
                </div>

                <div class="bg-white shadow rounded-lg overflow-hidden">
                    @livewire('client.appointments-list')
                </div>
            </div>
        </div>
    </div>
@endsection
