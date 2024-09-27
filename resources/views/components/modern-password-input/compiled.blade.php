{{-- Add extra prerequisites --}}
@php
    $name = "js-$attribute-eye-button";
    $rpvc = app('App\Http\Controllers\Redis\RedisPasswordVisibilityController');
    $isPasswordVisible = $rpvc->getPasswordVisibilityState($name);

    // password visibility states
    $state = $isPasswordVisible ? '' : 'icon-inactive';
    $reverseState = $isPasswordVisible ? 'icon-inactive' : '';
@endphp

{{-- Add Blade element --}}
@include('components.modern-password-input.element', ['attribute' => $attribute, 'inscription' => $inscription])

{{-- Add JS element --}}
@pushOnce('scripts')
    <script src="{{ Vite::asset('resources/views/components/modern-password-input/element.js') }}"></script>
@endPushOnce

{{-- Add CSS element --}}
@pushOnce('components.styles')
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/modern-input/element.css') }}">
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/modern-password-input/element.css') }}">
@endPushOnce
