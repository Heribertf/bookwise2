<div>
    <div class="border-b border-gray-200">
        <nav class="-mb-px flex">
            <button wire:click="$set('statusFilter', 'upcoming')"
                class="whitespace-nowrap py-4 px-4 border-b-2 font-medium text-sm"
                :class="{
                    'border-teal-500 text-teal-600': statusFilter === 'upcoming',
                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': statusFilter !== 'upcoming'
                }">
                Upcoming
            </button>
            <button wire:click="$set('statusFilter', 'past')"
                class="whitespace-nowrap py-4 px-4 border-b-2 font-medium text-sm"
                :class="{
                    'border-teal-500 text-teal-600': statusFilter === 'past',
                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': statusFilter !== 'past'
                }">
                Past
            </button>
        </nav>
    </div>

    @if ($appointments->count() > 0)
        <ul class="divide-y divide-gray-200">
            @foreach ($appointments as $appointment)
                <li class="p-4 hover:bg-gray-50">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center space-x-3">
                                <span
                                    class="flex-shrink-0 h-10 w-10 rounded-full bg-teal-100 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-teal-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </span>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">
                                        {{ $appointment->service->name }}
                                    </p>
                                    <p class="text-sm text-gray-500">
                                        {{ $appointment->start_time->format('l, F jS \a\t g:i A') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-4">
                            <div class="flex items-center space-x-2">
                                <span
                                    class="px-2 py-1 text-xs rounded-full 
                                    @if ($appointment->status === 'confirmed') bg-green-100 text-green-800
                                    @elseif($appointment->status === 'pending') bg-yellow-100 text-yellow-800
                                    @elseif($appointment->status === 'cancelled') bg-red-100 text-red-800
                                    @else bg-gray-100 text-gray-800 @endif">
                                    {{ ucfirst($appointment->status) }}
                                </span>

                                @if (
                                    ($appointment->status === 'pending' || $appointment->status === 'confirmed') &&
                                        $appointment->start_time->isFuture())
                                    <div class="flex space-x-2">
                                        <button wire:click="rescheduleAppointment({{ $appointment->id }})"
                                            class="text-sm text-teal-600 hover:text-teal-900">
                                            Reschedule
                                        </button>
                                        <button wire:click="cancelAppointment({{ $appointment->id }})"
                                            class="text-sm text-red-600 hover:text-red-900">
                                            Cancel
                                        </button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 sm:flex sm:justify-between">
                        <div class="sm:flex">
                            <p class="flex items-center text-sm text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                {{ $appointment->staff->user->name }}
                            </p>
                            <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ $appointment->service->formatted_duration }}
                            </p>
                        </div>
                        <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            {{ $appointment->service->formatted_price }}
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>

        <div class="px-4 py-3 border-t border-gray-200 sm:px-6">
            {{ $appointments->links() }}
        </div>
    @else
        <div class="text-center py-12">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h3 class="mt-2 text-lg font-medium text-gray-700">No appointments found</h3>
            <p class="mt-1 text-gray-500">You don't have any {{ $statusFilter }} appointments</p>
            <div class="mt-6">
                <a href="{{ route('booking.index') }}"
                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">
                    Book an Appointment
                </a>
            </div>
        </div>
    @endif
</div>
