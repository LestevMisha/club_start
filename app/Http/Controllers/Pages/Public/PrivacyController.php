<?php

namespace App\Http\Controllers\Pages\Public;

use App\Http\Controllers\Controller;

class PrivacyController extends Controller {
    public function __invoke() {
        return view("pages.public.privacy");
    }
}