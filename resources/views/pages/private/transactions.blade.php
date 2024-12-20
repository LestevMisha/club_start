@extends('sub-layouts.private')
@section('sub-content')
    <div class="cell flex w-full flex-col gap-4">
        <div class="flex flex-col">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden rounded-xl border border-gray-200 dark:border-[#292929]">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-[#292929]">
                            <thead class="bg-gray-50 dark:bg-[#161616]">
                                <tr>
                                    <th scope="col" class="px-4 py-3.5 text-left text-sm font-normal text-gray-500 rtl:text-right dark:text-gray-400">
                                        {{ __('pages/public/transactions.key_0a19ee5eeaa658e7210b4cb67cf4e334') }}</th>
                                    <th scope="col" class="px-4 py-3.5 text-left text-sm font-normal text-gray-500 rtl:text-right dark:text-gray-400">
                                        {{ __('pages/public/transactions.key_ca66f5cf6d3c73b8c2b6ec346a2d161b') }}</th>
                                    <th scope="col" class="px-4 py-3.5 text-left text-sm font-normal text-gray-500 rtl:text-right dark:text-gray-400">
                                        {{ __('pages/public/transactions.key_7eb5dc4f7f3ceea005e0720c290bcaf0') }}</th>
                                    <th scope="col" class="px-4 py-3.5 text-left text-sm font-normal text-gray-500 rtl:text-right dark:text-gray-400">
                                        {{ __('pages/public/transactions.key_deb50cf2723fd2f5f18b963b2a175f5b') }}</th>
                                    <th scope="col" class="px-4 py-3.5 text-left text-sm font-normal text-gray-500 rtl:text-right dark:text-gray-400">
                                        <div class="flex items-center gap-x-3">
                                            <button class="flex items-center gap-x-2">
                                                <span>{{ __('pages/public/transactions.key_c580d55313e3a2f2c0554a435ae3708c') }}</span>
                                                @svg('arrow-downward', 'w-4 h-4')
                                            </button>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white dark:divide-[#292929] dark:bg-[#1c1c1c]">
                                @foreach ($users_transactions as $key => $transaction)
                                    <tr>
                                        <td class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200">
                                            <div class="inline-flex items-center gap-x-3">
                                                <span>
                                                    {{ $transaction->transaction_uuid }}
                                                </span>
                                            </div>
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-300">
                                            {{ $transaction->transaction_amount }}
                                            <span>₽</span>
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-300">
                                            {{ $transaction->transaction_description }}
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-700">
                                            @if ($transaction->transaction_status === 'created')
                                                <div
                                                    class="inline-flex items-center gap-x-2 rounded-full bg-gray-50 px-3 py-1 text-gray-600 ring-1 ring-inset ring-gray-600/10 dark:bg-gray-400/10 dark:text-gray-400 dark:ring-gray-400/30">
                                                    @svg('contract-edit', 'w-4 h-4')
                                                    <h2 class="text-sm font-normal">{{ __('pages/public/transactions.key_0eceeb45861f9585dd7a97a3e36f85c6') }}</h2>
                                                </div>
                                            @elseif ($transaction->transaction_status === 'succeeded')
                                                <div
                                                    class="inline-flex items-center gap-x-2 rounded-full bg-green-50 px-3 py-1 text-green-600 ring-1 ring-inset ring-green-600/10 dark:bg-green-400/10 dark:text-green-400 dark:ring-green-400/30">
                                                    @svg('custom.check', 'w-4 h-4')
                                                    <h2 class="text-sm font-normal">{{ __('pages/public/transactions.key_66d02c2f8a582446f8dd8752366002b5') }}</h2>
                                                </div>
                                            @elseif($transaction->transaction_status === 'pending')
                                                <div
                                                    class="inline-flex items-center gap-x-2 rounded-full bg-yellow-50 px-3 py-1 text-yellow-600 ring-1 ring-inset ring-yellow-600/10 dark:bg-yellow-400/10 dark:text-yellow-400 dark:ring-yellow-400/30">
                                                    @svg('work-history', 'w-4 h-4')
                                                    <h2 class="text-sm font-normal">{{ __('pages/public/transactions.key_2d13df6f8b5e4c5af9f87e0dc39df69d') }}</h2>
                                                </div>
                                            @elseif($transaction->transaction_status === 'canceled')
                                                <div
                                                    class="inline-flex items-center gap-x-2 rounded-full bg-red-50 px-3 py-1 text-red-600 ring-1 ring-inset ring-red-600/10 dark:bg-red-400/10 dark:text-red-400 dark:ring-red-400/30">
                                                    @svg('custom.cross', 'w-4 h-4')
                                                    <h2 class="text-sm font-normal">{{ __('pages/public/transactions.key_0e22fe7d45f8e5632a4abf369b24e29c') }}</h2>
                                                </div>
                                            @else
                                                <div
                                                    class="inline-flex items-center gap-x-2 rounded-full bg-purple-50 px-3 py-1 text-purple-600 ring-1 ring-inset ring-purple-600/10 dark:bg-purple-400/10 dark:text-purple-400 dark:ring-purple-400/30">
                                                    @svg('hourglass-top', 'w-4 h-4')
                                                    <h2 class="text-sm font-normal">{{ __('pages/public/transactions.key_e423703fe3dbee6b0ac20e9316d828ba') }}</h2>
                                                </div>
                                            @endif
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-300">
                                            {{ date('d-m-Y', strtotime($transaction->updated_at)) }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <table class="border-separate border-spacing-4">
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
                        <td class="dark:text-white text-left text-base text-black">{{ $transaction-&gt;transaction_recurring_payment_flag ? 'Recurring' : 'Standard' }}</td>
                        <td class="dark:text-white text-left text-base text-black">{{ $transaction-&gt;transaction_amount }}</td>
                        <td class="dark:text-white text-left text-base text-black">Developing</td>
                        <td class="text-left text-base font-medium">
                            <div class="dark:bg-[#00ff2d36] dark:text-[#00ff75] flex w-40 items-center justify-center rounded-full bg-[#dbf6cb] px-3 py-1 text-left text-base text-[#006c3c]">
                                {{ ucfirst($transaction-&gt;transaction_status) }}
                            </div>
                        </td>
                        <td class="dark:text-white text-left text-base text-black">{{ $transaction-&gt;transaction_description }}</td>
                        <td class="dark:text-white text-left text-base text-black">{{ $transaction-&gt;updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table> --}}
    {{-- <div class="flex v gap pt-1">
        <div class="mb-2">
            <div class="b-text b-text_2em">Payment history</div>
        </div>
        

        @foreach ($users_transactions as $key => $transaction)
        
            <div class="flex v v12 gap w100 p-1">
                <div class="flex h gap w100">
                    @svg('arrow-success', 'success-icon')

                    <div class="flex v gap w25">
                        <div class="b-text b-text_400">{{ ucfirst($transaction-&gt;transaction_status) }}</div>
                        <div class="b-text b-text_grey b-text_400">{{ $transaction-&gt;updated_at }}</div>
                    </div>

                    <div class="flex h gap_05 w50">
                        @svg('copy', 'copy-icon-normal')
                        <div class="b-text b-text_400">{{ $transaction-&gt;yookassa_transaction_id }}</div>
                    </div>

                    <div class="b-text b-text_1.2em b-text_600">{{ $transaction-&gt;transaction_amount }}
                        <span>&nbsp;&#8381;</span>
                    </div>
                </div>
                <div class="flex v11">
                    <div class="b-text b-text_grey-dark b-text_400">{{ $transaction-&gt;transaction_description }}</div>
                </div>
            </div>
        @endforeach
    </div> --}}
@endsection
