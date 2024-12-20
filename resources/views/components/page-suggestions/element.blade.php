<xpage-suggestions class="flex flex-row" data-uid="{{ $uid }}">
    <div class="my-2 ml-auto flex flex-row gap-2">
        @if (url()->current() === route('auth.register'))
            <a class="relative flex h-fit w-fit items-center justify-center rounded-2xl bg-transparent p-4 text-[0.75rem] font-medium text-[#666666] no-underline [transition:all_0.225s_ease-in-out] hover:scale-[1.025] hover:bg-[#0000001A] dark:hover:bg-[#FFFFFF1A]"
                href="{{ route('auth.login') }}">{{ __('components/page-suggestions.4') }}</a>
        @elseif(url()->current() === route('auth.login'))
            <a class="relative flex h-fit w-fit items-center justify-center rounded-2xl bg-transparent p-4 text-[0.75rem] font-medium text-[#666666] no-underline [transition:all_0.225s_ease-in-out] hover:scale-[1.025] hover:bg-[#0000001A] dark:hover:bg-[#FFFFFF1A]" href="{{ route('auth.register') }}">{{ __('components/page-suggestions.1') }}</a>
        @elseif(url()->current() === route('public.password.forgot'))
            <a class="relative flex h-fit w-fit items-center justify-center rounded-2xl bg-transparent p-4 text-[0.75rem] font-medium text-[#666666] no-underline [transition:all_0.225s_ease-in-out] hover:scale-[1.025] hover:bg-[#0000001A] dark:hover:bg-[#FFFFFF1A]" href="{{ route('auth.login') }}">{{ __('components/page-suggestions.4') }}</a>
        @endif

        @if (url()->current() === route('public.password.forgot'))
            <a class="relative flex h-fit w-fit items-center justify-center rounded-2xl bg-transparent p-4 text-[0.75rem] font-medium text-[#666666] no-underline [transition:all_0.225s_ease-in-out] hover:scale-[1.025] hover:bg-[#0000001A] dark:hover:bg-[#FFFFFF1A]" href="{{ route('auth.register') }}">{{ __('components/page-suggestions.1') }}</a>
        @else
            <a class="relative flex h-fit w-fit items-center justify-center rounded-2xl bg-transparent p-4 text-[0.75rem] font-medium text-[#666666] no-underline [transition:all_0.225s_ease-in-out] hover:scale-[1.025] hover:bg-[#0000001A] dark:hover:bg-[#FFFFFF1A]" href="{{ route('public.password.forgot') }}">{{ __('components/page-suggestions.2') }}</a>
        @endif
        <a class="relative flex h-fit w-fit items-center justify-center rounded-2xl bg-transparent p-4 text-[0.75rem] font-medium text-[#666666] no-underline [transition:all_0.225s_ease-in-out] hover:scale-[1.025] hover:bg-[#0000001A] dark:hover:bg-[#FFFFFF1A]" target="_blank" href="{{ route('public.privacy') }}">{{ __('components/page-suggestions.3') }}</a>
    </div>
</xpage-suggestions>
