@extends('layouts.login')

@section('title')
    Login your account
@endsection

@section('form-login')
    <div class="form-login text-center">
        <form action="/login" method="post">
            @csrf
            <p>Welcome to Flix</p>
            <br />
            <label class="email" for="email">Email Address</label>
            <br />
            <input style="margin-left:570px;" type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required
                autocomplete="email" placeholder="Enter your email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br />
            <label class="password" for="password">Password</label>
            <br />
            <input style="margin-left:570px;" type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password"
                placeholder="Enter your password">
            @error('password')
                <span class="invalid-feedback text-center" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br />
            <button class="btn-login">Login</button>
        </form>
    </div>
@endsection
