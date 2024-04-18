<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Services\ModelServices;
use Livewire\Attributes\Layout;
use App\Services\GlobalServices;
use Illuminate\Support\Facades\Auth;
use App\Services\TelegramServices;

class Dashboard extends Component
{



    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    protected $telegramServices;
    protected $globalServices;
    protected $modelServices;
    protected $request;

    public function __construct()
    {
        $this->telegramServices = app(TelegramServices::class);
        $this->globalServices = app(GlobalServices::class);
        $this->modelServices = app(ModelServices::class);
        $this->request = app(Request::class);
    }

    public $isEyeOpened = false;
    public $inputDisplay = "block";
    public $card_number = '';

    protected $rules = [
        'card_number' => ['required', 'unique:card_credentials,card_number', "min:16", "max:16"],
    ];



    /* +++++++++++++++++++ PUBLIC METHODS +++++++++++++++++++ */
    public function hasCardVerification()
    {
        return $this->modelServices->getCardCredentials(Auth::user()->uuid) ? 1 : 0;
    }

    // link with user id for verification (example: t.me/bot_name?start=user_id)
    public function getTelegramInformationLink()
    {
        return $this->telegramServices->getTelegramVerificationLink(Auth::user()->uuid, "information");
    }
    // Save Card Credentials
    public function saveCardCredentials()
    {
        $this->validate();
        $this->modelServices->createCardCredentials($this->card_number);
        return redirect()->route("dashboard");
    }



    /* +++++++++++++++++++ LIVEWIRE'S LIFECYCLE SECTION +++++++++++++++++++ */
    public function mount()
    {
        return $this->globalServices->checkPrivatePagesAccess($this->request);
    }

    #[Layout("components.layouts.dashboard")]
    public function render()
    {
        return view("livewire.dashboard");
    }
}
