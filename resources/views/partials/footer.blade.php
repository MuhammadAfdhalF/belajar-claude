{{--
    Site footer.

    Shows the owner's name and social links from config/portfolio.php.
    The year is rendered server-side with PHP's date() helper.
--}}
<footer class="border-t border-slate-200 bg-white">
    <div class="mx-auto flex max-w-5xl flex-col items-center justify-between gap-4 px-6 py-8 text-sm text-slate-500 sm:flex-row">

        <p>&copy; {{ date('Y') }} {{ config('portfolio.profile.name') }}</p>

        <ul class="flex gap-4">
            @foreach (config('portfolio.contact.socials') as $social)
                <li>
                    <a href="{{ $social['url'] }}"
                       class="transition hover:text-blue-600"
                       target="_blank" rel="noopener noreferrer">
                        {{ $social['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>

    </div>
</footer>
