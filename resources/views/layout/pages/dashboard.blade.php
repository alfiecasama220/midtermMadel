@extends('layout.pages.app')

@section('layout')



<!-- Main Content -->
<div class="container mt-4">
    <h3 class="text-dark font-weight-bold">DAW TAWO EATERY</h3>
    <p class="text-secondary">FOR THE MONTH ENDED NOVEMBER 30, 2026</p>

    <!-- Account Summary Section -->
    <div class="card shadow-sm mb-4" style="border-radius: 10px; background-color: #e0f7d4;">
        <div class="card-body">
            <h5 class="card-title font-weight-bold text-dark">Account Summary</h5>
            <div class="table-responsive">
                <table class="table table-borderless text-center">
                    <thead>
                        <tr class="text-dark" style="background-color: #333;">
                            <th class="text-light">Account Title</th>
                            <th class="text-light">Debit</th>
                            <th class="text-light">Credit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Trial Balance</td>
                            <td class="text-success font-weight-bold">
                                ₱{{ number_format($totalDebitTrialBalance) }}
                            </td>
                            <td class="text-danger font-weight-bold">
                                ₱{{ number_format($totalCreditTrialBalance) }}
                            </td>
                        </tr>
                        <tr>
                            <td>Adjustments</td>
                            <td class="text-success font-weight-bold">
                                ₱{{ number_format($totalDebitAdjustments) }}
                            </td>
                            <td class="text-danger font-weight-bold">
                                ₱{{ number_format($totalCreditAdjustments) }}
                            </td>
                        </tr>
                        <tr>
                            <td>Adjusted Trial Balance</td>
                            <td class="text-success font-weight-bold">
                                ₱{{ number_format($totalDebitAdjustedTrialBalance) }}
                            </td>
                            <td class="text-danger font-weight-bold">
                                ₱{{ number_format($totalCreditAdjustedTrialBalance) }}
                            </td>
                        </tr>
                        <tr>
                            <td>Income Statement</td>
                            <td class="text-success font-weight-bold">
                                ₱{{ number_format($totalDebitIncomeStatement) }}
                            </td>
                            <td class="text-danger font-weight-bold">
                                ₱{{ number_format($totalCreditIncomeStatement) }}
                            </td>
                        </tr>
                        <tr>
                            <td>Balance Sheet</td>
                            <td class="text-success font-weight-bold">
                                ₱{{ number_format($totalDebitBalanceSheet) }}
                            </td>
                            <td class="text-danger font-weight-bold">
                                ₱{{ number_format($totalCreditBalanceSheet) }}
                            </td>
                        </tr>
                    </tbody>
                </table>
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
</style>

@endsection
