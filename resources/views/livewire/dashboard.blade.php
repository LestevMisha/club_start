<div class="flex v gap">

    @if ($this->hasCardVerification())
        <div class="flex v flex v3 cursor_crosshair w50 mob">
            <div class="b-text">Реферальная ссылка: </div>
            <?php $url = url('/') . '?referral_id=' . Auth::user()->referral_id; ?>
            <a href="{{ $url }}">{{ $url }}</a>
        </div>
    @else
        <div class="flex v flex v3">
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
        <div class="flex v v3 gap_05 cursor_crosshair">
            <div class="mb-05">
                <div class="b-text">
                    Оставшиеся дни:
                    <span
                        class="b-text {{ Auth::user()->days_left === 3 ? 'b-text_yellow' : (Auth::user()->days_left === 2 ? 'b-text_orange' : (Auth::user()->days_left === 1 ? 'b-text_red' : 'b-text_green')) }}">{{ Auth::user()->days_left }}
                        дней</span>
                </div>
            </div>
            <div class="mb-05">
                <div class="b-text">Текущая Почта: <span class="b-text b-text_green">{{ Auth::user()->email }}</span>
                </div>
            </div>
            <div class="mb-05">
                <div class="b-text">Закрытый клуб START: </div>
                <a href="https://t.me/+U86N3fnqA7wzM2Vl">https://t.me/+U86N3fnqA7wzM2Vl</a>
            </div>
        </div>
        <div class="flex v flex v3 cursor_crosshair">
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

    @section('card-credentials-script')
        <script src="{{ secure_asset('javascript/card-credentials.js') }}"></script>
    @stop
</div>
