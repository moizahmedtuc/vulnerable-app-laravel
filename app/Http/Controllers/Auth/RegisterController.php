<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function showRegistrationForm()
{
    return view('auth.register');
}

public function register(Request $request)
{
    User::create($request->all()); // Vulnerable line
    return redirect()->route('register');
}
}
