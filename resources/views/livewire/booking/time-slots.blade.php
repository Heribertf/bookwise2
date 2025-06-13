<div>
    @if (count($availableSlots) > 0)
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3">
            @foreach ($availableSlots as $slot)
                <button wire:click="$emit('slotSelected', @js($slot))"
                    class="px-3 py-2 border border-gray-200 rounded-md text-center hover:border-teal-300 hover:bg-teal-50 transition">
                    <span class="font-medium text-gray-800">{{ $slot['formatted_time'] }}</span>
                    @if (count($availableSlots) > 1)
                        <span class="block text-xs text-gray-500 mt-1">{{ $slot['staff_name'] }}</span>
                    @endif
                </button>
            @endforeach
        </div>
    @else
        <div class="text-center py-8">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h3 class="mt-2 text-lg font-medium text-gray-700">No available slots</h3>
            <p class="mt-1 text-gray-500">Try selecting a different date or staff member</p>
        </div>
    @endif
</div>
