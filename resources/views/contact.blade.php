<x-layout heading='Contact'>
    <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8 text-white">
        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">
            <!-- Left Contact Info -->
            <div class="lg:col-span-2 lg:py-12">
                <p class="text-xl font-semibold mb-4">Contact Us</p>
                <a href="tel:0415880668" class="text-2xl font-bold text-yellow-500 block mb-2">0415 880 668</a>
                <address class="not-italic text-gray-300">Sydney | NSW | Australia</address>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-3 bg-[#121212] p-8 rounded-lg shadow-lg">
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-white mb-2">Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                   class="w-full px-4 py-2 bg-[#1e1e1e] border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-white"
                                   required>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-white mb-2">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                   class="w-full px-4 py-2 bg-[#1e1e1e] border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-white"
                                   required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="subject" class="block text-sm font-medium text-white mb-2">Subject</label>
                        <input type="text" name="subject" id="subject" value="{{ old('subject') }}"
                               class="w-full px-4 py-2 bg-[#1e1e1e] border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-white"
                               required>
                    </div>

                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-white mb-2">Message</label>
                        <textarea name="message" id="message" rows="4"
                                  class="w-full px-4 py-2 bg-[#1e1e1e] border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-white"
                                  required>{{ old('message') }}</textarea>
                    </div>

                    <!-- Cloudflare Turnstile Widget (add JS at bottom) -->
                    <div class="mb-6">
                        <div class="cf-turnstile" data-sitekey="0x4AAAAAABn3ZlrEGKfm84Nq"></div>
                    </div>

                    <button type="submit"
                            class="w-full bg-yellow-400 hover:bg-yellow-600 text-black font-semibold py-3 rounded-md transition duration-300">
                        Send Enquiry
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Cloudflare Turnstile JS -->
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
</x-layout>
