<?php

namespace App\Http\Controllers\Components;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class LogoutButtonController extends Controller
{
    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct() {}


    /* +++++++++++++++++++ PUBLIC SECTION +++++++++++++++++++ */
    // Logout user
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route("auth.login");
    }
}
