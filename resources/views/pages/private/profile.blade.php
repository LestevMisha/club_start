@extends('sub-layouts.private')
@section('sub-content')
    <div class="flex v gap">

        <div class="flex h gap mob">
            <div class="flex v w25 gap ds-row mob">
                <div class="b-text">{{ __('Changed the image?') }}</div>

                <img class="b-img b-img_v11" src="data:image/png;base64,{{ app('App\Services\BladeServices')->getImage() }}" alt="{{ __('Image') }}">

                <div class="b-text b-text_08 b-text_grey">{{ __('Click the button to upload a new photo.') }}</div>
                <button wire:click="observeSaveUserImage" class="ui-button mt-a">
                    {{ __('Update Image') }}
                    @svg('right-arrow', 'right-arrow-icon')
                </button>
            </div>

            <div class="flex v w25 gap ds-row mob">
                <div class="b-text">{{ __('Change Password') }}</div>
                <div class="b-text b-text_08 b-text_grey">
                    {!! __('Changing your password occurs in two stages:<br /> 1 Step - Enter your email and send the code.<br /> 2 Step - Follow the link provided in the email and change your password.') !!}
                </div>
                <a href="{{ route('public.password.forgot') }}" class="ui-button mt-a">
                    {{ __('Change Password') }}
                    @svg('right-arrow', 'right-arrow-icon')
                </a>
            </div>

            @if (Auth::user()->hasVerifiedEmail())
                <div class="flex v w25 gap ds-row mob">
                    <div class="b-text b-text_nowrap"><span class="b-text b-text_blue">{{ Auth::user()->name }}</span>
                        {{ __('your email is verified') }}</div>
                </div>
            @else
                <div class="flex v w25 gap ds-row mob" onclick="window.location.href='{{ route('email.verify') }}';">
                    <div class="b-text">{{ __('Want to use full features?') }}</div>
                    <div class="b-text b-text_08 b-text_grey">
                        {{ __('We provide fast account recovery in case of issues') }}
                    </div>
                    <a href="{{ route('email.verify') }}" class="ui-button mt-a">
                        {{ __('Verify Email') }}
                        @svg('right-arrow', 'right-arrow-icon')
                    </a>
                </div>
            @endif

            <div class="flex v w25 gap ds-row mob">
                <div class="b-text">{{ __('Change Email Address') }}</div>
                <div class="b-text b-text_08 b-text_grey">
                    {{ __('Email change can only be done with access to your Telegram account. No other account can be used, the bot simply won’t respond.') }}
                </div>
                <a target="_blank" href="{{ app('App\Services\BladeServices')->getTelegramChangeEmailLink() }}" class="ui-button mt-a">
                    {{ __('Change Email') }}
                    @svg('right-arrow', 'right-arrow-icon')
                </a>
            </div>
        </div>

        <div class="flex h gap mob">

            <div class="flex v w25 gap ds-row mob" onclick="window.location.href='{{ route('email.verify') }}';">
                <div class="b-text">Настройки Автоплатежа</div>
                <div class="b-text b-text_08 b-text_grey">
                    В данном блоке вы можете отменить автоматическую подписку на КЛУБ START
                </div>
                <a href="{{ route('email.verify') }}" class="ui-button mt-a">
                    Отменить подписку
                    @svg('right-arrow', 'right-arrow-icon')
                </a>
            </div>
            <div class="flex v w50 gap ds-row mob">
                <div class="b-text">{{ __('Want to delete your account?') }}</div>
                <div class="b-text b-text_08 b-text_grey">
                    {{ __('Deleting your account on the site side is not possible, this is to prevent users from accidentally losing their subscription. Account deletion can only be done by directly contacting') }}
                    <a href="{{ route('support') }}">{{ __('support') }}</a>.
                </div>
            </div>
            <div class="flex v w50 gap ds-row mob">

                <x-modern-copy-input.compiled attribute="current-email" inscription="{{ __('Current Email') }}" value="{{ Auth::user()->email }}" class="green mb-1" />
                <div class="b-text b-text_08 b-text_400 b-text_grey-dark b-text_grey-dark-to-grey_light-mode">
                    Если ваша почта указана неверно, вы можете изменить ее <u><a class="b-text b-text_400 b-text_grey-dark b-text_grey-dark-to-grey_light-mode" target="_blank"
                            href="/changeEmail">здесь</a></u> или в разделе
                    вашего <u><a class="b-text b-text_400 b-text_grey-dark b-text_grey-dark-to-grey_light-mode" href="{{ route('private.profile') }}">профиля</a></u>.
                </div>

            </div>
        </div>
    </div>
@endsection
