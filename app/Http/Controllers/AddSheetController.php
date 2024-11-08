<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use App\Models\Adjustments;
use App\Models\TrialBalance;
use App\Models\AdjustedTrialBalance;
use App\Models\IncomeStatement;
use App\Models\BalanceSheet;
use App\Models\Account;

class AddSheetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layout.pages.addSheets');
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
        $validator = Validator::make($request->all(), [
            'accountTitle' => 'required',

            'debitTrialBalance' => 'nullable|numeric',
            'creditTrialBalance' => 'nullable|numeric',

            'debitAdjustments' => 'nullable|numeric',
            'creditAdjustments' => 'nullable|numeric',

            'debitAdjustedTrialBalance' => 'nullable|numeric',
            'creditAdjustedTrialBalance' => 'nullable|numeric',

            'debitIncomeStatement' => 'nullable|numeric',
            'creditIncomeStatement' => 'nullable|numeric',

            'debitBalanceSheet' => 'nullable|numeric',
            'creditBalanceSheet' => 'nullable|numeric',
            
        ]);

        if($validator->passes()) {

           


            DB::transaction(function () use ($request) {

                $Account = new Account();
                $Account->account_title = $request->accountTitle;
                $Account->save();

                $TrialBalance = new TrialBalance();
                $TrialBalance->debit = $request->debitTrialBalance;
                $TrialBalance->credit = $request->creditTrialBalance;
                $TrialBalance->account_id = $Account->id;
                $TrialBalance->save();

                $Adjustments = new Adjustments();
                $Adjustments->debit = $request->debitAdjustments;
                $Adjustments->credit = $request->creditAdjustments;
                $Adjustments->account_id = $Account->id;
                $Adjustments->save();

                $AdjustedTrialBalance = new AdjustedTrialBalance();
                $AdjustedTrialBalance->debit = $request->debitAdjustedTrialBalance;
                $AdjustedTrialBalance->credit = $request->creditAdjustedTrialBalance;
                $AdjustedTrialBalance->account_id = $Account->id;
                $AdjustedTrialBalance->save();

                $IncomeStatement = new IncomeStatement();
                $IncomeStatement->debit = $request->debitIncomeStatement;
                $IncomeStatement->credit = $request->creditIncomeStatement;
                $IncomeStatement->account_id = $Account->id;
                $IncomeStatement->save();

                $BalanceSheet = new BalanceSheet();
                $BalanceSheet->debit = $request->debitBalanceSheet;
                $BalanceSheet->credit = $request->creditBalanceSheet;
                $BalanceSheet->account_id = $Account->id;
                $BalanceSheet->save();

                
            });

            return redirect()->back()->with('success', 'Account Added!');
        } else {
            return redirect()->back()->with('failed', 'Account not Added!');
        }
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
