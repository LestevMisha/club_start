<language-switcher class="switcher language">
    @if ($current_locale === 'en')
        <a class="flex h100" href="/language/ru">
            @svg('us-flag', 'b-img b-img_moon')
        </a>
    @else
        <a class="flex h100" href="/language/en">
            @svg('ru-flag', 'b-img b-img_moon')
        </a>
    @endif
</language-switcher>
