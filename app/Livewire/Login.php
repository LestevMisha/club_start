<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Services\GlobalServices;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{


    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    protected $globalServices;
    protected $request;

    public function __construct()
    {
        $this->globalServices = app(GlobalServices::class);
        $this->request = app(Request::class);
    }

    public $email;
    public $password;
    public $remember = false;
    public $isEyeOpened = false;
    public $inputDisplay = "block";

    protected $rules = [
        'email' => "required|min:4|email",
        'password' => "required|min:8",
    ];



    /* +++++++++++++++++++ PUBLIC SECTION +++++++++++++++++++ */
    public function submit()
    {
        // validate the fields
        $this->validate();

        // save password
        session(["password" => $this->password]);

        $this->globalServices->handleError(function () {

            // authentificate user
            list($email, $password) = [$this->email, $this->password];
            $credentials = compact('email', 'password');
            if (Auth::attempt($credentials, $this->remember)) {
                session()->flush();
                session()->regenerate();
                Auth::login(Auth::user());
                return $this->globalServices->checkLoginRegisterPagesAccess($this->request);
            } else {
                $this->addError('email', 'Предоставленные вами учетные данные не совпадают с нашими записями.');
            }
        }, $this);
    }
    // change/save eye state
    public function changeEyeOpened()
    {
        $this->isEyeOpened = !$this->isEyeOpened;
        session()->put("isEyeOpened", $this->isEyeOpened);
    }
    // change/save remember state
    public function changeRemember()
    {
        session()->put("remember", $this->remember);
    }



    /* +++++++++++++++++++ LIVEWIRE'S LIFECYCLE SECTION +++++++++++++++++++ */
    public function mount()
    {
        // keep entered user's data
        $this->email = session()->get("email", "");
        $this->password = session()->get("password", "");
        $this->isEyeOpened = session()->get("isEyeOpened", 0);
        $this->remember = session()->get("remember", 0);

        return $this->globalServices->checkLoginRegisterPagesAccess($this->request);
    }


    public function render()
    {
        return view('livewire.login');
    }
}
