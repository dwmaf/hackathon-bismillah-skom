<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required', // Ensure the password is confirmed
        ]);

        // Hash the password before saving
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Create a new user
        $user = User::create($validatedData);

        // Optionally log the user in after registration
        // Auth::login($user);

        // Return a response
        return redirect()->intended('/login');
    }

    // Login an existing user
    public function login(Request $request)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt untuk login
        if (Auth::attempt($validatedData)) {
            // Ambil data user yang sedang login
            $user = Auth::user();

            // Buat cookie untuk menyimpan data user, misalnya nama dan email
            $cookie = cookie('user_data', json_encode([
                'name' => $user->name
            ]), 60 * 24); // Cookie berlaku selama 1 hari (1440 menit)

            // Redirect ke halaman yang diinginkan dengan cookie
            return redirect()->intended('/Trecycle')->cookie($cookie);
        }

        // Jika login gagal, kirimkan pesan error
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }


    // Logout the user
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->intended('/login');
    }
}
