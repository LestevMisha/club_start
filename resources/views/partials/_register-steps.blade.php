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
            <div class="flex static gap v w100">

                @foreach ($data as $key => $value)
                    <x-modern-input.compiled class="input-container_done m-0" attribute="{{ $key === 'name' ? 'name' : 'email' }}" inscription="{{ $key === 'name' ? 'Ваше Имя' : 'Email Адрес' }}"
                        value="{{ $value }}" />
                @endforeach

                @if ($step === 2)
                    <x-modern-input.compiled class="m-0" attribute="email" inscription="Email Адрес" />
                @elseif ($step === 3)
                    <x-modern-password-input.compiled class="m-0" attribute="password" inscription="Пароль" />
                    <x-modern-password-input.compiled class="m-0" attribute="password_confirmation" inscription="Введите пароль еще раз" />
                @endif

            </div>
            <button type="submit" class="modern-button mt-1">
                <div class="b-text ml-a">Продолжить</div>
                @svg('next-arrow', 'modern-next ml-a')
            </button>
        </div>
    </div>
</div>

@stack('scripts')
@stack('components.styles')
