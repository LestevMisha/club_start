<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use App\Models\WebsiteVisitorsData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WebsiteVisitorsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Generate dummy data for the last 5 days
        for ($i = 8; $i >= 1; $i--) {
            WebsiteVisitorsData::create([
                'date' => Carbon::now()->subDays($i)->format(format: 'Y-m-d'),
                'visit_count' => rand(1, 30), // Random visit count between 1 and 30
            ]);
        }
    }
}
