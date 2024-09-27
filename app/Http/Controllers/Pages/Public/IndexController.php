<?php

namespace App\Http\Controllers\Pages\Public;

use Illuminate\Http\Request;
use App\Services\GlobalServices;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct() {}


    /* +++++++++++++++++++ PUBLIC SECTION +++++++++++++++++++ */
    public function __invoke()
    {
        return view("pages.public.index");
    }
}
