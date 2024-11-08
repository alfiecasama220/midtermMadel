<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Adjustments;
use App\Models\TrialBalance;
use App\Models\AdjustedTrialBalance;
use App\Models\IncomeStatement;
use App\Models\BalanceSheet;

class Account extends Model
{
    protected $table = 'account';

    public function adjustment() {
        return $this->hasMany(Adjustments::class);
    }

    public function trialBalance() {
        return $this->hasMany(TrialBalance::class);
    }

    public function adjustedTrialBalance() {
        return $this->hasMany(AdjustedTrialBalance::class);
    }

    public function incomeStatement() {
        return $this->hasMany(IncomeStatement::class);
    }

    public function balanceSheet() {
        return $this->hasMany(BalanceSheet::class);
    }

    // public function trialBalance() {
    //     return $this->belongsTo(TrialBalance::class, 'trialBalance_id');
    // }

    // public function adjustedTrialBalance() {
    //     return $this->belongsTo(AdjustedTrialBalance::class, 'adjustedTrialBalance_id');
    // }
}
