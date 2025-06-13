@extends('layouts.app')

@section('title', 'About Bookwise - Effortless Booking Management for Kenyan Businesses')

@section('content')
    <!-- Hero Section -->
    <section class="bg-teal-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">About Bookwise</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Empowering Kenyan businesses with smart booking solutions
                    since 2022</p>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Story</h2>
                    <p class="text-gray-600 mb-4">Bookwise was founded in Nairobi by a team of entrepreneurs who saw
                        firsthand the challenges Kenyan service providers face in managing appointments. Salons were losing
                        clients to no-shows, clinics were overwhelmed with phone bookings, and fitness trainers struggled
                        with manual scheduling.</p>
                    <p class="text-gray-600 mb-4">We built Bookwise to solve these problems with a solution tailored for the
                        Kenyan market—M-Pesa integration, SMS/WhatsApp notifications, and a simple interface that works even
                        on low-bandwidth connections.</p>
                    <p class="text-gray-600">Today, we serve over 1,500 businesses across Kenya, from individual consultants
                        to multi-location enterprises.</p>
                </div>
                <div class="relative">
                    <img src="{{ asset('assets/images/business-meeting.jpg') }}" alt="Bookwise team meeting"
                        class="rounded-lg shadow-xl border border-gray-200">
                    <div class="absolute -bottom-4 -right-4 bg-white p-4 rounded-lg shadow-md border border-gray-200">
                        <p class="text-teal-600 font-medium">1,500+ Kenyan Businesses</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Values -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Our Mission & Values</h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">What drives us every day</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Mission -->
                <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-200">
                    <div class="bg-teal-100 p-3 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Our Mission</h3>
                    <p class="text-gray-600">To empower Kenyan entrepreneurs with tools that simplify operations, reduce
                        no-shows, and help them grow their businesses sustainably.</p>
                </div>

                <!-- Vision -->
                <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-200">
                    <div class="bg-teal-100 p-3 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Our Vision</h3>
                    <p class="text-gray-600">To become the leading booking platform in East Africa by providing
                        locally-relevant solutions that bridge the digital divide.</p>
                </div>

                <!-- Values -->
                <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-200">
                    <div class="bg-teal-100 p-3 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Our Values</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-start"><span class="text-teal-500 mr-2">✓</span> Customer-first approach</li>
                        <li class="flex items-start"><span class="text-teal-500 mr-2">✓</span> Local context matters</li>
                        <li class="flex items-start"><span class="text-teal-500 mr-2">✓</span> Simplicity in design</li>
                        <li class="flex items-start"><span class="text-teal-500 mr-2">✓</span> Reliable service</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    {{-- <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Meet The Team</h2>
                <p class="text-gray-600 mt-4">The passionate people behind Bookwise</p>
            </div>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200">
                    <img src="{{ asset('assets/images/team-member-1.jpg') }}" alt="James Kariuki"
                        class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900">James Kariuki</h3>
                        <p class="text-teal-600 font-medium">CEO & Founder</p>
                        <p class="text-gray-600 mt-2">Former salon owner who experienced the booking challenges firsthand.
                        </p>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200">
                    <img src="{{ asset('assets/images/team-member-2.jpg') }}" alt="Wanjiru Mwangi"
                        class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900">Wanjiru Mwangi</h3>
                        <p class="text-teal-600 font-medium">CTO</p>
                        <p class="text-gray-600 mt-2">Software engineer with 10+ years experience building African tech
                            solutions.</p>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200">
                    <img src="{{ asset('assets/images/team-member-3.jpg') }}" alt="David Ochieng"
                        class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900">David Ochieng</h3>
                        <p class="text-teal-600 font-medium">Head of Customer Success</p>
                        <p class="text-gray-600 mt-2">Ensures every Bookwise customer gets maximum value from our platform.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- CTA -->
    <section class="py-16 bg-gradient-to-r from-teal-600 to-teal-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

            <h2 class="text-3xl font-bold text-white mb-6">Ready to grow your business with Bookwise?</h2>
            <p class="text-xl text-teal-50/90 mb-8 max-w-3xl mx-auto">Join thousands of Kenyan service providers who trust
                Bookwise for their booking needs.</p>
            <a href="/register"
                class="bg-white hover:bg-gray-100 text-teal-700 px-6 py-3 rounded-md text-center font-medium shadow-sm inline-block">Start
                Your Free Trial</a>
        </div>
    </section>
@endsection
