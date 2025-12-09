{{-- resources/views/layouts/app.blade.php --}}
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sydney Mobile Technician Automotive')</title>
{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">--}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-900 text-white font-sans overflow-x-hidden">
{{--@include('partials.header')--}}

{{--@yield('content')--}}

{{--@include('partials.footer')--}}
</body>
</html>

{{-- resources/views/partials/header.blade.php --}}
<header class="fixed top-0 left-0 right-0 bg-black/95 backdrop-blur-sm z-50 border-b border-white/10">
    <nav class="flex justify-between items-center max-w-7xl mx-auto px-8 py-4">
        {{-- Logo --}}
        <div class="flex items-center gap-3">
            <div class="w-14 h-14 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-full flex items-center justify-center relative">
                <div class="absolute inset-1 bg-gray-900 rounded-full"></div>
                <div class="relative z-10">
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/>
                    </svg>
                </div>
            </div>
            <div class="flex flex-col">
                <span class="text-yellow-400 font-bold text-lg">SYDNEY</span>
                <span class="text-gray-400 text-xs uppercase tracking-wider">MOBILE TECHNICIAN</span>
                <span class="text-gray-400 text-xs uppercase tracking-wider">AUTOMOTIVE</span>
            </div>
        </div>

        {{-- Navigation Menu --}}
        <ul class="hidden md:flex space-x-8">
            <li><a
                        href="{{ route('home') }}"
                   class="text-white hover:text-yellow-400 transition-colors duration-300 relative group">
                    Home
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-400 transition-all duration-300 group-hover:w-full"></span>
                </a></li>
            <li><a href="{{ route('about') }}" class="text-white hover:text-yellow-400 transition-colors duration-300 relative group">
                    About
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-400 transition-all duration-300 group-hover:w-full"></span>
                </a></li>
            <li><a href="{{ route('services') }}" class="text-white hover:text-yellow-400 transition-colors duration-300 relative group">
                    Services
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-400 transition-all duration-300 group-hover:w-full"></span>
                </a></li>
            <li><a href="{{ route('contact') }}" class="text-white hover:text-yellow-400 transition-colors duration-300 relative group">
                    Contact
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-400 transition-all duration-300 group-hover:w-full"></span>
                </a></li>
        </ul>

        {{-- Mobile Menu Button --}}
        <button class="md:hidden text-white" id="mobile-menu-button">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </nav>

    {{-- Mobile Menu --}}
    <div class="md:hidden bg-black/95 backdrop-blur-sm border-t border-white/10 hidden" id="mobile-menu">
        <div class="px-8 py-4 space-y-4">
            <a href="{{ route('home') }}" class="block text-white hover:text-yellow-400 transition-colors duration-300">Home</a>
            <a href="{{ route('about') }}" class="block text-white hover:text-yellow-400 transition-colors duration-300">About</a>
            <a href="{{ route('services') }}" class="block text-white hover:text-yellow-400 transition-colors duration-300">Services</a>
            <a href="{{ route('contact') }}" class="block text-white hover:text-yellow-400 transition-colors duration-300">Contact</a>
        </div>
    </div>
</header>

{{-- resources/views/home.blade.php --}}
{{--@extends('layouts.app')--}}

{{--@section('title', 'Home - Sydney Mobile Technician Automotive')--}}

{{--@section('content')--}}
    <main class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 relative overflow-hidden">
        {{-- Background Grid Pattern --}}
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: repeating-linear-gradient(0deg, transparent, transparent 50px, rgba(255,255,255,0.1) 50px, rgba(255,255,255,0.1) 51px), repeating-linear-gradient(90deg, transparent, transparent 50px, rgba(255,255,255,0.1) 50px, rgba(255,255,255,0.1) 51px);"></div>
        </div>

        {{-- Gradient Overlays --}}
        <div class="absolute inset-0 bg-gradient-to-br from-yellow-400/10 via-transparent to-red-500/10"></div>

        {{-- Hero Section --}}
        <section class="relative pt-24 pb-16 lg:pt-32 lg:pb-24">
            <div class="max-w-7xl mx-auto px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    {{-- Content --}}
                    <div class="space-y-8">
                        <h1 class="text-4xl lg:text-6xl font-light leading-tight">
                            <span class="block text-white">Auto Maintenance &</span>
                            <span class="block text-white">Repair Service</span>
                        </h1>

                        <div class="space-y-4 text-gray-300 text-lg">
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>We come to you</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>We pick up and deliver your vehicle for tyres or rego inspections</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>In most cases you may not need a tow — we may be able to fix your vehicle where it breaks down</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Peace of mind knowing your vehicle is in good hands</span>
                            </div>
                        </div>

                        <div class="pt-4">
                            <a href="{{ route('services') }}" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-red-500 to-red-600 text-white font-semibold rounded-lg hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl">
                                Get Services
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    {{-- Car Images --}}
                    <div class="relative h-96 lg:h-[500px]">
                        {{-- Main Car Image --}}
                        <div class="absolute bottom-0 right-0 w-full h-3/4 transform hover:scale-105 transition-transform duration-700">
                            <div class="relative w-full h-full bg-gradient-to-br from-gray-700 to-gray-800 rounded-lg shadow-2xl overflow-hidden">
                                {{-- Car silhouette/placeholder --}}
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <svg class="w-3/4 h-3/4 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M5 11L6.5 6.5H17.5L19 11M5 11V16H7V18H9V16H15V18H17V16H19V11M5 11H19M9 13.5H15"/>
                                    </svg>
                                </div>
                                {{-- Glossy overlay --}}
                                <div class="absolute inset-0 bg-gradient-to-tr from-transparent via-white/10 to-transparent"></div>
                            </div>
                        </div>

                        {{-- Interior Image --}}
                        <div class="absolute top-0 right-1/4 w-3/5 h-2/5 transform hover:scale-105 transition-transform duration-700">
                            <div class="relative w-full h-full bg-gradient-to-br from-gray-600 to-gray-700 rounded-lg shadow-xl overflow-hidden">
                                {{-- Steering wheel icon --}}
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <svg class="w-1/2 h-1/2 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 2c4.41 0 8 3.59 8 8s-3.59 8-8 8-8-3.59-8-8 3.59-8 8-8zm0 2c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6z"/>
                                    </svg>
                                </div>
                                {{-- Glossy overlay --}}
                                <div class="absolute inset-0 bg-gradient-to-tr from-transparent via-white/10 to-transparent"></div>
                            </div>
                        </div>

                        {{-- Floating animation --}}
                        <style>
                            @keyframes float {
                                0%, 100% { transform: translateY(0px); }
                                50% { transform: translateY(-10px); }
                            }
                            .float-animation {
                                animation: float 4s ease-in-out infinite;
                            }
                        </style>
                        <div class="absolute inset-0 float-animation"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    {{-- JavaScript for mobile menu --}}
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
{{--@endsection--}}

{{-- resources/views/partials/footer.blade.php --}}
<footer class="bg-black/50 backdrop-blur-sm border-t border-white/10">
    <div class="max-w-7xl mx-auto px-8 py-8">
        <div class="text-center text-gray-400">
            <p>&copy; {{ date('Y') }} Sydney Mobile Technician Automotive. All rights reserved.</p>
        </div>
    </div>
</footer>
