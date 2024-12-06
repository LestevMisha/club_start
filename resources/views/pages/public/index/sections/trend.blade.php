<section class="dark:bg-black relative m-0 h-full w-full overflow-visible bg-white p-0 pt-24">
    @svg('ui-set.hand-over', '-top-[10%] left-full -translate-x-1/2 w-[50rem] h-[50rem] absolute')
    <img class="absolute -top-[10%] left-full h-[50rem] w-[50rem] -translate-x-1/2" src="{{ URL::asset('assets/images/min-png/hand-over.png') }}" alt="hand-over">
    <div class="absolute left-full top-0 h-[25rem] w-[25rem] -translate-x-1/2 rounded-[100%] bg-[#E96035] blur-[10rem] filter"></div>
    <img class="absolute bottom-[20%] right-[20%] z-10 h-[30rem] w-[30rem] translate-x-3/4 xl:bottom-[-20%] xl:right-full" src="{{ URL::asset('assets/images/min-png/thorus-knot.png') }}"
        alt="thorus-knot">
    <div class="absolute bottom-[22%] right-0 z-10 h-80 w-[30rem] translate-x-[65%] rounded-[100%] bg-[#00ff75] blur-[10rem] filter xl:-bottom-[10%] xl:right-full xl:translate-x-[45%]"></div>
    <img class="absolute right-full top-[30%] h-[30rem] w-[30rem] translate-x-[45%] xl:-top-[10%]" src="{{ URL::asset('assets/images/min-png/cube.png') }}" alt="cube">
    <div class="absolute right-full top-[30%] h-[30rem] w-[30rem] translate-x-[45%] rounded-[100%] bg-[#7B2B90D9] blur-[10rem] filter xl:-top-[10%]"></div>
    <div class="min-w-96 max-w-96 relative z-10 m-auto w-full xl:max-w-[1200px]">
        <div class="flex flex-col">
            <div class="mb-4 flex h-fit flex-col items-center justify-center">
                <div class="dark:text-white relative mb-4 w-fit text-center text-4xl font-bold uppercase text-black xl:text-[2.5rem]">
                    {{ __('pages/public/index.57') }}
                    <span
                        class="text-nowrap dark:before:bg-[#0d6efd] relative !-z-[1] uppercase before:absolute before:right-0 before:top-2/4 before:-z-10 before:block before:h-10 before:w-full before:-translate-x-[4%] before:-translate-y-1/2 before:bg-[#6fa9ff] before:p-[0.3rem] before:content-[''] before:[rotate:1deg]">
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
            <div class="flex w-full flex-col gap-8">
                <div class="flex w-full flex-col gap-8 xl:flex-row">
                    <div class="relative w-full xl:w-1/3">
                        <div class="dark:bg-[#3A3A3A66] relative h-72 rounded-[1.75rem] bg-[#e8e8e869] p-8 backdrop-blur-[0.25rem] backdrop-filter">
                            <div class="flex h-full w-full flex-col justify-between">
                                <div class="flex flex-col">
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
                        <div class="dark:bg-[#3A3A3A66] relative h-72 rounded-[1.75rem] bg-[#e8e8e869] p-8 backdrop-blur-[0.25rem] backdrop-filter">
                            <div class="flex h-full w-full flex-col justify-between">
                                <div class="flex flex-col">
                                    <div class="mb-4">
                                        <div class="dark:text-white relative text-center text-3xl font-bold text-black xl:text-left">{{ __('pages/public/index.65') }}</div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="relative text-center text-xl font-light text-[#acacac] xl:text-left">
                                            {{ __('pages/public/index.66') }}
                                        </div>
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
                        <div class="dark:bg-[#3A3A3A66] relative h-72 rounded-[1.75rem] bg-[#e8e8e869] p-8 backdrop-blur-[0.25rem] backdrop-filter">
                            <div class="flex h-full w-full flex-col justify-between">
                                <div class="flex flex-col">
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
                        <div class="dark:bg-[#3A3A3A66] relative h-72 rounded-[1.75rem] bg-[#e8e8e869] p-8 backdrop-blur-[0.25rem] backdrop-filter">
                            <div class="flex h-full w-full flex-col justify-between">
                                <div class="flex flex-col">
                                    <div class="mb-4">
                                        <div class="dark:text-white relative text-center text-3xl font-bold text-black xl:text-left">
                                            {{ __('pages/public/index.69') }}
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="relative text-center text-xl font-light text-[#acacac] xl:text-left">
                                            {{-- {{ __('pages/public/index.70') }} --}}
                                            Мы заключили договор с СДЭК, что позволяет нам отправлять товары вдвое дешевле, чем частным лицам.
                                        </div>
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
                        <div class="dark:bg-[#3A3A3A66] relative h-72 rounded-[1.75rem] bg-[#e8e8e869] p-8 backdrop-blur-[0.25rem] backdrop-filter">
                            <div class="flex h-full w-full flex-col justify-between">
                                <div class="flex flex-col">
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
                        <div class="dark:bg-[#3A3A3A66] relative h-72 rounded-[1.75rem] bg-[#e8e8e869] p-8 backdrop-blur-[0.25rem] backdrop-filter">
                            <div class="flex h-full w-full flex-col justify-between">
                                <div class="flex flex-col">
                                    <div class="mb-4">
                                        <div class="dark:text-white relative text-center text-3xl font-bold text-black xl:text-left">Выгода</div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="relative text-center text-xl font-light text-[#acacac] xl:text-left">
                                            {{-- {{ __('pages/public/index.73') }}
                                        <br class="hidden xl:block" />
                                        {{ __('pages/public/index.74') }} --}}
                                            🔗 У вас будет реферальная ссылка для продажи "КЛУБА START" с 50% от каждого привлеченного.
                                        </div>
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
                        <div class="dark:bg-[#3A3A3A66] relative h-72 rounded-[1.75rem] bg-[#e8e8e869] p-8 backdrop-blur-[0.25rem] backdrop-filter">
                            <div class="flex h-full w-full flex-col justify-between">
                                <div class="flex flex-col">
                                    <div class="mb-4">
                                        <div class="dark:text-white relative text-center text-3xl font-bold text-black xl:text-left">
                                            {{ __('pages/public/index.75') }}
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="relative text-center text-xl font-light text-[#acacac] xl:text-left">
                                            {{-- {{ __('pages/public/index.76') }} --}}
                                            Мы расширяем ассортимент не только кроссовками, но и брендовой одеждой и аксессуарами, для доп продаж.
                                        </div>
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
                        @svg('ui-set.tick', 'right-0 bottom-full translate-y-[70%] absolute w-[4.75rem] h-[4.75rem]')
                        @svg('ui-number-set.7', 'absolute h-[7.25rem] w-[7.25rem] bottom-full translate-x-[65%] translate-y-[60%] right-full -z-10 text-[#0d6efd]')
                    </div>
                    <div class="relative w-full xl:w-[calc(33.33333%-1rem)]">
                        <div class="dark:bg-[#3A3A3A66] relative h-72 rounded-[1.75rem] bg-[#e8e8e869] p-8 backdrop-blur-[0.25rem] backdrop-filter">
                            <div class="flex h-full w-full flex-col justify-between">
                                <div class="flex flex-col">
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
                    <div class="relative w-full xl:w-[calc(33.33333%-1rem)]">
                        <div class="dark:bg-[#3A3A3A66] relative h-72 rounded-[1.75rem] bg-[#e8e8e869] p-8 backdrop-blur-[0.25rem] backdrop-filter">
                            <div class="flex h-full w-full flex-col justify-between">
                                <div class="flex flex-col">
                                    <div class="mb-4">
                                        <div class="dark:text-white relative text-center text-3xl font-bold text-black xl:text-left">
                                            {{-- {{ __('pages/public/index.77') }} --}}
                                            Фото-Видео
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="relative text-center text-xl font-light text-[#acacac] xl:text-left">
                                            {{-- {{ __('pages/public/index.78') }} --}}
                                            Делаем дополнительные фотографии или видео со склада по запросу вашего клиента.
                                        </div>
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
                        @svg('ui-set.photos', 'right-0 bottom-full translate-y-[70%] absolute w-[4.75rem] h-[4.75rem]')
                        @svg('ui-number-set.6', 'absolute h-[7.25rem] rotate-[180deg] w-[7.25rem] bottom-full translate-x-[65%] translate-y-[60%] right-full -z-10 text-[#0d6efd]')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
