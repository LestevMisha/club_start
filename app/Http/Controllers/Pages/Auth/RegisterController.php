<?php

namespace App\Http\Controllers\Pages\Auth;

use Illuminate\Http\Request;
use App\Services\ModelServices;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use App\Services\Partials\_StepServices;
use Illuminate\Support\Facades\Validator;
use App\Services\Partials\_InputErrorServices;

class RegisterController extends Controller
{


    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct(
        protected ModelServices $modelServices,
        protected _InputErrorServices $_inputErrorServices,
        protected _StepServices $_stepServices,
    ) {}

    protected $rules = [
        'name' => "required|string|min:2|max:25",
        'email' => "required|min:4|max:50|email|unique:users",
        'password' => "required|min:8|confirmed",
    ];


    /* +++++++++++++++++++ PUBLIC SECTION +++++++++++++++++++ */
    public function store(Request $request)
    {
        // data
        $name = $request->get("name");
        $email = $request->get("email");
        $password = $request->get("password");

        // check processing
        $response = $this->action("name", $request);
        if ($response) return $response;

        if ($email) {
            $response = $this->action("email", $request);
            if ($response) return $response;
        } else return $this->_stepServices->getStep(2, ["name" => $name]);

        if ($password) {
            $response = $this->action("password", $request);
            if ($response) return $response;
        } else return $this->_stepServices->getStep(3, ["name" => $name, "email" => $email]);

        // create a new user
        $user = $this->modelServices->createUser($name, $email, $password, $request->cookie("referred_referral_id", ""));

        // send verification letter
        event(new Registered($user));

        // authentificate user
        if (Auth::attempt(compact('email', 'password'))) return response()->json(['reload' => true]);
    }


    /* +++++++++++++++++++ HELPER SECTION +++++++++++++++++++ */
    public function action($key, Request $request)
    {
        $validator = Validator::make($request->all(), [$key => $this->rules[$key]]);
        if ($validator->fails()) {
            return $this->_inputErrorServices->getSingleErrorViewJson($validator, $key);
        }
    }


    /* +++++++++++++++++++ INITIALIZATION +++++++++++++++++++ */
    public function __invoke()
    {
        return view("pages.auth.register");
    }
}
