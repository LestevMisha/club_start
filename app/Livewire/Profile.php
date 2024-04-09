<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UsersImages;
use Illuminate\Http\Request;
use App\Services\ModelServices;
use Livewire\Attributes\Layout;
use App\Services\GlobalServices;
use App\Services\TelegramServices;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{



    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public $image;
    protected $telegramServices, $globalServices, $request, $user;

    public function __construct()
    {
        $this->globalServices = app(GlobalServices::class);
        $this->telegramServices = app(TelegramServices::class);
        $this->request = app(Request::class);
        $this->user = Auth::user();
    }



    /* +++++++++++++++++++ PUBLIC METHODS +++++++++++++++++++ */
    public function getLink()
    {
        return $this->telegramServices->getLink("changeEmail", Auth::user()->uuid);
    }
    // link with user id for verification (example: t.me/bot_name?start=user_id)
    public function getTelegramChangeEmailLink()
    {
        return $this->telegramServices->getTelegramVerificationLink(Auth::user()->uuid, "changeEmail");
    }
    // get user's image from Telegram API
    public function observeSaveUserImage()
    {
        $this->telegramServices->observeSaveUserImage($this->user->telegram_id, $this->user->uuid);
        return $this->redirect('/profile', navigate: true);
    }



    /* +++++++++++++++++++ LIVEWIRE'S LIFECYCLE SECTION +++++++++++++++++++ */
    public function mount()
    {
        $binaryImage = UsersImages::where("uuid", Auth::user()?->uuid)->first();
        $this->image = base64_encode($binaryImage?->image_data);
        
        return $this->globalServices->checkPrivatePagesAccess($this->request);
    }


    #[Layout("components.layouts.dashboard")]
    public function render()
    {
        return view('livewire.profile');
    }
}
