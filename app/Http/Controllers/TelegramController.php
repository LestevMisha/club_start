<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{
    public function __construct(
        protected \App\Services\TelegramServices $telegramServices,
        protected \App\Services\Models\UserServices $userServices,
    ) {}

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
            $this->userServices->updateUser(["uuid" => $email], "uuid", $user->uuid);
            $this->userServices->updateUser(["email_verified_at" => null], "uuid", $user->uuid);
            return $this->telegramServices->sendMarkdownV2Message($chat_id, $messages[4]);
        }

        // /getInfo - 'get common info about the club' command
        if (strpos($message, "getInfo")) {
            return $this->telegramServices->sendMessage($chat_id, file_get_contents(dirname(dirname(__DIR__)) . "/Telegram/Commands/messages/registerResponse.txt"));
        }

        return $this->telegramServices->sendMessage($chat_id, $messages[7]);
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
