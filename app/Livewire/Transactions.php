<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\Attributes\Layout;
use App\Services\GlobalServices;
use App\Models\UsersTransactions;
use Illuminate\Support\Facades\Auth;

class Transactions extends Component
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
        'loadMoreUTs',
    ];

    // for tables optimization to load more
    public int $countUTs = 0;
    public array $users_transactions = [];



    /* +++++++++++++++++++ PUBLIC METHODS +++++++++++++++++++ */
    public function loadUTs(): void
    {
        $this->countUTs += 1;
        $transactions = UsersTransactions::where('uuid', Auth::user()->uuid)
            ->orderBy("created_at", "desc")
            ->paginate(5, ['*'], 'page');
        array_push($this->users_transactions, ...$transactions->items());
    }

    public function loadMoreUTs(): void
    {
        $this->countUTs += 1;
        $transactions = UsersTransactions::where('uuid', Auth::user()->uuid)
            ->orderBy("created_at", "desc")
            ->paginate(5, ['*'], 'page', $this->countUTs);
        array_push($this->users_transactions, ...$transactions->items());
    }

    public function getUTCount()
    {
        return UsersTransactions::where('uuid', Auth::user()->uuid)->count();
    }



    /* +++++++++++++++++++ LIVEWIRE'S LIFECYCLE SECTION +++++++++++++++++++ */
    public function mount()
    {
        return $this->globalServices->checkPrivatePagesAccess($this->request);
    }

    #[Layout("components.layouts.dashboard")]
    public function render()
    {
        return view('livewire.transactions');
    }
}
