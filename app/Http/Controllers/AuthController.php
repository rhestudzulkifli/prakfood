<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function processLogin(Request $request)
    {
        // Logika otentikasi di sini
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            // Otentikasi berhasil, arahkan pengguna ke halaman master
            return view('master');
        } else {
            // Otentikasi gagal, kembalikan ke halaman login
            return redirect()->route('login')->with('error', 'Login failed. Please check your credentials.');
        }
    }
    
}
