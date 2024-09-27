<?php

namespace App\Http\Controllers\Pages\Private;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct() {}


    /* +++++++++++++++++++ HELPER SECTION +++++++++++++++++++ */
    public function __invoke()
    {
        return view("pages.private.dashboard");
    }
}
