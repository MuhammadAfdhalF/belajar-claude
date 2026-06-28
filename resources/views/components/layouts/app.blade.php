{{--
    Master layout shell for the portfolio site (Editorial Tech Atelier).

    Props:
        $title        Optional page title; appended to the site name.
        $description  Optional meta description; defaults to the profile tagline.
--}}
@props(['title' => null, 'description' => null])

@php
    $siteName = config('portfolio.profile.name');
    $pageTitle = ($title ? $title . ' — ' : '') . $siteName;
    $metaDescription = $description ?? config('portfolio.profile.tagline');
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $pageTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">

    {{-- Basic Open Graph tags for link previews. --}}
    <meta property="og:title" content="{{ $pageTitle }}">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:type" content="website">

    {{-- Fonts: Cormorant Garamond (display) + Manrope (body). Fallbacks in app.css. --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- Compiled CSS/JS handled by Vite (resources/css/app.css, resources/js/app.js). --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-cream font-sans text-forest antialiased">

    @include('partials.navbar')

    <main>
        {{ $slot }}
    </main>

    @include('partials.footer')

</body>
</html>
