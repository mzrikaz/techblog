@props(['active'])

@php
    $classes = ($active ?? false) ? 'active-nav-link' : 'nav-link';
@endphp

<a {{ $attributes }} class="{{ $classes }}">{{ $slot }}</a>