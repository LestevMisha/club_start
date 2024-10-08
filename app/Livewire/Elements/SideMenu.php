<?php

namespace App\Livewire\Elements;

use Livewire\Component;
use App\Models\UsersImages;
use Livewire\Attributes\On;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class SideMenu extends Component
{
    public $image;
    public $currentRoute;

    public function mount(Request $request)
    {
        $binaryImage = UsersImages::where("user_uuid", Auth::user()?->uuid)->first();
        $this->image = base64_encode($binaryImage?->image_data);

        // get current route
        $this->currentRoute = $request->route()->getName();
    }

    public function render()
    {
        return view('livewire.elements.side-menu');
    }
}
