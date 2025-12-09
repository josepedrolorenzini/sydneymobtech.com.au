{{-- Responsive Header Contact Bar --}}
<div class="fixed top-0 z-50 w-full bg-stone-950 text-white text-xs sm:text-sm shadow">
    <div class="max-w-7xl mx-auto px-2 sm:px-4 py-2">
        <div class="flex items-center justify-center space-x-2 sm:space-x-4 md:space-x-6 text-center">

            {{-- Phone --}}
            <a href="tel:0415880668" class="flex items-center space-x-1 sm:space-x-2 hover:underline flex-shrink-0">
                <i class="fa fa-phone text-xs"></i>
                <span class="text-xs sm:text-sm whitespace-nowrap">0415 880 668</span>
            </a>

            {{-- Separator for mobile --}}
            <span class="text-gray-400 sm:hidden">|</span>

            {{-- Email --}}
            <a href="mailto:sydneymobtech@gmail.com" class="flex items-center space-x-1 sm:space-x-2 hover:underline flex-shrink-0">
                <i class="fa fa-envelope text-xs"></i>
                <span class="text-xs sm:text-sm truncate max-w-[120px] sm:max-w-none">sydneymobtech@gmail.com</span>
            </a>

            {{-- ABN - Hidden on mobile, visible on tablet and desktop --}}
            <span class="hidden md:flex items-center space-x-2 flex-shrink-0">
                <i class="fa fa-info-circle text-xs"></i>
                <span class="text-xs sm:text-sm whitespace-nowrap">ABN 125 296 510 76</span>
            </span>

        </div>
    </div>
</div>

{{-- Add some top padding to body content to account for fixed header --}}
<style>
    body {
        padding-top: 2.5rem; /* Adjust based on your header height */
    }

    /* Custom responsive utilities if needed */
    @media (max-width: 390px) {
        .contact-bar .text-xs {
            font-size: 10px;
        }
    }
</style>