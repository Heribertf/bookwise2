@extends('layouts.app')

@section('title', 'Bookwise API Documentation - Integrate with Our Booking Platform')

@section('content')
    <!-- Hero Section -->
    <section class="bg-teal-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Bookwise API Documentation</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Integrate our booking platform with your website, app, or
                    business systems</p>
            </div>
        </div>
    </section>

    <!-- API Overview -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="md:col-span-2">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">API Overview</h2>
                    <p class="text-gray-600 mb-4">The Bookwise API allows developers to integrate our booking functionality
                        directly into your website, mobile app, or other business systems. With our RESTful API, you can:
                    </p>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li class="flex items-start"><span class="text-teal-500 mr-2">•</span> Create, read, update, and
                            delete bookings</li>
                        <li class="flex items-start"><span class="text-teal-500 mr-2">•</span> Sync your availability
                            calendar</li>
                        <li class="flex items-start"><span class="text-teal-500 mr-2">•</span> Retrieve client booking
                            history</li>
                        <li class="flex items-start"><span class="text-teal-500 mr-2">•</span> Process M-Pesa payments</li>
                        <li class="flex items-start"><span class="text-teal-500 mr-2">•</span> Manage services and staff
                        </li>
                    </ul>
                    <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                        <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-2">Base URL</h3>
                        <code class="text-teal-600 bg-gray-100 px-2 py-1 rounded">https://api.bookwise.co.ke/v1</code>
                    </div>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Quick Links</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#authentication" class="text-teal-600 hover:text-teal-700">Authentication</a>
                        </li>
                        <li>
                            <a href="#bookings" class="text-teal-600 hover:text-teal-700">Bookings API</a>
                        </li>
                        <li>
                            <a href="#payments" class="text-teal-600 hover:text-teal-700">Payments API</a>
                        </li>
                        <li>
                            <a href="#webhooks" class="text-teal-600 hover:text-teal-700">Webhooks</a>
                        </li>
                        <li>
                            <a href="#libraries" class="text-teal-600 hover:text-teal-700">Client Libraries</a>
                        </li>
                    </ul>
                    <div class="mt-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">API Status</h3>
                        <div class="flex items-center">
                            <span class="h-2 w-2 rounded-full bg-teal-500 mr-2"></span>
                            <span class="text-sm text-gray-600">All systems operational</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Authentication -->
    <section id="authentication" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Authentication</h2>
            <p class="text-gray-600 mb-6">The Bookwise API uses API keys to authenticate requests. You can generate and
                manage your API keys in the <a href="/account/api" class="text-teal-600 hover:text-teal-700">developer
                    settings</a> of your Bookwise account.</p>

            <div class="mb-8">
                <h3 class="text-lg font-medium text-gray-900 mb-3">Request Headers</h3>
                <div class="overflow-hidden shadow-sm border border-gray-200 rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Header
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Description
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Example
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    Authorization
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    Your API key prefixed with "Bearer"
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500 font-mono">
                                    Bearer bk_1234567890abcdef
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    Content-Type
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    Should be "application/json"
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500 font-mono">
                                    application/json
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                <h3 class="text-lg font-medium text-gray-900 mb-3">Example Request</h3>
                <div class="bg-gray-800 rounded-lg p-4 overflow-x-auto">
                    <pre class="text-teal-400 text-sm"><code>curl -X GET \
  https://api.bookwise.co.ke/v1/bookings \
  -H "Authorization: Bearer bk_1234567890abcdef" \
  -H "Content-Type: application/json"</code></pre>
                </div>
            </div>
        </div>
    </section>

    <!-- Bookings API -->
    <section id="bookings" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Bookings API</h2>
            <p class="text-gray-600 mb-6">Manage bookings programmatically through our API. Below are the available
                endpoints:</p>

            <div class="space-y-8">
                <!-- Create Booking -->
                <div class="border border-gray-200 rounded-lg overflow-hidden">
                    <div class="bg-gray-50 px-6 py-3 border-b border-gray-200">
                        <div class="flex items-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium bg-teal-100 text-teal-800 mr-3">
                                POST
                            </span>
                            <span class="font-mono text-sm text-gray-700">/bookings</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Create a new booking. Required fields depend on your booking settings.
                        </p>

                        <h4 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-2">Request Body</h4>
                        <div class="mb-4 overflow-hidden shadow-sm border border-gray-200 rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Field
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Type
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Required
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Description
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            service_id
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            string
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            Yes
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            ID of the service being booked
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            start_time
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            datetime
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            Yes
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            Start time of the booking in ISO 8601 format
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            client
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            object
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            Yes
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            Client information (name, email, phone)
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h4 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-2">Example Request</h4>
                        <div class="bg-gray-800 rounded-lg p-4 overflow-x-auto mb-4">
                            <pre class="text-teal-400 text-sm"><code>curl -X POST \
  https://api.bookwise.co.ke/v1/bookings \
  -H "Authorization: Bearer bk_1234567890abcdef" \
  -H "Content-Type: application/json" \
  -d '{
    "service_id": "svc_123",
    "start_time": "2023-06-15T14:00:00+03:00",
    "client": {
      "name": "John Doe",
      "email": "john@example.com",
      "phone": "+254712345678"
    }
  }'</code></pre>
                        </div>

                        <h4 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-2">Example Response</h4>
                        <div class="bg-gray-800 rounded-lg p-4 overflow-x-auto">
                            <pre class="text-teal-400 text-sm"><code>{
  "id": "book_123",
  "object": "booking",
  "service_id": "svc_123",
  "start_time": "2023-06-15T14:00:00+03:00",
  "end_time": "2023-06-15T15:00:00+03:00",
  "client": {
    "name": "John Doe",
    "email": "john@example.com",
    "phone": "+254712345678"
  },
  "status": "confirmed",
  "created_at": "2023-06-01T10:30:00+03:00"
}</code></pre>
                        </div>
                    </div>
                </div>

                <!-- Other endpoints would follow the same pattern -->
            </div>
        </div>
    </section>

    <!-- Webhooks -->
    <section id="webhooks" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Webhooks</h2>
            <p class="text-gray-600 mb-6">Bookwise can send real-time notifications to your server when events occur in
                your account. This allows you to keep your systems in sync without polling our API.</p>

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-3">Available Webhook Events</h3>
                    <div class="bg-white shadow-sm border border-gray-200 rounded-lg overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Event
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Description
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        booking.created
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        A new booking was created
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        booking.updated
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        A booking was updated
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        booking.cancelled
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        A booking was cancelled
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        payment.succeeded
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        A payment was successfully processed
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-3">Webhook Security</h3>
                    <p class="text-gray-600 mb-4">Each webhook request includes a signature that you can use to verify the
                        request came from Bookwise.</p>

                    <div class="bg-gray-800 rounded-lg p-4 overflow-x-auto">
                        <pre class="text-teal-400 text-sm"><code>// Example of verifying a webhook signature in PHP
$expected_signature = hash_hmac('sha256', $payload, $secret);
if (hash_equals($expected_signature, $signature_header)) {
    // Webhook is authentic
}</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Libraries -->
    <section id="libraries" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Client Libraries</h2>
            <p class="text-gray-600 mb-6">We provide official client libraries to make integration easier in your preferred
                programming language.</p>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                    <div class="flex items-center mb-3">
                        <div class="bg-teal-100 p-2 rounded-md mr-4">
                            <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">JavaScript</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Official Node.js library for the Bookwise API</p>
                    <div class="flex items-center justify-between">
                        <code class="text-sm bg-gray-200 px-2 py-1 rounded">npm install bookwise-api</code>
                        <a href="#" class="text-teal-600 hover:text-teal-700 text-sm font-medium">Documentation
                            →</a>
                    </div>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                    <div class="flex items-center mb-3">
                        <div class="bg-teal-100 p-2 rounded-md mr-4">
                            <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">PHP</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Official PHP client for the Bookwise API</p>
                    <div class="flex items-center justify-between">
                        <code class="text-sm bg-gray-200 px-2 py-1 rounded">composer require bookwise/api</code>
                        <a href="#" class="text-teal-600 hover:text-teal-700 text-sm font-medium">Documentation
                            →</a>
                    </div>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                    <div class="flex items-center mb-3">
                        <div class="bg-teal-100 p-2 rounded-md mr-4">
                            <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">Python</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Official Python library for the Bookwise API</p>
                    <div class="flex items-center justify-between">
                        <code class="text-sm bg-gray-200 px-2 py-1 rounded">pip install bookwise</code>
                        <a href="#" class="text-teal-600 hover:text-teal-700 text-sm font-medium">Documentation
                            →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Support -->
    <section class="py-16 bg-gradient-to-r from-teal-600 to-teal-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-6">Need Help with Integration?</h2>
            <p class="text-xl text-teal-100 mb-8 max-w-3xl mx-auto">Our developer support team is here to help you get up
                and running.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="mailto:developers@bookwise.co.ke"
                    class="bg-white hover:bg-gray-100 text-teal-700 px-6 py-3 rounded-md text-center font-medium shadow-sm">Email
                    Developers</a>
                <a href="/documentation"
                    class="border-2 border-white text-white hover:bg-teal-800 px-6 py-3 rounded-md text-center font-medium">View
                    Full Documentation</a>
            </div>
        </div>
    </section>
@endsection
