@props(['id','title','body'])

<article class="bg-white shadow rounded-2xl overflow-hidden hover:shadow-lg transition">
    <img src="https://placehold.co/600x400" alt="post" class="w-full h-48 object-cover">
    <div class="p-6">
        <h4 class="font-bold text-xl mb-2">{{ $title }}</h4>
        <p class="text-gray-600 mb-4">{{ substr($body, 0, 50) }}...</p>
        <a href="{{ route('landing.posts.show', ['id' => $id]) }}"
            class="text-indigo-600 font-medium hover:underline">Read More →</a>
    </div>
</article>
