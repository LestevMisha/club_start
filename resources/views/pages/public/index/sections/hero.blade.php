<section class="relative m-0 h-full w-full bg-white bg-[linear-gradient(97deg,_#FFFFFF_60%,_#0d6efd_100%)] p-0 py-48 dark:bg-[linear-gradient(97deg,_#000000_40%,_#0d6efd_100%)]">
    <div class="min-w-96 max-w-96 relative z-10 m-auto w-full xl:max-w-[1200px]">
        <div class="flex flex-col-reverse xl:flex-row">
            <div class="z-30 flex w-full flex-col xl:w-[70%]">
                <div
                    class="text-font-medium relative mx-auto my-0 !mb-4 h-[fit-content] w-[fit-content] rounded-3xl border-[0.1rem] border-solid border-[#00000033] bg-[linear-gradient(0.303turn,_#000000_1%,_#00000033_100%)] bg-clip-text px-6 py-[0.6rem] uppercase text-transparent backdrop-blur-lg dark:border-[#ffffff33] dark:bg-[linear-gradient(0.303turn,_#ffffff_1%,_#00000000_100%)] xl:m-0">
                    {{ __('pages/public/index.1') }}
                </div>
                <div class="relative mb-8 text-center text-4xl font-semibold leading-none dark:text-white xl:text-left xl:text-7xl">
                    {{ __('pages/public/index.2') }}
                    <span
                        class="text-nowrap relative bottom-1 rounded-2xl bg-[#0000000f] px-7 py-3 text-[40%] font-medium text-[#666666] dark:bg-[#ffffff1A] dark:text-white xl:bottom-3 xl:px-9 xl:py-5 xl:text-[30%]">
                        {{ __('pages/public/index.3') }}
                    </span>
                </div>
                <div class="relative mb-8 text-center text-2xl font-light text-black dark:text-white xl:text-left">
                    {{ __('pages/public/index.4') }}
                    <br class="hidden xl:block" />
                    {{ __('pages/public/index.5') }}
                </div>
                <div class="flex flex-col items-center gap-4 xl:flex-row">
                    <a class="group relative flex h-20 w-full cursor-pointer items-center justify-center rounded-2xl bg-[#0d6efde6] text-xl text-white no-underline [transition:all_0.225s_ease-in-out] hover:scale-105 hover:bg-[#0d6efd] xl:w-1/2"
                        href="{{ route('auth.register') }}">
                        {{ __('pages/public/index.6') }}
                        <img class="absolute -bottom-7 -right-4 h-12 w-12 opacity-0 [transition:all_0.225s_ease-in-out] group-hover:-translate-x-4 group-hover:-translate-y-4 group-hover:opacity-100"
                            src="{{ URL::asset('assets/images/min-webp/pointer.webp') }}" alt="finger-click">
                    </a>
                    <div class="flex flex-row gap-2 items-center">
                        <img src="{{ URL::asset('assets/images/min-png/box.png') }}" class="w-16 h-16" alt="box">
                        <div class="text-nowrap text-font-light relative text-[#666666] dark:text-[#acacac]">
                            {{ __('pages/public/index.7') }}
                            <br />
                            {{ __('pages/public/index.30') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="min-h-64 relative flex h-64 w-full flex-col xl:h-auto xl:w-[30%]">
                <div id="js-sneaker" class="invisible absolute w-80 h-80 bottom-[5%] left-[10%] xl:-bottom-[20%] xl:-left-[20%] z-10 xl:h-[35rem] xl:w-[35rem] translate-y-0 cursor-grab [transition:all_0.225s_ease-in-out]"></div>
                <img id="js-light-sneaker" class="animate-levitation pointer-events-none visible absolute right-20 top-20 z-10 h-auto w-60 rotate-45 scale-x-100 xl:top-28 xl:w-96 xl:rotate-[34deg]"
                    src="{{ URL::asset('assets/images/min-png/sneaker-in-motion.png') }}" alt="sneaker-in-motion">
                <img class="pointer-events-none absolute top-4 -rotate-12 xl:-rotate-0 bottom-0 left-1/2 h-72 w-72 -translate-x-1/2 select-none overflow-visible sm:top-[unset] xl:-bottom-[65%] dark:brightness-75 xl:-left-[20%] xl:h-[34rem] xl:!min-h-[34rem] xl:w-[34rem] xl:!min-w-[34rem] xl:translate-x-0"
                    src="{{ URL::asset('assets/images/min-png/shipping-box.png') }}" alt="shipping-box">
                <img class="pointer-events-none absolute top-4 -rotate-12 xl:-rotate-0 bottom-0 left-1/2 z-20 h-72 w-72 -translate-x-1/2 select-none overflow-visible sm:top-[unset] xl:-bottom-[65%] dark:brightness-75 xl:-left-[20%] xl:h-[34rem] xl:!min-h-[34rem] xl:w-[34rem] xl:!min-w-[34rem] xl:translate-x-0"
                    src="{{ URL::asset('assets/images/min-png/shipping-box-cut.png') }}" alt="shipping-box-cut">
            </div>
        </div>
    </div>
</section>
