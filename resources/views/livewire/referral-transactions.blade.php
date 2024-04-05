<section class="b-section b-section_v4">
    <div class="container container_v2">
        <div class="flex v gap_05 my-2 mx-1">
            <div class="flex v flex v3 cursor_crosshair">
                <div class="table-responsive">
                    <table class="table mb-4 transactions-table">
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
                                    <th class="text-nowrap" scope="row"><code class="fw-normal">{{ $key + 1 }}
                                        </code>
                                    </th>
                                    <td>{{ $transaction->yookassa_transaction_id }}</td>
                                    <td>{{ $transaction->amount }}</td>
                                    <td
                                        class="{{ $transaction->status === 'succeeded' ? 'text-success' : ($transaction->status === 'pending' ? 'text-warning' : 'text-danger') }}">
                                        {{ $transaction->status }}</td>
                                    <td>{{ $transaction->updated_at }}</td>
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
        </div>
    </div>
</section>