{{--
    Reusable button / link.

    Renders an <a> when an "href" is given, otherwise a <button>. Three visual
    variants keep calls-to-action consistent across the site.

    Usage:
        <x-ui.button href="#contact">Hire me</x-ui.button>
        <x-ui.button href="{{ $project['url'] }}" variant="secondary">View project</x-ui.button>
        <x-ui.button variant="ghost" type="submit">Send</x-ui.button>

    Props:
        $href     Optional URL. If present the component is a link, else a button.
        $variant  primary (default) | secondary | ghost
        $type     Button type when rendered as <button> (default: button).
--}}
@props([
    'href'    => null,
    'variant' => 'primary',
    'type'    => 'button',
])

@php
    // Shared base styles for every variant.
    $base = 'inline-flex items-center justify-center rounded-lg px-5 py-2.5 '
          . 'text-sm font-semibold transition focus:outline-none '
          . 'focus-visible:ring-2 focus-visible:ring-blue-500 focus-visible:ring-offset-2';

    // Per-variant styles.
    $variants = [
        'primary'   => 'bg-blue-600 text-white shadow-sm hover:bg-blue-700',
        'secondary' => 'bg-slate-100 text-slate-900 hover:bg-slate-200',
        'ghost'     => 'text-slate-700 hover:bg-slate-100',
    ];

    $classes = $base . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
