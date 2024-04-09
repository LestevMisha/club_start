<header wire:ignore id="header" class="modern-header">
    <div class="flex h align space-btw">
        <div class="flex h fit align flex_blured">
            <div class="b-text b-text_nowrap text-header">Клуб Start</div>
            <x-svg class="mark-icon" svg="CheckCircle" />
        </div>
        <div id="dashboard-link-container" class="flex h gap fit align flex_blured mob">
            <div class="flex h align gap">
                <x-theme-switcher />
                @if ($currentRoute !== 'main')
                    <a href="{{ route('main') }}" class="cr-button">
                        <x-svg class="reset-icon" svg="Cross" />
                    </a>
                @endif
            </div>

            <a id="dashboard-link" href="{{ route('login') }}"
            class="b-text b-text_fit b-text_right b-text_v3">Личный кабинет</a>
        </div>
    </div>
</header>
