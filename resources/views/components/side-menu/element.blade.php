<xside-menu class="component side-container" data-uid="{{ $uid }}" data-js-initialized="false" data-attribute="{{ $attribute }}">
    <div id="js-{{ $attribute }}-header" class="ml-4 flex h-fit w-fit flex-col items-center gap-4">
        <div class="icon icon_2.5rem icon_grey icon_p7 icon_radius-0.5rem icon_hover-v2">
            @svg('open-in-full', 'w-full h-full text-[#7f7f7f]', ['id' => "js-$attribute-open-in-full-button"])
            @svg('close-fullscreen', 'w-full h-full text-[#7f7f7f] hidden', ['id' => "js-$attribute-close-fullscreen-button"])
            <input id="js-{{ $attribute }}-input" class="!absolute !left-0 !top-0 !m-0 !h-full !w-full !cursor-pointer !outline-none [all:unset]" type="checkbox">
        </div>
        <img class="icon icon_2.5rem icon_radius-full" src="data:image/png;base64,{{ app('App\Services\BladeServices')->getImage() }}">
        <x-theme-switcher.compiled :$uid attribute="switch-theme" />
        <x-language-switcher.compiled :$uid />
    </div>

    <div class="h-4"></div>

    <a class="{{ $route === 'private.dashboard' ? 'active' : '' }} group mx-4 flex w-full min-w-[14em] flex-row items-center gap-4" href="{{ route('private.dashboard') }}">
        @svg('home', 'icon_2.5rem icon_grey icon_p7 icon_radius-0.5rem icon_hover-v2 group-[.active]:!text-white group-[.active]:!bg-[#0d6efd]')
        <div
            class="text-base font-medium text-[#acacac] transition-colors duration-[.225s] ease-in-out hover:text-[#666666] group-[.active]:text-[#0d6efd] dark:text-[#444444] dark:hover:text-[#666666]">
            {{ __('components/side-menu.1') }}
        </div>
    </a>

    <a class="{{ $route === 'private.profile' ? 'active' : '' }} group mx-4 flex w-full min-w-[14em] flex-row items-center gap-4" href="{{ route('private.profile') }}">
        @svg('user-manage', 'icon_2.5rem icon_grey icon_p7 icon_radius-0.5rem icon_hover-v2 group-[.active]:!text-white group-[.active]:!bg-[#0d6efd]')
        <div
            class="text-base font-medium text-[#acacac] transition-colors duration-[.225s] ease-in-out hover:text-[#666666] group-[.active]:text-[#0d6efd] dark:text-[#444444] dark:hover:text-[#666666]">
            {{ __('components/side-menu.2') }}
        </div>
    </a>

    <a class="{{ $route === 'private.transactions' ? 'active' : '' }} group mx-4 flex w-full min-w-[14em] flex-row items-center gap-4" href="{{ route('private.transactions') }}">
        @svg('receipt', 'icon_2.5rem icon_grey icon_p7 icon_radius-0.5rem icon_hover-v2 group-[.active]:!text-white group-[.active]:!bg-[#0d6efd]')
        <div
            class="text-base font-medium text-[#acacac] transition-colors duration-[.225s] ease-in-out hover:text-[#666666] group-[.active]:text-[#0d6efd] dark:text-[#444444] dark:hover:text-[#666666]">
            {{ __('components/side-menu.3') }}
        </div>
    </a>

    <a class="{{ $route === 'private.referral.transactions' ? 'active' : '' }} group mx-4 flex w-full min-w-[14em] flex-row items-center gap-4" href="{{ route('private.referral.transactions') }}">
        @svg('link', 'icon_2.5rem icon_grey icon_p7 icon_radius-0.5rem icon_hover-v2 group-[.active]:!text-white group-[.active]:!bg-[#0d6efd]')
        <div
            class="text-base font-medium text-[#acacac] transition-colors duration-[.225s] ease-in-out hover:text-[#666666] group-[.active]:text-[#0d6efd] dark:text-[#444444] dark:hover:text-[#666666]">
            {{ __('components/side-menu.4') }}
        </div>
    </a>

    <div class="mx-4 flex w-full min-w-[14em] flex-row items-center gap-4">
        <x-logout-button.compiled :$uid attribute="user-logout" />
        <div id="js-logout-trigger"
            class="cursor-pointer text-base font-medium text-[#acacac] transition-colors duration-[.225s] ease-in-out hover:text-[#666666] dark:text-[#444444] dark:hover:text-[#666666]">
            {{ __('components/side-menu.5') }}
        </div>
    </div>

    <div class="h-4"></div>

    <a class="mx-4 flex w-full min-w-[14em] flex-row items-center gap-4" href="{{ route('public.index') }}">
        @svg('verified', 'icon_2.5rem icon_grey icon_p7 icon_radius-0.5rem icon_hover-v2')
        <div class="text-base font-medium text-[#acacac] transition-colors duration-[.225s] ease-in-out hover:text-[#666666] dark:text-[#444444] dark:hover:text-[#666666]">
            {{ __('components/side-menu.6') }}</div>
    </a>

    <a class="mx-4 flex w-full min-w-[14em] flex-row items-center gap-4" href="{{ route('support') }}">
        @svg('support-agent', 'icon_2.5rem icon_grey icon_p7 icon_radius-0.5rem icon_hover-v2')
        <div class="text-base font-medium text-[#acacac] transition-colors duration-[.225s] ease-in-out hover:text-[#666666] dark:text-[#444444] dark:hover:text-[#666666]">
            {{ __('components/side-menu.7') }}</div>
    </a>

    <div id="js-show-docs" class="mx-4 flex w-full min-w-[14em] cursor-pointer flex-col gap-2">
        <div class="flex w-full flex-row items-center gap-4">
            @svg('docs', 'icon_2.5rem icon_grey icon_p7 icon_radius-0.5rem icon_hover-v2 !h-full transition-all duration-[525ms] ease-[cubic-bezier(1, .47, .2, .85)]')
            <div class="flex w-full flex-col">
                <div class="text-base font-medium text-[#acacac] transition-colors duration-[.225s] ease-in-out hover:text-[#666666] dark:text-[#444444] dark:hover:text-[#666666]">
                    {{ __('components/side-menu.8') }}
                </div>
                <div id="js-docs-content" class="ease-[cubic-bezier(1, .47, .2, .85)] ml-2 flex h-0 w-full flex-col justify-center gap-1 overflow-hidden transition-all duration-[525ms]">
                    <a class="text-[0.8rem] font-medium text-[#acacac] transition-colors duration-[.225s] ease-in-out hover:text-[#666666] dark:text-[#444444] dark:hover:text-[#666666]"
                        target="_blank" href="{{ route('public.public-offer') }}">
                        {{ __('components/side-menu.9') }}
                    </a>
                    <a class="text-[0.8rem] font-medium text-[#acacac] transition-colors duration-[.225s] ease-in-out hover:text-[#666666] dark:text-[#444444] dark:hover:text-[#666666]"
                        target="_blank" href="{{ route('public.privacy') }}">
                        {{ __('components/side-menu.10') }}
                    </a>
                    <a class="text-[0.8rem] font-medium text-[#acacac] transition-colors duration-[.225s] ease-in-out hover:text-[#666666] dark:text-[#444444] dark:hover:text-[#666666]"
                        target="_blank" href="{{ route('public.terms') }}">
                        {{ __('components/side-menu.11') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

</xside-menu>
