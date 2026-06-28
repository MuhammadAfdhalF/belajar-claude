{{--
    Master layout shell for the portfolio site.

    Usage:
        <x-layouts.app title="Home">
            ... page content ...
        </x-layouts.app>

    Props:
        $title  Optional page title; appended to the site name.
--}}
@props(['title' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        {{ $title ? $title . ' — ' : '' }}{{ config('portfolio.profile.name') }}
    </title>

    {{-- Compiled CSS/JS handled by Vite (resources/css/app.css, resources/js/app.js). --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-white text-gray-900 antialiased">

    @include('partials.navbar')

    <main>
        {{ $slot }}
    </main>

    @include('partials.footer')

</body>
</html>
