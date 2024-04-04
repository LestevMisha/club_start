<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\Attributes\Layout;
use App\Services\GlobalServices;
use App\Models\UsersTransactions;
use Illuminate\Support\Facades\Auth;

class ReferralTransactions extends Component
{



    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    protected $globalServices;
    protected $request;

    public function __construct()
    {
        $this->globalServices = app(GlobalServices::class);
        $this->request = app(Request::class);
    }

    protected $listeners = [
        'loadMoreURTs'
    ];

    // for tables optimization to load more
    public int $countURTs = 0;
    public array $users_referral_transactions = [];

    

    /* +++++++++++++++++++ PUBLIC METHODS +++++++++++++++++++ */
    public function loadURTs(): void
    {
        $this->countURTs += 1;
        $transactions = UsersTransactions::where('referral_id', Auth::user()->referral_id)
            ->orderBy("created_at", "desc")
            ->paginate(5, ['*'], 'page');
        array_push($this->users_referral_transactions, ...$transactions->items());
    }

    public function loadMoreURTs(): void
    {
        $this->countURTs += 1;
        $transactions = UsersTransactions::where('referral_id', Auth::user()->referral_id)
            ->orderBy("created_at", "desc")
            ->paginate(5, ['*'], 'page', $this->countURTs);
        array_push($this->users_referral_transactions, ...$transactions->items());
    }

    public function getURTCount()
    {
        return UsersTransactions::where("referral_id", Auth::user()->referral_id)->count();
    }



    /* +++++++++++++++++++ LIVEWIRE'S LIFECYCLE SECTION +++++++++++++++++++ */
    public function mount()
    {
        return $this->globalServices->checkPrivatePagesAccess($this->request);
    }

    #[Layout("components.layouts.dashboard")]
    public function render()
    {
        return view('livewire.referral-transactions');
    }
}
