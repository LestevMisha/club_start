<?php

namespace App\Http\Controllers\Pages\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Cookie;
use App\Services\Partials\_StepServices;
use Illuminate\Support\Facades\Validator;
use App\Services\Partials\_PartialServices;
use App\Services\UsersServices;

class RegisterController extends Controller
{


    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct(
        protected UsersServices $usersServices,
        protected _PartialServices $respond,
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
        // data for cookies
        $transaction_reffered_by_id = $request->cookie("transaction_reffered_by_id", "");

        // check processing
        $response = $this->action("name", $request);
        if ($response) return $response;

        if ($email) {
            $response = $this->action("email", $request);
            if ($response) return $response;
        } else return $this->_stepServices->getStep(2);

        if ($password) {
            $response = $this->action("password", $request);
            if ($response) return $response;
        } else return $this->_stepServices->getStep(3);

        // create a new user
        $user = $this->usersServices->createUser($name, $email, $password, $transaction_reffered_by_id);

        // send verification letter
        event(new Registered($user));

        // authentificate user
        if (Auth::attempt(compact('email', 'password'))) return redirect()->route("intermediate.telegram.verify");
    }


    /* +++++++++++++++++++ HELPER SECTION +++++++++++++++++++ */
    public function action($key, Request $request)
    {
        $validator = Validator::make($request->all(), [$key => $this->rules[$key]]);
        $error = $validator->errors()->first($key);
        if ($validator->fails()) {
            return $this->respond->renderErrors([$key => $error], "partials._input-error-message");
        }
    }


    /* +++++++++++++++++++ INITIALIZATION +++++++++++++++++++ */
    public function __invoke()
    {
        return view("pages.auth.register.bundled");
    }
}
