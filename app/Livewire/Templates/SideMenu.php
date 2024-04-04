<?php

namespace App\Livewire\Templates;

use Livewire\Component;
use Illuminate\Http\Request;

class SideMenu extends Component
{
    public $image;
    public $checked;
    public $currentRoute;

    public function mount(Request $request) {
        $this->currentRoute = $request->route()->getName();
    }

    public function render()
    {
        return view('livewire.templates.side-menu');
    }
}
