<div class="bg-knight">
    <div class="relative z-10 m-auto w-full min-w-96 max-w-96 xl:max-w-[75rem]">
        <div class="m-auto w-full xl:max-w-[58.625rem]">
            <div class="relative flex h-fit w-full flex-col overflow-hidden rounded-3xl bg-white p-8 dark:bg-black">
                <x-loader.compiled :uid="uniqid()" attribute="payment" size="2.5rem" borderRadius="2.5rem" />
                <div class="mb-8 flex flex-row justify-between">
                    <img class="h-12 w-12 rounded-full object-cover" src="{{ URL::asset('favicon.ico') }}" alt="logo">
                    <x-tools-stack.compiled :uid="uniqid()" />
                </div>
                <div class="flex flex-col gap-4 xl:flex-row">
                    <div class="flex w-full flex-col xl:w-1/2">
                        <div class="text-[2rem] text-black dark:text-white">
                            {{ __('pages/intermediate/payment.1') }}
                        </div>
                        <div class="text-base text-[#666666]">
                            {{ __('pages/intermediate/payment.2') }}
                            -
                            <b>{{ __('pages/intermediate/payment.3') }}</b>
                        </div>
                        <div class="text-base text-[#666666]">
                            {{ __('pages/intermediate/payment.4') }}
                        </div>
                    </div>
                    <div class="flex flex-col gap-4 xl:w-1/2">
                        <x-card-credentials-form.compiled :uid="uniqid()" />
                    </div>
                </div>
            </div>
            {{-- <x-page-suggestions.compiled :uid="uniqid()" /> --}}
        </div>
    </div>
</div>
