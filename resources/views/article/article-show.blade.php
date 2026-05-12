<x-app>

<div class="max-w-3xl mx-auto py-10">

    <h1 class="text-3xl font-bold mb-4">
        {{ $article->title }}
    </h1>

<p class="text-sm text-gray-500 mb-4">
    {{ $article->published_at?->format('F d, Y') }}
</p>
    @if ($article->image)
        <img src="{{ asset('storage/' . $article->image) }}"
             class="w-full rounded mb-6">
    @endif

    <div class="prose max-w-none">
        {!! $article->content !!}
    </div>
<a href="/" class="inline-block mb-6 text-blue-600 hover:underline mt-10">
    ← Back to Home
</a>
</div>

</x-app>
