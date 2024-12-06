@extends('sub-layouts.private')
@section('sub-content')
    <div class="flex flex-col gap-4 xl:flex-row">

        {{-- <x-loader.compiled :uid="uniqid()" attribute="withdraw" size="2.5rem" borderRadius="2.5rem" /> --}}

        @if (app('App\Services\BladeServices')->hasCardVerification())
            <div class="cell mob flex w-full flex-col gap-4 xl:w-[20%]">
                <div class="dark:text-white text-base text-black">
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
            </div>
            <button {{ $disabled ? 'disabled' : '' }} wire:loading.attr="disabled" wire:click="sendMoneyWithdrawalNotification" class="go-button v3">
                Вывод Средств
            </button> --}}
            </div>

            <div class="cell flex w-full flex-col gap-4 overflow-hidden overflow-x-scroll xl:w-[80%]">
                <table class="border-separate border-spacing-4">
                    <caption class="dark:text-white mb-4 ml-4 mt-4 text-left text-2xl font-medium text-black">Referral Transactions</caption>
                    <thead class="">
                        <tr>
                            <th class="dark:text-[#acacac] text-nowrap text-left text-xl font-medium text-[#666666]">Type</th>
                            <th class="dark:text-[#acacac] text-nowrap text-left text-xl font-medium text-[#666666]">Amount</th>
                            <th class="dark:text-[#acacac] text-nowrap text-left text-xl font-medium text-[#666666]">Payment Method</th>
                            <th class="dark:text-[#acacac] text-nowrap text-left text-xl font-medium text-[#666666]">Status</th>
                            <th class="dark:text-[#acacac] text-nowrap text-left text-xl font-medium text-[#666666]">Activity</th>
                            <th class="dark:text-[#acacac] text-nowrap text-left text-xl font-medium text-[#666666]">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($referred_users_transactions as $key => $transaction)
                            <tr>
                                <td class="dark:text-white text-nowrap text-left text-base text-black">{{ $transaction->transaction_recurring_payment_flag ? 'Recurring' : 'Standard' }}</td>
                                <td class="dark:text-white text-nowrap text-left text-base text-black">{{ $transaction->transaction_amount }}</td>
                                <td class="dark:text-white text-nowrap text-left text-base text-black">Developing</td>
                                <td class="text-left text-base font-medium">
                                    <div class="dark:bg-[#00ff2d36] dark:text-[#00ff75] flex w-40 items-center justify-center rounded-full bg-[#dbf6cb] px-3 py-1 text-left text-base text-[#006c3c]">
                                        {{ ucfirst($transaction->transaction_status) }}
                                    </div>
                                </td>
                                <td class="dark:text-white text-nowrap text-left text-base text-black">{{ $transaction->transaction_description }}</td>
                                <td class="dark:text-white text-nowrap text-left text-base text-black">{{ $transaction->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
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
            <div class="align-center mb-4 flex flex-row justify-between">
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
        @endif
    </div>

    <script type="module">
        import verifyRecaptcha from "@api-deps/verifyRecaptcha.mjs";
        import injectContentStylesAndScripts from "@helpers/injectContentStylesAndScripts.mjs";
        import postRequest from "@apis/postRequest.mjs";
        import renderBlockTime from "@helpers/renderBlockTime.mjs";
        import renderValidationErrors from "@helpers/renderValidationErrors";

        (() => {


            const withdrawButton = document.querySelector("xbutton[data-attribute='withdrawMoney']");
            const withdrawXloader = withdrawButton.querySelector("xloader");
            console.log(withdrawButton);
            console.log(withdrawXloader);
            // Handle form submission
            withdrawButton.addEventListener("click", async () => {

                // Activate loader
                withdrawXloader.classList.add("active");
                withdrawButton.classList.add("pointer-events-none");

                try {
                    // Prepare form data and API details
                    const url = `${window.location.origin}/post/referral-transaction/withdrawMoney`;
                    const contentType = "application/x-www-form-urlencoded";

                    // reCAPTCHA verification
                    const captchaResponse = await verifyRecaptcha();
                    if (!captchaResponse?.success) {
                        return injectContentStylesAndScripts(document.body, captchaResponse?.backend?.message);
                    }

                    // Send form data
                    const response = await postRequest(url, contentType);
                    if (response) {
                        return injectContentStylesAndScripts(document.body, response?.backend?.message);
                    }

                } catch (error) {
                    console.error("Form submission error:", error);
                } finally {
                    withdrawXloader.classList.remove("active");
                    withdrawButton.classList.remove("pointer-events-none");
                }

            });
        })();
    </script>
@endsection
