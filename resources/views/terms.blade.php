@extends('layouts.app')

@section('title', 'Terms & Conditions - Bookwise')

@section('content')
    <!-- Hero Section -->
    <section class="bg-teal-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Terms & Conditions</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Last updated: June 1, 2023</p>
            </div>
        </div>
    </section>

    <!-- Terms Content -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose prose-teal max-w-none">
                <p>Welcome to Bookwise! These Terms & Conditions ("Terms") govern your use of our booking platform and
                    related services. By accessing or using Bookwise, you agree to be bound by these Terms.</p>

                <h2>1. Definitions</h2>
                <ul>
                    <li><strong>"Bookwise"</strong> refers to our booking platform, website, and related services.</li>
                    <li><strong>"Service Provider"</strong> means a business or individual using Bookwise to manage
                        appointments.</li>
                    <li><strong>"Client"</strong> means an individual booking services through a Service Provider's Bookwise
                        page.</li>
                </ul>

                <h2>2. Account Registration</h2>
                <p>To use Bookwise as a Service Provider, you must:</p>
                <ul>
                    <li>Be at least 18 years old</li>
                    <li>Provide accurate and complete registration information</li>
                    <li>Maintain the security of your account credentials</li>
                    <li>Be responsible for all activities under your account</li>
                </ul>

                <h2>3. Service Provider Responsibilities</h2>
                <p>As a Service Provider, you agree to:</p>
                <ul>
                    <li>Accurately represent your services, availability, and pricing</li>
                    <li>Honor bookings made through the platform</li>
                    <li>Comply with all applicable laws and regulations</li>
                    <li>Obtain necessary insurance for your business</li>
                    <li>Handle client data responsibly and in compliance with privacy laws</li>
                </ul>

                <h2>4. Payments & Fees</h2>
                <p>a. <strong>Service Fees:</strong> Bookwise charges subscription fees as outlined on our Pricing page.
                    Fees are subject to change with 30 days' notice.</p>
                <p>b. <strong>Payment Processing:</strong> For M-Pesa transactions, we deduct a 2.5% processing fee
                    (exclusive of Safaricom's charges).</p>
                <p>c. <strong>Refunds:</strong> Subscription fees are non-refundable except as required by law. Service
                    Providers are responsible for their own refund policies for cancelled appointments.</p>

                <h2>5. Client Bookings</h2>
                <p>a. Clients booking through Bookwise enter into a direct agreement with the Service Provider.</p>
                <p>b. Service Providers may set their own cancellation policies, which must be clearly communicated to
                    clients.</p>
                <p>c. Bookwise is not responsible for the quality of services provided by Service Providers.</p>

                <h2>6. Prohibited Conduct</h2>
                <p>You may not:</p>
                <ul>
                    <li>Use Bookwise for illegal activities or to provide illegal services</li>
                    <li>Harass, discriminate against, or harm others</li>
                    <li>Impersonate any person or entity</li>
                    <li>Interfere with the platform's operation or security</li>
                    <li>Use automated systems to access Bookwise without permission</li>
                </ul>

                <h2>7. Intellectual Property</h2>
                <p>a. Bookwise owns all rights to the platform, including software, designs, and trademarks.</p>
                <p>b. Service Providers retain ownership of their business names, logos, and service content.</p>
                <p>c. By using Bookwise, you grant us a license to display your business information on the platform.</p>

                <h2>8. Termination</h2>
                <p>We may suspend or terminate your account if you violate these Terms. You may cancel your subscription at
                    any time.</p>

                <h2>9. Disclaimers</h2>
                <p>Bookwise is provided "as is" without warranties of any kind. We do not guarantee:</p>
                <ul>
                    <li>Continuous, error-free operation of the platform</li>
                    <li>The accuracy of Service Provider listings</li>
                    <li>The quality or safety of services booked through the platform</li>
                </ul>

                <h2>10. Limitation of Liability</h2>
                <p>To the maximum extent permitted by law, Bookwise shall not be liable for any indirect, incidental, or
                    consequential damages arising from your use of the platform.</p>

                <h2>11. Governing Law</h2>
                <p>These Terms shall be governed by the laws of Kenya. Any disputes shall be resolved in the courts of
                    Nairobi.</p>

                <h2>12. Changes to Terms</h2>
                <p>We may modify these Terms at any time. Continued use of Bookwise after changes constitutes acceptance of
                    the new Terms.</p>

                <h2>13. Contact Us</h2>
                <p>For questions about these Terms, contact us at:</p>
                <address class="not-italic">
                    Bookwise Legal Department<br>
                    legal@bookwise.co.ke<br>
                    Senteu Plaza, 5th Floor<br>
                    Galana Road, Kilimani<br>
                    Nairobi, Kenya
                </address>
            </div>
        </div>
    </section>
@endsection
