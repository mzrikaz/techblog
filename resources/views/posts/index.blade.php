<x-landing-layout>

    <!-- Single Post Content -->
    <main class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-3 gap-12">
        <!-- Post -->
        <section class="w-full md:col-span-2 p-8">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
                @foreach ($posts as $post)
                    <x-landing.widgets.post :title="$post->title" :body="substr($post->body, 0, 45)" :id="$post->id" />
                @endforeach

            </div>

            {{ $posts->links() }}


        </section>

        <!-- Sidebar -->
        <x-sidebar />
    </main>

</x-landing-layout>
