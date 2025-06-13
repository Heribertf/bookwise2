<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - @yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/favicon.png">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .mpesa-badge {
            background-color: #FFC72C;
            color: #000;
        }

        .footer {
            margin-top: auto;
        }
    </style>

    @stack('styles')

</head>

<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50" x-data="{ mobileMenuOpen: false }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('bookwise.home') }}" class="flex-shrink-0 flex items-center">
                        <img class="h-8 w-auto" src="https://via.placeholder.com/150x50?text=Bookwise"
                            alt="Bookwise Logo">
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/#features"
                        class="text-gray-700 hover:text-teal-600 px-3 py-2 text-sm font-medium">Features</a>
                    <a href="/#pricing"
                        class="text-gray-700 hover:text-teal-600 px-3 py-2 text-sm font-medium">Pricing</a>
                    <a href="/#testimonials"
                        class="text-gray-700 hover:text-teal-600 px-3 py-2 text-sm font-medium">Success Stories</a>
                    <a href="#" class="text-gray-700 hover:text-teal-600 px-3 py-2 text-sm font-medium">Blog</a>
                    <a href="{{ route('register') }}"
                        class="bg-teal-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-teal-700">Get
                        Started</a>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none">
                        <span class="sr-only">Open menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div x-show="mobileMenuOpen" @click.away="mobileMenuOpen = false" class="md:hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="/#features"
                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-teal-600">Features</a>
                <a href="/#pricing"
                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-teal-600">Pricing</a>
                <a href="/#testimonials"
                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-teal-600">Success Stories</a>
                <a href="#"
                    class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-teal-600">Blog</a>
                <a href="#cta"
                    class="block w-full bg-teal-600 text-white px-4 py-2 rounded-md text-base font-medium text-center hover:bg-teal-700">Get
                    Started</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow">
        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('status') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 5.652a1 1 0 00-1.415 0L10 9.586l-2.933-2.934a1 1 0 00-1.415 1.415l2.934 2.933L5.652 14.348a1 1 0 001.415 1.415L10 12.414l2.933 2.933a1 1 0 001.415-1.415l-2.934-2.933L14.348 7.065a1 1 0 000-1.413z" />
                    </svg>
                </span>
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">{{ session('error') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 5.652a1 1 0 00-1.415 0L10 9.586l-2.933-2.934a1 1 0 00-1.415 1.415l2.934 2.933L5.652 14.348a1 1 0 001.415 1.415L10 12.414l2.933 2.933a1 1 0 001.415-1.415l-2.934-2.933L14.348 7.065a1 1 0 000-1.413z" />
                    </svg>
                </span>
        @endif
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-teal-800 text-teal-50">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="">
                    <h3 class="text-lg font-medium mb-4">Bookwise</h3>
                    <p class="text-gray-300 text-sm">
                        Bookwise helps businesses manage appointments and bookings effortlessly. Our platform simplifies
                        scheduling so you can focus on what matters most
                    </p>
                    <div class="mt-4 flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Product</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="{{ route('bookwise.features') }}"
                                class="text-gray-400 hover:text-white text-sm">Features</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Pricing</a></li>
                        <li><a href="{{ route('bookwise.api') }}"
                                class="text-gray-400 hover:text-white text-sm">API</a>
                        </li>
                        <li><a href="{{ route('bookwise.integrations') }}"
                                class="text-gray-400 hover:text-white text-sm">Integrations</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Resources</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="{{ route('bookwise.documentation') }}"
                                class="text-gray-400 hover:text-white text-sm">Documentation</a></li>
                        <li><a href="{{ route('bookwise.blog') }}"
                                class="text-gray-400 hover:text-white text-sm">Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Help Center</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Community</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Company</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="{{ route('bookwise.about') }}"
                                class="text-gray-400 hover:text-white text-sm">About</a></li>
                        {{-- <li><a href="#" class="text-gray-400 hover:text-white text-sm">Careers</a></li> --}}
                        <li><a href="{{ route('bookwise.contact') }}"
                                class="text-gray-400 hover:text-white text-sm">Contact</a></li>
                        <li><a href="{{ route('bookwise.privacy-policy') }}"
                                class="text-gray-400 hover:text-white text-sm">Privacy Policy</a></li>
                        <li><a href="{{ route('bookwise.terms-of-service') }}"
                                class="text-gray-400 hover:text-white text-sm">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-700">
                <p class="text-gray-400 text-sm text-center">
                    &copy; 2025 Bookwise. All rights reserved.
                </p>
                <p class="mt-1 text-gray-400 text-xs text-center">
                    A product of TechBloom Solutions
                </p>
            </div>
        </div>
    </footer>

    <!-- jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Scripts -->
    <script>
        document.addEventListener('livewire:load', function() {
            // Livewire event listeners can go here
        });
        document.addEventListener('alpine:init', () => {
            Alpine.data('landing', () => ({
                mobileMenuOpen: false,
                selectedPlan: 'pro'
            }))
        })
    </script>

    @stack('scripts')
</body>

</html>
