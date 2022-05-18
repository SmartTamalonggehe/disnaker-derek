<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('pencaker.auth.login');
    }

    public function store(Request $request)
    {
       $dataLogin = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($dataLogin)) {
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::HOME);
            // return redirect()->intended('pencaker');
        }

        return back()->with('loginError','Login Gagal!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
