{{--
    Top navigation bar.

    Sticky, translucent, and modern. Brand mark + links come from
    config/portfolio.php. The mobile menu is driven by
    resources/js/modules/navigation.js via the data-nav-* attributes.
--}}
<header class="sticky top-0 z-40 border-b border-slate-200/70 bg-white/80 backdrop-blur-md">
    <nav class="mx-auto max-w-5xl px-6 py-3">
        <div class="flex items-center justify-between">

            {{-- Brand --}}
            <a href="/" class="flex items-center gap-2.5">
                <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-gradient-to-br from-blue-600 to-blue-800 text-white shadow-sm">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 9l-3 3 3 3m8-6l3 3-3 3M14 5l-4 14" />
                    </svg>
                </span>
                <span class="text-lg font-semibold tracking-tight text-slate-900">
                    {{ config('portfolio.profile.name') }}
                </span>
            </a>

            {{-- Desktop nav --}}
            <div class="hidden items-center gap-8 sm:flex">
                <ul class="flex gap-6 text-sm font-medium text-slate-600">
                    @foreach (config('portfolio.navigation') as $item)
                        <li>
                            <a href="{{ $item['url'] }}" class="transition hover:text-blue-600">
                                {{ $item['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                <a href="#contact"
                   class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-semibold text-white shadow-sm transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-700 hover:shadow-glow">
                    Get in touch
                </a>
            </div>

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
