<?php

namespace App\Livewire;

use Livewire\Component;
use LVR\CreditCard\CardCvc;
use Illuminate\Http\Request;
use LVR\CreditCard\CardNumber;
use App\Services\ModelServices;
use App\Services\GlobalServices;
use LVR\CreditCard\CardExpirationYear;
use LVR\CreditCard\CardExpirationMonth;

class CardCredentials extends Component
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

    public $card_name = '';
    public $card_number = '';
    public $expiration = '';
    public $expiration_year = 0;
    public $expiration_month = 0;
    public $cvc = '';

    protected $rules = [];



    /* +++++++++++++++++++ PUBLIC METHODS +++++++++++++++++++ */
    public function saveCC()
    {
        if ($this->expiration) {
            $monthYearArr = explode('/', $this->expiration);
            $this->expiration_year = $monthYearArr[1];
            $this->expiration_month = $monthYearArr[0];
        }

        $this->rules = [
            'card_name' => ['required', "min:3"],
            'card_number' => ['required', 'unique:card_credentials,card_number', "min:16", "max:16", new CardNumber],
            'expiration_year' => ['required', new CardExpirationYear($this->expiration_month)],
            'expiration_month' => ['required', new CardExpirationMonth($this->expiration_year)],
            'cvc' => ['required', new CardCvc($this->card_number)]
        ];

        $this->validate();

        $this->modelServices->createCardCredentials(
            $this->card_name,
            $this->card_number,
            $this->cvc,
            $this->expiration,
        );
        return redirect()->route("dashboard");
    }



    /* +++++++++++++++++++ LIVEWIRE'S LIFECYCLE SECTION +++++++++++++++++++ */
    public function mount()
    {
        return $this->globalServices->checkPrivatePagesAccess($this->request);
    }

    public function render()
    {
        return view('livewire.card-credentials');
    }



}
