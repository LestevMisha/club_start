<div id="sideMenu" class="side-container {{ $currentRoute === 'dashboard' ? 'folded' : '' }}">
    <div class="flex {{ $currentRoute === 'dashboard' ? 'v gap' : 'h v10' }} align fit">
        {{-- @if ($currentRoute === 'dashboard')
            <img class="logo-icon" src="{{ URL::asset('images/logo.png') }}" alt="logo">
        @else
            <div class="b-text b-text_nowrap text-header">Клуб Start</div>
        @endif --}}
        <img class="item-icon item-icon_v2" src="data:image/png;base64,{{ $image }}" alt="Image">
        <livewire:templates.theme-switcher-simplified />
    </div>

    <div class="item-divider"></div>

    <a wire:navigate class="flex v10 h align fit gap" href="{{ route('dashboard') }}">
        <x-svg class="item-icon {{ $currentRoute === 'dashboard' ? 'is-active-icon' : '' }}" svg="Home" />
        <div class="b-text b-text_grey-dark_v1 reverse b-text_hovered {{ $currentRoute === 'dashboard' ? 'b-text_blue' : '' }}">Дашборд
        </div>
    </a>

    <a wire:navigate class="flex v10 h align fit gap" href="{{ route('profile') }}">
        <x-svg class="item-icon {{ $currentRoute === 'profile' ? 'is-active-icon' : '' }}" svg="CircledUser" />
        <div class="b-text b-text_grey-dark_v1 reverse b-text_hovered {{ $currentRoute === 'profile' ? 'b-text_blue' : '' }}">Профиль
        </div>
    </a>

    <a wire:navigate class="flex v10 h align fit gap" href="{{ route('transactions') }}">
        <x-svg class="item-icon {{ $currentRoute === 'transactions' ? 'is-active-icon' : '' }}" svg="TwoCards" />
        <div class="b-text b-text_grey-dark_v1 reverse b-text_hovered {{ $currentRoute === 'transactions' ? 'b-text_blue' : '' }}">
            Мои Транзакции
        </div>
    </a>

    <a wire:navigate class="flex v10 h align fit gap" href="{{ route('referral.transactions') }}">
        <x-svg class="item-icon {{ $currentRoute === 'referral.transactions' ? 'is-active-icon' : '' }}"
            svg="Link" />
        <div
            class="b-text b-text_grey-dark_v1 reverse b-text_hovered {{ $currentRoute === 'referral.transactions' ? 'b-text_blue' : '' }}">
            Реф. Транзакции
        </div>
    </a>

    <form id="logout" class="d-inline flex v10 h align fit gap" method="POST" action="{{ route('logout') }}">
        @csrf
        <x-svg onclick="document.getElementById('logout').submit()" class="item-icon pointer" svg="Exit" />
        <button type="submit" class="b-text b-text_grey-dark_v1 reverse b-text_hovered">Выйти</button>
    </form>

    <div class="item-divider"></div>

    <a class="flex v10 h align fit gap" href="{{ route('main') }}">
        <x-svg class="item-icon" svg="Tab" />
        <div class="b-text b-text_grey-dark_v1 reverse b-text_hovered">Главная</div>
    </a>

    <a class="flex v10 h align fit gap" href="{{ route('support') }}">
        <x-svg class="item-icon" svg="CircledQuestionMark" />
        <div class="b-text b-text_grey-dark_v1 reverse b-text_hovered">Поддержка</div>
    </a>

    <a class="flex v10 h align fit gap" href="{{ route('documents') }}">
        <x-svg class="item-icon" svg="FavoriteDocument" />
        <div class="b-text b-text_grey-dark_v1 reverse b-text_hovered">Документы</div>
    </a>


</div>
