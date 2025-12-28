<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /* ================= REGISTER ================= */

    public function register()
    {
        return view('auth.register');
    }

    public function registerProcess(Request $request)
    {
        // VALIDASI (AMAN)
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        // SIMPAN USER
        User::create([
            'name' => $request->name,
            'email' => trim($request->email),
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil');
    }

    /* ================= LOGIN ================= */

    public function login()
    {
        return view('auth.login');
    }

    public function loginProcess(Request $request)
    {
        // VALIDASI LOGIN
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // AUTH LARAVEL (AMAN)
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect('/welcome');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah',
        ]);
    }

    /* ================= LOGOUT ================= */

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
