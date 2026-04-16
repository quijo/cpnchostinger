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

    {{-- MAIN NAVBAR --}}
    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-3">

            {{-- LOGO --}}
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/cpnc-logo.png') }}" class="h-10 w-10" alt="logo">
                <h1 class="font-bold text-xl text-blue-900">CPNC</h1>
            </div>

            {{-- DESKTOP MENU --}}
            <nav class="hidden md:flex items-center gap-6 text-gray-700 font-medium">

                <a href="/" class="hover:text-blue-900">Home</a>

                {{-- DROPDOWN --}}
                <div class="relative group">
                    <button class="hover:text-blue-900 flex items-center gap-1">
                        About ▾
                    </button>

                    <div class="absolute hidden group-hover:block bg-white shadow-lg mt-2 rounded-md w-48">
                        <a href="visionmission" class="block px-4 py-2 hover:bg-gray-100">Vision & Mission</a>
                        <a href="history" class="block px-4 py-2 hover:bg-gray-100">History</a>
                        <a href="welcome" class="block px-4 py-2 hover:bg-gray-100">Message</a>
                        <a href="staff" class="block px-4 py-2 hover:bg-gray-100">Staff</a>
                        <a href="achievementaccreditaion" class="block px-4 py-2 hover:bg-gray-100">Achievements</a>
                    </div>
                </div>

                <a href="admissions" class="hover:text-blue-900">Admission</a>
                <a href="academics" class="hover:text-blue-900">Academics</a>
                <a href="announcement" class="hover:text-blue-900">Announcement</a>
                <a href="central" class="hover:text-blue-900">Central</a>

                <button class="bg-blue-900 text-white px-4 py-2 rounded-md hover:bg-blue-800">
                    GNECsis
                </button>
            </nav>

            {{-- MOBILE BUTTON --}}
            <button id="menuBtn" class="md:hidden text-2xl">
                ☰
            </button>
        </div>

        {{-- MOBILE MENU --}}
        <div id="mobileMenu" class="hidden md:hidden px-4 pb-4 space-y-2">

            <a href="/" class="block py-2">Home</a>

            <div>
                <p class="font-semibold">About</p>
                <div class="pl-4 space-y-1">
                    <a href="visionmission" class="block">Vision & Mission</a>
                    <a href="history" class="block">History</a>
                    <a href="welcome" class="block">Message</a>
                    <a href="staff" class="block">Staff</a>
                </div>
            </div>

            <a href="admissions" class="block py-2">Admission</a>
            <a href="academics" class="block py-2">Academics</a>
            <a href="announcement" class="block py-2">Announcement</a>
            <a href="central" class="block py-2">Central</a>

            <button class="w-full bg-blue-900 text-white py-2 rounded-md">
                GNECsis
            </button>
        </div>
    </header>
</div>