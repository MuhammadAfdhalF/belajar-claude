{{--
    Site footer.

    Shows the owner's name and social links from config/portfolio.php.
    The year is rendered server-side with PHP's date() helper.
--}}
<footer class="border-t border-gray-100">
    <div class="mx-auto flex max-w-5xl flex-col items-center justify-between gap-4 px-6 py-8 text-sm text-gray-500 sm:flex-row">

        <p>&copy; {{ date('Y') }} {{ config('portfolio.profile.name') }}</p>

        <ul class="flex gap-4">
            @foreach (config('portfolio.contact.socials') as $social)
                <li>
                    <a href="{{ $social['url'] }}"
                       class="transition hover:text-gray-900"
                       target="_blank" rel="noopener noreferrer">
                        {{ $social['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>

    </div>
</footer>
