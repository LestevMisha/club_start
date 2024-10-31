<?php

namespace App\Http\Controllers\Pages\Public;

use App\Http\Controllers\Controller;

class TermsController extends Controller {
    public function __invoke() {
        return view("pages.public.terms");
    }
}