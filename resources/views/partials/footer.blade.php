{{--
    Site footer.

    Brand mark, social links (config/portfolio.php), and a copyright line.
--}}
<footer class="border-t border-slate-200 bg-slate-50">
    <div class="mx-auto max-w-5xl px-6 py-12">

        <div class="flex flex-col items-center gap-6 sm:flex-row sm:justify-between">

            {{-- Brand --}}
            <div class="flex items-center gap-2.5">
                <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-gradient-to-br from-blue-600 to-blue-800 text-white shadow-sm">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 9l-3 3 3 3m8-6l3 3-3 3M14 5l-4 14" />
                    </svg>
                </span>
                <span class="font-semibold tracking-tight text-slate-900">
                    {{ config('portfolio.profile.name') }}
                </span>
            </div>

            {{-- Social links --}}
            <ul class="flex flex-wrap justify-center gap-2">
                @foreach (config('portfolio.contact.socials') as $social)
                    <li>
                        <a href="{{ $social['url'] }}"
                           class="inline-flex h-9 items-center rounded-lg border border-slate-200 bg-white px-3 text-sm font-medium text-slate-600 shadow-sm transition-all duration-200 hover:-translate-y-0.5 hover:border-blue-300 hover:text-blue-600"
                           target="_blank" rel="noopener noreferrer">
                            {{ $social['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="mt-8 border-t border-slate-200 pt-6 text-center text-sm text-slate-500">
            &copy; {{ date('Y') }} {{ config('portfolio.profile.name') }}. Built with Laravel &amp; Tailwind CSS.
        </div>

    </div>
</footer>
