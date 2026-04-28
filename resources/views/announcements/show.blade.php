<x-app>
    <div class="max-w-6xl mx-auto p-6">

        <h1 class="text-3xl font-bold mb-6">
            {{ $announcement->title }}
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            {{-- LEFT: IMAGE --}}
            <div>
                @if($announcement->image)
                   <img src="{{ Storage::url($announcement->image) }}"
     class="w-full rounded-lg shadow-md object-cover">
                @else
                    <div class="w-full h-64 bg-gray-200 flex items-center justify-center rounded-lg">
                        <span class="text-gray-500">No Image</span>
                    </div>
                @endif
            </div>

            {{-- RIGHT: CONTENT --}}
            <div class="space-y-4">

                <div class="text-gray-700 leading-relaxed">
                    {!! $announcement->content !!}
                </div>

            </div>

        </div>

        {{-- BACK BUTTON --}}
        <div class="mt-8">
            <a href="{{ url('/') }}"
               class="text-blue-600 hover:underline">
                ← Back to announcements
            </a>
        </div>

    </div>
</x-app>
