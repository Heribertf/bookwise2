@extends('layouts.app')

@section('title', 'Bookwise Features - Powerful Booking Tools for Kenyan Businesses')

@section('content')
    <!-- Hero Section -->
    <section class="bg-teal-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Powerful Features Designed for Kenyan
                    Businesses</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Everything you need to manage bookings, reduce no-shows,
                    and grow your client base</p>
            </div>
        </div>
    </section>

    <!-- Main Features -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-teal-600 font-semibold tracking-wide uppercase">Core Features</h2>
                <p class="mt-2 text-3xl leading-8 font-bold tracking-tight text-gray-900">
                    Streamline Your Booking Process
                </p>
                <p class="mt-4 max-w-2xl text-gray-600 lg:mx-auto">
                    Tools that save you time and help you focus on your clients
                </p>
            </div>

            <div class="mt-10">
                <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <!-- Online Booking -->
                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="ml-16">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">24/7 Online Booking</h3>
                            <p class="mt-2 text-gray-600">
                                Your clients can book anytime from your personalized booking page. Set your availability and
                                let the system handle the rest.
                            </p>
                        </div>
                    </div>

                    <!-- M-Pesa Integration -->
                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-16">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">M-Pesa Integration</h3>
                            <p class="mt-2 text-gray-600">
                                Accept payments via M-Pesa with automatic confirmations. Clients receive STK Push prompts
                                for seamless payments.
                            </p>
                        </div>
                    </div>

                    <!-- Calendar Sync -->
                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <div class="ml-16">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Calendar Sync</h3>
                            <p class="mt-2 text-gray-600">
                                Sync with Google Calendar, Outlook, or Apple Calendar to manage all your appointments in one
                                place.
                            </p>
                        </div>
                    </div>

                    <!-- Automated Reminders -->
                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-16">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Automated Reminders</h3>
                            <p class="mt-2 text-gray-600">
                                Reduce no-shows by up to 70% with SMS and WhatsApp reminders sent 24 hours before
                                appointments.
                            </p>
                        </div>
                    </div>

                    <!-- Team Management -->
                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div class="ml-16">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Team Management</h3>
                            <p class="mt-2 text-gray-600">
                                Assign staff to specific services, set individual schedules, and manage permissions.
                            </p>
                        </div>
                    </div>

                    <!-- Reporting -->
                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <div class="ml-16">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Business Reporting</h3>
                            <p class="mt-2 text-gray-600">
                                Track revenue, client retention, and staff performance with easy-to-understand reports.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Highlights -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-teal-600 font-semibold tracking-wide uppercase">Specialized Tools</h2>
                <p class="mt-2 text-3xl leading-8 font-bold tracking-tight text-gray-900">
                    Features Tailored for Your Industry
                </p>
            </div>

            <div class="mt-10">
                <!-- Tabs -->
                <div class="border-b border-gray-200">
                    <nav class="-mb-px flex space-x-8 overflow-x-auto">
                        <button
                            class="border-b-2 border-teal-500 whitespace-nowrap py-4 px-1 text-sm font-medium text-teal-600">
                            Salons & Barbers
                        </button>
                        <button
                            class="border-b-2 border-transparent whitespace-nowrap py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                            Clinics
                        </button>
                        <button
                            class="border-b-2 border-transparent whitespace-nowrap py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                            Fitness
                        </button>
                        <button
                            class="border-b-2 border-transparent whitespace-nowrap py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                            Consultants
                        </button>
                        <button
                            class="border-b-2 border-transparent whitespace-nowrap py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                            Spas
                        </button>
                    </nav>
                </div>

                <!-- Tab Content -->
                <div class="py-8">
                    <div class="grid md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Specialized Features for Salons & Barbers
                            </h3>
                            <ul class="space-y-4 text-gray-600">
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-teal-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 16h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                    <span>Color-coded stylist calendars for easy visualization</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-teal-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 16h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                    <span>Service duration and buffer time settings between appointments</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-teal-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 16h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                    <span>Product inventory tracking linked to services</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-teal-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 16h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                    <span>Client preference notes (hair type, color formulas, etc.)</span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <img src="{{ asset('assets/images/salon-features.jpg') }}" alt="Salon features"
                                class="rounded-lg shadow-md border border-gray-200">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-teal-600 font-semibold tracking-wide uppercase">Plans</h2>
                <p class="mt-2 text-3xl leading-8 font-bold tracking-tight text-gray-900">
                    Feature Comparison
                </p>
                <p class="mt-4 max-w-2xl text-gray-600 lg:mx-auto">
                    Choose the plan that fits your business needs
                </p>
            </div>

            <div class="mt-10">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Feature
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Starter
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Professional
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Business
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    Online Booking Page
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <svg class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 16h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <svg class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 16h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <svg class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 16h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    M-Pesa Payments
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <svg class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 16h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <svg class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 16h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    SMS Reminders
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <svg class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 16h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <svg class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 16h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    WhatsApp Integration
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <svg class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 16h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    Staff Accounts
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    1
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    5
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Unlimited
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-6 text-center">
                    <a href="/pricing" class="text-teal-600 hover:text-teal-700 font-medium">See full pricing details
                        →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-teal-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Try Bookwise?</h2>
            <p class="text-xl text-teal-100 mb-8 max-w-3xl mx-auto">Join thousands of Kenyan businesses using Bookwise to
                streamline their booking process.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/register"
                    class="bg-white hover:bg-gray-100 text-teal-700 px-6 py-3 rounded-md text-center font-medium shadow-sm">Start
                    Free Trial</a>
                <a href="/demo"
                    class="border-2 border-white text-white hover:bg-teal-800 px-6 py-3 rounded-md text-center font-medium">Request
                    a Demo</a>
            </div>
        </div>
    </section>
@endsection
