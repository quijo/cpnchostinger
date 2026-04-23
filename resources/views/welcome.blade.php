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
                    Enroll Now
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
            <a href="/more-about-us"
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
               class="inline-block bg-gray-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-gray-900 transition">
                Facebook Page
            </a>
            <a href="/admissions"
               target="_blank"
               class="inline-block bg-red-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-gray-900 transition">
                Enroll Now
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
          <a href="/more-about-us" class="inline-block mt-3 bg-white text-black px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-200">Learn More</a>
        </div>
      </div>

      <!-- Card -->
      <div class="promo-card opacity-0 translate-y-10 transition-all duration-700 relative rounded-2xl overflow-hidden shadow-lg group hover:-translate-y-2 hover:shadow-2xl">
        <img src="/images/basiced/elem.jpg" alt="Elementary" class="w-full h-[420px] object-contain bg-blue-950">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
        <div class="absolute bottom-0 p-5 text-white">
          <h3 class="text-xl font-semibold">Elementary</h3>
          <p class="text-sm opacity-90">Grade 1–6</p>
          <a href="more-about-us" class="inline-block mt-3 bg-white text-black px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-200">Learn More</a>
        </div>
      </div>

      <!-- Card -->
      <div class="promo-card opacity-0 translate-y-10 transition-all duration-700 relative rounded-2xl overflow-hidden shadow-lg group hover:-translate-y-2 hover:shadow-2xl">
        <img src="/images/basiced/jhs.jpg" alt="JHS" class="w-full h-[420px] object-contain bg-blue-950">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
        <div class="absolute bottom-0 p-5 text-white">
          <h3 class="text-xl font-semibold">Junior High School</h3>
          <p class="text-sm opacity-90">Grade 7–10</p>
          <a href="more-about-us" class="inline-block mt-3 bg-white text-black px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-200">Learn More</a>
        </div>
      </div>

      <!-- Card -->
      <div class="promo-card opacity-0 translate-y-10 transition-all duration-700 relative rounded-2xl overflow-hidden shadow-lg group hover:-translate-y-2 hover:shadow-2xl">
        <img src="/images/college/college.jpg" alt="College" class="w-full h-[420px] object-contain bg-blue-950">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
        <div class="absolute bottom-0 p-5 text-white">
          <h3 class="text-xl font-semibold">College</h3>
          <p class="text-sm opacity-90">Undergraduate Programs</p>
          <a href="more-about-us" class="inline-block mt-3 bg-white text-black px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-200">Learn More</a>
        </div>
      </div>

    </div>
  </div>
</section>


{{-- ----- --}}
{{-- STAFF --}}
{{-- ----- --}}

{{-- <section class="bg-gray-50 py-16 px-6 lg:px-20">
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
</section> --}}


<section class="bg-gray-50 py-16 px-6 lg:px-20" x-data="staffComponent()">

    <div class="max-w-7xl mx-auto">

        <!-- HEADER -->
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-blue-900">Our People</h1>
            <p class="text-gray-600 mt-3">
                Meet the dedicated staff of Central Philippine Nazarene College
            </p>
        </div>

        <!-- FILTER BUTTONS -->
        <div class="flex flex-wrap justify-center gap-3 mb-10">

            <button @click="filter='all'" :class="btnClass('all')"
                class="px-4 py-2 rounded-full shadow">All</button>

            <button @click="filter='adco'" :class="btnClass('adco')"
                class="px-4 py-2 rounded-full shadow">ADCO</button>

            <button @click="filter='college'" :class="btnClass('college')"
                class="px-4 py-2 rounded-full shadow">College</button>

            <button @click="filter='basiced'" :class="btnClass('basiced')"
                class="px-4 py-2 rounded-full shadow">BasicEd</button>

            <button @click="filter='staff'" :class="btnClass('staff')"
                class="px-4 py-2 rounded-full shadow">Staff</button>

        </div>

        <!-- STAFF GRID -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

            <template x-for="p in staff" :key="p.id">

                <div x-show="filter === 'all' || filter === p.category"
                     x-transition
                     class="bg-white rounded-2xl shadow p-6 text-center hover:shadow-lg transition">

                    <!-- IMAGE -->
                    <div class="w-24 h-24 mx-auto rounded-full overflow-hidden border-4 border-gray-300">
                        <img :src="p.img" class="w-full h-full object-cover">
                    </div>

                    <!-- NAME -->
                    <h3 class="mt-4 font-semibold text-gray-800" x-text="p.name"></h3>

                    <!-- ROLE -->
                    <p class="text-sm text-gray-500" x-text="p.role"></p>

                    <!-- VIEW PROFILE -->
                    {{-- <button @click="openProfile(p)"
                            class="mt-3 text-sm text-blue-600 hover:underline">
                        View Profile
                    </button> --}}

                </div>

            </template>

        </div>

    </div>

    <!-- ================= MODAL ================= -->
    <div x-show="open" x-transition
         class="fixed inset-0 bg-black/50 flex items-center justify-center z-50">

        <div @click.away="open = false"
             class="bg-white rounded-2xl shadow-xl max-w-lg w-full p-6 relative">

            <!-- CLOSE -->
            <button @click="open = false"
                    class="absolute top-3 right-3 text-gray-500 hover:text-black text-xl">
                ✕
            </button>

            <!-- PROFILE -->
            <div class="text-center">

                <div class="w-28 h-28 mx-auto rounded-full overflow-hidden border-4 border-blue-900 mb-4">
                    <img :src="selected.img" class="w-full h-full object-cover">
                </div>

                <h2 class="text-xl font-bold text-gray-800" x-text="selected.name"></h2>
                <p class="text-sm text-gray-500 mb-4" x-text="selected.role"></p>

                <p class="text-sm text-gray-600">
                    <span class="font-semibold">About:</span><br>
                    Dedicated servant leader committed to ministry, teaching, and spiritual formation.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- ================= ALPINE SCRIPT ================= -->
<script>
function staffComponent() {
    return {
        filter: 'adco',
        open: false,
        selected: {},

        staff: [
            {id: 1, name: 'Leo M. Mahandlud', role: 'OIC President', category: 'adco', img: '/images/adco/leo.jpg'},
            {id: 2, name: 'Maricris B. Dogeno', role: 'Business Manager', category: 'adco', img: '/images/adco/maricris.jfif'},
            {id: 3, name: 'Verlie R. Amistoso', role: 'Teacher Grade 8 Adviser', category: 'basiced', img: '/images/basiced/verlie.jfif'},
            {id: 4, name: 'Marilou A. Babao', role: 'Interim Principal', category: 'adco', img: '/images/temporary.jpg'},
            {id: 5, name: 'Jeanica B. Barjona', role: 'Registrar', category: 'adco', img: '/images/adco/barjona.jfif'},
            {id: 6, name: 'Josefin M. Anoos', role: 'DOSA', category: 'adco', img: '/images/temporary.jpg'},
            {id: 7, name: 'Lionel G. Saquilabon', role: 'College Faculty', category: 'college', img: '/images/temporary.jpg'},
            {id: 8, name: 'Evan Rey T. Macasa', role: 'Chaplain / College Faculty', category: 'college', img: '/images/temporary.jpg'},
            {id: 9, name: 'Sophia Alder L. Samson', role: ' Guidance Advocate', category: 'staff', img: '/images/temporary.jpg'},
            {id: 10, name: 'Nathalie Cabalda', role: ' Bookkeeper', category: 'staff', img: '/images/temporary.jpg'},
            {id: 11, name: 'Marie Ruth V. Pastor', role: ' Cashier', category: 'staff', img: '/images/temporary.jpg'},
            {id: 12, name: 'David Lloyd B. Open', role: ' Custodian', category: 'staff', img: '/images/temporary.jpg'},
            {id: 13, name: 'Fernando Magos', role: ' Maintenance', category: 'staff', img: '/images/temporary.jpg'},
            {id: 14, name: 'Nerhez C. Sanchez', role: ' College Faculty', category: 'college', img: '/images/temporary.jpg'},
            {id: 15, name: 'Montanier Corvera', role: ' Maintenance', category: 'staff', img: '/images/temporary.jpg'},
            {id: 16, name: 'Josephine J. Agustine ', role: ' Preschool Teacher', category: 'basiced', img: '/images/basiced/josephine.jfif'},
           
            {id: 17, name: 'Amy Jo C. Rojo ', role: ' Librarian', category: 'staff', img: '/images/temporary.jpg'},
            {id: 18, name: 'Jannine Grace L. Reyes  ', role: ' Teacher Grade 1 Adviser', category: 'basiced', img: '/images/temporary.jpg'},
            {id: 19, name: 'Bea A. Mantuahc  ', role: ' Teacher Grade 2 Adviser', category: 'basiced', img: '/images/temporary.jpg'},
            {id: 20, name: 'Christine Anne F. De Los Santos ', role: ' Teacher Grade 3 Adviser', category: 'basiced', img: '/images/basiced/christine.jfif'},
            {id: 21, name: 'Darien Y. Borromeo ', role: ' Teacher Grade 4 Adviser', category: 'basiced', img: '/images/temporary.jpg'},
            {id: 22, name: 'Rezzie Mae I. Paulo ', role: ' Teacher Grade 5 Adviser / Elementary Coordinator', category: 'basiced', img: '/images/temporary.jpg'},
            {id: 23, name: 'Julie B. Presbitero ', role: ' Teacher Grade 6 Adviser', category: 'basiced', img: '/images/temporary.jpg'},
            {id: 24, name: 'Sheen Gapo', role: ' Teacher Grade 7 Adviser', category: 'basiced', img: '/images/temporary.jpg'},
            {id: 25, name: 'Neil A. Joseph Alicabo', role: ' Teacher Grade 9 Adviser / Sports Coordinator', category: 'basiced', img: '/images/temporary.jpg'},
            {id: 26, name: 'Meridisa M. Canonigo', role: ' Teacher Grade 10 Adviser', category: 'basiced', img: '/images/temporary.jpg'},
            {id: 27, name: 'Larry Babao', role: ' High School Coordinator / AP Teacher', category: 'basiced', img: '/images/temporary.jpg'},
            {id: 28, name: 'John Quichon', role: ' IT - Coordinator / Computer Teacher', category: 'staff', img: '/images/temporary.jpg'},
            {id: 29, name: 'Raquel D. Quichon', role: ' Computer Teacher', category: 'basiced', img: '/images/temporary.jpg'},
            {id: 30, name: 'Josefin M. Anoos', role: 'College Faculty', category: 'college', img: '/images/temporary.jpg'},
        ],

        openProfile(person) {
            this.selected = person;
            this.open = true;
        },

        btnClass(type) {
            return this.filter === type
                ? 'bg-blue-600 text-white'
                : 'bg-white text-gray-700';
        }
    }
}
</script>
</x-app>