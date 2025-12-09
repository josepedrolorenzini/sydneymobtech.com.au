<x-layout>
    @section('content')
    <x-slot:heading>Services</x-slot:heading>
        <section class="min-h-screen bg-gradient-to-br from-black via-gray-950 to-gray-950 relative overflow-hidden">
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
{{--                                <div class="flex items-center gap-3">--}}
{{--                                    <svg class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>--}}
{{--                                    </svg>--}}
{{--                                    <span>Peace of mind knowing your vehicle is in good hands</span>--}}
{{--                                </div>--}}
                            </div>

                            <div class="pt-4 mb-24">
                                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-yellow-500 to-yellow-600 text-black font-semibold rounded-lg hover:from-yellow-600 hover:to-yellow-700 transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl">
                                    Request for a Quote
                                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        {{-- Car Images --}}
                        <div class="relative h-126 lg:h-[500px]">
                            {{-- Main Car Image --}}
                            <div class="absolute top-0 right-0  w-full h-3/4 transform hover:scale-105 transition-transform duration-700">
                                <div class="relative w-full h-full">
                                    {{-- Car silhouette/placeholder --}}
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <img src="{{ asset('images/sydneMobTech_services_repairs_72dpi.jpg') }}" 
                                            alt="Pickup truck for service vehicle" 
                                            class="img-fluid">
                                    </div>
                                    {{-- Glossy overlay --}}
                                    <div class="absolute inset-0 "></div>
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
                            <!--div class="absolute inset-0 float-animation"></div-->
                        </div>
                    </div>
                </div>
            </section>


                <div class="min-h-screen bg-black text-white">
                    {{-- Hero Section --}}
                    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                        <div class="max-w-4xl">
                            <h1 class="text-5xl md:text-6xl font-bold mb-8 leading-tight">
                                We make auto repair more convenient
                            </h1>

                            <p class="text-xl text-gray-300 mb-12 leading-relaxed">
                                We pick up and deliver your vehicle for tyres or rego inspections In most cases you may not need a tow
                            </p>

                            {{-- Service Features --}}
                            <div class="space-y-4">
{{--                                <div class="flex items-center space-x-4">--}}
{{--                                    <div class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center flex-shrink-0">--}}
{{--                                        <svg class="w-4 h-4 text-black" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>--}}
{{--                                        </svg>--}}
{{--                                    </div>--}}
{{--                                    <span class="text-lg text-gray-300">Courtesy Loaner Vehicle</span>--}}
{{--                                </div>--}}

{{--                                <div class="flex items-center space-x-4">--}}
{{--                                    <div class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center flex-shrink-0">--}}
{{--                                        <svg class="w-4 h-4 text-black" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>--}}
{{--                                        </svg>--}}
{{--                                    </div>--}}
{{--                                    <span class="text-lg text-gray-300">24-Hour Roadside Assistance</span>--}}
{{--                                </div>--}}

                                <div class="flex items-center space-x-4">
                                    <div class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-4 h-4 text-black" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-lg text-gray-300">Customer Rewards Program</span>
                                </div>

{{--                                <div class="flex items-center space-x-4">--}}
{{--                                    <div class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center flex-shrink-0">--}}
{{--                                        <svg class="w-4 h-4 text-black" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>--}}
{{--                                        </svg>--}}
{{--                                    </div>--}}
{{--                                    <span class="text-lg text-gray-300">Courtesy Local Shuttle Service</span>--}}
{{--                                </div>--}}

{{--                                <div class="flex items-center space-x-4">--}}
{{--                                    <div class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center flex-shrink-0">--}}
{{--                                        <svg class="w-4 h-4 text-black" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>--}}
{{--                                        </svg>--}}
{{--                                    </div>--}}
{{--                                    <span class="text-lg text-gray-300">24 Month / 24,000km Nationwide Warranty</span>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>

                    {{-- Services Section --}}
                    <div class="mx-auto px-6 py-16 bg-black">
                        <h2 class="text-5xl font-bold text-center mb-16">Why Choose Us?</h2>

                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                            {{-- Coling system repair --}}
                            <div class="border border-gray-700 rounded-lg p-8 hover:border-yellow-500 transition-colors duration-300">
                                <div class="flex justify-center mb-6">
                                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center">
                                        <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 24 24">
                                            <circle cx="12" cy="12" r="3"/>
                                            <path d="M12 1v6m0 10v6m11-7h-6m-10 0H1"/>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-xl font-semibold text-yellow-500 text-center">Cooling System Repair</h3>
                            </div>

                            {{-- Wheel Servicing --}}
                            <div class="border border-gray-700 rounded-lg p-8 hover:border-yellow-500 transition-colors duration-300">
                                <div class="flex justify-center mb-6">
                                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center">
                                        <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M22 14H17L15 16V20H9V16L7 14H2V9H7L9 7V3H15V7L17 9H22V14Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-xl font-semibold text-yellow-500 text-center"> Log Book Servicing</h3>
                            </div>

                            {{-- Vehicle Inspection --}}
                            <div class="border border-gray-700 rounded-lg p-8 hover:border-yellow-500 transition-colors duration-300">
                                <div class="flex justify-center mb-6">
                                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center">
                                        <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5H15V3C15 2.45 14.55 2 14 2H10C9.45 2 9 2.45 9 2V5H6.5C5.84 5 5.28 5.42 5.08 6.01L3 12V20C3 20.55 3.45 21 4 21H5C5.55 21 6 20.55 6 20V19H18V20C18 20.55 18.45 21 19 21H20C20.55 21 21 20.55 21 20V12L18.92 6.01ZM6.5 16C5.67 16 5 15.33 5 14.5S5.67 13 6.5 13S8 13.67 8 14.5S7.33 16 6.5 16ZM17.5 16C16.67 16 16 15.33 16 14.5S16.67 13 17.5 13S19 13.67 19 14.5S18.33 16 17.5 16Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-xl font-semibold text-yellow-500 text-center">Vehicle Inspection</h3>
                            </div>

                            {{-- Latest Equipment Diagnostics --}}
                            <div class="border border-gray-700 rounded-lg p-8 hover:border-yellow-500 transition-colors duration-300">
                                <div class="flex justify-center mb-6">
                                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center">
                                        <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2L4 7V10H6V17H4V20H20V17H18V10H20V7L12 2ZM8 15V10H10V15H8ZM14 15V10H16V15H14Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-xl font-semibold text-yellow-500 text-center">Latest Equipment Diagnostics</h3>
                            </div>

                            {{-- Charging & Batteries --}}
                            <div class="border border-gray-700 rounded-lg p-8 hover:border-yellow-500 transition-colors duration-300">
                                <div class="flex justify-center mb-6">
                                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center">
                                        <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M15.67 4H14V2H10V4H8.33C7.6 4 7 4.6 7 5.33V20.67C7 21.4 7.6 22 8.33 22H15.67C16.4 22 17 21.4 17 20.67V5.33C17 4.6 16.4 4 15.67 4ZM13 15.5H11V13H13V15.5ZM13 11H11V8.5H13V11Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-xl font-semibold text-yellow-500 text-center">Charging & Batteries</h3>
                            </div>

                            {{-- Fuel System Repair --}}
                            <div class="border border-gray-700 rounded-lg p-8 hover:border-yellow-500 transition-colors duration-300">
                                <div class="flex justify-center mb-6">
                                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center">
                                        <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2C13.1 2 14 2.9 14 4V8H10V4C10 2.9 10.9 2 12 2ZM21 9V7L16 2H14V8H10V2H8L3 7V9H21ZM12 10C10.9 10 10 10.9 10 12V20C10 21.1 10.9 22 12 22S14 21.1 14 20V12C14 10.9 13.1 10 12 10Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-xl font-semibold text-yellow-500 text-center">Fuel System Repair</h3>
                            </div>
                        </div>
                    </div>
                </div>

        </section>
        <div class="mx-auto px-6 py-16 bg-black">
         <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          @foreach ($services as $service)
               <div class="border border-gray-700 rounded-lg p-8 hover:border-yellow-500 transition-colors duration-300">
            <div class="flex justify-center mb-6">
                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 24 24">
                        <path d="{{$service->services_icon}}"/>
                    </svg>
                </div>
            </div>
            <h3 class="text-xl font-semibold text-yellow-500 text-center">{{ $service->services_name }}</h3>
        </div>
             
          @endforeach
        </div>
        </div>


        @php
            // Convert the services collection to JSON and encode it safely
            $servicesJson = json_encode($services->toArray());
        @endphp
        <script>
            console.log("Services Data:", {!! $servicesJson !!});
        </script>
      
    @endsection
</x-layout>