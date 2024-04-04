<?php

namespace App\Livewire;

use Livewire\Component;

class Error extends Component
{
    public $error = "";

    public function mount() {
        if (session()->has("error")) {
            $this->error = session()->get("error");
        } else {
            return redirect()->to("/");
        }
    }
    
    public function render()
    {
        return view('livewire.error');
    }
}
