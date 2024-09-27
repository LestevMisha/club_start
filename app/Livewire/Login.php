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
            $remember =  session()->get("remember", false);
            if (Auth::attempt($credentials, $remember)) {
                session()->flush();
                session()->regenerate();
                Auth::login(Auth::user());
                return $this->globalServices->checkLoginRegisterPagesAccess($this->request);
            } else {
                $this->addError('email', 'Предоставленные вами учетные данные не совпадают с нашими записями.');
            }
        }, $this);
    }


    /* +++++++++++++++++++ LIVEWIRE'S LIFECYCLE SECTION +++++++++++++++++++ */
    public function mount()
    {
        // keep entered user's data
        $this->email = session()->get("email", "");
        $this->password = session()->get("password", "");

        return $this->globalServices->checkLoginRegisterPagesAccess($this->request);
    }

    public function rendered(): void
    {
        $this->dispatch('ParentComponentValidated', $this->getErrorBag()->messages());
    }


    public function render()
    {
        return view('livewire.login');
    }
}
