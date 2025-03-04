<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        if(Auth::check()) {
            return view('dashboard');
        }

        return redirect()->route('login')->withErrors([
            'invalid_credential' => 'You need to login first',
        ]);
    }
}
