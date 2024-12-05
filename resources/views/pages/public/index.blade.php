@extends('sub-layouts.public')
@section('sub-content')

    <div>
        {{-- <section class="b-section b-section_visible b-section_v1 pt-12 pb-12" id="section-target-1"> --}}
        <section class="dark:bg-[linear-gradient(97deg,_#000000_40%,_#0d6efd_100%)] relative m-0 h-full w-full bg-white bg-[linear-gradient(97deg,_#FFFFFF_60%,_#0d6efd_100%)] p-0 py-48">
            {{-- <div class="container container_v2 mob"> --}}
            <div class="min-w-96 max-w-96 relative z-10 m-auto w-full xl:max-w-[1200px]">
                {{-- <div class="flex h reverse_mob"> --}}
                <div class="flex flex-col-reverse xl:flex-row">
                    {{-- <div id="custom_mobile" class="flex v w70 z-3 wmob mb-6"> --}}
                    <div class="z-30 flex w-full flex-col xl:w-[70%]">
                        {{-- <div class="relative dark:text-white text-black b-text_v5 b-text_v5.1 mb-1">{{ __('Online-access') }}</div> --}}
                        <div
                            class="dark:border-[#ffffff33] dark:bg-[linear-gradient(0.303turn,_#ffffff_1%,_#00000000_100%)] text-font-medium relative mx-auto my-0 !mb-4 h-[fit-content] w-[fit-content] rounded-3xl border-[0.1rem] border-solid border-[#00000033] bg-[linear-gradient(0.303turn,_#000000_1%,_#00000033_100%)] bg-clip-text px-6 py-[0.6rem] uppercase text-transparent backdrop-blur-lg xl:m-0">
                            {{ __('pages/public/index.1') }}
                        </div>
                        {{-- <div class="relative dark:text-white text-black b-text_4.5em b-text_lh-1 font-bold fmob6 text-center xl:text-left mb-8"> --}}
                        <div class="dark:text-white relative mb-8 text-center text-4xl font-semibold leading-none xl:text-left xl:text-7xl">
                            {{ __('pages/public/index.2') }}
                            {{-- <span class="relative dark:text-white text-black b-text_500 text-[#666666] b-text_white_mob span_custom"> --}}
                            <span
                                class="dark:bg-[#ffffff1A] text-nowrap dark:text-white relative bottom-1 rounded-2xl bg-[#0000000f] px-7 py-3 text-[40%] font-medium text-[#666666] xl:bottom-3 xl:px-9 xl:py-5 xl:text-[30%]">
                                {{ __('pages/public/index.3') }}
                            </span>
                        </div>
                        {{-- <div class="relative dark:text-white text-black font-light text-2xl b-text_grey_mob br_remover_mob fmob3 text-center xl:text-left mb-2 text-[#666666]"> --}}
                        <div class="dark:text-white relative mb-8 text-center text-2xl font-light text-black xl:text-left">
                            {{ __('pages/public/index.4') }}
                            <br class="hidden xl:block" />
                            {{ __('pages/public/index.5') }}
                        </div>

                        {{-- <div class="flex h gap align mob"> --}}
                        <div class="flex flex-col items-center gap-4 xl:flex-row">
                            {{-- <a class="go-button v7 go-button_50%" href="{{ route('auth.register') }}"> --}}
                            <a class="group relative flex h-20 w-full cursor-pointer items-center justify-center rounded-2xl bg-[#0d6efde6] text-xl text-white no-underline [transition:all_0.225s_ease-in-out] hover:scale-105 hover:bg-[#0d6efd] xl:w-1/2"
                                href="{{ route('auth.register') }}">
                                {{ __('pages/public/index.6') }}
                                {{-- <img class="b-img b-img_finger-click group-hover:opacity-100 group-hover:-translate-x-4 group-hover:-translate-y-4" src="{{ URL::asset('assets/images/finger-click.png') }}" alt="finger-click"> --}}
                                <img class="absolute -bottom-7 -right-4 h-10 w-10 opacity-0 [transition:all_0.225s_ease-in-out] group-hover:-translate-x-4 group-hover:-translate-y-4 group-hover:opacity-100"
                                    src="{{ URL::asset('assets/images/finger-click.png') }}" alt="finger-click">
                            </a>

                            {{-- <div class="flex h align"> --}}
                            <div class="flex flex-row items-center">
                                {{-- @svg('dynamic-premium.star-dynamic-premium', 'b-img b-img_face') --}}
                                @svg('dynamic-premium.star-dynamic-premium', 'w-16 h-16')
                                {{-- <div class="relative dark:text-white text-black font-light text-[#acacac] text-[#666666]_mob text-[#666666]"> --}}
                                <div class="text-nowrap dark:text-[#acacac] text-font-light relative text-[#666666]">
                                    {{ __('pages/public/index.7') }}
                                    <br />
                                    {{ __('pages/public/index.30') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="flex v w30 hemFlex_mob wmob"> --}}
                    <div class="relative flex h-64 w-full flex-col sm:h-56 xl:h-auto xl:w-[30%]">
                        {{-- <div id="anchor" class="z-2"></div> --}}
                        {{-- <div id="js-sneaker" class="block invisible -top-16 xl:-top-[10%] absolute w-[28rem] h-[28rem] xl:h-[45em] xl:w-[45em] -left-20 xl:left-[unset] -right-20 z-10 cursor-grab"></div> --}}
                        <div id="js-sneaker" class="invisible absolute bottom-0 left-0 z-10 hidden h-full w-full translate-y-0 cursor-grab xl:block"></div>
                        {{-- <img id="loadingOverlay" class="z-2" src="{{ URL::asset('assets/images/min-png/sneaker-in-motion.png') }}" alt="sneaker-in-motion"> --}}
                        <img id="js-light-sneaker"
                            class="pointer-events-none visible absolute right-20 top-20 z-10 h-auto w-60 rotate-45 scale-x-100 animate-levitation xl:top-28 xl:w-96 xl:rotate-[34deg]"
                            src="{{ URL::asset('assets/images/min-png/sneaker-in-motion.png') }}" alt="sneaker-in-motion">
                        {{-- <img class="b-img b-img_box" src="{{ URL::asset('assets/images/min-png/shipping-box.png') }}" alt="shipping-box"> --}}
                        <img class="pointer-events-none absolute -bottom-[60%] left-1/2 top-4 h-56 w-56 -translate-x-1/2 select-none overflow-visible [rotate:-22.5deg] sm:top-[unset] xl:left-[17%] xl:!min-h-[26rem] xl:!min-w-[26rem] xl:translate-x-0"
                            src="{{ URL::asset('assets/images/min-png/shipping-box.png') }}" alt="shipping-box">
                        {{-- <img class="b-img b-img_box b-img_box-cut" src="{{ URL::asset('assets/images/min-png/shipping-box-cut.png') }}" alt="shipping-box-cut"> --}}
                        <img class="pointer-events-none absolute -bottom-[60%] left-1/2 top-4 z-20 h-56 w-56 -translate-x-1/2 select-none overflow-visible [rotate:-22.5deg] sm:top-[unset] xl:left-[17%] xl:!min-h-[26rem] xl:!min-w-[26rem] xl:translate-x-0"
                            src="{{ URL::asset('assets/images/min-png/shipping-box-cut.png') }}" alt="shipping-box-cut">
                    </div>
                </div>
            </div>
            {{-- <div class="overlay"></div> --}}
            {{-- <div
                class="dark:bg-black absolute bottom-0 left-0 z-10 h-48 w-full bg-white [mask:radial-gradient(67.08px_at_50%_90px,#000_99%,#0000_101%)_calc(50%_-_60px)_0/_120px_100%_,_radial-gradient(67.08px_at_50%_calc(-60px),#0000_99%,#000_101%)_50%_30px/_120px_100%_repeat-x]">
            </div> --}}
        </section>





        {{-- <section class="b-section b-section_visible pb-6"> --}}
        <section
            class="dark:bg-black relative -top-16 m-0 -mb-16 h-full w-full overflow-visible bg-white p-0 py-32 !pb-64 [mask:radial-gradient(67.08px_at_50%_90px,#000_99%,#0000_101%)_calc(50%_-_60px)_0/_120px_100%_,_radial-gradient(67.08px_at_50%_calc(-60px),#0000_99%,#000_101%)_50%_30px/_120px_100%_repeat-x]">
            {{-- <div class="container container_v2 pb-2 mob"> --}}
            <div class="min-w-96 max-w-96 relative z-10 m-auto w-full pb-8 xl:max-w-[1200px]">
                {{-- <div class="mb-12 flex h-fit flex-col items-center justify-center mb-3"> --}}
                <div class="mb-12 flex h-fit flex-col items-center justify-center">
                    {{-- <div class="relative dark:text-white text-black b-text_uppercase b-text_2.5em b-text_fit font-bold text-center  _v3"> --}}
                    <div class="dark:text-white relative w-fit text-center text-[2.5rem] font-bold uppercase text-black">
                        {{ __('pages/public/index.8') }}
                        <br />
                        {{-- <span class="relative dark:text-white text-black text-[#acacac] text-[#666666]_mob text-[#666666] font-light b-text_08"> --}}
                        <span class="relative w-fit text-center text-4xl font-light uppercase text-[#acacac]">
                            {{ __('pages/public/index.9') }}
                        </span>
                    </div>
                </div>
                {{-- <div class="flex v gap mob"> --}}
                <div class="mb-12 flex flex-col gap-6">
                    {{-- <div class="flex h gap mob"> --}}
                    <div class="flex flex-col gap-6 xl:flex-row">
                        {{-- <div class="flex w50 h base wmob"> --}}
                        <div class="xl:-1/2 flex w-full flex-row items-start xl:items-baseline">
                            {{-- <div class="relative dark:text-white text-black text-3xl font-bold mr-2"> --}}
                            <div class="dark:text-white relative mr-8 text-4xl font-bold text-black">
                                {{-- <span class="blue-circle-offset"></spanz> --}}
                                <span class="dark:bg-[#0d6efd] absolute -left-4 top-[0.9rem] -z-10 mx-4 my-[0] h-9 w-9 rounded-[2rem] bg-[#c6d8ff] font-bold"></span>
                                1
                            </div>
                            {{-- <div class="relative text-black dark:text-white text-xl"x> --}}
                            <div class="dark:text-white relative text-xl font-light text-black">
                                {{ __('pages/public/index.10') }}
                            </div>
                        </div>
                        <div class="xl:-1/2 flex w-full flex-row items-start xl:items-baseline">
                            <div class="dark:text-white relative mr-8 text-4xl font-bold text-black">
                                <span class="dark:bg-[#0d6efd] absolute -left-4 top-[0.9rem] -z-10 mx-4 my-[0] h-9 w-9 rounded-[2rem] bg-[#c6d8ff] font-bold"></span>
                                2
                            </div>
                            <div class="dark:text-white relative text-xl font-light text-black">
                                {{ __('pages/public/index.11') }}
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-6 xl:flex-row">
                        <div class="xl:-1/2 flex w-full flex-row items-start xl:items-baseline">
                            <div class="dark:text-white relative mr-8 text-4xl font-bold text-black">
                                <span class="dark:bg-[#0d6efd] absolute -left-4 top-[0.9rem] -z-10 mx-4 my-[0] h-9 w-9 rounded-[2rem] bg-[#c6d8ff] font-bold"></span>
                                3
                            </div>
                            <div class="dark:text-white relative text-xl font-light text-black">
                                {{ __('pages/public/index.12') }}
                            </div>
                        </div>
                        <div class="xl:-1/2 flex w-full flex-row items-start xl:items-baseline">
                            <div class="dark:text-white relative mr-8 text-4xl font-bold text-black">
                                <span class="dark:bg-[#0d6efd] absolute -left-4 top-[0.9rem] -z-10 mx-4 my-[0] h-9 w-9 rounded-[2rem] bg-[#c6d8ff] font-bold"></span>
                                4
                            </div>
                            <div class="dark:text-white relative text-xl font-light text-black">
                                {{ __('pages/public/index.13') }}
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-6 xl:flex-row">
                        <div class="xl:-1/2 flex w-full flex-row items-start xl:items-baseline">
                            <div class="dark:text-white relative mr-8 text-4xl font-bold text-black">
                                <span class="dark:bg-[#0d6efd] absolute -left-4 top-[0.9rem] -z-10 mx-4 my-[0] h-9 w-9 rounded-[2rem] bg-[#c6d8ff] font-bold"></span>
                                5
                            </div>
                            <div class="dark:text-white relative text-xl font-light text-black">
                                {{ __('pages/public/index.14') }}
                            </div>
                        </div>
                        <div class="xl:-1/2 flex w-full flex-row items-start xl:items-baseline">
                            <div class="dark:text-white relative mr-8 text-4xl font-bold text-black">
                                <span class="dark:bg-[#0d6efd] absolute -left-4 top-[0.9rem] -z-10 mx-4 my-[0] h-9 w-9 rounded-[2rem] bg-[#c6d8ff] font-bold"></span>
                                6
                            </div>
                            <div class="dark:text-white relative text-xl font-light text-black">
                                {{ __('pages/public/index.15') }}
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-6 xl:flex-row">
                        <div class="xl:-1/2 flex w-full flex-row items-start xl:items-baseline">
                            <div class="dark:text-white relative mr-8 text-4xl font-bold text-black">
                                <span class="dark:bg-[#0d6efd] absolute -left-4 top-[0.9rem] -z-10 mx-4 my-[0] h-9 w-9 rounded-[2rem] bg-[#c6d8ff] font-bold"></span>
                                7
                            </div>
                            <div class="dark:text-white relative text-xl font-light text-black">
                                {{ __('pages/public/index.16') }}
                            </div>
                        </div>
                        <div class="xl:-1/2 flex w-full flex-row items-start xl:items-baseline">
                            <div class="dark:text-white relative mr-8 text-4xl font-bold text-black">
                                <span class="dark:bg-[#0d6efd] absolute -left-4 top-[0.9rem] -z-10 mx-4 my-[0] h-9 w-9 rounded-[2rem] bg-[#c6d8ff] font-bold"></span>
                                8
                            </div>
                            <div class="dark:text-white relative text-xl font-light text-black">
                                {{ __('pages/public/index.17') }}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="flex-row reverse_mob mt-2 flex gap-2"> --}}
                <div class="flex flex-col-reverse gap-8 xl:flex-row">
                    {{-- <div class="card card_blue card_v1 mob" id="custom-target-01"> --}}
                    <div
                        class="group/card peer relative flex w-full flex-col gap-4 rounded-3xl bg-[#0d6efd] p-8 [transition:all_0.225s_ease-in-out] [box-shadow:rgba(13,_110,_253,_0.4)_0px_5px,_rgba(13,_110,_253,_0.3)_0px_10px,_rgba(13,_110,_253,_0.2)_0px_15px,_rgba(13,_110,_253,_0.1)_0px_20px,_rgba(13,_110,_253,_0.05)_0px_25px] hover:scale-105 xl:w-1/2">
                        {{-- <div class="relative text-black dark:text-white text-2xl font-bold text-center">{{ __('Work within the club') }}</div> --}}
                        <div class="relative text-center text-2xl font-bold text-white">
                            {{ __('pages/public/index.18') }}
                        </div>
                        {{-- <div class="my-4 flex flex-col gap-4"> --}}
                        <div class="my-4 flex flex-col gap-4">
                            {{-- <div class="flex flex-row"> --}}
                            <div class="flex flex-row">
                                {{-- <div class="relative dark:text-white text-black b-text_text-nowrap">0 {{ __('rub') }}</div> --}}
                                <div class="text-nowrap relative font-light text-white">0 {{ __('pages/public/index.19') }}</div>
                                <span class="border-dot [border-bottom:0.1rem_dotted_#a9a9a9 mx-4 w-full"></span>
                                <div class="text-nowrap relative font-light text-white">{{ __('pages/public/index.20') }}</div>
                            </div>
                            {{-- <div class="flex-row justify-between flex"> --}}
                            <div class="flex flex-row justify-between">
                                <div class="text-nowrap relative font-light text-white">0 {{ __('pages/public/index.19') }}</div>
                                {{-- <span class="border-dot"></span> --}}
                                <span class="border-dot mx-4 w-full [border-bottom:0.1rem_dotted_#a9a9a9]"></span>
                                <div class="text-nowrap relative font-light text-white">{{ __('pages/public/index.21') }}</div>
                            </div>
                            <div class="flex flex-row justify-between">
                                <div class="text-nowrap relative font-light text-white">0 {{ __('pages/public/index.19') }}</div>
                                <span class="border-dot mx-4 w-full [border-bottom:0.1rem_dotted_#a9a9a9]"></span>
                                <div class="text-nowrap relative font-light text-white">{{ __('pages/public/index.22') }}</div>
                            </div>
                            <div class="flex flex-row justify-between">
                                <div class="text-nowrap relative font-light text-white">6 000 {{ __('pages/public/index.19') }}</div>
                                <span class="border-dot mx-4 w-full [border-bottom:0.1rem_dotted_#a9a9a9]"></span>
                                <div class="text-nowrap relative font-light text-white">{{ __('pages/public/index.23') }}</div>
                            </div>
                        </div>
                        <a class="group/button relative flex h-20 w-full cursor-pointer items-center justify-center rounded-2xl bg-[#ffffffe6] text-xl text-black no-underline [transition:all_0.225s_ease-in-out] hover:scale-105 hover:bg-[#ffffff]"
                            href="{{ route('auth.register') }}">
                            {{ __('pages/public/index.6') }}
                            <img class="absolute -bottom-7 -right-4 h-10 w-10 opacity-0 [transition:all_0.225s_ease-in-out] group-hover/button:-translate-x-4 group-hover/button:-translate-y-4 group-hover/button:opacity-100"
                                src="{{ URL::asset('assets/images/finger-click.png') }}" alt="finger-click">
                        </a>
                        <img src="{{ URL::asset('assets/images/min-png/thumb-up.png') }}"
                            class="absolute -left-14 -top-2 h-32 w-32 scale-x-[-1] opacity-0 [transition:all_0.225s_ease-in-out] [rotate:20deg] group-hover/card:opacity-100" alt="thumb-up"
                            loading="lazy">
                    </div>
                    {{-- <div class="card card_v1 card_v1-danger mob"> --}}
                    <div
                        class="relative flex w-full flex-col gap-4 rounded-3xl bg-[#e01f1933] p-8 [transition:all_0.225s_ease-in-out] peer-hover:!bg-[#e01f191a] peer-hover:[filter:brightness(1)_blur(0.5rem)] xl:w-1/2">
                        {{-- <div class="relative dark:text-white text-black text-2xl font-bold text-center">{{ __('Work Independently') }}</div> --}}
                        <div class="dark:text-white relative text-center text-2xl font-bold text-black">{{ __('pages/public/index.24') }}</div>
                        {{-- <div class="flex-col gap my-1 .flex"> --}}
                        <div class="my-4 flex flex-col gap-4">
                            {{-- <div class="flex-row flex"> --}}
                            <div class="flex flex-row justify-between">
                                <div class="dark:text-white text-nowrap relative font-medium text-black">50 000 {{ __('pages/public/index.19') }}</div>
                                <span class="border-dot mx-4 w-full [border-bottom:0.1rem_dotted_#a9a9a9]"></span>
                                <div class="dark:text-white text-nowrap relative font-medium text-black">{{ __('pages/public/index.20') }}</div>
                            </div>
                            <div class="flex flex-row justify-between">
                                <div class="dark:text-white text-nowrap relative font-medium text-black">90 000 {{ __('pages/public/index.19') }}</div>
                                <span class="border-dot mx-4 w-full [border-bottom:0.1rem_dotted_#a9a9a9]"></span>
                                <div class="dark:text-white text-nowrap relative font-medium text-black">{{ __('pages/public/index.21') }}</div>
                            </div>
                            <div class="flex flex-row justify-between">
                                <div class="dark:text-white text-nowrap relative font-medium text-black">3 500 000 {{ __('pages/public/index.19') }}</div>
                                <span class="border-dot mx-4 w-full [border-bottom:0.1rem_dotted_#a9a9a9]"></span>
                                <div class="dark:text-white text-nowrap relative font-medium text-black">{{ __('pages/public/index.22') }}</div>
                            </div>
                            <div class="flex flex-row justify-between">
                                <div class="dark:text-white text-nowrap relative font-medium text-black">30 000 {{ __('pages/public/index.19') }}</div>
                                <span class="border-dot mx-4 w-full [border-bottom:0.1rem_dotted_#a9a9a9]"></span>
                                <div class="dark:text-white text-nowrap relative font-medium text-black">{{ __('pages/public/index.25') }}</div>
                            </div>
                        </div>
                        {{-- <div class="relative dark:text-white text-black b-text_1.3em b-text_700">{{ __('Total: 3 670 000 rub.') }}</div> --}}
                        <div class="dark:text-white relative text-xl font-bold text-black">{{ __('pages/public/index.26') }}: 3 670 000 {{ __('pages/public/index.19') }}</div>
                        {{-- @svg('red-cross', 'b-img b-img_cross-thick') --}}
                        @svg('red-cross', 'absolute w-full h-full top-0 left-0 z-10 object-cover opacity-75')
                    </div>
                </div>
            </div>
        </section>






        {{-- <section class="b-section b-section_v2 b-section_visible pt-3"> --}}
        <section class="dark:bg-[#080808] relative -top-36 m-0 -mb-36 h-full w-full overflow-hidden rounded-[100%_100%_0_0_/_10rem_10rem_0_0] bg-white p-0 pt-36">
            <div class="min-w-96 max-w-96 relative z-10 m-auto w-full xl:max-w-[1200px]">

                <div class="relative mb-24 flex h-fit w-full flex-col">
                    {{-- <div class="h-text"> --}}
                    <div class="mb-12 flex h-fit flex-col items-center justify-center">
                        {{-- <div class="relative dark:text-white text-black b-text_uppercase b-text_fit b-text_2.5em font-bold text-center  _v3"> --}}
                        <div class="dark:text-white relative w-fit text-center text-[2.5rem] font-bold uppercase text-black">
                            {{ __('pages/public/index.27') }}
                        </div>
                    </div>
                    {{-- <div class="flex-row gap-8 mb-4 flex"> --}}
                    <div class="mb-8 flex flex-row gap-8">
                        {{-- <div class="relative dark:text-white text-black b-text_5em b-text_blue b-text_900 b-text_lh-1em">1</div> --}}
                        <div class="relative text-7xl font-black text-[#0d6efd]">1</div>
                        {{-- <div class="relative dark:text-white text-black b-text_2em b-text_600 font-light disable_br_mob fmob3 my-auto"> --}}
                        <div class="dark:text-white relative my-auto text-xl font-semibold text-black xl:text-3xl">
                            {{ __('pages/public/index.28') }}
                            <br />
                            {{ __('pages/public/index.29') }}
                        </div>
                    </div>
                    {{-- Swiper_v1 Klg4g --}}
                    <div class="relative">
                        {{-- <div class="m-0 swiper_v2 justify-between h mob gap-8 video-slider flex"> --}}
                        <div class="js-swiper-v1 m-0 flex flex-col justify-between !overflow-visible pb-8 xl:flex-row xl:!overflow-hidden">
                            {{-- <div class="swiper-wrapper flex flex-row"> --}}
                            <div class="swiper-wrapper flex w-full flex-row justify-between [transition:all_0.225s_ease-in-out]">
                                {{-- <div class="flex-col xl:items-start items-center w100 mob swiper-slide flex"> --}}
                                <div class="swiper-slide ![&.swiper-slide-active]:opacity-100 flex flex-col opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:!w-80 xl:items-center xl:opacity-100">
                                    {{-- <div class="flex-col min-h-24 mb-4 flex"> --}}
                                    <div class="min-h-24 mb-8 flex flex-col">
                                        <div
                                            class="dark:border-[#ffffff33] dark:bg-[linear-gradient(0.303turn,_#ffffff_1%,_#00000000_100%)] text-font-medium relative !mb-4 h-[fit-content] w-[fit-content] rounded-3xl border-[0.1rem] border-solid border-[#00000033] bg-[linear-gradient(0.303turn,_#000000_1%,_#00000033_100%)] bg-clip-text px-6 py-[0.6rem] uppercase text-transparent backdrop-blur-lg xl:m-0">
                                            {{ __('pages/public/index.31') }}
                                        </div>
                                        <div class="dark:text-[#acacac] relative font-light text-[#666666]">
                                            {{ __('pages/public/index.32') }}
                                        </div>
                                    </div>
                                    <div class="js-tg-circle relative mx-auto h-80 w-80 xl:m-0">
                                        <video loading="lazy" class="js-tg-video js-justify-arrows block h-full w-full overflow-hidden rounded-full object-cover" preload="none"
                                            poster="{{ URL::asset('assets/images/min-jpeg/block-1/1.jpeg') }}">
                                            <source src="{{ URL::asset('assets/videos/block-1/1.mp4') }}" type="video/mp4">
                                            {{ __('pages/public/index.33') }}
                                        </video>
                                        <div
                                            class="js-tg-sub-circle peer/xxx absolute left-1/2 top-1/2 z-20 h-[90%] w-[90%] -translate-x-1/2 -translate-y-1/2 cursor-pointer rounded-full [mask-image:radial-gradient(circle,_transparent_0%_68%,_black_68%)]">
                                        </div>
                                        <div
                                            class="absolute left-1/2 top-1/2 z-10 h-full w-full -translate-x-1/2 -translate-y-1/2 rounded-full bg-[#00000040] opacity-0 [transition:all_0.225s_ease-in-out]">
                                        </div>
                                        <div class="absolute left-1/2 top-1/2 z-[5] h-[90%] w-[90%] -translate-x-1/2 -translate-y-1/2 rounded-full [border:0.333rem_solid_#00000040]"></div>
                                        <img src="{{ URL::asset('assets/images/finger-click.png') }}"
                                            class="absolute bottom-0 right-0 z-10 h-10 w-10 opacity-0 [transition:all_0.225s_ease-in-out] [transform:_rotateZ(350deg)] peer-hover/xxx:-translate-x-4 peer-hover/xxx:-translate-y-8 peer-hover/xxx:opacity-100"
                                            alt="finger-click" loading="lazy">
                                    </div>
                                </div>
                                <div class="swiper-slide ![&.swiper-slide-active]:opacity-100 flex flex-col opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:!w-80 xl:items-center xl:opacity-100">
                                    <div class="min-h-24 mb-8 flex flex-col">
                                        <div
                                            class="dark:border-[#ffffff33] dark:bg-[linear-gradient(0.303turn,_#ffffff_1%,_#00000000_100%)] text-font-medium relative !mb-4 h-[fit-content] w-[fit-content] rounded-3xl border-[0.1rem] border-solid border-[#00000033] bg-[linear-gradient(0.303turn,_#000000_1%,_#00000033_100%)] bg-clip-text px-6 py-[0.6rem] uppercase text-transparent backdrop-blur-lg xl:m-0">
                                            {{ __('pages/public/index.34') }}
                                        </div>
                                        <div class="dark:text-[#acacac] relative font-light text-[#666666]">
                                            {{ __('pages/public/index.35') }}
                                        </div>
                                    </div>
                                    <div class="js-tg-circle relative mx-auto h-80 w-80 xl:m-0">
                                        <video loading="lazy" class="js-tg-video js-justify-arrows block h-full w-full overflow-hidden rounded-full object-cover" preload="none"
                                            poster="{{ URL::asset('assets/images/min-jpeg/block-1/2.jpeg') }}">
                                            <source src="{{ URL::asset('assets/videos/block-1/2.mp4') }}" type="video/mp4">
                                            {{ __('pages/public/index.33') }}
                                        </video>
                                        <div
                                            class="js-tg-sub-circle peer/xxx absolute left-1/2 top-1/2 z-20 h-[90%] w-[90%] -translate-x-1/2 -translate-y-1/2 cursor-pointer rounded-full [mask-image:radial-gradient(circle,_transparent_0%_68%,_black_68%)]">
                                        </div>
                                        <div
                                            class="absolute left-1/2 top-1/2 z-10 h-full w-full -translate-x-1/2 -translate-y-1/2 rounded-full bg-[#00000040] opacity-0 [transition:all_0.225s_ease-in-out]">
                                        </div>
                                        <div class="absolute left-1/2 top-1/2 z-[5] h-[90%] w-[90%] -translate-x-1/2 -translate-y-1/2 rounded-full [border:0.333rem_solid_#00000040]"></div>
                                        <img src="{{ URL::asset('assets/images/finger-click.png') }}"
                                            class="absolute bottom-0 right-0 z-10 h-10 w-10 opacity-0 [transition:all_0.225s_ease-in-out] [transform:_rotateZ(350deg)] peer-hover/xxx:-translate-x-4 peer-hover/xxx:-translate-y-8 peer-hover/xxx:opacity-100"
                                            alt="finger-click" loading="lazy">
                                    </div>
                                </div>
                                <div class="swiper-slide ![&.swiper-slide-active]:opacity-100 flex flex-col opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:!w-80 xl:items-center xl:opacity-100">
                                    <div class="min-h-24 mb-8 flex flex-col">
                                        <div
                                            class="dark:border-[#ffffff33] dark:bg-[linear-gradient(0.303turn,_#ffffff_1%,_#00000000_100%)] text-font-medium relative !mb-4 h-[fit-content] w-[fit-content] rounded-3xl border-[0.1rem] border-solid border-[#00000033] bg-[linear-gradient(0.303turn,_#000000_1%,_#00000033_100%)] bg-clip-text px-6 py-[0.6rem] uppercase text-transparent backdrop-blur-lg xl:m-0">
                                            {{ __('pages/public/index.36') }}
                                        </div>
                                        <div class="dark:text-[#acacac] relative font-light text-[#666666]">
                                            {{ __('pages/public/index.37') }}
                                        </div>
                                    </div>
                                    <div class="js-tg-circle relative mx-auto h-80 w-80 xl:m-0">
                                        <video loading="lazy" class="js-tg-video js-justify-arrows block h-full w-full overflow-hidden rounded-full object-cover" preload="none"
                                            poster="{{ URL::asset('assets/images/min-jpeg/block-1/3.jpeg') }}">
                                            <source src="{{ URL::asset('assets/videos/block-1/3.mp4') }}" type="video/mp4">
                                            {{ __('pages/public/index.33') }}
                                        </video>
                                        <div
                                            class="js-tg-sub-circle peer/xxx absolute left-1/2 top-1/2 z-20 h-[90%] w-[90%] -translate-x-1/2 -translate-y-1/2 cursor-pointer rounded-full [mask-image:radial-gradient(circle,_transparent_0%_68%,_black_68%)]">
                                        </div>
                                        <div
                                            class="absolute left-1/2 top-1/2 z-10 h-full w-full -translate-x-1/2 -translate-y-1/2 rounded-full bg-[#00000040] opacity-0 [transition:all_0.225s_ease-in-out]">
                                        </div>
                                        <div class="absolute left-1/2 top-1/2 z-[5] h-[90%] w-[90%] -translate-x-1/2 -translate-y-1/2 rounded-full [border:0.333rem_solid_#00000040]"></div>
                                        <img src="{{ URL::asset('assets/images/finger-click.png') }}"
                                            class="absolute bottom-0 right-0 z-10 h-10 w-10 opacity-0 [transition:all_0.225s_ease-in-out] [transform:_rotateZ(350deg)] peer-hover/xxx:-translate-x-4 peer-hover/xxx:-translate-y-8 peer-hover/xxx:opacity-100"
                                            alt="finger-click" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-arrow swiper-button-next !z-30"></div>
                            <div class="swiper-arrow swiper-button-prev !z-30"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    @svg('blue-column-blur', 'w-[50rem] h-auto absolute top-0 -left-[40rem] [rotate:20deg] -z-10')
                </div>

                <div class="relative mb-24 flex h-fit w-full flex-col">
                    {{-- hook Astod62_ds --}}
                    {{-- <img src="{{ URL::asset('assets/images/dan-4.png') }}" class="b-img b-img_v19" type="image/png" alt="dan-4" loading="lazy" id="responsive-img"> --}}
                    <img src="{{ URL::asset('assets/images/dan-4.png') }}"
                        class="absolute bottom-[58%] right-full z-0 h-auto w-[35rem] translate-x-[10%] translate-y-[5%] scale-150 invert-[.15] filter xl:bottom-0 xl:right-[45%] xl:translate-x-[112.5%] xl:translate-y-0 xl:scale-100"
                        type="image/png" alt="dan-4" loading="lazy" id="responsive-img">

                    {{-- <div class="w70 v mob gap flex"> --}}
                    <div class="flex w-full flex-col gap-4 xl:w-[70%]">

                        <div class="flex flex-row gap-8">
                            <div class="relative text-7xl font-black text-[#0d6efd]">2</div>
                            <div class="dark:text-white relative my-auto text-xl font-semibold text-black xl:text-3xl">
                                {{ __('pages/public/index.52') }}
                                <br class="hidden xl:block" />
                                {{ __('pages/public/index.53') }}
                            </div>
                        </div>

                        {{-- @svg('dotted-arrow', 'arrow-icon v1') --}}
                        @svg('dotted-arrow', 'absolute block top-[12%] right-full w-16 h-16 scale-x-[1] rotate-[15deg] xl:hidden')

                        <div class="dark:text-[#acacac] relative mb-8 w-full text-base font-light text-[#666666] xl:w-[90%] xl:text-xl">
                            {{ __('pages/public/index.54') }}
                        </div>


                        {{-- Swiper_v2 EDfa3d --}}
                        <div class="relative">
                            <div class="js-swiper-v2 m-0 flex flex-col justify-between !overflow-visible !px-4 pb-8 xl:flex-row xl:!overflow-hidden">
                                <div class="js-justify-arrows swiper-wrapper flex w-full flex-row justify-between [transition:all_0.225s_ease-in-out]">
                                    <div class="swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/2.JPG') }}" class="mx-auto block h-80 cursor-grab rounded-3xl object-cover"
                                            type="image/jpeg" alt="price-list-2">
                                    </div>
                                    <div class="swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/3.JPG') }}" class="mx-auto block h-80 cursor-grab rounded-3xl object-cover"
                                            type="image/jpeg" alt="price-list-3">
                                    </div>
                                    <div class="swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/4.JPG') }}" class="mx-auto block h-80 cursor-grab rounded-3xl object-cover"
                                            type="image/jpeg" alt="price-list-4">
                                    </div>
                                    <div class="swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/5.JPG') }}" class="mx-auto block h-80 cursor-grab rounded-3xl object-cover"
                                            type="image/jpeg" alt="price-list-5">
                                    </div>
                                    <div class="swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/6.JPG') }}" class="mx-auto block h-80 cursor-grab rounded-3xl object-cover"
                                            type="image/jpeg" alt="price-list-6">
                                    </div>
                                    <div class="swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/7.JPG') }}" class="mx-auto block h-80 cursor-grab rounded-3xl object-cover"
                                            type="image/jpeg" alt="price-list-7">
                                    </div>
                                    <div class="swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/8.JPG') }}" class="mx-auto block h-80 cursor-grab rounded-3xl object-cover"
                                            type="image/jpeg" alt="price-list-8">
                                    </div>
                                    <div class="swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/9.JPG') }}" class="mx-auto block h-80 cursor-grab rounded-3xl object-cover"
                                            type="image/jpeg" alt="price-list-9">
                                    </div>
                                    <div class="swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/10.JPG') }}" class="mx-auto block h-80 cursor-grab rounded-3xl object-cover"
                                            type="image/jpeg" alt="price-list-10">
                                    </div>
                                    <div class="swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/11.JPG') }}" class="mx-auto block h-80 cursor-grab rounded-3xl object-cover"
                                            type="image/jpeg" alt="price-list-11">
                                    </div>
                                    <div class="swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/12.JPG') }}" class="mx-auto block h-80 cursor-grab rounded-3xl object-cover"
                                            type="image/jpeg" alt="price-list-12">
                                    </div>
                                    <div class="swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/13.JPG') }}" class="mx-auto block h-80 cursor-grab rounded-3xl object-cover"
                                            type="image/jpeg" alt="price-list-13">
                                    </div>
                                    <div class="swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/14.JPG') }}" class="mx-auto block h-80 cursor-grab rounded-3xl object-cover"
                                            type="image/jpeg" alt="price-list-14">
                                    </div>
                                    <div class="swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/15.JPG') }}" class="mx-auto block h-80 cursor-grab rounded-3xl object-cover"
                                            type="image/jpeg" alt="price-list-15">
                                    </div>
                                    <div class="swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/16.JPG') }}" class="mx-auto block h-80 cursor-grab rounded-3xl object-cover"
                                            type="image/jpeg" alt="price-list-16">
                                    </div>
                                    <div class="swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/17.JPG') }}" class="mx-auto block h-80 cursor-grab rounded-3xl object-cover"
                                            type="image/jpeg" alt="price-list-17">
                                    </div>
                                    <div class="swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/1.JPG') }}" class="mx-auto block h-80 cursor-grab rounded-3xl object-cover"
                                            type="image/jpeg" alt="price-list-1">
                                    </div>
                                </div>
                                <div class="swiper-arrow swiper-button-next"></div>
                                <div class="swiper-arrow swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative flex h-fit w-full flex-col pb-24">
                    {{-- <div class="my-6 flex flex-col"> --}}
                    <div class="flex flex-col">
                        @svg('dynamic-premium.calender-dynamic-premium', 'absolute top-0 -right-[25%] xl:right-0 w-40 h-40 opacity-25 -mt-4')
                        {{-- <div class="w70 wmob mb-8 flex"> --}}
                        <div class="mb-12 flex w-full flex-col gap-4 xl:w-[70%]">
                            <div class="flex flex-row gap-8">
                                <div class="relative text-7xl font-black text-[#0d6efd]">3</div>

                                <div class="dark:text-white disable_br_mob fmob3 relative my-auto text-3xl font-semibold text-black">
                                    {{ __('pages/public/index.55') }}
                                    <br class="hidden xl:block" />
                                    {{ __('pages/public/index.56') }}
                                </div>
                            </div>
                            <div class="relative text-base font-light text-[#acacac] xl:text-xl">
                                {{ __('pages/public/index.38') }}
                            </div>
                        </div>
                        <div class="dark:bg-[#79797921] flex flex-col gap-8 rounded-3xl bg-[#e8e8e869] p-8">
                            <img id="js-banknote" src="{{ URL::asset('assets/images/min-png/money-sticker.png') }}"
                                class="absolute -left-14 -top-2 h-32 w-32 scale-x-[-1] opacity-20 [rotate:20deg] [transition:opacity_.225s_ease-in-out]" alt="banknote" loading="lazy">
                            {{-- Stopp09_er --}}
                            <div class="flex flex-col gap-8 xl:flex-row">
                                {{-- <div class="w50 v mob flex gap-8"> --}}
                                <div class="flex w-full flex-col gap-8 xl:w-1/2">
                                    <div class="flex flex-col">
                                        {{-- <div class="mob mb-8 flex flex-row justify-between gap-8"> --}}
                                        <div class="mb-8 flex flex-col justify-between gap-8 xl:flex-row">
                                            <div class="dark:text-white relative text-xl font-light text-black">
                                                {{ __('pages/public/index.39') }}
                                            </div>
                                            <div class="dark:text-white text-nowrap relative h-fit rounded-2xl text-xl text-black">
                                                <span id="subs-value"></span>
                                                {{ __('pages/public/index.40') }}
                                            </div>
                                        </div>
                                        <input type="range" min="1" max="1000" value="100" class="slider" id="subs">
                                    </div>

                                    <div class="flex flex-col">
                                        <div class="mb-8 flex flex-col justify-between gap-8 xl:flex-row">
                                            <div class="dark:text-white relative text-xl font-light text-black">
                                                {{ __('pages/public/index.41') }}
                                            </div>
                                            <div class="dark:text-white text-nowrap relative h-fit rounded-2xl text-xl text-black">
                                                <span id="add-price-value"></span>
                                                {{ __('pages/public/index.19') }}
                                            </div>
                                        </div>
                                        <input type="range" min="1000" max="5000" value="1000" class="slider" id="add-price">
                                    </div>
                                </div>
                                {{-- <div class="w50 v mob flex gap-8"> --}}
                                <div class="flex w-full flex-col gap-8 xl:w-1/2">
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('pages/public/index.42') }}
                                    </div>
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('pages/public/index.43') }}
                                        <span id="min-result"></span>
                                        {{ __('pages/public/index.19') }}
                                    </div>
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('pages/public/index.44') }}
                                        <span id="max-result"></span>
                                        {{ __('pages/public/index.19') }}
                                    </div>
                                </div>
                            </div>
                            <div class="relative text-[#666666]">
                                {{ __('pages/public/index.45') }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="noise"></div>
            <div class="dark:bg-[linear-gradient(180deg,_#00000000,_#000000)] absolute bottom-0 left-0 right-0 z-0 h-1/2 bg-[linear-gradient(180deg,_#00000000,_#FFFFFF)]"></div>
        </section>

        {{-- <section class="b-section pt-6"> --}}
        <section class="dark:bg-black relative m-0 h-full w-full overflow-visible bg-white p-0 pt-24">
            {{-- @svg('ui-set.hand-over', 'ui-hand-over-icon') --}}
            @svg('ui-set.hand-over', '-top-[10%] left-full -translate-x-1/2 w-[50rem] h-[50rem] absolute')
            {{-- <img class="ui-hand-over-icon" src="{{ URL::asset('assets/images/min-png/hand-over.png') }}" alt="hand-over"> --}}
            <img class="absolute -top-[10%] left-full h-[50rem] w-[50rem] -translate-x-1/2" src="{{ URL::asset('assets/images/min-png/hand-over.png') }}" alt="hand-over">
            {{-- <div class="ui-orange-blur"></div> --}}
            <div class="absolute left-full top-0 h-[25rem] w-[25rem] -translate-x-1/2 rounded-[100%] bg-[#E96035] blur-[10rem] filter"></div>
            {{-- <img class="ui-thorus-knot-icon" src="{{ URL::asset('assets/images/min-png/thorus-knot.png') }}" alt="thorus-knot"> --}}
            <img class="absolute bottom-[20%] right-[20%] z-10 h-[30rem] w-[30rem] translate-x-3/4 xl:bottom-[-20%] xl:right-full" src="{{ URL::asset('assets/images/min-png/thorus-knot.png') }}"
                alt="thorus-knot">
            {{-- <div class="ui-green-blur"></div> --}}
            <div class="absolute bottom-[22%] right-0 z-10 h-80 w-[30rem] translate-x-[65%] rounded-[100%] bg-[#00ff75] blur-[10rem] filter xl:-bottom-[10%] xl:right-full xl:translate-x-[45%]"></div>
            {{-- <img class="ui-cube-icon" src="{{ URL::asset('assets/images/min-png/cube.png') }}" alt="cube"> --}}
            <img class="absolute right-full top-[30%] h-[30rem] w-[30rem] translate-x-[45%] xl:-top-[10%]" src="{{ URL::asset('assets/images/min-png/cube.png') }}" alt="cube">
            {{-- <div class="ui-purple-blur"></div> --}}
            <div class="absolute right-full top-[30%] h-[30rem] w-[30rem] translate-x-[45%] rounded-[100%] bg-[#7B2B90D9] blur-[10rem] filter xl:-top-[10%]"></div>
            <div class="min-w-96 max-w-96 relative z-10 m-auto w-full xl:max-w-[1200px]">
                <div class="flex flex-col">
                    <div class="mb-4 flex h-fit flex-col items-center justify-center">
                        <div class="dark:text-white relative mb-4 w-fit text-center text-4xl font-bold uppercase text-black xl:text-[2.5rem]">
                            {{ __('pages/public/index.57') }}
                            {{-- before:content-[''] before:absolute before:top-2/4 before:right-0 before:bg-[#6fa9ff] before:w-full before:h-4 before:[rotate:1deg] before:block before:p-[0.3rem] before:translate-x-[2%] before:-translate-y-[58%] --}}
                            {{-- <span class="nowrap blue-marker trand relative">ТРЭНД</span> --}}
                            <span
                                class="!-z-[1] text-nowrap dark:before:bg-[#0d6efd] relative uppercase before:absolute before:right-0 before:top-2/4 before:-z-10 before:block before:h-10 before:w-full before:-translate-x-[4%] before:-translate-y-1/2 before:bg-[#6fa9ff] before:p-[0.3rem] before:content-[''] before:[rotate:1deg]">
                                {{ __('pages/public/index.58') }}
                            </span>
                            {{ __('pages/public/index.59') }}
                        </div>
                    </div>
                    <div class="dark:text-white relative mb-24 text-center text-base font-light text-black xl:text-2xl">
                        {{ __('pages/public/index.60') }}
                        <br class="hidden xl:block" />
                        {{ __('pages/public/index.61') }}
                    </div>
                    {{-- <div class="w100 flex flex-col gap-8"> --}}
                    <div class="flex w-full flex-col gap-8">
                        {{-- <div class="gap gap-8 w100 mob flex flex-row"> --}}
                        <div class="flex w-full flex-col gap-8 xl:flex-row">
                            <div class="relative w-full xl:w-1/3">
                                <div class="dark:bg-[#3A3A3A66] relative rounded-[1.75rem] bg-[#e8e8e869] px-16 py-8 backdrop-blur-[0.25rem] backdrop-filter">
                                    <div class="flex h-full w-full flex-col">
                                        <div class="mb-4">
                                            <div class="dark:text-white relative text-center text-3xl font-bold text-black xl:text-left">
                                                {{ __('pages/public/index.62') }}
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="relative text-center text-xl font-light text-[#acacac] xl:text-left">
                                                {{ __('pages/public/index.63') }}
                                            </div>
                                        </div>
                                        <button
                                            class="js-modal-button dark:border-white relative flex h-12 w-full items-center justify-center rounded-full border-[0.1rem] border-[solid] border-black text-[1rem]">
                                            <div class="dark:text-white js-modal-button relative text-xl text-black">
                                                {{ __('pages/public/index.64') }}
                                            </div>
                                        </button>
                                    </div>
                                </div>
                                @svg('ui-set.notes', 'right-0 bottom-full translate-y-[70%] absolute w-[4.75rem] h-[4.75rem]')
                                @svg('ui-number-set.1', 'absolute h-[7.25rem] w-[7.25rem] bottom-full translate-x-[65%] translate-y-[60%] right-full -z-10 text-[#0d6efd]')
                            </div>
                            <div class="relative w-full xl:w-1/3">
                                <div class="dark:bg-[#3A3A3A66] relative rounded-[1.75rem] bg-[#e8e8e869] px-16 py-8 backdrop-blur-[0.25rem] backdrop-filter">
                                    <div class="flex h-full w-full flex-col">
                                        <div class="mb-4">
                                            <div class="dark:text-white relative text-center text-3xl font-bold text-black xl:text-left">{{ __('pages/public/index.65') }}</div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="relative text-center text-xl font-light text-[#acacac] xl:text-left">
                                                {{ __('pages/public/index.66') }}
                                            </div>
                                        </div>
                                        <button
                                            class="js-modal-button dark:border-white relative flex h-12 w-full items-center justify-center rounded-full border-[0.1rem] border-[solid] border-black text-[1rem]">
                                            <div class="dark:text-white js-modal-button relative text-xl text-black">
                                                {{ __('pages/public/index.64') }}
                                            </div>
                                        </button>
                                    </div>
                                </div>
                                @svg('ui-set.chat', 'right-0 bottom-full translate-y-[70%] absolute w-[4.75rem] h-[4.75rem]')
                                @svg('ui-number-set.2', 'absolute h-[7.25rem] w-[7.25rem] bottom-full translate-x-[65%] translate-y-[60%] right-full -z-10 text-[#0d6efd]')
                            </div>
                            <div class="relative w-full xl:w-1/3">
                                <div class="dark:bg-[#3A3A3A66] relative rounded-[1.75rem] bg-[#e8e8e869] px-16 py-8 backdrop-blur-[0.25rem] backdrop-filter">
                                    <div class="flex h-full w-full flex-col">
                                        <div class="mb-4">
                                            <div class="dark:text-white relative text-center text-3xl font-bold text-black xl:text-left">
                                                {{ __('pages/public/index.67') }}
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="relative text-center text-xl font-light text-[#acacac] xl:text-left">
                                                {{ __('pages/public/index.68') }}
                                            </div>
                                        </div>
                                        <button
                                            class="js-modal-button dark:border-white relative flex h-12 w-full items-center justify-center rounded-full border-[0.1rem] border-[solid] border-black text-[1rem]">
                                            <div class="dark:text-white js-modal-button relative text-xl text-black">
                                                {{ __('pages/public/index.64') }}
                                            </div>
                                        </button>
                                    </div>
                                </div>
                                @svg('ui-set.play', 'right-0 bottom-full translate-y-[70%] absolute w-[4.75rem] h-[4.75rem]')
                                @svg('ui-number-set.3', 'absolute h-[7.25rem] w-[7.25rem] bottom-full translate-x-[65%] translate-y-[60%] right-full -z-10 text-[#0d6efd]')
                            </div>
                        </div>
                        <div class="flex w-full flex-col gap-8 xl:flex-row">
                            <div class="relative w-full xl:w-1/3">
                                <div class="dark:bg-[#3A3A3A66] relative rounded-[1.75rem] bg-[#e8e8e869] px-16 py-8 backdrop-blur-[0.25rem] backdrop-filter">
                                    <div class="flex h-full w-full flex-col">
                                        <div class="mb-4">
                                            <div class="dark:text-white relative text-center text-3xl font-bold text-black xl:text-left">
                                                {{ __('pages/public/index.69') }}
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="relative text-center text-xl font-light text-[#acacac] xl:text-left">
                                                {{ __('pages/public/index.70') }}
                                            </div>
                                        </div>
                                        <button
                                            class="js-modal-button dark:border-white relative flex h-12 w-full items-center justify-center rounded-full border-[0.1rem] border-[solid] border-black text-[1rem]">
                                            <div class="dark:text-white js-modal-button relative text-xl text-black">
                                                {{ __('pages/public/index.64') }}
                                            </div>
                                        </button>
                                    </div>
                                </div>
                                @svg('ui-set.paper', 'right-0 bottom-full translate-y-[70%] absolute w-[4.75rem] h-[4.75rem]')
                                @svg('ui-number-set.4', 'absolute h-[7.25rem] w-[7.25rem] bottom-full translate-x-[65%] translate-y-[60%] right-full -z-10 text-[#0d6efd]')
                            </div>
                            <div class="relative w-full xl:w-1/3">
                                <div class="dark:bg-[#3A3A3A66] relative rounded-[1.75rem] bg-[#e8e8e869] px-16 py-8 backdrop-blur-[0.25rem] backdrop-filter">
                                    <div class="flex h-full w-full flex-col">
                                        <div class="mb-4">
                                            <div class="dark:text-white relative text-center text-3xl font-bold text-black xl:text-left">
                                                {{ __('pages/public/index.71') }}
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="relative text-center text-xl font-light text-[#acacac] xl:text-left">
                                                {{ __('pages/public/index.72') }}
                                            </div>
                                        </div>
                                        <button
                                            class="js-modal-button dark:border-white relative flex h-12 w-full items-center justify-center rounded-full border-[0.1rem] border-[solid] border-black text-[1rem]">
                                            <div class="dark:text-white js-modal-button relative text-xl text-black">
                                                {{ __('pages/public/index.64') }}
                                            </div>
                                        </button>
                                    </div>
                                </div>
                                @svg('ui-set.show', 'right-0 bottom-full translate-y-[70%] absolute w-[4.75rem] h-[4.75rem]')
                                @svg('ui-number-set.5', 'absolute h-[7.25rem] w-[7.25rem] bottom-full translate-x-[65%] translate-y-[60%] right-full -z-10 text-[#0d6efd]')
                            </div>
                            <div class="relative w-full xl:w-1/3">
                                <div class="dark:bg-[#3A3A3A66] relative rounded-[1.75rem] bg-[#e8e8e869] px-16 py-8 backdrop-blur-[0.25rem] backdrop-filter">
                                    <div class="flex h-full w-full flex-col">
                                        <div class="mb-4">
                                            <div class="dark:text-white relative text-center text-3xl font-bold text-black xl:text-left">Выгода</div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="relative text-center text-xl font-light text-[#acacac] xl:text-left">
                                                {{ __('pages/public/index.73') }}
                                                <br class="hidden xl:block" />
                                                {{ __('pages/public/index.74') }}
                                            </div>
                                        </div>
                                        <button
                                            class="js-modal-button dark:border-white relative flex h-12 w-full items-center justify-center rounded-full border-[0.1rem] border-[solid] border-black text-[1rem]">
                                            <div class="dark:text-white js-modal-button relative text-xl text-black">
                                                {{ __('pages/public/index.64') }}
                                            </div>
                                        </button>
                                    </div>
                                </div>
                                @svg('ui-set.discount', 'right-0 bottom-full translate-y-[70%] absolute w-[4.75rem] h-[4.75rem]')
                                @svg('ui-number-set.6', 'absolute h-[7.25rem] w-[7.25rem] bottom-full translate-x-[65%] translate-y-[60%] right-full -z-10 text-[#0d6efd]')
                            </div>
                        </div>
                        <div class="flex w-full flex-col gap-8 xl:flex-row">
                            <div class="relative w-full xl:w-[calc(33.33333%-1rem)]">
                                <div class="dark:bg-[#3A3A3A66] relative rounded-[1.75rem] bg-[#e8e8e869] px-16 py-8 backdrop-blur-[0.25rem] backdrop-filter">
                                    <div class="mb-4">
                                        <div class="dark:text-white relative text-center text-3xl font-bold text-black xl:text-left">
                                            {{ __('pages/public/index.75') }}
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="relative text-center text-xl font-light text-[#acacac] xl:text-left">
                                            {{ __('pages/public/index.76') }}
                                        </div>
                                    </div>
                                    <button
                                        class="js-modal-button dark:border-white relative flex h-12 w-full items-center justify-center rounded-full border-[0.1rem] border-[solid] border-black text-[1rem]">
                                        <div class="dark:text-white js-modal-button relative text-xl text-black">
                                            {{ __('pages/public/index.64') }}
                                        </div>
                                    </button>
                                </div>
                                @svg('ui-set.tick', 'right-0 bottom-full translate-y-[70%] absolute w-[4.75rem] h-[4.75rem]')
                                @svg('ui-number-set.7', 'absolute h-[7.25rem] w-[7.25rem] bottom-full translate-x-[65%] translate-y-[60%] right-full -z-10 text-[#0d6efd]')
                            </div>
                            <div class="relative w-full xl:w-[calc(33.33333%-1rem)]">
                                <div class="dark:bg-[#3A3A3A66] relative rounded-[1.75rem] bg-[#e8e8e869] px-16 py-8 backdrop-blur-[0.25rem] backdrop-filter">
                                    <div class="flex h-full w-full flex-col">
                                        <div class="mb-4">
                                            <div class="dark:text-white relative text-center text-3xl font-bold text-black xl:text-left">
                                                {{ __('pages/public/index.77') }}
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="relative text-center text-xl font-light text-[#acacac] xl:text-left">
                                                {{ __('pages/public/index.78') }}
                                            </div>
                                        </div>
                                        <button
                                            class="js-modal-button dark:border-white relative flex h-12 w-full items-center justify-center rounded-full border-[0.1rem] border-[solid] border-black text-[1rem]">
                                            <div class="dark:text-white js-modal-button relative text-xl text-black">
                                                {{ __('pages/public/index.64') }}
                                            </div>
                                        </button>
                                    </div>
                                </div>
                                @svg('ui-set.stars', 'right-0 bottom-full translate-y-[70%] absolute w-[4.75rem] h-[4.75rem]')
                                @svg('ui-number-set.8', 'absolute h-[7.25rem] w-[7.25rem] bottom-full translate-x-[65%] translate-y-[60%] right-full -z-10 text-[#0d6efd]')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>






        {{-- <section class="b-section b-section_visible pt-6"> --}}
        <section class="dark:bg-black relative m-0 h-full w-full bg-white p-0 pt-24">
            <div class="min-w-96 max-w-96 relative z-10 m-auto w-full xl:max-w-[1200px]">
                <div class="flex w-full flex-col">
                    <div class="mb-12 flex h-fit flex-col items-center justify-center">
                        <div class="dark:text-white relative mb-4 w-fit text-center text-4xl font-bold uppercase text-black xl:text-[2.5rem]">
                            <span
                                class="!-z-[1] text-nowrap dark:before:bg-[#0d6efd] relative uppercase before:absolute before:right-0 before:top-2/4 before:-z-10 before:block before:h-10 before:w-full before:-translate-x-[4%] before:-translate-y-1/2 before:bg-[#6fa9ff] before:p-[0.3rem] before:content-[''] before:[rotate:1deg]">{!! __('Content') !!}</span>
                            {!! __('for your store') !!}
                        </div>
                    </div>
                    {{-- <div class="gap_4 gap_1_mob mob mb-1 flex flex-row"> --}}
                    <div class="mb-4 flex flex-col gap-4 !px-4 xl:flex-row xl:gap-16">
                        {{-- <div class="w50 mob block"> --}}
                        <div class="flex w-full flex-col xl:w-1/2">
                            <div class="min-h-24 mx-auto mb-4 flex flex-col xl:w-80">
                                <div class="dark:text-white relative mb-2 text-2xl font-semibold text-black">
                                    {!! __('Edited photo') !!}
                                </div>
                                <div class="relative font-light text-[#acacac]">
                                    {!! __('We organize photo sessions with popular sneakers to show how they look on feet.') !!}
                                </div>
                            </div>
                        </div>
                        <div class="flex w-full flex-col xl:w-1/2">
                            <div class="min-h-24 mx-auto mb-4 flex flex-col xl:w-80">
                                <div class="dark:text-white relative mb-2 text-2xl font-semibold text-black">
                                    {!! __('Behind the Scenes') !!}
                                </div>
                                <div class="relative font-light text-[#acacac]">
                                    {!! __('To make sure the content is not taken from the internet, we document the shooting process "behind the scenes" and publish the files in the Start Club.') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Swiper_v5 hook klotMo33_nE --}}
                <div class="relative">
                    <div class="js-swiper-v5 m-0 flex flex-col justify-between !overflow-visible !px-4 pb-8 xl:flex-row xl:!overflow-hidden">
                        <div class="js-justify-arrows swiper-wrapper flex w-full flex-row justify-between [transition:all_0.225s_ease-in-out]">
                            <div class="!flex !w-full !flex-row gap-4 xl:gap-16 swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                <div class="flex w-1/2 flex-col">
                                    <img src="{{ URL::asset('assets/images/min-jpeg/edited/edited_1.jpeg') }}"
                                        class="relative mx-auto h-72 w-full rounded-2xl border-[none] object-cover xl:h-96 xl:w-80" type="image/jpeg" alt="sneak-edition-2" loading="lazy">
                                </div>
                                <div class="flex w-1/2 flex-col">
                                    <video class="relative mx-auto h-72 w-full rounded-2xl border-[none] object-cover xl:h-96 xl:w-80" muted controls>
                                        <source src="{{ URL::asset('assets/videos/behind-the-scene-portview/1.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                            <div class="!flex !w-full !flex-row gap-4 xl:gap-16 swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                <div class="flex w-1/2 flex-col">
                                    <img src="{{ URL::asset('assets/images/min-jpeg/edited/edited_2.jpeg') }}"
                                        class="relative mx-auto h-72 w-full rounded-2xl border-[none] object-cover xl:h-96 xl:w-80" type="image/jpeg" alt="sneak-edition-2" loading="lazy">
                                </div>
                                <div class="flex w-1/2 flex-col">
                                    <video class="relative mx-auto h-72 w-full rounded-2xl border-[none] object-cover xl:h-96 xl:w-80" muted controls>
                                        <source src="{{ URL::asset('assets/videos/behind-the-scene-portview/2.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                            <div class="!flex !w-full !flex-row gap-4 xl:gap-16 swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                <div class="flex w-1/2 flex-col">
                                    <img src="{{ URL::asset('assets/images/min-jpeg/edited/edited_3.jpeg') }}"
                                        class="relative mx-auto h-72 w-full rounded-2xl border-[none] object-cover xl:h-96 xl:w-80" type="image/jpeg" alt="sneak-edition-2" loading="lazy">
                                </div>
                                <div class="flex w-1/2 flex-col">
                                    <video class="relative mx-auto h-72 w-full rounded-2xl border-[none] object-cover xl:h-96 xl:w-80" muted controls>
                                        <source src="{{ URL::asset('assets/videos/behind-the-scene-portview/3.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-arrow swiper-button-next"></div>
                        <div class="swiper-arrow swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>






        {{-- <section class="b-section b-section_visible pt-6"> --}}
        <section class="dark:bg-black relative m-0 h-full w-full bg-white p-0 pt-24">
            {{-- hook Doors72_da --}}
            {{-- <div id="gradient-effect_bf2" class="container_v2 mob container"> --}}
            <div id="js-gradient-effect" class="min-w-96 max-w-96 relative z-10 m-auto w-full xl:max-w-[1200px]">
                {{-- <div class="fade-in fade-in_v1 top -z-1"></div> --}}
                <div class="dark:bg-[linear-gradient(180deg,_#000000,_#00000000)] absolute left-0 right-0 top-0 !-z-[1] h-1/2 bg-[linear-gradient(180deg,_#FFFFFF,_#00000000)]"></div>
                {{-- <div class="vignette vignette_v1 -z-2"></div> --}}
                <div
                    class="dark:before:[box-shadow:inset_5px_12px_90px_20px_#000000,_inset_-5px_-12px_90px_20px_#000000,_inset_10px_-5px_90px_20px_#000000,_inset_-20px_18px_90px_20px_#000000] before:absolute before:left-0 before:top-0 before:!-z-[2] before:block before:h-full before:w-full before:content-normal before:[background:_linear-gradient(180deg,_#000_15%,_transparent_25%)] before:[box-shadow:inset_5px_12px_90px_20px_#FFFFFF,_inset_-5px_-12px_90px_20px_#FFFFFF,_inset_10px_-5px_90px_20px_#FFFFFF,_inset_-20px_18px_90px_20px_#FFFFFF] xl:before:[background:_none]">
                </div>
                {{-- <div class="grad-block grad-block_v1 -z-3"> --}}
                <div class="dark:bg-black absolute bottom-0 left-0 right-0 top-0 !-z-[3] h-full w-full overflow-hidden bg-white opacity-100">
                    {{-- <div id="js-follow-gradient" class="follow-gradient"> --}}
                    <div id="js-follow-gradient"
                        class="relative inline-block h-full w-full bg-[radial-gradient(circle_calc(20rem_/_2)_at_calc(100%/2),_#FF4141_0%,_#FFC850_25%,_#00B4FF_50%,_#501EB4_70%,_#220c4d_100%)] bg-clip-text bg-[0rem_15rem] bg-no-repeat text-[1rem] font-bold leading-none text-transparent duration-[225ms] ease-out [background-size:100%_100%] [mask-image:radial-gradient(20rem_circle,_black_25%,_transparent_75%)] [mask-position:0rem_15rem] [mask-repeat:no-repeat] [transition-property:background-position,_mask-position]">
                        <div class="js-gradient-text"></div>
                    </div>
                </div>

                <div class="flex flex-col">
                    {{-- @svg('dynamic-premium.rocket-dynamic-premium', 'b-img b-img_rocket') --}}
                    @svg('dynamic-premium.rocket-dynamic-premium', 'absolute bottom-0 xl:right-[unset] right-[70%] xl:left-40 w-80 h-80 scale-x-[-1]')
                    @svg('dynamic-premium.axe-dynamic-premium', 'absolute bottom-8 left-full xl:right-[unset] right-[70%] xl:-translate-x-[160%] w-72 h-72')
                    <div class="mb-12 flex h-fit flex-col items-center justify-center">
                        <div class="dark:text-white relative mb-4 w-fit text-center text-4xl font-bold uppercase text-black xl:text-[2.5rem]">
                            {{ __('pages/public/index.46') }}
                            <span
                                class="!-z-[1] text-nowrap dark:before:bg-[#0d6efd] relative uppercase before:absolute before:right-0 before:top-2/4 before:-z-10 before:block before:h-10 before:w-full before:-translate-y-1/2 before:bg-[#6fa9ff] before:p-[0.3rem] before:content-[''] before:[rotate:1deg]">
                                {{ __('pages/public/index.47') }}
                            </span>
                        </div>
                    </div>
                    {{-- <div class="fit w35 mob m-auto flex"> --}}
                    <div class="m-auto flex w-fit flex-col xl:w-[35%]">
                        {{-- <div class="card align flex"> --}}
                        <div class="dark:bg-[#79797921] relative flex flex-col items-center gap-4 rounded-3xl bg-[#e8e8e84a] p-8 backdrop-blur-[6px] backdrop-filter">
                            {{-- <div class="fit gap v mb-8 flex"> --}}
                            <div class="mb-8 flex w-fit flex-col gap-4">
                                <div class="flex flex-row items-center gap-4">
                                    @svg('check-circle', 'text-[#049d88]')
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('pages/public/index.48') }}
                                    </div>
                                </div>
                                <div class="flex flex-row items-center gap-4">
                                    @svg('check-circle', 'text-[#049d88]')
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('pages/public/index.49') }}
                                    </div>
                                </div>
                                <div class="flex flex-row items-center gap-4">
                                    @svg('check-circle', 'text-[#049d88]')
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('pages/public/index.50') }}
                                    </div>
                                </div>
                                <div class="flex flex-row items-center gap-4">
                                    @svg('check-circle', 'text-[#049d88]')
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('pages/public/index.51') }}
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <div class="dark:text-white relative mb-4 text-center text-xl text-black">
                                        {!! __('Monthly subscription to<br /> "START CLUB"') !!}
                                    </div>
                                    <div class="dark:text-white relative mb-8 text-center text-[4rem] font-bold text-black">{{ __('6,000 ₽') }}</div>
                                    {{-- <a class="go-button v2 mb-4" href="{{ route('auth.register') }}">{{ __('Ready to start') }}</a> --}}
                                    <a class="mb-4 group relative flex h-20 w-full cursor-pointer items-center justify-center rounded-2xl bg-[#0d6efde6] text-xl text-white no-underline [transition:all_0.225s_ease-in-out] hover:scale-105 hover:bg-[#0d6efd]"
                                        href="{{ route('auth.register') }}">
                                        {{ __('Ready to start') }}
                                        <img class="absolute -bottom-7 -right-4 h-10 w-10 opacity-0 [transition:all_0.225s_ease-in-out] group-hover:-translate-x-4 group-hover:-translate-y-4 group-hover:opacity-100"
                                            src="{{ URL::asset('assets/images/finger-click.png') }}" alt="finger-click">
                                    </a>
                                    <div class="relative text-center text-base text-[#acacac]">
                                        {!! __('By paying you accept the terms of the') !!}
                                        <br />
                                        <a href="{{ route('public.documents') }}">{{ __('offer contract') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>





        {{-- <section class="b-section b-section_visible pt-6"> --}}
        <section class="dark:bg-black relative m-0 h-full w-full bg-white p-0 pt-24">
            <div class="min-w-96 max-w-96 relative z-10 m-auto w-full xl:max-w-[1200px]">
                <div class="flex flex-col">
                    <div class="mb-12 flex h-fit flex-col items-center justify-center">
                        <div class="dark:text-white relative mb-4 w-fit text-center text-4xl font-bold uppercase text-black xl:text-[2.5rem]">
                            {{ __('Sold') }}
                            <span
                                class="!-z-[1] text-nowrap dark:before:bg-[#0d6efd] relative uppercase before:absolute before:right-0 before:top-2/4 before:-z-10 before:block before:h-10 before:w-full before:-translate-y-1/2 before:bg-[#6fa9ff] before:p-[0.3rem] before:content-[''] before:[rotate:1deg]">
                                {{ __('~107 thousand') }}
                            </span>
                            {{ __('pairs of sneakers') }}
                        </div>
                    </div>
                    <div class="dark:text-white relative mb-24 text-center text-base font-light text-black xl:text-2xl">
                        {{ __('And here is what customers say about our product') }}
                    </div>

                    {{-- Swiper_v3 StWoom3s --}}
                    <div class="relative">
                        <div class="js-swiper-v3 m-0 flex flex-col justify-between !overflow-visible !px-4 pb-8 xl:flex-row xl:!overflow-hidden">
                            <div class="js-justify-arrows swiper-wrapper flex w-full flex-row justify-between [transition:all_0.225s_ease-in-out]">
                                <div class="w-full swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                    <video class="object-cover h-[30rem] w-72 border-none rounded-2xl block mx-auto" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_1.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_1.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="w-full swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                    <video class="object-cover h-[30rem] w-72 border-none rounded-2xl block mx-auto" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_2.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_2.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="w-full swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                    <video class="object-cover h-[30rem] w-72 border-none rounded-2xl block mx-auto" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_3.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_3.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="w-full swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                    <video class="object-cover h-[30rem] w-72 border-none rounded-2xl block mx-auto" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_4.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_4.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="w-full swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                    <video class="object-cover h-[30rem] w-72 border-none rounded-2xl block mx-auto" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_5.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_5.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="w-full swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                    <video class="object-cover h-[30rem] w-72 border-none rounded-2xl block mx-auto" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_6.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_6.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="w-full swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                    <video class="object-cover h-[30rem] w-72 border-none rounded-2xl block mx-auto" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_7.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_7.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="w-full swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                    <video class="object-cover h-[30rem] w-72 border-none rounded-2xl block mx-auto" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_8.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_8.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="w-full swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                    <video class="object-cover h-[30rem] w-72 border-none rounded-2xl block mx-auto" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_9.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_9.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="w-full swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                    <video class="object-cover h-[30rem] w-72 border-none rounded-2xl block mx-auto" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_10.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_10.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="w-full swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                    <video class="object-cover h-[30rem] w-72 border-none rounded-2xl block mx-auto" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_11.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_11.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="w-full swiper-slide ![&.swiper-slide-active]:opacity-100 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:opacity-100">
                                    <video class="object-cover h-[30rem] w-72 border-none rounded-2xl block mx-auto" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_12.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_12.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                            <div class="swiper-arrow swiper-button-next"></div>
                            <div class="swiper-arrow swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>







        {{-- <section class="b-section b-section_visible pt-6"> --}}
            <section class="dark:bg-black relative m-0 h-full w-full bg-white p-0 pt-24">
            {{-- <div class="fade-in fade-in_v1 top"></div> --}}
            <div class="dark:bg-[linear-gradient(180deg,_#000000,_#00000000)] absolute left-0 right-0 top-0 !-z-[1] h-1/2 bg-[linear-gradient(180deg,_#FFFFFF,_#00000000)]"></div>
            {{-- @svg('nike-pair', 'b-img b-img_v7') --}}
            @svg('nike-pair', 'top-0 right-0 absolute w-[30em] h-[30em] dark:text-[#ffffff0D] text-[#0000000D]')
            <div class="min-w-96 max-w-96 relative z-10 m-auto w-full xl:max-w-[1200px]">
                <div class="mb-12 flex h-fit flex-col items-center justify-center">
                    <div class="dark:text-white relative mb-4 w-fit text-center text-4xl font-bold uppercase text-black xl:text-[2.5rem]">
                        <span
                            class="!-z-[1] text-nowrap dark:before:bg-[#0d6efd] relative uppercase before:absolute before:right-0 before:top-2/4 before:-z-10 before:block before:h-10 before:w-full before:-translate-y-1/2 before:bg-[#6fa9ff] before:p-[0.3rem] before:content-[''] before:[rotate:1deg]">
                            {{ __('Work proccess of') }}
                        </span>
                        {{ __('Club Start') }}
                    </div>
                </div>
                <div class="dark:text-white relative mb-24 text-center text-base font-light text-black xl:text-2xl">
                    {!! __('Just 3 steps and you own your personal<br>online sneaker store.') !!}
                </div>

                <div class="js-accordion-v1 w-full mb-5">
                    <div class="js-accordion-item rounded-2xl p-6 mb-4 bg-[#00000008] backdrop-filter backdrop-blur-[2rem] relative noise-before">
                        <button class="js-accordion-button group/button peer/button flex flex-row gap-4 w-full expanded">
                            <div class="align flex flex-row">
                                <span class="js-accordion-text dark:text-white b-text_grey_light-mode b-text_text-nowrap relative text-2xl font-light text-[#acacac]">{{ __('Step 1') }}</span>
                                <span class="dark:text-white ml-4 relative text-left text-2xl xl:text-3xl font-semibold text-black">{{ __('Sneakers at cost from 1 pair') }}</span>
                            </div>
                            <span class="group-[.expanded]/button:after:w-0 group-hover/button:before:bg-[#0d6efd] group-hover/button:after:bg-[#0d6efd] dark:border-[#ffffff66] border-[#00000066] group-[.expanded]/button:border-[#0d6efd] inline-block relative w-8 min-w-[2rem] h-8 min-h-[2rem] border-[1px] border-solid [transition:_all_0.225s_ease-in-out] before:[transition:_background-color_0.225s_ease-in-out] after:[transition:_background-color_0.225s_ease-in-out] rounded-[50%] duration-[10ms] ml-auto after:block after:absolute after:content-normal after:top-2/4 after:left-2/4 after:-translate-x-1/2 after:-translate-y-1/2 dark:after:bg-white after:bg-black before:block before:absolute before:content-normal before:top-2/4 before:left-2/4 before:-translate-x-1/2 before:-translate-y-1/2 dark:before:bg-white before:bg-black before:h-[0.1rem] before:w-[0.6rem] after:h-[0.6rem] after:w-[0.1rem]"></span>
                        </button>
                        <div class="opacity-0 max-h-0 overflow-hidden flex flex-col [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">

                            <div class="gap-2 flex-col mt-6 flex">
                                <div class="dark:text-white b-text_600 relative text-xl text-black">{{ __('What you get:') }}</div>
                                <div class="dark:text-white relative text-xl font-light text-black">
                                    {{ __('Supplier of sneakers working on the "dropshipping" system') }}</div>
                            </div>

                            <div class="gap-2 flex-col mt-6 flex">
                                <div class="dark:text-white b-text_600 relative text-xl text-black">💡 {{ __('Result:') }}</div>
                                <div class="gap-2 flex flex-col">
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('1. Access to 610 sneaker models without investing in the product') }}
                                    </div>
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('2. Cost price of sneakers for you (NO MARKUP)') }}</div>
                                </div>
                            </div>
                        </div>
                        {{-- <img loading="lazy" src="{{ URL::asset('assets/images/min-webp/coin.webp') }}" alt="coin" class="absolute -z-[1] w-auto xl:h-40 xl:top-0 xl:right-0 h-32 -right-8 top-7" type="image/webp"> --}}
                        <img loading="lazy" src="{{ URL::asset('assets/images/min-webp/coin.webp') }}" alt="coin" class="absolute -z-[1] w-auto xl:h-40 xl:top-0 xl:right-0 h-32 -right-8 top-7" type="image/webp">
                    </div>

                    <div class="js-accordion-item rounded-2xl p-6 mb-4 bg-[#00000008] backdrop-filter backdrop-blur-[2rem] relative noise-before">
                        <button class="js-accordion-button group/button peer/button flex flex-row gap-4 w-full">
                            <div class="align flex flex-row">
                                <span class="js-accordion-text dark:text-white b-text_grey_light-mode b-text_text-nowrap relative text-2xl font-light text-[#acacac]">{{ __('Step 2') }}</span>
                                <span class="dark:text-white ml-4 relative text-left text-2xl xl:text-3xl font-semibold text-black">{{ __('"Sneaker Seller" Knowledge Base') }}</span>
                            </div>
                            <span class="group-[.expanded]/button:after:w-0 group-hover/button:before:bg-[#0d6efd] group-hover/button:after:bg-[#0d6efd] dark:border-[#ffffff66] border-[#00000066] group-[.expanded]/button:border-[#0d6efd] inline-block relative w-8 min-w-[2rem] h-8 min-h-[2rem] border-[1px] border-solid [transition:_all_0.225s_ease-in-out] before:[transition:_background-color_0.225s_ease-in-out] after:[transition:_background-color_0.225s_ease-in-out] rounded-[50%] duration-[10ms] ml-auto after:block after:absolute after:content-normal after:top-2/4 after:left-2/4 after:-translate-x-1/2 after:-translate-y-1/2 dark:after:bg-white after:bg-black before:block before:absolute before:content-normal before:top-2/4 before:left-2/4 before:-translate-x-1/2 before:-translate-y-1/2 dark:before:bg-white before:bg-black before:h-[0.1rem] before:w-[0.6rem] after:h-[0.6rem] after:w-[0.1rem]"></span>
                        </button>
                        <div class="opacity-0 max-h-0 overflow-hidden flex flex-col [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">

                            <div class="gap-2 flex-col mt-6 flex">
                                <div class="dark:text-white b-text_600 relative text-xl text-black">{{ __('What you get:') }}</div>
                                <div class="gap-2 flex flex-col">
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('1. Access to the main Telegram channel "Start Club"') }}</div>
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('2. Access to the 3-year "archive" of the club (How we started and what steps led to such a result)') }}
                                    </div>
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('3. Google sheet with actual sizes') }}</div>
                                </div>
                            </div>

                            <div class="gap-2 flex-col mt-6 flex">
                                <div class="dark:text-white b-text_600 relative text-xl text-black">{{ __('What you will learn:') }}</div>
                                <div class="gap-2 flex flex-col">
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('1. Where to get photos and videos of supplies without a watermark') }}
                                    </div>
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('2. Mistake of 98.9% of entrepreneurs') }}</div>
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('3. How to beat all competitors and become #1 in your city') }}</div>
                                    <div class="dark:text-white relative text-xl font-light text-black">{{ __('4. How to place an order') }}
                                    </div>
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('5. How to place an order with "cash on delivery"') }}</div>
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('6. Best markup on sneakers') }}</div>
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('7. Video from our targeting specialist on launching ads') }}</div>
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('8. Video course from Daniil on launching ads without money') }}</div>
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('9. How to communicate with customers to avoid losing sales') }}</div>
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('10. How to make 100 sales in the first 2 months of work') }}</div>
                                </div>
                            </div>

                            <div class="gap-2 flex-col mt-6 flex">
                                <div class="dark:text-white b-text_600 relative text-xl text-black">💡 {{ __('Result:') }}</div>
                                <div class="dark:text-white relative text-xl font-light text-black">
                                    {{ __('You will create a selling account for an online sneaker store') }}</div>
                            </div>
                        </div>
                        <img loading="lazy" src="{{ URL::asset('assets/images/min-png/heart.png') }}" alt="heart" class="absolute -z-[1] w-auto xl:h-40 xl:top-0 xl:right-0 h-32 -right-8 top-7" type="image/png">
                    </div>

                    <div class="js-accordion-item rounded-2xl p-6 mb-4 bg-[#00000008] backdrop-filter backdrop-blur-[2rem] relative noise-before">
                        <button class="js-accordion-button group/button peer/button flex flex-row gap-4 w-full">
                            <div class="align flex flex-row">
                                <span class="js-accordion-text dark:text-white b-text_grey_light-mode b-text_text-nowrap relative text-2xl font-light text-[#acacac]">{{ __('Step 3') }}</span>
                                <span class="dark:text-white ml-4 relative text-left text-2xl xl:text-3xl font-semibold text-black">{{ __('Sneaker Business Marathon') }}</span>
                            </div>
                            <span class="group-[.expanded]/button:after:w-0 group-hover/button:before:bg-[#0d6efd] group-hover/button:after:bg-[#0d6efd] dark:border-[#ffffff66] border-[#00000066] group-[.expanded]/button:border-[#0d6efd] inline-block relative w-8 min-w-[2rem] h-8 min-h-[2rem] border-[1px] border-solid [transition:_all_0.225s_ease-in-out] before:[transition:_background-color_0.225s_ease-in-out] after:[transition:_background-color_0.225s_ease-in-out] rounded-[50%] duration-[10ms] ml-auto after:block after:absolute after:content-normal after:top-2/4 after:left-2/4 after:-translate-x-1/2 after:-translate-y-1/2 dark:after:bg-white after:bg-black before:block before:absolute before:content-normal before:top-2/4 before:left-2/4 before:-translate-x-1/2 before:-translate-y-1/2 dark:before:bg-white before:bg-black before:h-[0.1rem] before:w-[0.6rem] after:h-[0.6rem] after:w-[0.1rem]"></span>
                        </button>
                        <div class="opacity-0 max-h-0 overflow-hidden flex flex-col [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">

                            <div class="gap-2 flex-col mt-6 flex">
                                <div class="dark:text-white b-text_600 relative text-xl text-black">{{ __('What you get:') }}</div>
                                <div class="dark:text-white relative text-xl font-light text-black">
                                    {{ __('Access to a 3-day online marathon for beginners in this business. In the format of photos | videos | voice messages, we will analyze how to start a business with sneakers') }}
                                </div>
                            </div>

                            <div class="gap-2 flex-col mt-6 flex">
                                <div class="dark:text-white b-text_600 relative text-xl text-black">💡 {{ __('Result:') }}</div>
                                <div class="gap-2 flex flex-col">
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('1. Complete understanding of all technical points') }}</div>
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('2. We will create an online sneaker store in 3 days') }}</div>
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('3. On the experience of others, you will learn how to avoid mistakes in working with sneakers') }}
                                    </div>
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('4. Analysis of the accounts of marathon participants') }}</div>
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('5. You will learn about 5 additional ways to promote the store on social networks') }}
                                    </div>
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('6. First leads, inquiries, and possibly the first sale') }}</div>
                                    <div class="dark:text-white relative text-xl font-light text-black">
                                        {{ __('7. Fully packaged business and strategy for development') }}</div>
                                </div>
                            </div>
                        </div>
                        <img loading="lazy" src="{{ URL::asset('assets/images/min-webp/deal-glasses.webp') }}" alt="deal-glasses" class="absolute -z-[1] w-auto xl:h-40 xl:top-0 xl:right-0 h-32 -right-8 top-7 b-img_v15_1" type="image/webp">
                    </div>
                </div>
            </div>

        </section>


        <section class="b-section b-section_v3 b-section_visible pt-6">
            <div class="fade-in fade-in_v1 top"></div>
            <div class="min-w-96 max-w-96 relative z-10 m-auto w-full xl:max-w-[1200px]">
                <div class="flex flex-col">
                    <img loading="lazy" src="{{ URL::asset('assets/images/min-webp/star-sticker.webp') }}" alt="star-sticker" class="b-img b-img_v17">

                    <div class="dark:text-white b-text_uppercase b-text_2.5em b-text_fit relative m-auto mb-24 text-center font-bold text-black">
                        <span class="text-nowrap blue-marker relative">{{ __('With You') }}</span>
                        {{ __('Sharing Knowledge') }}
                    </div>

                    <div class="mob flex flex-col gap-8">
                        <div class="gap_4 mob flex flex-row">

                            <div class="w30 mob flex flex-col gap-8">

                                {{-- Swiper_v4 Lopd25 --}}
                                <div class="relative">
                                    <div class="swiper_v4 m-0 flex hidden">
                                        <div class="flex flex-row [transition:all_0.225s_ease-in-out]">
                                            <div class="swiper-slide flex flex-col">
                                                <div class="dark:text-white w b-text_shadow4 b-text_uppercase absolute relative bottom-0 left-0 ml-1.5 text-3xl font-semibold leading-4 text-black">
                                                    {!! __('Daniil<br /> Shkitov') !!}
                                                </div>
                                                <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/author-img/3.jpg') }}" class="b-img b-img_v16 cursor_grab js-slide-block mx-auto"
                                                    type="image/jpeg" alt="author-img-3">
                                            </div>

                                            <div class="swiper-slide flex flex-col">
                                                <div class="dark:text-white w b-text_shadow4 b-text_uppercase absolute relative bottom-0 left-0 ml-1.5 text-3xl font-semibold leading-4 text-black">
                                                    {!! __('Daniil<br /> Shkitov') !!}
                                                </div>
                                                <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/author-img/2.jpg') }}" class="b-img b-img_v16 cursor_grab js-slide-block mx-auto"
                                                    type="image/jpeg" alt="author-img-2">
                                            </div>


                                            <div class="swiper-slide flex flex-col">
                                                <div class="dark:text-white w b-text_shadow4 b-text_uppercase absolute relative bottom-0 left-0 ml-1.5 text-3xl font-semibold leading-4 text-black">
                                                    {!! __('Daniil<br /> Shkitov') !!}
                                                </div>
                                                <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/author-img/1.jpg') }}" class="b-img b-img_v16 cursor_grab js-slide-block mx-auto"
                                                    type="image/jpeg" alt="author-img-1">
                                            </div>

                                            <div class="swiper-slide flex flex-col">
                                                <div class="dark:text-white w b-text_shadow4 b-text_uppercase absolute relative bottom-0 left-0 ml-1.5 text-3xl font-semibold leading-4 text-black">
                                                    {!! __('Daniil<br /> Shkitov') !!}
                                                </div>
                                                <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/author-img/4.jpg') }}" class="b-img b-img_v16 cursor_grab js-slide-block mx-auto"
                                                    type="image/jpeg" alt="author-img-4">
                                            </div>

                                            <div class="swiper-slide flex flex-col">
                                                <div class="dark:text-white w b-text_shadow4 b-text_uppercase absolute relative bottom-0 left-0 ml-1.5 text-3xl font-semibold leading-4 text-black">
                                                    {!! __('Daniil<br /> Shkitov') !!}
                                                </div>
                                                <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/author-img/5.jpg') }}" class="b-img b-img_v16 cursor_grab js-slide-block mx-auto"
                                                    type="image/jpeg" alt="author-img-5">
                                            </div>

                                            <div class="swiper-slide flex flex-col">
                                                <div class="dark:text-white w b-text_shadow4 b-text_uppercase absolute relative bottom-0 left-0 ml-1.5 text-3xl font-semibold leading-4 text-black">
                                                    {!! __('Daniil<br /> Shkitov') !!}
                                                </div>
                                                <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/author-img/6.jpg') }}" class="b-img b-img_v16 cursor_grab js-slide-block mx-auto"
                                                    type="image/jpeg" alt="author-img-6">
                                            </div>
                                        </div>
                                        <div class="swiper-arrow swiper-button-next"></div>
                                        <div class="swiper-arrow swiper-button-prev"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="w50 wmob flex flex-col justify-between">
                                <div class="gap mb-8 flex flex-col">
                                    <div class="dark:text-white relative text-2xl font-light text-black">
                                        {{ __('The club’s creator, supplier, and leader of the YouTube channel') }}
                                        <a target="_blank" href="https://www.youtube.com/@shkitov" class="mt-1">
                                            <img src="{{ URL::asset('assets/images/yt-logo.jpg') }}" alt="youtube-logo" class="b-img b-img_v21">
                                        </a>
                                    </div>
                                    <div class="dark:text-white relative font-light text-[#acacac] text-black">
                                        {{ __('Daniil personally shares all the information in the club in the form of texts, audio, and video content.') }}
                                    </div>
                                </div>

                                <div class="flex flex-col">
                                    <div class="dark:text-white b-text_500 relative text-2xl text-black">
                                        <span class="dark:text-white relative text-3xl font-bold text-black">470</span> {{ __('graduates') }}
                                    </div>
                                    <div class="dark:text-white b-text_500 relative mb-4 text-2xl text-black">
                                        <span class="dark:text-white relative text-3xl font-bold text-black">295,000</span> {{ __('subscribers') }}
                                    </div>
                                    <div class="flex flex-row gap-2">
                                        <div class="gap-2 h align flex">
                                            <img src="{{ URL::asset('assets/images/min-webp/instagram.webp') }}" alt="instagram" class="b-img">
                                            <a href="https://www.instagram.com/daniilshkit">daniilshkit</a>
                                        </div>
                                        <div class="gap-2 h align flex">
                                            <img src="{{ URL::asset('assets/images/min-webp/telegram.webp') }}" alt="telegram" class="b-img b-img_v1">
                                            <a href="https://t.me/daniilshkitov">daniilshkitov</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="b-section b-section_doted b-section_v5 b-section_visible">
            <div class="min-w-96 max-w-96 relative z-10 m-auto w-full xl:max-w-[1200px]">

                <div class="mb-12 flex h-fit flex-col items-center justify-center">
                    <div class="dark:text-white b-text_uppercase b-text_2.5em b-text_after-orator relative my-3 w-fit text-center font-bold text-black">
                        {{ __('Frequent') }}
                        <span class="text-nowrap blue-marker relative">{{ __('Questions') }}</span>
                    </div>
                </div>
                <div class="accordion-container">
                    <div class="divider"></div>
                    {{-- hook Gloof49_ck --}}
                    <div class="gap mob accordion flex flex-row">
                        <div class="w50 gap mob flex flex-col">
                            <div class="js-accordion-item">
                                <button id="accordion-button-1">
                                    <span class="js-accordion-text dark:text-white fmob4 relative text-3xl text-black">{{ __('How to pay?') }}</span>
                                    <span class="inline-block relative w-8 min-w-[2rem] h-8 min-h-[2rem] border-[1px] border-[solid] rounded-[50%] duration-[10ms] ml-4 after:block after:absolute after:content-[""] after:top-2/4 after:left-2/4 after:-translate-x-1/2 after:-translate-y-1/2 after:bg-[#FFF]"></span>
                                </button>
                                <div class="opacity-0 max-h-0 overflow-hidden flex flex-col [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                                    <div class="dark:text-white relative my-1 text-xl font-light text-[#acacac] text-black">
                                        {!! __(
                                            'Choose a convenient payment method after completing your registration. You can pay for club access from any bank in Russia. *If you need to pay with a foreign card, please contact our customer care:',
                                        ) !!}
                                        <span>
                                            <a target="_blank" href="https://t.me/ClubStarthelp_bot">@ClubStarthelp_bot</a>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button id="accordion-button-2">
                                    <span class="dark:text-white fmob4 relative text-3xl text-black">{{ __('What happens after payment?') }}</span>
                                    <span class="inline-block relative w-8 min-w-[2rem] h-8 min-h-[2rem] border-[1px] border-[solid] rounded-[50%] duration-[10ms] ml-4 after:block after:absolute after:content-[""] after:top-2/4 after:left-2/4 after:-translate-x-1/2 after:-translate-y-1/2 after:bg-[#FFF]"></span>
                                </button>
                                <div class="opacity-0 max-h-0 overflow-hidden flex flex-col [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                                    <div class="dark:text-white relative my-1 text-xl font-light text-[#acacac] text-black">
                                        {!! __(
                                            'You will be redirected to your personal account where you will find a link to the private Telegram channel "START CLUB". Additionally, your personal account will have links to marathons, tables, club archives (showing our beginnings and what led to the current results), and other relevant links for productive work.',
                                        ) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button id="accordion-button-3">
                                    <span class="dark:text-white fmob4 relative text-3xl text-black">{{ __('In which cities and countries can you operate?') }}</span>
                                    <span class="inline-block relative w-8 min-w-[2rem] h-8 min-h-[2rem] border-[1px] border-[solid] rounded-[50%] duration-[10ms] ml-4 after:block after:absolute after:content-[""] after:top-2/4 after:left-2/4 after:-translate-x-1/2 after:-translate-y-1/2 after:bg-[#FFF]"></span>
                                </button>
                                <div class="opacity-0 max-h-0 overflow-hidden flex flex-col [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                                    <div class="dark:text-white relative my-1 text-xl font-light text-[#acacac] text-black">
                                        {!! __('We have an official agreement with a logistics company, so you can sell sneakers and participate in the club in any city worldwide.') !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button id="accordion-button-4">
                                    <span class="dark:text-white fmob4 relative text-3xl text-black">{{ __('Are the sneakers genuine?') }}</span>
                                    <span class="inline-block relative w-8 min-w-[2rem] h-8 min-h-[2rem] border-[1px] border-[solid] rounded-[50%] duration-[10ms] ml-4 after:block after:absolute after:content-[""] after:top-2/4 after:left-2/4 after:-translate-x-1/2 after:-translate-y-1/2 after:bg-[#FFF]"></span>
                                </button>
                                <div class="opacity-0 max-h-0 overflow-hidden flex flex-col [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                                    <div class="dark:text-white relative my-1 text-xl font-light text-[#acacac] text-black">
                                        {!! __('To fully address this question, I have recorded a detailed explanation.') !!}
                                    </div>
                                    <audio controls preload="none">
                                        <source src="{{ URL::asset('assets/audio/audio-are-genuine-sneakers.ogg') }}" type="audio/ogg">
                                        {{ __('Your browser does not support the audio element.') }}
                                    </audio>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button id="accordion-button-5">
                                    <span class="dark:text-white fmob4 relative text-3xl text-black">{{ __('What is the essence of the club?') }}</span>
                                    <span class="inline-block relative w-8 min-w-[2rem] h-8 min-h-[2rem] border-[1px] border-[solid] rounded-[50%] duration-[10ms] ml-4 after:block after:absolute after:content-[""] after:top-2/4 after:left-2/4 after:-translate-x-1/2 after:-translate-y-1/2 after:bg-[#FFF]"></span>
                                </button>
                                <div class="opacity-0 max-h-0 overflow-hidden flex flex-col [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                                    <div class="dark:text-white relative my-1 text-xl font-light text-[#acacac] text-black">
                                        {!! __(
                                            'In the club, you will have the opportunity to purchase sneakers at cost price starting from one pair. You will also be granted access to marketing content for websites and social media. Moreover, you will become part of a community of sneaker sellers and receive informational support, helping you avoid many mistakes at the start.',
                                        ) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button id="accordion-button-6">
                                    <span class="dark:text-white fmob4 relative text-3xl text-black">{{ __('Is there a return policy?') }}</span>
                                    <span class="inline-block relative w-8 min-w-[2rem] h-8 min-h-[2rem] border-[1px] border-[solid] rounded-[50%] duration-[10ms] ml-4 after:block after:absolute after:content-[""] after:top-2/4 after:left-2/4 after:-translate-x-1/2 after:-translate-y-1/2 after:bg-[#FFF]"></span>
                                </button>
                                <div class="opacity-0 max-h-0 overflow-hidden flex flex-col [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                                    <div class="dark:text-white relative my-1 text-xl font-light text-[#acacac] text-black">
                                        {!! __(
                                            'A return of sneakers is possible within 14 days. You or your client can return the sneakers to the warehouse and receive a refund. There are no refunds for the club membership. The service is considered provided from the moment of access.',
                                        ) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button id="accordion-button-7">
                                    <span class="dark:text-white fmob4 relative text-3xl text-black">{{ __('Can you pay for the sneakers after receiving them?') }}</span>
                                    <span class="inline-block relative w-8 min-w-[2rem] h-8 min-h-[2rem] border-[1px] border-[solid] rounded-[50%] duration-[10ms] ml-4 after:block after:absolute after:content-[""] after:top-2/4 after:left-2/4 after:-translate-x-1/2 after:-translate-y-1/2 after:bg-[#FFF]"></span>
                                </button>
                                <div class="opacity-0 max-h-0 overflow-hidden flex flex-col [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                                    <div class="dark:text-white relative my-1 text-xl font-light text-[#acacac] text-black">
                                        {!! __('Yes, when placing an order, you can specify that payment should be made after receiving the goods.') !!}
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="w50 gap mob flex flex-col">

                            <div class="accordion-item">
                                <button id="accordion-button-8">
                                    <span class="dark:text-white fmob4 relative text-3xl text-black">{{ __('Can sneakers be purchased by drop shipping without being in the club?') }}</span>
                                    <span class="inline-block relative w-8 min-w-[2rem] h-8 min-h-[2rem] border-[1px] border-[solid] rounded-[50%] duration-[10ms] ml-4 after:block after:absolute after:content-[""] after:top-2/4 after:left-2/4 after:-translate-x-1/2 after:-translate-y-1/2 after:bg-[#FFF]"></span>
                                </button>
                                <div class="opacity-0 max-h-0 overflow-hidden flex flex-col [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                                    <div class="dark:text-white relative my-1 text-xl font-light text-[#acacac] text-black">
                                        {!! __('All club members benefit from low prices through drop shipping. You can gain access by paying a monthly membership fee.') !!}
                                        <br><br>
                                        {!! __('If you wish to place an order without being a club member, you will be charged the regular retail price, just like any other customer.') !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button id="accordion-button-9">
                                    <span class="dark:text-white fmob4 relative text-3xl text-black">{{ __('If this is my first business, will I be able to understand everything?') }}</span>
                                    <span class="inline-block relative w-8 min-w-[2rem] h-8 min-h-[2rem] border-[1px] border-[solid] rounded-[50%] duration-[10ms] ml-4 after:block after:absolute after:content-[""] after:top-2/4 after:left-2/4 after:-translate-x-1/2 after:-translate-y-1/2 after:bg-[#FFF]"></span>
                                </button>
                                <div class="opacity-0 max-h-0 overflow-hidden flex flex-col [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                                    <div class="dark:text-white relative my-1 text-xl font-light text-[#acacac] text-black">
                                        {!! __('Yes, I explain every step of setting up the store in simple terms. You do not need any special knowledge or experience; you will acquire it during the process.') !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button id="accordion-button-10">
                                    <span class="dark:text-white fmob4 relative text-3xl text-black">{{ __('Where is the club located?') }}</span>
                                    <span class="inline-block relative w-8 min-w-[2rem] h-8 min-h-[2rem] border-[1px] border-[solid] rounded-[50%] duration-[10ms] ml-4 after:block after:absolute after:content-[""] after:top-2/4 after:left-2/4 after:-translate-x-1/2 after:-translate-y-1/2 after:bg-[#FFF]"></span>
                                </button>
                                <div class="opacity-0 max-h-0 overflow-hidden flex flex-col [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                                    <div class="dark:text-white relative my-1 text-xl font-light text-[#acacac] text-black">
                                        {!! __('The club is located in a private Telegram channel. Communication in the club happens through text, circles, broadcasts, and voice messages, just like in real chats.') !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button id="accordion-button-11">
                                    <span class="dark:text-white fmob4 relative text-3xl text-black">{{ __('What is drop shipping?') }}</span>
                                    <span class="inline-block relative w-8 min-w-[2rem] h-8 min-h-[2rem] border-[1px] border-[solid] rounded-[50%] duration-[10ms] ml-4 after:block after:absolute after:content-[""] after:top-2/4 after:left-2/4 after:-translate-x-1/2 after:-translate-y-1/2 after:bg-[#FFF]"></span>
                                </button>
                                <div class="opacity-0 max-h-0 overflow-hidden flex flex-col [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                                    <div class="dark:text-white relative my-1 text-xl font-light text-[#acacac] text-black">
                                        {!! __(
                                            'Drop shipping is selling sneakers on order for a supplier. In the club, you can order sneakers for yourself or directly to your customers, and earn profits through transfers to your bank card.',
                                        ) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button id="accordion-button-12">
                                    <span class="dark:text-white fmob4 relative text-3xl text-black">{{ __('How to extend/cancel the club subscription?') }}</span>
                                    <span class="inline-block relative w-8 min-w-[2rem] h-8 min-h-[2rem] border-[1px] border-[solid] rounded-[50%] duration-[10ms] ml-4 after:block after:absolute after:content-[""] after:top-2/4 after:left-2/4 after:-translate-x-1/2 after:-translate-y-1/2 after:bg-[#FFF]"></span>
                                </button>
                                <div class="opacity-0 max-h-0 overflow-hidden flex flex-col [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                                    <div class="dark:text-white relative my-1 text-xl font-light text-[#acacac] text-black">
                                        {!! __('Payments will be automatically deducted from the card you used to pay for the club after successful payment.') !!}
                                        <br><br>
                                        {!! __('To cancel your subscription, log into your personal account, select the "Settings" section, go to the "Subscription" section, and then press "Cancel".') !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button id="accordion-button-13">
                                    <span
                                        class="dark:text-white fmob4 relative text-3xl text-black">{{ __('How will I gain access, and what should I do if there are difficulties with payment or the club?') }}</span>
                                    <span class="inline-block relative w-8 min-w-[2rem] h-8 min-h-[2rem] border-[1px] border-[solid] rounded-[50%] duration-[10ms] ml-4 after:block after:absolute after:content-[""] after:top-2/4 after:left-2/4 after:-translate-x-1/2 after:-translate-y-1/2 after:bg-[#FFF]"></span>
                                </button>
                                <div class="opacity-0 max-h-0 overflow-hidden flex flex-col [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                                    <div class="dark:text-white relative my-1 text-xl font-light text-[#acacac] text-black">
                                        {!! __('After payment, a personal account will be created for you containing all the necessary links for the Start Club.') !!}
                                        <br><br>
                                        *{!! __('You will be automatically redirected to your personal account after payment.') !!}
                                        <br><br>
                                        {!! __('If there are any difficulties, we will assist you. Contact our care department by stating the email used for payment. Support Telegram:') !!}
                                        <a href="https://t.me/ClubStarthelp_bot">@ClubStarthelp_bot</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="abs_blur_effect_custom"></div>
                <div class="abs_blur_effect_custom green"></div>
            </div>

            <div class="fade-in"></div>
        </section>



        {{-- hook QsAAi29_1x --}}
        {{-- <div id="video-intro">
        <div class="video-wrapper">
            @svg('red-cross', 'b-img b-img_remove')
            <div class="b-img b-img_remove v1">—</div>
            <video src="{{ URL::asset('assets/videos/camera.mp4') }}" autoplay muted loop>
            </video>
        </div>
    </div> --}}
        <footer class="modern-footer mt-6">
            <div class="container_v2 mob container my-3">
                <div class="dark:text-white relative text-center text-[#666666] text-black">
                    {{ __('Sole Proprietor Shkitov D. A. TIN: 7707083893') }}<br>
                    {{ __('Bank TIN: 7710140679') }}<br>
                    {{ __('OGRNIP: 322325600026496') }}<br>
                </div>
            </div>
        </footer>

    </div>

    <div class="modal-container">
        <div class="modal-background">
            <div class="modal">
            </div>
        </div>
    </div>
@endsection


{{-- preload --}}
@section('index-preload')
    <link rel="preload" fetchpriority="high" as="image" type="image/png" href="{{ URL::asset('assets/images/min-png/sneaker-in-motion.png') }}" />
    <link rel="preload" fetchpriority="high" as="image" type="image/png" href="{{ URL::asset('assets/images/min-png/shipping-box.png') }}" />
    <link rel="preload" fetchpriority="high" as="image" type="image/png" href="{{ URL::asset('assets/images/min-png/shipping-box-cut.png') }}" />
@stop

{{-- styles --}}
@section('index-styles')
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/styles/index/accordion.css') }}">
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/styles/index/swiper.css') }}">
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/styles/index/telegram-circle-video.css') }}">
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/styles/index/modals.css') }}">
@stop

{{-- javascript --}}
@section('index-script')
    <script src="{{ Vite::asset('resources/javascript/global/main.js') }}"></script>
    <script src="{{ Vite::asset('resources/javascript/index/accordion.js') }}"></script>
    <script src="{{ Vite::asset('resources/javascript/index/hooks.js') }}"></script>
    <script src="{{ Vite::asset('resources/javascript/index/modules/sneaker.js') }}" type="module"></script>
    <script src="{{ Vite::asset('resources/javascript/index/modules/swiper.js') }}" type="module"></script>
    <script src="{{ Vite::asset('resources/javascript/index/telegram-circle-video.js') }}"></script>
    <script src="{{ Vite::asset('resources/javascript/index/modals.js') }}"></script>
@stop
