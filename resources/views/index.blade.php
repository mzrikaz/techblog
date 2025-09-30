<x-landing-layout>

    <x-slot name="title">Welcome to our Blog</x-slot>

    <!-- Hero / Featured Post -->
    <x-landing.hero />

    <!-- Blog Grid -->
    <section class="max-w-7xl mx-auto px-6 py-12">
        <h3 class="text-2xl font-bold mb-8">Latest Posts</h3>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Blog Card -->
            @foreach ($latestPosts as $post)
                <x-landing.widgets.post :title="$post->title" :body="$post->body" :id="$post->id" :image="$post->featured_image ? Storage::url($post->featured_image) : null" />
            @endforeach
        </div>
    </section>

</x-landing-layout>
