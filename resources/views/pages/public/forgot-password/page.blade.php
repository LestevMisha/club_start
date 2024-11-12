<div class="flex v1">
    <div class="form-wrapper">
        <div class="form-body">
            <x-modern-loader.compiled :uid="uniqid()" attribute="forgot-password" />

            <div class="flex h space-btw mb-2">
                <img class="b-img b-img_3em b-img_border-radius-100" src="{{ URL::asset('favicon.ico') }}" alt="logo">
                <x-tools-stack.compiled :uid="uniqid()" class="flex h gap" />
            </div>
            <div class="flex h mob">
                <div class="flex v w50 mob mb-2">
                    <div class="mb-1">
                        <div class="b-text b-text_2em">
                            {{ __('pages/public/forgot-password.1') }}
                        </div>
                    </div>
                    <div class="b-text b-text_grey-dark">
                        {{ __('pages/public/forgot-password.2') }}
                    </div>
                </div>
                <div class="flex v w50 mob">

                    <form id="js-forgot-password-form" class="modern-form">
                        @csrf
                        <div class="flex v w100">
                            <div class="flex v gap">
                                <x-modern-input.compiled :uid="uniqid()" :inscription="__('pages/public/forgot-password.5')" :value="auth()?->user()?->email" attribute="email" />
                                <button id="js-submit-button" class="submit-button" type="submit">{{ __('pages/public/forgot-password.3') }}</button>
                                <a class="b-text mt-1" href="https://mail.ru/" target="_blank">{{ __('pages/public/forgot-password.4') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <x-page-suggestions.compiled :uid="uniqid()" />
    </div>
</div>
