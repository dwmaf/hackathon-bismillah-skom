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
        // Validate the incoming request data
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if (Auth::attempt($validatedData)) {
            // Authentication passed, return user data
            return redirect()->intended('/Trecycle');
        }

        // If authentication fails, throw a validation exception
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
