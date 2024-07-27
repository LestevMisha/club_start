<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\ModelServices;
use App\Services\TelegramServices;
use Illuminate\Support\Facades\Validator;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{
    private $telegramServices;
    private $modelServices;

    public function __construct()
    {
        $this->telegramServices = app(TelegramServices::class);
        $this->modelServices = app(ModelServices::class);
    }

    public function handle()
    {
        $update = Telegram::commandsHandler(true);

        $chat_id = isset($update["message"]["chat"]["id"]) ? $update["message"]["chat"]["id"] : null;
        // ignore everything except real message
        if (!$chat_id) return;
        // ignore bot respond on group's notifications
        if ($chat_id == config("services.telegram.group_id")) return;
        // retrieve data
        $user_id = $update["message"]["from"]["id"];
        $message = $update["message"]["text"];




        $admin_messages = [
            0 => "❌ Пользователю уже были переведены деньги!\nПопробуйте позже.",
            1 => "✅ Отлично, пользователь успешно уведомлен!",
            2 => "❌ Что-то пошло не так. Данного пользователя не существует, обратитесь в поддержку.",
            5 => "Доступные комманды - /withdrawalUsers, /changeEmail, /getInfo",
            6 => "На данный момент все партнеры обработаны и оплачены ✅",
        ];

        if ($chat_id == config("services.telegram.notifications_chat_id")) {

            // /withdrawalUsers - shows the list of users that requested withdrawal
            if (strpos($message, "withdrawalUsers")) {
                $withdrawalUsers = $this->modelServices->getWithdrawalUsers();

                if ((int)$withdrawalUsers->count() === 0) {
                    return $this->telegramServices->sendMessage($chat_id, $admin_messages[6]);
                }

                // Process each user
                foreach ($withdrawalUsers as $user) {
                    $card_credentials = $this->modelServices->getCardCredentials($user->uuid);
                    $this->telegramServices->sendMoneyWithdrawalNotification($user->uuid, $user->amount, $card_credentials->card_number, $card_credentials->card_holder_name);
                }
                return;
            }

            // /paid <value> - handle admin who will admit the payment sent to partner user
            if (strpos($message, "paid")) {
                $uuid = explode(" ", $message)[1];
                $partner_user = User::where("uuid", $uuid)->first();
                if ($partner_user) {
                    if ((int)$partner_user->withdrawal_notification_sent === 0) return $this->telegramServices->sendMessage($chat_id, $admin_messages[0]);
                    $this->modelServices->updateUser("uuid", $partner_user->uuid, "withdrawal_notification_sent", 0);
                    $this->modelServices->updateUser("uuid", $partner_user->uuid, "amount", 0);
                    return $this->telegramServices->sendMessage($chat_id, $admin_messages[1]);
                } else {
                    return $this->telegramServices->sendMessage($chat_id, $admin_messages[2]);
                }
            }
        }

        // observe user / ignore any stranger who is not a user in our database
        $user = User::where("telegram_id", $user_id)?->first();
        if (!$user) return;

        // any start message will be handled by app/Telegram/Commands/StartCommand.php
        if (strpos($message, "start")) return;

        $messages = [
            3 => "*$user->name* ваша текущая почта $user->email. Чтобы изменить текущюю почту напишите /changeEmail пробел <новая почта>, пример: `/changeEmail example@mail.ru`",
            4 => "✅ Отлично, мы заменили вашу почту!",
            7 => "Доступные комманды - /changeEmail, /getInfo",
        ];

        // /changeEmail - instractions to change email
        if ($message === "/changeEmail") {
            return $this->telegramServices->sendMarkdownV2Message($chat_id, $messages[3]);
        }

        // /changeEmail <value> - change email command
        if (strpos($message, "changeEmail")) {
            $email = explode(" ", $message)[1];
            $validator = Validator::make(["email" => $email], [
                'email' => 'required|email|unique:users,email',
            ]);
            if ($validator->fails()) return $this->telegramServices->sendMessage($chat_id, $validator->errors()->first("email"));
            $this->modelServices->updateUser("uuid", $user->uuid, "email", $email);
            $this->modelServices->updateUser("uuid", $user->uuid, "email_verified_at", null);
            return $this->telegramServices->sendMarkdownV2Message($chat_id, $messages[4]);
        }

        // /getInfo - 'get common info about the club' command
        if (strpos($message, "getInfo")) {
            return $this->telegramServices->sendMessage($chat_id, file_get_contents(dirname(dirname(__DIR__)) . "/Telegram/Commands/messages/registerResponse.txt"));
        }

        if ($chat_id == config("services.telegram.notifications_chat_id")) {
            // <any message> - default answer to admin
            return $this->telegramServices->sendMessage($chat_id, $admin_messages[5]);
        } else {
            // <any message> - default answer
            return $this->telegramServices->sendMessage($chat_id, $messages[7]);
        }
    }

    public function setWebhook()
    {
        $url = config("services.website.url") . "/1MIIJRAIBADANBgkqhkiG9w0BAQEFAASCCS4wggkqAgEAAoICAQC0dr14WFaDsDJsGvjxdCA8sD9GHD3/webhook";
        $request = Telegram::setWebhook([
            "url" => $url
        ]);
        dd($request, $url);
    }

    public function removeWebhook()
    {
        $response = Telegram::removeWebhook();
        dd($response);
    }
}
