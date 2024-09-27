@php
    $route = request()->route()->getName();
@endphp

<div id="sideMenu" class="side-container {{ $route === 'private.dashboard' ? 'folded' : '' }}">
    <div class="flex gap {{ $route === 'private.dashboard' ? 'v' : 'h v10' }} align fit ml-1">
        <img class="item-icon item-icon_v2" src="data:image/png;base64,{{ app('App\Services\BladeServices')->getImage() }}" alt="{{ __('Image') }}">
        <x-theme-switcher.compiled />
        <x-language-switcher.compiled />
    </div>

    <div class="item-divider"></div>

    <a wire:navigate class="flex v10 h align fit gap" href="{{ route('private.dashboard') }}">
        @svg('home', 'item-icon ' . ($route === 'private.dashboard' ? 'is-active-icon' : ''))
        <div class="b-text b-text_grey-dark_v1 reverse b-text_hovered {{ $route === 'private.dashboard' ? 'b-text_blue' : '' }}">
            {{ __('Dashboard') }}
        </div>
    </a>

    <a wire:navigate class="flex v10 h align fit gap" href="{{ route('private.profile') }}">
        @svg('circled-user', 'item-icon ' . ($route === 'private.profile' ? 'is-active-icon' : ''))
        <div class="b-text b-text_grey-dark_v1 reverse b-text_hovered {{ $route === 'private.profile' ? 'b-text_blue' : '' }}">
            {{ __('Profile') }}
        </div>
    </a>

    <a wire:navigate class="flex v10 h align fit gap" href="{{ route('private.transactions') }}">
        @svg('two-cards', 'item-icon ' . ($route === 'private.transactions' ? 'is-active-icon' : ''))
        <div class="b-text b-text_grey-dark_v1 reverse b-text_hovered {{ $route === 'private.transactions' ? 'b-text_blue' : '' }}">
            {{ __('My Transactions') }}
        </div>
    </a>

    <a wire:navigate class="flex v10 h align fit gap" href="{{ route('referral.transactions') }}">
        @svg('link', 'item-icon ' . ($route === 'referral.transactions' ? 'is-active-icon' : ''))
        <div class="b-text b-text_grey-dark_v1 reverse b-text_hovered {{ $route === 'referral.transactions' ? 'b-text_blue' : '' }}">
            {{ __('Ref. Transactions') }}
        </div>
    </a>

    <form id="logout" class="d-inline flex v10 h align fit gap" method="POST" action="{{ route('logout') }}">
        @csrf
        @svg('exit', 'item-icon', ['onclick' => "document.getElementById('logout').submit()"])
        <button type="submit" class="b-text b-text_grey-dark_v1 reverse b-text_hovered">{{ __('Log Out') }}</button>
    </form>

    <div class="item-divider"></div>

    <a class="flex v10 h align fit gap" href="{{ route('public.index') }}">
        @svg('tab', 'item-icon')
        <div class="b-text b-text_grey-dark_v1 reverse b-text_hovered">{{ __('Home') }}</div>
    </a>

    <a class="flex v10 h align fit gap" href="{{ route('support') }}">
        @svg('circled-question-mark', 'item-icon')
        <div class="b-text b-text_grey-dark_v1 reverse b-text_hovered">{{ __('Support') }}</div>
    </a>

    <a class="flex v10 h align fit gap" href="{{ route('documents') }}">
        @svg('favorite-document', 'item-icon')
        <div class="b-text b-text_grey-dark_v1 reverse b-text_hovered">{{ __('Documents') }}</div>
    </a>

</div>
