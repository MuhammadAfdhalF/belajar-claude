{{--
    Top navigation bar.

    Brand name and links are pulled from config/portfolio.php so there is a
    single place to edit them. Anchor links point to section ids that will be
    added in a later step.
--}}
<header class="border-b border-gray-100">
    <nav class="mx-auto flex max-w-5xl items-center justify-between px-6 py-4">

        {{-- Brand --}}
        <a href="/" class="text-lg font-semibold tracking-tight">
            {{ config('portfolio.profile.name') }}
        </a>

        {{-- Section links --}}
        <ul class="hidden gap-6 text-sm font-medium text-gray-600 sm:flex">
            @foreach (config('portfolio.navigation') as $item)
                <li>
                    <a href="{{ $item['url'] }}" class="transition hover:text-gray-900">
                        {{ $item['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>

    </nav>
</header>
