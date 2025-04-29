<xlanguage-switcher {{ $attributes->merge(['class' => 'component icon icon_2.5rem icon_grey icon_p7 icon_radius-0.5rem icon_hover-v2']) }} data-uid="{{ $uid }}">
    @if ($current_locale === 'en')
        <a class="absolute left-0 top-0 z-10 h-full w-full" href="{{ route('public.persist.across', ['locale', 'ru']) }}"></a>
        @svg('us-flag', 'w-full h-full')
    @else
        <a class="absolute left-0 top-0 z-10 h-full w-full" href="{{ route('public.persist.across', ['locale', 'en']) }}"></a>
        @svg('ru-flag', 'w-full h-full')
    @endif
</xlanguage-switcher>
