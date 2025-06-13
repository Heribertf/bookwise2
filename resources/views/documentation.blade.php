@extends('layouts.app')

@section('title', 'Bookwise Documentation - Guides & Tutorials')

@section('content')
    <!-- Hero Section -->
    <section class="bg-teal-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Bookwise Documentation</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Guides, tutorials, and resources to help you get the most
                    from Bookwise</p>
                <div class="mt-8 max-w-md mx-auto">
                    <div class="relative">
                        <input type="text" placeholder="Search documentation..."
                            class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-teal-500 focus:border-teal-500">
                        <button class="absolute right-3 top-3 text-gray-400 hover:text-gray-500">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Documentation Categories -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <!-- Getting Started -->
                <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                    <div class="flex items-center mb-4">
                        <div class="bg-teal-100 p-2 rounded-md mr-4">
                            <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">Getting Started</h3>
                    </div>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-teal-600">Creating Your Account</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-teal-600">Setting Up Your Services</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-teal-600">Customizing Your Booking Page</a>
                        </li>
                        <li><a href="#" class="text-gray-600 hover:text-teal-600">Inviting Team Members</a></li>
                    </ul>
                    <div class="mt-4">
                        <a href="#" class="text-teal-600 hover:text-teal-700 text-sm font-medium">View all guides
                            →</a>
                    </div>
                </div>

                <!-- Booking Management -->
                <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                    <div class="flex items-center mb-4">
                        <div class="bg-teal-100 p-2 rounded-md mr-4">
                            <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">Booking Management</h3>
                    </div>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-teal-600">Managing Appointments</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-teal-600">Setting Up Availability</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-teal-600">Buffer Times & Preparation</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-teal-600">Group Appointments</a></li>
                    </ul>
                    <div class="mt-4">
                        <a href="#" class="text-teal-600 hover:text-teal-700 text-sm font-medium">View all guides
                            →</a>
                    </div>
                </div>

                <!-- Payments -->
                <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                    <div class="flex items-center mb-4">
                        <div class="bg-teal-100 p-2 rounded-md mr-4">
                            <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">Payments</h3>
                    </div>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-teal-600">M-Pesa Integration</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-teal-600">Setting Up Deposits</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-teal-600">Processing Refunds</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-teal-600">Payment Reports</a></li>
                    </ul>
                    <div class="mt-4">
                        <a href="#" class="text-teal-600 hover:text-teal-700 text-sm font-medium">View all guides
                            →</a>
                    </div>
                </div>

                <!-- Integrations -->
                <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                    <div class="flex items-center mb-4">
                        <div class="bg-teal-100 p-2 rounded-md mr-4">
                            <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">Integrations</h3>
                    </div>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-teal-600">Google Calendar Sync</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-teal-600">WhatsApp Notifications</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-teal-600">Zapier Automation</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-teal-600">Custom API</a></li>
                    </ul>
                    <div class="mt-4">
                        <a href="/integrations" class="text-teal-600 hover:text-teal-700 text-sm font-medium">View all
                            integrations →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Articles -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-teal-600 font-semibold tracking-wide uppercase">Help Center</h2>
                <p class="mt-2 text-3xl leading-8 font-bold tracking-tight text-gray-900">
                    Popular Help Articles
                </p>
                <p class="mt-4 max-w-2xl text-gray-600 lg:mx-auto">
                    Solutions to common questions and issues
                </p>
            </div>

            <div class="mt-10">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Article 1 -->
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900 mb-3">How to Set Up M-Pesa Payments</h3>
                        <p class="text-gray-600 mb-4">Step-by-step guide to connecting your M-Pesa till number or paybill
                            to accept payments through Bookwise.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">5 min read</span>
                            <a href="#" class="text-teal-600 hover:text-teal-700 text-sm font-medium">Read article
                                →</a>
                        </div>
                    </div>

                    <!-- Article 2 -->
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900 mb-3">Reducing No-Shows with Automated Reminders</h3>
                        <p class="text-gray-600 mb-4">Best practices for configuring SMS and WhatsApp reminders to minimize
                            missed appointments.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">4 min read</span>
                            <a href="#" class="text-teal-600 hover:text-teal-700 text-sm font-medium">Read article
                                →</a>
                        </div>
                    </div>

                    <!-- Article 3 -->
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900 mb-3">Managing Multiple Staff Members</h3>
                        <p class="text-gray-600 mb-4">How to set up and assign services to different team members with
                            individual schedules.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">7 min read</span>
                            <a href="#" class="text-teal-600 hover:text-teal-700 text-sm font-medium">Read article
                                →</a>
                        </div>
                    </div>

                    <!-- Article 4 -->
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900 mb-3">Embedding Booking on Your Website</h3>
                        <p class="text-gray-600 mb-4">Different ways to add your Bookwise booking page to your existing
                            website.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">6 min read</span>
                            <a href="#" class="text-teal-600 hover:text-teal-700 text-sm font-medium">Read article
                                →</a>
                        </div>
                    </div>
                </div>

                <div class="mt-8 text-center">
                    <a href="#" class="text-teal-600 hover:text-teal-700 font-medium">View all help articles →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Tutorials -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-teal-600 font-semibold tracking-wide uppercase">Video Tutorials</h2>
                <p class="mt-2 text-3xl leading-8 font-bold tracking-tight text-gray-900">
                    Watch and Learn
                </p>
                <p class="mt-4 max-w-2xl text-gray-600 lg:mx-auto">
                    Visual guides to help you master Bookwise
                </p>
            </div>

            <div class="mt-10 grid md:grid-cols-3 gap-8">
                <!-- Video 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200">
                    <div class="aspect-w-16 aspect-h-9 bg-gray-200">
                        <img src="{{ asset('assets/images/video-thumbnail-1.jpg') }}" alt="Video thumbnail"
                            class="object-cover">
                        <button class="absolute inset-0 flex items-center justify-center">
                            <svg class="h-16 w-16 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Getting Started with Bookwise</h3>
                        <p class="text-gray-600 text-sm">5:24 min</p>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200">
                    <div class="aspect-w-16 aspect-h-9 bg-gray-200">
                        <img src="{{ asset('assets/images/video-thumbnail-2.jpg') }}" alt="Video thumbnail"
                            class="object-cover">
                        <button class="absolute inset-0 flex items-center justify-center">
                            <svg class="h-16 w-16 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Setting Up Your Services</h3>
                        <p class="text-gray-600 text-sm">7:41 min</p>
                    </div>
                </div>

                <!-- Video 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200">
                    <div class="aspect-w-16 aspect-h-9 bg-gray-200">
                        <img src="{{ asset('assets/images/video-thumbnail-3.jpg') }}" alt="Video thumbnail"
                            class="object-cover">
                        <button class="absolute inset-0 flex items-center justify-center">
                            <svg class="h-16 w-16 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Managing Client Bookings</h3>
                        <p class="text-gray-600 text-sm">6:15 min</p>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="#" class="text-teal-600 hover:text-teal-700 font-medium">View all video tutorials →</a>
            </div>
        </div>
    </section>

    <!-- Support -->
    <section class="py-16 bg-teal-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-6">Still Need Help?</h2>
            <p class="text-xl text-teal-100 mb-8 max-w-3xl mx-auto">Our support team is ready to assist you with any
                questions.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/contact"
                    class="bg-white hover:bg-gray-100 text-teal-700 px-6 py-3 rounded-md text-center font-medium shadow-sm">Contact
                    Support</a>
                <a href="https://wa.me/254700000000"
                    class="border-2 border-white text-white hover:bg-teal-800 px-6 py-3 rounded-md text-center font-medium flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                    </svg>
                    Chat on WhatsApp
                </a>
            </div>
        </div>
    </section>
@endsection
