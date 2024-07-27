<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class MainIndex extends Component
{
    public $referralId;

    public function mount()
    {
        // Retrieve the value of the query parameter
        $this->referralId = request()->query('referred_referral_id');
        // Optionally, you can remove the query parameter from the URL
        if ($this->referralId) {
            Cookie::queue("referred_referral_id", $this->referralId, 60 * 24); # 24 hours
        }
    }

    public function render()
    {
        return view('livewire.main-index');
    }
}
