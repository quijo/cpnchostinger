<div class="w-full">

    {{-- TOP INFO BAR --}}
    <div class="bg-blue-900 text-white text-sm">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between gap-2 px-4 py-2">

            <div class="font-semibold">
                Central Philippine Nazarene College
            </div>

            <div class="flex flex-wrap gap-4 text-xs md:text-sm">
                <div>📞 +63 032 505-5131</div>
                <div>✉️ registrar@cpnc.edu.ph</div>
                <div>📍 St. Mary's Drive, Apas Cebu City</div>
                <a href="https://www.facebook.com/cpncMain" class="hover:underline">
                    Facebook
                </a>
            </div>

        </div>
    </div>



<nav x-data="{ open: false }" class="bg-white shadow-md relative z-50">

    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">

            <!-- LOGO -->
            <div class="flex items-center gap-3">

                <!-- Image Logo (replace path if needed) -->
                <img src="/images/cpnc-logo.png"
                     alt="School Logo"
                     class="h-10 w-10 object-contain">

                <!-- Text Logo -->
                <div class="text-xl font-bold text-blue-900 leading-tight">
                   CPNC<br>
                    <span class="text-lg font-normal text-gray-500">
                        Mentoring Transformational Leaders
                    </span>
                </div>

            </div>

            <!-- DESKTOP MENU -->
            <div class="hidden md:flex items-center space-x-6">

                <a href="/" class="hover:text-blue-900 transition">Home</a>

                <!-- Dropdown -->
                <div x-data="{ dropdown: false }" class="relative">

                    <button @click="dropdown = !dropdown"
                            class="flex items-center gap-1 hover:text-blue-900 transition">
                        About ▾
                    </button>

                    <div x-show="dropdown"
                         @click.outside="dropdown = false"
                         x-transition
                         class="absolute mt-2 w-48 bg-white shadow-lg rounded-md border">

                        <a href="/visionmission" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-900 transition">Vision & Mission</a>
                        <a href="/history" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-900 transition">History</a>
                        <a href="/message" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-900 transition">Message</a>
                      

                    </div>
                </div>

                <a href="admissions" class="hover:text-blue-900 transition">Admissions</a>
                <a href="academics" class="hover:text-blue-900 transition">Academics</a>


                {{-- PHILMICTEEN DROPDOWN --}}
                 <div x-data="{ dropdown: false }" class="relative">
                    <button @click="dropdown = !dropdown"
                            class="flex items-center gap-1 hover:text-blue-900 transition">
                        PhilMicTeen ▾
                    </button>
                    <div x-show="dropdown"
                         @click.outside="dropdown = false"
                         x-transition
                         class="absolute mt-2 w-48 bg-white shadow-lg rounded-md border">
                        <a href="{{route('about')}}" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-900 transition">About</a>
                        <a href="/downloads" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-900 transition">Enrollement Forms</a>
                        <a href="/history" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-900 transition">CPNC History</a>
                        <a href="/mission" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-900 transition">Mission</a>
                        <a href="/program" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-900 transition">Program Design</a>
                        <a href="/course" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-900 transition">Course of Study</a>
                        <a href="/instructor" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-900 transition">Instructor</a>
                        <a href="/licensing" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-900 transition">licensing and Ordination</a>
                        <a href="/dbm" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-900 transition">The District Board of Ministry</a>
                    </div>

                </div>
                <a href="{{ route('downloads') }}" class ="inline-flex items-center gap-2 bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">
    ⬇ Download
</a>


            </div>



            <!-- MOBILE BUTTON -->
            <button @click="open = !open" class="md:hidden text-2xl">
                ☰
            </button>

        </div>
    </div>

    <!-- MOBILE MENU -->
    <div x-show="open"
         x-transition
         class="md:hidden px-4 pb-4 space-y-2">

        <a href="/" class="block py-2 hover:text-blue-900 transition">Home</a>

        <!-- Mobile Dropdown -->
        <div x-data="{ dropdown: false }">

            <button @click="dropdown = !dropdown"
                    class="w-full text-left font-semibold">
                About ▾
            </button>

            <div x-show="dropdown" class="pl-4 space-y-1">

                <a href="/visionmission" class="block hover:text-blue-900 transition">Vision & Mission</a>
                <a href="/history" class="block hover:text-blue-900 transition">History</a>
                <a href="/message" class="block hover:text-blue-900 transition">Message</a>
              

            </div>
        </div>

        <a href="/admissions" class="block py-2 hover:text-blue-900 transition">Admissions</a>
        <a href="academics" class="block py-2 hover:text-blue-900 transition">Academics</a>

          <!-- Mobile Dropdown -->
        <div x-data="{ dropdown: false }">

            <button @click="dropdown = !dropdown"
                    class="w-full text-left font-semibold">
                Philmicteen ▾
            </button>

            <div x-show="dropdown" class="pl-4 space-y-1">

                <a href="/about" class="block hover:text-blue-900 transition">about</a>
                <a href="/downloads" class="block hover:text-blue-900 transition">Enrollment Forms</a>
                <a href="/history" class="block hover:text-blue-900 transition">CPNC History</a>
                <a href="/mission" class="block hover:text-blue-900 transition">Mission</a>
                <a href="/program" class="block hover:text-blue-900 transition">Program</a>
                <a href="/course" class="block hover:text-blue-900 transition">Course</a>
                <a href="/instructor" class="block hover:text-blue-900 transition">instructor</a>
                <a href="/licensing" class="block hover:text-blue-900 transition">Licensing and Ordination</a>
                <a href="/dbm" class="block hover:text-blue-900 transition">The District Board of Ministry</a>

              

            </div>
        </div>



        <a href="{{ route('downloads') }}" class="inline-flex items-center gap-2 bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">
    ⬇ Download
</a>




       

    </div>

</nav>


    
</div>
 