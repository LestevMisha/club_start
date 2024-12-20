@extends('sub-layouts.private')
@section('sub-content')
    <div class="flex flex-col gap-4">
        @if (app('App\Services\BladeServices')->hasCardVerification())
            <div class="cell flex w-full flex-col gap-4">
                <div class="text-base text-black dark:text-white">
                    Сумма Вывода:
                    <span class="text-base text-[#50d45e]">{{ auth()->user()->amount_earned }} рублей</span>
                </div>
                <x-button.compiled :uid="uniqid()" attribute="withdrawMoney" title="Вывод Средств" />
                 {{-- <div class="b-text b-text_grey">
                    Статус Всех Выводов:
                   @if ($disabled)
                    <span class="b-text b-text_orange">В процессе</span>
                    <span class="loader v1">
                        <svg class="circular" viewBox="25 25 50 50">
                            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                        </svg>
                    </span>
                    @else
                    <span class="b-text b-text_green">Успешный</span>
                    @endif 
                </div>--}}
            </div>

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
                                        @foreach ($referred_users_transactions as $key => $transaction)
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
        @endif
    </div>
    {{-- <div class="flex flex-col gap-4"> --}}

    {{-- <x-loader.compiled :uid="uniqid()" attribute="withdraw" size="2.5rem" borderRadius="2.5rem" /> --}}

    {{-- @if (app('App\Services\BladeServices')->hasCardVerification())
            <div class="cell mob flex w-full flex-col gap-4">
                <div class="dark:text-white text-base text-black">
                    Сумма Вывода:
                    <span class="text-base text-[#50d45e]">{{ auth()->user()->amount_earned }} рублей</span>
                </div>
                <x-button.compiled :uid="uniqid()" attribute="withdrawMoney" title="Вывод Средств" /> --}}
    {{-- <div class="b-text b-text_grey">
                Статус Всех Выводов:
                @if ($disabled)
                    <span class="b-text b-text_orange">В процессе</span>
                    <span class="loader v1">
                        <svg class="circular" viewBox="25 25 50 50">
                            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                        </svg>
                    </span>
                @else
                    <span class="b-text b-text_green">Успешный</span>
                @endif
            </div>
            <button {{ $disabled ? 'disabled' : '' }} wire:loading.attr="disabled" wire:click="sendMoneyWithdrawalNotification" class="go-button v3">
                Вывод Средств
            </button> --}}
    {{-- </div>

            <div class="cell flex w-full flex-col gap-4 overflow-hidden overflow-x-scroll !p-0">
                <table class="dark:divide-white/5 w-full table-auto divide-y divide-gray-200 text-start">
                    <caption class="dark:text-white mb-4 ml-4 mt-4 text-left text-2xl font-medium text-black">Referral Transactions</caption>
                    <thead class="dark:divide-white/5 divide-y divide-gray-200">
                        <tr class="dark:bg-white/5 bg-gray-50">
                            <th class="px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6">
                                <button type="button" class="flex w-full items-center justify-start gap-x-1 whitespace-nowrap">
                                    <span class="dark:text-white text-sm font-semibold text-gray-950">
                                        Date
                                    </span>
                                    @svg('arrow-downward', 'text-gray-400 h-5 w-5 shrink-0 transition duration-75')
                                </button>
                            </th>
                            <th class="px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6">
                                <button type="button" class="flex w-full items-center justify-start gap-x-1 whitespace-nowrap">
                                    <span class="dark:text-white text-sm font-semibold text-gray-950">
                                        ID Number
                                    </span>
                                    @svg('arrow-downward', 'text-gray-400 h-5 w-5 shrink-0 transition duration-75')
                                </button>
                            </th>
                            <th class="px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6">
                                <button type="button" class="flex w-full items-center justify-start gap-x-1 whitespace-nowrap">
                                    <span class="dark:text-white text-sm font-semibold text-gray-950">
                                        Type
                                    </span>
                                    @svg('arrow-downward', 'text-gray-400 h-5 w-5 shrink-0 transition duration-75')
                                </button>
                            </th>
                            <th class="px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6">
                                <button type="button" class="flex w-full items-center justify-start gap-x-1 whitespace-nowrap">
                                    <span class="dark:text-white text-sm font-semibold text-gray-950">
                                        Amount
                                    </span>
                                    @svg('arrow-downward', 'text-gray-400 h-5 w-5 shrink-0 transition duration-75')
                                </button>
                            </th>
                            <th class="px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6">
                                <button type="button" class="flex w-full items-center justify-start gap-x-1 whitespace-nowrap">
                                    <span class="dark:text-white text-sm font-semibold text-gray-950">
                                        Payment Method
                                    </span>
                                    @svg('arrow-downward', 'text-gray-400 h-5 w-5 shrink-0 transition duration-75')
                                </button>
                            </th>
                            <th class="px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6">
                                <button type="button" class="flex w-full items-center justify-start gap-x-1 whitespace-nowrap">
                                    <span class="dark:text-white text-sm font-semibold text-gray-950">
                                        Status
                                    </span>
                                    @svg('arrow-downward', 'text-gray-400 h-5 w-5 shrink-0 transition duration-75')
                                </button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($referred_users_transactions as $key => $transaction)
                            <tr>
                                <td class="p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                                    <div class="flex w-full justify-start text-start disabled:pointer-events-none">
                                        <div class="grid w-full gap-y-1 px-3 py-4">
                                            <div class="flex">
                                                <div class="flex max-w-max">
                                                    <div class="inline-flex items-center gap-1.5">
                                                        <span class="dark:text-white text-sm leading-6 text-gray-950">
                                                            {{ $transaction->transaction_recurring_payment_flag ? 'Recurring' : 'Standard' }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                                    <div class="flex w-full justify-start text-start disabled:pointer-events-none">
                                        <div class="grid w-full gap-y-1 px-3 py-4">
                                            <div class="flex">
                                                <div class="flex max-w-max">
                                                    <div class="inline-flex items-center gap-1.5">
                                                        <span class="dark:text-white text-sm leading-6 text-gray-950">
                                                            {{ $transaction->transaction_uuid }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                                    <div class="flex w-full justify-start text-start disabled:pointer-events-none">
                                        <div class="grid w-full gap-y-1 px-3 py-4">
                                            <div class="flex">
                                                <div class="flex max-w-max">
                                                    <div class="inline-flex items-center gap-1.5">
                                                        <span class="dark:text-white text-sm leading-6 text-gray-950">
                                                            In Developing
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                                    <div class="flex w-full justify-start text-start disabled:pointer-events-none">
                                        <div class="grid w-full gap-y-1 px-3 py-4">
                                            <div class="flex">
                                                <div class="flex max-w-max">
                                                    <div class="inline-flex items-center gap-1.5">
                                                        <div class="bg-[#4ade801a] flex items-center justify-center gap-1 rounded-xl [border:_0.1rem_solid_#006c3c4d] dark:border-[#4ade804d] px-4 py-2">
                                                            @svg('priority', 'h-5 w-5 shrink-0 transition duration-75 dark:text-[#00ff75] text-[#006c3c]')
                                                            <span class="dark:text-[#00ff75] text-[#006c3c] font-medium text-sm leading-none">{{ ucfirst($transaction->transaction_status) }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                                    <div class="flex w-full justify-start text-start disabled:pointer-events-none">
                                        <div class="grid w-full gap-y-1 px-3 py-4">
                                            <div class="flex">
                                                <div class="flex max-w-max">
                                                    <div class="inline-flex items-center gap-1.5">
                                                        <span class="dark:text-white text-sm leading-6 text-gray-950">
                                                            {{ $transaction->transaction_description }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                                    <div class="flex w-full justify-start text-start disabled:pointer-events-none">
                                        <div class="grid w-full gap-y-1 px-3 py-4">
                                            <div class="flex">
                                                <div class="flex max-w-max">
                                                    <div class="inline-flex items-center gap-1.5">
                                                        <span class="dark:text-white text-sm leading-6 text-gray-950">
                                                            {{ $transaction->updated_at }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else --}}
    {{-- <div class="v v3 flex">
            <div class="w70 wmob v gap_05 flex">
                <div class="b-text b-text_2em">Даем возможность стать партнером</div>
                <div class="b-text b-text_grey">Если вы становитесь партнером мы перечисляем вам 50% от цены клуб с
                    каждого нового пользователя приглашенного вами.<br> + Каждый месяц 50% с продления</div>

                <form wire:submit.default="saveCardCredentials" class="modern-form">
                    @csrf
                    <div class="gap v w100 flex">
                        <div class="v flex">
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
            <img src="{{ URL::asset('images/min-png/dollar-coin-3d.png') }}" alt="dollar-coin-3d" class="b-img b-img_v10">
        </div> --}}
    {{-- <div class="align-center mb-4 flex flex-row justify-between">
                <div class="dark:text-[#acacac] h-fit font-semibold text-[#666666]">{{ __('pages/private/dashboard.8') }}</div>
                <div class="js-drag-handler">
                    @svg('drag-pan', 'icon_grey icon_2rem icon_p6 icon_radius-0.5rem cursor-move')
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-2">
                    <div class="dark:text-[#666666] text-[0.8rem] font-normal text-[#acacac]">
                        {{ __('pages/private/dashboard.9') }}
                    </div>
                    <div class="dark:text-[#666666] text-[0.8rem] font-normal text-[#acacac]">
                        {{ __('pages/private/dashboard.10') }}
                    </div>
                </div>
                <x-card-credentials-form.compiled :uid="uniqid()" />
            </div>
        @endif --}}
    {{-- </div> --}}
@endsection
