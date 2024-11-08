<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Account;

class Adjustments extends Model
{
    protected $table = 'adjustment';

    public function account() {
        return $this->belongsTo(Account::class,  'account_id');
    }

    protected $fillable = [
        'debit',
        'credit',
        'account_id',
    ];
}
