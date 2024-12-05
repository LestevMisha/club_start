@extends('layouts.public')
@section('content')
    <main class="">
        <x-header.compiled :uid="uniqid()" />
        @yield('sub-content')
    </main>
@endsection
