{{-- Footer Section --}}
<footer class="bg-stone-950 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">

            {{-- Company Info Section --}}
            <div class="lg:col-span-1">
                {{-- Logo/Brand --}}
                <div class="mb-6">
                    <h5 class="text-lg sm:text-xl font-bold text-yellow-400 mb-4">Sydney Mobile Technician</h5>
                    <small class="text-gray-400 text-sm leading-relaxed">
                        Professional mobile automotive services across Sydney, bringing quality repairs to your doorstep.
                    </small>
                </div>

                {{-- Contact Info --}}
                <div class="mb-6 space-y-3">
                    <p class="text-gray-500 text-xs uppercase tracking-wider mb-3">CONTACT</p>

                    {{-- Phone --}}
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4 text-blue-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                        <a href="tel:+61415880668"
                           class="text-white hover:text-blue-400 transition-colors duration-200 text-sm">
                            +61 0415 880 668
                        </a>
                    </div>

                    {{-- Location --}}
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4 text-blue-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-300 text-sm">Sydney, Australia</span>
                    </div>

                    {{-- Email --}}
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4 text-blue-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        <a href="mailto:claude@sydneymobtech.com.au"
                           class="text-white hover:text-blue-400 transition-colors duration-200 text-sm break-all">
                            claude@sydneymobtech.com.au
                        </a>
                    </div>
                </div>
            </div>

            {{-- Quick Links Section --}}
            <div class="lg:col-span-1">
                <h3 class="text-lg font-semibold text-white mb-6">Quick Links</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('home') ?? '/' }}"
                           class="text-gray-400 hover:text-white transition-colors duration-200 text-sm">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') ?? '/services' }}"
                           class="text-gray-400 hover:text-white transition-colors duration-200 text-sm">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') ?? '/contact' }}"
                           class="text-gray-400 hover:text-white transition-colors duration-200 text-sm">
                            Contact Us
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('terms-and-conditions') ?? '/terms-and-conditions' }}"
                           class="text-gray-400 hover:text-white transition-colors duration-200 text-sm">
                            Terms & Conditions
                        </a>
                    </li>
{{--                    <li>--}}
{{--                        <a href="{{ route('quote.request') ?? '/quote' }}"--}}
{{--                           class="text-gray-400 hover:text-white transition-colors duration-200 text-sm">--}}
{{--                            Get Quote--}}
{{--                        </a>--}}
{{--                    </li>--}}
                </ul>
            </div>

            {{-- Services Section --}}
            <div class="lg:col-span-1">
                <h3 class="text-lg font-semibold text-white mb-6">Our Services</h3>
                <ul class="space-y-3">
                    <li>
{{--                        <a href="{{ route('services.mechanical') ?? '/services/mechanical' }}"--}}
{{--                           class="text-gray-400 hover:text-white transition-colors duration-200 text-sm">--}}
                            Mechanical Repairs
{{--                        </a>--}}
                    </li>
                    <li>
{{--                        <a href="{{ route('services.electrical') ?? '/services/electrical' }}"--}}
{{--                           class="text-gray-400 hover:text-white transition-colors duration-200 text-sm">--}}
                            Electrical Repairs
{{--                        </a>--}}
                    </li>
                    <li>
{{--                        <a href="{{ route('services.clutch') ?? '/services/clutch' }}"--}}
{{--                           class="text-gray-400 hover:text-white transition-colors duration-200 text-sm">--}}
                            Clutch Services
{{--                        </a>--}}
                    </li>
                    <li>
{{--                        <a href="{{ route('services.diagnostic') ?? '/services/diagnostic' }}"--}}
{{--                           class="text-gray-400 hover:text-white transition-colors duration-200 text-sm">--}}
                            Diagnostic Services
{{--                        </a>--}}
                    </li>
                    <li>
{{--                        <a href="{{ route('services.mobile') ?? '/services/mobile' }}"--}}
{{--                           class="text-gray-400 hover:text-white transition-colors duration-200 text-sm">--}}
                            Mobile Service
{{--                        </a>--}}
                    </li>
                </ul>
            </div>

            {{-- Newsletter Section --}}
            <div class="lg:col-span-1">
                <h3 class="text-lg font-semibold text-white mb-6">Stay Updated</h3>
                <p class="text-gray-400 text-sm mb-6">
                    Subscribe for maintenance tips and special offers
                </p>

                {{-- Newsletter Form --}}
{{--                <form action="{{ route('newsletter.subscribe') ?? '#' }}" method="POST" class="space-y-4">--}}
{{--                    @csrf--}}
{{--                    <div class="flex flex-col sm:flex-row gap-2">--}}
{{--                        <input type="email"--}}
{{--                               name="email"--}}
{{--                               placeholder="Your email address"--}}
{{--                               required--}}
{{--                               class="flex-1 px-4 py-2 bg-gray-700 border border-gray-600 rounded-md sm:rounded-l-md sm:rounded-r-none text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">--}}
{{--                        <button type="submit"--}}
{{--                                class="px-4 py-2 bg-blue-600 hover:bg-blue-700 border border-blue-600 rounded-md sm:rounded-l-none sm:rounded-r-md text-white transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 flex items-center justify-center">--}}
{{--                            <span class="sr-only">Subscribe</span>--}}
{{--                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>--}}
{{--                            </svg>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    @error('email')--}}
{{--                    <p class="text-red-400 text-xs">{{ $message }}</p>--}}
{{--                    @enderror--}}
{{--                </form>--}}
            </div>
        </div>

        {{-- Bottom Section --}}
        <div class="border-t border-gray-700 mt-12 pt-8">
            <div class="flex flex-col sm:flex-row justify-between items-center space-y-4 sm:space-y-0">
                {{-- Copyright --}}
                <p class="text-gray-400 text-sm">
                    © {{ date('Y') }} Sydney Mobile Tech. All rights reserved
                </p>

                {{-- Social Media Links --}}
                <div class="flex space-x-4">
                    {{-- LinkedIn --}}
                    <a href="#"
                       class="text-gray-400 hover:text-white transition-colors duration-200">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                    </a>

                    {{-- Add more social media icons as needed --}}
                </div>
            </div>
        </div>
    </div>
    {{-- JavaScript for mobile menu --}}
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

    </script>
    {{-- JavaScript for mobile menu --}}

    <script src="{{ asset('public/build/assets/swiperBanner-D66pBp0w.js') }}" defer></script>
</footer>

{{-- Optional: Display success message for newsletter subscription --}}
@if(session('newsletter_success'))
    <div class="fixed bottom-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50">
        <p>{{ session('newsletter_success') }}</p>
    </div>
@endif