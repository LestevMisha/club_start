@extends('sub-layouts.private')
@section('sub-content')
    <div class="cell flex flex-col gap-4">
        <table class="border-separate border-spacing-4">
            <caption class="dark:text-white mb-4 ml-4 mt-4 text-left text-2xl font-medium text-black">Your Transactions</caption>
            <thead class="">
                <tr>
                    <th class="dark:text-[#acacac] text-left text-xl font-medium text-[#666666]">Type</th>
                    <th class="dark:text-[#acacac] text-left text-xl font-medium text-[#666666]">Amount</th>
                    <th class="dark:text-[#acacac] text-left text-xl font-medium text-[#666666]">Payment Method</th>
                    <th class="dark:text-[#acacac] text-left text-xl font-medium text-[#666666]">Status</th>
                    <th class="dark:text-[#acacac] text-left text-xl font-medium text-[#666666]">Activity</th>
                    <th class="dark:text-[#acacac] text-left text-xl font-medium text-[#666666]">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users_transactions as $key => $transaction)
                    <tr>
                        <td class="dark:text-white text-left text-base text-black">{{ $transaction->transaction_recurring_payment_flag ? 'Recurring' : 'Standard' }}</td>
                        <td class="dark:text-white text-left text-base text-black">{{ $transaction->transaction_amount }}</td>
                        <td class="dark:text-white text-left text-base text-black">Developing</td>
                        <td class="text-left text-base font-medium">
                            <div class="dark:bg-[#00ff2d36] dark:text-[#00ff75] flex w-40 items-center justify-center rounded-full bg-[#dbf6cb] px-3 py-1 text-left text-base text-[#006c3c]">
                                {{ ucfirst($transaction->transaction_status) }}
                            </div>
                        </td>
                        <td class="dark:text-white text-left text-base text-black">{{ $transaction->transaction_description }}</td>
                        <td class="dark:text-white text-left text-base text-black">{{ $transaction->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- <div class="flex v gap pt-1">
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

    </div> --}}
@endsection
