<?php

namespace App\Telegram\Commands;

use App\Models\User;
use App\Services\TelegramServices;
use Telegram\Bot\Commands\Command;
use Telegram\Bot\Laravel\Facades\Telegram;


// BOT'S JOB
class StartCommand extends Command
{
    protected string $name = 'start';
    protected string $description = 'Start Command to get you started';

    public function handle()
    {
        /* --------------- MARK: INIT --------------- */
        logger("app/Telegram/Commands/StartCommand.php");
        $updates = $this->getUpdate();

        // services data
        $group_id = config("services.telegram.group_id");



        /* --------------- MARK: CHECK IN --------------- */
        // Ignore everything except real messages
        $chat_id = isset($updates["message"]["chat"]["id"]) ? $updates["message"]["chat"]["id"] : null;
        if (!$chat_id) return;

        // Ignore all meassages in `Club Start` group
        if ($chat_id == config("services.telegram.group_id")) return;

        // Ignore if it is a bot
        if ($updates["message"]["from"]["is_bot"]) return;



        /* --------------- MARK: DATA RETREIVING --------------- */
        // Retreiving important parameters (metadata)
        $telegram_two_parameters = $updates["message"]["text"];

        // Retreiving basic user info
        $telegram_user = $updates['message']['from'];
        if ($telegram_user) {
            // full name
            $telegram_user_full_name = $telegram_user["first_name"] . " " . $telegram_user["last_name"];
            // telegram id
            $telegram_user_id = $telegram_user["id"];
            // username
            $telegram_user_username = $telegram_user["username"];
        }



        try {
            /* --------------- MARK: INIT STEP-2 --------------- */
            // Getting 2 parameters (metadata)
            $data = explode(" ", $telegram_two_parameters)[1];
            list($uuid, $target) = explode("_", $data);



            /* --------------- MARK: CHECK IN STEP-2 --------------- */
            // Getting user from database
            $user = User::where("uuid", $uuid)->first();
            // If user edited the telegram link and made it incorrect, then inform that uuid was changed and is currently incorrect
            if (!$user) {
                $this->replyWithMessage(['text' => "Вы не находитесь в нашей базе данных. Если вы изменяли telegram ссылку, пожайлуйста вернитесь на сайт и нажмите `Перейти в Телеграм` кнопку еще раз, если ничего не помогло пожалуйста обратитесь в тех-поддержку."]);
                return;
            }

            /* check if web-user is trying to get information from the telegram account,
            that is different to the one that is linked to the web-user account */
            $telegram_user = User::where("telegram_id", $telegram_user_id)->first();
            if (($telegram_user !== null)) {
                $this->replyWithMessage(['text' => "Данный телеграм аккаунт уже привязан к другому start-аккаунту."]);
                return;
            }



            /* --------------- MARK: PROCCESSING --------------- */
            if ($target === "verify") {

                // check if there's none with this id registered, otherewise decline.
                if (User::where("telegram_id", $telegram_user_id)->exists()) {
                    $this->replyWithMessage(['text' => "Хм.. 🤔 этот аккаунт уже был зарегестрирован, попробуйте войти в профиль тут 👉" . " " . config("services.website.url")]);
                    return;
                }

                // Check if user is already verified, if so REPLY
                if ($user->telegram_id !== null) {
                    $this->replyWithMessage(['text' => "Ваш аккаунт уже вeрефицирован. 😎 Ваш профиль тут 👉" . " " . config("services.website.url")]);
                    return;
                }

                // Check if user is already in the club's group (exempted from the payment)
                try {
                    $request = Telegram::getChatMember([
                        "chat_id" => $group_id,
                        "user_id" => $telegram_user_id,
                    ]);
                    logger($request);
                    if ($request->status === "kicked") return;

                    // user is in the group chat if he was successfully found.
                    $user->group_exempted = 1;
                    $user->telegram_id = $telegram_user_id;
                    $user->telegram_username = $telegram_user_username;
                    $user->save();
                    $this->replyWithMessage(['text' => "✅ 🎉 " . $telegram_user_full_name . " " . "вы успешно зарегестрировались на оффициальном вебсайте Клуба Start!\n\nТак как вы уже являетесь участником нашей комманды мы освобождаем вас от оплаты в 6000 руб.\n\nПриступайте сразу к работе" . " " . config("services.website.url") . "/dashboard"]);
                    return true;
                } catch (\Exception $e) {
                    // ignore .. continue to register user
                }

                // update user
                $user->telegram_id = $telegram_user_id;
                $user->telegram_username = $telegram_user_username;
                $user->save();

                if ($request) {
                    if ($request->status === "kicked") {
                        $this->replyWithMessage(['text' => "С возвращением ✅" . $telegram_user_full_name . "! " . "вы успешно зарегестрировались! Перейдите на сайт и перезагрузите страницу. Вернуться 👉" . " " . config("services.website.url")]);
                    }
                }

                $this->replyWithMessage(['text' => "✅" . $telegram_user_full_name . " " . "вы успешно зарегестрировались! Перейдите на сайт и перезагрузите страницу. Вернуться 👉" . " " . config("services.website.url")]);
            } else if ($target === "information") {
                $this->replyWithMessage(['text' => "✅" . $telegram_user_full_name . " " . file_get_contents(__DIR__ . "/messages/registerResponse.txt")]);
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
