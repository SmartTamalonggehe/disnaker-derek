<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\pelatihan;
use Illuminate\Http\Request;

class PelatihanApi extends Controller
{
    public function show($id)
    {
        $data = pelatihan::find($id);
        return response()->json($data);
    }
}
