<div class="flex v1">
    <div class="form-wrapper">

        <h1>Регистрация в КЛУБ START</h1>
        <x-modern-loader />

        <form wire:submit.default="nextStep" class="modern-form">
            @csrf
            <div class="flex static v w100">
                @if ($currentStep >= 0)
                    <x-input attribute="name" inscription="Ваше Имя"
                        inputDisplay="{{ $currentStep > 0 ? 'none' : 'block' }}" />
                    @if ($currentStep >= 1)
                        <button type="button" wire:click="previousStep" class="previous-step-button">
                            <x-svg-gradient class="previous-step-icon" svg="PreviousStepArrow" />
                        </button>
                        <x-input attribute="email" inscription="Email Адрес"
                            inputDisplay="{{ $currentStep > 1 ? 'none' : 'block' }}" />
                        @if ($currentStep >= 2)
                            <button type="button" wire:click="previousStep" class="previous-step-button">
                                <x-svg-gradient class="previous-step-icon" svg="PreviousStepArrow" />
                            </button>
                            <x-input attribute="password" inscription="Пароль" />
                            <x-input attribute="password_confirmation" inscription="Введите пароль еще раз" />
                            <button type="submit" class="go-button v1">Зарегистрироваться</button>
                        @endif
                    @endif
                @endif

                <x-modern-error />
            </div>
            @if ($currentStep < 2)
                <button type="submit" class="modern-button">
                    <x-svg class="modern-next" svg="NextArrow" />
                </button>
            @endif
        </form>
    </div>
</div>
