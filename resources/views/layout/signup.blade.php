@extends('layout.app')

@section('layout')

<div class="card">
    <div class="card-body">
        <h4 class="card-title text-center">SIGN UP</h4>
        <form action="{{ route('store') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="exampleInputEmail1">Full name</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">Your email must be valid and unique</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <div class="form-group form-check text-left">
                {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label> --}}
                
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
            <a href="{{ route('login') }}" class="btn btn-secondary btn-block">Login</a>
        </form>
    </div>
</div>

@endsection