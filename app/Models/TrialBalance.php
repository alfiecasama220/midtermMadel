<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Account;

class TrialBalance extends Model
{
    //

    protected $table = 'trial_balance';

    public function account() {
        return $this->belongsTo(Account::class, 'account_id');
    }

    protected $fillable = [
        'debit',
        'credit',
        'account_id',
    ];
}
