<?php

namespace App\Services;

use GuzzleHttp\Client;
use App\Services\ModelServices;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramServices
{

    public $modelServices;

    public function __construct()
    {
        $this->modelServices = app(ModelServices::class);
    }



    public function getTelegramVerificationLink($uuid = "none", $target)
    {
        return config("services.telegram.bot_url") . "?start=" . $uuid . "_" . $target;
    }

    public function markdownv2($text)
    {
        $replacements = ['\\.', '\\<', '\\>'];

        // Add backslashes before periods and angle brackets
        $modifiedText = preg_replace_callback('/\.|<|>/', function ($matches) use ($replacements) {
            return $replacements[array_search($matches[0], ['.', '<', '>'])];
        }, $text);

        return $modifiedText;
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
        Telegram::unbanChatMember([
            'chat_id' => $chat_id,
            'user_id' => $user_id,
            'only_if_banned' => true,
        ]);
    }


    public function observeCurrentUserImage($user_id)
    {
        // get user images
        $resp = Telegram::getUserProfilePhotos([
            "user_id" => $user_id,
        ]);

        // get path to last best-quality image
        $link = Telegram::getFile([
            "file_id" => $resp["photos"][0][2]["file_id"],
        ]);

        // return binary code of image
        $url = "https://api.telegram.org/file/bot" . config("services.telegram.bot_token") . "/" . $link["file_path"];
        $client = new Client();
        $response = $client->get($url);
        return $response->getBody()->getContents();
    }

    public function observeSaveUserImage(string $telegram_id, string $uuid)
    {
        // get the latest user's profile photo/image
        $binaryImage = $this->observeCurrentUserImage($telegram_id);
        // save it to database
        $this->modelServices->updateOrCreateImage($uuid, $binaryImage);
        return $binaryImage;
    }
}
