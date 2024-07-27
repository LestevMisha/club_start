<?php

namespace App\Livewire\Layouts;

use Livewire\Component;

class Kernel extends Component
{
    public $checkedTheme = false;

    public function mount()
    {
        $this->checkedTheme = session()->get("checked", false);
    }

    public function switchTheme()
    {
        // observe current state
        $session_checked = session()->get("checked");
        // change the state
        $this->checkedTheme = !$session_checked;
        session()->put("checked", !$session_checked);
    }

    public function render()
    {
        return view('livewire.layouts.kernel');
    }
}
