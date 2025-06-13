@extends('layouts.app')

@section('title', 'Bookwise Blog - Tips & Insights for Kenyan Businesses')

@section('content')
    <!-- Hero Section -->
    <section class="bg-teal-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Bookwise Blog</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Tips, insights, and success stories to help Kenyan
                    businesses thrive</p>
            </div>
        </div>
    </section>

    <!-- Featured Post -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-sm border border-gray-200">
                <div class="grid md:grid-cols-2">
                    <div class="p-8 md:p-12">
                        <span
                            class="inline-block px-3 py-1 text-sm font-medium bg-teal-100 text-teal-800 rounded-full mb-4">Featured</span>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">How Kenyan Salons Are Reducing No-Shows by 70%
                        </h2>
                        <p class="text-gray-600 mb-6">Discover the strategies top salons in Nairobi are using to minimize
                            missed appointments and maximize revenue.</p>
                        <div class="flex items-center">
                            <img class="h-10 w-10 rounded-full mr-3" src="https://placehold.co/100x100" alt="Author">
                            <div>
                                <p class="text-sm font-medium text-gray-900">Jane Muthoni</p>
                                <p class="text-sm text-gray-500">May 15, 2023 · 8 min read</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/featured-blog-post.jpg') }}" alt="Featured blog post"
                            class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Posts -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-teal-600 font-semibold tracking-wide uppercase">Latest Articles</h2>
                <p class="mt-2 text-3xl leading-8 font-bold tracking-tight text-gray-900">
                    Insights for Your Business
                </p>
            </div>

            <div class="mt-10 grid md:grid-cols-3 gap-8">
                <!-- Post 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200">
                    <img src="{{ asset('assets/images/blog-post-1.jpg') }}" alt="Blog post"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <span>May 10, 2023</span>
                            <span class="mx-2">•</span>
                            <span>6 min read</span>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900 mb-3">5 Ways to Optimize Your Booking Page for More
                            Conversions</h3>
                        <p class="text-gray-600 mb-4">Small changes to your booking page can lead to significantly more
                            appointments. Here's what works for Kenyan businesses.</p>
                        <a href="#" class="text-teal-600 hover:text-teal-700 font-medium">Read more →</a>
                    </div>
                </div>

                <!-- Post 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200">
                    <img src="{{ asset('assets/images/blog-post-2.jpg') }}" alt="Blog post"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <span>April 28, 2023</span>
                            <span class="mx-2">•</span>
                            <span>5 min read</span>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900 mb-3">The Complete Guide to M-Pesa Payment Integration
                            for Service Businesses</h3>
                        <p class="text-gray-600 mb-4">Everything you need to know about accepting M-Pesa payments through
                            Bookwise, from setup to reconciliation.</p>
                        <a href="#" class="text-teal-600 hover:text-teal-700 font-medium">Read more →</a>
                    </div>
                </div>

                <!-- Post 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200">
                    <img src="{{ asset('assets/images/blog-post-3.jpg') }}" alt="Blog post"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <span>April 15, 2023</span>
                            <span class="mx-2">•</span>
                            <span>7 min read</span>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900 mb-3">Client Retention Strategies That Work in Kenya's
                            Competitive Market</h3>
                        <p class="text-gray-600 mb-4">How top service providers are using Bookwise features to keep clients
                            coming back and increase lifetime value.</p>
                        <a href="#" class="text-teal-600 hover:text-teal-700 font-medium">Read more →</a>
                    </div>
                </div>

                <!-- Post 4 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200">
                    <img src="{{ asset('assets/images/blog-post-4.jpg') }}" alt="Blog post"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <span>April 5, 2023</span>
                            <span class="mx-2">•</span>
                            <span>4 min read</span>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900 mb-3">WhatsApp Business Integration: How to Automate
                            Client Communication</h3>
                        <p class="text-gray-600 mb-4">Step-by-step guide to setting up WhatsApp notifications and messages
                            through Bookwise.</p>
                        <a href="#" class="text-teal-600 hover:text-teal-700 font-medium">Read more →</a>
                    </div>
                </div>

                <!-- Post 5 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200">
                    <img src="{{ asset('assets/images/blog-post-5.jpg') }}" alt="Blog post"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <span>March 22, 2023</span>
                            <span class="mx-2">•</span>
                            <span>9 min read</span>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900 mb-3">Case Study: How Nairobi Hair Studio Increased
                            Revenue by 40% with Bookwise</h3>
                        <p class="text-gray-600 mb-4">The exact strategies this salon used to grow their client base and
                            optimize their scheduling.</p>
                        <a href="#" class="text-teal-600 hover:text-teal-700 font-medium">Read more →</a>
                    </div>
                </div>

                <!-- Post 6 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200">
                    <img src="{{ asset('assets/images/blog-post-6.jpg') }}" alt="Blog post"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <span>March 10, 2023</span>
                            <span class="mx-2">•</span>
                            <span>5 min read</span>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900 mb-3">Seasonal Business? How to Manage Fluctuating
                            Demand with Smart Scheduling</h3>
                        <p class="text-gray-600 mb-4">Adjust your availability and pricing based on demand patterns to
                            maximize profits year-round.</p>
                        <a href="#" class="text-teal-600 hover:text-teal-700 font-medium">Read more →</a>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="#"
                    class="inline-block bg-teal-600 hover:bg-teal-700 text-white px-6 py-3 rounded-md font-medium">Load
                    More Articles</a>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-teal-600 font-semibold tracking-wide uppercase">Browse by Category</h2>
                <p class="mt-2 text-3xl leading-8 font-bold tracking-tight text-gray-900">
                    Explore Topics That Matter to You
                </p>
            </div>

            <div class="mt-10 grid md:grid-cols-4 gap-6">
                <!-- Category 1 -->
                <a href="#"
                    class="bg-gray-50 p-6 rounded-lg border border-gray-200 hover:border-teal-300 hover:shadow-sm transition-all duration-200">
                    <div class="flex items-center">
                        <div class="bg-teal-100 p-2 rounded-md mr-4">
                            <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">Payments</h3>
                    </div>
                    <p class="mt-3 text-sm text-gray-600">M-Pesa, pricing strategies, and revenue optimization</p>
                </a>

                <!-- Category 2 -->
                <a href="#"
                    class="bg-gray-50 p-6 rounded-lg border border-gray-200 hover:border-teal-300 hover:shadow-sm transition-all duration-200">
                    <div class="flex items-center">
                        <div class="bg-teal-100 p-2 rounded-md mr-4">
                            <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">Team Management</h3>
                    </div>
                    <p class="mt-3 text-sm text-gray-600">Staff scheduling, permissions, and collaboration</p>
                </a>

                <!-- Category 3 -->
                <a href="#"
                    class="bg-gray-50 p-6 rounded-lg border border-gray-200 hover:border-teal-300 hover:shadow-sm transition-all duration-200">
                    <div class="flex items-center">
                        <div class="bg-teal-100 p-2 rounded-md mr-4">
                            <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">Client Communication</h3>
                    </div>
                    <p class="mt-3 text-sm text-gray-600">SMS, WhatsApp, email, and follow-up strategies</p>
                </a>

                <!-- Category 4 -->
                <a href="#"
                    class="bg-gray-50 p-6 rounded-lg border border-gray-200 hover:border-teal-300 hover:shadow-sm transition-all duration-200">
                    <div class="flex items-center">
                        <div class="bg-teal-100 p-2 rounded-md mr-4">
                            <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">Analytics</h3>
                    </div>
                    <p class="mt-3 text-sm text-gray-600">Reports, metrics, and business insights</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-16 bg-teal-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-4">Get the Latest Tips Straight to Your Inbox</h2>
                    <p class="text-xl text-teal-100 mb-6">Subscribe to our newsletter for monthly insights on growing your
                        Kenyan service business.</p>
                    <ul class="space-y-3 text-teal-100">
                        <li class="flex items-start"><span class="text-teal-300 mr-2">✓</span> Exclusive content not on
                            the blog</li>
                        <li class="flex items-start"><span class="text-teal-300 mr-2">✓</span> Early access to new
                            features</li>
                        <li class="flex items-start"><span class="text-teal-300 mr-2">✓</span> Special offers for
                            subscribers</li>
                    </ul>
                </div>
                <div>
                    <form class="space-y-4">
                        <div>
                            <label for="name" class="sr-only">Name</label>
                            <input type="text" id="name" placeholder="Your name"
                                class="w-full px-4 py-3 rounded-md border border-teal-500 focus:ring-2 focus:ring-white focus:border-white bg-teal-600 placeholder-teal-300 text-white">
                        </div>
                        <div>
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" id="email" placeholder="Email address"
                                class="w-full px-4 py-3 rounded-md border border-teal-500 focus:ring-2 focus:ring-white focus:border-white bg-teal-600 placeholder-teal-300 text-white">
                        </div>
                        <div>
                            <button type="submit"
                                class="w-full bg-white hover:bg-gray-100 text-teal-700 px-6 py-3 rounded-md text-center font-medium shadow-sm">Subscribe</button>
                        </div>
                    </form>
                    <p class="mt-3 text-sm text-teal-200">We respect your privacy. Unsubscribe at any time.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
