<?php

namespace App\Services\Models;

use Carbon\Carbon;
use App\Models\WebsiteVisitorsData;

class WebsiteVisitorsDataServices
{


    // Retrieve visitor stats
    public function getVisitorData()
    {
        $visitors = WebsiteVisitorsData::select('date', 'visit_count')
            ->whereBetween('date', [Carbon::now()->subDays(7), Carbon::now()]) // Last 30 days
            ->get();

        return response()->json(data: $visitors);
    }
}
