<div class="cell mob flex w-1/2 flex-col gap-4">


    {{-- General Information --}}
    <div class="dark:text-[#acacac] h-fit font-semibold text-[#666666]"> {{ __('pages/private/profile.23') }}</div>
    <x-field.compiled :uid="uniqid()" :inscription="__('pages/private/profile.21')" attribute="current-name" :value="auth()->user()->name" />
    <x-inputs.copy-input.compiled :uid="uniqid()" :inscription="__('pages/private/profile.22')" attribute="current-telegram" :value="'@' . auth()->user()->telegram_username" />


    {{-- Image Settings --}}
    <div class="dark:text-[#acacac] h-fit font-semibold text-[#666666]"> {{ __('pages/private/profile.1') }}</div>
    <form class="flex flex-col gap-2" id="js-update-image-form">
        <x-inputs.submit-input.compiled :uid="uniqid()" :inscription="__('pages/private/profile.2')" attribute="image-index" />
        <div class="dark:text-[#666666] text-[0.8rem] font-normal text-[#acacac]">
            {{ __('pages/private/profile.9') }}
        </div>
    </form>


    {{-- Passsword Settings --}}
    <div class="dark:text-[#acacac] h-fit font-semibold text-[#666666]"> {{ __('pages/private/profile.8') }}</div>
    <x-button.compiled :uid="uniqid()" :title="__('pages/private/profile.3')" :url="route('public.password.forgot')" />


    {{-- Autopayment Setting --}}
    <div class="dark:text-[#acacac] h-fit font-semibold text-[#666666]"> {{ __('pages/private/profile.4') }}</div>
    <div class="flex flex-col gap-2">
        <x-button.compiled :uid="uniqid()" :title="__('pages/private/profile.6')" :url="config('services.telegram.bot_url') . '?start=' . auth()->user()->uuid . '_' . 'changeEmail'" />
        <div class="dark:text-[#666666] text-[0.8rem] font-normal text-[#acacac]">
            {{ __('pages/private/profile.5') }}
        </div>
    </div>


    {{-- Email Setting --}}
    <div class="dark:text-[#acacac] h-fit font-semibold text-[#666666]"> {{ __('pages/private/profile.7') }}</div>
    <x-field.compiled :uid="uniqid()" :inscription="__('pages/private/profile.17')" attribute="current-email" :value="auth()->user()->email" />
    <x-field.compiled :uid="uniqid()" :inscription="__('pages/private/profile.11')" attribute="email-verified" :value="__($isVerifiedLabel)" />
    @if (!$isVerified)
        <div class="flex flex-col gap-2">
            <x-button.compiled :uid="uniqid()" attribute="emailVerify" :title="__('pages/private/profile.14')" />
            <div class="flex flex-row gap-1">
                <span class="dark:text-[#666666] text-[0.8rem] font-normal text-[#acacac]">
                    {{ __('pages/private/profile.20') }}
                </span>
                <a class="dark:text-[#666666] text-[0.8rem] font-normal text-[#acacac] underline" href="https://mail.ru/" target="_blank">mail.ru</a>
                <span class="dark:text-[#666666] text-[0.8rem] font-normal text-[#acacac]">{{ __('pages/private/profile.24') }}</span>
                <a class="dark:text-[#666666] text-[0.8rem] font-normal text-[#acacac] underline" href="https://gmail.com/" target="_blank">gmail.com</a>
            </div>
        </div>
    @endif
    <div class="flex flex-col gap-2">
        <x-button.compiled :uid="uniqid()" :title="__('pages/private/profile.16')" :url="app('App\Services\BladeServices')->getTelegramChangeEmailLink()" />
        <div class="dark:text-[#666666] text-[0.8rem] font-normal text-[#acacac]">
            {{ __('pages/private/profile.15') }}
        </div>
    </div>


</div>
