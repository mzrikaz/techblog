<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Post') }}: {{ $post->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ route('posts.update', ['post' => $post->id]) }}">
                        @csrf
                        @method('PUT')

                        <div>
                            <label>Title</label>
                            <input type="text" name="title" class="text-black" value="{{ $post->title }}" />
                        </div>

                        <div>
                            <label>Body</label>
                            <textarea name="body" class="text-black">
                            {{ $post->body }}
                        </textarea>

                            <input type="submit" value="Update" role="button" class="p-3 bg-black" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
