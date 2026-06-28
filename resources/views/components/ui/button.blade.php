{{--
    Reusable button / link (Editorial Tech Atelier).

    Renders an <a> when an "href" is given, otherwise a <button>. Elegant
    variants with subtle hover lift; pair with a group + arrow icon for motion.

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
    $base = 'inline-flex items-center justify-center gap-2 rounded-md text-sm font-semibold '
          . 'transition-all duration-200 focus:outline-none focus-visible:ring-2 '
          . 'focus-visible:ring-gold focus-visible:ring-offset-2 focus-visible:ring-offset-cream';

    $variants = [
        'primary'   => 'px-5 py-2.5 bg-olive-dark text-cream hover:-translate-y-0.5 hover:bg-forest',
        'secondary' => 'px-5 py-2.5 border border-edge bg-transparent text-forest hover:-translate-y-0.5 hover:border-olive hover:bg-card',
        'outline'   => 'px-5 py-2.5 border border-forest/30 text-forest hover:-translate-y-0.5 hover:border-forest',
        'ghost'     => 'px-5 py-2.5 text-forest hover:bg-beige',
        'link'      => 'text-gold-dark underline-offset-4 hover:underline',
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
