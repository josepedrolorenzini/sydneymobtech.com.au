<x-layout>
    <x-slot:heading>about</x-slot:heading>
    <p>about page</p>
    {{$testAbout}}
    <div class="bg-yellow-400 min-h-screen p-6">

        <div class="flex flex-col lg:flex-row gap-10 m-9">
            {{-- Sidebar buttons --}}
            <div class="flex flex-col gap-4 w-full lg:w-1/4">
                <a href="{{ route('services') }}" class="bg-gray-800 text-white px-4 py-2 rounded shadow text-center hover:bg-gray-700">
                    Servicing and pricing
                </a>
                <a href="{{ route('repairs') }}" class="bg-gray-800 text-white px-4 py-2 rounded shadow text-center hover:bg-gray-700">
                    Types of Repairs
                </a>
                <a href="{{ route('contact') }}" class="bg-gray-800 text-white px-4 py-2 rounded shadow text-center hover:bg-gray-700">
                    Contact us
                </a>
            </div>

            {{-- Main Content --}}
            <div class="flex-1 max-w-3xl">
                <h1 class="text-3xl font-bold mb-6">About us!</h1>

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

                <p class="mt-8 font-bold">
                    Sydney Mobile Technician <br>
                    <span class="italic">Feel the difference...</span>
                </p>
            </div>
        </div>


        {{-- Top logos --}}
        <div class="flex flex-wrap justify-center gap-9 mb-10 bg-white my-0 p-4 mx-auto w-fit">
            <img src="{{ asset('images/bmw-logo.avif') }}" alt="BMW" class="h-12 sm:h-16">
            <img src="{{ asset('images/hyundai-logo.avif') }}" alt="Hyundai" class="h-12 sm:h-16">
            <img src="{{ asset('images/logo-kia.avif') }}" alt="Kia" class="h-12 sm:h-16">
            <img src="{{ asset('images/logo-holden.avif') }}" alt="Holden" class="h-12 sm:h-16">
            <img src="{{ asset('images/logo-toyota.avif') }}" alt="Toyota" class="h-12 sm:h-16">
        </div>
    </div>
</x-layout>