<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Admin;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('guest.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // Login user atau admin berdasarkan guard yang sesuai
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard')->with('success', 'Login berhasil! Selamat datang di halaman Admin.'); // Redirect ke halaman dashboard admin
        } elseif (Auth::guard('web')->attempt($credentials)) {
            return redirect()->route('users.tiket')->with('success', 'Login berhasil! Selamat datang, di website pemesanan tiket KBT'); // Redirect ke halaman users.tiket
        }

        return back()->withErrors(['email' => 'Login gagal! Silahkan Daftar sekarang']);
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Logout dari semua guard
        return redirect('/');
    }
}
