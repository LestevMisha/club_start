<section class="dark:bg-[linear-gradient(97deg,_#000000_40%,_#0d6efd_100%)] relative m-0 h-full w-full bg-white bg-[linear-gradient(97deg,_#FFFFFF_60%,_#0d6efd_100%)] p-0 py-48">
    <div class="min-w-96 max-w-96 relative z-10 m-auto w-full xl:max-w-[1200px]">
        <div class="flex flex-col-reverse xl:flex-row">
            <div class="z-30 flex w-full flex-col xl:w-[70%]">
                <div
                    class="dark:border-[#ffffff33] dark:bg-[linear-gradient(0.303turn,_#ffffff_1%,_#00000000_100%)] text-font-medium relative mx-auto my-0 !mb-4 h-[fit-content] w-[fit-content] rounded-3xl border-[0.1rem] border-solid border-[#00000033] bg-[linear-gradient(0.303turn,_#000000_1%,_#00000033_100%)] bg-clip-text px-6 py-[0.6rem] uppercase text-transparent backdrop-blur-lg xl:m-0">
                    {{ __('pages/public/index.1') }}
                </div>
                <div class="dark:text-white relative mb-8 text-center text-4xl font-semibold leading-none xl:text-left xl:text-7xl">
                    {{ __('pages/public/index.2') }}
                    <span
                        class="dark:bg-[#ffffff1A] text-nowrap dark:text-white relative bottom-1 rounded-2xl bg-[#0000000f] px-7 py-3 text-[40%] font-medium text-[#666666] xl:bottom-3 xl:px-9 xl:py-5 xl:text-[30%]">
                        {{ __('pages/public/index.3') }}
                    </span>
                </div>
                <div class="dark:text-white relative mb-8 text-center text-2xl font-light text-black xl:text-left">
                    {{ __('pages/public/index.4') }}
                    <br class="hidden xl:block" />
                    {{ __('pages/public/index.5') }}
                </div>
                <div class="flex flex-col items-center gap-4 xl:flex-row">
                    <a class="group relative flex h-20 w-full cursor-pointer items-center justify-center rounded-2xl bg-[#0d6efde6] text-xl text-white no-underline [transition:all_0.225s_ease-in-out] hover:scale-105 hover:bg-[#0d6efd] xl:w-1/2"
                        href="{{ route('auth.register') }}">
                        {{ __('pages/public/index.6') }}
                        <img class="absolute -bottom-7 -right-4 h-10 w-10 opacity-0 [transition:all_0.225s_ease-in-out] group-hover:-translate-x-4 group-hover:-translate-y-4 group-hover:opacity-100"
                            src="{{ URL::asset('assets/images/finger-click.png') }}" alt="finger-click">
                    </a>
                    <div class="flex flex-row items-center">
                        @svg('dynamic-premium.star-dynamic-premium', 'w-16 h-16')
                        <div class="text-nowrap dark:text-[#acacac] text-font-light relative text-[#666666]">
                            {{ __('pages/public/index.7') }}
                            <br />
                            {{ __('pages/public/index.30') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative flex h-64 w-full flex-col sm:h-56 xl:h-auto xl:w-[30%]">
                <div id="js-sneaker" class="invisible absolute bottom-0 left-0 z-10 hidden h-full w-full translate-y-0 cursor-grab xl:block"></div>
                <img id="js-light-sneaker" class="pointer-events-none visible absolute right-20 top-20 z-10 h-auto w-60 rotate-45 scale-x-100 animate-levitation xl:top-28 xl:w-96 xl:rotate-[34deg]"
                    src="{{ URL::asset('assets/images/min-png/sneaker-in-motion.png') }}" alt="sneaker-in-motion">
                <img class="pointer-events-none absolute -bottom-[60%] left-1/2 top-4 h-56 w-56 -translate-x-1/2 select-none overflow-visible [rotate:-22.5deg] sm:top-[unset] xl:left-[17%] xl:!min-h-[26rem] xl:!min-w-[26rem] xl:translate-x-0"
                    src="{{ URL::asset('assets/images/min-png/shipping-box.png') }}" alt="shipping-box">
                <img class="pointer-events-none absolute -bottom-[60%] left-1/2 top-4 z-20 h-56 w-56 -translate-x-1/2 select-none overflow-visible [rotate:-22.5deg] sm:top-[unset] xl:left-[17%] xl:!min-h-[26rem] xl:!min-w-[26rem] xl:translate-x-0"
                    src="{{ URL::asset('assets/images/min-png/shipping-box-cut.png') }}" alt="shipping-box-cut">
            </div>
        </div>
    </div>
</section>
