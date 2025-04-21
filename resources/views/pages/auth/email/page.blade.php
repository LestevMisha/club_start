<div class="bg-knight">
    <div class="relative z-10 m-auto w-full min-w-96 max-w-96 xl:max-w-[75rem]">
        <div class="m-auto w-full xl:max-w-[58.625rem]">
            <div class="relative flex h-fit w-full flex-col overflow-hidden rounded-3xl bg-white p-8 dark:bg-black">
                <x-loader.compiled :uid="uniqid()" attribute="verify-email" size="2.5rem" borderRadius="2.5rem" />
                <div class="mb-8 flex flex-row justify-between">
                    <img class="h-12 w-12 rounded-full object-cover" src="{{ URL::asset('favicon.ico') }}" alt="logo">
                    <x-tools-stack.compiled :uid="uniqid()" />
                </div>
                <div class="flex flex-col xl:flex-row">
                    <div class="mb-8 flex w-full flex-col xl:w-1/2">
                        <div class="text-[2rem] text-black dark:text-white">
                            {{ __('pages/auth/email.1') }}
                        </div>
                        <div class="text-base text-[#666666]">
                            {{ __('pages/auth/email.2') }}
                        </div>
                    </div>
                    <form id="js-verify-email-form" class="flex w-full flex-col gap-4 xl:w-1/2" action="{{ url()->full() }}">
                        @csrf
                        <div class="flex flex-col gap-4">
                            <x-inputs.input.compiled :uid="uniqid()" :inscription="__('pages/auth/email.3')" attribute="email" />
                            <x-submit-button.compiled :uid="uniqid()" :inscription="__('pages/auth/email.4')" iconName="arrow-forward" />
                            <div class="flex flex-row gap-1">
                                <span class="text-[0.8rem] font-normal text-[#acacac] dark:text-[#666666]">
                                    {{ __('app.1') }}
                                </span>
                                <a class="text-[0.8rem] font-normal text-[#acacac] underline dark:text-[#666666]" href="https://mail.ru/" target="_blank">mail.ru</a>
                                <span class="text-[0.8rem] font-normal text-[#acacac] dark:text-[#666666]">{{ __('app.5') }}</span>
                                <a class="text-[0.8rem] font-normal text-[#acacac] underline dark:text-[#666666]" href="https://gmail.com/" target="_blank">gmail.com</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
