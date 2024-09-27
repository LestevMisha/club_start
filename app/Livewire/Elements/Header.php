<?php

namespace App\Livewire\Elements;

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class Header extends Component
{
    public $currentRoute;

    /* change theme
    /resources/views/components/layouts/app.blade.php)
    */
    #[On('checkedUpdateHeader')]
    public function checkedUpdateHeader()
    {
        Cookie::queue("checked", !Cookie::get("checked", true), 60 * 24 * 30);
    }

    public function mount(Request $request)
    {
        // get current url
        $this->currentRoute = $request->route()->getName();
    }

    public function render()
    {
        return view('livewire.elements.header');
    }
}
