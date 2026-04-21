<x-app>

    {{-- ------------ --}}
    {{-- Hero Section --}}
    {{-- ------------ --}}

    <section class="relative h-[80vh] flex items-center justify-center text-white">

        {{-- BACKGROUND IMAGE --}}
        <div class="absolute inset-0">
            <img src="{{ asset('images/62.jpg') }}"
                class="w-full h-full object-cover"
                alt="Hero Background">
        </div>

        {{-- DARK OVERLAY --}}
        <div class="absolute inset-0 bg-black/0"></div>

        {{-- CONTENT --}}
        <div class="relative z-10 text-center px-6 max-w-3xl bg-black/70 p-10 rounded-3xl">

            <h1 class="text-3xl md:text-5xl font-bold leading-tight">
                WELCOME TO CPNC
            </h1>

            <p class="mt-4 text-sm md:text-lg">
                Equipping students with faith, excellence, and service for the future.
            </p>

            <div class="mt-6 flex flex-col sm:flex-row gap-3 justify-center">
                <a href="/admissions"
                class="bg-blue-900 hover:bg-blue-800 px-6 py-3 rounded-md font-semibold">
                    Apply Now
                </a>

                <a href="/more-about-us"
                class="border border-white px-6 py-3 rounded-md hover:bg-white hover:text-black">
                    Learn More
                </a>
            </div>

        </div>
</section>


    {{-- ------------- --}}
    {{-- About Section --}}
    {{-- ------------- --}}

<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <!-- Image -->
        <div class="relative">
            <img src="images/about.jpg"
                    alt="About us"
                    class="rounded-2xl shadow-lg">

            <!-- Floating card -->
            <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-2xl shadow-xl hidden md:block">
                <h3 id="yearsCount" class="text-2xl font-bold text-gray-800"></h3>
                <p class="text-gray-500 text-sm">Years of Excellence</p>
            </div>
        </div>

        <!-- Content -->
        <div>
            <h2 class="text-4xl font-bold text-gray-800 mb-4">
                About Our Institution
            </h2>

            <p class="text-gray-600 mb-6 leading-relaxed">
                Central Philippine Nazarene College is committed to academic excellence, 
                spiritual formation, and community transformation. We equip students with 
                knowledge, character, and faith to become leaders who make a difference 
                in society.
            </p>

            <p class="text-gray-600 mb-6 leading-relaxed">
                Our programs are designed to nurture both intellectual growth and 
                personal integrity, grounded in Christian values and a passion for service.
            </p>

            <!-- Features -->
            <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="flex items-center space-x-3">
                    <div class="bg-blue-100 text-blue-600 p-2 rounded-lg">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <span class="text-gray-700 font-medium">Quality Education</span>
                </div>

                <div class="flex items-center space-x-3">
                    <div class="bg-green-100 text-green-600 p-2 rounded-lg">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <span class="text-gray-700 font-medium">Community Focus</span>
                </div>

                <div class="flex items-center space-x-3">
                    <div class="bg-purple-100 text-purple-600 p-2 rounded-lg">
                        <i class="fa-solid fa-book-bible"></i>
                    </div>
                    <span class="text-gray-700 font-medium">Spiritual Growth</span>
                </div>

                <div class="flex items-center space-x-3">
                    <div class="bg-red-100 text-red-600 p-2 rounded-lg">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <span class="text-gray-700 font-medium">Innovation</span>
                </div>
            </div>

            <!-- CTA -->
            <a href="#"
                class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                Learn More
            </a>
        </div>

    </div>
</section>

    {{-- --------------------- --}}
    {{-- Why Choose Us Section --}}
    {{-- --------------------- --}}


<style>
    .parallax-bg {
        background-image: url('/images/about1.jpg');
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
    }
</style>

<section class="parallax-bg relative py-20">
    
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-70"></div>

    <div class="relative max-w-7xl mx-auto px-6 text-white text-center">
        
        <h2 class="text-4xl md:text-5xl font-bold mb-6">
            Why Choose Us
        </h2>

        <p class="max-w-2xl mx-auto text-gray-300 mb-12">
           For six decades, Central Philippine Nazarene College has remained steadfast in its mission to nurture and to guide extraordinary individuals who emerge as tranformative graduates.  Since its establishment in 1964, our unwavering commitment to mentoring has shape countless lives, cultivating exceptional individuals equipped to create lasting impact in their communities and beyond.  Join our legacy of tranformational and become a part of this remarkable journed!
        </p>

        <!-- Features -->
        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-lg hover:scale-105 transition">
                <div class="text-blue-400 text-4xl mb-4">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Academic Excellence</h3>
                <p class="text-gray-300 text-sm">
                   Our curriculum is designed to challenge and inspire students, fostering critical thinking, creativity, and a passion for knowledge. With a team of dedicated and experienced educators, we are committed to providing a top-notch academic experience.
                </p>
            </div>

            <div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-lg hover:scale-105 transition">
                <div class="text-green-400 text-4xl mb-4">
                    <i class="fa-solid fa-users"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">
Holistic Development:</h3>
                <p class="text-gray-300 text-sm">
                   Beyond academics, we focus on the holistic development of each student. Our programs encompass not only intellectual growth but also character building, emotional intelligence, and social skills. We aim to mold well-rounded individuals who are prepared for success in all facets of life.
                </p>
            </div>

            <div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-lg hover:scale-105 transition">
                <div class="text-yellow-400 text-4xl mb-4">
                    <i class="fa-solid fa-star"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">
Faith-Based Education:</h3>
                <p class="text-gray-300 text-sm">
                    At CPNC, we integrate Christian values into every aspect of our educational approach. Our commitment to faith-based education ensures that students not only excel academically but also develop a strong moral compass, empathy, and a sense of purpose.
                </p>
            </div>

        </div>

    </div>
</section>

    {{-- --------------------- --}}
    {{-- Enroll now Section --}}
    {{-- --------------------- --}}

<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Header -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">
                Central Philippine Nazarene College
            </h2>
            <p class="text-blue-600 font-semibold text-lg">
                Enrollment is now ongoing!
            </p>
            <p class="text-gray-500 mt-2">
                Saint Mary’s Drive, Apas, Cebu City (at the back of Gaisano Country Mall)
            </p>
        </div>

        <!-- Highlight Banner -->
        <div class="bg-blue-600 text-white text-center py-4 rounded-xl mb-12 shadow-lg">
            <h3 class="text-xl font-bold tracking-wide">
                NO TUITION FEE INCREASE
            </h3>
        </div>

        <!-- Programs -->
        <div class="grid md:grid-cols-2 gap-10">

            <!-- Left -->
            <div class="bg-gray-50 p-8 rounded-2xl shadow">
                <h3 class="text-2xl font-semibold text-gray-800 mb-6">
                    Basic Education
                </h3>

                <ul class="space-y-3 text-gray-600">
                    <li>✔ Preschool (Nursery and Kindergarten)</li>
                    <li>✔ Elementary (Grade 1–6)</li>
                    <li>✔ Junior High School (Grade 7–10)</li>
                </ul>
            </div>

            <!-- Right -->
            <div class="bg-gray-50 p-8 rounded-2xl shadow">
                <h3 class="text-2xl font-semibold text-gray-800 mb-6">
                    College Programs
                </h3>

                <ul class="space-y-3 text-gray-600">
                    <li>✔ Bachelor of Arts in Theology (ABTH)</li>
                    <li>✔ Bachelor of Arts in Religious Education (ABRE)</li>
                </ul>
            </div>

        </div>

        <!-- Contact / CTA -->
        <div class="mt-16 text-center">
            <p class="text-gray-700 mb-4">
                For inquiries, please call:
            </p>

            <p class="text-lg font-semibold text-gray-800 mb-4">
                (032) 505-5131 | 0943-820-8604
            </p>

           

            <a href="https://facebook.com/cpncMain"
               target="_blank"
               class="inline-block bg-gray-800 text-white px-6 py-3 rounded-lg font-semibold hover:bg-gray-900 transition">
                Facebook Page
            </a>
        </div>

    </div>
</section>

{{-- ----------- --}}
{{-- PROMOTIONAL --}}
{{-- ----------- --}}

<!-- Promotional Section (Full Image Cards with Bottom Gradient Overlay) -->
<section class="bg-gray-50 py-16">
  <div class="max-w-7xl mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-10">Our Academic Programs</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

      <!-- Card -->
      <div class="promo-card opacity-0 translate-y-10 transition-all duration-700 relative rounded-2xl overflow-hidden shadow-lg group hover:-translate-y-2 hover:shadow-2xl">
        <img src="/images/basiced/preschool.jpg" alt="Preschool" class="w-full h-[420px] object-contain bg-orange-400">

        <!-- Gradient Overlay (transparent to dark) -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>

        <!-- Content -->
        <div class="absolute bottom-0 p-5 text-white">
          <h3 class="text-xl font-semibold">Preschool</h3>
          <p class="text-sm opacity-90">Nursery & Kindergarten</p>
          <a href="#" class="inline-block mt-3 bg-white text-black px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-200">Learn More</a>
        </div>
      </div>

      <!-- Card -->
      <div class="promo-card opacity-0 translate-y-10 transition-all duration-700 relative rounded-2xl overflow-hidden shadow-lg group hover:-translate-y-2 hover:shadow-2xl">
        <img src="/images/basiced/elem.jpg" alt="Elementary" class="w-full h-[420px] object-contain bg-blue-950">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
        <div class="absolute bottom-0 p-5 text-white">
          <h3 class="text-xl font-semibold">Elementary</h3>
          <p class="text-sm opacity-90">Grade 1–6</p>
          <a href="#" class="inline-block mt-3 bg-white text-black px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-200">Learn More</a>
        </div>
      </div>

      <!-- Card -->
      <div class="promo-card opacity-0 translate-y-10 transition-all duration-700 relative rounded-2xl overflow-hidden shadow-lg group hover:-translate-y-2 hover:shadow-2xl">
        <img src="/images/basiced/jhs.jpg" alt="JHS" class="w-full h-[420px] object-contain bg-blue-950">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
        <div class="absolute bottom-0 p-5 text-white">
          <h3 class="text-xl font-semibold">Junior High School</h3>
          <p class="text-sm opacity-90">Grade 7–10</p>
          <a href="#" class="inline-block mt-3 bg-white text-black px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-200">Learn More</a>
        </div>
      </div>

      <!-- Card -->
      <div class="promo-card opacity-0 translate-y-10 transition-all duration-700 relative rounded-2xl overflow-hidden shadow-lg group hover:-translate-y-2 hover:shadow-2xl">
        <img src="/images/college/college.jpg" alt="College" class="w-full h-[420px] object-contain bg-blue-950">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
        <div class="absolute bottom-0 p-5 text-white">
          <h3 class="text-xl font-semibold">College</h3>
          <p class="text-sm opacity-90">Undergraduate Programs</p>
          <a href="#" class="inline-block mt-3 bg-white text-black px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-200">Learn More</a>
        </div>
      </div>

    </div>
  </div>
</section>


{{-- ----- --}}
{{-- STAFF --}}
{{-- ----- --}}

<section class="bg-gray-50 py-16 px-6 lg:px-20">
    <div class="max-w-6xl mx-auto">

        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-blue-900">Our Staff</h1>
            <p class="text-gray-600 mt-3">
                Meet the dedicated people behind Central Philippine Nazarene College
            </p>
        </div>

        <!-- Staff Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">

            <!-- Staff Card -->
            <div class="flex flex-col items-center text-center">
                <div class="w-32 h-32 rounded-full overflow-hidden shadow-lg border-4 border-blue-900">
                    <img src="/images/staff1.jpg" class="w-full h-full object-cover" alt="Staff">
                </div>
                <h3 class="mt-4 text-lg font-semibold text-gray-800">John Doe</h3>
                <p class="text-sm text-gray-500">Principal</p>
            </div>

            <!-- Staff Card -->
            <div class="flex flex-col items-center text-center">
                <div class="w-32 h-32 rounded-full overflow-hidden shadow-lg border-4 border-blue-900">
                    <img src="/images/staff2.jpg" class="w-full h-full object-cover" alt="Staff">
                </div>
                <h3 class="mt-4 text-lg font-semibold text-gray-800">Maria Santos</h3>
                <p class="text-sm text-gray-500">Registrar</p>
            </div>

            <!-- Staff Card -->
            <div class="flex flex-col items-center text-center">
                <div class="w-32 h-32 rounded-full overflow-hidden shadow-lg border-4 border-blue-900">
                    <img src="/images/staff3.jpg" class="w-full h-full object-cover" alt="Staff">
                </div>
                <h3 class="mt-4 text-lg font-semibold text-gray-800">Peter Cruz</h3>
                <p class="text-sm text-gray-500">IT Coordinator</p>
            </div>

            <!-- Staff Card -->
            <div class="flex flex-col items-center text-center">
                <div class="w-32 h-32 rounded-full overflow-hidden shadow-lg border-4 border-blue-900">
                    <img src="/images/staff4.jpg" class="w-full h-full object-cover" alt="Staff">
                </div>
                <h3 class="mt-4 text-lg font-semibold text-gray-800">Anna Reyes</h3>
                <p class="text-sm text-gray-500">Finance Officer</p>
            </div>

        </div>

    </div>
</section>

</x-app>