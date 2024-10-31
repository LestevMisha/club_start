@extends('layouts.auth')
@section('content')
    {{-- Add Blade element --}}
    @include('pages.auth.register.page')
    {{-- Add JS element --}}
    @push('pages.auth.scripts')
        <script src="{{ Vite::asset('resources/views/pages/auth/register/page.mjs') }}" type="module"></script>
    @endpush
@endsection
