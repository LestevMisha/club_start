@extends('layouts.auth')
@section('content')
    <div class="flex v1">
        <div class="container container_v2 mob">

            <div class="form-wrapper">
                <div class="form-body">

                    <x-modern-loader.compiled attribute="reset-password" />

                    <div class="flex h space-btw mb-2">
                        <img class="b-img b-img_3em b-img_border-radius-100" src="{{ URL::asset('favicon.ico') }}" alt="logo">
                        <x-tools-stack.compiled class="flex h gap" />
                    </div>
                    <div class="flex h mob">
                        <div class="flex v w50 mob mb-2">
                            <div class="mb-1">
                                <div class="b-text b-text_2em">
                                    Сброс Пароля
                                </div>
                            </div>
                            <div class="b-text b-text_grey-dark">
                                Используйте свой KLUB аккаунт
                            </div>
                        </div>
                        <div class="flex v w50 mob">
                            <form id="js-reset-password-form" class="modern-form">
                                @csrf
                                <input type="hidden" name="email" value="{{ request()->get('email') }}">
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="flex v w100">
                                    <div class="flex v gap">
                                        <x-modern-password-input.compiled class="m-0" attribute="password" inscription="Пароль" />
                                        <x-modern-password-input.compiled class="m-0" attribute="password_confirmation" inscription="Введите пароль еще раз" />

                                        <button class="modern-submit-button" type="submit">Изменить пароль</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="flex h">
                    <div class="flex h ml-a my-05 gap_05">
                        <a class="go-button v8" href="{{ route('auth.login') }}">Войти</a>
                        <a class="go-button v8" href="{{ route('auth.register') }}">Создать Аккаунт</a>
                        <a class="go-button v8" target="_blank" href="{{ route('public.privacy') }}">Политика Конфиденциальности</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        (() => {
            const form = getElement("#js-reset-password-form");
            const loader = getElement("#js-reset-password-loader");
            const url = `${window.location.origin}/post/reset-password/resetPassword`;
            const contentType = "application/x-www-form-urlencoded";
            const errorHandler = "password";

            form.addEventListener("submit", async (event) => {
                event.preventDefault();
                const data = new FormData(form);

                // Handle reCAPTCHA
                const { success, errors } = await reCAPTCHA('{{ config('services.google.recaptcha.site_key') }}', contentType, loader);
                if (!success) return handleFieldError(errorHandler, errors?.endpoint);
                
                // Handle possible errors
                const response = await postRequest(url, contentType, data, loader);
                if (response?.errors?.email) handleFieldError(errorHandler, response.errors.email);
                if (response?.errors?.password) handleFieldError(errorHandler, response.errors.password);
                if (response?.availableIn) updateCountdown(parseInt(response.availableIn), errorHandler, "reset-password");

            });
        })();
    </script>

@endsection
