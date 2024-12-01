<xheader
    class="dark:bg-[#00000087] min-w-96 fixed left-0 right-0 top-0 z-[101] mx-auto my-0 flex w-full max-w-[1280px] flex-col bg-[#ffffff1f] p-4 after:absolute after:left-0 after:top-0 after:-z-10 after:h-full after:w-full after:content-normal after:backdrop-blur-lg xl:!bg-transparent xl:px-0 xl:py-6 xl:after:backdrop-blur-0"
    data-uid="{{ $uid }}">
    <div class="mx-auto flex w-full flex-row justify-between">
        <div class="xl:dark:bg-[#0000001f] flex w-fit flex-row items-center rounded-none p-0 xl:rounded-full xl:bg-[#ffffff1f] xl:p-2 xl:backdrop-blur-lg">
            <div class="text-nowrap dark:text-white mt-1 flex items-center text-[1.5rem] font-semibold uppercase leading-none text-black">{{ __('Club Start') }}</div>
            @svg('check-circle', 'mark-icon w-8 h-8 ml-2 text-[#0d6efd]')
        </div>

        <div class="xl:dark:bg-[#0000001f] flex w-fit flex-col items-end gap-4 rounded-none p-0 !pr-4 sm:flex-row sm:items-center xl:rounded-full xl:bg-[#ffffff1f] xl:p-2 xl:backdrop-blur-lg">
            <x-tools-stack.compiled :$uid class="flex flex-row items-center gap-4" />
            <a href="{{ route('auth.login') }}" class="w-fit pl-2 text-left font-medium !text-[#0d6efd] sm:p-0">{{ __('Personal Account') }}</a>
        </div>
    </div>
</xheader>
