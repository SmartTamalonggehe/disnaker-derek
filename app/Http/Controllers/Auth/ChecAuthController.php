<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChecAuthController extends Controller
{
    public function index()
    {

        $user = Auth::user();

        if ($user->hasRole('admin')) {
            return redirect()->route('admin');
        }
        if ($user->hasRole('kadis')) {
            return redirect()->route('kadis');
        }

        if ($user->hasRole('pencaker')) {
            return redirect()->route('pencaker');
        }

        dd($user);
    }
}
