<?php

namespace App\Http\Controllers\Components;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class Checkbox extends Controller
{
    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct() {}


    /* +++++++++++++++++++ PUBLIC SECTION +++++++++++++++++++ */
    // Logout user
    public function setRememberMe(Request $request)
    {
        Cookie::queue("remember_me", $request->get("remember_me", true), 60 * 24); // 24 hours
        return response()->json(['success' => true]);
    }
}
