<x-layout>
    <x-slot:heading>about</x-slot:heading>
    <p>Repairs page</p>

    {{-- Repair Services Section --}}
    <section class="bg-black py-16 px-4">
        <!-- 3 Horizontal Cards Container -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-7xl mx-auto">

            {{-- Card 1: Mechanical Problems --}}
            <div class="bg-black border border-yellow-500 rounded-lg p-6 relative min-h-[500px]">
                {{-- Number --}}
                <div class="text-6xl font-bold text-yellow-500 mb-4">01</div>

                {{-- Title --}}
                <h2 class="text-white text-lg sm:text-xl font-bold mb-4">MECHANICAL PROBLEMS</h2>

                {{-- Services List --}}
                <ul class="text-gray-300 space-y-2 mb-20">
                    <li>Timing belt kit and seals replacement</li>
                    <li>Brakes and disc machining</li>
                    <li>Cylinder head rebuild and headgasket replacement</li>
                    <li>Performance enhancement</li>
                    <li>Water pumps</li>
                    <li>Cooling system repair</li>
                    <li>Suspension</li>
                    <li>Driveshafts and CVs</li>
                    <li>Ball joints and wheel bearings</li>
                    <li>Radiator renewals</li>
                    <li>and much more</li>
                </ul>

                {{-- Request Quote Button --}}
                <a href="{{ route('contact') ?? '#' }}"
                   class="bg-yellow-500 hover:bg-yellow-600 text-black font-semibold py-2 px-6 rounded absolute bottom-6 right-6 transition-colors duration-200">
                    Request a quote?
                </a>
            </div>

            {{-- Card 2: Electrical Problems --}}
            <div class="bg-black border border-yellow-500 rounded-lg p-6 relative min-h-[500px]">
                {{-- Number --}}
                <div class="text-6xl font-bold text-yellow-500 mb-4">02</div>

                {{-- Title --}}
                <h2 class="text-white text-xl font-bold mb-4">ELECTRICAL PROBLEMS</h2>

                {{-- Services List --}}
                <ul class="text-gray-300 space-y-2 mb-20">
                    <li>Starter Motors</li>
                    <li>Alternators</li>
                    <li>Voltage regulators</li>
                    <li>Batterys</li>
                    <li>Idle motors</li>
                    <li>Throttle position sensors</li>
                    <li>Knock sensors</li>
                    <li>Oxygen sensors</li>
                    <li>VVT sensor</li>
                    <li>Eccentric shaft sensors</li>
                    <li>Electronic diagnosis</li>
                    <li>Coding</li>
                    <li>and much more</li>
                </ul>

                {{-- Request Quote Button --}}
                <a href="{{ route('contact') ?? '#' }}"
                   class="bg-yellow-500 hover:bg-yellow-600 text-black font-semibold py-2 px-6 rounded absolute bottom-6 right-6 transition-colors duration-200">
                    Request a quote?
                </a>
            </div>

            {{-- Card 3: Clutch Repairs --}}
            <div class="bg-black border border-yellow-500 rounded-lg p-6 relative min-h-[500px]">
                {{-- Number --}}
                <div class="text-6xl font-bold text-yellow-500 mb-4">03</div>

                {{-- Title --}}
                <h2 class="text-white text-xl font-bold mb-4">CLUTCH REPAIRS</h2>

                {{-- Description --}}
                <div class="text-gray-300 space-y-4 mb-20">
                    <p>Yes! We do provide Clutch services just book in early and give us some time to complete.</p>
                    <p>Clutch repairs differ from vehicle to vehicle and the condition, so it can differ on how long the job can take.</p>
                </div>

                {{-- Request Quote Button --}}
                <a href="{{ route('contact') ?? '#' }}"
                   class="bg-yellow-500 hover:bg-yellow-600 text-black font-semibold py-2 px-6 rounded absolute bottom-6 right-6 transition-colors duration-200">
                    Request a quote?
                </a>
            </div>
        </div>
    </section>

    {{-- Optional: Add custom styles if needed --}}
    @push('styles')
        <style>
            /* Custom styles can be added here if needed */
            /* Desktop styles */
            .swiper-button-next {
                /*top: 25%;*/
            }

            /* Tablet styles */
            @media (max-width: 1024px) {
                .swiper-button-next {
                    top: 30%;
                }
            }

            /* Mobile styles */
            @media (max-width: 768px) {
                .swiper-button-next {
                    top: 35%;
                }

                .contact-bar .text-xs {
                    font-size: 10px;
                }
            }

            /* Small mobile styles */
            @media (max-width: 390px) {
                .swiper-button-next {
                    top: 40%;
                }
            }

        </style>
    @endpush

    {{-- Optional: Add JavaScript if needed --}}
    @push('scripts')
        <script>
            // Add any JavaScript functionality here
            document.querySelectorAll('a[href="#"]').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    alert('Please set up the quote request route first!');
                });
            });
        </script>
    @endpush



</x-layout>