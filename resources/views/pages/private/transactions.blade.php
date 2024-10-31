@extends('sub-layouts.private')
@section('sub-content')
    <div class="flex v gap pt-1">
        <div class="mb-2">
            <div class="b-text b-text_2em">Payment history</div>
        </div>

        @foreach ($users_transactions as $key => $transaction)
            <div class="flex v v12 gap w100 p-1">
                <div class="flex h gap w100">
                    @svg('arrow-success', 'success-icon')

                    <div class="flex v gap w25">
                        <div class="b-text b-text_400">{{ ucfirst($transaction->status) }}</div>
                        <div class="b-text b-text_grey b-text_400">{{ $transaction->updated_at }}</div>
                    </div>

                    <div class="flex h gap_05 w50">
                        @svg('copy', 'copy-icon-normal')
                        <div class="b-text b-text_400">{{ $transaction->yookassa_transaction_id }}</div>
                    </div>

                    <div class="b-text b-text_1.2em b-text_600">{{ $transaction->transaction_amount }}
                        <span>&nbsp;₽</span>
                    </div>
                </div>
                <div class="flex v11">
                    <div class="b-text b-text_grey-dark b-text_400">{{ $transaction->transaction_description }}</div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
