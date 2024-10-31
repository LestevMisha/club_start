<?php

namespace App\Http\Controllers\Pages\Public;

use App\Http\Controllers\Controller;

class DocumentsController extends Controller {
    public function __invoke() {
        return view("pages.public.documents");
    }
}