<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('website_visitors_data', function (Blueprint $table) {
            $table->id();
            $table->date('date')->unique(); // To store the date of the visit
            $table->integer('visit_count')->default(0); // To store the number of visits
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_visitors_data');
    }
};
