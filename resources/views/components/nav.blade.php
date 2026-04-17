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

                        <a href="visionmission" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-900 transition">Vision & Mission</a>
                        <a href="history" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-900 transition">History</a>
                        <a href="welcome" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-900 transition">Message</a>
                        <a href="staff" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-900 transition">Staff</a>

                    </div>
                </div>

                <a href="admissions" class="hover:text-blue-900 transition">Admissions</a>
                <a href="academics" class="hover:text-blue-900 transition">Academics</a>

                <!-- AUTH -->
                <a href="/login"
                   class="px-4 py-2 border rounded-md hover:bg-gray-100 transition">
                    Login
                </a>

                <a href="/register"
                   class="px-4 py-2 bg-blue-900 text-white rounded-md hover:bg-blue-800 transition">
                    Register
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

                <a href="visionmission" class="block hover:text-blue-900 transition">Vision & Mission</a>
                <a href="history" class="block hover:text-blue-900 transition">History</a>
                <a href="welcome" class="block hover:text-blue-900 transition">Message</a>
                <a href="staff" class="block hover:text-blue-900 transition">Staff</a>

            </div>
        </div>

        <a href="admissions" class="block py-2 hover:text-blue-900 transition">Admissions</a>
        <a href="academics" class="block py-2 hover:text-blue-900 transition">Academics</a>

        <!-- AUTH -->
        <a href="/login" class="block py-2 border rounded-md text-center hover:bg-gray-100 transition">
            Login
        </a>

        <a href="/register" class="block py-2 bg-blue-900 text-white rounded-md text-center hover:bg-blue-800 transition">
            Register
        </a>

    </div>

</nav>


    
</div>
 