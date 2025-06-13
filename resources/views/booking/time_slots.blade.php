@extends('layouts.app')

@section('title', 'Available Time Slots')

@section('content')
    <div class="py-8 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-teal-600 px-6 py-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <h1 class="text-2xl font-bold text-white">Available Time Slots</h1>
                                <p class="text-teal-100 mt-1">{{ $service->name }} on
                                    {{ \Carbon\Carbon::parse($date)->format('l, F jS') }}</p>
                            </div>
                            <a href="{{ route('booking.index') }}" class="text-teal-200 hover:text-white transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="p-6">
                        <!-- Staff Selection -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Select Staff Member</label>
                            <div class="flex overflow-x-auto pb-2 space-x-2">
                                @foreach ($staffMembers as $staff)
                                    <a href="{{ route('booking.time-slots', ['service_id' => $service->id, 'date' => $date, 'staff_id' => $staff->id]) }}"
                                        class="flex-shrink-0 px-4 py-2 border rounded-full {{ $selectedStaffId == $staff->id ? 'bg-teal-100 border-teal-500 text-teal-700' : 'border-gray-300 hover:bg-gray-50' }}">
                                        {{ $staff->user->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <!-- Date Navigation -->
                        <div class="mb-6">
                            <div class="flex items-center justify-between">
                                <a href="{{ route('booking.time-slots', ['service_id' => $service->id, 'date' => \Carbon\Carbon::parse($date)->subDay()->format('Y-m-d'), 'staff_id' => $selectedStaffId]) }}"
                                    class="px-3 py-1 border rounded-md hover:bg-gray-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7" />
                                    </svg>
                                </a>

                                <h3 class="text-lg font-medium text-gray-800">
                                    {{ \Carbon\Carbon::parse($date)->format('l, F jS') }}
                                </h3>

                                <a href="{{ route('booking.time-slots', ['service_id' => $service->id, 'date' => \Carbon\Carbon::parse($date)->addDay()->format('Y-m-d'), 'staff_id' => $selectedStaffId]) }}"
                                    class="px-3 py-1 border rounded-md hover:bg-gray-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- Time Slots -->
                        @livewire('booking.time-slots', [
                            'tenant' => $tenant,
                            'service' => $service,
                            'date' => $date,
                            'staffId' => $selectedStaffId,
                            'availableSlots' => $availableSlots,
                        ])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
