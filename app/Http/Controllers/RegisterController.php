<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(Request $request) {
        return view('register.index');
    }

    public function verify_data(Request $request) 
    {
        $validatedData = $request->validate([
            'username' =>'required|min:3|max:30',
            'email' => 'required|email|min:16|max:50|unique:users',
            'password' => 'required|min:3|max:30|unique:users'
        ]);

        // Hash Password
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        // Jika Success redirect ke Login Page
        
        return redirect('/payment');
    }
}
