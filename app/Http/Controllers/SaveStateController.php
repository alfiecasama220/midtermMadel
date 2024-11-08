<?php

namespace App\Http\Controllers;

use App\Models\Account;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SaveStateController extends Controller
{
    public function saveTable(Request $request) {
        $validator = Validator::make($request->all(), [
            'account_id' => 'required|integer',
            'type' => 'required|string',
            'field' => 'required|string',
            'value' => 'required|numeric'
        ]);

        $account = Account::find($request->account_id);

        if($validator->passes()) {
            switch($request->type) {
                case 'trial_balance': 
                    $account->trialBalance()->update([$request->field => $request->value]);
                    break;
                
                case 'adjustments':
                    $account->adjustment()->update([$request->field => $request->value]);
                    break;

                case 'adjustedTrialBalance':
                    $account->adjustedTrialBalance()->update([$request->field => $request->value]);
                    break;

                case 'incomeStatement':
                    $account->incomeStatement()->update([$request->field => $request->value]);
                    break;

                case 'balanceSheet':
                    $account->balanceSheet()->update([$request->field => $request->value]);
                    break;

                default:
                    return response()->json(['success' => false , 'message' => 'Invalid Type']);

            }

            return response()->json(['success' => true, 'message' => 'Updated Successfully']);
            
        } else {
            return response()->json(['success' => false, 'message' => $request->all()]);
        }
    }
}
