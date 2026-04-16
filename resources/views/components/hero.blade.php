<section class="relative h-[80vh] flex items-center justify-center text-white">

    {{-- BACKGROUND IMAGE --}}
    <div class="absolute inset-0">
        <img src="{{ asset('images/62.jpg') }}"
             class="w-full h-full object-cover"
             alt="Hero Background">
    </div>

    {{-- DARK OVERLAY --}}
    <div class="absolute inset-0 bg-black/80"></div>

    {{-- CONTENT --}}
    <div class="relative z-10 text-center px-6 max-w-3xl">

        <h1 class="text-3xl md:text-5xl font-bold leading-tight">
            Central Philippine Nazarene College
        </h1>

        <p class="mt-4 text-sm md:text-lg text-gray-200">
            Equipping students with faith, excellence, and service for the future.
        </p>

        <div class="mt-6 flex flex-col sm:flex-row gap-3 justify-center">
            <a href="/admissions"
               class="bg-blue-900 hover:bg-blue-800 px-6 py-3 rounded-md font-semibold">
                Apply Now
            </a>

            <a href="/about"
               class="border border-white px-6 py-3 rounded-md hover:bg-white hover:text-black">
                Learn More
            </a>
        </div>

    </div>
</section>