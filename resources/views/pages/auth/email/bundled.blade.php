@extends('layouts.auth')
@section('content')
    {{-- blade --}}
    @include('pages.auth.email.page')
    @once
        {{-- javascript --}}
        @push('pages.auth.scripts')
            <script src="{{ Vite::asset('resources/views/pages/auth/email/page.mjs') }}" type="module"></script>
        @endPush
    @endonce
@endsection
