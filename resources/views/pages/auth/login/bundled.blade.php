@extends('layouts.auth')
@section('content')
    {{-- Add Blade element --}}
    @include('pages.auth.login.page')
    {{-- Add JS element --}}
    @push('pages.auth.scripts')
        <script src="{{ Vite::asset('resources/views/pages/auth/login/page.mjs') }}" type="module"></script>
    @endPush
@endsection
