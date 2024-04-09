<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Services\GlobalServices;
use App\Services\TelegramServices;
use Illuminate\Support\Facades\Auth;

class Payment extends Component
{



    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    protected $telegramServices, $globalServices, $request, $user;

    public function __construct()
    {
        $this->globalServices = app(GlobalServices::class);
        $this->telegramServices = app(TelegramServices::class);
        $this->request = app(Request::class);
        $this->user = Auth::user();
    }




    /* +++++++++++++++++++ LIVEWIRE'S LIFECYCLE SECTION +++++++++++++++++++ */
    public function mount()
    {
        return $this->globalServices->checkPrivatePagesAccess($this->request);
    }

    public function render()
    {
        return view('livewire.payment');
    }
}
