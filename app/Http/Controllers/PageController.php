<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('about.about'); 
    }
    public function categories()
    {
        return view('categories'); 
    }

    public function judging()
    {
        return view('judging'); 
    }

    public function contactus()
    {
        return view('contactus'); 
    }

    public function prizes()
    {
        return view('prizes-and-award'); 
    }

    public function fee()
    {
        return view('registrationfee'); 
    }
}
