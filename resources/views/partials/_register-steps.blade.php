<div class="flex h mob">
    <div class="flex v w50 mob mb-2">
        <div class="mb-1">
            <div class="b-text b-text_2em">
                {{ __('partials/_register-steps.1') }}
            </div>
        </div>
        <div class="b-text b-text_grey-dark">
            {{ __('partials/_register-steps.2') }}
        </div>

    </div>
    <div class="flex v w50 mob">
        <div class="modern-form">
            <div class="flex static gap v w100">

                @foreach ($data as $key => $value)
                    <x-modern-input.compiled :uid="uniqid()" :inscription="($key === 'name') ? __('partials/_register-steps.3') : __('partials/_register-steps.5')" :attribute="($key === 'name') ? 'name' : 'email'" :$value class="input-container_done m-0" />
                @endforeach

                @if ($step === 2)
                    <x-modern-input.compiled :uid="uniqid()" :inscription="__('partials/_register-steps.5')" attribute="email" />
                @elseif ($step === 3)
                    <x-modern-password-input.compiled :uid="uniqid()" :inscription="__('partials/_register-steps.6')" attribute="password" />
                    <x-modern-password-input.compiled :uid="uniqid()" :inscription="__('partials/_register-steps.7')" attribute="password_confirmation" />
                @endif

            </div>
            <button type="submit" class="modern-button mt-1">
                <div class="b-text ml-a w">{{ __('partials/_register-steps.4') }}</div>
                @svg('next-arrow', 'modern-next ml-a')
            </button>

            @if ($step === 3)
                <div class="flex h align gap_05 mt-1">
                    <input name="transaction-recurring-payment-flag" type="checkbox" id="transaction-recurring-payment-flag" checked>
                    <label class="b-text b-text_grey-dark" for="transaction-recurring-payment-flag">{{ __('partials/_register-steps.8') }}</label>
                </div>
                <x-consent.compiled :uid="uniqid()" class="b-text b-text_grey-dark mt-1" />
            @endif

        </div>
    </div>
</div>

@stack('components.scripts')
@stack('components.styles')
