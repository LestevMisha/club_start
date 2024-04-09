<div class="flex v gap">
    <x-modern-loader />

    <div class="flex h gap mob cursor_crosshair">
        @if ($image)
            <img class="b-img b-img_v11" src="data:image/png;base64,{{ $image }}" alt="Image">
        @else
            <x-svg class="item-icon {{ $currentRoute === 'profile' ? 'is-active-icon' : '' }}" svg="CircledUser" />
        @endif

        <div class="flex v v3 gap cursor_crosshair">
            <div class="b-text">Изменили изображение?</div>
            <div class="b-text b-text_08 b-text_grey">Нажмите кнопку что-бы загрузить новую фотку! 😊</div>
            <button wire:click="observeSaveUserImage" class="go-button mt-a">Обновить Изображение</button>
        </div>
    </div>

    <div class="flex h gap mob">
        <div class="flex v v3 gap cursor_crosshair">
            <div class="b-text">Изменить пароль</div>
            <div class="b-text b-text_08 b-text_grey">Изменение пароля происходит в 2 этапа: <br>1 этап -
                Введите почту и отправьте код<br>2 этап - Перейдите по ссылке указаной в почте и измените
                пароль.</div>
            <a href="{{ route('password.forgot') }}" class="go-button v4">Изменить пароль</a>
        </div>

        <div class="flex v v3 gap cursor_crosshair">
            <div class="b-text">Изменить E-mail адрес</div>
            <div class="b-text b-text_08 b-text_grey">Изменение почты можно осуществить только имея доступ к
                телеграм аккаунту. Ни
                какой другой аккаунт не может быть использован, бот просто не ответит.</div>
            <a target="_blank" href="{{ $this->getTelegramChangeEmailLink() }}" class="go-button v4">Изменить
                Почту</a>
        </div>
    </div>

    <div class="flex h gap mob">
        @if (Auth::user()->hasVerifiedEmail())
            <div class="flex h v2 v2_3 gap">
                <div class="b-text b-text_nowrap"><span class="b-text b-text_blue">{{ Auth::user()->name }}</span>
                    ваша почта <span class="b-text b-text_green">верефицирована</span></div>
            </div>
        @else
            <div class="flex v flex v3" onclick="window.location.href='{{ route('email.verify') }}';">
                <div class="flex v gap">
                    <div class="b-text">Хотите использовать функции на полную?</div>
                    <div class="b-text b-text_08 b-text_grey">Предоставим быструю восстановку аккаунта в случае неполадок</div>
                    <a href="{{ route('email.verify') }}" class="go-button v3">Верефицируйте почту</a>
                </div>
            </div>
        @endif

        <div class="flex v v3 gap cursor_crosshair">
            <div class="b-text">Хотите удалить аккаунт?</div>
            <div class="b-text b-text_08 b-text_grey">Удалить аккаунт на стороне сайта не возможно, это сделано
                с целью предостережения пользователя от возможности потерять подписку. Удалить аккаунт возможно
                только при личном обрщении в <a href="{{ route('support') }}">поддержку</a>.</div>
        </div>
    </div>


</div>
