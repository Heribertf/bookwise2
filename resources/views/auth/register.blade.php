@extends('layouts.app')

@section('title', 'Register Your Business')

@section('content')
    <div class="flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h1 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Register Your Business
            </h1>
            <p class="mt-2 text-center text-sm text-gray-600">
                Start accepting bookings in minutes
            </p>
        </div>

        <div class="mt-8 mx-auto w-full max-w-3xl">
            <!-- Progress Steps -->
            <div class="px-4 sm:px-6 lg:px-8 mb-8">
                <nav class="flex items-center justify-center" aria-label="Progress">
                    <ol role="list" class="flex items-center space-x-5">
                        <li>
                            <button data-step="1" class="step-indicator active">
                                <span
                                    class="flex items-center justify-center w-10 h-10 border-2 border-teal-600 rounded-full">
                                    <span class="text-teal-600">1</span>
                                </span>
                                <span class="mt-2 text-sm font-medium text-teal-600">Business Info</span>
                            </button>
                        </li>

                        <li>
                            <button data-step="2" class="step-indicator">
                                <span
                                    class="flex items-center justify-center w-10 h-10 border-2 border-gray-300 rounded-full">
                                    <span class="text-gray-500">2</span>
                                </span>
                                <span class="mt-2 text-sm font-medium text-gray-500">Business Details</span>
                            </button>
                        </li>

                        <li>
                            <button data-step="3" class="step-indicator">
                                <span
                                    class="flex items-center justify-center w-10 h-10 border-2 border-gray-300 rounded-full">
                                    <span class="text-gray-500">3</span>
                                </span>
                                <span class="mt-2 text-sm font-medium text-gray-500">Owner Info</span>
                            </button>
                        </li>

                        <li>
                            <button data-step="4" class="step-indicator">
                                <span
                                    class="flex items-center justify-center w-10 h-10 border-2 border-gray-300 rounded-full">
                                    <span class="text-gray-500">4</span>
                                </span>
                                <span class="mt-2 text-sm font-medium text-gray-500">Plan Selection</span>
                            </button>
                        </li>

                        <li>
                            <button data-step="5" class="step-indicator">
                                <span
                                    class="flex items-center justify-center w-10 h-10 border-2 border-gray-300 rounded-full">
                                    <span class="text-gray-500">5</span>
                                </span>
                                <span class="mt-2 text-sm font-medium text-gray-500">Payment</span>
                            </button>
                        </li>
                    </ol>
                </nav>
            </div>

            <!-- Form Container -->
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form id="businessRegistrationForm" class="space-y-6" action="{{ route('register.store') }}" method="POST"
                    novalidate>
                    @csrf

                    <!-- Step 1: Business Information -->
                    <div id="step-1" class="step-content active">
                        <h2 class="text-xl font-semibold text-gray-900 mb-6">Business Information</h2>

                        <div class="space-y-4">
                            <!-- Company Name -->
                            <div>
                                <label for="company_name" class="block text-sm font-medium text-gray-700 required">
                                    Business Name
                                </label>
                                <div class="mt-1">
                                    <input id="company_name" name="company_name" type="text" required
                                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 sm:text-sm"
                                        value="{{ old('company_name') }}" aria-describedby="company_name_error">
                                </div>
                                <p id="company_name_error" class="mt-2 text-sm text-red-600 hidden"></p>
                            </div>

                            <!-- Business URL -->
                            <div>
                                <label for="slug" class="block text-sm font-medium text-gray-700 required">
                                    Your Bookwise URL
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                        https://
                                    </span>
                                    <input id="slug" name="slug" type="text" required
                                        class="flex-1 min-w-0 block w-full px-3 py-2 rounded-none border-gray-300 focus:ring-2 focus:ring-teal-500 focus:border-teal-500 sm:text-sm"
                                        placeholder="yourbusiness" value="{{ old('slug') }}"
                                        aria-describedby="slug_error slug_help">
                                    <span
                                        class="inline-flex items-center px-3 rounded-r-md border border-l-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                        .bookwise.co.ke
                                    </span>
                                </div>
                                <p id="slug_error" class="mt-2 text-sm text-red-600 hidden"></p>
                                <p id="slug_help" class="mt-2 text-sm text-gray-500">
                                    This will be your unique booking URL (e.g. https://yourbusiness.bookwise.co.ke)
                                </p>
                            </div>
                        </div>

                        <div class="mt-8 flex justify-end">
                            <button type="button"
                                class="next-step-btn inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">
                                Next: Business Details
                            </button>
                        </div>
                    </div>

                    <!-- Step 2: Business Details -->
                    <div id="step-2" class="step-content hidden">
                        <h2 class="text-xl font-semibold text-gray-900 mb-6">Business Details</h2>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <!-- Business Type -->
                            <div>
                                <label for="business_type" class="block text-sm font-medium text-gray-700">
                                    Business Type
                                </label>
                                <select id="business_type" name="business_type"
                                    class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 sm:text-sm rounded-md">
                                    <option value="salon">Salon</option>
                                    <option value="barber">Barber Shop</option>
                                    <option value="spa">Spa</option>
                                    <option value="clinic">Clinic</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <!-- Business Description -->
                            <div class="sm:col-span-2">
                                <label for="description" class="block text-sm font-medium text-gray-700">
                                    Description
                                </label>
                                <textarea id="description" name="description" rows="3"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-teal-500 focus:border-teal-500 sm:text-sm"
                                    aria-describedby="description_help"></textarea>
                                <p id="description_help" class="mt-2 text-sm text-gray-500">
                                    Tell customers about your business (max 200 characters)
                                </p>
                            </div>

                            <!-- Business Hours -->
                            <div class="sm:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Business Hours
                                </label>

                                <div class="space-y-4 business-hours-container">
                                    @foreach (['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'] as $day)
                                        <div class="business-day flex flex-col sm:flex-row sm:items-center gap-2">
                                            <div class="sm:w-24 flex items-center">
                                                <input type="checkbox" id="business_hours_{{ $day }}_enabled"
                                                    name="business_hours[{{ $day }}][enabled]" checked
                                                    class="h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-300 rounded">
                                                <label for="business_hours_{{ $day }}_enabled"
                                                    class="ml-2 capitalize">{{ $day }}</label>
                                            </div>
                                            <div class="flex-1 grid grid-cols-3 gap-2 items-center">
                                                <select name="business_hours[{{ $day }}][start]"
                                                    class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 sm:text-sm rounded-md">
                                                    @for ($i = 8; $i <= 20; $i++)
                                                        <option value="{{ $i }}:00">{{ $i }}:00
                                                            AM</option>
                                                        @if ($i < 20)
                                                            <option value="{{ $i }}:30">
                                                                {{ $i }}:30 AM</option>
                                                        @endif
                                                    @endfor
                                                </select>
                                                <span class="text-center">to</span>
                                                <select name="business_hours[{{ $day }}][end]"
                                                    class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 sm:text-sm rounded-md">
                                                    @for ($i = 9; $i <= 21; $i++)
                                                        <option value="{{ $i }}:00"
                                                            {{ $i === 17 ? 'selected' : '' }}>
                                                            {{ $i }}:00 PM
                                                        </option>
                                                        @if ($i < 21)
                                                            <option value="{{ $i }}:30">
                                                                {{ $i }}:30 PM</option>
                                                        @endif
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 flex justify-between">
                            <button type="button"
                                class="prev-step-btn inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">
                                Back
                            </button>
                            <button type="button"
                                class="next-step-btn inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">
                                Next: Owner Information
                            </button>
                        </div>
                    </div>

                    <!-- Step 3: Owner Information -->
                    <div id="step-3" class="step-content hidden">
                        <h2 class="text-xl font-semibold text-gray-900 mb-6">Owner Information</h2>

                        <div class="space-y-4">
                            <!-- Name -->
                            <div class="sm:flex sm:space-x-4">
                                <!-- First Name -->
                                <div class="sm:w-1/2">
                                    <label for="first_name" class="block text-sm font-medium text-gray-700 required">
                                        First Name
                                    </label>
                                    <div class="mt-1">
                                        <input id="first_name" name="first_name" type="text"
                                            autocomplete="given-name" required
                                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 sm:text-sm"
                                            value="{{ old('first_name') }}" aria-describedby="first_name_error">
                                    </div>
                                    <p id="first_name_error" class="mt-2 text-sm text-red-600 hidden"></p>
                                </div>

                                <!-- Last Name -->
                                <div class="mt-4 sm:mt-0 sm:w-1/2">
                                    <label for="last_name" class="block text-sm font-medium text-gray-700 required">
                                        Last Name
                                    </label>
                                    <div class="mt-1">
                                        <input id="last_name" name="last_name" type="text" autocomplete="family-name"
                                            required
                                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 sm:text-sm"
                                            value="{{ old('last_name') }}" aria-describedby="last_name_error">
                                    </div>
                                    <p id="last_name_error" class="mt-2 text-sm text-red-600 hidden"></p>
                                </div>
                            </div>

                            {{-- <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 required">
                                    Full Name
                                </label>
                                <div class="mt-1">
                                    <input id="name" name="name" type="text" autocomplete="name" required
                                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 sm:text-sm"
                                        value="{{ old('name') }}" aria-describedby="name_error">
                                </div>
                                <p id="name_error" class="mt-2 text-sm text-red-600 hidden"></p>
                            </div> --}}

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 required">
                                    Email address
                                </label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" autocomplete="email" required
                                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 sm:text-sm"
                                        value="{{ old('email') }}" aria-describedby="email_error">
                                </div>
                                <p id="email_error" class="mt-2 text-sm text-red-600 hidden"></p>
                            </div>

                            <!-- Phone -->
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 required">
                                    Phone Number
                                </label>
                                <div class="mt-1">
                                    <input id="phone" name="phone" type="tel" autocomplete="tel" required
                                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 sm:text-sm"
                                        value="{{ old('phone') }}" placeholder="e.g. 0712345678"
                                        aria-describedby="phone_error">
                                </div>
                                <p id="phone_error" class="mt-2 text-sm text-red-600 hidden"></p>
                            </div>

                            <!-- Password -->
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700 required">
                                    Password
                                </label>
                                <div class="mt-1">
                                    <input id="password" name="password" type="password" autocomplete="new-password"
                                        required
                                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 sm:text-sm"
                                        aria-describedby="password_error password_help">
                                </div>
                                <p id="password_error" class="mt-2 text-sm text-red-600 hidden"></p>
                                <p id="password_help" class="mt-2 text-sm text-gray-500">
                                    Minimum 8 characters with at least one number and one special character
                                </p>
                            </div>

                            <!-- Confirm Password -->
                            <div>
                                <label for="password_confirmation"
                                    class="block text-sm font-medium text-gray-700 required">
                                    Confirm Password
                                </label>
                                <div class="mt-1">
                                    <input id="password_confirmation" name="password_confirmation" type="password"
                                        autocomplete="new-password" required
                                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 sm:text-sm"
                                        aria-describedby="password_confirmation_error">
                                </div>
                                <p id="password_confirmation_error" class="mt-2 text-sm text-red-600 hidden"></p>
                            </div>
                        </div>

                        <div class="mt-8 flex justify-between">
                            <button type="button"
                                class="prev-step-btn inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">
                                Back
                            </button>
                            <button type="button"
                                class="next-step-btn inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">
                                Next: Plan Selection
                            </button>
                        </div>
                    </div>

                    <!-- Step 4: Plan Selection -->
                    <div id="step-4" class="step-content hidden">
                        <h2 class="text-xl font-semibold text-gray-900 mb-6">Choose Your Plan</h2>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                            <!-- Free Plan -->
                            <div class="plan-option">
                                <input type="radio" id="plan_free" name="plan" value="free" class="sr-only peer"
                                    checked>
                                <label for="plan_free" class="block h-full">
                                    <div class="plan-card border rounded-md p-4 h-full cursor-pointer">

                                        <div
                                            class="border rounded-md p-4 h-full cursor-pointer peer-checked:border-teal-500 peer-checked:ring-2 peer-checked:ring-teal-500">
                                            <div class="flex justify-between items-start">
                                                <div>
                                                    <h3 class="font-medium text-gray-900">Free</h3>
                                                    <p class="mt-1 text-sm text-gray-600">KES 0/month</p>
                                                </div>
                                            </div>
                                            <ul class="mt-4 space-y-2">
                                                <li class="flex items-start">
                                                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                    <span class="text-sm text-gray-600">Basic booking
                                                        functionality</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                    <span class="text-sm text-gray-600">1 staff member</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                    <span class="text-sm text-gray-600">Email support</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </label>
                            </div>

                            <!-- Pro Plan (Recommended) -->
                            <div class="plan-option recommended">
                                <input type="radio" id="plan_pro" name="plan" value="pro" class="sr-only peer"
                                    data-price="1999">
                                <label for="plan_pro" class="block h-full">
                                    <div class="plan-card border rounded-md p-4 h-full cursor-pointer">

                                        <div
                                            class="border rounded-md p-4 h-full cursor-pointer peer-checked:border-teal-500 peer-checked:ring-2 peer-checked:ring-teal-500">
                                            <div class="flex justify-between items-start">
                                                <div>
                                                    <h3 class="font-medium text-gray-900">Pro</h3>
                                                    <p class="mt-1 text-sm text-gray-600">KES 1,999/month</p>
                                                </div>
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-teal-100 text-teal-800">
                                                    Recommended
                                                </span>
                                            </div>
                                            <ul class="mt-4 space-y-2">
                                                <li class="flex items-start">
                                                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                    <span class="text-sm text-gray-600">Everything in Free</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                    <span class="text-sm text-gray-600">Up to 5 staff members</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                    <span class="text-sm text-gray-600">SMS notifications</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                    <span class="text-sm text-gray-600">Priority support</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </label>
                            </div>

                            <!-- Premium Plan -->
                            <div class="plan-option">
                                <input type="radio" id="plan_premium" name="plan" value="premium"
                                    class="sr-only peer" data-price="4999">
                                <label for="plan_premium" class="block h-full">
                                    <div class="plan-card border rounded-md p-4 h-full cursor-pointer">

                                        <div
                                            class="border rounded-md p-4 h-full cursor-pointer peer-checked:border-teal-500 peer-checked:ring-2 peer-checked:ring-teal-500">
                                            <div class="flex justify-between items-start">
                                                <div>
                                                    <h3 class="font-medium text-gray-900">Premium</h3>
                                                    <p class="mt-1 text-sm text-gray-600">KES 4,999/month</p>
                                                </div>
                                            </div>
                                            <ul class="mt-4 space-y-2">
                                                <li class="flex items-start">
                                                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                    <span class="text-sm text-gray-600">Everything in Pro</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                    <span class="text-sm text-gray-600">Unlimited staff members</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                    <span class="text-sm text-gray-600">Custom branding</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                    <span class="text-sm text-gray-600">Dedicated account
                                                        manager</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                    <span class="text-sm text-gray-600">Advanced analytics</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="mt-8 flex justify-between">
                            <button type="button"
                                class="prev-step-btn inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">
                                Back
                            </button>
                            <button type="button"
                                class="next-step-btn inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">
                                Next: Payment
                            </button>
                        </div>
                    </div>

                    <!-- Step 5: Payment -->
                    <div id="step-5" class="step-content hidden">
                        <h2 class="text-xl font-semibold text-gray-900 mb-6">Payment Information</h2>

                        <!-- Payment Method (shown only for paid plans) -->
                        <div id="paymentMethodSection">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Payment Method</h3>

                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <!-- M-Pesa Option -->
                                <div class="payment-option">
                                    <input type="radio" id="payment_mpesa" name="payment_method" value="mpesa"
                                        class="sr-only peer" checked>
                                    <label for="payment_mpesa" class="block h-full">
                                        <div class="payment-card border rounded-md p-4 h-full cursor-pointer">

                                            <div
                                                class="border rounded-md p-4 h-full cursor-pointer peer-checked:border-teal-500 peer-checked:ring-2 peer-checked:ring-teal-500">
                                                <div class="flex items-center">
                                                    <img src="{{ asset('assets/images/mpesa.png') }}" alt="M-Pesa"
                                                        alt="M-Pesa" class="h-8 mr-3">
                                                    <span class="font-medium">Pay via M-Pesa</span>
                                                </div>
                                                <p class="mt-2 text-sm text-gray-600">
                                                    You'll receive a payment request on your phone
                                                </p>
                                            </div>
                                        </div>
                                    </label>
                                </div>

                                <!-- Credit Card Option -->
                                <div class="payment-option opacity-50 cursor-not-allowed">
                                    <input type="radio" id="payment_stripe" name="payment_method" value="stripe"
                                        class="sr-only peer" disabled>
                                    <label for="payment_stripe" class="block h-full">
                                        <div class="payment-card border rounded-md p-4 h-full">
                                            <div class="flex items-center">
                                                <div class="flex space-x-2 mr-3">
                                                    <img src="{{ asset('assets/images/visa.png') }}" alt="Visa"
                                                        alt="Visa" class="h-5">
                                                    <img src="{{ asset('assets/images/mastercard.png') }}"
                                                        alt="Mastercard" class="h-5">
                                                </div>
                                                <span class="font-medium">Credit/Debit Card</span>
                                                <span
                                                    class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800">
                                                    Coming Soon
                                                </span>
                                            </div>
                                            <p class="mt-2 text-sm text-gray-600">
                                                Secure payment via Stripe
                                            </p>
                                        </div>
                                    </label>
                                </div>
                                {{-- <div class="payment-option">
                                    <input type="radio" id="payment_stripe" name="payment_method" value="stripe"
                                        class="sr-only peer">
                                    <label for="payment_stripe" class="block h-full">
                                        <div class="payment-card border rounded-md p-4 h-full cursor-pointer">

                                            <div
                                                class="border rounded-md p-4 h-full cursor-pointer peer-checked:border-teal-500 peer-checked:ring-2 peer-checked:ring-teal-500">
                                                <div class="flex items-center">
                                                    <div class="flex space-x-2 mr-3">
                                                        <img src="{{ asset('assets/images/visa.png') }}"
                                                            alt="Visa" alt="Visa" class="h-5">
                                                        <img src="{{ asset('assets/images/mastercard.png') }}"
                                                            alt="Mastercard" class="h-5">
                                                    </div>
                                                    <span class="font-medium">Credit/Debit Card</span>
                                                </div>
                                                <p class="mt-2 text-sm text-gray-600">
                                                    Secure payment via Stripe
                                                </p>
                                            </div>
                                        </div>
                                    </label>
                                </div> --}}
                            </div>

                            <!-- Phone Number for M-Pesa -->
                            <div id="paymentPhoneSection" class="mt-4">
                                <label for="payment_phone" class="block text-sm font-medium text-gray-700">
                                    Phone Number for Payment
                                    <span id="phoneRequired" class="text-red-600 hidden">*</span>
                                </label>
                                <div class="mt-1">
                                    <input id="payment_phone" name="payment_phone" type="tel"
                                        class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 sm:text-sm"
                                        placeholder="e.g. 0712345678" aria-describedby="payment_phone_error">
                                </div>
                                <p id="payment_phone_error" class="mt-2 text-sm text-red-600 hidden"></p>
                            </div>
                        </div>

                        <!-- Team Members -->
                        <div class="mt-8">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Team Members (Optional)</h3>

                            <div id="teamMembersContainer" class="space-y-4">
                                <!-- Team members will be added here dynamically -->
                            </div>

                            <button type="button" id="addTeamMemberBtn"
                                class="mt-4 inline-flex items-center px-3 py-1 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">
                                <svg class="-ml-0.5 mr-1 h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                                Add Team Member
                            </button>

                            <!-- Hidden input to send data -->
                            <input type="hidden" name="team_members" id="teamMembersData">
                        </div>

                        <!-- Terms and Conditions -->
                        <div class="mt-8 flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" name="terms" type="checkbox" required
                                    class="h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-300 rounded"
                                    aria-describedby="terms_error">
                            </div>
                            <div class="ml-3">
                                <label for="terms" class="block text-sm text-gray-900">
                                    I agree to the <a href="#" class="text-teal-600 hover:text-teal-500">Terms
                                        of Service</a> and <a href="#"
                                        class="text-teal-600 hover:text-teal-500">Privacy
                                        Policy</a>
                                </label>
                            </div>
                        </div>
                        <p id="terms_error" class="mt-2 text-sm text-red-600 hidden"></p>

                        <div class="mt-8 flex justify-between">
                            <button type="button"
                                class="prev-step-btn inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">
                                Back
                            </button>
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">
                                Complete Registration
                            </button>
                        </div>
                    </div>
                </form>

                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500">
                                Already have an account?
                            </span>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('login') }}"
                            class="w-full flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">
                            Sign in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        /* Custom styles for better mobile experience */
        .business-day {
            padding: 0.75rem;
            border-radius: 0.375rem;
            background-color: #f9fafb;
        }

        @media (max-width: 640px) {
            .business-day {
                padding: 0.5rem;
            }

            .plan-option {
                margin-bottom: 1rem;
            }
        }

        /* Recommended plan styling */
        .plan-option.recommended {
            position: relative;
        }

        .plan-option.recommended::before {
            content: "Recommended";
            position: absolute;
            top: -0.5rem;
            right: 1rem;
            background-color: #14B8A6;
            color: white;
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
        }

        .plan-option .plan-card {
            transition: all 0.2s ease;
            border: 2px solid transparent;
        }

        .plan-option input:checked+label .plan-card {
            border-color: #14B8A6;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
            background-color: #f8f9ff;
        }

        .plan-option.recommended input:checked+label .plan-card {
            border-color: #14B8A6;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.3);
        }

        .payment-option .payment-card {
            transition: all 0.2s ease;
            border: 2px solid transparent;
        }

        .payment-option input:checked+label .payment-card {
            border-color: #14B8A6;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
            background-color: #f8f9ff;
        }

        /* Step indicator hover effect */
        .step-indicator:hover span:first-child {
            border-color: #14B8A6;
        }

        .step-indicator:hover span:last-child {
            color: #14B8A6;
        }

        /* Form step transitions */
        .step-content {
            transition: opacity 0.3s ease;
        }

        .step-content:not(.active) {
            display: none;
        }

        /* Error state for form fields */
        .border-red-500 {
            border-color: #ef4444;
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const initialSelected = document.querySelector('input[name="payment_method"]:checked');
            if (initialSelected) {
                initialSelected.closest('.payment-option').classList.add('payment-selected');
            }
            // Multi-step form functionality
            const steps = document.querySelectorAll('.step-content');
            const stepIndicators = document.querySelectorAll('.step-indicator');
            const nextButtons = document.querySelectorAll('.next-step-btn');
            const prevButtons = document.querySelectorAll('.prev-step-btn');
            let currentStep = 1;

            // Initialize form
            function initializeForm() {
                showStep(currentStep);
                updateStepIndicators();
                setupEventListeners();
                setupTeamMembers();
            }

            // Show specific step
            function showStep(stepNumber) {
                steps.forEach(step => {
                    step.classList.add('hidden');
                    step.classList.remove('active');
                });

                const currentStepElement = document.getElementById(`step-${stepNumber}`);
                if (currentStepElement) {
                    currentStepElement.classList.remove('hidden');
                    currentStepElement.classList.add('active');
                }
            }

            // Update step indicators
            function updateStepIndicators() {
                stepIndicators.forEach((indicator, index) => {
                    const stepNumber = parseInt(indicator.getAttribute('data-step'));
                    const circle = indicator.querySelector('span:first-child');
                    const text = indicator.querySelector('span:last-child');

                    if (stepNumber < currentStep) {
                        // Completed step
                        circle.innerHTML = `<svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>`;
                        text.classList.remove('text-gray-500');
                        text.classList.add('text-teal-600');
                    } else if (stepNumber === currentStep) {
                        // Current step
                        circle.innerHTML = `<span class="text-teal-600">${stepNumber}</span>`;
                        circle.classList.remove('border-gray-300');
                        circle.classList.add('border-teal-600');
                        text.classList.remove('text-gray-500');
                        text.classList.add('text-teal-600');
                    } else {
                        // Future step
                        circle.innerHTML = `<span class="text-gray-500">${stepNumber}</span>`;
                        circle.classList.remove('border-teal-600');
                        circle.classList.add('border-gray-300');
                        text.classList.remove('text-teal-600');
                        text.classList.add('text-gray-500');
                    }
                });
            }

            // Validate current step before proceeding
            function validateStep(stepNumber) {
                let isValid = true;

                // Clear previous errors
                document.querySelectorAll('[id$="_error"]').forEach(el => {
                    el.classList.add('hidden');
                });

                // Validate required fields in current step
                const currentStepElement = document.getElementById(`step-${stepNumber}`);
                if (currentStepElement) {
                    const requiredFields = currentStepElement.querySelectorAll('[required]');

                    requiredFields.forEach(field => {
                        if (!field.value.trim()) {
                            const errorId = `${field.id}_error`;
                            const errorElement = document.getElementById(errorId);
                            if (errorElement) {
                                errorElement.textContent = 'This field is required';
                                errorElement.classList.remove('hidden');
                            }
                            field.classList.add('border-red-500');
                            isValid = false;

                            // Remove error on input
                            field.addEventListener('input', function() {
                                if (this.value.trim()) {
                                    this.classList.remove('border-red-500');
                                    const errorId = `${this.id}_error`;
                                    const errorElement = document.getElementById(errorId);
                                    if (errorElement) {
                                        errorElement.classList.add('hidden');
                                    }
                                }
                            });
                        }
                    });

                    // Additional validations for specific steps
                    if (stepNumber === 1) {
                        // Validate business URL format
                        const slugInput = document.getElementById('slug');
                        if (slugInput && !/^[a-z0-9-]+$/.test(slugInput.value)) {
                            document.getElementById('slug_error').textContent =
                                'URL can only contain lowercase letters, numbers, and hyphens';
                            document.getElementById('slug_error').classList.remove('hidden');
                            slugInput.classList.add('border-red-500');
                            isValid = false;
                        }
                    } else if (stepNumber === 3) {
                        // Validate email format
                        const emailField = document.getElementById('email');
                        if (emailField && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailField.value)) {
                            document.getElementById('email_error').textContent =
                                'Please enter a valid email address';
                            document.getElementById('email_error').classList.remove('hidden');
                            emailField.classList.add('border-red-500');
                            isValid = false;
                        }

                        // Validate password strength
                        const passwordField = document.getElementById('password');
                        if (passwordField && !/(?=.*\d)(?=.*[!@#$%^&*])/.test(passwordField.value)) {
                            document.getElementById('password_error').textContent =
                                'Password must contain at least one number and one special character';
                            document.getElementById('password_error').classList.remove('hidden');
                            passwordField.classList.add('border-red-500');
                            isValid = false;
                        }

                        // Validate password match
                        const confirmPasswordField = document.getElementById('password_confirmation');
                        if (passwordField && confirmPasswordField && passwordField.value !== confirmPasswordField
                            .value) {
                            document.getElementById('password_confirmation_error').textContent =
                                'Passwords do not match';
                            document.getElementById('password_confirmation_error').classList.remove('hidden');
                            confirmPasswordField.classList.add('border-red-500');
                            isValid = false;
                        }

                        // Validate phone number
                        const phoneField = document.getElementById('phone');
                        if (phoneField && !/^[0-9]{10,15}$/.test(phoneField.value)) {
                            document.getElementById('phone_error').textContent =
                                'Please enter a valid phone number';
                            document.getElementById('phone_error').classList.remove('hidden');
                            phoneField.classList.add('border-red-500');
                            isValid = false;
                        }
                    } else if (stepNumber === 5) {
                        // Validate payment phone if M-Pesa is selected
                        const paymentMethod = document.querySelector('input[name="payment_method"]:checked');
                        if (paymentMethod && paymentMethod.value === 'mpesa') {
                            const paymentPhoneField = document.getElementById('payment_phone');
                            if (paymentPhoneField && !/^[0-9]{10,15}$/.test(paymentPhoneField.value)) {
                                document.getElementById('payment_phone_error').textContent =
                                    'Please enter a valid phone number';
                                document.getElementById('payment_phone_error').classList.remove('hidden');
                                paymentPhoneField.classList.add('border-red-500');
                                isValid = false;
                            }
                        }

                        // Validate terms checkbox
                        const termsCheckbox = document.getElementById('terms');
                        if (termsCheckbox && !termsCheckbox.checked) {
                            document.getElementById('terms_error').textContent =
                                'You must agree to the terms and conditions';
                            document.getElementById('terms_error').classList.remove('hidden');
                            isValid = false;
                        }
                    }
                }

                return isValid;
            }

            // Setup event listeners
            function setupEventListeners() {
                // Next button click handler
                nextButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        if (validateStep(currentStep)) {
                            currentStep++;
                            showStep(currentStep);
                            updateStepIndicators();

                            // Scroll to top of form
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });
                        } else {
                            // Scroll to first error
                            const firstError = document.querySelector(
                                '[id$="_error"]:not(.hidden)');
                            if (firstError) {
                                firstError.scrollIntoView({
                                    behavior: 'smooth',
                                    block: 'center'
                                });
                            }
                        }
                    });
                });

                // Previous button click handler
                prevButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        currentStep--;
                        showStep(currentStep);
                        updateStepIndicators();

                        // Scroll to top of form
                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth'
                        });
                    });
                });

                // Step indicator click handler
                stepIndicators.forEach(indicator => {
                    indicator.addEventListener('click', function() {
                        const stepNumber = parseInt(this.getAttribute('data-step'));
                        if (stepNumber < currentStep) {
                            // Allow going back to previous steps
                            currentStep = stepNumber;
                            showStep(currentStep);
                            updateStepIndicators();

                            // Scroll to top of form
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });
                        }
                    });
                });

                // Plan selection handler
                const planOptions = document.querySelectorAll('input[name="plan"]');
                const paymentMethodSection = document.getElementById('paymentMethodSection');
                const paymentPhoneSection = document.getElementById('paymentPhoneSection');
                const paymentMethodOptions = document.querySelectorAll('input[name="payment_method"]');

                function handlePlanChange() {
                    const selectedPlan = document.querySelector('input[name="plan"]:checked');

                    if (selectedPlan && selectedPlan.value !== 'free') {
                        paymentMethodSection.classList.remove('hidden');
                        paymentPhoneSection.classList.toggle('hidden',
                            document.querySelector('input[name="payment_method"]:checked').value !== 'mpesa');
                    } else {
                        paymentMethodSection.classList.add('hidden');
                        paymentPhoneSection.classList.add('hidden');
                    }
                }

                function handlePaymentMethodChange() {
                    const selectedMethod = document.querySelector('input[name="payment_method"]:checked');
                    const paymentPhoneInput = document.getElementById('payment_phone');
                    const phoneRequiredIndicator = document.getElementById('phoneRequired');

                    if (!selectedMethod) return;

                    // Toggle visibility and requirement
                    const isMpesa = selectedMethod.value === 'mpesa';
                    paymentPhoneSection.classList.toggle('hidden', !isMpesa);

                    if (isMpesa) {
                        paymentPhoneInput.setAttribute('required', 'required');
                        phoneRequiredIndicator.classList.remove('hidden');
                    } else {
                        paymentPhoneInput.removeAttribute('required');
                        phoneRequiredIndicator.classList.add('hidden');
                        // Clear any existing error
                        document.getElementById('payment_phone_error').classList.add('hidden');
                        paymentPhoneInput.classList.remove('border-red-500');
                    }

                    // Update visual selection (from previous implementation)
                    document.querySelectorAll('.payment-option').forEach(option => {
                        const card = option.querySelector('.payment-card');
                        if (option.contains(selectedMethod)) {
                            card.classList.add('border-teal-600', 'ring-2', 'ring-teal-500');
                            card.classList.remove('border-gray-300');
                        } else {
                            card.classList.remove('border-teal-600', 'ring-2', 'ring-teal-500');
                            card.classList.add('border-gray-300');
                        }
                    });
                }
                planOptions.forEach(option => {
                    option.addEventListener('change', handlePlanChange);
                });

                paymentMethodOptions.forEach(option => {
                    option.addEventListener('change', handlePaymentMethodChange);
                });

                // Initialize based on default selected plan
                handlePlanChange();

                // Slug formatting
                const slugInput = document.getElementById('slug');
                if (slugInput) {
                    slugInput.addEventListener('input', function(e) {
                        let text = e.target.value.toLowerCase()
                            .replace(/[^a-z0-9-]/g, '-')
                            .replace(/-+/g, '-');
                        e.target.value = text;
                    });
                }
            }

            const planOptions = document.querySelectorAll('input[name="plan"]');
            const planPriceDisplay = document.getElementById('plan-price-display');

            planOptions.forEach(option => {
                option.addEventListener('change', function() {
                    // Update any dynamic price display if needed
                    if (planPriceDisplay) {
                        const price = this.dataset.price || '0';
                        planPriceDisplay.textContent = `KES ${price}/month`;
                    }
                });
            });

            // Team members management
            function setupTeamMembers() {
                const teamMembersContainer = document.getElementById('teamMembersContainer');
                const teamMembersData = document.getElementById('teamMembersData');
                const addTeamMemberBtn = document.getElementById('addTeamMemberBtn');

                let teamMembers = [];

                function addTeamMember(member = {
                    email: '',
                    role: 'staff'
                }) {
                    const index = teamMembers.length;
                    const memberId = `team_member_${index}`;

                    const memberElement = document.createElement('div');
                    memberElement.className =
                        'team-member flex flex-col sm:flex-row gap-2 items-start sm:items-end';
                    memberElement.dataset.index = index;

                    memberElement.innerHTML = `
                        <div class="flex-1 w-full">
                            <label for="${memberId}_email" class="sr-only">Email</label>
                            <input id="${memberId}_email" type="email" 
                                class="team-email block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 sm:text-sm" 
                                placeholder="team.member@example.com" value="${member.email}">
                        </div>
                        <div class="w-full sm:w-32">
                            <label for="${memberId}_role" class="sr-only">Role</label>
                            <select id="${memberId}_role" 
                                class="team-role block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 sm:text-sm">
                                <option value="staff" ${member.role === 'staff' ? 'selected' : ''}>Staff</option>
                                <option value="manager" ${member.role === 'manager' ? 'selected' : ''}>Manager</option>
                            </select>
                        </div>
                        <button type="button" class="remove-member-btn px-3 py-2 text-red-600 hover:text-red-900 text-sm">
                            Remove
                        </button>
                    `;

                    teamMembersContainer.appendChild(memberElement);
                    teamMembers.push({
                        email: member.email,
                        role: member.role
                    });
                    updateTeamMembersData();

                    // Add event listeners to new inputs
                    const emailInput = memberElement.querySelector('.team-email');
                    const roleSelect = memberElement.querySelector('.team-role');
                    const removeBtn = memberElement.querySelector('.remove-member-btn');

                    emailInput.addEventListener('change', function() {
                        teamMembers[index].email = this.value;
                        updateTeamMembersData();
                    });

                    roleSelect.addEventListener('change', function() {
                        teamMembers[index].role = this.value;
                        updateTeamMembersData();
                    });

                    removeBtn.addEventListener('click', function() {
                        teamMembers.splice(index, 1);
                        memberElement.remove();
                        // Re-index remaining members
                        document.querySelectorAll('.team-member').forEach((el, i) => {
                            el.dataset.index = i;
                        });
                        updateTeamMembersData();
                    });
                }

                function updateTeamMembersData() {
                    teamMembersData.value = JSON.stringify(teamMembers.filter(m => m.email));
                }

                addTeamMemberBtn.addEventListener('click', function() {
                    addTeamMember();
                });

                // Initialize with empty team member if none exists
                if (teamMembersData.value) {
                    try {
                        const existingMembers = JSON.parse(teamMembersData.value);
                        existingMembers.forEach(member => {
                            addTeamMember(member);
                        });
                    } catch (e) {
                        console.error('Error parsing team members data', e);
                    }
                } else {
                    // Start with one empty team member slot
                    addTeamMember();
                }
            }

            document.getElementById('businessRegistrationForm').addEventListener('submit', function(e) {
                const selectedMethod = document.querySelector('input[name="payment_method"]:checked');
                const paymentPhoneInput = document.getElementById('payment_phone');
                const phoneError = document.getElementById('payment_phone_error');

                if (selectedMethod?.value === 'mpesa' && !paymentPhoneInput.value.trim()) {
                    e.preventDefault();
                    phoneError.textContent = 'Phone number is required for M-Pesa payments';
                    phoneError.classList.remove('hidden');
                    paymentPhoneInput.classList.add('border-red-500');
                    paymentPhoneInput.focus();
                }
            });

            // Initialize the form
            initializeForm();
        });
    </script>
@endpush
