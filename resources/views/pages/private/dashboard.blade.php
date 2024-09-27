@extends('layouts.private')
@section('content')
    <div class="grid" id="flexGridify">

        <div class="grid-item">
            <div class="flex v h100 w100 ds-row mob grid-stack-item-content">
                <div class="flex h align space-btw mb-1">
                    <div class="b-text b-text_fith b-text_grey">{{ __('Main Links') }}</div>
                    <div class="drag-handler">
                        @svg('draggable-dots', 'move-icon')
                    </div>
                </div>
                <div class="flex gap v">
                    <div class="flex v gap_05">
                        <x-modern-copy-input.compiled attribute="klub-link" inscription="{{ __('Private Club') }}" value="https://t.me/+UChE4Obnlq9iNmFh" class="mb-1" />
                        <div class="b-text b-text_08 b-text_grey-dark">
                            {{ __('If you become a partner, we transfer to you 50% of the club price from each new user you invite. Plus, 50% from renewals every month.') }}
                        </div>
                    </div>
                    @if (app('App\Services\BladeServices')->hasCardVerification())
                        <?php $url = url('/') . '?referred_referral_id=' . Auth::user()->referral_id; ?>
                        <x-modern-copy-input.compiled attribute="referral-link" inscription="{{ __('Referral Link') }}" value="{{ $url }}" class="mb-1" />
                    @else
                        <x-referral-link.compiled />
                    @endif
                    <div class="b-text b-text_08 b-text_grey-dark">
                        {{ __('It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.') }}
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item">
            <div class="flex v h100 w100 ds-row mob grid-stack-item-content">
                <div class="flex h align space-btw mb-1">
                    <div class="b-text b-text_fith b-text_grey">{{ __('Referral Transactions') }}</div>
                    <div class="drag-handler">
                        @svg('draggable-dots', 'move-icon')
                    </div>
                </div>
                <canvas id="referral_plot">{{ __('Your browser does not support the canvas element.') }}</canvas>
                <?php $url = url('/') . '?referred_referral_id=' . Auth::user()->referral_id; ?>
            </div>
        </div>

        <div class="grid-item">
            <div class="flex v h100 w100 ds-row mob grid-stack-item-content">
                <div class="flex h align space-btw mb-1">
                    <div class="b-text b-text_grey b-text_grey-to-black_light-mode">{{ __('Info-Panel') }}</div>
                    <div class="drag-handler">
                        @svg('draggable-dots', 'move-icon')
                    </div>
                </div>
                <div class="flex gap v">
                    @if (Auth::user()->telegram_channel_exempted)
                        <x-modern-copy-input.compiled attribute="remaining-days" inscription="{{ __('Remaining days') }}" value="{{ __('x days') }}" class="green b-text b-text_green mb-1" />
                    @else
                        <x-modern-copy-input.compiled attribute="remaining-days" inscription="{{ __('Remaining days') }}" value="{{ Auth::user()->days_left }} {{ __('days') }}"
                            class="green {{ Auth::user()->days_left === 3 ? 'b-text_yellow' : (Auth::user()->days_left === 2 ? 'b-text_orange' : (Auth::user()->days_left === 1 ? 'b-text_red' : 'b-text_green')) }} mb-1" />
                    @endif
                    <div class="b-text b-text_08 b-text_grey-dark b-text_grey-dark-to-grey_light-mode">
                        {{ __('You are a unique user, there will be no more like you after 😁. Starting from summer 2024, the Start club subscription is only sold from the website, as you purchase it through a bot we give you some privilege (still unclear :) ).') }}
                    </div>
                    <x-modern-copy-input.compiled attribute="current-email" inscription="{{ __('Current Email') }}" value="{{ Auth::user()->email }}" class="green mb-1" />
                    <div class="b-text b-text_08 b-text_grey-dark b-text_grey-dark-to-grey_light-mode mb-1">
                        {{ __('You can change your email') }}
                        <a href="/changeEmail">{{ __('here') }}</a>.
                    </div>

                    <div class="flex v">
                        <div class="b-text b-text_grey b-text_grey-to-black_light-mode mb-05">
                            {{ __('Photo Sessions') }}
                        </div>

                        <div class="b-text b-text_08 b-text_grey-dark b-text_grey-dark-to-grey_light-mode">
                            {{ __('You will receive information about the club, a link to the club, etc...') }}
                        </div>

                    </div>
                    {{-- <a target="_blank" href="{{ $this->getTelegramInformationLink() }}" class="ui-button">
                                Получить Фотосессию
                                @svg('right-arrow', 'right-arrow-icon')
                            </a> --}}
                </div>
            </div>
        </div>

        <div class="grid-item">
            <div class="flex v h100 w100 ds-row mob grid-stack-item-content">
                <div class="flex v">
                    <div class="flex h align space-btw">
                        <div class="b-text b-text_grey b-text_grey-to-black_light-mode">
                            Как открыть магазин кроссовок в интернете?
                        </div>
                        <div class="drag-handler">
                            @svg('draggable-dots', 'move-icon')
                        </div>
                    </div>
                    <div class="b-text b-text_08 b-text_grey-dark b-text_grey-dark-to-grey_light-mode mb-1">
                        Легендарный марафон по обучению продаж кроссовок в интернете ⤵️<br />
                        <a href="https://shkitov.com/">shkitov.com</a>
                    </div>
                </div>
                <iframe class="b-video b-video_v3 dashboard" frameborder="0" allowfullscreen src="https://youtube.com/embed/Vn0n9QbC4oI">
                </iframe>
            </div>
        </div>


    </div>


    {{-- javascript --}}
@section('dashboard-script')
    <script src="{{ Vite::asset('resources/javascript/dashboard/flexgridify.js') }}" type="module"></script>
@stop

@section('card-credentials-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.js" integrity="sha512-ZwR1/gSZM3ai6vCdI+LVF1zSq/5HznD3ZSTk7kajkaj4D292NLuduDCO1c/NT8Id+jE58KYLKT7hXnbtryGmMg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ secure_asset('javascript/card-credentials.js') }}"></script>
    <script type="module">
        // import Chart from 'chart.js/auto';

        (async function() {
            const data = [{
                    year: 2010,
                    count: 10
                },
                {
                    year: 2011,
                    count: 20
                },
                {
                    year: 2012,
                    count: 15
                },
                {
                    year: 2013,
                    count: 25
                },
                {
                    year: 2014,
                    count: 22
                },
                {
                    year: 2015,
                    count: 30
                },
                {
                    year: 2016,
                    count: 28
                },
            ];

            new Chart(
                document.getElementById('referral_plot'), {
                    type: 'bar',
                    data: {
                        labels: data.map(row => row.year),
                        datasets: [{
                            label: 'Acquisitions by year',
                            data: data.map(row => row.count)
                        }]
                    }
                }
            );
        })();
    </script>
@stop

@endsection
