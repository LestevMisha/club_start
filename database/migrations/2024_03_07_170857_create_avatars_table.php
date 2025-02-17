<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('avatars', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('user_uuid');
            $table->timestamps();
        });
        if (!Schema::hasColumn("avatars", "image_data")) {
            DB::statement("ALTER TABLE avatars ADD image_data LONGBLOB");
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avatars');
    }
};
