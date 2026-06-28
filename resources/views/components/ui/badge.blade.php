{{--
    Reusable badge / pill (Editorial Tech Atelier).

    Small rounded label for skills, tech tags, and status, on the cream/olive/gold
    palette.

    Usage:
        <x-ui.badge>Laravel</x-ui.badge>
        <x-ui.badge variant="olive">REST API</x-ui.badge>
        <x-ui.badge variant="gold">Featured</x-ui.badge>

    Props:
        $variant  slate (default) | olive | gold
                  (blue/amber kept as aliases for backward compatibility)
--}}
@props(['variant' => 'slate'])

@php
    $base = 'inline-flex items-center gap-1 rounded-full px-3 py-1 text-xs font-medium';

    $variants = [
        'slate' => 'bg-beige text-forest',
        'olive' => 'bg-olive/10 text-olive-dark ring-1 ring-olive/25',
        'gold'  => 'bg-gold/15 text-gold-dark ring-1 ring-gold/30',
        // Backward-compatible aliases (sections still pass these until Prompt 3).
        'blue'  => 'bg-olive/10 text-olive-dark ring-1 ring-olive/25',
        'amber' => 'bg-gold/15 text-gold-dark ring-1 ring-gold/30',
    ];

    $classes = $base . ' ' . ($variants[$variant] ?? $variants['slate']);
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>
