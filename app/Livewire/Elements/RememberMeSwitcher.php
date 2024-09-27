<?php

namespace App\Livewire\Elements;

use Livewire\Component;

class RememberMeSwitcher extends Component
{
    public $remember;

    // change/save remember state
    public function changeRemember()
    {
        session()->put("remember", $this->remember);
    }

    public function mount() {
        $this->remember = session()->get("remember", false);
    }

    public function render()
    {
        return view('livewire.elements.remember-me-switcher');
    }
}
