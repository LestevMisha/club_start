<div class="flex v1">
    <div class="container container_v2 mob">

        <div class="form-wrapper">
            <div class="form-body">

                <x-loader.compiled :uid="uniqid()" attribute="reset-password" />

                <div class="flex h space-btw mb-2">
                    <img class="b-img b-img_3em b-img_border-radius-100" src="{{ URL::asset('favicon.ico') }}" alt="logo">
                    <x-tools-stack.compiled :uid="uniqid()" class="flex h gap" />
                </div>
                <div class="flex h mob">
                    <div class="flex v w50 mob mb-2">
                        <div class="mb-1">
                            <div class="b-text b-text_2em">
                                {{ __('pages/public/reset-password.1') }}
                            </div>
                        </div>
                        <div class="b-text b-text_grey-dark">
                            {{ __('pages/public/reset-password.2') }}
                        </div>
                    </div>
                    <div class="flex v w50 mob">
                        <form id="js-reset-password-form" class="modern-form">
                            @csrf
                            <input type="hidden" name="email" value="{{ request()->get('email') }}">
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="flex v w100">
                                <div class="flex v gap">
                                    <x-inputs.password-input.compiled :uid="uniqid()" :inscription="__('pages/public/reset-password.3')" attribute="password" />
                                    <x-inputs.password-input.compiled :uid="uniqid()" :inscription="__('pages/public/reset-password.4')" attribute="password_confirmation" />

                                    <button class="submit-button" type="submit">{{ __('pages/public/reset-password.5') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
