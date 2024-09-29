<tools-stack class="{{ isset($class) ? $class : '' }}">
    <x-theme-switcher.compiled />
    <x-language-switcher.compiled />

    @if (Route::current()->getName() !== 'public.index')
        @if (auth()->user()?->telegram_id)
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
