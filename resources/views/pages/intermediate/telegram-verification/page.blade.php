<div id="js-telegram-verification-container" class="bg-knight" data-uuid="{{ auth()->user()->uuid }}">
    <div class="relative z-10 m-auto w-full min-w-96 max-w-96 xl:max-w-[75rem]">
        <div class="m-auto w-full xl:max-w-[58.625rem]">
            <div class="relative flex h-fit w-full flex-col overflow-visible rounded-3xl bg-white p-8 dark:bg-black">
                <x-loader.compiled :uid="uniqid()" attribute="telegram-verification" size="2.5rem" borderRadius="2.5rem" />
                <div class="mb-8 flex flex-row justify-between">
                    <img class="h-12 w-12 rounded-full object-cover" src="{{ URL::asset('favicon.ico') }}" alt="logo">
                    <x-tools-stack.compiled :uid="uniqid()" />
                </div>
                <div class="flex flex-col xl:flex-row">
                    <div class="mb-8 flex w-full flex-col xl:w-1/2">
                        <div class="text-[2rem] text-black dark:text-white">
                            {{ __('pages/intermediate/telegram-verification.1') }}
                        </div>
                        <div class="text-base text-[#666666]">
                            {{ __('pages/intermediate/telegram-verification.2') }}<br />
                            <u id="js-delete-registration" data-uuid="{{ auth()->user()->uuid }}"
                                data-message="{{ __('You confirm the deletion of registration. Please note that this process cannot be undone.') }}"
                                class="cursor-pointer">{{ __('pages/intermediate/telegram-verification.3') }}</u>
                        </div>
                    </div>
                    <div class="relative flex w-full flex-col xl:w-1/2">
                        <div class="flex flex-row items-center gap-4">
                            @svg('telegram-arrow', 'absolute top-1/2 -translate-y-1/2 right-full mr-4 [rotate:32deg] w-auto h-16')
                            {{ $tvc->generateQRCode($link, 'relative min-h-20 min-w-20 h-20 w-20 rounded-md border-[0.225rem] border-solid border-white xl:min-w-28 xl:min-h-28') }}
                            <div class="text-base text-black dark:text-white">
                                <span class="text-base text-[#666666]">{{ __('pages/intermediate/telegram-verification.4') }}</span>
                                <strong>&nbsp;{{ __('pages/intermediate/telegram-verification.5') }}</strong>
                                <span class="text-base text-[#666666]">{{ __('pages/intermediate/telegram-verification.6') }}</span>
                            </div>
                        </div>
                        <a href="{{ $link }}"
                            class="group/button relative mt-4 flex h-16 w-full cursor-pointer items-center justify-center rounded-lg bg-[#0d6efde6] text-base text-white [transition:all_0.225s_ease-in-out] hover:scale-[1.025] hover:bg-[#0d6efd]">
                            {{ __('pages/intermediate/telegram-verification.7') }}
                            @svg('arrow-forward', 'w-4 h-4 ml-1 text-white group-hover/button:ml-2')
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
