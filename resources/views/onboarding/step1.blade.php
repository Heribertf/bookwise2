@extends('layouts.app')

@section('title', 'Onboarding - Step 1')

@section('content')
    <div class="max-w-4xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <!-- Progress Bar -->
        <div class="mb-8">
            <div class="flex justify-between mb-1">
                <span class="text-sm font-medium text-gray-700">Step {{ $step }} of {{ $totalSteps }}</span>
                <span class="text-sm font-medium text-gray-500">{{ round(($step / $totalSteps) * 100) }}% Complete</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2.5">
                <div class="bg-indigo-600 h-2.5 rounded-full" style="width: {{ ($step / $totalSteps) * 100 }}%"></div>
            </div>
        </div>

        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Add Your Services</h2>

                <form action="{{ route('onboarding.completeStep1', $tenant) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <!-- Logo Upload -->
                    <div class="mb-8">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Business Logo</label>
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-16 w-16 rounded-full overflow-hidden bg-gray-100">
                                @if ($tenant->logo_path)
                                    <img src="{{ asset('storage/' . $tenant->logo_path) }}"
                                        class="h-full w-full object-cover">
                                @else
                                    <div class="h-full w-full flex items-center justify-center text-gray-400">
                                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                @endif
                            </div>
                            <div class="ml-4">
                                <input type="file" id="logo" name="logo" class="hidden" accept="image/*">
                                <label for="logo" class="cursor-pointer">
                                    <span
                                        class="inline-flex items-center px-3 py-1 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Change
                                    </span>
                                </label>
                                <p class="text-xs text-gray-500 mt-1">PNG, JPG up to 2MB</p>
                            </div>
                        </div>
                    </div>

                    <!-- Services -->
                    <div x-data="{ services: [{ name: '', duration: 30, price: '' }] }">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Your Services</label>

                        <div class="space-y-4">
                            <template x-for="(service, index) in services" :key="index">
                                <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
                                    <!-- Service Name -->
                                    <div class="md:col-span-5">
                                        <input x-model="service.name" :name="`services[${index}][name]`" type="text"
                                            required
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                            placeholder="Service name">
                                    </div>

                                    <!-- Duration -->
                                    <div class="md:col-span-3">
                                        <div class="relative">
                                            <input x-model="service.duration" :name="`services[${index}][duration]`"
                                                type="number" min="1" required
                                                class="block w-full pr-12 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <div
                                                class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                                <span class="text-gray-500 sm:text-sm">min</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Price -->
                                    <div class="md:col-span-3">
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <span class="text-gray-500 sm:text-sm">KES</span>
                                            </div>
                                            <input x-model="service.price" :name="`services[${index}][price]`"
                                                type="number" min="0" step="50" required
                                                class="block w-full pl-12 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                placeholder="0.00">
                                        </div>
                                    </div>

                                    <!-- Remove Button -->
                                    <div class="md:col-span-1 flex items-center">
                                        <button type="button" @click="services.splice(index, 1)"
                                            class="text-red-600 hover:text-red-900">
                                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </template>

                            <button type="button" @click="services.push({ name: '', duration: 30, price: '' })"
                                class="inline-flex items-center px-3 py-1 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <svg class="-ml-0.5 mr-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                                Add Another Service
                            </button>
                        </div>
                    </div>

                    <div class="mt-8 flex justify-end">
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Continue to Step 2
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
