{{--
    Hero section — Editorial Tech Atelier.

    Asymmetric magazine layout: serif name + copy + CTAs + focus stats on the
    left, a developer code panel (no photo) on the right. Content from
    config('portfolio.profile').
--}}
@php
    $profile = config('portfolio.profile');

    // Line-style SVG icon paths for the focus stats + floating cards.
    $icons = [
        'code'     => 'M8 9l-3 3 3 3m8-6l3 3-3 3M14 5l-4 14',
        'api'      => 'M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5',
        'health'   => 'M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z',
        'database' => 'M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 5.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125',
        'arrow'    => 'M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3',
    ];
@endphp

<section class="bg-cream">
    <div class="mx-auto max-w-6xl px-6 py-20 md:py-28">
        <div class="grid items-center gap-14 lg:grid-cols-12">

            {{-- Left: editorial copy --}}
            <div class="animate-fade-up lg:col-span-7">

                <p class="inline-flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.25em] text-gold-dark">
                    <span class="h-px w-8 bg-gold-dark"></span>
                    {{ $profile['role'] }}@if (!empty($profile['location'])) · {{ $profile['location'] }}@endif
                </p>

                <h1 class="mt-6 font-display text-6xl font-semibold leading-[0.95] tracking-tight text-forest sm:text-7xl lg:text-8xl">
                    {{ $profile['name'] }}
                </h1>

                <p class="mt-6 max-w-xl text-lg leading-relaxed text-forest/75">
                    {{ $profile['tagline'] }}
                </p>

                <div class="mt-8 flex flex-wrap items-center gap-3">
                    <x-ui.button href="#projects" class="group">
                        View projects
                        <svg class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $icons['arrow'] }}" />
                        </svg>
                    </x-ui.button>
                    <x-ui.button href="#contact" variant="secondary">Get in touch</x-ui.button>
                </div>

                {{-- Focus stats strip (non-numeric) --}}
                @if (!empty($profile['stats']))
                    <div class="mt-12 border-t border-edge pt-6">
                        <p class="text-[0.65rem] font-semibold uppercase tracking-[0.25em] text-forest/50">Focus</p>
                        <dl class="mt-4 grid grid-cols-2 gap-x-6 gap-y-5 sm:grid-cols-4">
                            @foreach ($profile['stats'] as $stat)
                                <div class="flex items-start gap-2.5">
                                    <svg class="mt-0.5 h-5 w-5 shrink-0 text-gold-dark" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $icons[$stat['icon']] ?? $icons['code'] }}" />
                                    </svg>
                                    <dt class="text-sm font-semibold leading-snug text-forest">{{ $stat['label'] }}</dt>
                                </div>
                            @endforeach
                        </dl>
                    </div>
                @endif
            </div>

            {{-- Right: developer code panel --}}
            <div class="relative lg:col-span-5">
                <div class="rounded-2xl border border-edge bg-olive-dark p-5 shadow-[0_24px_60px_-28px_rgba(31,41,51,0.55)]">
                    <div class="flex items-center gap-1.5">
                        <span class="h-3 w-3 rounded-full bg-cream/25"></span>
                        <span class="h-3 w-3 rounded-full bg-cream/25"></span>
                        <span class="h-3 w-3 rounded-full bg-cream/25"></span>
                        <span class="ml-3 text-[0.7rem] uppercase tracking-widest text-cream/50">integration.php</span>
                    </div>
                    <pre class="mt-4 overflow-x-auto font-mono text-[13px] leading-relaxed text-cream/90"><code>use App\Services\SatuSehat;

$response = Http::withToken($token)
    ->post($endpoint, $payload);

Patient::query()
    ->where('active', true)
    ->get();

<span class="text-gold">// Laravel · Yii2 · REST API</span></code></pre>
                </div>

                {{-- Floating accent cards (lg+ only, to avoid mobile overflow) --}}
                <div class="absolute -right-3 -top-5 hidden w-48 rounded-xl border border-edge bg-card p-3 shadow-[0_12px_30px_-16px_rgba(31,41,51,0.4)] lg:block">
                    <div class="flex items-center gap-2.5">
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-gold/15 text-gold-dark">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $icons['health'] }}" />
                            </svg>
                        </span>
                        <div>
                            <p class="text-xs font-semibold text-forest">Healthcare Systems</p>
                            <p class="text-[0.7rem] text-forest/60">SATUSEHAT · BPJS</p>
                        </div>
                    </div>
                </div>

                <div class="absolute -bottom-5 -left-3 hidden w-48 rounded-xl border border-edge bg-card p-3 shadow-[0_12px_30px_-16px_rgba(31,41,51,0.4)] lg:block">
                    <div class="flex items-center gap-2.5">
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-olive/15 text-olive-dark">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $icons['database'] }}" />
                            </svg>
                        </span>
                        <div>
                            <p class="text-xs font-semibold text-forest">Database Support</p>
                            <p class="text-[0.7rem] text-forest/60">PostgreSQL · MySQL</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
