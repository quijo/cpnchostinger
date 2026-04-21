<x-app>
    <div class="flex min-h-screen bg-gray-100">

        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md hidden md:block">
            <div class="p-6 border-b">
                <h2 class="text-xl font-bold text-gray-800">PhilMicTeen</h2>
            </div>

            <nav class="p-4 space-y-2">
                <a href="{{ route('philmicteen') }}" class="block px-4 py-2 rounded-lg hover:bg-blue-100 text-gray-700">
                   Philmicteen
                </a>

                <a href="{{ route('members') }}"
                   class="block px-4 py-2 rounded-lg hover:bg-blue-100 text-gray-700">
                    Members
                </a>

                <a href="{{ route('events') }}"
                   class="block px-4 py-2 rounded-lg hover:bg-blue-100 text-gray-700">
                    Events
                </a>

                <a href="{{ route('media') }}"
                   class="block px-4 py-2 rounded-lg hover:bg-blue-100 text-gray-700">
                    Media
                </a>

                <a href="{{ route('settings') }}"
                   class="block px-4 py-2 rounded-lg hover:bg-blue-100 text-gray-700">
                    Settings
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">

            <!-- Mobile Menu Button -->
            <button onclick="toggleSidebar()" 
                    class="md:hidden mb-4 px-4 py-2 bg-blue-500 text-white rounded">
                Menu
            </button>

            <div class="bg-white shadow rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">Welcome to PhilMicTeen</h1>

                <p class="text-gray-600">
                    This is your main dashboard. You can manage members, events, and media here.
                </p>
            </div>

        </main>

    </div>

    <!-- Script -->
    <script>
        function toggleSidebar() {
            document.querySelector('aside').classList.toggle('hidden');
        }
    </script>
</x-app>w