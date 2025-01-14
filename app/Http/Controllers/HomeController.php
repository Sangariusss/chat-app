<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            return view('views.home');
        } else {
            return redirect()->route('login');
        }
    }
}

