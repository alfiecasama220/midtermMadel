@extends('layout.pages.app')

@section('layout')

<style>
    .col > h5 {
        font-size: 14px;
    }

</style>

<!-- Main Content -->
<div class="container mt-4">
    <h3 class="text-dark font-weight-bold">ADD SHEETS</h3>
    <p class="text-secondary">FOR THE MONTH ENDED NOVEMBER 30, 2026</p>
    @if(session('success')) 
        <h5 class="text-success">
            {{ session('success') }}
        </h5>
    @else
        <h5 class="text-danger">
            {{ session('failed') }}
        </h5>
    @endif
    @php
    $categories = [
        'Trial Balance' => 'TrialBalance',
        'Adjustments' => 'Adjustments',
        'Adjusted Trial Balance' => 'AdjustedTrialBalance',
        'Income Statement' => 'IncomeStatement',
        'Balance Sheet' => 'BalanceSheet',
    ];
@endphp


    <form action="{{ route('addSheet.store') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="col-12 mb-4">
                <h5>Account Title</h5>
                <input type="text" class="form-control" name="accountTitle" placeholder="Enter Account Title" required>
            </div>
    
            @foreach($categories as $label => $name)
                <div class="col-md-4 mb-4">
                    <h5>{{ $label }}</h5>
                    <div class="form-row">
                        <div class="col">
                            {{-- <label for="debit{{ $name }}">Debit</label> --}}
                            <input type="text" class="form-control" id="debit{{ $name }}" name="debit{{ $name }}" placeholder="Debit">
                        </div>
                        <div class="col">
                            {{-- <label for="credit{{ $name }}">Credit</label> --}}
                            <input type="text" class="form-control" id="credit{{ $name }}" name="credit{{ $name }}" placeholder="Credit">
                        </div>
                    </div>
                </div>
            @endforeach
    
            <div class="col-12 mt-3">
                <button class="btn btn-primary w-25 float-right" type="submit">Add</button>
            </div>
        </div>
    </form>
    
    </div>


    {{-- <!-- Footer Section -->
    <div class="d-flex align-items-center">
        <img src="https://via.placeholder.com/80" alt="Profile" class="rounded-circle mr-3">
        <div>
            <p class="mb-0 font-weight-bold">Group 1 DSET - Accounting System</p>
            <small class="text-secondary">METRO DUMAGUETE COLLEGE, INC.</small>
        </div>
    </div> --}}
</div>


@endsection
