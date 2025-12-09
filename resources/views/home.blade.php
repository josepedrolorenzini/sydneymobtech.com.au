<x-layout>
    @section("content")
    <x-slot:heading>Home</x-slot:heading>

    {{--     Home Page -    about us --}}
        <div class="bg-white h-auto p-6">

            <div class="flex flex-col lg:flex-row gap-10 m-9">
                {{-- Sidebar buttons --}}
                <div class="flex flex-col gap-4 w-full lg:w-1/4">
                    <a href="{{ route('repairs') }}" class="bg-stone-950 text-white px-4 py-2 rounded shadow text-center hover:bg-gray-700">
                       Repairs
                    </a>
                    <a href="{{ route('services') }}" class="bg-stone-950 text-white px-4 py-2 rounded shadow text-center hover:bg-gray-700">
                       Our Services
                    </a>
                    <a href="{{ route('contact') }}" class="bg-stone-950 text-white px-4 py-2 rounded shadow text-center hover:bg-gray-700">
                        Contact Us
                    </a>
                </div>

                {{-- Main Content --}}
                <div class="flex-1 max-w-3xl">
                    <h1 class="mb-4 text-4xl font-bold">Sydney Mobile Technician</h1>
                    <h3 class="text-3xl font-bold mb-6">About us!</h3>
                    <p class="mb-4">
                        <strong>Welcome to Sydney Mobile Technician...</strong>
                    </p>

                    <p class="mb-4">
                        If you are looking for a professional to look after your vehicle, then look no further. <br>
                        We know it's difficult to choose the right technician. You may be stuck asking yourself
                        <em>"Where do I start?"</em>
                    </p>

                    <p class="mb-4">
                        We've made it simple for our customers to understand the most important value of our business.
                        <strong>"TRUST"</strong>. <br>
                        We know this from our high value feedback customer base.
                    </p>

                    <p class="mb-6">
                        Along with trust comes convenience, quality workmanship and care.
                    </p>

                    <ul class="list-disc list-inside space-y-2 text-gray-900 font-medium">
                        <li>We come to you</li>
                        <li>We pick up and deliver your vehicle for tyres or rego inspections</li>
                        <li>In most cases you may not need a tow, we may be able to fix your vehicle where it breaks down</li>
                        <li>Peace of mind your vehicle is in good hands</li>
                    </ul>


                    <p class="mb-2 text-lg mt-8 font-bold">For inquiries, please contact us:</p>

                    <!-- Email Section -->
                    <div class="flex mb-2 text-lg">
                        <!-- Email Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2 text-blue-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                        <!-- Email Link -->
                        <a href="mailto:sydneymobtech@gmail.com" class="text-black hover:underline">sydneymobtech@gmail.com</a>
                    </div>

                    <!-- Phone Section -->
                    <div class="flex mb-2 text-lg">
                        <!-- Phone Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <!-- Phone Number -->
                        <a href="tel:0415880668" class="text-black hover:underline">0415 880 668</a>
                    </div>
                    <p class="mt-8 font-bold">Sydney Mobile Technician </p>
                </div>
            </div>

            {{-- Top logos --}}
            <div class="flex flex-wrap justify-center gap-9 mb-10 bg-white my-0 p-4 mx-auto w-fit">
                <img src="https://sydneymobtech.com.au/images/bmw-logo.avif" alt="BMW" class="h-12 sm:h-16">
                <img src="https://sydneymobtech.com.au/images/hyundai-logo.avif" alt="Hyundai" class="h-12 sm:h-16">
                <img src="https://sydneymobtech.com.au/images/logo-kia.avif" alt="Kia" class="h-12 sm:h-16">
                <img src="https://sydneymobtech.com.au/images/logo-holden.avif" alt="Holden" class="h-12 sm:h-16">
                <img src="https://sydneymobtech.com.au/images/logo-toyota.avif" alt="Toyota" class="h-12 sm:h-16">
            </div>
        </div>
        {{--        about us --}}
    @endsection
</x-layout>