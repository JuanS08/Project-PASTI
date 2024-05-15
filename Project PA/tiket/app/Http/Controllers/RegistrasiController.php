<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    public function showRegistrationForm()
    {
        return view('guest.registrasi');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255', 'regex:/^[A-Z][a-z]+(\s[A-Z][a-z]+)*$/'],
            'email' => 'required|string|email|max:255|unique:users,email',
            'phone_number' => 'required|string|digits_between:12,13',
            'gender' => 'required|in:laki-laki,perempuan',
            'identity_number' => 'required|string|digits:16',
            'birthdate' => 'required|date',
            'password' => 'required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])[A-Za-z0-9]{8,}$/',
        ], [
            'name.regex' => 'Format Nama Lengkap tidak valid. Nama harus diawali dengan huruf kapital dan hanya mengandung huruf kecil setelahnya.',
            'phone_number.digits_between' => 'Kolom No. HP harus memiliki panjang 12 angka.',
            'gender.in' => 'Pilihan Jenis Kelamin tidak valid.',
            'identity_number.digits' => 'Kolom Nomor Identitas harus terdiri dari 16 angka.',
            'birthdate.date' => 'Format Tanggal Lahir tidak valid.',
            'password.regex' => 'Format Password tidak valid. Password harus mengandung setidaknya satu huruf besar, satu huruf kecil, dan satu angka.',
        ]);

        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->phone_number = $validatedData['phone_number'];
        $user->gender = $validatedData['gender'];
        $user->identity_number = $validatedData['identity_number'];
        $user->birthdate = $validatedData['birthdate'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        return redirect()->route('guest.login')->with('success', 'Registrasi berhasil! Silakan login untuk melanjutkan.');
    }
}
