@extends('sub-layouts.private')
@section('sub-content')
    {{-- prerequisites --}}
    @php
        $referredUsersData = app(\App\Services\Models\UserServices::class)->_checkUserReferrals();
        $activeReferred = $referredUsersData->active_referred;
        $totalReferred = $referredUsersData->total_referred;

        $telegram_invite_url = auth()->user()->telegram_invite_url;
    @endphp

    {{-- blade --}}
    @include('pages.private.dashboard.page')
    @once
        {{-- styles --}}
        @push('pages.private.styles')
            <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/pages/private/dashboard/page.css') }}">
        @endpush

        {{-- javascript --}}
        @push('pages.private.scripts')
            <script src="{{ Vite::asset('resources/views/pages/private/dashboard/page.mjs') }}" type="module"></script>
        @endPush
    @endonce
@endsection
