<?php

namespace App\Services;

use GuzzleHttp\Client;
use Telegram\Bot\Laravel\Facades\Telegram;
use Telegram\Bot\Exceptions\TelegramResponseException;

class TelegramServices
{


    public function __construct(protected \App\Services\Models\AvatarServices $avatarServices) {}

    public function getCustomTelegramLink($arg, $uuid)
    {
        $base = config("services.telegram.bot_url");
        $param = implode("_", [$arg, $uuid]);
        return "{$base}?start={$param}";
    }

    public function getRegisterLink() {
        $referred_by_uuid = request()->query('referred_by_uuid', request()->cookie("referred_by_uuid"));
        return $this->getCustomTelegramLink("web", $referred_by_uuid);
    }

    function markdownv2($text)
    {
        // List of characters to be escaped
        $characters = ['[', ']', '(', ')', '~', '>', '#', '+', '-', '=', '|', '{', '}', '.', '!'];

        // Iterate over the list of characters and escape them
        foreach ($characters as $char) {
            $text = str_replace($char, '\\' . $char, $text);
        }

        return $text;
    }

    public function isAdmin(string $chat_id, int $target_id)
    {
        // check if user is admin
        $admins = Telegram::getChatAdministrators([
            'chat_id' => $chat_id,
        ]);

        foreach ($admins as $admin) {
            if ($admin["user"]["id"] == $target_id) return 1;
        }
        return 0;
    }

    public function banChatMember(string $chat_id, int $user_id)
    {
        Telegram::banChatMember([
            'chat_id' => $chat_id,
            'user_id' => $user_id,
        ]);
    }

    public function unbanChatMember(string $chat_id, int $user_id)
    {
        try {
            Telegram::unbanChatMember([
                'chat_id' => $chat_id,
                'user_id' => $user_id,
                'only_if_banned' => true,
            ]);
        } catch (TelegramResponseException $e) {
            // TODO
        }
    }

    public function sendMoneyWithdrawalNotification($uuid, $amount, $card_number)
    {
        return $this->sendMarkdownV2Message(
            config("services.telegram.notifications_chat_id"),
            "*Уведомление о выводе средств*\n\n*Сумма перевода*: __$amount руб.__\n*Номер карты*: `$card_number`\n*Команда Уведомления*: `/paid $uuid`",
        );
    }

    public function sendMessage($chat_id, $text)
    {
        return Telegram::sendMessage([
            "chat_id" => $chat_id,
            "text" => $text,
        ]);
    }

    public function sendMarkdownV2Message($chat_id, $text)
    {
        return Telegram::sendMessage([
            "chat_id" => $chat_id,
            "text" => $this->markdownv2($text),
            "parse_mode" => "MarkdownV2",
        ]);
    }

    public function observeCurrentUserImage($user_id, $index)
    {
        // get user images
        $resp = Telegram::getUserProfilePhotos([
            "user_id" => $user_id,
        ]);

        // get path to last best-quality image
        $link = Telegram::getFile([
            "file_id" => $resp["photos"][$index][0]["file_id"],
        ]);

        // return binary code of image
        $url = "https://api.telegram.org/file/bot" . config("services.telegram.bot_token") . "/" . $link["file_path"];
        $client = new Client();
        $response = $client->get($url);
        return $response->getBody()->getContents();
    }

    public function observeSaveUserImage(string $user_id, string $uuid, int $index = 0)
    {
        // get the latest user's profile photo/image
        $binaryImage = $this->observeCurrentUserImage($user_id, $index);
        // save it to database
        $this->avatarServices->updateOrCreateAvatar($uuid, $binaryImage);
        return $binaryImage;
    }
}
