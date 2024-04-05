<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Services\ModelServices;
use Livewire\Attributes\Layout;
use App\Services\GlobalServices;
use App\Services\TelegramServices;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
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



    /* +++++++++++++++++++ PUBLIC METHODS +++++++++++++++++++ */
    public function observeSaveUserImage() {
        $this->telegramServices->observeSaveUserImage($this->user->telegram_id, $this->user->uuid);
        // re-render the page to get a new image
        return $this->redirect('/profile', navigate: true);
    }
 


    /* +++++++++++++++++++ LIVEWIRE'S LIFECYCLE SECTION +++++++++++++++++++ */
    public function mount()
    {
        return $this->globalServices->checkPrivatePagesAccess($this->request);
    }


    #[Layout("components.layouts.dashboard")]
    public function render()
    {
        return view('livewire.profile');
    }
}
