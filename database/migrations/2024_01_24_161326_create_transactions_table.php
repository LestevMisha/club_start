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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->default("");
            $table->string('referred_by_uuid')->default("");
            $table->boolean('is_recurring')->default(false);
            $table->enum('status', ['AwaitingAuthentication','Authorized','Completed','Cancelled','Declined','Refunded','Created','Failed'])->default('Created');

            // CloudPayments fields
            $table->string('transaction_id')->default("");
            $table->decimal('amount', 10, 2)->default(null);
            $table->string('payment_currency', 10)->default('RUB');

            // Timestamps from CloudPayments
            $table->string('invoice_id')->nullable();
            $table->string('account_id')->nullable();
            $table->string('description')->nullable();
            $table->string('card_first_six')->nullable();
            $table->string('card_last_four')->nullable();
            $table->string('card_type')->nullable();
            $table->string('card_exp_date')->nullable();
            $table->string('auth_code')->nullable();
            $table->boolean('test_mode')->default(false);

            // Dates in ISO format from CP
            $table->datetime('created_date')->nullable();
            $table->datetime('auth_date')->nullable();
            $table->datetime('confirm_date')->nullable();

            // If you want to store "ReasonCode" or "Reason"
            $table->integer('reason_code')->nullable();
            $table->string('reason')->nullable();

            // If you want to store the token for recurring payments
            $table->string('card_token')->nullable();

            // IP and other location data
            $table->string('ip_address')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
