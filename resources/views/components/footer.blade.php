<footer class="bg-black/95 backdrop-blur-sm border-t border-grey/10">
    <div class="max-w-7xl mx-auto px-8 py-8">
        <div class="text-center text-gray-400">
            <p>&copy; {{ date('Y') }} Sydney Mobile Technician Automotive. All rights reserved.</p>
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
