<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'gender',
        'identity_number',
        'birthdate',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public static function createUser($data)
    {
        // Validasi input
        $validator = Validator::make($data, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required|string',
            'gender' => 'required|in:laki-laki,perempuan',
            'identity_number' => 'required|string',
            'birthdate' => 'required|date',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return null;
        }

        return self::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'gender' => $data['gender'],
            'identity_number' => $data['identity_number'],
            'birthdate' => $data['birthdate'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone_number' => 'required|string|max:20',
            'gender' => 'required|string|in:laki-laki,perempuan',
            'identity_number' => 'required|string|max:255',
            'birthdate' => 'required|date',
        ]);

        // Perbarui data pengguna
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->gender = $request->input('gender');
        $user->identity_number = $request->input('identity_number');
        $user->birthdate = $request->input('birthdate');
        $user->save;

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'users_id');
    }
}
