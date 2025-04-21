<?php

namespace App\Http\Controllers\Pages\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{


    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct(
        protected \App\Services\TelegramServices $telegramServices,
    ) {}

    /* +++++++++++++++++++ PUBLIC SECTION +++++++++++++++++++ */

    /* +++++++++++++++++++ INITIALIZATION +++++++++++++++++++ */
    public function __invoke(Request $request)
    {
        $referred_by_uuid = $request->cookie("referred_by_uuid", "");
        return redirect()->away($this->telegramServices->getCustomTelegramLink("web", $referred_by_uuid));
    }
}
