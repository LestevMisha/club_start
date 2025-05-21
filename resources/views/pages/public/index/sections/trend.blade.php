<section class="relative m-0 h-full w-full overflow-visible bg-white p-0 pt-24 dark:bg-black">
    @svg('ui-set.hand-over', '-top-[10%] left-full -translate-x-1/2 w-[50rem] h-[50rem] absolute')
    <img class="absolute -top-[10%] left-full h-[50rem] w-[50rem] -translate-x-1/2" src="{{ URL::asset('assets/images/min-png/hand-over.png') }}" alt="hand-over">
    <div class="absolute left-full top-0 h-[25rem] w-[25rem] -translate-x-1/2 rounded-[100%] bg-[#E96035] blur-[10rem] filter"></div>
    <img class="absolute bottom-[20%] right-[20%] z-10 h-[30rem] w-[30rem] translate-x-3/4 xl:bottom-[-20%] xl:right-full" src="{{ URL::asset('assets/images/min-png/thorus-knot.png') }}"
        alt="thorus-knot">
    <div class="absolute bottom-[22%] right-0 z-10 h-80 w-[30rem] translate-x-[65%] rounded-[100%] bg-[#00ff75] blur-[10rem] filter xl:-bottom-[10%] xl:right-full xl:translate-x-[45%]"></div>
    <img class="absolute right-full top-[30%] h-[30rem] w-[30rem] translate-x-[45%] xl:-top-[10%]" src="{{ URL::asset('assets/images/min-png/cube.png') }}" alt="cube">
    <div class="absolute right-full top-[30%] h-[30rem] w-[30rem] translate-x-[45%] rounded-[100%] bg-[#7B2B90D9] blur-[10rem] filter xl:-top-[10%]"></div>
    <div class="min-w-96 max-w-96 relative z-10 m-auto w-full xl:max-w-[75rem]">
        <div class="flex flex-col">
            <div class="mb-4 flex h-fit flex-col items-center justify-center">
                <div class="relative mb-4 w-fit text-center text-4xl font-bold uppercase text-black dark:text-white xl:text-[2.5rem]">
                    {{ __('pages/public/index.57') }}
                    <span
                        class="text-nowrap relative -z-1! uppercase before:absolute before:right-0 before:top-2/4 before:-z-10 before:block before:h-10 before:w-full before:-translate-x-[4%] before:-translate-y-1/2 before:bg-[#6fa9ff] before:p-[0.3rem] before:content-[''] before:[rotate:1deg] dark:before:bg-[#0d6efd]">
                        {{ __('pages/public/index.58') }}
                    </span>
                    {{ __('pages/public/index.59') }}
                </div>
            </div>
            <div class="relative mb-24 text-center text-base font-light text-black dark:text-white xl:text-2xl">
                {{ __('pages/public/index.60') }}
                <br class="hidden xl:block" />
                {{ __('pages/public/index.61') }}
            </div>
            <div class="flex w-full flex-col gap-8">
                <div class="flex w-full flex-col gap-8 xl:flex-row">
                    <div class="relative w-full xl:w-1/3">
                        <div class="relative h-72 rounded-[1.75rem] bg-[#e8e8e869] p-8 backdrop-blur-[0.25rem] backdrop-filter dark:bg-[#3A3A3A66]">
                            <div class="flex h-full w-full flex-col justify-between">
                                <div class="flex flex-col">
                                    <div class="mb-4">
                                        <div class="relative text-center text-3xl font-bold text-black dark:text-white xl:text-left">
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
                                    class="js-modal-button relative flex h-12 w-full items-center justify-center rounded-full border-[0.1rem] cursor-pointer border-black text-[1rem] dark:border-white">
                                    <div class="relative text-xl text-black dark:text-white">
                                        {{ __('pages/public/index.64') }}
                                    </div>
                                    <div class="js-modal-content hidden">
                                        <div class="flex w-full flex-col gap-4 p-8">
                                            <img class="h-96 w-full rounded-xl object-cover" src="{{ URL::asset('assets/images/min-jpeg/trend/1.jpeg') }}" alt="1">
                                            <div class="relative text-xl font-light text-[#acacac]">
                                                {!! __('pages/public/index.178') !!}
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                        @svg('ui-set.notes', 'right-0 bottom-full translate-y-[70%] absolute w-[4.75rem] h-[4.75rem]')
                        @svg('ui-number-set.1', 'absolute h-[7.25rem] w-[7.25rem] bottom-full translate-x-[65%] translate-y-[60%] right-full -z-10 text-[#0d6efd]')
                    </div>
                    <div class="relative w-full xl:w-1/3">
                        <div class="relative h-72 rounded-[1.75rem] bg-[#e8e8e869] p-8 backdrop-blur-[0.25rem] backdrop-filter dark:bg-[#3A3A3A66]">
                            <div class="flex h-full w-full flex-col justify-between">
                                <div class="flex flex-col">
                                    <div class="mb-4">
                                        <div class="relative text-center text-3xl font-bold text-black dark:text-white xl:text-left">{{ __('pages/public/index.65') }}</div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="relative text-center text-xl font-light text-[#acacac] xl:text-left">
                                            {{ __('pages/public/index.66') }}
                                        </div>
                                    </div>
                                </div>
                                <button
                                    class="js-modal-button relative flex h-12 w-full items-center justify-center rounded-full border-[0.1rem] cursor-pointer border-black text-[1rem] dark:border-white">
                                    <div class="relative text-xl text-black dark:text-white">
                                        {{ __('pages/public/index.64') }}
                                    </div>
                                    <div class="js-modal-content hidden">
                                        <div class="flex w-full flex-col gap-4 p-8">
                                            <img class="h-96 w-full rounded-xl object-cover" src="{{ URL::asset('assets/images/min-jpeg/trend/2.jpeg') }}" alt="2">
                                            <div class="relative text-xl font-light text-[#acacac]">
                                                {!! __('pages/public/index.179') !!}
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                        @svg('ui-set.chat', 'right-0 bottom-full translate-y-[70%] absolute w-[4.75rem] h-[4.75rem]')
                        @svg('ui-number-set.2', 'absolute h-[7.25rem] w-[7.25rem] bottom-full translate-x-[65%] translate-y-[60%] right-full -z-10 text-[#0d6efd]')
                    </div>
                    <div class="relative w-full xl:w-1/3">
                        <div class="relative h-72 rounded-[1.75rem] bg-[#e8e8e869] p-8 backdrop-blur-[0.25rem] backdrop-filter dark:bg-[#3A3A3A66]">
                            <div class="flex h-full w-full flex-col justify-between">
                                <div class="flex flex-col">
                                    <div class="mb-4">
                                        <div class="relative text-center text-3xl font-bold text-black dark:text-white xl:text-left">
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
                                    class="js-modal-button relative flex h-12 w-full items-center justify-center rounded-full border-[0.1rem] cursor-pointer border-black text-[1rem] dark:border-white">
                                    <div class="relative text-xl text-black dark:text-white">
                                        {{ __('pages/public/index.64') }}
                                    </div>
                                    <div class="js-modal-content hidden">
                                        <div class="flex w-full flex-col gap-4 p-8">
                                            <img class="h-96 w-full rounded-xl object-cover" src="{{ URL::asset('assets/images/min-jpeg/trend/3.jpeg') }}" alt="3">
                                            <div class="relative text-xl font-light text-[#acacac]">
                                                {!! __('pages/public/index.180') !!}
                                            </div>
                                        </div>
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
                        <div class="relative h-72 rounded-[1.75rem] bg-[#e8e8e869] p-8 backdrop-blur-[0.25rem] backdrop-filter dark:bg-[#3A3A3A66]">
                            <div class="flex h-full w-full flex-col justify-between">
                                <div class="flex flex-col">
                                    <div class="mb-4">
                                        <div class="relative text-center text-3xl font-bold text-black dark:text-white xl:text-left">
                                            {{ __('pages/public/index.69') }}
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="relative text-center text-xl font-light text-[#acacac] xl:text-left">
                                            {{ __('pages/public/index.70') }}
                                        </div>
                                    </div>
                                </div>
                                <button
                                    class="js-modal-button relative flex h-12 w-full items-center justify-center rounded-full border-[0.1rem] cursor-pointer border-black text-[1rem] dark:border-white">
                                    <div class="relative text-xl text-black dark:text-white">
                                        {{ __('pages/public/index.64') }}
                                    </div>
                                    <div class="js-modal-content hidden">
                                        <div class="flex w-full flex-col gap-4 p-8">
                                            <img class="h-96 w-full rounded-xl object-cover" src="{{ URL::asset('assets/images/min-jpeg/trend/4.jpeg') }}" alt="4">
                                            <div class="relative text-xl font-light text-[#acacac]">
                                                {{ __('pages/public/index.181') }}
                                                <br /><br />
                                                {{ __('pages/public/index.182') }}
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                        @svg('ui-set.paper', 'right-0 bottom-full translate-y-[70%] absolute w-[4.75rem] h-[4.75rem]')
                        @svg('ui-number-set.4', 'absolute h-[7.25rem] w-[7.25rem] bottom-full translate-x-[65%] translate-y-[60%] right-full -z-10 text-[#0d6efd]')
                    </div>
                    <div class="relative w-full xl:w-1/3">
                        <div class="relative h-72 rounded-[1.75rem] bg-[#e8e8e869] p-8 backdrop-blur-[0.25rem] backdrop-filter dark:bg-[#3A3A3A66]">
                            <div class="flex h-full w-full flex-col justify-between">
                                <div class="flex flex-col">
                                    <div class="mb-4">
                                        <div class="relative text-center text-3xl font-bold text-black dark:text-white xl:text-left">
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
                                    class="js-modal-button relative flex h-12 w-full items-center justify-center rounded-full border-[0.1rem] cursor-pointer border-black text-[1rem] dark:border-white">
                                    <div class="relative text-xl text-black dark:text-white">
                                        {{ __('pages/public/index.64') }}
                                    </div>
                                    <div class="js-modal-content hidden">
                                        <div class="flex w-full flex-col gap-4 p-8">
                                            <img class="h-96 w-full rounded-xl object-cover" src="{{ URL::asset('assets/images/min-jpeg/trend/5.jpeg') }}" alt="5">
                                            <div class="relative text-xl font-light text-[#acacac]">
                                                {{ __('pages/public/index.183') }}
                                                <br /><br />
                                                {{ __('pages/public/index.184') }}
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                        @svg('ui-set.show', 'right-0 bottom-full translate-y-[70%] absolute w-[4.75rem] h-[4.75rem]')
                        @svg('ui-number-set.5', 'absolute h-[7.25rem] w-[7.25rem] bottom-full translate-x-[65%] translate-y-[60%] right-full -z-10 text-[#0d6efd]')
                    </div>
                    <div class="relative w-full xl:w-1/3">
                        <div class="relative h-72 rounded-[1.75rem] bg-[#e8e8e869] p-8 backdrop-blur-[0.25rem] backdrop-filter dark:bg-[#3A3A3A66]">
                            <div class="flex h-full w-full flex-col justify-between">
                                <div class="flex flex-col">
                                    <div class="mb-4">
                                        <div class="relative text-center text-3xl font-bold text-black dark:text-white xl:text-left">Выгода</div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="relative text-center text-xl font-light text-[#acacac] xl:text-left">
                                            {{ __('pages/public/index.74') }}
                                        </div>
                                    </div>
                                </div>
                                <button
                                    class="js-modal-button relative flex h-12 w-full items-center justify-center rounded-full border-[0.1rem] cursor-pointer border-black text-[1rem] dark:border-white">
                                    <div class="relative text-xl text-black dark:text-white">
                                        {{ __('pages/public/index.64') }}
                                    </div>
                                    <div class="js-modal-content hidden">
                                        <div class="flex w-full flex-col gap-4 p-8">
                                            <img class="h-96 w-full rounded-xl object-cover" src="{{ URL::asset('assets/images/min-jpeg/trend/6.jpeg') }}" alt="6">
                                            <div class="relative text-xl font-light text-[#acacac]">
                                                {!! __('pages/public/index.185') !!}
                                            </div>
                                        </div>
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
                        <div class="relative h-72 rounded-[1.75rem] bg-[#e8e8e869] p-8 backdrop-blur-[0.25rem] backdrop-filter dark:bg-[#3A3A3A66]">
                            <div class="flex h-full w-full flex-col justify-between">
                                <div class="flex flex-col">
                                    <div class="mb-4">
                                        <div class="relative text-center text-3xl font-bold text-black dark:text-white xl:text-left">
                                            {{ __('pages/public/index.75') }}
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="relative text-center text-xl font-light text-[#acacac] xl:text-left">
                                            {{ __('pages/public/index.76') }}
                                        </div>
                                    </div>
                                </div>
                                <button
                                    class="js-modal-button relative flex h-12 w-full items-center justify-center rounded-full border-[0.1rem] cursor-pointer border-black text-[1rem] dark:border-white">
                                    <div class="relative text-xl text-black dark:text-white">
                                        {{ __('pages/public/index.64') }}
                                    </div>
                                    <div class="js-modal-content hidden">
                                        <div class="flex w-full flex-col gap-4 p-8">
                                            <img class="h-96 w-full rounded-xl object-cover" src="{{ URL::asset('assets/images/min-jpeg/trend/7.jpeg') }}" alt="7">
                                            <div class="relative text-xl font-light text-[#acacac]">
                                                {!! __('pages/public/index.186') !!}
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                        @svg('ui-set.tick', 'right-0 bottom-full translate-y-[70%] absolute w-[4.75rem] h-[4.75rem]')
                        @svg('ui-number-set.7', 'absolute h-[7.25rem] w-[7.25rem] bottom-full translate-x-[65%] translate-y-[60%] right-full -z-10 text-[#0d6efd]')
                    </div>
                    <div class="relative w-full xl:w-[calc(33.33333%-1rem)]">
                        <div class="relative h-72 rounded-[1.75rem] bg-[#e8e8e869] p-8 backdrop-blur-[0.25rem] backdrop-filter dark:bg-[#3A3A3A66]">
                            <div class="flex h-full w-full flex-col justify-between">
                                <div class="flex flex-col">
                                    <div class="mb-4">
                                        <div class="relative text-center text-3xl font-bold text-black dark:text-white xl:text-left">
                                            {{ __('pages/public/index.189') }}
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="relative text-center text-xl font-light text-[#acacac] xl:text-left">
                                            {{ __('pages/public/index.190') }}
                                        </div>
                                    </div>
                                </div>
                                <button
                                    class="js-modal-button relative flex h-12 w-full items-center justify-center rounded-full border-[0.1rem] cursor-pointer border-black text-[1rem] dark:border-white">
                                    <div class="relative text-xl text-black dark:text-white">
                                        {{ __('pages/public/index.64') }}
                                    </div>
                                    <div class="js-modal-content hidden">
                                        <div class="flex w-full flex-col gap-4 p-8">
                                            <img class="h-96 w-full rounded-xl object-cover" src="{{ URL::asset('assets/images/min-jpeg/trend/8.jpeg') }}" alt="8">
                                            <div class="relative text-xl font-light text-[#acacac]">
                                                {!! __('pages/public/index.187') !!}
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                        @svg('ui-set.stars', 'right-0 bottom-full translate-y-[70%] absolute w-[4.75rem] h-[4.75rem]')
                        @svg('ui-number-set.8', 'absolute h-[7.25rem] w-[7.25rem] bottom-full translate-x-[65%] translate-y-[60%] right-full -z-10 text-[#0d6efd]')
                    </div>
                    <div class="relative w-full xl:w-[calc(33.33333%-1rem)]">
                        <div class="relative h-72 rounded-[1.75rem] bg-[#e8e8e869] p-8 backdrop-blur-[0.25rem] backdrop-filter dark:bg-[#3A3A3A66]">
                            <div class="flex h-full w-full flex-col justify-between">
                                <div class="flex flex-col">
                                    <div class="mb-4">
                                        <div class="relative text-center text-3xl font-bold text-black dark:text-white xl:text-left">
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
                                    class="js-modal-button relative flex h-12 w-full items-center justify-center rounded-full border-[0.1rem] cursor-pointer border-black text-[1rem] dark:border-white">
                                    <div class="relative text-xl text-black dark:text-white">
                                        {{ __('pages/public/index.64') }}
                                    </div>
                                    <div class="js-modal-content hidden">
                                        <div class="flex w-full flex-col gap-4 p-8">
                                            <img class="h-96 w-full rounded-xl object-cover" src="{{ URL::asset('assets/images/min-jpeg/trend/9.jpeg') }}" alt="9">
                                            <div class="relative text-xl font-light text-[#acacac]">
                                                {{ __('pages/public/index.188') }}
                                            </div>
                                        </div>
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
