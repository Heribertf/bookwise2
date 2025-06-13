@extends('layouts.app')

@section('title', 'Booking Confirmation')

@section('content')
    <div class="py-8 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-md mx-auto">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-indigo-600 px-6 py-4">
                        <h1 class="text-2xl font-bold text-white">Booking Confirmed</h1>
                    </div>

                    <div class="p-6">
                        <div class="text-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-teal-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h2 class="mt-2 text-xl font-semibold text-gray-800">Thank you for your booking!</h2>
                            <p class="mt-1 text-gray-600">A confirmation has been sent to your email</p>
                        </div>

                        <div class="bg-gray-50 rounded-lg p-4 mb-6">
                            <h3 class="font-medium text-gray-800 mb-3">Appointment Details</h3>
                            <div class="space-y-3 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Service:</span>
                                    <span class="font-medium">{{ $appointment->service->name }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Date & Time:</span>
                                    <span
                                        class="font-medium">{{ $appointment->start_time->format('l, F jS \a\t g:i A') }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Duration:</span>
                                    <span class="font-medium">{{ $appointment->service->formatted_duration }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">With:</span>
                                    <span class="font-medium">{{ $appointment->staff->user->name }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Amount:</span>
                                    <span class="font-medium">{{ $appointment->service->formatted_price }}</span>
                                </div>
                            </div>
                        </div>

                        @if ($appointment->payment && $appointment->payment->status === 'pending')
                            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm text-yellow-700">
                                            Payment is pending. Please complete the payment to confirm your appointment.
                                        </p>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <button wire:click="initiatePayment"
                                        class="w-full bg-indigo-600 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Complete Payment via M-Pesa
                                    </button>
                                </div>
                            </div>
                        @endif

                        <div class="flex justify-between space-x-4">
                            <a href="{{ route('booking.index') }}"
                                class="flex-1 bg-white border border-gray-300 rounded-md py-2 px-4 flex items-center justify-center text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Book Another
                            </a>
                            @auth
                                <a href="{{ route('client.dashboard') }}"
                                    class="flex-1 bg-gray-800 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-sm font-medium text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                    My Appointments
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
