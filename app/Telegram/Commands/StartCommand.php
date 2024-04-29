<?php

namespace App\Telegram\Commands;

use App\Models\User;
use App\Services\TelegramServices;
use Telegram\Bot\Commands\Command;
use Telegram\Bot\Laravel\Facades\Telegram;

class StartCommand extends Command
{
    protected string $name = 'start';
    protected string $description = 'Start Command to get you started';

    public function handle()
    {
        logger("app/Telegram/Commands/StartCommand.php");
        $updates = $this->getUpdate();

        $chat_id = isset($updates["message"]["chat"]["id"]) ? $updates["message"]["chat"]["id"] : null;
        // ignore everything except real message
        if (!$chat_id) return;
        // ignore bot respond on group's requests
        if ($chat_id == config("services.telegram.group_id")) return;
        // retrieve data
        $activation = $updates["message"]["text"];
        $new_user = $updates['message']['from'];
        $last_name = isset($new_user['last_name']) ? $new_user['last_name'] : '';
        $name = $new_user['first_name'] . " " . $last_name;
        $id = $new_user["id"];

        try {
            // get sent metadata (if possible)
            $data = explode(" ", $activation)[1];
            list($uuid, $target) = explode("_", $data);
            $user = User::where("uuid", $uuid)->first();

            // check if web-user is trying to get information from the telegram account that is different to the one that is linked to the web-user account
            $telegram_user = User::where("telegram_id", $id)->first();

            if (($telegram_user !== null) && ($telegram_user->uuid !== $user->uuid)) {
                logger("here->2");
                $this->replyWithMessage(['text' => "Убедитесь что телеграм аккаунт привязаный на сайте соответствует данному телеграм аккаунту."]);
                return;
            }

            if ($target === "verify") {

                // check if there's none with this id registered, otherewise decline.
                if (User::where("telegram_id", $id)->exists()) {
                    $this->replyWithMessage(['text' => "Хм.. 🤔 этот аккаунт уже был зарегестрирован, попробуйте войти в профиль тут 👉" . " " . config("services.website.url")]);
                    return;
                }

                // Check if user is already verified, if so REPLY
                if ($user->telegram_id !== null) {
                    $this->replyWithMessage(['text' => "Ваш аккаунт уже вeрефицирован. 😎 Ваш профиль тут 👉" . " " . config("services.website.url")]);
                    return;
                }

                // update user
                $user->telegram_id = $new_user['id'];
                $user->telegram_username = $new_user['username'];
                $user->save();
                $this->replyWithMessage(['text' => "✅" . $name . " " . "вы успешно зарегестрировались! Перейдите на сайт и перезагрузите страницу. Вернуться 👉" . " " . config("services.website.url")]);
            } else if ($target === "information") {
                $this->replyWithMessage(['text' => "✅" . $name . " " . file_get_contents(__DIR__ . "/messages/registerResponse.txt")]);
                $this->replyWithMessage(['text' => "Доступ в клуб START ✅ - https://t.me/+U86N3fnqA7wzM2Vl"]);
            } else if ($target === "changeEmail") {
                $telegramServices = app(TelegramServices::class);
                $text = $telegramServices->markdownv2("*$user->name* ваша текущая почта $user->email. Чтобы изменить текущюю почту напишите /changeEmail пробел <новая почта>, пример: `/changeEmail example@mail.ru`");
                Telegram::sendMessage([
                    "chat_id" => $updates["message"]["chat"]["id"],
                    "text" => $text,
                    "parse_mode" => "MarkdownV2",
                ]);
            }
        } catch (\Exception $e) {
            // Check if user wasn't transferred, if so REPLY
            $this->replyWithMessage(['text' => "Хотите зрегестрироваться на Start Марафон? 😃 Перейдите по ссылке 👉" . " " . config("services.website.url")]);
            return;
        }
    }
}
