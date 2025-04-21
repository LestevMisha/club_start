<div class="cell mx-auto flex w-full max-w-[1440px] flex-col gap-4">
    <div class="flex flex-col">
        @if ($payments->isNotEmpty())
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden rounded-xl border border-gray-200 dark:border-[#292929]">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-[#292929]">
                            <thead class="bg-gray-50 dark:bg-[#161616]">
                                <tr>
                                    <th scope="col" class="px-4 py-3.5 text-left text-sm font-normal text-gray-500 rtl:text-right dark:text-gray-400">
                                        {{ __('pages/private/payments.4') }}</th>
                                    <th scope="col" class="px-4 py-3.5 text-left text-sm font-normal text-gray-500 rtl:text-right dark:text-gray-400">
                                        {{ __('pages/private/payments.5') }}</th>
                                    <th scope="col" class="px-4 py-3.5 text-left text-sm font-normal text-gray-500 rtl:text-right dark:text-gray-400">
                                        {{ __('pages/private/payments.6') }}</th>
                                    <th scope="col" class="px-4 py-3.5 text-left text-sm font-normal text-gray-500 rtl:text-right dark:text-gray-400">
                                        {{ __('pages/private/payments.7') }}</th>
                                    <th scope="col" class="px-4 py-3.5 text-left text-sm font-normal text-gray-500 rtl:text-right dark:text-gray-400">
                                        {{ __('pages/private/payments.8') }}</th>
                                    <th scope="col" class="px-4 py-3.5 text-left text-sm font-normal text-gray-500 rtl:text-right dark:text-gray-400">
                                        {{ __('pages/private/payments.9') }}</th>
                                    <th scope="col" class="px-4 py-3.5 text-left text-sm font-normal text-gray-500 rtl:text-right dark:text-gray-400">
                                        <div class="flex items-center gap-x-3">
                                            <button class="flex items-center gap-x-2">
                                                <span>{{ __('pages/private/payments.10') }}</span>
                                                @svg('arrow-downward', 'w-4 h-4')
                                            </button>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white dark:divide-[#292929] dark:bg-[#1c1c1c]">
                                @foreach ($payments as $key => $payment)
                                    <tr>
                                        <td class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200">
                                            <div class="inline-flex items-center gap-x-3">
                                                {{ $payment?->invoice_id }}
                                            </div>
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-300">
                                            {{ $payment?->currency }}
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-300">
                                            {{ $payment?->amount }}
                                            <span>₽</span>
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-300">
                                            {{ $payment?->strikes }}/3
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-700">
                                            @if ($payment?->status === 'subscription-active')
                                                <div class="inline-flex items-center gap-x-2 rounded-full bg-green-50 px-3 py-1 text-green-600 ring-1 ring-inset ring-green-600/10 dark:bg-green-400/10 dark:text-green-400 dark:ring-green-400/30">
                                                    @svg('custom.check', 'w-4 h-4')
                                                    <h2 class="text-sm font-normal">{{ __('pages/private/payments.11') }}</h2>
                                                </div>
                                            @elseif($payment?->status === 'completed')
                                                <div class="inline-flex items-center gap-x-2 rounded-full bg-purple-50 px-3 py-1 text-purple-600 ring-1 ring-inset ring-purple-600/10 dark:bg-purple-400/10 dark:text-purple-400 dark:ring-purple-400/30">
                                                    @svg('shield-locked', 'w-4 h-4')
                                                    <h2 class="text-sm font-normal">{{ __('pages/private/payments.12') }}</h2>
                                                </div>
                                            @elseif($payment?->status === 'subscription-cancelled')
                                                <div class="inline-flex items-center gap-x-2 rounded-full bg-red-50 px-3 py-1 text-red-600 ring-1 ring-inset ring-red-600/10 dark:bg-red-400/10 dark:text-red-400 dark:ring-red-400/30">
                                                    @svg('custom.cross', 'w-4 h-4')
                                                    <h2 class="text-sm font-normal">{{ __('pages/private/payments.13') }}</h2>
                                                </div>
                                            @elseif(in_array($payment?->status, ['subscription-failed', 'failed']))
                                                <div class="inline-flex items-center gap-x-2 rounded-full bg-red-50 px-3 py-1 text-red-600 ring-1 ring-inset ring-red-600/10 dark:bg-red-400/10 dark:text-red-400 dark:ring-red-400/30">
                                                    @svg('cancel-schedule-send', 'w-4 h-4')
                                                    <h2 class="text-sm font-normal">{{ __('pages/private/payments.14') }}</h2>
                                                </div>
                                            @endif
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-300">
                                            {{ date('d-m-Y', strtotime($payment?->expires_at)) }}
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-300">
                                            {{ date('d-m-Y', strtotime($payment?->updated_at)) }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @else
            <div class="text-[0.8rem] font-normal text-[#acacac] dark:text-[#666666]">
                {{ __('app.6') }}
            </div>
        @endif
    </div>
</div>
