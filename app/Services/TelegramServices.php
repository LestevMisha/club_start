<?php

namespace App\Services;

use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramServices
{
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
}
