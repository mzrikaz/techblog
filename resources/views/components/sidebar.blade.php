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

            @foreach ($categories as $category)
                <li><a href="{{ route('landing.posts.index', ['category' => $category->id]) }}"
                        class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm hover:bg-indigo-200">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</aside>
