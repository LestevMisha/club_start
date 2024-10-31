<?php

namespace App\Http\Controllers\Pages\Public;

use App\Http\Controllers\Controller;

class PublicOfferController extends Controller {
    public function __invoke() {
        return view("pages.public.public-offer");
    }
}