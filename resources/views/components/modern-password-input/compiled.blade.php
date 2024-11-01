{{-- php prerequisites --}}
@php
    $name = "js-$attribute-eye-button";
    $rpvc = app('App\Http\Controllers\Redis\RedisPasswordVisibilityController');
    $isPasswordVisible = $rpvc->getPasswordVisibilityState($name);

    // password visibility states
    $state = $isPasswordVisible ? '' : 'icon-inactive';
    $reverseState = $isPasswordVisible ? 'icon-inactive' : '';
@endphp

{{-- blade --}}
@include('components.modern-password-input.element', ['uid' => $uid, 'attribute' => $attribute, 'inscription' => $inscription])

@once
    {{-- styles --}}
    @push('components.styles')
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/modern-input/element.css') }}">
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/modern-password-input/element.css') }}">
    @endPush

    {{-- javascript --}}
    @push('components.scripts')
        <script src="{{ Vite::asset('resources/views/components/modern-password-input/element.mjs') }}" type="module"></script>
    @endPush
@endonce
