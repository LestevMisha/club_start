<div class="grid" id="flexGridify" class="flexGridify flexGridify-init">

    <div class="grid-item">
        <div class="cell flex h-full w-full flex-col">
            <div class="align-center mb-4 flex flex-row justify-between">
                <div class="h-fit font-semibold text-[#666666] dark:text-[#acacac]"> {{ __('pages/private/dashboard.1') }}</div>
                <div class="js-drag-handler">
                    @svg('drag-pan', 'icon_grey icon_2rem icon_p6 icon_radius-0.5rem cursor-move')
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-2">
                    <x-inputs.copy-input.compiled :uid="uniqid()" :inscription="__('pages/private/dashboard.19')" attribute="klub-link" value="https://t.me/+UChE4Obnlq9iNmFh" color="orange" />
                    <div class="text-[0.8rem] font-normal text-[#acacac] dark:text-[#666666]">
                        {{ __('pages/private/dashboard.2') }}
                    </div>
                    <div class="text-[0.8rem] font-normal text-[#acacac] dark:text-[#666666]">
                        {{ __('pages/private/dashboard.3') }}
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <x-button.compiled :uid="uniqid()" :title="__('pages/private/dashboard.4')" url="https://shkitov.com/" />
                    <div class="text-[0.8rem] font-normal text-[#acacac] dark:text-[#666666]">
                        {{ __('pages/private/dashboard.5') }}
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <x-button.compiled :uid="uniqid()" :title="__('pages/private/dashboard.6')" :url="app('App\Services\BladeServices')->getTelegramLink('information')" />
                    <div class="text-[0.8rem] font-normal text-[#acacac] dark:text-[#666666]">
                        {{ __('pages/private/dashboard.7') }}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="grid-item">
        <div class="cell flex h-full w-full flex-col">
            <div class="align-center mb-4 flex flex-row justify-between">
                <div class="h-fit font-semibold text-[#666666] dark:text-[#acacac]">{{ __('pages/private/dashboard.28') }}</div>
                <div class="js-drag-handler">
                    @svg('drag-pan', 'icon_grey icon_2rem icon_p6 icon_radius-0.5rem cursor-move')
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-2">
                    <?php $url = url('/') . '?transaction_referred_by_id=' . Auth::user()->referral_uuid; ?>
                    <x-inputs.copy-input.compiled :uid="uniqid()" :inscription="__('pages/private/dashboard.20')" attribute="referral-link" value="{{ $url }}" color="orange" />
                    <div class="text-[0.8rem] font-normal text-[#acacac] dark:text-[#666666]">
                        {{ __('pages/private/dashboard.26') }}
                    </div>
                    <div class="text-[0.8rem] font-normal text-[#acacac] dark:text-[#666666]">
                        {{ __('pages/private/dashboard.27') }}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="grid-item">
        <div class="cell flex h-full w-full flex-col">
            <div class="align-center mb-4 flex flex-row justify-between">
                <div class="h-fit font-semibold text-[#666666] dark:text-[#acacac]">{{ __('pages/private/dashboard.32') }}</div>
                <div class="js-drag-handler">
                    @svg('drag-pan', 'icon_grey icon_2rem icon_p6 icon_radius-0.5rem cursor-move')
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-2 xl:flex-row">
                    <x-field.compiled :uid="uniqid()" :inscription="__('pages/private/dashboard.30')" attribute="subscribers" :value="$activeReferred" color="green" />
                    <x-field.compiled :uid="uniqid()" :inscription="__('pages/private/dashboard.31')" attribute="referred-partners" :value="$totalReferred" color="blue" />
                    <x-button.compiled :uid="uniqid()" :title="__('pages/private/dashboard.29')" :url="route('private.referral.transactions')" />
                </div>
            </div>
        </div>
    </div>



    <div id="js-chart-item" class="grid-item" data-locale="{{ app()->getLocale() }}" data-legend-label="{{ __('pages/private/dashboard.18') }}" data-visitor-data='{!! json_encode(app('App\Services\BladeServices')->getVisitorData(), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}'>
        <div class="cell flex h-full w-full flex-col">
            <div class="align-center mb-4 flex flex-row justify-between">
                <div class="h-fit font-semibold text-[#666666] dark:text-[#acacac]">{{ __('pages/private/dashboard.11') }}</div>
                <div class="js-drag-handler">
                    @svg('drag-pan', 'icon_grey icon_2rem icon_p6 icon_radius-0.5rem cursor-move')
                </div>
            </div>
            <div class="flex h-full w-full flex-row">
                <div class="flex w-[2rem] flex-col">
                    <canvas id="js-referral-plot-values">{{ __('pages/private/dashboard.23') }}</canvas>
                </div>
                <div class="flex h-full w-full flex-col overflow-hidden overflow-x-scroll pb-4" dir="ltr">
                    <canvas dir="ltr" id="js-referral-plot">{{ __('pages/private/dashboard.23') }}</canvas>
                </div>
            </div>
        </div>
    </div>


    <div class="grid-item">
        <div class="cell flex h-full w-full flex-col">
            <div class="align-center mb-4 flex flex-row justify-between">
                <div class="h-fit font-semibold text-[#666666] dark:text-[#acacac]">{{ __('pages/private/dashboard.12') }}</div>
                <div class="js-drag-handler">
                    @svg('drag-pan', 'icon_grey icon_2rem icon_p6 icon_radius-0.5rem cursor-move')
                </div>
            </div>
            <div class="flex flex-col gap-4">
                @if (Auth::user()->telegram_channel_exempted)
                    <div class="flex flex-col gap-2">
                        <x-field.compiled :uid="uniqid()" :inscription="__('pages/private/dashboard.22')" attribute="remaining-days" value="{{ Auth::user()->days_left }} {{ __('pages/private/dashboard.21') }}"
                            color="green" />
                        <div class="text-[0.8rem] font-normal text-[#acacac] dark:text-[#666666]">
                            {{ __('pages/private/dashboard.13') }}
                        </div>
                        <div class="text-[0.8rem] font-normal text-[#acacac] dark:text-[#666666]">
                            {{ __('pages/private/dashboard.14') }}
                        </div>
                    </div>
                @else
                    <x-field.compiled :uid="uniqid()" :inscription="__('pages/private/dashboard.22')" attribute="remaining-days" value="{{ Auth::user()->days_left }} {{ __('pages/private/dashboard.21') }}"
                        color="green {{ Auth::user()->days_left === 3 ? 'b-text_yellow' : (Auth::user()->days_left === 2 ? 'b-text_orange' : (Auth::user()->days_left === 1 ? 'b-text_red' : 'b-text_green')) }}" />
                    <div class="text-[0.8rem] font-normal text-[#acacac] dark:text-[#666666]">
                        {{ __('pages/private/dashboard.15') }}
                    </div>
                    <div class="text-[0.8rem] font-normal text-[#acacac] dark:text-[#666666]">
                        {{ __('pages/private/dashboard.16') }}
                        <u>
                            <a href="{{ route('private.profile') }}">
                                {{ __('pages/private/dashboard.17') }}
                            </a>
                        </u>
                    </div>
                @endif
            </div>
        </div>
    </div>


    <div class="grid-item">
        <div class="cell flex h-full w-full flex-col">
            <div class="flex flex-col">
                <div class="align-center mb-4 flex flex-row justify-between">
                    <div class="h-fit font-semibold text-[#666666] dark:text-[#acacac]">{{ __('pages/private/dashboard.24') }}</div>
                    <div class="js-drag-handler">
                        @svg('drag-pan', 'icon_grey icon_2rem icon_p6 icon_radius-0.5rem cursor-move')
                    </div>
                </div>
                <div class="mb-4">
                    <div class="text-[0.8rem] font-normal text-[#acacac] dark:text-[#666666]">
                        {{ __('pages/private/dashboard.25') }}
                    </div>
                </div>
            </div>
            <a target="_blank" href="https://youtu.be/Vn0n9QbC4oI">
                <img class="h-full w-full rounded-lg object-cover" src="{{ URL::asset('assets/images/min-jpeg/how-to-open-sneakers-shop.jpeg') }}" alt="how-to-open-sneakers-shop">
            </a>
        </div>
    </div>
</div>
