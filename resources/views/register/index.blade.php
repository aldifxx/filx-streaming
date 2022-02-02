@extends('layouts.register')

@section('title')
    Register Account
@endsection

@section('form-register')
    <div class="form-register">
        <p>Sign Up</p>
        <br />
        <form method="post" action="/register">
            @csrf
            <label class="username" for="username">Username</label>
            <br />
            <input style="margin-left:570px;"class="form-control @error('username') is-invalid @enderror" type=" text" name="username" id="username"
                placeholder="Enter your username">
            @error('username')
                <span class="invalid-feedback text-center" role="alert" style="margin-left: 5px">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label class="email" for="email">Email Address</label>
            <br />
            <input style="margin-left:570px;" class="form-control @error('email') is-invalid @enderror" type="text" name="email" id="email" placeholder="Enter your email">
            <br />
            @error('email')
            <span class="invalid-feedback text-center" role="alert" style="margin-left: 5px">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label class="password for=" password">Password</label>
            <br />
            <input class=" @error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="Enter your password">
            @error('password')
            <span class="invalid-feedback text-center" role="alert" style="margin-left: 5px">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br />
            <button class="btn-register">Register</button>
            <br />
            <span>Do you have account ? <a href="/login">Sign in</a></span>
        </form>
    </div>
@endsection
