@extends('layouts.auth')
@section('content')
    <div class="flex v1">
        <div class="form-wrapper">
            <div class="form-body">

                <x-modern-loader.compiled attribute="forgot-password" />

                <div class="flex h space-btw mb-2">
                    <img class="b-img b-img_3em b-img_border-radius-100" src="{{ URL::asset('favicon.ico') }}" alt="logo">
                    <x-tools-stack.compiled class="flex h gap" />
                </div>
                <div class="flex h mob">
                    <div class="flex v w50 mob mb-2">
                        <div class="mb-1">
                            <div class="b-text b-text_2em">
                                Восстановление Пароля
                            </div>
                        </div>
                        <div class="b-text b-text_grey-dark">
                            Используйте Email привязанный к аккаунту
                        </div>
                    </div>
                    <div class="flex v w50 mob">

                        <form id="js-forgot-password-form" class="modern-form">
                            @csrf
                            <div class="flex v w100">
                                <div class="flex v gap">
                                    <x-modern-input.compiled class="m-0" attribute="email" inscription="Email Адрес" />

                                    <button class="modern-submit-button" type="submit">Востановить Пароль</button>

                                    <a class="b-text mt-1" href="https://mail.ru/" target="_blank">Перейти в Mail.ru</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="flex h">
                <div class="flex h ml-a my-05 gap_05">
                    <a class="go-button v8" href="{{ route('auth.register') }}">Создать Аккаунт</a>
                    <a class="go-button v8" href="{{ route('auth.login') }}">Войти</a>
                    <a class="go-button v8" target="_blank" href="{{ route('public.privacy') }}">Политика Конфиденциальности</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        (() => {
            const form = getElement("#js-forgot-password-form");
            const loader = getElement("#js-forgot-password-loader");
            const url = `${window.location.origin}/post/forgot-password/sendResetLink`;
            const contentType = "application/x-www-form-urlencoded";
            const errorHandler = "email";

            form.addEventListener("submit", async (event) => {
                event.preventDefault();
                const data = { "email": getElement("#js-email-input").value };

                // Handle reCAPTCHA
                const { success, errors } = await reCAPTCHA('{{ config('services.google.recaptcha.site_key') }}', contentType, loader);
                if (!success) return handleFieldError(errorHandler, errors?.endpoint);
                
                // Handle possible errors
                const response = await postRequest(url, contentType, data, loader);
                if (response?.errors?.email) handleFieldError(errorHandler, response.errors.email);
                if (response?.availableIn) updateCountdown(parseInt(response.availableIn), errorHandler, "reset-password");
               
            });
        })();
    </script>
@endsection
