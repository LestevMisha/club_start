<?php

namespace App\Http\Controllers\Pages\Private;

use App\Http\Controllers\Controller;

class ProfileController extends Controller {
    
    public function __invoke() {
        return view("pages.private.profile");
    }
}