<div class="flex v w50 gap hidden ds-row mob">

    {{-- <x-modern-loader.compiled :uid="uniqid()" attribute="profile" size="2.5rem" /> --}}

    {{-- Image Settings --}}
    <div class="b-text b-text_fith b-text_grey b-text_600 modeLight_darker"> {{ __('pages/private/profile.1') }}</div>
    {{-- <div class="flex h gap_05 mob">
        <button id="js-update-image-button" class="ui-button mt-a">
            <div class="b-text b-text_nowrap b-text_fith">{{ __('pages/private/profile.2') }}</div>
            @svg('right-arrow', 'right-arrow-icon')
        </button>
    </div> --}}
    <form class="flex v gap_05" id="js-update-image-form">
        <x-modern-submit-input.compiled :uid="uniqid()" :inscription="__('pages/private/profile.2')" attribute="image-index" />
        <div class="b-text b-text_08 b-text_400 b-text_grey-dark b-text_grey-dark-to-grey_light-mode">
            {{ __('pages/private/profile.9') }}
        </div>
    </form>


    {{-- Passsword Settings --}}
    <div class="b-text b-text_fith b-text_grey b-text_600 modeLight_darker"> {{ __('pages/private/profile.8') }}</div>
    <a href="{{ route('public.password.forgot') }}" class="ui-button mt-a">
        {{ __('pages/private/profile.3') }}
        @svg('right-arrow', 'right-arrow-icon')
    </a>
    

    {{-- Autopayment Setting --}}
    <div class="b-text b-text_fith b-text_grey b-text_600 modeLight_darker"> {{ __('pages/private/profile.4') }}</div>
    <div class="flex v gap_05">
        <a href="{{ route('email.verify') }}" class="ui-button mt-a">
            {{ __('pages/private/profile.6') }}
            @svg('right-arrow', 'right-arrow-icon')
        </a>
        <div class="b-text b-text_08 b-text_400 b-text_grey-dark b-text_grey-dark-to-grey_light-mode">
            {{ __('pages/private/profile.5') }}
        </div>
    </div>


    {{-- Email Setting --}}
    <div class="b-text b-text_fith b-text_grey b-text_600 modeLight_darker"> {{ __('pages/private/profile.7') }}</div>
    <x-modern-field.compiled :uid="uniqid()" :inscription="__('pages/private/profile.17')" attribute="current-email" :value="Auth::user()->email" />
    <x-modern-field.compiled :uid="uniqid()" :inscription="__('pages/private/profile.11')" attribute="email-verified"
        value="{{ auth()->user()->hasVerifiedEmail() ? __('pages/private/profile.12') : __('pages/private/profile.13') }}" />
    @if (!Auth::user()->hasVerifiedEmail())
        <a href="{{ route('email.verify') }}" class="ui-button mt-a">
            {{ __('pages/private/profile.14') }}
            @svg('right-arrow', 'right-arrow-icon')
        </a>
    @endif
    <div class="flex v gap_05">
        <a target="_blank" href="{{ app('App\Services\BladeServices')->getTelegramChangeEmailLink() }}" class="ui-button">
            {{ __('pages/private/profile.16') }}
            @svg('right-arrow', 'right-arrow-icon')
        </a>
        <div class="b-text b-text_08 b-text_400 b-text_grey-dark b-text_grey-dark-to-grey_light-mode">
            {{ __('pages/private/profile.15') }}
        </div>
    </div>
</div>
