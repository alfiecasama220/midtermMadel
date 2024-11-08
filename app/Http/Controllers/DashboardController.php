<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Adjustments;
use App\Models\TrialBalance;
use App\Models\AdjustedTrialBalance;
use App\Models\IncomeStatement;
use App\Models\BalanceSheet;

use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $totalDebitTrialBalance = TrialBalance::sum('debit');
        $totalCreditTrialBalance = TrialBalance::sum('credit');
        
        $totalDebitAdjustments = Adjustments::sum('debit');
        $totalCreditAdjustments = Adjustments::sum('credit');

        $totalDebitAdjustedTrialBalance = AdjustedTrialBalance::sum('debit');
        $totalCreditAdjustedTrialBalance = AdjustedTrialBalance::sum('credit');

        $totalDebitIncomeStatement = IncomeStatement::sum('debit');
        $totalCreditIncomeStatement = IncomeStatement::sum('credit');

        $totalDebitBalanceSheet = BalanceSheet::sum('debit');
        $totalCreditBalanceSheet = BalanceSheet::sum('credit');
        return view('layout.pages.dashboard', compact(
            'totalDebitTrialBalance', 
            'totalCreditTrialBalance', 
            'totalDebitAdjustments', 
            'totalCreditAdjustments',
            'totalDebitAdjustedTrialBalance',
            'totalCreditAdjustedTrialBalance',
            'totalDebitIncomeStatement',
            'totalCreditIncomeStatement',
            'totalDebitBalanceSheet',
            'totalCreditBalanceSheet',
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
