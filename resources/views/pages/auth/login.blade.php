@extends('layouts.auth')
@section('content')
    <div class="flex v1">
        <div class="form-wrapper">
            <div class="form-body">

                <x-modern-loader.compiled attribute="authenticate" />

                <div class="flex h space-btw mb-2">
                    <img class="b-img b-img_3em" src="{{ URL::asset('assets/images/logo.png') }}" alt="logo">
                    <x-tools-stack.compiled class="flex h gap" />
                </div>
                <div class="flex h mob">
                    <div class="flex v w50 mob mb-2">
                        <div class="mb-1">
                            <div class="b-text b-text_2em">
                                Войти
                            </div>
                        </div>
                        <div class="b-text b-text_grey">
                            Используйте свой KLUB аккаунт
                        </div>
                    </div>
                    <div class="flex v w50 mob">
                        <form id="js-authenticate-form" class="modern-form">
                            @csrf
                            <div class="flex v w100">
                                <div class="flex v gap">
                                    <x-modern-input.compiled class="m-0" attribute="email" inscription="Email Адрес" />
                                    <x-modern-password-input.compiled attribute="password" inscription="Пароль" />
                                </div>

                                <button class="go-button v1" type="submit">Войти</button>
                                <div class="flex h mt-1 gap_05 mob">
                                    <input name="remember-me" type="checkbox" id="remember-me">
                                    <label class="b-text b-text_grey" for="remember-me">Запомнить меня</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="flex h">
                <div class="flex h ml-a my-05 gap_05">
                    <a class="go-button v8" href="{{ route('auth.register') }}">Создать Аккаунт</a>
                    <a class="go-button v8" href="{{ route('public.password.forgot') }}">Забыли Пароль?</a>
                    <a class="go-button v8" href="#">Условия</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        (() => {
            const authenticateForm = getElement("#js-authenticate-form");

            // authentication
            authenticateForm.addEventListener("submit", async function(event) {
                event.preventDefault();

                const url = `${window.location.origin}/post/login/authenticate`;
                const contentType = "application/x-www-form-urlencoded";
                const loader = getElement("#js-authenticate-loader");
                const data = new FormData(this);

                // reCAPTCHA
                const recaptchaResponse = await reCAPTCHA('{{ config('services.google.recaptcha.site_key') }}', contentType, loader);
                if (!recaptchaResponse?.success) return handleFieldError("email", recaptchaResponse.errors?.endpoint);

                const response = await postRequest(url, contentType, data, loader);
                handleFieldError("email", response.errors?.email);
                handleFieldError("password", response.errors?.password);

                // handle success
                if (response?.reload) window.location.reload();
                if (response?.availableIn) updateCountdown(parseInt(response?.availableIn), "email", "authenticate");
            });

        })();
    </script>
@endsection
