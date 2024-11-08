<x-modern-password-input.compiled :uid="uniqid()" :inscription="__('partials/_register-step-3.1')" attribute="password" />
<x-modern-password-input.compiled :uid="uniqid()" :inscription="__('partials/_register-step-3.2')" attribute="password_confirmation" />
<div class="flex h align gap_05">
    <input name="transaction-recurring-payment-flag" type="checkbox" id="transaction-recurring-payment-flag" checked>
    <label class="b-text b-text_grey-dark" for="transaction-recurring-payment-flag">{{ __('partials/_register-step-3.3') }}</label>
</div>

@stack('components.scripts')
@stack('components.styles')