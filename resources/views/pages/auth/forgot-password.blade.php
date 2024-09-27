{{-- @extends('layouts.auth')
@section('content')
    <div class="flex v1">
        <div class="form-wrapper">
            <h1>Забыли Пароль?</h1>
            <x-elements.modern-stack.modern-loader attribute="forgot-password" />

            <form wire:submit.default="sendResetLink" class="modern-form">
            <form class="modern-form">
                @csrf
                <div class="flex v w100">
                    <x-elements.modern-stack.modern-input attribute="email" inscription="Email Адрес" />

                    <button id="timed_button" class="go-button v1" {{ $disabled ? 'disabled' : '' }} wire:loading.attr="disabled">Отправить
                        Письмо</button>
                    <button id="timed_button" class="go-button v1">
                        Отправить Письмо
                    </button>

                    @if (session()->has('success'))
                        <div class="b-text b-text_green mt-1">
                            {{ session('success') }}
                        </div>
                        <div id="timer_wrapper" class="b-text b-text_grey b-text_08 {{ $disabled ? 'active' : '' }} mt-05">
                            Следующий код:
                            <span id="counter">60 сек</span>
                        </div>
                    @elseif (session()->has('failure'))
                        <div class="text-error more mt-1">
                            {{ session('failure') }}
                        </div>
                    @else
                        <div class="text-15px text-grey mt-1">Введите адрес электронной почты привязанный к аккаунту. Мы
                            вышлем письмо
                            о смене пароля.</div>
                    @endif
                    <a class="text-15px mt-1" href="https://mail.ru/" target="_blank">Перейти в Mail.ru</a>
                </div>
            </form>

        </div>

        @section('forgot-password-script')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                let debounce = false;

                Livewire.hook('morph.updated', ({
                    component
                }) => {
                    if (component.ephemeral.disabled && !debounce) {
                        debounce = true;

                        let count = 60;
                        const timer = setInterval(function() {
                            $("#counter").html(`${count--}&nbsp;сек`);
                            if (count === 0) {
                                @this.call('resetDisabled');
                                clearInterval(timer);
                                debounce = false;
                            }
                        }, 1000);
                    }
                });
            });
        </script>
    @stop

    </div>
@endsection --}}



@extends('layouts.auth')
@section('content')
    <div class="flex v1">
        <div class="form-wrapper">
            <div class="form-body">

                <x-modern-loader.compiled attribute="forgot-password" />

                <div class="flex h space-btw mb-2">
                    <img class="b-img b-img_3em" src="{{ URL::asset('assets/images/logo.png') }}" alt="logo">
                    <x-tools-stack.compiled class="flex h gap" />
                </div>
                <div class="flex h mob">
                    <div class="flex v w50 mob mb-2">
                        <div class="mb-1">
                            <div class="b-text b-text_2em">
                                Восстановление Пароля
                            </div>
                        </div>
                        <div class="b-text b-text_grey">
                            Используйте Email привязанный к аккаунту
                        </div>
                    </div>
                    <div class="flex v w50 mob">
                        <form id="js-forgot-password-form" class="modern-form">
                            @csrf
                            <div class="flex v w100">
                                <x-modern-input.compiled class="m-0" attribute="email" inscription="Email Адрес" />

                                <button class="go-button v1" type="submit">Востановить Пароль</button>

                                <a class="text-15px mt-1" href="https://mail.ru/" target="_blank">Перейти в Mail.ru</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="flex h">
                <div class="flex h ml-a my-05 gap_05">
                    <a class="go-button v8" href="{{ route('auth.register') }}">Создать Аккаунт</a>
                    <a class="go-button v8" href="{{ route('auth.login') }}">Войти</a>
                    <a class="go-button v8" href="#">Условия</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        (() => {
            const forgotPasswordForm = getElement("#js-forgot-password-form");

            // authentication
            forgotPasswordForm.addEventListener("submit", async function(event) {
                event.preventDefault();

                const url = `${window.location.origin}/post/forgot-password/sendResetLink`;
                const contentType = "application/x-www-form-urlencoded";
                const loader = getElement("#js-forgot-password-loader");
                const data = {
                    "email": getElement("#js-email-input").value
                };

                const response = await postRequest(url, contentType, data, loader);
                handleFieldError("email", response.errors?.email);

                // handle success
                if (response?.reload) window.location.reload();
            });

        })();
    </script>
@endsection
