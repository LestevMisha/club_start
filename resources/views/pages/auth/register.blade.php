@extends('layouts.auth')
@section('content')
    <div class="flex v1">
        <div class="form-wrapper">
            <div class="form-body">

                <x-modern-loader.compiled attribute="store" />

                <div class="flex h space-btw mb-2">
                    <img class="b-img b-img_3em b-img_border-radius-100" src="{{ URL::asset('favicon.ico') }}" alt="logo">
                    <x-tools-stack.compiled class="flex h gap" />
                </div>

                <form id="js-store-form">
                    @csrf

                    <div id="js-next-step">
                        <div class="flex h mob">
                            <div class="flex v w50 mob mb-2">
                                <div class="mb-1">
                                    <div class="b-text b-text_2em">
                                        Зарегистрироваться
                                    </div>
                                </div>
                                <div class="b-text b-text_grey">
                                    Стать участником KLUB START
                                </div>
                            </div>
                            <div class="flex v w50 mob">
                                <div class="modern-form">
                                    <div class="flex static v w100">
                                        <x-modern-input.compiled class="m-0" attribute="name" inscription="Ваше Имя" />
                                    </div>
                                    <button type="submit" class="modern-button mt-1">
                                        <div class="b-text w ml-a">Продолжить</div>
                                        @svg('next-arrow', 'modern-next ml-a')
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="flex h">
                <div class="flex h ml-a my-05 gap_05">
                    <a class="go-button v8" href="{{ route('auth.login') }}">Войти</a>
                    <a class="go-button v8" href="{{ route('public.password.forgot') }}">Забыли Пароль?</a>
                    <a class="go-button v8" href="#">Условия</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        (() => {
            const storeForm = getElement("#js-store-form");

            // authentication
            storeForm.addEventListener("submit", async function(event) {
                event.preventDefault();

                const url = `${window.location.origin}/post/register/store`;
                const contentType = "application/x-www-form-urlencoded";
                const loader = getElement("#js-store-loader");
                const data = new FormData(this);

                const response = await postRequest(url, contentType, data, loader);

                // handle errors
                handleFieldErrors(response?.errors);

                // handle next step
                if (response?.view) loadHTMLAndExecuteScriptsAndStyles("#js-next-step", response.view);

                // handle success
                if (response?.reload) window.location.reload();
            });

            // Handle errors for all fields
            function handleFieldErrors(errors) {
                const fields = ['name', 'email', 'password'];

                fields.forEach(field => {
                    const error = errors?.[field];
                    handleFieldError(field, error);
                });
            }

        })();
    </script>
@endsection
