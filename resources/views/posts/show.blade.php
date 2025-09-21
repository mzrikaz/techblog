<x-landing-layout>

    <!-- Single Post Content -->
    <main class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-3 gap-12">
        <!-- Post -->
        <article class="md:col-span-2 bg-white shadow rounded-2xl p-8">
            <h2 class="text-4xl font-bold mb-4">{{ $post->title }}</h2>
            <div class="flex items-center gap-4 mb-8">
                <img src="https://placehold.co/50x50" alt="author" class="rounded-full w-12 h-12">
                <div>
                    <p class="font-semibold">Rikaz Mohamed Zarook</p>
                    <p class="text-gray-500 text-sm">Sep 20, 2025 · 8 min read</p>
                </div>
            </div>
            <img src="https://placehold.co/800x400" alt="post cover" class="rounded-xl mb-8">
            <div class="prose max-w-none text-gray-700">
                {{ $post->body }}
            </div>
        </article>

        <!-- Sidebar -->
        <aside class="md:col-span-1 flex flex-col gap-8">
            <!-- Recent Posts -->
            <div class="bg-white shadow rounded-2xl p-6">
                <h4 class="font-bold text-xl mb-4">Recent Posts</h4>
                <ul class="space-y-4">
                    <li>
                        <a href="#" class="hover:underline text-indigo-600 font-medium">Design Tips for
                            Developers</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline text-indigo-600 font-medium">Productivity Hacks for
                            Founders</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline text-indigo-600 font-medium">Featured Article: Level Up
                            Your Coding Skills</a>
                    </li>
                </ul>
            </div>

            <!-- Categories -->
            <div class="bg-white shadow rounded-2xl p-6">
                <h4 class="font-bold text-xl mb-4">Categories</h4>
                <ul class="flex flex-wrap gap-2">
                    <li><a href="#"
                            class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm hover:bg-indigo-200">JavaScript</a>
                    </li>
                    <li><a href="#"
                            class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm hover:bg-indigo-200">Design</a>
                    </li>
                    <li><a href="#"
                            class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm hover:bg-indigo-200">Productivity</a>
                    </li>
                </ul>
            </div>
        </aside>
    </main>

</x-landing-layout>
