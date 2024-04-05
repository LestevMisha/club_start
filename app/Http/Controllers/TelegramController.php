<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\TelegramServices;
use Illuminate\Support\Facades\Validator;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{

    public function handle()
    {
        $update = Telegram::commandsHandler(true);
        $user_id = $update["message"]["from"]["id"];

        // check if user is registered on the website
        $user = User::where("telegram_id", $user_id)?->first();
        if ($user) {
            $message = $update["message"]["text"];
            // any start message will be handled by app/Telegram/Commands/StartCommand.php
            if (strpos($message, "start")) return;

            // change email instractions
            if ($message === "/changeEmail") {
                $telegramServices = app(TelegramServices::class);
                $text = $telegramServices->markdownv2("*$user->name* ваша текущая почта $user->email. Чтобы изменить текущюю почту напишите /changeEmail пробел <новая почта>, пример: `/changeEmail example@mail.ru`");
                return Telegram::sendMessage([
                    "chat_id" => $update["message"]["chat"]["id"],
                    "text" => $text,
                    "parse_mode" => "MarkdownV2",
                ]);
            }

            // change email
            if (strpos($message, "changeEmail")) {
                $email = explode(" ", $message)[1];
                $validator = Validator::make(["email" => $email], [
                    'email' => 'required|email|unique:users,email',
                ]);

                if ($validator->fails()) {
                    return Telegram::sendMessage([
                        "chat_id" => $update["message"]["chat"]["id"],
                        "text" => $validator->errors()->first("email"),
                    ]);
                } else {
                    $user->email = $email;
                    $user->save();
                    return Telegram::sendMessage([
                        "chat_id" => $update["message"]["chat"]["id"],
                        "text" => "✅ Отлично, мы заменили вашу почту!",
                    ]);
                }
            }

            // default answer
            return Telegram::sendMessage([
                "chat_id" => $update["message"]["chat"]["id"],
                "text" => "Доступные текущие комманды - /changeEmail",
            ]);
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
        Telegram::removeWebhook();
    }

    function isAdmin(string $chat_id, int $target_id)
    {
        // check if user is admin
        $admins = Telegram::getChatAdministrators([
            'chat_id' => $chat_id,
        ]);

        foreach ($admins as $admin) {
            if ($admin["user"]["id"] == $target_id) {
                return 1;
            }
        }
        return 0;
    }
}
