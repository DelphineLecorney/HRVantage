<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // 'showRegistrationForm' method: Displays the registration form.
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // 'register' method: Validates the user's input and creates a new user.
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('login');
    }

    // 'showLoginForm' method: Displays the login form.
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        }
    }
    

}
