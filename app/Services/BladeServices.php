<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class BladeServices
{

    protected $user;

    public function __construct(
        protected \App\Services\Models\UserServices $userServices,
        protected \App\Services\Models\AvatarServices $avatarServices,
        protected \App\Services\Models\WebsiteVisitorsDataServices $websiteVisitorsDataServices,
        protected TelegramServices $telegramServices,
    ) {
        $this->user = Auth::user();
    }

    public function getImage(): ?string
    {

        // Observe telegram image if the user does not have an image
        if (!$this->avatarServices->hasAvatar($this->user->uuid)) {
            $this->telegramServices->observeSaveUserImage($this->user->telegram_id, $this->user->uuid);
        }

        // Retrieve the image data and return as base64 encoded string
        $binaryAvatar = $this->avatarServices->getAvatar('user_uuid', $this->user->uuid)?->image_data;

        return $binaryAvatar ? base64_encode($binaryAvatar) : null;
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

    // get visitors
    public function getVisitorData()
    {
        return $this->websiteVisitorsDataServices->getVisitorData();
    }

    // get current amount of active/overall referred users
    public function getReferredUsersData()
    {
        return $this->userServices->checkUserReferrals();
    }
}
