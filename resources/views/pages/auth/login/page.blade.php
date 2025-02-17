<div class="bg-knight">
    <div class="relative z-10 m-auto w-full min-w-96 max-w-96 xl:max-w-[75rem]">
        <div class="m-auto w-full xl:max-w-[58.625rem]">
            <div class="relative flex h-fit w-full flex-col overflow-hidden rounded-3xl bg-white p-8 dark:bg-black">
                <x-loader.compiled :uid="uniqid()" attribute="authenticate" size="2.5rem" borderRadius="2.5rem" />
                <div class="mb-8 flex flex-row justify-between">
                    <img class="h-12 w-12 rounded-full object-cover" src="{{ URL::asset('favicon.ico') }}" alt="logo">
                    <x-tools-stack.compiled :uid="uniqid()" />
                </div>
                <div class="flex flex-col xl:flex-row">
                    <div class="mb-8 flex w-full flex-col xl:w-1/2">
                        <div class="text-[2rem] text-black dark:text-white">
                            {{ __('pages/auth/login.1') }}
                        </div>
                        <div class="text-base text-[#666666]">
                            {{ __('pages/auth/login.2') }}
                        </div>
                    </div>
                    <form id="js-authenticate-form" class="flex w-full flex-col gap-4 xl:w-1/2">
                        @csrf
                        <div class="flex flex-col gap-4">
                            <x-inputs.input.compiled :uid="uniqid()" :inscription="__('pages/auth/login.3')" attribute="email" />
                            <x-inputs.password-input.compiled :uid="uniqid()" :inscription="__('pages/auth/login.4')" attribute="password" />
                            <x-submit-button.compiled :uid="uniqid()" :inscription="__('pages/auth/login.1')" iconName="arrow-forward" />
                            <div class="flex flex-col gap-2">
                                <div class="text-base text-[#666666]">
                                    {{ __('pages/auth/login.6') }}
                                </div>
                                <div class="flex flex-col gap-4 xl:flex-row">
                                    <x-telegram-button.compiled :uid="uniqid()" :url="route('auth.login.telegram')" :title="__('app.3')" icon="logos/telegram" target="" />
                                    <x-button.compiled :uid="uniqid()" :url="route('auth.login.google')" :title="__('app.2')" icon="logos/google" target="" />
                                </div>
                            </div>
                            <x-checkbox.compiled :uid="uniqid()" :title="__('app.4')" checked="true" />
                        </div>
                    </form>
                </div>
            </div>
            <x-page-suggestions.compiled :uid="uniqid()" />
        </div>
    </div>
</div>
