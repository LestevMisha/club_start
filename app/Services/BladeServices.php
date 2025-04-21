<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class BladeServices
{

    protected object $user;

    public function __construct(
        protected \App\Services\Models\UserServices $userServices,
        protected \App\Services\Models\AvatarServices $avatarServices,
        protected \App\Services\TelegramServices $telegramServices,
    ) {
        $this->user = Auth::user();
    }

    public function getImage(): ?string
    {

        // Observe telegram image if the user does not have an image
        if (!$this->avatarServices->hasAvatar($this->user->uuid)) {
            $this->telegramServices->observeSaveUserImage($this->user->user_id, $this->user->uuid);
        }

        // Retrieve the image data and return as base64 encoded string
        $binaryAvatar = $this->avatarServices->getAvatar('user_uuid', $this->user->uuid)?->image_data;

        return $binaryAvatar ? base64_encode($binaryAvatar) : null;
    }

    // get current amount of active/overall referred users
    public function getReferredUsersData()
    {
        return $this->userServices->checkUserReferrals($this->user);
    }
}
