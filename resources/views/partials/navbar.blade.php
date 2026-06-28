{{--
    Top navigation bar.

    Brand name and links are pulled from config/portfolio.php so there is a
    single place to edit them. Anchor links point to section ids on the
    homepage. The mobile menu is driven by resources/js/modules/navigation.js
    via the data-nav-* attributes below.
--}}
<header class="border-b border-slate-200 bg-white">
    <nav class="mx-auto max-w-5xl px-6 py-4">
        <div class="flex items-center justify-between">

            {{-- Brand --}}
            <a href="/" class="text-lg font-semibold tracking-tight text-slate-900">
                {{ config('portfolio.profile.name') }}
            </a>

            {{-- Desktop links --}}
            <ul class="hidden gap-6 text-sm font-medium text-slate-600 sm:flex">
                @foreach (config('portfolio.navigation') as $item)
                    <li>
                        <a href="{{ $item['url'] }}" class="transition hover:text-blue-600">
                            {{ $item['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>

            {{-- Mobile toggle --}}
            <button type="button"
                    data-nav-toggle
                    aria-expanded="false"
                    aria-controls="mobile-menu"
                    aria-label="Toggle navigation menu"
                    class="inline-flex items-center justify-center rounded-md p-2 text-slate-600 transition hover:bg-slate-100 hover:text-blue-600 sm:hidden">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        {{-- Mobile menu (hidden by default; toggled by navigation.js) --}}
        <ul id="mobile-menu"
            data-nav-menu
            class="hidden flex-col gap-1 pt-4 text-sm font-medium text-slate-600 sm:hidden">
            @foreach (config('portfolio.navigation') as $item)
                <li>
                    <a href="{{ $item['url'] }}"
                       data-nav-link
                       class="block rounded-md px-2 py-2 transition hover:bg-slate-100 hover:text-blue-600">
                        {{ $item['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
