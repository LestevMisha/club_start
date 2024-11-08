<div class="flex v1">
    <div class="form-wrapper">
        <div class="form-body">
            <x-modern-loader.compiled :uid="uniqid()" attribute="forgot-password" />

            <div class="flex h space-btw mb-2">
                <img class="b-img b-img_3em b-img_border-radius-100" src="{{ URL::asset('favicon.ico') }}" alt="logo">
                <x-tools-stack.compiled :uid="uniqid()" class="flex h gap" />
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
                                <x-modern-input.compiled :uid="uniqid()" attribute="email" inscription="Email Адрес" />
                                <button id="js-submit-button" class="modern-submit-button" type="submit">Востановить Пароль</button>
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
