@extends('layout.pages.app')

@section('layout')

<!-- Main Content -->
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h3 class="text-dark font-weight-bold">WORKSHEET DATA</h3>
            <p class="text-secondary">Click the row cell to modify or edit</p>
        </div>
        <div>
            <a href="{{ route('addSheet.index') }}" class="btn btn-success"><i class="bi bi-file-earmark-plus"></i> Add Account</a>
            {{-- <button class="btn btn-dark">Edit Worksheet</button> --}}
            
            {{-- <input type="text" class="form-control d-inline-block ml-2" style="width: 200px;" placeholder="Search"> --}}
        </div>
    </div>

    {{-- @php
         foreach($adjustments as $adjustment) {
            echo $adjustment->account->account_title;
            echo $adjustment->debit;
         }

         
    @endphp --}}

    <!-- Worksheet Data Table -->
    <div id="alertContainer"></div>
    <div class="card shadow-sm" style="border-radius: 10px;">
        <div class="card-body">
            {{-- <h5 class="card-title font-weight-bold text-dark">Worksheet Data</h5> --}}
            <span class="badge badge-success mb-3">Del Mundo Landscape Specialist</span>
            {{-- <div style="height: 3rem">
                <h5 id="responseText" class="text-success"></h5>
            </div> --}}
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr class="text-dark">
                            <th>No.</th>
                            <th>Account Title</th>
                            <th colspan="2">Trial Balance</th>
                            <th colspan="2">Adjustments</th>
                            <th colspan="2">Adjusted Trial Balance</th>
                            <th colspan="2">Income Statement</th>
                            <th colspan="2">Balance Sheet</th>
                        </tr>
                        <tr class="text-light">
                            <th></th>
                            <th></th>
                            <th class="text-success">Debit</th>
                            <th class="text-danger">Credit</th>
                            <th class="text-success">Debit</th>
                            <th class="text-danger">Credit</th>
                            <th class="text-success">Debit</th>
                            <th class="text-danger">Credit</th>
                            <th class="text-success">Debit</th>
                            <th class="text-danger">Credit</th>
                            <th class="text-success">Debit</th>
                            <th class="text-danger">Credit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Row -->
                        {{-- <tr>
                            <td>110</td>
                            <td>Cash</td>
                            <td class="text-success">₱182,250</td>
                            <td class="text-danger"></td>
                            <td class="text-success"></td>
                            <td class="text-danger">₱2,500</td>
                            <td class="text-success">₱184,750</td>
                            <td class="text-danger"></td>
                            <td class="text-success"></td>
                            <td class="text-danger"></td>
                            <td class="text-success">₱182,250</td>
                            <td class="text-danger"></td>
                        </tr> --}}

                        @foreach ($account as $accounts) 
                            

                        <tr>
                            <td class="text-success">{{ $accounts->id }}</td>
                            <td class="text-dark">{{ ucfirst($accounts->account_title) }}</td>
                            

                            @foreach($accounts->trialBalance as $trialBalance)
                            <td class="text-success" contenteditable="true"
                                data-id="{{ $accounts->id }}" 
                                data-type="trial_balance"
                                data-field="debit" style="background: rgb(215, 250, 215)">
                                @php
                                    if(number_format($trialBalance->debit) == 0) {
                                        echo "";
                                    } else {
                                        echo "₱" . number_format($trialBalance->debit);
                                    }
                                @endphp
                                
                            </td>
                            <td class="text-danger" contenteditable="true"
                                data-id="{{ $accounts->id }}" 
                                data-type="trial_balance"
                                data-field="credit" style="background: rgb(255, 165, 180)">
                                @php
                                    if(number_format($trialBalance->credit) == 0) {
                                        echo "";
                                    } else {
                                        echo "₱" . number_format($trialBalance->credit);
                                    }
                                @endphp
                            </td>
                            @endforeach

                            @foreach($accounts->adjustment as $adjustment)
                            <td class="text-success" contenteditable="true"
                                data-id="{{ $accounts->id }}" 
                                data-type="adjustments"
                                data-field="debit" style="background: rgb(215, 250, 215)">         
                                @php
                                    if(number_format($adjustment->debit) == 0) {
                                        echo "";
                                    } else {
                                        echo "₱" . number_format($adjustment->debit);
                                    }
                                @endphp
                            </td>
                            <td class="text-danger" contenteditable="true"
                                data-id="{{ $accounts->id }}" 
                                data-type="adjustments"
                                data-field="credit" style="background: rgb(255, 165, 180)">
                                @php
                                    if(number_format($adjustment->credit) == 0) {
                                        echo "";
                                    } else {
                                        echo "₱" . number_format($adjustment->credit);
                                    }
                                @endphp
                            </td>
                            @endforeach

                            @foreach($accounts->adjustedTrialBalance as $adjustedTrialBalance)
                            <td class="text-success" contenteditable="true"
                                data-id="{{ $accounts->id }}" 
                                data-type="adjustedTrialBalance"
                                data-field="debit" style="background: rgb(215, 250, 215)">
                                @php
                                    if(number_format($adjustedTrialBalance->debit) == 0) {
                                        echo "";
                                    } else {
                                        echo "₱" . number_format($adjustedTrialBalance->debit);
                                    }
                                @endphp
                            </td>
                            <td class="text-danger" contenteditable="true"
                                data-id="{{ $accounts->id }}" 
                                data-type="adjustedTrialBalance"
                                data-field="credit" style="background: rgb(255, 165, 180)">
                                @php
                                    if(number_format($adjustedTrialBalance->credit) == 0) {
                                        echo "";
                                    } else {
                                        echo "₱" . number_format($adjustedTrialBalance->credit);
                                    }
                                @endphp
                            </td>
                            @endforeach

                            @foreach($accounts->incomeStatement as $incomeStatement)
                            <td class="text-success" contenteditable="true"
                                data-id="{{ $accounts->id }}" 
                                data-type="incomeStatement"
                                data-field="debit" style="background: rgb(215, 250, 215)">
                                @php
                                    if(number_format($incomeStatement->debit) == 0) {
                                        echo "";
                                    } else {
                                        echo "₱" . number_format($incomeStatement->debit);
                                    }
                                @endphp
                            </td>
                            <td class="text-danger" contenteditable="true"
                                data-id="{{ $accounts->id }}" 
                                data-type="incomeStatement"
                                data-field="credit" style="background: rgb(255, 165, 180)">
                                @php
                                    if(number_format($incomeStatement->credit) == 0) {
                                        echo "";
                                    } else {
                                        echo "₱" . number_format($incomeStatement->credit);
                                    }
                                @endphp
                            </td>
                            @endforeach

                            @foreach($accounts->balanceSheet as $balanceSheet)
                            <td class="text-success" contenteditable="true"
                                data-id="{{ $accounts->id }}" 
                                data-type="balanceSheet"
                                data-field="debit" style="background: rgb(215, 250, 215)">
                                @php
                                    if(number_format($balanceSheet->debit) == 0) {
                                        echo "";
                                    } else {
                                        echo "₱" . number_format($balanceSheet->debit);
                                    }
                                @endphp
                            </td>
                            <td class="text-danger" contenteditable="true"
                                data-id="{{ $accounts->id }}" 
                                data-type="balanceSheet"
                                data-field="credit" style="background: rgb(255, 165, 180)">
                                @php
                                    if(number_format($balanceSheet->credit) == 0) {
                                        echo "";
                                    } else {
                                        echo "₱" . number_format($balanceSheet->credit);
                                    }
                                @endphp
                            </td>
                            @endforeach

                            

                        </tr>
                        @endforeach

                        <tr>
                            <td style="border: none;"></td>
                            <td style="border: none;">Total</td>
                            <td style="border: none; text-decoration: underline;">₱{{ number_format($totalDebitTrialBalance) }}</td>
                            <td style="border: none; text-decoration: underline;">₱{{ number_format($totalCreditTrialBalance) }}</td>
                            <td style="border: none; text-decoration: underline;">₱{{ number_format($totalDebitAdjustments) }}</td>
                            <td style="border: none; text-decoration: underline;">₱{{ number_format($totalCreditAdjustments) }}</td>
                            <td style="border: none; text-decoration: underline;">₱{{ number_format($totalDebitAdjustedTrialBalance) }}</td>
                            <td style="border: none; text-decoration: underline;">₱{{ number_format($totalCreditAdjustedTrialBalance) }}</td>
                            <td style="border: none; text-decoration: underline;">₱{{ number_format($totalDebitIncomeStatement) }}</td>
                            <td style="border: none; text-decoration: underline;">₱{{ number_format($totalCreditIncomeStatement) }}</td>
                            <td style="border: none; text-decoration: underline;">₱{{ number_format($totalDebitBalanceSheet) }}</td>
                            <td style="border: none; text-decoration: underline;">₱{{ number_format($totalCreditBalanceSheet) }}</td>
                            
                        </tr>
                        
                    </tbody>
                    
                </table>
                <div>
                    {{ $account->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>

    
</div>

<!-- Custom CSS -->
<style>
    body {
        background-color: #f4f6f9;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .navbar {
        font-size: 1.1rem;
    }
    .table thead th {
        font-weight: 700;
        text-transform: uppercase;
    }
    .table tbody td {
        font-weight: 500;
    }
    .btn-dark {
        background-color: #333;
        color: #fff;
    }
</style>

@endsection
