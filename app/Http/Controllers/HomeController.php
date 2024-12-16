<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function adminHome()
    {
        return view('admin.verified'); // Tampilan untuk admin
    }

    public function userHome()
    {
        return view('user.homeuser'); // Tampilan untuk user
    }
}
