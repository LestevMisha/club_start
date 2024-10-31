<?php

namespace App\Console\Commands;

use Illuminate\Support\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class EnsureDailyWebsiteVisitorsData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'visitor:ensure-daily-stats';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ensure there is a row in the website_visitors_data table for today with visit_count zero if missing';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $today = Carbon::today()->toDateString();
        $exists = DB::table('website_visitors_data')->where('date', $today)->exists();

        if (!$exists) {
            DB::table('website_visitors_data')->insert([
                'date' => $today,
                'visit_count' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            logger("Inserted a new row for today's date: {$today}.");
        } else {
            logger("Row for today's date {$today} already exists.");
        }
    }
}
