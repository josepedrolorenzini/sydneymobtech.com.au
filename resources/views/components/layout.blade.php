<!DOCTYPE html>
<html lang="en" class="h-full bg-black">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="{{ asset('public/build/assets/app-BEbClFJT.css') }}" rel="stylesheet">

   
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @if(Request::path() !== '/services' && Request::path() !== '/contact')
    <link href="https://cdn.jsdelivr.net/npm/swiper@9.1.1/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/swiper@9.1.1/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/swiperBanner.js') }}" defer></script>
    @endif

    <title>Sydney Mob Tech</title>
<style>
     .container {
            background: whitesmoke;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            max-width: 500px;
            width: 90%;
            margin: 0 auto;
        }
        .swiper-container {
        overflow: hidden;
        }
</style>
</head>
<body class="h-full bg-black">

<div class="min-h-full">
        {{--    top header --}}
        @include("components.TopHeader")
    <header class="fixed top-8 left-0 right-0 bg-black backdrop-blur-sm z-50 border-b border-white/10">
        <nav class="flex justify-between items-center max-w-7xl mx-auto px-8 py-4">
            {{-- Logo --}}
            <div class="flex items-center gap-3 float-left">
                <a href="{{ route('home') }}" class="inline-flex">
                    <div class="w-16 h-16 flex items-center justify-center relative">
                        <div class="absolute inset-1 bg-gray-900 rounded-full"></div>
                        <div class="relative z-10">
                            <img decoding="async"
                                 class="pagelayer-img pagelayer-wp-title-img"
                                 src="https://sydneymobtech.com.au/wp/wp-content/uploads/2025/05/logo_web_sydney_tech.webp"
                                 title="logo_web_sydney_tech" alt="logo_web_sydney_tech">
                        </div>
                    </div>
                    <div class="flex flex-col ms-4">
                        <span class="text-yellow-400 font-bold text-lg">SYDNEY</span>
                        <span class="text-gray-400 text-xs uppercase tracking-wider">MOBILE TECHNICIAN</span>
                        <span class="text-gray-400 text-xs uppercase tracking-wider">AUTOMOTIVE</span>
                    </div>
                </a>
            </div>


            {{-- Navigation Menu --}}
            <ul class="hidden md:flex space-x-8">
                <li>
                    <a href="{{ route('home') }}" class=" {{ request()->is('/') ? 'text-yellow-400 font-bold' : 'text-white' }}  text-white hover:text-yellow-400 transition-colors duration-300 relative group ">
                        Home
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-400 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
                <li><a href="{{ route('repairs') }}" class=" {{ request()->is('repairs') ? 'text-yellow-400 font-bold' : 'text-white' }} text-white hover:text-yellow-400 transition-colors duration-300 relative group">
                        Repairs
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-400 transition-all duration-300 group-hover:w-full"></span>
                    </a></li>
                <li>
                    <a href="{{ route('services') }}" class=" {{ request()->is('services') ? 'text-yellow-400 font-bold' : 'text-white' }} hover:text-yellow-400 transition-colors duration-300 relative group">
                        Services
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 {{request()->is('services') ? 'bg-yellow-400' : ''}} transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class=" {{ request()->is('contact') ? 'text-yellow-400 font-bold' : 'text-white' }} text-white hover:text-yellow-400 transition-colors duration-300 relative group">
                        Contact
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-400 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
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
                <a href="{{ route('services') }}" class="block text-white hover:text-yellow-400 transition-colors duration-300">Services</a>
                <a href="{{ route('repairs') }}" class="block text-white hover:text-yellow-400 transition-colors duration-300">Repairs</a>
                <a href="{{ route('contact') }}" class="block text-white hover:text-yellow-400 transition-colors duration-300">Contact</a>
            </div>
        </div>
    </header>

    <main class="bg-black my-30">

        <!-- Your content -->
        @if(Request::path() !== '/about' && Request::path() !== 'contact'
            & Request::path() !== 'services' && Request::path() !== 'terms-and-conditions'  )
         <x-bannerSlider></x-bannerSlider>
          {{--        debbuging--}}
{{--            {{--}}
{{--                //Request::path()--}}
{{--                // {request()->is('/')--}}
{{--                // url()->current()--}}
{{--            }}--}}

        @endif
        
        {{$slot}}
          @yield('content')

    </main>
  </div>

@include("components.footerFull")
</body>
</html>