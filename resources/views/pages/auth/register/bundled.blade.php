@extends('layouts.auth')
@section('content')
    {{-- blade --}}
    @include('pages.auth.register.page')
    @once
        {{-- javascript --}}
        @push('pages.auth.scripts')
            <script src="{{ Vite::asset('resources/views/pages/auth/register/page.mjs') }}" type="module"></script>
        @endpush
    @endonce
@endsection
