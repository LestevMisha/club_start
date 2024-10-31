<div class="flex v1">
    <div class="container container_v2 mob">
        <div class="form-wrapper">
            <div class="form-body">

                <x-modern-loader.compiled attribute="telegram-verification" />

                <div class="flex h space-btw mb-2">
                    <img class="b-img b-img_3em b-img_border-radius-100" src="{{ URL::asset('favicon.ico') }}" alt="logo">
                    <x-tools-stack.compiled class="flex h gap" />
                </div>

                <div class="flex h mob">
                    <div class="flex v w50 mob mb-2">
                        <div class="mb-1">
                            <div class="b-text b-text_2em ">
                                Телеграм Верификация
                            </div>
                        </div>
                        <div class="b-text b-text_grey-dark">
                            Если не можете вернуться, нажмите<br />
                            <u id="js-delete-registration" data-message="{{ __('You confirm the deletion of registration. Please note that this process cannot be undone.') }}"
                                class="pointer">зарегистрироваться еще раз</u>
                        </div>

                    </div>
                    <div class="flex v w50 mob mb-2">

                        <div class="flex h gap align">

                            <div class="qr-code-icon">
                                {{ $tvc->generateQRCode($link) }}
                            </div>
                            <div class="b-text">

                                <span class="b-text b-text_grey-dark">Сканируйте QR-код </span>
                                <strong>или</strong>
                                <span class="b-text b-text_grey-dark">нажмите кнопку ниже для автоматической верификации в Telegram.</span>

                            </div>

                        </div>
                        <a target="_blank" href="{{ $link }}" class="modern-button mt-1">
                            <div class="b-text w ml-a">Верефицировать Сейчас</div>
                            @svg('next-arrow', 'modern-next ml-a')
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
