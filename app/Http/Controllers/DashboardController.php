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

    public function downloadFile($filename) {
        $file = public_path() . "/files/" . $filename . ".pdf";

        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download($file, $filename . ".pdf", $headers);
    }
}
