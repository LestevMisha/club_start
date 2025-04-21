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
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route("auth.login");
    }
}
