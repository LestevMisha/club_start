@extends('layouts.intermediate')
@section('content')
    {{-- blade --}}
    @include('pages.intermediate.payment.page')
    @once
        {{-- javascript --}}
        @push('pages.intermediate.scripts')
            <script src="{{ Vite::asset('resources/views/pages/intermediate/payment/page.mjs') }}" type="module"></script>
            <script src="https://checkout.cloudpayments.ru/checkout.js"></script>
        @endpush
    @endonce
@endsection
