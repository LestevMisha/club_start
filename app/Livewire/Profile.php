<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\Attributes\Layout;
use App\Services\GlobalServices;

class Profile extends Component
{



    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    protected $globalServices;
    protected $request;

    public function __construct()
    {
        $this->globalServices = app(GlobalServices::class);
        $this->request = app(Request::class);
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
