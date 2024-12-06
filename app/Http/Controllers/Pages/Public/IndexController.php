<?php

namespace App\Http\Controllers\Pages\Public;

use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Models\WebsiteVisitorsData;

class IndexController extends Controller
{

    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct() {}


    /* +++++++++++++++++++ PUBLIC SECTION +++++++++++++++++++ */
    public function __invoke()
    {
        $today = Carbon::today();

        // Check if a record for today exists
        $visitorStat = WebsiteVisitorsData::firstOrCreate(
            ['date' => $today],
            ['visit_count' => 0]
        );
        // Increment the visit count
        $visitorStat->increment('visit_count');



        return view("pages.public.index.bundled");
    }
}
