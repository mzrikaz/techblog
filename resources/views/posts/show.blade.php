<x-landing-layout>

    <!-- Single Post Content -->
    <main class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-3 gap-12">
        <!-- Post -->
        <article class="md:col-span-2 bg-white shadow rounded-2xl p-8">
            <h2 class="text-4xl font-bold mb-4">{{ $post->title }}</h2>
            <div class="flex items-center gap-4 mb-8">
                <img src="https://placehold.co/50x50" alt="author" class="rounded-full w-12 h-12">
                <div>
                    <p class="font-semibold">{{ $post->user?->name ?? 'Author' }}</p>
                    <p class="text-gray-500 text-sm">{{ $post->created_at->format('M d, Y') }} · {{ ceil(str_word_count(strip_tags($post->content)) / 225) }} min read · <a href="{{ route('landing.posts.index', ['category' => $post->category->id]) }}">{{ $post->category->name }}</a></p>
                </div>
            </div>
            <img src="https://placehold.co/800x400" alt="post cover" class="rounded-xl mb-8">
            <div class="prose max-w-none text-gray-700">
                {{ $post->body }}
            </div>
        </article>

        <!-- Sidebar -->
        <x-sidebar />
    </main>

</x-landing-layout>
