<div class="bg-knight">
    <div class="min-w-96 max-w-96 relative z-10 m-auto w-full xl:max-w-[75rem]">
        <div class="m-auto w-full xl:max-w-[58.625rem]">
            <div class="relative flex h-fit w-full flex-col overflow-hidden rounded-3xl bg-white p-8 dark:bg-black">
                <x-loader.compiled :uid="uniqid()" attribute="forgot-password" />
                <div class="mb-8 flex flex-row justify-between">
                    <img class="h-12 w-12 rounded-full object-cover" src="{{ URL::asset('favicon.ico') }}" alt="logo">
                    <x-tools-stack.compiled :uid="uniqid()" />
                </div>
                <div class="flex flex-col xl:flex-row">
                    <div class="mb-8 flex w-full flex-col xl:w-1/2">
                        <div class="text-[2rem] text-black dark:text-white">
                            {{ __('pages/public/forgot-password.1') }}
                        </div>
                        <div class="text-base text-[#666666]">
                            {{ __('pages/public/forgot-password.2') }}
                        </div>
                    </div>
                    <form id="js-forgot-password-form" class="flex w-full flex-col gap-4 xl:w-1/2">
                        @csrf
                        <div class="flex flex-col gap-4">
                            <x-inputs.input.compiled :uid="uniqid()" :inscription="__('pages/public/forgot-password.5')" :value="auth()?->user()?->email" attribute="email" />
                            <x-submit-button.compiled :uid="uniqid()" :inscription="__('pages/public/forgot-password.3')" iconName="arrow-forward" />
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
            <x-page-suggestions.compiled :uid="uniqid()" />
        </div>
    </div>
</div>
