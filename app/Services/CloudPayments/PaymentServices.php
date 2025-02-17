<?php

namespace App\Services\CloudPayments;

use App\Models\Transaction;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use AvtoDev\CloudPayments\Client;
use AvtoDev\CloudPayments\Config;
use GuzzleHttp\Exception\GuzzleException;
use AvtoDev\CloudPayments\Requests\Payments\Cards\CardsPost3DsRequestBuilder;

use GuzzleHttp\Client as GuzzleClient;

class PaymentServices
{
    private Client $client;

    public function __construct()
    {
        $this->client = $this->initializeClient();
    }

    // Create a new payment
    public function createPayment($data)
    {
        // Prepare API endpoint
        $endpoint = "/payments/cards/auth";

        // Prepare payload to send to CloudPayments
        $params = [
            'Amount'               => (float) $data['amount'],
            'Currency'             => $data['currency'],
            'IpAddress'            => $data['ip'],
            'CardCryptogramPacket' => $data['cryptogram'],
            'Name'                 => $data['name'],
            'PaymentUrl'           => $data['payment_url'],
            'InvoiceId'            => $data['invoice_id'],
            'Description'          => $data['description'],
            'CultureName'          => $data['culture_name'],
            'AccountId'            => $data['account_id'],
            'Email'                => $data['email'],
            'JsonData'             => $data['json_data'],
            'SaveCard'             => (bool) $data['is_recurring'], // recurring or not
        ];

        // Send request
        $response = $this->sendRequest($endpoint, $params);

        // Return a normalized object for the rest of the app to use
        return (object) [
            'status' => $response->Model->Status,
            'data'   => json_encode([
                'MD'     => $response->Model->TransactionId ?? null,
                'PaReq'  => $response->Model->PaReq         ?? null,
                'AcsUrl' => $response->Model->AcsUrl        ?? null,
                'TermUrl' => config('services.cloud_payments.term_url'), // or from $data if needed
            ]),
        ];
    }

    // Handle callback after 3D secure verification
    public function callback(Request $request): mixed
    {
        // (security verification) Stable IPs range check
        $cloudPaymentsIPsRange = [
            "178.248.238.60", // api.cloudpayments.ru
            "178.248.239.99", // acs.cloudpayments.ru
        ];
        $referrer = request()->headers->get('referer');
        if ($referrer) {
            $host = parse_url($referrer, PHP_URL_HOST);
            $ip = gethostbyname($host); // Get the IP of the host
        }
        if (!in_array($ip, $cloudPaymentsIPsRange)) {
            return response("Invalid request", 400);
        }

        // (security verification) Check if the request has the required fields
        if (!$request->has("MD") || !$request->has("PaRes")) {
            return response("Invalid request", 400);
        }

        try {
            $request_builder = new CardsPost3DsRequestBuilder;
            $request_builder->setTransactionId($request->input("MD"));
            $request_builder->setPaRes($request->input("PaRes"));
            $request = $request_builder->buildRequest();
            $response = $this->client->send($request);
            $body = json_decode($response->getBody());
            $jsonData = json_decode($body->Model->JsonData);

            // Extra authorization data
            $tid = $jsonData->tid;
            $signature = $jsonData->signature;
            $userUuid = $body->Model->AccountId;

            // (security verification) Authorization of transaction `uuid` and user `uuid` and `telegram_id`
            try {
                $decryptedTid = decrypt($tid);
                $decryptedSignature = decrypt($signature);
            } catch (Exception $e) {
                // If tampered or invalid, decrypt() will throw an exception
                return response("Invalid request", 400);
            }

            $user = User::where('telegram_id', $decryptedTid)
                ->where('uuid', $userUuid)
                ->first();

            $transaction = Transaction::where('uuid', $decryptedSignature)
                ->where('account_id', $userUuid)
                ->first();

            if (!$user || !$transaction) {
                return response("Invalid request", 400);
            }

            return (object) ["body" => $body, "uuid" => $decryptedSignature];
        } catch (GuzzleException $e) {
            // Log and handle the specific exception
            throw new Exception('Callback processing failed: ' . $e->getMessage());
        }
    }

    // Initialize CloudPayment's Client object
    private function initializeClient(): Client
    {
        $config = new Config(
            config("services.cloud_payments.public_id"),
            config("services.cloud_payments.api_key")
        );
        return new Client(new GuzzleClient(), $config);
    }















    public function tokenTopUp($token, $amount, $accountId)
    {
        logger("tokenTopUp: ");

        // Prepare API endpoint
        $endpoint = "/payments/token/topup";

        // Prepare payload
        $payload = [
            'Token'     => $token,
            'Amount'    => $amount,
            'AccountId' => $accountId,
            'Currency' => "RUB",
        ];

        // Send request
        $response = $this->sendRequest($endpoint, $payload);
        logger($response);
    }

    protected function sendRequest($endpoint, array $params = [])
    {

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.cloudpayments.ru' . $endpoint);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
        curl_setopt($curl, CURLOPT_USERPWD, sprintf('%s:%s', config("services.cloud_payments.public_id"), config("services.cloud_payments.api_key")));
        curl_setopt($curl, CURLOPT_TIMEOUT, 20);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 2);

        $result = curl_exec($curl);
        logger($result);

        curl_close($curl);

        return json_decode($result, false);
    }
}
