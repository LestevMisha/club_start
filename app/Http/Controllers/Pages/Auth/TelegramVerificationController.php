<?php

namespace App\Http\Controllers\Pages\Auth;

use Illuminate\Support\HtmlString;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TelegramVerificationController extends Controller
{

    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct(
        protected \App\Services\TelegramServices $telegramServices,
        protected \App\Services\Models\UserServices $userServices,
    ) {}


    /* +++++++++++++++++++ PUBLIC METHODS +++++++++++++++++++ */

    // generate unique QR code image
    public function generateQRCode($url, $class = null): HtmlString|string
    {
        $svg = QrCode::generate($url);
        if ($class) {
            $svg = new HtmlString(str_replace('<svg', "<svg class='$class'", $svg));
        }
        return $svg;
    }


    // link with user id for verification (example: t.me/bot_name?start=user_id)
    public function getTelegramVerificationLink()
    {
        return $this->telegramServices->getTelegramVerificationLink(Auth::user()->uuid, "verify");
    }

    // gives user the option to delete his registration
    public function deleteUser()
    {
        $this->userServices->deleteUser(Auth::user()->email);
        Auth::logout();
        Session::flush();
        return redirect()->back();
    }


    /* +++++++++++++++++++ INITIALIZATION +++++++++++++++++++ */
    public function __invoke()
    {
        return view("pages.intermediate.telegram-verification.bundled");
    }
}
