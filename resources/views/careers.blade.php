@extends('layouts.app')

@section('title', 'Careers at Bookwise - Join Our Team')

@section('content')
    <!-- Hero Section -->
    <section class="bg-teal-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Build the Future of Kenyan Business Tools</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Join our mission to simplify operations for service
                    providers across Kenya</p>
                <a href="#open-positions"
                    class="mt-8 inline-block bg-teal-600 hover:bg-teal-700 text-white px-6 py-3 rounded-md font-medium">View
                    Open Positions</a>
            </div>
        </div>
    </section>

    <!-- Why Join Us -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Why Join Bookwise?</h2>
                <p class="text-gray-600 mt-4">We're building more than software—we're solving real problems for Kenyan
                    entrepreneurs</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Impact -->
                <div class="bg-gray-50 p-8 rounded-lg">
                    <div class="bg-teal-100 p-3 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Real Impact</h3>
                    <p class="text-gray-600">See how your work directly helps small businesses grow and succeed in Kenya's
                        competitive market.</p>
                </div>

                <!-- Culture -->
                <div class="bg-gray-50 p-8 rounded-lg">
                    <div class="bg-teal-100 p-3 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Great Culture</h3>
                    <p class="text-gray-600">Collaborative environment that values learning, ownership, and work-life
                        balance.</p>
                </div>

                <!-- Growth -->
                <div class="bg-gray-50 p-8 rounded-lg">
                    <div class="bg-teal-100 p-3 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Growth Opportunities</h3>
                    <p class="text-gray-600">As we expand across East Africa, you'll have opportunities to take on more
                        responsibility.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Perks & Benefits -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Perks & Benefits</h2>

                    <div class="space-y-6">
                        <div class="flex">
                            <div class="flex-shrink-0 bg-teal-100 rounded-md p-3">
                                <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Competitive Compensation</h3>
                                <p class="mt-1 text-gray-600">Market-rate salaries with performance bonuses and equity
                                    options.</p>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0 bg-teal-100 rounded-md p-3">
                                <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Flexible Work</h3>
                                <p class="mt-1 text-gray-600">Hybrid work model with flexible hours and remote options.</p>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0 bg-teal-100 rounded-md p-3">
                                <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Learning Budget</h3>
                                <p class="mt-1 text-gray-600">Annual stipend for courses, conferences, and books.</p>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0 bg-teal-100 rounded-md p-3">
                                <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Health Coverage</h3>
                                <p class="mt-1 text-gray-600">Comprehensive medical insurance for you and your family.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="{{ asset('assets/images/team-collaboration.jpg') }}" alt="Bookwise team collaboration"
                        class="rounded-lg shadow-xl border border-gray-200">
                </div>
            </div>
        </div>
    </section>

    <!-- Open Positions -->
    <section id="open-positions" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Open Positions</h2>
                <p class="text-gray-600 mt-4">Current opportunities at Bookwise</p>
            </div>

            <div class="max-w-3xl mx-auto space-y-6">
                <!-- Position 1 -->
                <div
                    class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Senior Backend Developer</h3>
                                <div class="mt-1 flex flex-wrap gap-2">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-teal-100 text-teal-800">Nairobi</span>
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Full-time</span>
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">Engineering</span>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-lg font-medium text-gray-900">KSh 250,000 - 350,000</p>
                                <p class="text-sm text-gray-500">per month</p>
                            </div>
                        </div>
                        <p class="mt-3 text-gray-600">We're looking for an experienced backend developer to help scale our
                            booking platform and M-Pesa integration.</p>
                        <div class="mt-4">
                            <a href="#" class="text-teal-600 hover:text-teal-700 font-medium">View details & apply
                                →</a>
                        </div>
                    </div>
                </div>

                <!-- Position 2 -->
                <div
                    class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Customer Success Manager</h3>
                                <div class="mt-1 flex flex-wrap gap-2">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-teal-100 text-teal-800">Remote</span>
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Full-time</span>
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Customer
                                        Support</span>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-lg font-medium text-gray-900">KSh 180,000 - 250,000</p>
                                <p class="text-sm text-gray-500">per month</p>
                            </div>
                        </div>
                        <p class="mt-3 text-gray-600">Help our customers get the most value from Bookwise through
                            onboarding, training, and ongoing support.</p>
                        <div class="mt-4">
                            <a href="#" class="text-teal-600 hover:text-teal-700 font-medium">View details & apply
                                →</a>
                        </div>
                    </div>
                </div>

                <!-- Position 3 -->
                <div
                    class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Product Designer</h3>
                                <div class="mt-1 flex flex-wrap gap-2">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-teal-100 text-teal-800">Nairobi</span>
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Full-time</span>
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-pink-100 text-pink-800">Design</span>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-lg font-medium text-gray-900">KSh 200,000 - 300,000</p>
                                <p class="text-sm text-gray-500">per month</p>
                            </div>
                        </div>
                        <p class="mt-3 text-gray-600">Design intuitive experiences for Kenyan business owners with varying
                            levels of tech literacy.</p>
                        <div class="mt-4">
                            <a href="#" class="text-teal-600 hover:text-teal-700 font-medium">View details & apply
                                →</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <p class="text-gray-600 mb-4">Don't see your dream role?</p>
                <a href="mailto:careers@bookwise.co.ke"
                    class="inline-block bg-teal-600 hover:bg-teal-700 text-white px-6 py-3 rounded-md font-medium">Send
                    Us Your CV</a>
            </div>
        </div>
    </section>

    <!-- Hiring Process -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Our Hiring Process</h2>
                <p class="text-gray-600 mt-4">What to expect when you apply</p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="grid md:grid-cols-5 gap-4">
                    <!-- Step 1 -->
                    <div class="text-center">
                        <div
                            class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-teal-100 text-teal-600 font-bold mb-2">
                            1</div>
                        <h3 class="text-sm font-medium text-gray-900">Application</h3>
                    </div>

                    <!-- Arrow -->
                    <div class="hidden md:flex items-center justify-center">
                        <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>

                    <!-- Step 2 -->
                    <div class="text-center">
                        <div
                            class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-teal-100 text-teal-600 font-bold mb-2">
                            2</div>
                        <h3 class="text-sm font-medium text-gray-900">Screening</h3>
                    </div>

                    <!-- Arrow -->
                    <div class="hidden md:flex items-center justify-center">
                        <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>

                    <!-- Step 3 -->
                    <div class="text-center">
                        <div
                            class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-teal-100 text-teal-600 font-bold mb-2">
                            3</div>
                        <h3 class="text-sm font-medium text-gray-900">Skills Assessment</h3>
                    </div>

                    <!-- Arrow -->
                    <div class="hidden md:flex items-center justify-center">
                        <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>

                    <!-- Step 4 -->
                    <div class="text-center">
                        <div
                            class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-teal-100 text-teal-600 font-bold mb-2">
                            4</div>
                        <h3 class="text-sm font-medium text-gray-900">Interviews</h3>
                    </div>

                    <!-- Arrow -->
                    <div class="hidden md:flex items-center justify-center">
                        <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>

                    <!-- Step 5 -->
                    <div class="text-center">
                        <div
                            class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-teal-100 text-teal-600 font-bold mb-2">
                            5</div>
                        <h3 class="text-sm font-medium text-gray-900">Offer</h3>
                    </div>
                </div>

                <div class="mt-12 bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Tips for Applying</h3>
                    <ul class="text-gray-600 space-y-3">
                        <li class="flex items-start"><span class="text-teal-500 mr-2">•</span> Tailor your application to
                            show how you've solved problems similar to ours</li>
                        <li class="flex items-start"><span class="text-teal-500 mr-2">•</span> Highlight any experience
                            with payment systems or SaaS products</li>
                        <li class="flex items-start"><span class="text-teal-500 mr-2">•</span> Show your understanding of
                            the Kenyan business context</li>
                        <li class="flex items-start"><span class="text-teal-500 mr-2">•</span> We value practical skills
                            and problem-solving over formal education</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
