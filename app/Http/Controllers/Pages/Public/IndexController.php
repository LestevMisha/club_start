<?php

namespace App\Http\Controllers\Pages\Public;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    /* +++++++++++++++++++ PUBLIC SECTION +++++++++++++++++++ */
    public function __invoke()
    {
        return view("pages.public.index.bundled");
    }
}
