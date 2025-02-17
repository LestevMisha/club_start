<?php

namespace App\Services\Models;

use App\Models\Avatars;
use Illuminate\Support\Str;

class AvatarServices
{



    // Check if user has a profle image
    public function hasAvatar($uuid)
    {
        return Avatars::where("user_uuid", $uuid)->exists();
    }

    public function getAvatar($whereKey, $whereValue): Avatars|null
    {
        // Return user instance
        return Avatars::where($whereKey, $whereValue)->first();
    }

    // Update or create user's profile image
    public function updateOrCreateAvatar($uuid, $image_data)
    {
        $image = Avatars::where('user_uuid', $uuid)->first();
        if ($image) return $image->update(['image_data' => $image_data,]);
        return Avatars::create(['uuid' => Str::uuid7()->toString(), 'user_uuid' => $uuid, 'image_data' => $image_data,]);
    }
}
