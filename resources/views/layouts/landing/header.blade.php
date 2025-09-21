<header class="bg-white shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
        <h1 class="text-2xl font-bold text-indigo-600"><a href="{{ url('/') }}"><img src="{{ Vite::asset('resources/images/logo.png') }}" alt="{{ config('app.name') }}" /></a></h1>
        <nav class="hidden md:flex gap-6 text-gray-600 font-medium">
            <a href="#" class="hover:text-indigo-600">Home</a>
            <a href="#" class="hover:text-indigo-600">Articles</a>
            <a href="#" class="hover:text-indigo-600">About</a>
            <a href="#" class="hover:text-indigo-600">Contact</a>
        </nav>
        <button class="md:hidden p-2 text-gray-700">
            ☰
        </button>
    </div>
</header>
