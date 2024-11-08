<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BalanceSheet extends Model
{
    protected $table = 'balance_sheet';

    public function account() {
        return $this->belongsTo(Account::class,  'account_id');
    }

    protected $fillable = [
        'debit',
        'credit',
        'account_id',
    ];
}
