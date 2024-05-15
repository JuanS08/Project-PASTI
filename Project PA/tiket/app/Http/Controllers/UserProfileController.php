<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class UserProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('users.user-profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id),
            ],
            'phone_number' => 'required|string',
            'gender' => 'required|in:laki-laki,perempuan',
            'identity_number' => 'required|string',
            'birthdate' => 'required|date',
        ]);

        $user->update($validatedData);

        return redirect()->route('users.user-profile')->with('success', 'Profile updated successfully');
    }
}
