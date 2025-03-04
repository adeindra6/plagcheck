<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('login');
    }

    public function loginProcess(Request $request)
    {
        $credentials = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'invalid_credential' => 'Email or Password is Incorrect',
        ])->onlyInput('email');
    }
}
