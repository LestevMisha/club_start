{{-- @extends('errors::minimal')
@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found')) --}}

@extends('layouts.public')
@section('content')
    <div class="bg-knight">
        <div class="relative z-10 m-auto w-full min-w-96 max-w-96 xl:max-w-[75rem]">
            <div class="m-auto w-full xl:max-w-[58.625rem]">
                <div class="relative flex h-fit w-full flex-col overflow-hidden rounded-3xl bg-white p-8 dark:bg-black">
                    <p class="text-sm font-medium text-blue-500 dark:text-blue-400">{{ __('errors/404.key_c62420fe56ba1bd9be3bad2d6203a28e') }}</p>
                    <h1 class="mt-3 text-2xl font-semibold text-gray-800 md:text-3xl dark:text-white">{{ __('errors/404.key_d0fbda9855d118740f1105334305c126') }}</h1>
                    <p class="mt-4 text-gray-500 dark:text-gray-400">
                        {{ __('errors/404.key_535ebea95a61562dd3a694b935f74fc6') }}
                        {{-- {{ $exception->getMessage() }} --}}
                        {{ __('errors/404.key_59c8f090ebecbc207574abae8985f9ac') }}
                    </p>
                    <div class="mt-6 flex flex-col gap-4 xl:flex-row">
                        <x-submit-button.compiled onclick="window.history.back()" :uid="uniqid()" :inscription="__('errors/404.key_22b653bd8d2edcebb9e0036b4ac79262')" iconName="arrow-forward" class="w-full xl:w-1/2" />
                        <x-button.compiled :uid="uniqid()" :title="__('errors/404.key_c1a6010ef80a900fefcdd89de97599d8')" :url="route('public.index')" target="" class="w-full xl:w-1/2" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
