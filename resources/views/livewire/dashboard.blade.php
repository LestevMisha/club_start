<div class="flex h100 v gap">

    <div class="ds-notice">
        <div class="b-text">Купить <a class="emphasize blue" href=""> Эксклюзивный доступ</a></div>
    </div>
    <div class="b-text b-text_1.5em">Главная</div>
    <x-modern-loader />
    @if ($this->hasCardVerification())
       <div class="flex h gap">
        <div class="flex v hfit ds-row cursor_crosshair w50 mob">
            <div class="b-text b-text_grey mb-1">Основная Информация</div>

            <div class="flex gap v">
                <?php $url = url('/') . '?referred_referral_id=' . Auth::user()->referral_id; ?>
                <x-blox attribute="referral_link" inscription="Реферальная ссылка" value="{{ $url }}"
                    class="mb-1" />
                <x-blox attribute="referral_link" inscription="Закрытый клуб" value="https://t.me/+UChE4Obnlq9iNmFh"
                    class="mb-1" />
                <div class="b-text b-text_08 b-text_grey-dark">
                    It was popularised in the 1960s with the release of Letraset sheets
                    containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                    PageMaker including versions of Lorem Ipsum.
                </div>
            </div>
        </div>
        <div class="flex v ds-row cursor_crosshair w50 mob">
            <div class="b-text b-text_grey mb-1">Реферальные Транзакции</div>
            <canvas id="referral_plot">Ваш браузер не поддерживает canvas элемент.</canvas>
{{-- 
            <div class="flex gap v">
                <?php $url = url('/') . '?referred_referral_id=' . Auth::user()->referral_id; ?>
                <x-blox attribute="referral_link" inscription="Реферальная ссылка" value="{{ $url }}"
                    class="mb-1" />
                <x-blox attribute="referral_link" inscription="Закрытый клуб" value="https://t.me/+UChE4Obnlq9iNmFh"
                    class="mb-1" />
                <div class="b-text b-text_08 b-text_grey-dark">
                    It was popularised in the 1960s with the release of Letraset sheets
                    containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                    PageMaker including versions of Lorem Ipsum.
                </div>
            </div> --}}
        </div>
       </div>
    @else
        <div class="flex v ds-row">

            <div class="flex w70 wmob v gap_05">
                <div class="b-text b-text_2em">Даем возможность стать партнером</div>
                <div class="b-text b-text_grey">Если вы становитесь партнером мы перечисляем вам 50% от цены клуб с
                    каждого нового пользователя приглашенного вами.<br> + Каждый месяц 50% с продления</div>

                <form wire:submit.default="saveCardCredentials" class="modern-form">
                    @csrf
                    <div class="flex gap v w100">
                        <div class="flex v">
                            <x-input attribute="card_number" inscription="Номер Карты" />
                            <x-modern-error />
                        </div>
                        <button type="submit" class="go-button v6">Стать партнером</button>
                        <div class="b-text b-text_08 b-text_grey">
                            Предостовляя номер банковской карты вы подтверждаете
                            свое согласие на ее использование в целях перевода реферального возврата прибыли.
                        </div>
                    </div>
                </form>

            </div>
            <img src="{{ URL::asset('images/min-png/dollar-coin-3d.png') }}" alt="dollar-coin-3d"
                class="b-img b-img_v10">
        </div>
    @endif

    <div class="flex gap h mob">

        <div class="flex v ds-row gap_05 cursor_crosshair">

            <div class="mb-05">
                <div class="b-text">
                    Оставшиеся дни:
                    @if (Auth::user()->telegram_channel_exempted)
                        <span class="b-text b-text_green">x дней</span>
                    @else
                        <span
                            class="b-text {{ Auth::user()->days_left === 3 ? 'b-text_yellow' : (Auth::user()->days_left === 2 ? 'b-text_orange' : (Auth::user()->days_left === 1 ? 'b-text_red' : 'b-text_green')) }}">{{ Auth::user()->days_left }}
                            дней</span>
                    @endif
                </div>
            </div>
            <div class="mb-05">
                <div class="b-text">Текущая Почта: <span class="b-text b-text_green">{{ Auth::user()->email }}</span>
                </div>
            </div>
            <div class="mb-05">
                <div class="b-text">Закрытый клуб START: </div>
                <a href="https://t.me/+UChE4Obnlq9iNmFh">https://t.me/+UChE4Obnlq9iNmFh</a>
            </div>
        </div>
        <div class="flex v ds-row cursor_crosshair">
            <div class="flex v gap_05">
                <div class="b-text b-text_2em">Фотосессии</div>
                <div class="b-text b-text_08 b-text_grey mb-1">Вы получите информацию о клубе, ссылку на клуб и
                    тд...</div>
                <a target="_blank" href="{{ $this->getTelegramInformationLink() }}" class="go-button v3">Получить
                    информацию</a>
            </div>
            <img src="{{ URL::asset('images/min-png/sneakers-color.png') }}" alt="dollar-coin-3d"
                class="b-img b-img_v10">
        </div>
    </div>

    @if (Auth::user()->telegram_channel_exempted)
        <div class="flex v ds-row gap_05 cursor_crosshair mt-05">
            <div class="mb-05">
                <div class="b-text">
                    Вы являетесь уникальным пользователем, после вас таких не будет 😁. Начиная с лета 2024 года
                    подписка в клуб Start
                    продается только с сайта, так как вы покупаете ее ботом мы даем вам привилегию какую-то (пока
                    непонятно :)).
                </div>
            </div>
        </div>
    @endif


    @section('card-credentials-script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.js"
            integrity="sha512-ZwR1/gSZM3ai6vCdI+LVF1zSq/5HznD3ZSTk7kajkaj4D292NLuduDCO1c/NT8Id+jE58KYLKT7hXnbtryGmMg=="
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
</div>
