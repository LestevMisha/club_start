<div class="flex v1">
    <div class="container container_v2 mob">

        <div class="form-wrapper">
            <div class="form-body">
                <x-modern-loader.compiled :uid="uniqid()" attribute="authenticate" size="2.5rem" borderRadius="2.5rem" />

                <div class="flex h space-btw mb-2">
                    <img class="b-img b-img_3em b-img_border-radius-100" src="{{ URL::asset('favicon.ico') }}" alt="logo">
                    <x-tools-stack.compiled :uid="uniqid()" />
                </div>
                <div class="flex h mob">
                    <div class="flex v w50 mob mb-2">
                        <div class="mb-1">
                            <div class="b-text b-text_2em">
                                {{ __('pages/auth/login.1') }}
                            </div>
                        </div>
                        <div class="b-text b-text_grey-dark">
                            {{ __('pages/auth/login.2') }}
                        </div>
                    </div>
                    <div class="flex v w50 mob">
                        <form id="js-authenticate-form" class="modern-form">
                            @csrf
                            <div class="flex v w100">
                                <div class="flex v gap">
                                    <x-modern-input.compiled :uid="uniqid()" :inscription="__('pages/auth/login.3')" attribute="email" />
                                    <x-modern-password-input.compiled :uid="uniqid()" :inscription="__('pages/auth/login.4')" attribute="password" />

                                    <button id="js-submit-button" class="submit-button" type="submit">{{ __('pages/auth/login.1') }}</button>
                                    <div class="flex h align gap_05">
                                        <input name="remember-me" type="checkbox" id="remember-me" checked>
                                        <label class="b-text b-text_grey-dark b-text_lh-1" for="remember-me">{{ __('pages/auth/login.5') }}</label>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <x-page-suggestions.compiled :uid="uniqid()" />
        </div>
    </div>
</div>
