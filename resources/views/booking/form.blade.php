@extends('layouts.app')

@section('title', 'Complete Your Booking')

@section('content')
    <div class="py-8 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-md mx-auto">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-indigo-600 px-6 py-4">
                        <h1 class="text-2xl font-bold text-white">Complete Your Booking</h1>
                    </div>

                    <div class="p-6">
                        <!-- Booking Summary -->
                        <div class="bg-gray-50 rounded-lg p-4 mb-6">
                            <h3 class="font-medium text-gray-800 mb-2">Appointment Details</h3>
                            <div class="flex justify-between text-sm text-gray-600">
                                <div>
                                    <p>{{ $service->name }}</p>
                                    <p class="mt-1">{{ Carbon\Carbon::parse($start_time)->format('l, F jS \a\t g:i A') }}
                                    </p>
                                    <p class="mt-1">{{ $staff->user->name }}</p>
                                </div>
                                <div class="text-right">
                                    <p>{{ $service->formatted_price }}</p>
                                    <p class="mt-1">{{ $service->formatted_duration }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Booking Form -->
                        <form action="{{ route('booking.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="service_id" value="{{ $service->id }}">
                            <input type="hidden" name="staff_id" value="{{ $staff->id }}">
                            <input type="hidden" name="start_time" value="{{ $start_time }}">
                            <input type="hidden" name="end_time" value="{{ $end_time }}">

                            <div class="space-y-4">
                                <div>
                                    <label for="client_name" class="block text-sm font-medium text-gray-700">Full
                                        Name</label>
                                    <input type="text" id="client_name" name="client_name"
                                        value="{{ old('client_name', auth()->user()->name ?? '') }}" required
                                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                </div>

                                <div>
                                    <label for="client_email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" id="client_email" name="client_email"
                                        value="{{ old('client_email', auth()->user()->email ?? '') }}" required
                                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                </div>

                                <div>
                                    <label for="client_phone" class="block text-sm font-medium text-gray-700">Phone
                                        Number</label>
                                    <input type="tel" id="client_phone" name="client_phone"
                                        value="{{ old('client_phone', auth()->user()->phone ?? '') }}" required
                                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                    <p class="mt-1 text-sm text-gray-500">For booking confirmation and reminders</p>
                                </div>

                                <div>
                                    <label for="notes" class="block text-sm font-medium text-gray-700">Additional Notes
                                        (Optional)</label>
                                    <textarea id="notes" name="notes" rows="3"
                                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">{{ old('notes') }}</textarea>
                                </div>

                                <div class="pt-2">
                                    <button type="submit"
                                        class="w-full bg-indigo-600 border border-transparent rounded-md py-3 px-4 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Confirm Booking
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
