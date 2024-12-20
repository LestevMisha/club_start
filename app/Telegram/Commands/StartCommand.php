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

    private function saveUserChanges($user, $telegram_id, $telegram_username, $message)
    {
        // save the user
        $user->telegram_id = $telegram_id;
        $user->telegram_username = $telegram_username;
        $user->save();
        // reply with the message
        $this->replyWithMessage([
            'text' => $message,
            "parse_mode" => "MarkdownV2",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        [
                            'text' => 'Перейти на сайт', // Button text
                            'url' => config('services.website.url') . '/dashboard' // URL for the button
                        ]
                    ]
                ]
            ])
        ]);
        
        // $this->replyWithMessage(['text' => $message, "parse_mode" => "MarkdownV2"]);
    }

    public function handle()
    {
        /* --------------- MARK: INIT --------------- */
        // logger("app/Telegram/Commands/StartCommand.php");
        $telegramServices = app(TelegramServices::class);
        $updates = $this->getUpdate();



        /* --------------- MARK: CHECK IN --------------- */
        // Ignore everything except real messages
        $chat_id = isset($updates["message"]["chat"]["id"]) ? $updates["message"]["chat"]["id"] : null;
        if (!$chat_id) return;

        // Ignore all meassages in `Club Start` group
        $group_id = config("services.telegram.group_id");
        if ($chat_id === $group_id) return;

        // Ignore if it is a bot
        if ($updates["message"]["from"]["is_bot"]) return;



        /* --------------- MARK: DATA RETREIVING --------------- */
        // Retreiving important parameters (metadata)
        $telegram_two_parameters = $updates["message"]["text"];

        // Retreiving basic user info
        $telegram_user = $updates['message']['from'];
        if (isset($telegram_user)) {
            // full name (check last name because it is optinal) --- DO NOT REMOVE ISSET!!!
            $last_name = isset($telegram_user["last_name"]) ? $telegram_user["last_name"] : '';
            $telegram_user_full_name = $telegram_user["first_name"] . " " . $last_name;
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

            // user observed from two differnt sources if information
            $userByUuid = User::where("uuid", $uuid)->first();
            $userByTg = User::where("telegram_id", $telegram_user_id)->first();



            /* --------------- MARK: PROCCESSING --------------- */
            if ($target === "verify") {
                // Check if there is such a `uuid` in the database. (i. e. if user edited the telegram link and made it incorrect, then inform that uuid was changed and is currently incorrect)
                if (!User::where("uuid", $uuid)->exists()) {
                    $this->replyWithMessage(['text' => $telegramServices->markdownv2("Вы не находитесь в нашей базе данных. Если вы изменяли telegram ссылку, пожайлуйста вернитесь на сайт и нажмите 'Перейти в Телеграм' кнопку еще раз, если ничего не помогло пожалуйста обратитесь в тех-поддержку."), "parse_mode" => "MarkdownV2"]);
                    return;
                }

                // Check if user is already verified (so that user found by `telegram_id` (userByTg) and by `uuid` (userByUuid), passed by url, match)
                if ($userByUuid->uuid === $userByTg?->uuid) {
                    $this->replyWithMessage(['text' => $telegramServices->markdownv2("Ваш start-аккаунт уже вeрефицирован 👌 ✅"), "parse_mode" => "MarkdownV2"]);
                    return;
                } else {
                    // Check if there is no one with this user's `telegram_id` in the database.
                    if (User::where("telegram_id", $telegram_user_id)->exists()) {
                        $this->replyWithMessage(['text' => $telegramServices->markdownv2("Данный телеграм аккаунт уже привязан к другому *start-аккаунту*."), "parse_mode" => "MarkdownV2"]);
                        return;
                    }
                }

                // Check if user is already in the club's group (exempted from the payment)
                logger("you disabled telegram exemption");
                if (1 > 10) {
                    try {
                        $request_chat_member = Telegram::getChatMember([
                            "chat_id" => $group_id,
                            "user_id" => $telegram_user_id,
                        ]);

                        // exempted users
                        if ($request_chat_member->status === "creator") {
                            $userByUuid->telegram_channel_status = "creator";
                            $userByUuid->telegram_channel_exempted = 1;
                            $this->saveUserChanges($userByUuid, $telegram_user_id, $telegram_user_username, $telegramServices->markdownv2("✅ ⭐ Здравствуйте " . $telegram_user_full_name . "!\n\nВы успешно зарегестрировались на оффициальном веб-сйте _*Club Start* а так-же являетесь создателем канала.\n\n*Следуйщий Шаг* 👇👇👇"));
                            return;
                        };
                        if ($request_chat_member->status === "administrator") {
                            $userByUuid->telegram_channel_status = "administrator";
                            $userByUuid->telegram_channel_exempted = 1;
                            $this->saveUserChanges($userByUuid, $telegram_user_id, $telegram_user_username, $telegramServices->markdownv2("✅ 🌟 Здравствуйте " . $telegram_user_full_name . "!\n\nВы успешно зарегестрировались на оффициальном веб-сйте _*Club Start* а так-же являетесь текущим администратором канала.\n\n*Следуйщий Шаг* 👇👇👇"));
                            return;
                        };
                        if ($request_chat_member->status === "member") {
                            $userByUuid->telegram_channel_status = "member";
                            $userByUuid->telegram_channel_exempted = 1;
                            $this->saveUserChanges($userByUuid, $telegram_user_id, $telegram_user_username, $telegramServices->markdownv2("✅ 🤝 Здравствуйте " . $telegram_user_full_name . "!\n\nВы успешно зарегестрировались на оффициальном веб-сйте _*Club Start* а так-же являетесь текущим участником канала.\n\n*Следуйщий Шаг* 👇👇👇"));
                            return;
                        };
                        if ($request_chat_member->status === "restricted") {
                            $userByUuid->telegram_channel_status = "restricted";
                            $userByUuid->telegram_channel_exempted = 1;
                            $this->saveUserChanges($userByUuid, $telegram_user_id, $telegram_user_username, $telegramServices->markdownv2("✅ 🤝 Здравствуйте " . $telegram_user_full_name . "!\n\nВы успешно зарегестрировались на оффициальном веб-сйте _*Club Start* а так-же являетесь текущим участником канала.\n\n*Следуйщий Шаг* 👇👇👇"));
                            return;
                        };
                        // those who are not in the chat
                        if ($request_chat_member->status === "left") {
                            $userByUuid->telegram_channel_status = "left";
                            $this->saveUserChanges($userByUuid, $telegram_user_id, $telegram_user_username, $telegramServices->markdownv2("✅ 🚀 С возвращением " . $telegram_user_full_name . "!\n\nВы успешно зарегестрировались на оффициальном веб-сайте *Club Start*!\n\n*Следуйщий Шаг* 👇👇👇"));
                            // throw new \Exception('User isn\'t exempted');
                            return;
                        };
                        if ($request_chat_member->status === "kicked") {
                            $userByUuid->telegram_channel_status = "kicked";
                            $this->saveUserChanges($userByUuid, $telegram_user_id, $telegram_user_username, $telegramServices->markdownv2("✅ 🗿 С возвращением " . $telegram_user_full_name . "!\n\nВы успешно зарегестрировались на оффициальном веб-сайте *Club Start*!\n\n*Следуйщий Шаг* 👇👇👇"));
                            // throw new \Exception('User isn\'t exempted');
                            return;
                        };
                    } catch (\Exception $e) {
                        // ignore .. continue to register user
                    }
                }

                // update user
                $this->saveUserChanges($userByUuid, $telegram_user_id, $telegram_user_username, $telegramServices->markdownv2("✅ Приветствуем " . $telegram_user_full_name . "! Вы успешно зарегестрировались на оффициальном веб-сайте *Club Start*!\n\n*Следуйщий Шаг* 👇👇👇"));
            } else if ($target === "information") {
                if ($userByUuid->uuid === $userByTg?->uuid) {
                    $this->replyWithMessage(['text' => "✅" . $telegram_user_full_name . " " . file_get_contents(__DIR__ . "/messages/registerResponse.txt")]);
                    return;
                } else {
                    $this->replyWithMessage(['text' => $telegramServices->markdownv2("❌ Выберите правильный телеграм аккаунт (если их несколько) и попробуйте еще раз.\n__Данный телеграм аккаунт__ не соответствует __start-аккаунту__ с которого вы запросили команду."), "parse_mode" => "MarkdownV2"]);
                    return;
                }
            } else if ($target === "changeEmail") {
                if ($userByUuid->uuid === $userByTg?->uuid) {
                    $this->replyWithMessage(['text' => $telegramServices->markdownv2("*$userByUuid->name* ваша текущая почта $userByUuid->email.\nЧтобы изменить текущюю почту напишите /changeEmail пробел <новая почта>, пример: `/changeEmail example@mail.ru`"), "parse_mode" => "MarkdownV2"]);
                    return;
                } else {
                    $this->replyWithMessage(['text' => $telegramServices->markdownv2("❌ Выберите правильный телеграм аккаунт (если их несколько) и попробуйте еще раз.\n__Данный телеграм аккаунт__ не соответствует __start-аккаунту__ с которого вы запросили команду."), "parse_mode" => "MarkdownV2"]);
                    return;
                }
            }
        } catch (\Exception $e) {
            // Check if user wasn't transferred, if so REPLY
            $this->replyWithMessage(['text' => $telegramServices->markdownv2("Хотите стать участником *Клуба Start*? 😃 Подробнее здесь 👉" . " "), "parse_mode" => "MarkdownV2"]);
            return;
        }
    }
}
