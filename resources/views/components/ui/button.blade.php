{{--
    Reusable button / link.

    Renders an <a> when an "href" is given, otherwise a <button>. Variants keep
    calls-to-action consistent, with tasteful hover motion.

    Usage:
        <x-ui.button href="#contact">Hire me</x-ui.button>
        <x-ui.button href="..." variant="outline">View project</x-ui.button>
        <x-ui.button variant="link">Read more</x-ui.button>

    Props:
        $href     Optional URL. If present the component is a link, else a button.
        $variant  primary (default) | secondary | outline | ghost | link
        $type     Button type when rendered as <button> (default: button).
--}}
@props([
    'href'    => null,
    'variant' => 'primary',
    'type'    => 'button',
])

@php
    // Shared base styles (padding lives in each variant for full control).
    $base = 'inline-flex items-center justify-center gap-2 rounded-lg text-sm font-semibold '
          . 'transition-all duration-200 focus:outline-none focus-visible:ring-2 '
          . 'focus-visible:ring-blue-500 focus-visible:ring-offset-2';

    // Per-variant styles.
    $variants = [
        'primary'   => 'px-5 py-2.5 bg-blue-600 text-white shadow-sm hover:bg-blue-700 hover:-translate-y-0.5 hover:shadow-glow active:translate-y-0',
        'secondary' => 'px-5 py-2.5 bg-slate-100 text-slate-900 hover:bg-slate-200 hover:-translate-y-0.5',
        'outline'   => 'px-5 py-2.5 border border-slate-300 text-slate-800 hover:border-blue-400 hover:text-blue-700 hover:-translate-y-0.5',
        'ghost'     => 'px-5 py-2.5 text-slate-700 hover:bg-slate-100',
        'link'      => 'text-blue-600 underline-offset-4 hover:text-blue-700 hover:underline',
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
