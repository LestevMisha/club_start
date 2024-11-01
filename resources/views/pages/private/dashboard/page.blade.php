<div class="grid" id="flexGridify">

    <div class="grid-item">
        <div class="flex v h100 w100 ds-row mob grid-stack-item-content">
            <div class="flex h align space-btw mb-1">
                <div class="b-text b-text_fith b-text_grey b-text_600 modeLight_darker"> {{ __('pages/dashboard.1') }}</div>
                <div class="drag-handler">
                    @svg('draggable-dots', 'move-icon')
                </div>
            </div>
            <div class="flex gap v">
                <div class="flex v gap_05">
                    <x-modern-copy-input.compiled :uid="uniqid()" :inscription="__('pages/dashboard.19')" attribute="klub-link" value="https://t.me/+UChE4Obnlq9iNmFh" color="orange" />
                    <div class="b-text b-text_08 b-text_400 b-text_grey-dark b-text_grey-dark-to-grey_light-mode">
                        {{ __('pages/dashboard.2') }}
                    </div>
                    <div class="b-text b-text_08 b-text_400 b-text_grey-dark b-text_grey-dark-to-grey_light-mode">
                        {{ __('pages/dashboard.3') }}
                    </div>
                </div>
                <div class="flex v gap_05">
                    <a target="_blank" href="https://shkitov.com/" class="ui-button">
                        {{ __('pages/dashboard.4') }}
                        @svg('right-arrow', 'right-arrow-icon')
                    </a>
                    <div class="b-text b-text_08 b-text_400 b-text_grey-dark b-text_grey-dark-to-grey_light-mode">
                        {{ __('pages/dashboard.5') }}
                    </div>
                </div>
                <div class="flex v gap_05">
                    <a target="_blank" href="{{ app('App\Services\BladeServices')->getTelegramLink('information') }}" class="ui-button">
                        {{ __('pages/dashboard.6') }}
                        @svg('right-arrow', 'right-arrow-icon')
                    </a>
                    <div class="b-text b-text_08 b-text_400 b-text_grey-dark b-text_grey-dark-to-grey_light-mode">
                        {{ __('pages/dashboard.7') }}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="grid-item">
        <div class="flex v h100 w100 ds-row mob grid-stack-item-content">
            @if (!app('App\Services\BladeServices')->hasCardVerification())
                <div class="flex h align space-btw mb-1">
                    <div class="b-text b-text_fith b-text_grey b-text_600 modeLight_darker">{{ __('pages/dashboard.8') }}</div>
                    <div class="drag-handler">
                        @svg('draggable-dots', 'move-icon')
                    </div>
                </div>
                <div class="flex gap v">
                    <div class="flex v gap_05">
                        <div class="b-text b-text_08 b-text_400 b-text_grey-dark b-text_grey-dark-to-grey_light-mode">
                            {{ __('pages/dashboard.9') }}
                        </div>
                        <div class="b-text b-text_08 b-text_400 b-text_grey-dark b-text_grey-dark-to-grey_light-mode">
                            {{ __('pages/dashboard.10') }}
                        </div>
                    </div>
                    <x-card-credentials-form.compiled :uid="uniqid()" />
                </div>
            @else
                <div class="flex h align space-btw mb-1">
                    <div class="b-text b-text_grey b-text_600 modeLight_darker">{{ __('pages/dashboard.28') }}</div>
                    <div class="drag-handler">
                        @svg('draggable-dots', 'move-icon')
                    </div>
                </div>
                <div class="flex v gap">
                    <div class="flex v gap_05">
                        <?php $url = url('/') . '?transaction_referred_by_id=' . Auth::user()->referral_id; ?>
                        <x-modern-copy-input.compiled :uid="uniqid()" :inscription="__('pages/dashboard.20')" attribute="referral-link" value="{{ $url }}" color="orange" />
                        <div class="b-text b-text_08 b-text_400 b-text_grey-dark b-text_grey-dark-to-grey_light-mode">
                            {{ __('pages/dashboard.26') }}
                        </div>
                        <div class="b-text b-text_08 b-text_400 b-text_grey-dark b-text_grey-dark-to-grey_light-mode">
                            {{ __('pages/dashboard.27') }}
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    @if (app('App\Services\BladeServices')->hasCardVerification())
        <div class="grid-item">
            <div class="flex v h100 w100 ds-row mob grid-stack-item-content">
                <div class="flex h align space-btw mb-1">
                    <div class="b-text b-text_grey b-text_600 modeLight_darker">{{ __('pages/dashboard.32') }}</div>
                    <div class="drag-handler">
                        @svg('draggable-dots', 'move-icon')
                    </div>
                </div>
                <div class="flex v gap">
                    <div class="flex h gap_05 mob">
                        <x-modern-field.compiled :uid="uniqid()" :inscription="__('pages/dashboard.30')" attribute="subscribers" value="0" color="green" />
                        <x-modern-field.compiled :uid="uniqid()" :inscription="__('pages/dashboard.31')" attribute="referred-partners" value="0" color="blue" />
                        <a href="{{ route('private.referral.transactions') }}" class="ui-button">
                            {{ __('pages/dashboard.29') }}
                            @svg('right-arrow', 'right-arrow-icon')
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif



    <div id="js-chart-item" class="grid-item" data-locale="{{ app()->getLocale() }}" data-legend-label="{{ __('pages/dashboard.18') }}" data-visitor-data='{!! json_encode(app('App\Services\BladeServices')->getVisitorData(), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}'>
        <div class="flex v h100 w100 ds-row mob grid-stack-item-content">
            <div class="flex h align space-btw mb-1">
                <div class="b-text b-text_fith b-text_grey">{{ __('pages/dashboard.11') }}</div>
                <div class="drag-handler">
                    @svg('draggable-dots', 'move-icon')
                </div>
            </div>
            <div class="flex h w100 h100">
                <div class="flex v13">
                    <canvas id="referral_plot_values">{{ __('pages/dashboard.23') }}</canvas>
                </div>
                <div class="flex w100 h100 flex_xscroll flex_xscroll_rtl pb-1">
                    <canvas class="canvas_scale" id="referral_plot">{{ __('pages/dashboard.23') }}</canvas>
                </div>
            </div>
        </div>
    </div>


    <div class="grid-item">
        <div class="flex v h100 w100 ds-row mob grid-stack-item-content">
            <div class="flex h align space-btw mb-1">
                <div class="b-text b-text_grey b-text_600 modeLight_darker">{{ __('pages/dashboard.12') }}</div>
                <div class="drag-handler">
                    @svg('draggable-dots', 'move-icon')
                </div>
            </div>
            <div class="flex gap v">
                @if (Auth::user()->telegram_channel_exempted)
                    <div class="flex v gap_05">
                        <x-modern-field.compiled :uid="uniqid()" :inscription="__('pages/dashboard.22')" attribute="remaining-days" value="{{ Auth::user()->days_left }} {{ __('pages.dashboard.21') }}"
                            color="green" />
                        <div class="b-text b-text_08 b-text_400 b-text_grey-dark b-text_grey-dark-to-grey_light-mode">
                            {{ __('pages/dashboard.13') }}
                        </div>
                        <div class="b-text b-text_08 b-text_400 b-text_grey-dark b-text_grey-dark-to-grey_light-mode">
                            {{ __('pages/dashboard.14') }}
                        </div>
                    </div>
                @else
                    <x-modern-field.compiled :uid="uniqid()" :inscription="__('pages/dashboard.22')" attribute="remaining-days" value="{{ Auth::user()->days_left }} {{ __('pages/dashboard.21') }}"
                        color="green {{ Auth::user()->days_left === 3 ? 'b-text_yellow' : (Auth::user()->days_left === 2 ? 'b-text_orange' : (Auth::user()->days_left === 1 ? 'b-text_red' : 'b-text_green')) }}" />
                    <div class="b-text b-text_08 b-text_400 b-text_grey-dark b-text_grey-dark-to-grey_light-mode">
                        {{ __('pages/dashboard.15') }}
                    </div>
                    <div class="b-text b-text_08 b-text_400 b-text_grey-dark b-text_grey-dark-to-grey_light-mode">
                        {{ __('pages/dashboard.16') }}
                        <u>
                            <a class="b-text b-text_400 b-text_grey-dark b-text_grey-dark-to-grey_light-mode" href="{{ route('private.profile') }}">
                                {{ __('pages/dashboard.17') }}
                            </a>
                        </u>
                    </div>
                @endif
            </div>
        </div>
    </div>


    <div class="grid-item">
        <div class="flex v h100 w100 ds-row mob grid-stack-item-content">
            <div class="flex v">
                <div class="flex h align space-btw">
                    <div class="b-text b-text_grey b-text_600 modeLight_darker">{{ __('pages/dashboard.24') }}</div>
                    <div class="drag-handler">
                        @svg('draggable-dots', 'move-icon')
                    </div>
                </div>
                <div class="mb-1">
                    <div class="b-text b-text_08 b-text_400 b-text_grey-dark b-text_grey-dark-to-grey_light-mode">
                        {{ __('pages/dashboard.25') }}
                    </div>
                </div>
            </div>
            <a target="_blank" href="https://youtu.be/Vn0n9QbC4oI">
                <img class="b-img b-img_wfull-hauto b-img_bordered" src="{{ URL::asset('assets/images/min-jpeg/how-to-open-sneakers-shop.jpg') }}" alt="how-to-open-sneakers-shop">
            </a>
        </div>
    </div>
</div>
