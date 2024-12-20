{{-- @extends('errors::minimal')
@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))--}}

@extends('layouts.public')
@section('content')
    <div class="bg-knight">
        <div class="min-w-96 max-w-96 relative z-10 m-auto w-full xl:max-w-[1200px]">
            <div class="m-auto min-h-[384px] w-full max-w-[938px] xl:flex xl:items-center xl:gap-12">
                <div class="wf-ull xl:w-1/2">
                    <p class="text-sm font-medium text-blue-500 dark:text-blue-400">{{ __('errors/404.key_c62420fe56ba1bd9be3bad2d6203a28e') }}</p>
                    <h1 class="mt-3 text-2xl font-semibold text-gray-800 dark:text-white md:text-3xl">{{ __('errors/404.key_d0fbda9855d118740f1105334305c126') }}</h1>
                    <p class="mt-4 text-gray-500 dark:text-gray-400">
                        {{ __('errors/404.key_535ebea95a61562dd3a694b935f74fc6') }}
                        {{-- {{ $exception->getMessage() }} --}}
                        {{ __('errors/404.key_59c8f090ebecbc207574abae8985f9ac') }}
                    </p>

                    <div class="mt-6 flex items-center gap-x-3">
                        <button onclick="window.history.back()"
                            class="flex w-1/2 items-center justify-center gap-x-2 rounded-xl bg-white px-5 py-2 [transition:_all_0.225s_ease-in-out] text-sm text-gray-700 transition-colors duration-200 hover:bg-gray-200 dark:bg-[#1c1c1c] dark:text-gray-200 dark:hover:bg-[#323232] sm:w-auto">
                            @svg('trending-flat', 'w-5 h-5 -scale-x-100 text-gray-700 dark:text-gray-200')
                            <span>{{ __('errors/404.key_22b653bd8d2edcebb9e0036b4ac79262') }}</span>
                        </button>

                        <a href="{{ route('public.index') }}"
                            class="w-1/2 shrink-0 rounded-xl bg-blue-500 px-5 py-2 text-sm tracking-wide text-white [transition:_all_0.225s_ease-in-out] transition-colors duration-200 hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500 sm:w-auto">
                            {{ __('errors/404.key_c1a6010ef80a900fefcdd89de97599d8') }}
                        </a>
                    </div>
                </div>

                <div class="relative mt-12 w-full xl:mt-0 xl:w-1/2">
                    @svg('custom.404', 'w-full h-auto max-w-xl xl:mx-auto')
                </div>
            </div>
        </div>
    </div>
@endsection
