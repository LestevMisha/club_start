<xheader
    {{ $attributes->merge(['class' => 'component min-w-96 fixed left-0 right-0 top-0 z-[101] mx-auto my-0 flex w-full xl:max-w-[75rem] flex-col bg-[#ffffff1f] p-4 after:absolute after:left-0 after:top-0 after:-z-10 after:h-full after:w-full after:content-normal after:backdrop-blur-lg xl:after:backdrop-blur-none dark:bg-[#00000087] xl:!bg-transparent xl:px-0 xl:py-6 xl:after:backdrop-blur-0']) }}
    data-uid="{{ $uid }}">
    <div class="mx-auto flex w-full flex-row justify-between">
        <div class="flex w-fit flex-row items-center rounded-none p-0 xl:rounded-full xl:bg-[#ffffff1f] xl:p-2 xl:backdrop-blur-lg xl:dark:bg-[#0000001f]">
            <div class="mt-1 flex items-center text-nowrap text-[1.5rem] font-semibold uppercase leading-none text-black dark:text-white">{{ __("components/header.1") }}</div>
            @svg('check-circle', 'mark-icon w-8 h-8 ml-2 text-[#0d6efd]')
        </div>

        <div class="flex w-fit flex-col items-end gap-4 rounded-none p-0 pr-4! sm:flex-row sm:items-center xl:rounded-full xl:bg-[#ffffff1f] xl:p-2 xl:backdrop-blur-lg xl:dark:bg-[#0000001f]">
            <x-tools-stack.compiled :$uid class="flex flex-row items-center gap-4" />
            <a href="{{ route('auth.login') }}" class="w-fit pl-2 text-left font-medium !text-[#0d6efd] sm:p-0">{{ __('components/header.2') }}</a>
        </div>
    </div>
</xheader>
