@extends('sub-layouts.private')
@section('sub-content')
    {{-- prerequisites --}}
    @php
        $user = auth()->user();
        $isVerified = $user->hasVerifiedEmail();
        $isVerifiedLabel = 'pages/private/profile.' . ($isVerified ? 12 : 13);
        $condition = $payment && $user->days_left !== 999;
        $status = '';

        if ($condition) {
            $expiresAt = \Carbon\Carbon::parse($payment->expires_at);
            $now = \Carbon\Carbon::now();

            // Total days difference (positive integer)
            $totalDays = $now->diffInDays($expiresAt);

            // Total seconds difference
            $diffInSeconds = $now->diffInSeconds($expiresAt);

            // Breakdown into hours, minutes, seconds (from the remainder)
            $hours = floor(($diffInSeconds % 86400) / 3600);
            $minutes = floor(($diffInSeconds % 3600) / 60);
            $seconds = $diffInSeconds % 60;

            // Format as: total_days:hh:mm:ss
            $formatted = sprintf('%d:%02d:%02d:%02d', $totalDays, $hours, $minutes, $seconds);

            if ($payment->status == 'subscription-active') {
                $status = __('pages/private/profile.7');
            } else {
                $status = __('pages/private/profile.14');
            }
        }
    @endphp

    {{-- blade --}}
    @include('pages.private.profile.page')
    @once
        {{-- javascript --}}
        @push('pages.private.scripts')
            <script src="{{ Vite::asset('resources/views/pages/private/profile/page.mjs') }}" type="module"></script>
        @endPush
    @endonce
@endsection
