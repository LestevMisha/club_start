<?php

namespace App\Console\Commands;

use Exception;
use App\Models\User;
use App\Services\ModelServices;
use Illuminate\Console\Command;
use App\Services\TelegramServices;
use App\Services\YooKassaServices;

class DecreaseLeftDays extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:decrease-left-days';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(ModelServices $modelServices, YooKassaServices $yooKassaServices, TelegramServices $telegramSevices)
    {
        // Decrement days_left for users with days_left greater than 0
        // Consequently decrement days_left from every user (because users with 0 days are deleted from database)
        User::where("days_left", ">", 0)->decrement("days_left");
        logger('1. Days subtracted successfully.');


        // Find users with 0 days_left and who are not verified or are not admins
        $usersWithZeroDaysLeft = User::where('days_left', 0)
            ->whereNotNull('telegram_id') // Filter out users with no telegram_id
            ->get();


        // Kick off users with 0 days_left
        if ($usersWithZeroDaysLeft->count() > 0) {
            logger('2. Zero users are here');
            foreach ($usersWithZeroDaysLeft as $user) {
                try {
                    // Main telegram group id
                    $telegram_group_id = config('services.telegram.group_id');

                    // User's telegram id
                    $telegram_id = $user->telegram_id;

                    // 2. check if iser is admin
                    if ($telegramSevices->isAdmin((string)$telegram_group_id, (int)$telegram_id)) {
                        continue;
                    }

                    // Kick off user
                    $telegramSevices->banChatMember((string) $telegram_group_id, (int) $telegram_id);

                    // Delete user from database --> ..
                } catch (Exception $error) {
                    // :TODO
                    // Log::error($error);
                }
            }
        }


        // Find users with less or equal 3 days left except 0 or less than 0
        $usersWithOneDaysLeft = User::where("days_left", ">", 0)
            ->where("days_left", "<=", 3)
            ->get();
        // 2. Step --1 day before cick-- try to make recurrent payment if user have enough balance
        if ($usersWithOneDaysLeft->count() > 0) {
            foreach ($usersWithOneDaysLeft as $user) {

                // create transaction
                $transaction = $yooKassaServices->create3KRecurrentTransaction($user);
                if (!$transaction) return;

                // create payment
                $payment = $yooKassaServices->create3KRecurrentPayment($transaction);
                if (!$payment) return;

                // update transaction's yookassa_transaction_id column
                $modelServices->updateUsersTransactions("uuid", $transaction->uuid, "yookassa_transaction_id", $payment->id);
            }
        }
    }
}
