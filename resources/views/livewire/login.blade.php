<div class="flex v1">
    <div class="form-wrapper">
        <h1>Авторизация</h1>
        <x-modern-loader />

        <form wire:submit.default="submit" class="modern-form">
            @csrf
            <div class="flex v w100">
                <x-input attribute="email" inscription="Email Адрес" />
                <x-input attribute="password" inscription="Пароль" />
                <x-modern-error />
                <button class="go-button v1">Войти</button>
                <div class="flex h mt-1 gap space-btw mob">
                    <div class="flex h gap_05 align">

                        <remember-me-switcher>
                            <div class="flex h100 w100 h space-btw align">
                                <x-svg svg="CrossCircle" class="b-img b-img_remember-me b-img_cross" />
                                <x-svg svg="CheckCircle" class="b-img b-img_remember-me b-img_shield-check" />
                            </div>
                            <input wire:click="changeRemember" wire:model="remember" type="checkbox" value="remember-me" id="flexCheckDefault">
                            <div class="toggle-circle"></div>
                        </remember-me-switcher>
                        <label class="text-remember" for="flexCheckDefault">Запомнить меня</label>
                    </div>
                    <a class="text-15px" href="{{ route('password.forgot') }}">Забыли Пароль?</a>
                </div>
                <a class="text-15px mt-05" href="{{ route('register') }}">Регистрация</a>

            </div>
        </form>

    </div>
</div>
