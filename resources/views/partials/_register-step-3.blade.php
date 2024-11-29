<x-inputs.password-input.compiled :uid="uniqid()" :inscription="__('partials/_register-step-3.1')" attribute="password" />
<x-inputs.password-input.compiled :uid="uniqid()" :inscription="__('partials/_register-step-3.2')" attribute="password_confirmation" />
@stack('components.scripts')
@stack('components.styles')