<div>
    <div class="mb-6">
        <div class="relative">
            <input type="text" wire:model.debounce.300ms="search" placeholder="Search services..."
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500">
            <div class="absolute right-3 top-2.5 text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @forelse($filteredServices as $service)
            <a href="{{ route('booking.time-slots', ['service_id' => $service->id]) }}"
                class="border border-gray-200 rounded-lg p-4 hover:border-teal-300 hover:shadow-md transition-all duration-200">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-semibold text-lg text-gray-800">{{ $service->name }}</h3>
                        <p class="text-gray-600 mt-1 text-sm">{{ $service->description }}</p>
                    </div>
                    <span class="font-bold text-teal-600">{{ $service->formatted_price }}</span>
                </div>
                <div class="mt-3 flex items-center text-sm text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ $service->formatted_duration }}</span>
                </div>
            </a>
        @empty
            <div class="col-span-2 py-8 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h3 class="mt-2 text-lg font-medium text-gray-700">No services found</h3>
                <p class="mt-1 text-gray-500">Try adjusting your search or filter</p>
            </div>
        @endforelse
    </div>
</div>
