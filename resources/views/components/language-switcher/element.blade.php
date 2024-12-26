<xlanguage-switcher {{ $attributes->merge(['class' => 'component icon icon_2.5rem icon_grey icon_p7 icon_radius-full icon_hover-v2']) }} data-uid="{{ $uid }}">
    @if ($current_locale === 'en')
        <a class="absolute left-0 top-0 z-10 h-full w-full" href="/language/ru"></a>
        @svg('us-flag', 'w-full h-full')
    @else
        <a class="absolute left-0 top-0 z-10 h-full w-full" href="/language/en"></a>
        @svg('ru-flag', 'w-full h-full')
    @endif
</xlanguage-switcher>
