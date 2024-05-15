<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class AutentikasiController extends Controller
{
    public function showLoginForm()
    {
        return view('guest.login');
    }

    public function showRegistrationForm()
    {
        return view('guest.registrasi');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        try {
            // Cek status server autentikasi
            $authResponse = Http::get('http://localhost:9000/health');
            if (!$authResponse->successful()) {
                return back()->with('error', 'Service autentikasi tidak tersedia. Silakan coba lagi nanti.');
            }

            // Kirim permintaan login ke service autentikasi
            $request = Http::post('http://localhost:9000/api/auth/login', [
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ]);

            $response = json_decode($request, true);

            if ($request->successful()) {
                // Token diterima, simpan token dalam session atau cookie
                $token = $response['data']['token'];
                session(['token' => $token]);

                // Login user atau admin berdasarkan guard yang sesuai
                if (Auth::guard('admin')->attempt($credentials)) {
                    return redirect()->route('admin.dashboard')->with('success', 'Login berhasil! Selamat datang di halaman Admin.');
                } elseif (Auth::guard('web')->attempt($credentials)) {
                    return redirect()->route('users.tiket')->with('success', 'Login berhasil! Selamat datang di website pemesanan tiket KBT');
                }

                // Jika login gagal
                return back()->withErrors(['email' => 'Login gagal! Silahkan Daftar sekarang']);
            } else {
                // Login gagal dari service autentikasi
                return back()->with('error', 'Login gagal, cek kembali email dan password Anda');
            }
        } catch (\Exception $e) {
            // Exception, kembalikan dengan pesan error
            return back()->with('error', 'Terjadi kesalahan saat melakukan login. Silakan coba lagi nanti.');
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'phone_number' => 'required',
            'gender' => 'required',
            'identity_number' => 'required',
            'birthdate' => 'required|date',
        ]);


        try {
            $response = Http::post('http://localhost:9000/api/auth/register', [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => $request->input('password'),
                    'phone_number' => $request->input('phone_number'),
                    'gender' => $request->input('gender'),
                    'identity_number' => $request->input('identity_number'),
                    'birthdate' => $request->input('birthdate')
            ]);

            if ($response->successful()) {
                session(['token' => $response['data']['token']]);
                return redirect('guest.login')->with('success', 'Registrasi berhasil! Silakan login.');
            } else {
                return back()->with('error', 'Registrasi gagal');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat registrasi. Silakan coba lagi nanti.');
        }
    }

    public function profile()
    {
        $token = session('token');
        if (!$token) {
            return redirect('/guest/login')->with('error', 'Anda harus login terlebih dahulu');
        }

        try {
            $response = Http::get('http://localhost:9000/api/user/profile', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token
                ]
            ]);

            if ($response->successful()) {
                return view('users.user-profile', ['user' => $response->json()]);
            } else {
                return redirect('/guest/login')->with('error', 'Terjadi kesalahan saat mengambil profil');
            }
        } catch (\Exception $e) {
            return redirect('/guest/login')->with('error', 'Terjadi kesalahan saat mengambil profil');
        }
    }

    public function updateProfile(Request $request)
    {
        $token = session('token');
        if (!$token) {
            return redirect('/guest/login')->with('error', 'Anda harus login terlebih dahulu');
        }

        try {
            $response = Http::put('http://localhost:9000/api/user/profile', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token
                ],
                'json' => [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => $request->input('password'),
                    'phone_number' => $request->input('phone_number'),
                    'gender' => $request->input('gender'),
                    'identity_number' => $request->input('identity_number'),
                    'birthdate' => $request->input('birthdate')
                ]
            ]);

            if ($response->successful()) {
                return redirect('/users/user-profile')->with('success', 'Profil berhasil diperbarui');
            } else {
                return back()->with('error', 'Terjadi kesalahan saat memperbarui profil');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat memperbarui profil');
        }
    }

    public function logout(Request $request)
    {
        session()->forget('token');
        return redirect('/guest/login')->with('success', 'Anda telah logout.');
    }
}
