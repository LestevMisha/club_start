{{-- prerequisites --}}
@php
    $registerLink = app(\App\Services\TelegramServices::class)->getRegisterLink();

    $linkClasses = 'relative flex h-fit w-fit items-center justify-center rounded-2xl bg-transparent xl:p-4 text-[0.75rem] font-medium text-[#666666] no-underline [transition:all_0.225s_ease-in-out] xl:hover:scale-[1.025] xl:hover:bg-[#0000001A] xl:dark:hover:bg-[#FFFFFF1A]';
    $isPasswordRoute = url()->current() === route('public.password.forgot') || app(\Illuminate\Support\Str::class)::is(route('password.reset', '*'), url()->current());
@endphp

{{-- blade --}}
@include('components.page-suggestions.element')
