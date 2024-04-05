<header wire:ignore class="modern-header">
    <div class="flex h fit align flex_blured">
        <div class="b-text b-text_nowrap text-header">Клуб Start</div>
        <x-svg class="mark-icon" svg="CheckCircle" />
    </div>

    <div class="flex h gap fit align flex_blured">
        <a href="{{ route('login') }}" class="b-text b-text_right">Личный кабинет</a>
        <x-theme-switcher />

        @if ($currentRoute !== 'main')
            <a href="{{ route('main') }}" class="cr-button">
                <x-svg class="reset-icon" svg="Cross" />
            </a>
        @endif

    </div>
</header>
