<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
    
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials)){
            if (Auth::user()->role->name == "admin"){
                return redirect('admin/verified');
            } elseif (Auth::user()->role->name == "user"){
                return redirect('user/homeuser');
            }
        }else{
            return redirect('')->withErrors('Username atau password yang dimasukkan tidak sesuai')->withInput();
        }
    }


    // public function login()
    // {
    //     if (Auth::check()) {
    //         return redirect('home');
    //     }else{
    //         return view('login');
    //     }
    // }

    // public function authenticate(Request $request)
    // {
    
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email',],
    //         'password' => ['required'],
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         if (Auth::user()->role->name == "admin") {
    //             $request->session()->put('isAdmin', true);
    //         }
    //         // Redirect to walks.index, middleware only checked on walks transaction and master data
    //         return redirect()->intended('home');
    //     }
    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    //     ])->onlyInput('email');
    // }


    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('home');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
