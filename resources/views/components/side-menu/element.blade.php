<xside-menu {{ $attributes->merge(['class' => 'component side-container']) }} data-uid="{{ $uid }}" data-js-initialized="false" data-attribute="{{ $attribute }}">
    <div id="js-{{ $attribute }}-header" class="sticky bottom-16 ml-4 flex h-fit w-fit flex-col items-center gap-4">
        <div class="icon icon_2.5rem icon_grey icon_p7 icon_radius-0.5rem icon_hover-v2 sticky top-0">
            @svg('open-in-full', 'w-full h-full text-[#7f7f7f]', ['id' => "js-$attribute-open-in-full-button"])
            @svg('close-fullscreen', 'w-full h-full text-[#7f7f7f] hidden', ['id' => "js-$attribute-close-fullscreen-button"])
            <input id="js-{{ $attribute }}-input" class="absolute! left-0! top-0! m-0! h-full! w-full! cursor-pointer! outline-hidden! [all:unset]" type="checkbox">
        </div>
        <img class="icon icon_2.5rem icon_radius-0.5rem sticky top-0 p-[0.03rem]" src="data:image/png;base64,{{ app(\App\Services\TelegramServices::class)->_getImage() }}">
        <x-theme-switcher.compiled :$uid attribute="switch-theme" class="sticky top-0" />
        <x-language-switcher.compiled :$uid class="sticky top-0" />
    </div>

    <div class="mx-4 h-[0.1rem] min-h-[0.1rem] bg-[#80808026]"></div>

    <a class="{{ $route === 'private.dashboard' ? 'active' : '' }} group pointer-events-none mx-4 flex w-full min-w-[14em] cursor-default flex-row items-center gap-4" href="{{ route('private.dashboard') }}">
        @svg('home', 'icon_2.5rem icon_grey icon_p7 icon_radius-0.5rem icon_hover-v2 group-[.active]:text-white! group-[.active]:bg-[#0d6efd]! cursor-pointer pointer-events-auto  group-[.active]:pointer-events-none')
        <div class="pointer-events-auto cursor-pointer text-base font-medium text-[#acacac] transition-colors duration-[.225s] ease-in-out hover:text-[#666666] group-[.active]:text-[#0d6efd] dark:text-[#444444] dark:hover:text-[#666666]">
            {{ __('components/side-menu.1') }}
        </div>
    </a>

    <a class="{{ $route === 'private.profile' ? 'active' : '' }} group pointer-events-none mx-4 flex w-full min-w-[14em] cursor-default flex-row items-center gap-4" href="{{ route('private.profile') }}">
        @svg('user-manage', 'icon_2.5rem icon_grey icon_p7 icon_radius-0.5rem icon_hover-v2 group-[.active]:text-white! group-[.active]:bg-[#0d6efd]! cursor-pointer pointer-events-auto  group-[.active]:pointer-events-none')
        <div class="pointer-events-auto cursor-pointer text-base font-medium text-[#acacac] transition-colors duration-[.225s] ease-in-out hover:text-[#666666] group-[.active]:text-[#0d6efd] dark:text-[#444444] dark:hover:text-[#666666]">
            {{ __('components/side-menu.2') }}
        </div>
    </a>


    <a class="{{ $route === 'private.referred.users' ? 'active' : '' }} group pointer-events-none mx-4 flex w-full min-w-[14em] cursor-default flex-row items-center gap-4" href="{{ route('private.referred.users') }}">
        @svg('link', 'icon_2.5rem icon_grey icon_p7 icon_radius-0.5rem icon_hover-v2 group-[.active]:text-white! group-[.active]:bg-[#0d6efd]! cursor-pointer pointer-events-auto  group-[.active]:pointer-events-none')
        <div class="pointer-events-auto cursor-pointer text-base font-medium text-[#acacac] transition-colors duration-[.225s] ease-in-out hover:text-[#666666] group-[.active]:text-[#0d6efd] dark:text-[#444444] dark:hover:text-[#666666]">
            {{ __('components/side-menu.4') }}
        </div>
    </a>

    <a class="{{ $route === 'private.payments' ? 'active' : '' }} group pointer-events-none mx-4 flex w-full min-w-[14em] cursor-default flex-row items-center gap-4" href="{{ route('private.payments') }}">
        @svg('receipt', 'icon_2.5rem icon_grey icon_p7 icon_radius-0.5rem icon_hover-v2 group-[.active]:text-white! group-[.active]:bg-[#0d6efd]! cursor-pointer pointer-events-auto  group-[.active]:pointer-events-none')
        <div class="pointer-events-auto cursor-pointer text-base font-medium text-[#acacac] transition-colors duration-[.225s] ease-in-out hover:text-[#666666] group-[.active]:text-[#0d6efd] dark:text-[#444444] dark:hover:text-[#666666]">
            {{ __('components/side-menu.3') }}
        </div>
    </a>

    <div class="mx-4 flex w-full min-w-[14em] flex-row items-center gap-4">
        <x-logout-button.compiled :$uid attribute="user-logout" />
        <div id="js-logout-trigger" class="cursor-pointer text-base font-medium text-[#acacac] transition-colors duration-[.225s] ease-in-out hover:text-[#666666] dark:text-[#444444] dark:hover:text-[#666666]">
            {{ __('components/side-menu.5') }}
        </div>
    </div>

    <div class="mx-4 h-[0.1rem] min-h-[0.1rem] bg-[#80808026]"></div>

    <a class="mx-4 flex w-full min-w-[14em] flex-row items-center gap-4" href="{{ route('public.index') }}">
        @svg('important-devices', 'icon_2.5rem icon_grey icon_p7 icon_radius-0.5rem icon_hover-v2')
        <div class="text-base font-medium text-[#acacac] transition-colors duration-[.225s] ease-in-out hover:text-[#666666] dark:text-[#444444] dark:hover:text-[#666666]">
            {{ __('components/side-menu.6') }}</div>
    </a>

    <a class="mx-4 flex w-full min-w-[14em] flex-row items-center gap-4" target="_blank" href="https://t.me/ClubStarthelp_bot">
        @svg('help', 'icon_2.5rem icon_grey icon_p7 icon_radius-0.5rem icon_hover-v2')
        <div class="text-base font-medium text-[#acacac] transition-colors duration-[.225s] ease-in-out hover:text-[#666666] dark:text-[#444444] dark:hover:text-[#666666]">
            {{ __('components/side-menu.7') }}</div>
    </a>

    <div id="js-show-docs" class="mx-4 flex w-full min-w-[14em] cursor-pointer flex-col gap-2">
        <div class="flex w-full flex-row items-center gap-4">
            @svg('find-in-page', 'icon_2.5rem icon_grey icon_p7 icon_radius-0.5rem icon_hover-v2 h-full! transition-all duration-[525ms] ease-[cubic-bezier(1, .47, .2, .85)]')
            <div class="flex w-full flex-col">
                <div class="text-base font-medium text-[#acacac] transition-colors duration-[.225s] ease-in-out hover:text-[#666666] dark:text-[#444444] dark:hover:text-[#666666]">
                    {{ __('components/side-menu.8') }}
                </div>
                <div id="js-docs-content" class="ease-[cubic-bezier(1, .47, .2, .85)] ml-2 flex h-auto max-h-0 w-full flex-col justify-center gap-2 overflow-hidden transition-all duration-[525ms]">
                    <a class="mt-2 text-[0.8rem] font-medium leading-4 text-[#acacac] transition-colors duration-[.225s] ease-in-out hover:text-[#666666] dark:text-[#444444] dark:hover:text-[#666666]" target="_blank" href="{{ route('public.public-offer') }}">
                        {{ __('components/side-menu.9') }}
                    </a>
                    <a class="text-[0.8rem] font-medium leading-4 text-[#acacac] transition-colors duration-[.225s] ease-in-out hover:text-[#666666] dark:text-[#444444] dark:hover:text-[#666666]" target="_blank" href="{{ route('public.privacy') }}">
                        {{ __('components/side-menu.10') }}
                    </a>
                    <a class="text-[0.8rem] font-medium leading-4 text-[#acacac] transition-colors duration-[.225s] ease-in-out hover:text-[#666666] dark:text-[#444444] dark:hover:text-[#666666]" target="_blank" href="{{ route('public.terms') }}">
                        {{ __('components/side-menu.11') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

</xside-menu>
