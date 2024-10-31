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
        Schema::create('users_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_uuid')->default("");
            $table->string('transaction_referred_by_id')->default("");
            $table->string('transaction_description')->default("");
            $table->boolean('transaction_recurring_payment_flag')->default(false);
            $table->decimal('transaction_amount', 10, 2)->default(0);
            $table->enum('transaction_status', ['created', 'pending', 'waiting_for_capture', 'canceled', 'succeeded'])->default('created');

            $table->string('user_uuid')->default("");
            $table->string('user_ip_address')->default("");

            $table->string('yookassa_transaction_id')->default("");
            $table->string('yookassa_payment_method_id')->default("");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_transactions');
    }
};
