<div class="bg-knight">
    <div class="relative z-10 m-auto w-full min-w-96 max-w-96 xl:max-w-[75rem]">
        <div class="m-auto w-full xl:max-w-[58.625rem]">
            <div class="relative flex h-fit w-full flex-col overflow-hidden rounded-3xl bg-white p-8 dark:bg-black">
                <x-loader.compiled :uid="uniqid()" attribute="store" size="2.5rem" borderRadius="2.5rem" />
                <div class="mb-8 flex flex-row justify-between">
                    <img class="h-12 w-12 rounded-full object-cover" src="{{ URL::asset('favicon.ico') }}" alt="logo">
                    <x-tools-stack.compiled :uid="uniqid()" />
                </div>
                <div class="flex flex-col xl:flex-row">
                    <form id="js-store-form" class="flex w-full flex-col gap-4 xl:flex-row">
                        @csrf
                        <div class="mb-8 flex w-full flex-col xl:w-1/2">
                            <div class="text-[2rem] text-black dark:text-white">
                                {{ __('pages/auth/register.1') }}
                            </div>
                            <div class="text-base text-[#666666]">
                                {{ __('pages/auth/register.2') }}
                            </div>
                        </div>
                        <div class="flex flex-col gap-4 xl:w-1/2">
                            <div class="flex w-full flex-col gap-4" id="js-next-step">
                                <x-inputs.input.compiled :uid="uniqid()" :inscription="__('pages/auth/register.3')" attribute="name" />
                            </div>
                            <x-submit-button.compiled :uid="uniqid()" :inscription="__('pages/auth/register.4')" iconName="arrow-forward" />
                            <div class="flex flex-col gap-2">
                                <div class="text-base text-[#666666]">
                                   {{ __('pages/auth/register.5') }}
                                </div>
                                <div class="flex flex-col xl:flex-row gap-4">
                                    <x-telegram-button.compiled :uid="uniqid()" :url="route('auth.login.telegram')" :title="__('app.3')" icon="logos/telegram" target="" />
                                    <x-button.compiled :uid="uniqid()" :url="route('auth.login.google')" :title="__('app.2')" icon="logos/google" target="" />
                                </div>
                            </div>
                            <x-checkbox.compiled :uid="uniqid()" :title="__('app.4')" checked="false" />
                            <x-consent.compiled :uid="uniqid()" aclass="text-base text-[#666666]" />
                        </div>
                    </form>
                </div>
            </div>
            <x-page-suggestions.compiled :uid="uniqid()" />
        </div>
    </div>
</div>
