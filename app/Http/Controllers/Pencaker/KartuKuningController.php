<?php

namespace App\Http\Controllers\Pencaker;

use App\Http\Controllers\Controller;
use App\Models\kartuKuning;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KartuKuningController extends Controller
{
    public function index()
    {
        $pencaker_id = Auth::user()->pencaker->id;
        $kartu_kuning = kartuKuning::where('pencaker_id', $pencaker_id)->first();

        return view('pencaker.kartu_pencaker.index', [
            'kartu_kuning' => $kartu_kuning
        ]);
    }

    public function cetakKartu()
    {

        $pencaker_id = Auth::user()->pencaker->id;
        $kartu_kuning = KartuKuning::where('pencaker_id', $pencaker_id)->first();

        $pdf = PDF::loadView('pencaker.kartu_pencaker.cetak_kartu', [
            'kartu_kuning' => $kartu_kuning
        ]);

        return $pdf->download('KARTU KUNING.pdf');

        // return view('pencaker.kartu_kuning.cetak_kartu', [
        //     'kartu_kuning' => $kartu_kuning
        // ]);
    }
}
