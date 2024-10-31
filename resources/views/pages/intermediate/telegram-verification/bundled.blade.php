@php
    $tvc = app('App\Http\Controllers\Pages\Auth\TelegramVerificationController');
    $link = $tvc->getTelegramVerificationLink();
@endphp

@extends('layouts.intermediate')
@section('content')
    {{-- Add Blade element --}}
    @include('pages.intermediate.telegram-verification.page')
    {{-- Add JS element --}}
    @push('pages.intermediate.scripts')
        <script src="{{ Vite::asset('resources/views/pages/intermediate/telegram-verification/page.mjs') }}" type="module"></script>
    @endpush
@endsection
