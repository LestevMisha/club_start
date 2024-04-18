<div class="flex v gap">

    <x-modern-loader />

    @if ($this->hasCardVerification())
        <div class="flex v v3 gap cursor_crosshair">
            <div class="b-text">Сумма Вывода:
                <span class="b-text b-text_green">{{ $this->getUserAmount() }} рублей</span>
            </div>
            @if (auth()->user()->amount)
                <div class="b-text b-text_grey">
                    Статус Всех Выводов:
                    @if ($disabled)
                        <span class="b-text b-text_orange">В процессе</span>
                        <span class="loader v1">
                            <svg class="circular" viewBox="25 25 50 50">
                                <circle class="path" cx="50" cy="50" r="20" fill="none"
                                    stroke-width="2" stroke-miterlimit="10" />
                            </svg>
                        </span>
                    @else
                        <span class="b-text b-text_green">Успешный</span>
                    @endif
                </div>
                <button {{ $disabled ? 'disabled' : '' }} wire:loading.attr="disabled"
                    wire:click="sendMoneyWithdrawalNotification" class="go-button v3">
                    Вывод Средств
                </button>
            @endif
        </div>

        <div class="flex v flex v3 cursor_crosshair">
            <div class="table-responsive">
                <table class="table transactions-table">
                    <thead>
                        <tr>
                            <th scope="col">
                            </th>
                            <th class="b-text b-text_left" scope="col">ID<br>
                                <span class="fw-normal">транзакции</span>
                            </th>
                            <th class="b-text b-text_left" scope="col">
                                Сумма<br>
                                <span class="fw-normal">к оплате</span>
                            </th>
                            <th class="b-text b-text_left" scope="col">
                                Cтатус<br>
                                <span class="fw-normal">транзакции</span>
                            </th>
                            <th class="b-text b-text_left" scope="col">Время<br>
                                <span class="fw-normal">оплаты</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody wire:init="loadURTs">
                        @foreach ($users_referral_transactions as $key => $transaction)
                            <tr wire:key="{{ $loop->index }}">
                                <th class="b-text text-nowrap" scope="row"><code
                                        class="fw-normal">{{ $key + 1 }}
                                    </code>
                                </th>
                                <td class="b-text">{{ $transaction->yookassa_transaction_id }}</td>
                                <td class="b-text">{{ $transaction->amount }}</td>
                                <td
                                    class="b-text {{ $transaction->status === 'succeeded' ? 'b-text_green' : ($transaction->status === 'pending' ? 'b-text_orange' : 'b-text_red') }}">
                                    {{ $transaction->status }}</td>
                                <td class="b-text">{{ $transaction->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @if ($this->getURTCount() > 5)
                <button wire:click="loadMoreURTs" class="btn btn-primary" style="width: 100%;">Загрузить еще
                    5</button>
            @endif
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
</div>
