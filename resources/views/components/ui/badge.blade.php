{{--
    Reusable badge / pill.

    A small rounded label for skills, tech tags, and status. Color variants
    keep it flexible while staying on-palette.

    Usage:
        <x-ui.badge>Laravel</x-ui.badge>
        <x-ui.badge variant="blue">REST API</x-ui.badge>
        <x-ui.badge variant="amber">Featured</x-ui.badge>

    Props:
        $variant  slate (default) | blue | amber
--}}
@props(['variant' => 'slate'])

@php
    $base = 'inline-flex items-center gap-1 rounded-full px-3 py-1 text-xs font-medium';

    $variants = [
        'slate' => 'bg-slate-100 text-slate-700',
        'blue'  => 'bg-blue-50 text-blue-700 ring-1 ring-blue-100',
        'amber' => 'bg-amber-50 text-amber-700 ring-1 ring-amber-200',
    ];

    $classes = $base . ' ' . ($variants[$variant] ?? $variants['slate']);
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>
