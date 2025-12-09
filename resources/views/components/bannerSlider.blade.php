<!-- Swiper HTML -->
    <div
{{--            class="swiper-container mySwiper overflow-hidden mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"--}}
            class="swiper-container mySwiper"
    >
        <div class="swiper-wrapper">
            <!-- Add slides here -->
            <div class="swiper-slide">
                <div class="fixed pt-6 ml-4 ">
                    <h1 class="mb-4 text-4xl text-yellow-400 font-bold">Sydney Mobile Technician</h1>
                    <p class="mb-2 text-xs text-white md:w-96 md:text-lg">Your trusted
                        <strong>Sydney Mobile Technicians</strong>.
                        We provide on-the-spot car repairs and maintenance services across Sydney.</p>
                </div>
                <img src="{{ asset('public/images/mechanic-image.jpg') }}" alt="Image 1" class="w-full h-auto">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('public/images/mechanic-image2.jpg') }}" alt="Image 1" class="w-full h-auto">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('public/images/mechanic-image.jpg') }}" alt="Image 1" class="w-full h-auto">
            </div>
        </div>
        <!-- Add Pagination -->
        <!--div class="swiper-pagination"></div>
        < Add Navigation -->
        <!--div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div-->
    </div>