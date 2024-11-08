<?php

namespace App\Http\Controllers\Pages\Private;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Services\TelegramServices;
use App\Http\Controllers\RateLimiterController;
use App\Services\ModelServices;
use App\Services\Partials\_ErrorServices;
use Telegram\Bot\Laravel\Facades\Telegram;

use function PHPSTORM_META\type;

class ProfileController extends RateLimiterController
{

    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct(
        protected TelegramServices $telegramServices,
        protected ModelServices $modelServices,
        protected _ErrorServices $_errorServices
    ) {}



    /* +++++++++++++++++++ PUBLIC SECTION +++++++++++++++++++ */
    /**
     * Updates the user's profile image with an image from their Telegram account.
     */
    public function updateImage(Request $request)
    {
        // 1. Rate limiting (up to 5 attempts)
        $throttleKey = $this->generateThrottleKey("updateImage", "image-index", $request);
        $executed = $this->rateLimiter($throttleKey, "image-index", 5, 300);
        if ($executed) return $executed;

        // 2. Validate index
        $index = $request->get("image-index");
        $photos = Telegram::getUserProfilePhotos(["user_id" => auth()->user()->telegram_id]);

        if (!isset($photos["photos"][$index][0])) {
            return $this->_errorServices->getMultiErrorViewJsonByString(
                "partials._input-error",
                __("profile.invalid_index"),
                "image-index"
            );
        }

        // 3. Retrieve and process the image
        try {
            $fileId = $photos["photos"][$index][0]["file_id"];
            $link = Telegram::getFile(["file_id" => $fileId]);
            $url = "https://api.telegram.org/file/bot" . config("services.telegram.bot_token") . "/" . $link["file_path"];

            $client = new Client();
            $response = $client->get($url);
            $binaryImage = $response->getBody()->getContents();

            $this->modelServices->updateOrCreateImage(auth()->user()->uuid, $binaryImage);

            // Clear any existing rate limiting blocks
            $this->clearRateLimit($throttleKey);

            // Redirect on success
            return redirect()->route("private.profile");
        } catch (\Exception $e) {
            // Log and handle unexpected errors
            return $this->_errorServices->getMultiErrorViewJsonByString(
                "partials._input-error",
                "profile.unexpected_error",
                "image-index"
            );
        }
    }

    /* +++++++++++++++++++ INITIALIZATION +++++++++++++++++++ */
    public function __invoke()
    {
        return view("pages.private.profile.bundled");
    }
}
