<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('login');
    }

    // Menangani proses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
            'sim_number' => 'required|string|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->sim_number === $request->sim_number) {
                // Redirect based on role
                if ($user->role === 'admin') {
                    return redirect()->route('index_admin')->with('success', 'Login successful!');
                }
                return redirect()->route('dashboard')->with('success', 'Login successful!');
            } else {
                Auth::logout();
                return back()->withErrors([
                    'sim_number' => 'The provided SIM number does not match our records.',
                ]);
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Menampilkan halaman pendaftaran
    public function showRegistrationForm()
    {
        return view('user-signup');
    }

    // Menangani proses pendaftaran
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|string|max:15',
            'sim_number' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed', // This validates the password confirmation
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'sim_number' => $request->sim_number,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful, please login.');
    }

    // Menangani proses logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'You have been logged out successfully.');
    }
}
