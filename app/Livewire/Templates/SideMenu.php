<?php

namespace App\Livewire\Templates;

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

    /* change theme
    references: /resources/views/components/layouts/dashboard.blade.php,
    */
    #[On('checkedUpdateSideMenu')]
    public function checkedUpdateSideMenu()
    {
        Cookie::queue("checked", !Cookie::get("checked", true), 60 * 24 * 30);
    }

    public function mount(Request $request)
    {
        $binaryImage = UsersImages::where("uuid", Auth::user()?->uuid)->first();
        $this->image = base64_encode($binaryImage?->image_data);

        // get current route
        $this->currentRoute = $request->route()->getName();
    }

    public function render()
    {
        return view('livewire.templates.side-menu');
    }
}
