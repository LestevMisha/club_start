<?php

namespace App\Http\Controllers\Pages\Private;

use App\Models\UsersTransactions;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReferralTransactionsController extends Controller
{
    public function __construct() {}

    public function __invoke()
    {
        $referred_users_transactions = UsersTransactions::where('transaction_referred_by_id', Auth::user()->referral_id)->orderBy("created_at", "desc")->get();
        return view("pages.private.referral-transactions", ["referred_users_transactions" => $referred_users_transactions]);
    }
}


// <?php

// namespace App\Livewire;

// use App\Models\CardCredentials;
// use App\Models\User;
// use Livewire\Component;
// use Illuminate\Http\Request;
// use Livewire\Attributes\Layout;
// use App\Services\GlobalServices;
// use App\Models\UsersTransactions;
// use App\Services\ModelServices;
// use App\Services\TelegramServices;
// use Illuminate\Support\Facades\Auth;

// class ReferralTransactions extends Component
// {



//     /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
//     protected $telegramServices;
//     protected $modelServices;
//     protected $globalServices;
//     protected $request;

//     public function __construct()
//     {
//         $this->telegramServices = app(TelegramServices::class);
//         $this->modelServices = app(ModelServices::class);
//         $this->globalServices = app(GlobalServices::class);
//         $this->request = app(Request::class);
//     }


//     public $isEyeOpened = false;
//     public $inputDisplay = "block";
//     public bool $disabled = false;

//     protected $listeners = [
//         'loadMoreURTs'
//     ];

//     // for tables optimization to load more
//     public int $countURTs = 0;
//     public array $users_referral_transactions = [];

//     /* +++++++++++++++++++ PUBLIC METHODS +++++++++++++++++++ */
//     public function hasCardVerification()
//     {
//         return $this->modelServices->getCardCredentials(Auth::user()->uuid) ? 1 : 0;
//     }

//     public function getUserAmount()
//     {
//         return Auth::user()->amount;
//     }

//     public function sendMoneyWithdrawalNotification()
//     {
//         if (!$this->disabled) {
//             $card_credentials = CardCredentials::where('user_uuid', Auth::user()->uuid)->first();
//             $userModel = User::where("uuid", Auth::user()->uuid)->first();
//             $userModel->withdrawal_notification_sent = 1;
//             $userModel->save();
//             $reponse = $this->telegramServices->sendMoneyWithdrawalNotification(Auth::user()->uuid, $this->getUserAmount(), $card_credentials->card_number);

//             if ($reponse) {
//                 $this->disabled = true;
//             }
//         }
//         return $reponse;
//     }

//     public function loadURTs(): void
//     {
//         $this->countURTs += 1;
//         $transactions = UsersTransactions::where('referred_referral_id', Auth::user()->referral_id)
//             ->orderBy("created_at", "desc")
//             ->paginate(5, ['*'], 'page');
//         $this->users_referral_transactions = $transactions->items();
//     }

//     public function loadMoreURTs(): void
//     {
//         $this->countURTs += 1;
//         $transactions = UsersTransactions::where('referred_referral_id', Auth::user()->referral_id)
//             ->orderBy("created_at", "desc")
//             ->paginate(5, ['*'], 'page', $this->countURTs);
//         array_push($this->users_referral_transactions, ...$transactions->items());
//     }

//     public function getURTCount()
//     {
//         return UsersTransactions::where("referred_referral_id", Auth::user()->referral_id)->count();
//     }



//     /* +++++++++++++++++++ LIVEWIRE'S LIFECYCLE SECTION +++++++++++++++++++ */
//     public function mount()
//     {
//         $this->disabled = Auth::user()?->withdrawal_notification_sent ? true : false;
//         return $this->globalServices->checkPrivatePagesAccess($this->request);
//     }

//     #[Layout("components.layouts.dashboard")]
//     public function render()
//     {
//         return view('livewire.referral-transactions');
//     }
// }

