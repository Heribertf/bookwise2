@extends('layouts.app')

@section('title', 'Bookwise Integrations - Connect with Other Tools')

@section('content')
    <!-- Hero Section -->
    <section class="bg-teal-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Connect Bookwise with Your Favorite Tools</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Expand what's possible by integrating Bookwise with other
                    business applications</p>
            </div>
        </div>
    </section>

    <!-- Popular Integrations -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-teal-600 font-semibold tracking-wide uppercase">Popular Integrations</h2>
                <p class="mt-2 text-3xl leading-8 font-bold tracking-tight text-gray-900">
                    Work Smarter with Connected Apps
                </p>
                <p class="mt-4 max-w-2xl text-gray-600 lg:mx-auto">
                    Automate workflows and save time with these pre-built connections
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Google Calendar -->
                    <div class="bg-white overflow-hidden shadow rounded-lg border border-gray-200">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-white rounded-md p-1 border border-gray-200">
                                    <img src="{{ asset('assets/images/google-calendar.png') }}" alt="Google Calendar"
                                        class="h-10 w-10">
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <h3 class="text-lg font-medium text-gray-900">Google Calendar</h3>
                                </div>
                            </div>
                            <div class="mt-4">
                                <p class="text-sm text-gray-500">
                                    Sync your Bookwise appointments with Google Calendar. Avoid double bookings and see your
                                    schedule in one place.
                                </p>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="text-teal-600 hover:text-teal-700 text-sm font-medium">Learn more
                                    →</a>
                            </div>
                        </div>
                    </div>

                    <!-- WhatsApp -->
                    <div class="bg-white overflow-hidden shadow rounded-lg border border-gray-200">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-white rounded-md p-1 border border-gray-200">
                                    <img src="{{ asset('assets/images/whatsapp.png') }}" alt="WhatsApp" class="h-10 w-10">
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <h3 class="text-lg font-medium text-gray-900">WhatsApp Business</h3>
                                </div>
                            </div>
                            <div class="mt-4">
                                <p class="text-sm text-gray-500">
                                    Send booking confirmations and reminders via WhatsApp. Communicate with clients through
                                    Kenya's most popular messaging app.
                                </p>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="text-teal-600 hover:text-teal-700 text-sm font-medium">Learn more
                                    →</a>
                            </div>
                        </div>
                    </div>

                    <!-- QuickBooks -->
                    <div class="bg-white overflow-hidden shadow rounded-lg border border-gray-200">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-white rounded-md p-1 border border-gray-200">
                                    <img src="{{ asset('assets/images/quickbooks.png') }}" alt="QuickBooks"
                                        class="h-10 w-10">
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <h3 class="text-lg font-medium text-gray-900">QuickBooks</h3>
                                </div>
                            </div>
                            <div class="mt-4">
                                <p class="text-sm text-gray-500">
                                    Automatically sync payments and invoices with QuickBooks. Keep your accounting
                                    up-to-date without manual data entry.
                                </p>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="text-teal-600 hover:text-teal-700 text-sm font-medium">Learn more
                                    →</a>
                            </div>
                        </div>
                    </div>

                    <!-- Zapier -->
                    <div class="bg-white overflow-hidden shadow rounded-lg border border-gray-200">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-white rounded-md p-1 border border-gray-200">
                                    <img src="{{ asset('assets/images/zapier.png') }}" alt="Zapier" class="h-10 w-10">
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <h3 class="text-lg font-medium text-gray-900">Zapier</h3>
                                </div>
                            </div>
                            <div class="mt-4">
                                <p class="text-sm text-gray-500">
                                    Connect Bookwise with 5,000+ apps through Zapier. Automate workflows between Bookwise
                                    and your other business tools.
                                </p>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="text-teal-600 hover:text-teal-700 text-sm font-medium">Learn more
                                    →</a>
                            </div>
                        </div>
                    </div>

                    <!-- Mailchimp -->
                    <div class="bg-white overflow-hidden shadow rounded-lg border border-gray-200">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-white rounded-md p-1 border border-gray-200">
                                    <img src="{{ asset('assets/images/mailchimp.png') }}" alt="Mailchimp" class="h-10 w-10">
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <h3 class="text-lg font-medium text-gray-900">Mailchimp</h3>
                                </div>
                            </div>
                            <div class="mt-4">
                                <p class="text-sm text-gray-500">
                                    Add new clients to your Mailchimp audience automatically. Send targeted email campaigns
                                    based on booking behavior.
                                </p>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="text-teal-600 hover:text-teal-700 text-sm font-medium">Learn more
                                    →</a>
                            </div>
                        </div>
                    </div>

                    <!-- Custom API -->
                    <div class="bg-white overflow-hidden shadow rounded-lg border border-gray-200">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-teal-100 rounded-md p-3">
                                    <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <h3 class="text-lg font-medium text-gray-900">Custom API</h3>
                                </div>
                            </div>
                            <div class="mt-4">
                                <p class="text-sm text-gray-500">
                                    Build your own integration using our developer API. Connect Bookwise with your internal
                                    systems or custom applications.
                                </p>
                            </div>
                            <div class="mt-4">
                                <a href="/api" class="text-teal-600 hover:text-teal-700 text-sm font-medium">API
                                    Documentation →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How Integrations Work -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-teal-600 font-semibold tracking-wide uppercase">How It Works</h2>
                <p class="mt-2 text-3xl leading-8 font-bold tracking-tight text-gray-900">
                    Connect in Minutes, Not Days
                </p>
            </div>

            <div class="mt-10 grid md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div class="text-center">
                    <div
                        class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-teal-100 text-teal-600 text-xl font-bold mb-4">
                        1
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Choose Your Integration</h3>
                    <p class="text-gray-600">Select from our pre-built connections or use our API for custom solutions.</p>
                </div>

                <!-- Step 2 -->
                <div class="text-center">
                    <div
                        class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-teal-100 text-teal-600 text-xl font-bold mb-4">
                        2
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Authenticate</h3>
                    <p class="text-gray-600">Grant permission to connect with your other business tools (usually just a few
                        clicks).</p>
                </div>

                <!-- Step 3 -->
                <div class="text-center">
                    <div
                        class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-teal-100 text-teal-600 text-xl font-bold mb-4">
                        3
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Configure Settings</h3>
                    <p class="text-gray-600">Customize how data flows between systems to match your workflow.</p>
                </div>
            </div>

            <div class="mt-12 bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Need Help Setting Up Integrations?</h3>
                        <p class="text-gray-600 mb-4">Our team can help you get connected quickly and ensure your
                            integrations are working perfectly.</p>
                        <a href="/contact"
                            class="inline-block bg-teal-600 hover:bg-teal-700 text-white px-6 py-3 rounded-md font-medium">Contact
                            Our Support Team</a>
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/integration-help.jpg') }}" alt="Integration help"
                            class="rounded-lg shadow-md border border-gray-200">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-teal-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Connect Bookwise with Your Other Tools?</h2>
            <p class="text-xl text-teal-100 mb-8 max-w-3xl mx-auto">Start automating your workflows and save hours every
                week.</p>
            <a href="/register"
                class="bg-white hover:bg-gray-100 text-teal-700 px-6 py-3 rounded-md text-center font-medium shadow-sm inline-block">Get
                Started with Bookwise</a>
        </div>
    </section>
@endsection
