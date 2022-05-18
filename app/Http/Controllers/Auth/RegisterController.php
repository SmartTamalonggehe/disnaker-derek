<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pencaker.auth.register');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required', 'max:225',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        $user = User::create($validateData);

        // input role
        $user->attachRole('pencaker');

        // Auth::login($user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]));

        // $user->attachRole('pencaker');

        $request->session()->flash('success', 'Registrasi Berhasil! Silahkan Login');

        return Redirect('login');
    }
}
