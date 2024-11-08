<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IncomeStatement extends Model
{

    protected $table = 'income_statement';

    public function account() {
        return $this->belongsTo(Account::class,  'account_id');
    }

    protected $fillable = [
        'debit',
        'credit',
        'account_id',
    ];
}
