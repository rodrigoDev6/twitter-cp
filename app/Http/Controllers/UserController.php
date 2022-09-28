<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // dd('você está logado');
            return view('home');
        } else {
            dd('você não está logado');
        }
    }

    public function logout(Request $request)
    {
        return redirect('auth.login')->with(Auth::logout());
    }
}
