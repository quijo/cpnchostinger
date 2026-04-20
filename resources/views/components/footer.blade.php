{{-- <div class="sitemap"> footer site map</div>
<div class="contactinfo"> contact info</div>
<div class="socialicons">Social Icons</div>
<div class="termsofservice">terms of service</div>
<div class="linkstopartner"> Links to Partner</div> --}}

    {{-- --------------------- --}}
    {{-- Footer Section --}}
    {{-- --------------------- --}}

<footer class="bg-gray-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-10">

        <!-- Contact Form -->
        <div>
            <h2 class="text-xl font-semibold mb-4">Contact Us</h2>
           <form method="POST" action="{{ route('contact.send') }}" class="space-y-4">
    @csrf

    <input type="text" name="name" placeholder="Your Name"
        class="w-full p-3 rounded bg-gray-800 border border-gray-700">

    <input type="email" name="email" placeholder="Your Email"
        class="w-full p-3 rounded bg-gray-800 border border-gray-700">

    <textarea name="message" placeholder="Your Message" rows="4"
        class="w-full p-3 rounded bg-gray-800 border border-gray-700"></textarea>

    <button type="submit"
        class="bg-blue-600 hover:bg-blue-700 px-6 py-2 rounded font-semibold">
        Send Message
    </button>

    @if(session('success'))
        <p class="text-green-400 text-sm mt-2">
            {{ session('success') }}
        </p>
    @endif
</form>
        </div>

        <!-- Google Map -->
        <div>
            <h2 class="text-xl font-semibold mb-4">Our Location</h2>
            <div class="w-full h-64">
                <iframe 
                    class="w-full h-full rounded"
                    src="https://www.google.com/maps?q=Central+Philippine+Nazarene+College&output=embed"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>
        </div>

        <!-- Social Media -->
        <div>
            <h2 class="text-xl font-semibold mb-4">Follow Us</h2>
            <p class="text-gray-400 mb-4">Stay connected through our social platforms</p>
            
            <div class="flex space-x-4">
                <a href="#" class="bg-gray-800 p-3 rounded hover:bg-blue-600">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="bg-gray-800 p-3 rounded hover:bg-sky-500">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="bg-gray-800 p-3 rounded hover:bg-pink-500">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="bg-gray-800 p-3 rounded hover:bg-red-600">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>

            <div class="mt-6 text-gray-500 text-sm">
                © 2026 Central Philippine Nazarene College. All rights reserved.
            </div>
        </div>

    </div>
</footer>