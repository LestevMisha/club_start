<language-switcher class="switcher language">
    @if ($current_locale === 'en')
        <a class="language-switcher-a" href="/language/ru"></a>
        @svg('us-flag', 'b-img b-img_moon')
    @else
        <a class="language-switcher-a" href="/language/en"></a>
        @svg('ru-flag', 'b-img b-img_moon')
    @endif
</language-switcher>
