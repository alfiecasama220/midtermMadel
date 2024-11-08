@extends('layout.app')

@section('layout')

<div class="card">
    <div class="card-body">
        <h4 class="card-title text-center">Login</h4>
        <form action="{{ route('loginPost') }}" method="POST">
            @csrf
            <div class="w-100">
                @if (session('success'))
                    <h5 class="text-success">{{ session('success') }}</h5>
                @elseif(session('error'))
                    <h5 class="text-danger">{{ session('error') }}</h5>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <div class="form-group form-check text-left">
                {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label> --}}
                <a href="{{ route('create') }}">Sign Up</a>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
</div>

@endsection