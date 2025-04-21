<?php

namespace App\Services;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\URL;

class URLServices
{
    // Generate link
    public function generateLink(string $routeName, int $minutes, array $data) {
        // Generate password reset token
        $link = URL::temporarySignedRoute($routeName, Carbon::now()->addMinutes($minutes), $data);
        return $link;
    }
}
