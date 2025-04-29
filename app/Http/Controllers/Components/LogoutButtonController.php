<?php

namespace App\Http\Controllers\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutButtonController extends Controller {

    /* +++++++++++++++++++ INITIALIZATION +++++++++++++++++++ */
    // Logout user
    public function __invoke(Request $request) {
        Auth::logout();

        // Flush all sessions
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route("auth.login");
    }
}
