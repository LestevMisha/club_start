<side-menu class="side-container" data-uid="{{ $uid }}" data-attribute="{{ $attribute }}">
    <div id="js-{{ $attribute }}-header" class="flex gap align fit ml-1">
        @svg('arrow-to-right', 'item-icon item-icon_v3 pointer', ['id' => "js-$attribute-squeeze-button"])
        <img class="item-icon item-icon_v2" src="data:image/png;base64,{{ app('App\Services\BladeServices')->getImage() }}" alt="{{ __('Image') }}">
        <x-theme-switcher.compiled :$uid attribute="switch-theme" />
        <x-language-switcher.compiled :$uid />
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

    <a wire:navigate class="flex v10 h align fit gap" href="{{ route('private.referral.transactions') }}">
        @svg('link', 'item-icon ' . ($route === 'private.referral.transactions' ? 'is-active-icon' : ''))
        <div class="b-text b-text_grey-dark_v1 reverse b-text_hovered {{ $route === 'private.referral.transactions' ? 'b-text_blue' : '' }}">
            {{ __('Ref. Transactions') }}
        </div>
    </a>

    <div class="flex v10 h align fit gap">
        <x-logout-button.compiled :$uid attribute="user-logout" />
        <div id="js-logout-trigger" class="b-text b-text_grey-dark_v1 reverse b-text_hovered pointer">
            {{ __('Log Out') }}
        </div>
    </div>

    <div class="item-divider"></div>

    <a class="flex v10 h align fit gap" href="{{ route('public.index') }}">
        @svg('tab', 'item-icon')
        <div class="b-text b-text_grey-dark_v1 reverse b-text_hovered">{{ __('Home') }}</div>
    </a>

    <a class="flex v10 h align fit gap" href="{{ route('support') }}">
        @svg('circled-question-mark', 'item-icon')
        <div class="b-text b-text_grey-dark_v1 reverse b-text_hovered">{{ __('Support') }}</div>
    </a>

    <a class="flex v10 h align fit gap" href="{{ route('public.documents') }}">
        @svg('favorite-document', 'item-icon')
        <div class="b-text b-text_grey-dark_v1 reverse b-text_hovered">{{ __('Documents') }}</div>
    </a>

</side-menu>
