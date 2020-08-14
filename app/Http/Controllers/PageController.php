<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function logout()
    {
        auth()->logout();
        session()->flush();
        return redirect()->route('index');
    }
}
