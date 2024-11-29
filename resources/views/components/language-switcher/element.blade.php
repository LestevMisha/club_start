<xlanguage-switcher class="icon icon_2.5rem icon_grey icon_p7 icon_radius-full icon_hover-v2" data-uid="{{ $uid }}">
    @if ($current_locale === 'en')
        <a class="absolute top-0 left-0 w-full h-full z-10" href="/language/ru"></a>
        @svg('us-flag', 'w-full h-full')
    @else
        <a class="absolute top-0 left-0 w-full h-full z-10" href="/language/en"></a>
        @svg('ru-flag', 'w-full h-full')
    @endif
</xlanguage-switcher>