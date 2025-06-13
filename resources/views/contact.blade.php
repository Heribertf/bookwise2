@extends('layouts.app')

@section('title', 'Contact Bookwise - Get in Touch with Our Team')

@section('content')
    <!-- Hero Section -->
    <section class="bg-teal-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">We'd Love to Hear From You</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Whether you have questions about features, pricing, or
                    need support—our team is here to help.</p>
            </div>
        </div>
    </section>

    <!-- Contact Options -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Support -->
                <div class="bg-gray-50 p-8 rounded-lg text-center">
                    <div class="mx-auto bg-teal-100 p-3 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Customer Support</h3>
                    <p class="text-gray-600 mb-4">Get help with your account or technical issues</p>
                    <a href="mailto:support@bookwise.co.ke"
                        class="text-teal-600 hover:text-teal-700 font-medium">support@bookwise.co.ke</a>
                    <p class="text-gray-600 mt-2">+254 700 000000</p>
                </div>

                <!-- Sales -->
                <div class="bg-gray-50 p-8 rounded-lg text-center">
                    <div class="mx-auto bg-teal-100 p-3 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Sales Inquiries</h3>
                    <p class="text-gray-600 mb-4">Questions about pricing or enterprise plans?</p>
                    <a href="mailto:sales@bookwise.co.ke"
                        class="text-teal-600 hover:text-teal-700 font-medium">sales@bookwise.co.ke</a>
                    <p class="text-gray-600 mt-2">+254 700 000001</p>
                </div>

                <!-- Partnerships -->
                <div class="bg-gray-50 p-8 rounded-lg text-center">
                    <div class="mx-auto bg-teal-100 p-3 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Partnerships</h3>
                    <p class="text-gray-600 mb-4">Explore integration or collaboration opportunities</p>
                    <a href="mailto:partners@bookwise.co.ke"
                        class="text-teal-600 hover:text-teal-700 font-medium">partners@bookwise.co.ke</a>
                    <p class="text-gray-600 mt-2">+254 700 000002</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-200">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Send Us a Message</h2>

                <form>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-teal-500 focus:border-teal-500">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-teal-500 focus:border-teal-500">
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                            <input type="tel" id="phone" name="phone"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-teal-500 focus:border-teal-500">
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                            <select id="subject" name="subject"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-teal-500 focus:border-teal-500">
                                <option value="">Select a subject</option>
                                <option value="support">Support</option>
                                <option value="sales">Sales Inquiry</option>
                                <option value="partnership">Partnership</option>
                                <option value="feedback">Feedback</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="md:col-span-2">
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea id="message" name="message" rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-teal-500 focus:border-teal-500"></textarea>
                        </div>
                    </div>

                    <div class="mt-6">
                        <button type="submit"
                            class="bg-teal-600 hover:bg-teal-700 text-white px-6 py-3 rounded-md font-medium">Send
                            Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Office Location -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Our Office</h2>
                <p class="text-gray-600 mt-4">Visit us in Nairobi</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Bookwise Kenya</h3>
                        <address class="text-gray-600 not-italic">
                            <p class="flex items-start mb-3">
                                <svg class="h-5 w-5 text-teal-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Senteu Plaza, 5th Floor<br>
                                Galana Road, Kilimani<br>
                                Nairobi, Kenya
                            </p>

                            <p class="flex items-center mb-3">
                                <svg class="h-5 w-5 text-teal-500 mr-3" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                +254 700 000000
                            </p>

                            <p class="flex items-center">
                                <svg class="h-5 w-5 text-teal-500 mr-3" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                hello@bookwise.co.ke
                            </p>
                        </address>

                        <div class="mt-6">
                            <h4 class="font-medium text-gray-900 mb-2">Business Hours</h4>
                            <ul class="text-gray-600 space-y-1">
                                <li class="flex justify-between">
                                    <span>Monday - Friday</span>
                                    <span>8:00 AM - 5:00 PM</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Saturday</span>
                                    <span>9:00 AM - 1:00 PM</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Sunday</span>
                                    <span>Closed</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="h-96 rounded-lg overflow-hidden">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.817476157567!2d36.77821431475398!3d-1.282635599063563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1a6bf7445dc1%3A0x940b62a3c8efde4c!2sSenteu%20Plaza%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1623346789047!5m2!1sen!2ske"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-gradient-to-r from-teal-600 to-teal-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-6">Still Have Questions?</h2>
            <p class="text-xl text-teal-100 mb-8 max-w-3xl mx-auto">Check out our FAQ section or chat with us on WhatsApp
                for quick answers.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/faq"
                    class="bg-white hover:bg-gray-100 text-teal-700 px-6 py-3 rounded-md text-center font-medium shadow-sm">Visit
                    FAQ</a>
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
