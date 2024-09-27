<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class Index extends Component
{
    public $referralId;
    public $locale;

    public function mount()
    {
        $this->locale = App::currentLocale();
        // Retrieve the value of the query parameter
        $this->referralId = request()->query('referred_referral_id');
        // Optionally, you can remove the query parameter from the URL
        if ($this->referralId) {
            Cookie::queue("referred_referral_id", $this->referralId, 60 * 24); # 24 hours
        }
    }

    public function render()
    {
        return view('livewire.index');
    }
}
