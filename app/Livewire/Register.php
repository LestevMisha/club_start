<?php

namespace App\Livewire;

use Throwable;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Services\ModelServices;
use App\Services\GlobalServices;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class Register extends Component
{



    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    protected $globalServices;
    protected $modelServices;
    protected $request;

    public function __construct()
    {
        $this->globalServices = app(GlobalServices::class);
        $this->modelServices = app(ModelServices::class);
        $this->request = app(Request::class);
    }

    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $remember = false;
    public $currentStep;
    public $isEyeOpened = false;
    public $inputDisplay = "block";

    protected $rules = [
        'name' => "required|string|min:2|max:25",
        'email' => "required|min:4|max:50|email|unique:users",
        'password' => "required|min:8|confirmed",
    ];



    /* +++++++++++++++++++ MAIN METHOD +++++++++++++++++++ */
    private function store()
    {
        // validate the fields
        $this->validate();

        // save password
        session(["password" => $this->password]);

        $this->globalServices->handleError(function () {
            // create a new user
            $user = $this->modelServices->createUser(
                $this->name,
                $this->email,
                $this->password,
            );

            // send verification letter
            event(new Registered($user));

            // authentificate user
            list($email, $password) = [$this->email, $this->password];
            $credentials = compact('email', 'password');
            if (Auth::attempt($credentials, $this->remember)) {
                return $this->globalServices->checkLoginRegisterPagesAccess($this->request);
            } else {
                return redirect()->to("error")->with('error', "Произошла ошибка в файле " . basename(__FILE__) . " в строке " . __LINE__ . ": Пожалуйста проверьте интернет соединение. Попробуйте позже. Если ничего не помогло напишите нам в <a href='/support'>поддержку</a>.");
            }
        }, $this);
    }



    /* +++++++++++++++++++ HELPER METHODS +++++++++++++++++++ */
    public function nextStep()
    {
        // Validation rules for each step
        if ($this->currentStep === 0) {
            $this->valid("name");
        } elseif ($this->currentStep === 1) {
            $this->valid("email");
        } elseif ($this->currentStep === 2) {
            $this->store();
        }
    }

    public function previousStep()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->currentStep--;
        session()->put("currentStep", $this->currentStep);
    }

    private function valid($key)
    {
        $this->globalServices->handleError(function () use ($key) {
            $this->resetValidation();
            $this->validateOnly($key);
            session([$key => $this->{$key}]);
            // Move to the next step
            $this->currentStep++;
            session()->put("currentStep", $this->currentStep);
        }, $this, $key);
    }

    public function changeEyeOpened() {
        $this->isEyeOpened = !$this->isEyeOpened;
        session()->put("isEyeOpened", $this->isEyeOpened);
    }



    /* +++++++++++++++++++ LIVEWIRE'S LIFECYCLE SECTION +++++++++++++++++++ */
    public function mount()
    {
        $this->name = session()->get("name", "");
        $this->email = session()->get("email", "");
        $this->password = session()->get("password", "");
        $this->currentStep = session()->get("currentStep", 0);
        $this->isEyeOpened = session()->get("isEyeOpened", 0);

        // if any bug or anything fix it using this rule
        if ($this->currentStep < 0 || $this->currentStep > 2) $this->currentStep = 0;

        return $this->globalServices->checkLoginRegisterPagesAccess($this->request);
    }

    public function render()
    {
        return view('livewire.register');
    }
}
