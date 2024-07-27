<?php

namespace App\Livewire\Templates;

use Livewire\Component;

class ThemeSwitcherSimplified extends Component
{
    public $checkedTheme = false;

    public function switch()
    {
        // Toggle the current state and update the session
        $this->checkedTheme = !$this->checkedTheme;
        session()->put('checked-theme', $this->checkedTheme);
    }

    public function mount()
    {
        // Retrieve the checked state from the session
        $this->checkedTheme = session()->get('checked-theme', false);
        logger("button");
        logger($this->checkedTheme);
    }

    public function render()
    {
        return view('livewire.templates.theme-switcher-simplified');
    }
}
