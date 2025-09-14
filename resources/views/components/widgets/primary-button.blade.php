@props(['text'])

<a {{ $attributes->merge(['class' => 'px-4 bg-gray-600 py-2 rounded-md hover:bg-gray-700']) }}>
    {{ $text }}
</a>
