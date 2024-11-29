<div class="flex v1">
    <div class="form-wrapper">
        <h1>Верификация Почты</h1>
        <x-loader.compiled :uid="uniqid()" attribute="email-verification" size="2.5rem" borderRadius="2.5rem" />

        <form action="{{ route('verification.resend') }}" method="POST" class="modern-form">
            @csrf
            <div class="flex v gap w100">

                <button class="go-button v1">Отправить верефикацию</button>

                @if ($message = Session::get('success'))
                    <div class="b-text text-success">
                        {{ $message }}
                    </div>
                @endif

                <div class="b-text b-text_08 b-text_grey-dark">
                    Прежде чем запросить код, проверьте свою электронную почту на наличие ссылки для подтверждения.
                    Ссылка высылается с момента регистрации.
                </div>
                <a class="text-15px" href="https://mail.ru/" target="_blank">Перейти в Mail.ru</a>
            </div>
        </form>

    </div>
</div>
