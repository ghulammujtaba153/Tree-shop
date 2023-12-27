@extends('layout')

@section('title', 'Login')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="{{ route('login') }}" class="mt-4 p-4 border rounded shadow">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" style="width: 100%;">Login</button>
                    <p class="mt-2">Don't have an account? <a href="{{ route('registeration') }}">Register!</a></p>
                </form>
            </div>
        </div>
    </div>
@endsection
