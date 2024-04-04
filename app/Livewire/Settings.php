<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\Attributes\Layout;
use App\Services\GlobalServices;
use App\Services\TelegramServices;
use Illuminate\Support\Facades\Auth;

class Settings extends Component
{



    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    protected $telegramServices;
    protected $globalServices;
    protected $request;

    public function __construct()
    {
        $this->telegramServices = app(TelegramServices::class);
        $this->globalServices = app(GlobalServices::class);
        $this->request = app(Request::class);
    }



    /* +++++++++++++++++++ PUBLIC METHODS +++++++++++++++++++ */
    public function getLink()
    {
        $tgService = app(TelegramServices::class);
        return $tgService->getLink("changeEmail", Auth::user()->uuid);
    }
    // link with user id for verification (example: t.me/bot_name?start=user_id)
    public function getTelegramChangeEmailLink()
    {
        return $this->telegramServices->getTelegramVerificationLink(Auth::user()->uuid, "changeEmail");
    }


    /* +++++++++++++++++++ LIVEWIRE'S LIFECYCLE SECTION +++++++++++++++++++ */
    public function mount()
    {
        return $this->globalServices->checkPrivatePagesAccess($this->request);
    }

    #[Layout("components.layouts.dashboard")]
    public function render()
    {
        return view('livewire.settings');
    }
}
