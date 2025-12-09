<x-layout>
    @section('content')
        <x-slot:heading>Terms & Conditions</x-slot:heading>

        {{-- Main Content Section with Dark Background and Grid Pattern --}}
        <section class="min-h-screen bg-gradient-to-br from-black via-gray-950 to-gray-950 relative overflow-hidden py-16 lg:py-24">

            {{-- Background Grid Pattern (kept for consistency with the site theme) --}}
            <div class="absolute inset-0 opacity-5">
                <div class="absolute inset-0" style="background-image: repeating-linear-gradient(0deg, transparent, transparent 50px, rgba(255,255,255,0.1) 50px, rgba(255,255,255,0.1) 51px), repeating-linear-gradient(90deg, transparent, transparent 50px, rgba(255,255,255,0.1) 50px, rgba(255,255,255,0.1) 51px);"></div>
            </div>

            {{-- Content Container --}}
            <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-white space-y-10">

                <h1 class="text-4xl lg:text-5xl font-extrabold text-yellow-400 mb-6 border-b border-gray-700 pb-4">
                    Mobile Mechanic Terms and Conditions
                </h1>

                <p class="text-lg text-gray-300">
                    Sydney Mobile Technician – Sydney, NSW | ABN: 512529651076
                </p>

                {{-- 1. Definitions --}}
                <div class="space-y-4">
                    <h2 class="text-2xl font-semibold text-white mb-3">1. Definitions</h2>
                    <ul class="list-disc pl-5 text-gray-300 space-y-2">
                        <li><strong class="text-yellow-400">"Company", "We", "Us"</strong> refers to Sydney Mobile Technician, the mobile mechanic service provider.</li>
                        <li><strong class="text-yellow-400">"Customer", "You"</strong> refers to the individual or business requesting services.</li>
                        <li><strong class="text-yellow-400">"Vehicle"</strong> refers to the motor vehicle serviced or inspected.</li>
                        <li><strong class="text-yellow-400">"Services"</strong> means any diagnostics, repairs, or maintenance carried out by us at the customer's location.</li>
                    </ul>
                </div>

                {{-- 2. Scope of Services --}}
                <div class="space-y-4">
                    <h2 class="text-2xl font-semibold text-white mb-3">2. Scope of Services</h2>
                    <p class="text-gray-300">
                        Sydney Mobile Technician provides mobile automotive services across Sydney, including but not limited to:
                    </p>
                    <ul class="list-disc pl-5 text-gray-300 space-y-2">
                        <li>Mechanical diagnostics</li>
                        <li>Battery replacements</li>
                        <li>Logbook servicing</li>
                        <li>Brake and suspension repairs</li>
                        <li>General maintenance and minor repairs</li>
                    </ul>
                    <p class="text-sm text-gray-500 italic pt-2 border-l-4 border-yellow-500 pl-3">
                        Note: Complex mechanical work (e.g. engine rebuilds or transmission replacements) may not be feasible in a mobile setting and may be referred to a suitable workshop.
                    </p>
                </div>

                {{-- 3. Bookings & Call-Outs --}}
                <div class="space-y-4">
                    <h2 class="text-2xl font-semibold text-white mb-3">3. Bookings & Call-Outs</h2>
                    <ul class="list-disc pl-5 text-gray-300 space-y-2">
                        <li>Services must be booked in advance via phone, email, or our website.</li>
                        <li>A call-out fee may apply, especially for diagnostics, emergency assistance, or unsuccessful service attempts due to access or safety issues.</li>
                        <li>While we strive for punctuality, delays can occur due to traffic, job overruns, or weather.</li>
                    </ul>
                </div>

                {{-- 4. Payments --}}
                <div class="space-y-4">
                    <h2 class="text-2xl font-semibold text-white mb-3">4. Payments</h2>
                    <ul class="list-disc pl-5 text-gray-300 space-y-2">
                        <li>Payment is due immediately upon completion of services unless otherwise arranged.</li>
                        <li>Accepted payment methods:
                            <ul class="list-circle pl-8 pt-1 space-y-1">
                                <li>Cash</li>
                                <li>EFTPOS</li>
                                <li>Account Transfer</li>
                                <li>Secure Payment Link</li>
                            </ul>
                        </li>
                        <li>All prices are in Australian Dollars (AUD) and include GST where applicable.</li>
                        <li>Invoices not paid on time may incur late fees or be referred to a debt collection agency.</li>
                    </ul>
                </div>

                {{-- 5. Cancellations & Rescheduling --}}
                <div class="space-y-4">
                    <h2 class="text-2xl font-semibold text-white mb-3">5. Cancellations & Rescheduling</h2>
                    <ul class="list-disc pl-5 text-gray-300 space-y-2">
                        <li>Cancellations within 24 hours of the scheduled appointment may incur a cancellation fee.</li>
                        <li>We reserve the right to reschedule jobs due to weather, unsafe working conditions, or unforeseen circumstances.</li>
                    </ul>
                </div>

                {{-- 6. Customer Responsibilities --}}
                <div class="space-y-4">
                    <h2 class="text-2xl font-semibold text-white mb-3">6. Customer Responsibilities</h2>
                    <p class="text-gray-300">You agree to:</p>
                    <ul class="list-disc pl-5 text-gray-300 space-y-2">
                        <li>Ensure the vehicle is accessible and legally parked</li>
                        <li>Provide a safe, level, and secure workspace</li>
                        <li>Disclose any relevant issues, history, or modifications to the vehicle</li>
                        <li>Provide accurate contact and location information</li>
                        <li>We may decline service if working conditions are unsafe or illegal.</li>
                    </ul>
                </div>

                {{-- 7. Parts, Warranty & Australian Consumer Law --}}
                <div class="space-y-4">
                    <h2 class="text-2xl font-semibold text-white mb-3">7. Parts, Warranty & Australian Consumer Law</h2>
                    <ul class="list-disc pl-5 text-gray-300 space-y-2">
                        <li>We use quality OEM or aftermarket parts depending on availability and customer preference.</li>
                        <li>Warranty terms:
                            <ul class="list-square pl-8 pt-1 space-y-1">
                                <li>Labour: 30 days or 1,000 km (whichever occurs first)</li>
                                <li>Parts: As per manufacturer/supplier warranty</li>
                            </ul>
                        </li>
                        <li>No warranty applies to customer-supplied parts or work interfered with post-service.</li>
                        <li>We comply fully with Australian Consumer Law, which guarantees your rights to remedies for faulty goods or services.</li>
                    </ul>
                </div>

                {{-- 8. Liability --}}
                <div class="space-y-4">
                    <h2 class="text-2xl font-semibold text-white mb-3">8. Liability</h2>
                    <ul class="list-disc pl-5 text-gray-300 space-y-2">
                        <li>We are not liable for:
                            <ul class="list-square pl-8 pt-1 space-y-1">
                                <li>Pre-existing faults or unrelated mechanical issues</li>
                                <li>Damage due to improper use or poor vehicle maintenance</li>
                                <li>Delays caused by suppliers, traffic, parts availability, or third-party actions</li>
                            </ul>
                        </li>
                        <li>We take all reasonable care but accept no responsibility for indirect or consequential loss.</li>
                    </ul>
                </div>

                {{-- 9. Roadside & Emergency Services --}}
                <div class="space-y-4">
                    <h2 class="text-2xl font-semibold text-white mb-3">9. Roadside & Emergency Services</h2>
                    <ul class="list-disc pl-5 text-gray-300 space-y-2">
                        <li>Roadside service is subject to availability and safety.</li>
                        <li>Unsafe or unsuitable locations (e.g. motorways, steep inclines, dangerous roads) may result in declined service or rescheduling.</li>
                    </ul>
                </div>

                {{-- 10. Right to Refuse Service --}}
                <div class="space-y-4">
                    <h2 class="text-2xl font-semibold text-white mb-3">10. Right to Refuse Service</h2>
                    <p class="text-gray-300">We reserve the right to refuse or cancel a service if:</p>
                    <ul class="list-disc pl-5 text-gray-300 space-y-2">
                        <li>The environment is unsafe</li>
                        <li>There is abusive, threatening, or inappropriate behaviour</li>
                        <li>The issue is beyond our mobile repair capabilities</li>
                    </ul>
                </div>

                {{-- 11. Privacy Policy --}}
                <div class="space-y-4">
                    <h2 class="text-2xl font-semibold text-white mb-3">11. Privacy Policy</h2>
                    <ul class="list-disc pl-5 text-gray-300 space-y-2">
                        <li>We collect personal information to process bookings, perform services, and manage invoicing.</li>
                        <li>Data is handled in accordance with the Privacy Act 1988 (Cth) and is never shared without your consent unless required by law.</li>
                    </ul>
                </div>

                {{-- 12. Governing Law --}}
                <div class="space-y-4">
                    <h2 class="text-2xl font-semibold text-white mb-3">12. Governing Law</h2>
                    <ul class="list-disc pl-5 text-gray-300 space-y-2">
                        <li>These terms are governed by the laws of New South Wales, Australia.</li>
                        <li>Any disputes will be handled under NSW courts and Australian Consumer Law.</li>
                    </ul>
                </div>

                {{-- 13. Contact Information & Acknowledgement --}}
                <div class="space-y-6 pt-6 border-t border-gray-700">
                    <h2 class="text-2xl font-semibold text-white mb-3">13. Contact Information</h2>
                    <ul class="list-disc pl-5 text-gray-300 space-y-2">
                        <li>Sydney Mobile Technician</li>
                        <li>Phone: 0415 660 660</li>
                        <li>Email: info@sydneymobtech.com.au</li>
                        <li>Website: <a href="https://sydneymobtech.com.au" class="text-yellow-400 hover:text-yellow-300 transition-colors">https://sydneymobtech.com.au</a></li>
                        <li>ABN: 512529651076</li>
                    </ul>

                    <h3 class="text-xl font-bold text-yellow-400 pt-4">Customer Acknowledgement</h3>
                    <p class="text-lg text-gray-100 italic">
                        By requesting or accepting our services, you confirm that you have read, understood, and agreed to these Terms and Conditions.
                    </p>
                </div>

            </div>
        </section>

    @endsection
</x-layout>