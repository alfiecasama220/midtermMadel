@extends('layout.app')

@section('layout')

<div class="card">
    <div class="card-body">
        <h4 class="card-title text-center">LOGIN</h4>
        <small id="emailHelp" class="form-text text-muted text-center">Del Mundo Landscape Specialist</small>
        <form action="{{ route('loginPost') }}" method="POST">
            @csrf
            <div class="w-100">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @elseif(session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">Your email must be valid</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <div class="form-group form-check text-left">
                {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label> --}}
                
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <a href="{{ route('create') }}" class="btn btn-success btn-block">Sign Up</a>
        </form>
    </div>
</div>
<script>
    


    setTimeout(function() {
        const alert = document.querySelector('.alert');
        if(alert) {
            alert.remove();
        }
        
    }, 3000)
</script>

@endsection