@php
    $tvc = app('App\Http\Controllers\Pages\Auth\TelegramVerificationController');
    $link = $tvc->getTelegramVerificationLink();
@endphp

@extends('layouts.auth')
@section('content')
    <div class="flex v1">
        <div class="form-wrapper">
            <div class="form-body">

                <x-modern-loader.compiled attribute="telegram-verification" />

                <div class="flex h space-btw mb-2">
                    <img class="b-img b-img_3em" src="{{ URL::asset('assets/images/logo.png') }}" alt="logo">
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
                            Подтвердите, что вы не робот
                        </div>
                        <button id="js-delete-registration" class="b-text b-text_warning">Удалить регистрацию</button>

                    </div>
                    <div class="flex v w50 mob mb-2">

                        <div class="flex h gap align">
                            <i class="qr-code-icon">
                                {{ $tvc->generateQRCode($link) }}
                            </i>

                            <div class="b-text b-text_grey-dark .b-text_fith">
                                1. Отсканируйте QR-код с устройства, на котором установлен Telegram. Вы будете перенаправлены к нашему боту. Там будет кнопка
                                <span class="b-text b-text_blue">Start</span>.
                                Нажмите на нее.
                            </div>

                        </div>
                        <a target="_blank" href="{{ $link }}" class="modern-button mt-1">
                            <div class="b-text w ml-a">Продолжить</div>
                            @svg('next-arrow', 'modern-next ml-a')
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        (() => {
            const deleteRegistration = getElement("#js-delete-registration");

            // authentication
            deleteRegistration.addEventListener("click", async function(event) {

                const confirmText =
                    "Нажимая кнопку 'Удалить регистрацию', вы подтверждаете удаление всех ваших данных с наших серверов. Обратите внимание, что данный процесс невозможно отменить.";
                if (!confirm(confirmText)) return;

                event.preventDefault();

                const url = `${window.location.origin}/post/telegram/verify/delete`;
                const contentType = "application/x-www-form-urlencoded";
                const loader = getElement("#js-telegram-verification-loader");

                const response = await postRequest(url, contentType, {}, loader);

                // handle success
                if (response?.reload) window.location.reload();
            });

        })();
    </script>
@endsection
