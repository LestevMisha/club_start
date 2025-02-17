<?php

namespace App\Services\Models;

use Illuminate\Support\Str;
use App\Models\Transaction;

class TransactionServices
{
    // Create a new transaction
       /**
     * Create a new transaction.
     * 
     * @param  array  $data  Key-value array of transaction attributes.
     * @return \App\Models\Transaction
     */
    public function createTransaction(array $data): Transaction
    {
        // Inject defaults
        $defaults = [
            'uuid' => (string) Str::uuid(),
            'status' => 'Created',
        ];

        // Merge incoming data with defaults
        $mergedData = array_merge($defaults, $data);

        // Create and return
        return Transaction::create($mergedData);
    }

    public function updateTransaction(array $data, $whereKey, $whereValue): Transaction
    {
        // Update the transaction and return the updated instance
        $transaction = Transaction::where($whereKey, $whereValue)->first();
        $transaction->update($data);
        return $transaction;
    }
    
}
