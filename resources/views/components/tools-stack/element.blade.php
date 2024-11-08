<tools-stack class="{{ $class ?? 'flex h gap' }}" data-uid="{{ $uid }}">
    <x-theme-switcher.compiled :$uid attribute="switch-theme" />
    <x-language-switcher.compiled :$uid />

    @if ($currentRoute !== 'public.index')
        @if ($telegramId)
            <a href="{{ route('private.dashboard') }}" class="cr-button">
                @svg('cross', 'reset-icon')
            </a>
        @else
            <a href="{{ route('public.index') }}" class="cr-button">
                @svg('cross', 'reset-icon')
            </a>
        @endif
    @endif
</tools-stack>
