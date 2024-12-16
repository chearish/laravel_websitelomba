<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function login_authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect berdasarkan peran
            if (Auth::user()->role->name === 'admin') {
                return redirect()->intended(RouteServiceProvider::HOME_ADMIN);
            }

            return redirect()->intended(RouteServiceProvider::HOME_USER);

        }


        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Log the user out of the application.
     */
    public function logout(Request $request){
    Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Clear cache headers to prevent back navigation
        return redirect()->route('home')->withHeaders([
            'Cache-Control' => 'no-cache, no-store, must-revalidate',
            'Pragma' => 'no-cache',
            'Expires' => '0',
        ]);  
    }

    public function showRegistrationForm()
    {
        return view('login.signup');
    }

    public function register(Request $request)
    {
        // Validate form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
        ]);

        // Handle validation failure
        if ($validator->fails()) {
            return redirect()->route('signup')
                             ->withErrors($validator)
                             ->withInput();
        }

        // Create new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Automatically log the user in
        Auth::login($user);

        // Redirect to home or any other page after successful registration
        return redirect()->route('home');
    }
}
