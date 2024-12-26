<xdashboard-header {{ $attributes->merge(['class' => 'component dark:bg-black z-50 fixed top-0 h-[4.5rem] w-full bg-white pl-[4.5rem]']) }} data-uid="{{ $uid }}">
    <div class="h-full max-w-[1440px] px-4">
        <div class="flex h-full w-full max-w-[1440px] flex-row items-center gap-4">
            <div class="font-semibold text-black dark:text-white">{{ __('components/dashboard-header.1') }}</div>
            <a class="ml-auto flex flex-row items-center gap-4" href="{{ route('private.referral.transactions') }}">
                <div class="font-semibold text-black dark:text-white">{{ __('components/dashboard-header.2') }} {{ auth()->user()->amount_earned }}₽</div>
            </a>
        </div>
    </div>
</xdashboard-header>
