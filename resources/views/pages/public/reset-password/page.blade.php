<div class="bg-knight">
    <div class="min-w-96 max-w-96 relative z-10 m-auto w-full xl:max-w-[1200px]">
        <div class="m-auto min-h-[384px] w-full max-w-[938px]">
            <div class="relative flex h-fit w-full flex-col overflow-hidden rounded-3xl bg-white p-8 dark:bg-black">
                <x-loader.compiled :uid="uniqid()" attribute="reset-password" />
                <div class="mb-8 flex flex-row justify-between">
                    <img class="h-12 w-12 rounded-full object-cover" src="{{ URL::asset('favicon.ico') }}" alt="logo">
                    <x-tools-stack.compiled :uid="uniqid()" />
                </div>
                <div class="flex flex-col xl:flex-row">
                    <div class="mb-8 flex w-full flex-col xl:w-1/2">
                        <div class="text-[2rem] text-black dark:text-white">
                            {{ __('pages/public/reset-password.1') }}
                        </div>
                        <div class="text-base text-[#666666]">
                            {{ __('pages/public/reset-password.2') }}
                        </div>
                    </div>
                    <form id="js-reset-password-form" class="flex w-full flex-col gap-4 xl:w-1/2">
                        @csrf
                        <input type="hidden" name="email" value="{{ request()->get('email') }}">
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="flex flex-col gap-4">
                            <x-inputs.password-input.compiled :uid="uniqid()" :inscription="__('pages/public/reset-password.3')" attribute="password" />
                            <x-inputs.password-input.compiled :uid="uniqid()" :inscription="__('pages/public/reset-password.4')" attribute="password_confirmation" />
                            <button id="js-submit-button" type="submit"
                                class="group/button relative flex h-16 w-full cursor-pointer items-center justify-center rounded-lg bg-[#0d6efde6] text-base text-white [transition:all_0.225s_ease-in-out] hover:scale-[1.025] hover:bg-[#0d6efd]">
                                {{ __('pages/public/reset-password.5') }}
                                @svg('arrow-forward', 'w-4 h-4 ml-1 text-white group-hover/button:ml-2')
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <x-page-suggestions.compiled :uid="uniqid()" />
        </div>
    </div>
</div>
