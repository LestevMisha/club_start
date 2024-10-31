<?php

namespace App\Services;

use App\Models\UsersImages;
use Illuminate\Support\Facades\Auth;

class BladeServices
{

    protected $user;

    public function __construct(
        protected UsersImages $usersImages,
        protected ModelServices $modelServices,
        protected TelegramServices $telegramServices,
    ) {
        $this->user = Auth::user();
    }

    public function getImage(): ?string
    {

        // Observe telegram image if the user does not have an image
        if (!$this->modelServices->hasImage()) {
            $this->telegramServices->observeSaveUserImage($this->user->telegram_id, $this->user->uuid);
        }

        // Retrieve the image data and return as base64 encoded string
        $binaryImage = $this->usersImages->where('user_uuid', $this->user->uuid)->first()?->image_data;

        return $binaryImage ? base64_encode($binaryImage) : null;
    }

    // link with user id for verification (example: t.me/bot_name?start=user_id)
    public function getTelegramChangeEmailLink()
    {
        return $this->telegramServices->getTelegramVerificationLink($this->user->uuid, "changeEmail");
    }

    // link with user id for verification (example: t.me/bot_name?start=user_id)
    public function getTelegramLink(string $target)
    {
        return $this->telegramServices->getTelegramVerificationLink(Auth::user()->uuid, $target);
    }

    // card verification status
    public function hasCardVerification(): bool
    {
        return (bool) $this->modelServices->getCardCredentials(Auth::user()->uuid);
    }

    // get visitors
    public function getVisitorData()
    {
        return $this->modelServices->getVisitorData();
    }
}
