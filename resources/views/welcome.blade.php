@extends('layouts.app')

@section('title', 'Bookwise - Effortless Booking Management for Kenyan Businesses')

@section('content')
    <!-- 1. Hero Section -->
    <section class="bg-teal-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Effortless Booking Management for Kenyan
                        Businesses</h1>
                    <p class="text-xl text-gray-600 mb-8">Get more clients, reduce no-shows, and manage your schedule—all in
                        one place.</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/register"
                            class="bg-teal-600 hover:bg-teal-700 text-white px-6 py-3 rounded-md text-center font-medium shadow-sm">Start
                            Your Free Trial</a>
                        <a href="#demo-video"
                            class="border border-gray-300 bg-white hover:bg-gray-50 text-gray-700 px-6 py-3 rounded-md text-center font-medium flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M6.3 2.841A1.5 1.5 0 004 4.11v11.78a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                            </svg>
                            Watch Demo Video
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <img src="{{ asset('assets/images/dashboard.webp') }}" alt="Bookwise Dashboard"
                        class="rounded-lg shadow-xl border border-gray-200">
                    <div class="absolute -bottom-4 -right-4 bg-white p-2 rounded-lg shadow-md border border-gray-200">
                        <div class="flex items-center">
                            <img src="{{ asset('assets/images/mpesa.png') }}" alt="M-Pesa" class="h-8">
                            <span class="ml-2 text-sm font-medium">Payment Received</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Value Proposition -->
    <section id="features" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-teal-600 font-semibold tracking-wide uppercase">Features</h2>
                <p class="mt-2 text-3xl leading-8 font-bold tracking-tight text-gray-900">
                    Everything you need to grow your business
                </p>
                <p class="mt-4 text-gray-600">
                    Designed specifically for Kenyan service providers
                </p>
            </div>
            <div class="mt-10">
                <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- M-Pesa Integration -->
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-teal-100 rounded-md p-3">
                                    <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <h3 class="text-lg font-medium text-gray-900">M-Pesa Integration</h3>
                                </div>
                            </div>
                            <div class="mt-4">
                                <p class="text-sm text-gray-500">
                                    Accept M-Pesa payments automatically with instant confirmations. Clients receive STK
                                    Push prompts for seamless payments.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Smart Scheduling -->
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-teal-100 rounded-md p-3">
                                    <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <h3 class="text-lg font-medium text-gray-900">Smart Scheduling</h3>
                                </div>
                            </div>
                            <div class="mt-4">
                                <p class="text-sm text-gray-500">
                                    Clients book anytime via your personalized booking page. Set buffer times, staff
                                    assignments, and service durations.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Multi-Channel Alerts -->
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-teal-100 rounded-md p-3">
                                    <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <h3 class="text-lg font-medium text-gray-900">Multi-Channel Alerts</h3>
                                </div>
                            </div>
                            <div class="mt-4">
                                <p class="text-sm text-gray-500">
                                    Automated SMS and WhatsApp reminders reduce no-shows by up to 70%. Send confirmations,
                                    reminders, and follow-ups.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Industry-Specific Use Cases -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-teal-600 font-semibold tracking-wide uppercase">Trusted by Kenyan Businesses</h2>
                <p class="mt-2 text-3xl leading-8 font-bold tracking-tight text-gray-900">
                    Perfect for your industry
                </p>
                <p class="mt-4 text-gray-600">See how Bookwise works for different industries</p>
            </div>

            <div class="mt-10 grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Salons -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow">
                    <div class="px-6 py-8 sm:p-10">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-teal-100 rounded-md p-3">
                                ✂️
                            </div>
                            <h3 class="ml-5 text-lg font-medium text-gray-900">Salons & Barbers</h3>
                        </div>
                        <div class="mt-6">
                            <p class="text-sm text-gray-600">
                                Manage stylists, services, and bookings with color-coded calendars. Accept deposits via
                                M-Pesa to secure appointments.
                            </p>
                        </div>
                        <div class="mt-6">
                            <img class="rounded-lg" src="{{ asset('assets/images/salonbooking.svg') }}"
                                alt="Salon booking example">
                        </div>
                    </div>
                </div>

                <!-- Clinics -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow">
                    <div class="px-6 py-8 sm:p-10">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-teal-100 rounded-md p-3">
                                🏥
                            </div>
                            <h3 class="ml-5 text-lg font-medium text-gray-900">Clinics</h3>
                        </div>
                        <div class="mt-6">
                            <p class="text-sm text-gray-600">
                                HIPAA-compliant patient management with intake forms. Send SMS reminders for appointments
                                and prescription pickups.
                            </p>
                        </div>
                        <div class="mt-6">
                            <img class="rounded-lg" src="{{ asset('assets/images/clinicbooking.jpg') }}"
                                alt="Clinic booking example">
                        </div>
                    </div>
                </div>

                <!-- Fitness -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow">
                    <div class="px-6 py-8 sm:p-10">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-teal-100 rounded-md p-3">
                                💪
                            </div>
                            <h3 class="ml-5 text-lg font-medium text-gray-900">Fitness Trainers</h3>
                        </div>
                        <div class="mt-6">
                            <p class="text-sm text-gray-600">
                                Sell class packages, manage recurring sessions, and track attendance. Integrated with
                                WhatsApp for client communication.
                            </p>
                        </div>
                        <div class="mt-6">
                            <img class="rounded-lg" src="{{ asset('assets/images/gymbooking.webp') }}"
                                alt="Fitness booking example">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="py-12 bg-gradient-to-r from-teal-600 to-teal-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-teal-200 font-semibold tracking-wide uppercase">Success Stories</h2>
                <p class="mt-2 text-3xl leading-8 font-bold tracking-tight">
                    What Kenyan businesses say
                </p>
            </div>

            <div class="mt-10 grid grid-cols-1 gap-8 md:grid-cols-2">
                <div class="bg-white text-gray-800 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <img class="h-12 w-12 rounded-full" src="https://placehold.co/100x100" alt="Jane Muthoni">
                        <div class="ml-4">
                            <h3 class="text-lg font-medium">Jane Muthoni</h3>
                            <p class="text-teal-600">Nairobi Hair Studio</p>
                        </div>
                    </div>
                    <blockquote class="mt-4">
                        <p class="text-gray-600">
                            "Bookwise cut my no-shows by 70%! The M-Pesa integration means clients pay deposits upfront, and
                            the SMS reminders ensure they show up."
                        </p>
                    </blockquote>
                </div>

                <div class="bg-white text-gray-800 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <img class="h-12 w-12 rounded-full" src="https://placehold.co/100x100" alt="Dr. Omondi">
                        <div class="ml-4">
                            <h3 class="text-lg font-medium">Dr. Omondi</h3>
                            <p class="text-teal-600">Kisumu Medical Clinic</p>
                        </div>
                    </div>
                    <blockquote class="mt-4">
                        <p class="text-gray-600">
                            "Patients love booking online, and my receptionist spends 80% less time on the phone. The
                            WhatsApp reminders have been a game-changer."
                        </p>
                    </blockquote>
                </div>
            </div>

            <div class="mt-8 text-center">
                <div class="inline-flex items-center">
                    <span class="text-teal-200 mr-2">★ ★ ★ ★ ★</span>
                    <span class="font-medium">4.9/5 from 500+ businesses</span>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-2">Trusted by 500+ Kenyan Businesses</h2>
            <p class="text-center text-gray-600 mb-12">See how Bookwise works for different industries</p>

            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <!-- Salon -->
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                    <div class="flex items-center mb-4">
                        <div class="bg-teal-100 p-2 rounded-lg mr-4">
                            <span class="text-teal-600 text-xl">💇</span>
                        </div>
                        <h3 class="font-medium text-gray-900">Salons & Barbershops</h3>
                    </div>
                    <img src="{{ asset('assets/images/salonbooking.svg') }}" alt="Salon Booking"
                        class="rounded mb-4 border border-gray-200">
                    <p class="text-gray-600 mb-4">Manage multiple stylists, services, and payments in one place.</p>
                </div>

                <!-- Clinic -->
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                    <div class="flex items-center mb-4">
                        <div class="bg-teal-100 p-2 rounded-lg mr-4">
                            <span class="text-teal-600 text-xl">🏥</span>
                        </div>
                        <h3 class="font-medium text-gray-900">Clinics</h3>
                    </div>
                    <img src="{{ asset('assets/images/clinicbooking.jpg') }}" alt="Clinic Booking"
                        class="rounded mb-4 border border-gray-200">
                    <p class="text-gray-600 mb-4">HIPAA-compliant patient management with secure forms.</p>
                </div>

                <!-- Fitness -->
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                    <div class="flex items-center mb-4">
                        <div class="bg-teal-100 p-2 rounded-lg mr-4">
                            <span class="text-teal-600 text-xl">💪</span>
                        </div>
                        <h3 class="font-medium text-gray-900">Fitness Trainers</h3>
                    </div>
                    <img src="{{ asset('assets/images/gymbooking.webp') }}" alt="Fitness Booking"
                        class="rounded mb-4 border border-gray-200">
                    <p class="text-gray-600 mb-4">Embeddable booking widget for your website or social media.</p>
                </div>
            </div>

            <!-- Testimonial -->
            <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-sm border border-gray-200">
                <div class="flex items-start">
                    <img src="/images/testimonial-jane.jpg" alt="Jane Muthoni" class="h-16 w-16 rounded-full mr-6">
                    <div>
                        <p class="text-gray-600 italic mb-4">"Bookwise cut my no-shows by 70% and helped me grow my client
                            base without hiring extra staff!"</p>
                        <p class="font-medium text-gray-900">— Jane Muthoni, Nairobi Hair Studio</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- 4. How It Works -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">How Bookwise Works</h2>

            <div class="grid md:grid-cols-4 gap-8 mb-12">
                <!-- Step 1 -->
                <div class="text-center">
                    <div
                        class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-teal-100 text-teal-600 text-2xl font-bold mb-4">
                        1</div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Sign Up</h3>
                    <p class="text-gray-600">Create your business profile in 2 minutes.</p>
                </div>

                <!-- Step 2 -->
                <div class="text-center">
                    <div
                        class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-teal-100 text-teal-600 text-2xl font-bold mb-4">
                        2</div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Customize</h3>
                    <p class="text-gray-600">Set your services, prices, and availability.</p>
                </div>

                <!-- Step 3 -->
                <div class="text-center">
                    <div
                        class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-teal-100 text-teal-600 text-2xl font-bold mb-4">
                        3</div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Share</h3>
                    <p class="text-gray-600">Get a unique link (e.g., yourbusiness.bookwise.co.ke).</p>
                </div>

                <!-- Step 4 -->
                <div class="text-center">
                    <div
                        class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-teal-100 text-teal-600 text-2xl font-bold mb-4">
                        4</div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Grow</h3>
                    <p class="text-gray-600">Manage bookings, payments, and clients effortlessly.</p>
                </div>
            </div>

            {{-- <div class="max-w-4xl mx-auto bg-gray-100 rounded-lg overflow-hidden">
                <img src="/images/booking-flow.gif" alt="Bookwise Booking Flow" class="w-full">
            </div> --}}
        </div>
    </section>

    <!-- 6. Pricing Plans -->
    <section id="pricing" class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-teal-600 font-semibold tracking-wide uppercase">Pricing</h2>
                <p class="mt-2 text-3xl leading-8 font-bold tracking-tight text-gray-900">
                    Simple, transparent pricing
                </p>
                <p class="mt-4 max-w-2xl text-gray-600 lg:mx-auto">7-day free trial for Pro/Business plans</p>
            </div>

            <div class="mt-10 grid grid-cols-1 gap-8 md:grid-cols-3">
                <!-- Starter Plan -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="px-6 py-8 sm:p-10">
                        <h3 class="text-lg font-medium text-gray-900">Starter</h3>
                        <div class="mt-4 flex items-baseline">
                            <span class="text-3xl font-bold">Free</span>
                            <span class="ml-1 text-lg font-normal text-gray-600">/forever</span>
                        </div>
                        <p class="mt-4 text-sm text-gray-500">
                            Perfect for solo entrepreneurs
                        </p>
                        <div class="mt-6">
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="ml-2 text-sm text-gray-700">Basic booking calendar</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="ml-2 text-sm text-gray-700">Email notifications</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="ml-2 text-sm text-gray-700">1 staff account</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="px-6 py-4 bg-gray-50">
                        <a href="#cta"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-teal-600 hover:bg-teal-700">
                            Get Started
                        </a>
                    </div>
                </div>

                <!-- Pro Plan (Recommended) -->
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform scale-105 z-10 border-2 border-teal-500">
                    <div class="px-6 py-8 sm:p-10">
                        <div class="flex justify-between items-start">
                            <h3 class="text-lg font-medium text-gray-900">Professional</h3>
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-teal-100 text-teal-800">
                                Most Popular
                            </span>
                        </div>
                        <div class="mt-4 flex items-baseline">
                            <span class="text-3xl font-bold">2,999</span>
                            <span class="ml-1 text-lg font-normal text-gray-600">/month</span>
                        </div>
                        <p class="mt-4 text-sm text-gray-500">
                            Best for growing businesses
                        </p>
                        <div class="mt-6">
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="ml-2 text-sm text-gray-700">Everything in Starter</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="ml-2 text-sm text-gray-700">M-Pesa payments</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="ml-2 text-sm text-gray-700">SMS notifications</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="ml-2 text-sm text-gray-700">5 staff accounts</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="ml-2 text-sm text-gray-700">Basic reporting</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="px-6 py-4 bg-gray-50">
                        <a href="#cta"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-teal-600 hover:bg-teal-700">
                            7-Day Free Trial
                        </a>
                    </div>
                </div>

                <!-- Business Plan -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="px-6 py-8 sm:p-10">
                        <h3 class="text-lg font-medium text-gray-900">Business</h3>
                        <div class="mt-4 flex items-baseline">
                            <span class="text-3xl font-bold">5,999</span>
                            <span class="ml-1 text-lg font-normal text-gray-600">/month</span>
                        </div>
                        <p class="mt-4 text-sm text-gray-500">
                            For established businesses
                        </p>

                        <div class="mt-6">
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="ml-2 text-sm text-gray-700">Everything in Professional</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="ml-2 text-sm text-gray-700">WhatsApp integration</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="ml-2 text-sm text-gray-700">Custom branding</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="ml-2 text-sm text-gray-700">Unlimited staff</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="ml-2 text-sm text-gray-700">Advanced analytics</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4.586-4.586a2 2 0 012.828 0L16 13m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="ml-2 text-sm text-gray-700">Dedicated support</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="px-6 py-4 bg-gray-50">
                        <a href="#cta"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-teal-600 hover:bg-teal-700">
                            7-Day Free Trial
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-teal-600 font-semibold tracking-wide uppercase">FAQ</h2>
                <p class="mt-2 text-3xl leading-8 font-bold tracking-tight text-gray-900">
                    Frequently asked questions
                </p>
            </div>

            <div class="mt-10 max-w-3xl mx-auto">
                <dl class="space-y-6 divide-y divide-gray-200">
                    <!-- Question 1 -->
                    <div class="pt-6" x-data="{ open: false }">
                        <dt class="text-lg">
                            <button @click="open = !open"
                                class="text-left w-full flex justify-between items-start text-gray-400">
                                <span class="font-medium text-gray-900">How do M-Pesa payments work?</span>
                                <span class="ml-6 h-7 flex items-center">
                                    <svg class="h-6 w-6 transform" :class="{ '-rotate-180': open }" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd x-show="open" class="mt-2 pr-12" x-cloak>
                            <p class="text-base text-gray-500">
                                Clients receive an STK Push prompt on their phone to complete payment via M-Pesa. No need to
                                share till numbers—payments are automatically matched to bookings.
                            </p>
                        </dd>
                    </div>

                    <!-- Question 2 -->
                    <div class="pt-6" x-data="{ open: false }">
                        <dt class="text-lg">
                            <button @click="open = !open"
                                class="text-left w-full flex justify-between items-start text-gray-400">
                                <span class="font-medium text-gray-900">Can I use my own domain?</span>
                                <span class="ml-6 h-7 flex items-center">
                                    <svg class="h-6 w-6 transform" :class="{ '-rotate-180': open }" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd x-show="open" class="mt-2 pr-12" x-cloak>
                            <p class="text-base text-gray-500">
                                Yes! Business plan subscribers can connect custom domains (e.g., bookings.yourbusiness.com).
                                We'll guide you through the setup.
                            </p>
                        </dd>
                    </div>

                    <!-- Question 3 -->
                    <div class="pt-6" x-data="{ open: false }">
                        <dt class="text-lg">
                            <button @click="open = !open"
                                class="text-left w-full flex justify-between items-start text-gray-400">
                                <span class="font-medium text-gray-900">Is there a contract?</span>
                                <span class="ml-6 h-7 flex items-center">
                                    <svg class="h-6 w-6 transform" :class="{ '-rotate-180': open }" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd x-show="open" class="mt-2 pr-12" x-cloak>
                            <p class="text-base text-gray-500">
                                No—cancel anytime. We don't believe in locking you in. Downgrade to the free plan or pause
                                your subscription whenever you need.
                            </p>
                        </dd>
                    </div>

                    <!-- Question 4 -->
                    <div class="pt-6" x-data="{ open: false }">
                        <dt class="text-lg">
                            <button @click="open = !open"
                                class="text-left w-full flex justify-between items-start text-gray-400">
                                <span class="font-medium text-gray-900">How do SMS notifications work?</span>
                                <span class="ml-6 h-7 flex items-center">
                                    <svg class="h-6 w-6 transform" :class="{ '-rotate-180': open }" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd x-show="open" class="mt-2 pr-12" x-cloak>
                            <p class="text-base text-gray-500">
                                We partner with Safaricom to deliver reliable SMS notifications. Clients receive booking
                                confirmations, reminders 24 hours before appointments, and follow-ups—all automatically.
                            </p>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <!-- 7. Social Proof -->
    {{-- <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Trusted by Kenyan Businesses</h2>

            <div class="flex flex-wrap justify-center gap-8 mb-12">
                <img src="/images/safaricom-logo.png" alt="Safaricom" class="h-12 opacity-70 hover:opacity-100">
                <img src="/images/africas-talking-logo.png" alt="Africa's Talking"
                    class="h-12 opacity-70 hover:opacity-100">
                <img src="/images/nairobi-hair-studio-logo.png" alt="Nairobi Hair Studio"
                    class="h-12 opacity-70 hover:opacity-100">
                <img src="/images/kenya-medical-logo.png" alt="Kenya Medical" class="h-12 opacity-70 hover:opacity-100">
            </div>

            <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-8">
                <!-- Video Testimonial -->
                <div class="bg-gray-100 rounded-lg overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9">
                        <img src="/images/video-thumbnail.jpg" alt="Customer Testimonial" class="object-cover">
                    </div>
                    <div class="p-4">
                        <p class="font-medium text-gray-900">Watch how Salon Elite increased bookings by 40%</p>
                    </div>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 text-center">
                        <p class="text-3xl font-bold text-teal-600 mb-2">10,000+</p>
                        <p class="text-gray-600">Appointments monthly</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 text-center">
                        <p class="text-3xl font-bold text-teal-600 mb-2">98%</p>
                        <p class="text-gray-600">Uptime reliability</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 text-center">
                        <p class="text-3xl font-bold text-teal-600 mb-2">70%</p>
                        <p class="text-gray-600">Fewer no-shows</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 text-center">
                        <p class="text-3xl font-bold text-teal-600 mb-2">4.9/5</p>
                        <p class="text-gray-600">Customer satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- 9. Final CTA -->
    <section class="py-16 bg-gradient-to-r from-teal-600 to-teal-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Headline -->
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Ready to Transform Your Business?
            </h2>

            <!-- Subtext with better readability -->
            <p class="text-xl text-teal-50/90 mb-8 max-w-3xl mx-auto leading-relaxed">
                Join thousands of Kenyan businesses using Bookwise to save time and grow their client base.
            </p>

            <!-- Buttons container -->
            <div class="flex flex-col sm:flex-row justify-center gap-4 max-w-md mx-auto sm:max-w-none">
                <!-- Primary CTA -->
                <a href="/register"
                    class="bg-white hover:bg-gray-50 text-teal-700 px-6 py-3 rounded-md text-center font-medium shadow-lg hover:shadow-xl transition-all duration-200 transform hover:-translate-y-0.5">
                    Get Started—Free Forever Plan
                </a>

                <!-- Secondary CTA (WhatsApp) -->
                <a href="https://wa.me/254700000000"
                    class="border-2 border-white/80 text-white hover:bg-white/10 px-6 py-3 rounded-md text-center font-medium flex items-center justify-center gap-2 transition-colors duration-150">
                    <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                    </svg>
                    <span>Talk to Sales <span class="hidden sm:inline">(WhatsApp +254 700 000000)</span></span>
                </a>
            </div>
        </div>
    </section>

    <!-- Demo Video Modal -->
    <div id="demo-video" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-75 hidden">
        <div class="relative w-full max-w-4xl mx-4">
            <button class="absolute -top-10 right-0 text-white hover:text-gray-300">
                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div class="aspect-w-16 aspect-h-9">

                <iframe class="w-full h-full"
                    src="https://www.youtube.com/embed/LA2jgtAn4Sc?list=PL1TrjkMQ8UbWRZ4tv4GW_KwbyavOxt6bc"
                    title="#1: Config Cache | 🚀 Quick Laravel Performance Tips 🚀" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Demo video modal toggle
        document.addEventListener('DOMContentLoaded', function() {
            const demoVideoLinks = document.querySelectorAll('a[href="#demo-video"]');
            const demoVideoModal = document.getElementById('demo-video');
            const closeModal = demoVideoModal.querySelector('button');

            demoVideoLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    demoVideoModal.classList.remove('hidden');
                });
            });

            closeModal.addEventListener('click', function() {
                demoVideoModal.classList.add('hidden');
            });
        });
    </script>
@endpush
