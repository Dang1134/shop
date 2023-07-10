<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getlogin()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect('/home');
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'Invalid credentials',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/')->with('success', 'You have been logged out.');
    }
}
