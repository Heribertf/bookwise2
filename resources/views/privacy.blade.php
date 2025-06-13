@extends('layouts.app')

@section('title', 'Privacy Policy - Bookwise')

@section('content')
    <!-- Hero Section -->
    <section class="bg-teal-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Privacy Policy</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Last updated: June 1, 2023</p>
            </div>
        </div>
    </section>

    <!-- Policy Content -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose prose-teal max-w-none">
                <p>Bookwise ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how
                    we collect, use, disclose, and safeguard your information when you use our booking platform and related
                    services.</p>

                <h2>1. Information We Collect</h2>
                <p>We collect personal information that you voluntarily provide to us when registering for an account,
                    making bookings, or contacting us:</p>
                <ul>
                    <li><strong>Personal Identification Information:</strong> Name, email address, phone number, business
                        details</li>
                    <li><strong>Payment Information:</strong> M-Pesa details for processing payments (we don't store full
                        payment details)</li>
                    <li><strong>Booking Information:</strong> Services booked, appointment times, client details</li>
                    <li><strong>Technical Data:</strong> IP address, browser type, device information</li>
                </ul>

                <h2>2. How We Use Your Information</h2>
                <p>We use the information we collect to:</p>
                <ul>
                    <li>Provide and maintain our booking services</li>
                    <li>Process transactions and send payment confirmations</li>
                    <li>Send booking confirmations, reminders, and notifications</li>
                    <li>Improve our platform and develop new features</li>
                    <li>Respond to customer service requests</li>
                    <li>Comply with legal obligations</li>
                </ul>

                <h2>3. Data Sharing and Disclosure</h2>
                <p>We may share information with:</p>
                <ul>
                    <li><strong>Service Providers:</strong> Third parties who assist with payment processing (e.g., M-Pesa),
                        SMS delivery, and hosting</li>
                    <li><strong>Business Transfers:</strong> In connection with any merger or sale of company assets</li>
                    <li><strong>Legal Requirements:</strong> When required by law or to protect our rights</li>
                </ul>
                <p>We never sell your personal information to third parties.</p>

                <h2>4. Data Security</h2>
                <p>We implement appropriate technical and organizational measures to protect your personal information,
                    including:</p>
                <ul>
                    <li>Encryption of sensitive data</li>
                    <li>Regular security assessments</li>
                    <li>Access controls</li>
                </ul>
                <p>However, no internet transmission is completely secure, and we cannot guarantee absolute security.</p>

                <h2>5. Data Retention</h2>
                <p>We retain personal information only as long as necessary to:</p>
                <ul>
                    <li>Provide our services</li>
                    <li>Comply with legal obligations</li>
                    <li>Resolve disputes</li>
                    <li>Enforce agreements</li>
                </ul>

                <h2>6. Your Rights</h2>
                <p>Depending on your jurisdiction, you may have the right to:</p>
                <ul>
                    <li>Access, correct, or delete your personal information</li>
                    <li>Object to or restrict processing of your data</li>
                    <li>Request a copy of your data in a portable format</li>
                    <li>Withdraw consent (where processing is based on consent)</li>
                </ul>
                <p>To exercise these rights, contact us at privacy@bookwise.co.ke.</p>

                <h2>7. Children's Privacy</h2>
                <p>Our services are not directed to children under 13. We do not knowingly collect personal information from
                    children.</p>

                <h2>8. Changes to This Policy</h2>
                <p>We may update this Privacy Policy periodically. We'll notify you of significant changes by email or
                    through our platform.</p>

                <h2>9. Contact Us</h2>
                <p>For questions about this Privacy Policy or our data practices, contact us at:</p>
                <address class="not-italic">
                    Bookwise Data Protection Officer<br>
                    privacy@bookwise.co.ke<br>
                    Senteu Plaza, 5th Floor<br>
                    Galana Road, Kilimani<br>
                    Nairobi, Kenya
                </address>
            </div>
        </div>
    </section>
@endsection
