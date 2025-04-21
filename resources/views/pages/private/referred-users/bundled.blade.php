@extends('sub-layouts.private')
@section('sub-content')
    {{-- prerequisites --}}
    @php
        $amount_earned = auth()->user()->amount_earned;
    @endphp

    {{-- blade --}}
    @include('pages.private.referred-users.page')
@endsection
