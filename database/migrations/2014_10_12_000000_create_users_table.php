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

        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('user_id')->unique();
            $table->uuid('referral_uuid')->unique();

            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->unsignedInteger('days_left')->default(0);
            $table->unsignedInteger('amount_earned')->default(0);
            $table->string('username')->nullable();
            $table->boolean('is_subscribed')->default(false);
            $table->timestamp('kicked_at')->nullable();
            $table->uuid('referred_by_uuid')->nullable();
            $table->string('registered_via')->nullable();
            $table->text('telegram_invite_url')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
