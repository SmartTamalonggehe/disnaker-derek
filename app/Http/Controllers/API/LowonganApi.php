<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\lowongan;
use Illuminate\Http\Request;

class LowonganApi extends Controller
{
    public function show($id)
    {
        $data = lowongan::find($id);
        return response()->json($data);
    }
}
