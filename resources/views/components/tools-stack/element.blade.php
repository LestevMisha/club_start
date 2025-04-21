<xtools-stack {{ $attributes->merge(['class' => 'component flex flex-row gap-4']) }} data-uid="{{ $uid }}">
    <x-theme-switcher.compiled :$uid attribute="switch-theme" />
    <x-language-switcher.compiled :$uid />

    @if ($currentRoute !== 'public.index')
        @if ($telegramId)
            <a href="{{ route('private.dashboard') }}" class="icon icon_2.5rem icon_grey icon_p7 icon_radius-0.5rem icon_hover-v2">
                @svg('close', 'w-full h-full')
            </a>
        @else
            <a href="{{ route('public.index') }}">
                @svg('close', 'icon icon_2.5rem icon_grey icon_p7 icon_radius-0.5rem icon_hover-v2')
            </a>
        @endif
    @endif
</xtools-stack>
