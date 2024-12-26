{{-- prerequisites --}}
@php
    use Illuminate\Support\Str;

    $linkClasses =
        'relative flex h-fit w-fit items-center justify-center rounded-2xl bg-transparent p-4 text-[0.75rem] font-medium text-[#666666] no-underline [transition:all_0.225s_ease-in-out] hover:scale-[1.025] hover:bg-[#0000001A] dark:hover:bg-[#FFFFFF1A]';
    $isPasswordRoute = url()->current() === route('public.password.forgot') || Str::is(route('password.reset', '*'), url()->current());
@endphp

{{-- blade --}}
@include('components.page-suggestions.element')
