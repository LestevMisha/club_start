<?php

namespace App\Http\Controllers\Pages\Intermediate;

use Exception;
use Carbon\Carbon;
use Transliterator;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct(
        protected \App\Services\CloudPayments\PaymentServices $paymentServices,
        protected \App\Services\Models\TransactionServices $transactionServices,
        protected \App\Services\Models\UserServices $userServices,
    ) {}

    // generate payment
    public function pay(Request $request)
    {
        $user = Auth::user();
        $invoiceId = (string) Str::uuid();

        // Gather base transaction data
        $baseData = [
            'amount'       => (float) config('services.cloud_payments.payment_amount'),
            'invoice_id'   => $invoiceId,
            'account_id'   => $user->uuid,
            'description'  => config('services.cloud_payments.payment_description'),
            'is_recurring' => (bool) config('services.cloud_payments.payment_is_recurring'),
        ];

        // 1.1 Merge data for the transaction creation
        $transactionPayload = (array) array_merge($baseData, ['referred_by_uuid' => $user->referred_by_uuid,]);

        // 1.2 Create transaction record
        $transaction = $this->transactionServices->createTransaction($transactionPayload);
        $transaction_uuid = $transaction->uuid;

        // 2.1 Additional data for creating the payment via CloudPayments
        $paymentData = [
            'ip'            => $request->ip(),
            'cryptogram'    => $request->input('cryptogram'),
            'currency'      => config('services.cloud_payments.payment_currency'),
            'name'          => $this->transliterate($user->name),
            'payment_url'   => config('services.cloud_payments.payment_url'),
            'culture_name'  => config('services.cloud_payments.payment_language'),
            'email'         => $user->email,
            'json_data'     => [
                'tid'       => encrypt($user->telegram_id),
                'signature' => encrypt($transaction_uuid),
            ],
        ];

        // 2.1 Merge data for the payment creation
        $paymentPayload  = array_merge($baseData, $paymentData);

        try {
            // 2.2 Initiate the payment with CloudPayments
            $paymentResponse = $this->paymentServices->createPayment($paymentPayload);

            // 1.3 Update transaction status
            $this->transactionServices->updateTransaction(["status" => $paymentResponse->status], "uuid", $transaction_uuid);

            // Return data
            return $paymentResponse->data;
        } catch (Exception $e) {
            // Transaction Failed
            $this->transactionServices->updateTransaction(["status" => "Failed"], 'uuid', $transaction_uuid);
            throw new Exception('Payment failed: ' . $e->getMessage());
        }
    }


    // trigger callback (01/27/2025)
    public function callback(Request $request)
    {
        $response = $this->paymentServices->callback($request);

        // Check if the response is an Illuminate\Http\Response
        if ($response instanceof \Illuminate\Http\Response) {
            // Return the response as is (e.g., for error scenarios)
            return $response;
        }

        $body = $response->body;

        $uuid = $response->uuid;

        $account_id = $body->Model->AccountId;

        $update_data = [
            'status'              => $body->Model->Status,
            'transaction_id'      => $body->Model->TransactionId,
            'payment_currency'    => $body->Model->PaymentCurrency,
            'card_first_six'      => $body->Model->CardFirstSix,
            'card_last_four'      => $body->Model->CardLastFour,
            'card_type'           => $body->Model->CardType,
            'card_exp_date'       => $body->Model->CardExpDate,
            'auth_code'           => $body->Model->AuthCode,
            'test_mode'           => $body->Model->TestMode,
            'created_date'        => $this->parseDotNetDate($body->Model->CreatedDate),
            'auth_date'           => $this->parseDotNetDate($body->Model->AuthDate),
            'confirm_date'        => $this->parseDotNetDate($body->Model->ConfirmDate),
            'reason_code'         => $body->Model->ReasonCode,
            'reason'              => $body->Model->Reason,
            'card_token'          => $body->Model->Token,
            'ip_address'          => $body->Model->IpAddress,
        ];

        // 1.1 Update user `days_left`
        $this->userServices->updateUser(["days_left" => 30], "uuid", $account_id);

        // 1.2 Update transaction
        $this->transactionServices->updateTransaction($update_data, "uuid", $uuid);

        return redirect()->route("private.dashboard");
    }


    /* +++++++++++++++++++ HELPERS +++++++++++++++++++ */
    public function transliterate($str)
    {
        $rules = <<<'RULES'
    :: NFC ;
    ё > e; ж > zh; й > i; х > kh; ц > ts; ч > ch; ш > sh; щ > sch;
    э > e; ю > iu; я > ia;
    :: Cyrillic-Latin ;
RULES;
        $transliterator = Transliterator::createFromRules($rules);
        $transString = $transliterator->transliterate(mb_strtolower($str, "UTF-8"));
        return ucwords($transString);
    }

    function parseDotNetDate($dotNetString): ?string
    {
        if (preg_match('/\/Date\((\d+)\)\//', $dotNetString, $matches)) {
            $milliseconds = (int) $matches[1];
            return Carbon::createFromTimestampMs($milliseconds)->format('Y-m-d H:i:s');
        }
        return null;
    }

    /* +++++++++++++++++++ INITIALIZATION +++++++++++++++++++ */
    public function __invoke()
    {
        return view("pages.intermediate.payment.bundled");
    }
}
