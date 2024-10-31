<div class="flex v1">
    <div class="container container_v2 mob">

        <div class="form-wrapper">
            <div class="form-body">

                <x-modern-loader.compiled attribute="authenticate" />

                <div class="flex h space-btw mb-2">
                    <img class="b-img b-img_3em b-img_border-radius-100" src="{{ URL::asset('favicon.ico') }}" alt="logo">
                    <x-tools-stack.compiled class="flex h gap" />
                </div>
                <div class="flex h mob">
                    <div class="flex v w50 mob mb-2">
                        <div class="mb-1">
                            <div class="b-text b-text_2em">
                                Войти
                            </div>
                        </div>
                        <div class="b-text b-text_grey-dark">
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


                                    <button class="modern-submit-button" type="submit">Войти</button>
                                    <div class="flex h align gap_05">
                                        <input name="remember-me" type="checkbox" id="remember-me" checked>
                                        <label class="b-text b-text_grey-dark b-text_lh-1" for="remember-me">Запомнить меня</label>
                                    </div>

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
                    <a class="go-button v8" target="_blank" href="{{ route('public.privacy') }}">Политика Конфиденциальности</a>
                </div>
            </div>
        </div>
    </div>
</div>
