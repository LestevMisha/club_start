<div class="flex v1">
    <div class="container container_v2 mob">
        <div class="form-wrapper">
            <div class="form-body">

                <x-loader.compiled :uid="uniqid()" attribute="telegram-verification" size="2.5rem" borderRadius="2.5rem" />

                <div class="flex h space-btw mb-2">
                    <img class="b-img b-img_3em b-img_border-radius-100" src="{{ URL::asset('favicon.ico') }}" alt="logo">
                    <x-tools-stack.compiled :uid="uniqid()" />
                </div>

                <div class="flex h mob">
                    <div class="flex v w50 mob mb-2">
                        <div class="mb-1">
                            <div class="b-text b-text_2em ">
                                {{ __('pages/intermediate/telegram-verification.1') }}
                            </div>
                        </div>
                        <div class="b-text b-text_grey-dark">
                            {{ __('pages/intermediate/telegram-verification.2') }}<br />
                            <u id="js-delete-registration" data-message="{{ __('You confirm the deletion of registration. Please note that this process cannot be undone.') }}"
                                class="pointer">{{ __('pages/intermediate/telegram-verification.3') }}</u>
                        </div>

                    </div>
                    <div class="flex v w50 mob">

                        @svg("telegram-arrow", "telegram-arrow-icon")
                        
                        <div class="flex h gap align">
                            <div class="qr-code-icon">
                                {{ $tvc->generateQRCode($link) }}
                            </div>
                     
                            <div class="b-text">
                                <span class="b-text b-text_grey-dark">{{ __('pages/intermediate/telegram-verification.4') }}</span>
                                <strong>&nbsp;{{ __('pages/intermediate/telegram-verification.5') }}</strong>
                                <span class="b-text b-text_grey-dark">{{ __('pages/intermediate/telegram-verification.6') }}</span>
                            </div>
                        </div>

                        <a target="_blank" href="{{ $link }}" class="modern-button mt-1">
                            <div class="b-text w ml-a">{{ __('pages/intermediate/telegram-verification.7') }}</div>
                            @svg('next-arrow', 'modern-next ml-a')
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
