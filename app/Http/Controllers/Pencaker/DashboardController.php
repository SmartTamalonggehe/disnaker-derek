<?php

namespace App\Http\Controllers\Pencaker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pencaker.dashboard.index');
    }
}
