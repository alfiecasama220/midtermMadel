@extends('layout.pages.app')

@section('layout')



<!-- Main Content -->
<div class="container mt-4">
    {{-- <h3 class="text-dark font-weight-bold">DAW TAWO EATERY</h3>
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
    </div> --}}

    {{-- <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header">
            <h1>Account Summary</h1>
        </div>

        <!-- Table -->
        <div class="container mt-4">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Account Title</th>
                        <th>Debit</th>
                        <th>Credit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Trial Balance</td>
                        <td>₱4,568</td>
                        <td>₱4,565</td>
                    </tr>
                    <tr>
                        <td>Adjustments</td>
                        <td>₱0</td>
                        <td>₱0</td>
                    </tr>
                    <tr>
                        <td>Adjusted Trial Balance</td>
                        <td>₱0</td>
                        <td>₱0</td>
                    </tr>
                    <tr>
                        <td>Income Statement</td>
                        <td>₱0</td>
                        <td>₱0</td>
                    </tr>
                    <tr>
                        <td>Balance Sheet</td>
                        <td>₱0</td>
                        <td>₱0</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> --}}

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header">
            <h1>Account Overview</h1>
        </div>

        <!-- Account Info Cards -->
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card card-info">
                    <div class="card-header">Trial Balance</div>
                    <div class="card-body">
                        <h5>Debit: ₱{{ number_format($totalDebitTrialBalance) }}</h5>
                        <h5>Credit: ₱{{ number_format($totalCreditTrialBalance) }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-info">
                    <div class="card-header">Adjustments</div>
                    <div class="card-body">
                        <h5>Debit: ₱{{ number_format($totalDebitAdjustments) }}</h5>
                        <h5>Credit: ₱{{ number_format($totalCreditAdjustments) }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-info">
                    <div class="card-header">Adjusted Trial Balance</div>
                    <div class="card-body">
                        <h5>Debit: ₱{{ number_format($totalDebitAdjustedTrialBalance) }}</h5>
                        <h5>Credit: ₱{{ number_format($totalCreditAdjustedTrialBalance) }}</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Account Info -->
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card card-info">
                    <div class="card-header">Income Statement</div>
                    <div class="card-body">
                        <h5>Debit: ₱{{ number_format($totalDebitIncomeStatement) }}</h5>
                        <h5>Credit: ₱{{ number_format($totalCreditIncomeStatement) }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-info">
                    <div class="card-header">Balance Sheet</div>
                    <div class="card-body">
                        <h5>Debit: ₱{{ number_format($totalDebitBalanceSheet) }}</h5>
                        <h5>Credit: ₱{{ number_format($totalCreditBalanceSheet) }}</h5>
                    </div>
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
</style>

@endsection
