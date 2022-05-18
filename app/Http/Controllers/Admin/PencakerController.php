<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\kartukuning;
use App\Models\kelurahan;
use App\Models\pencaker;
use App\Models\pendidikan;
use App\Models\persyaratan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PencakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendidikan = pendidikan::all();
        $pencaker = pencaker::orderBy('updated_at', 'DESC')->get();
        return view('admin.pencaker.index', [
            'pendidikan' => $pendidikan,
            'pencaker' => $pencaker
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          // 8203-230321-03 0001
          $tgl_bln_thn = Carbon::now()->isoFormat('DDMMYY');
          $pencaker = pencaker::find($request->pencaker_id);
          $kd_distrik = $pencaker->kelurahan->distrik->kd_distrik;

          $kode = "8203-$tgl_bln_thn-$kd_distrik";

          $kd_kartu = kartukuning::where('kd_kartu', $kode)->max('no') + 1;

          kartukuning::create([
              'pencaker_id' => $request->pencaker_id,
              'kd_kartu' => $kode,
              'no' => $kd_kartu,
              'tgl' => Carbon::now(),
          ]);

          return redirect()->route('pencakerAdmin.index')
              ->with('berhasil', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $pencaker = pencaker::find($id);
        $pendidikan = pendidikan::where('pencaker_id', $id)->first();
        $persyaratan = persyaratan::where('pencaker_id', $id)->first();
        $kelurahan = kelurahan::find($id);
        return view('admin.pencaker.detail', [
            'pencaker' => $pencaker,
            'pendidikan' => $pendidikan,
            'persyaratan' => $persyaratan,
            'kelurahan' => $kelurahan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pencaker::destroy($id);
        return redirect()->route('pencakerAdmin.index')
            ->with('berhasil', 'Data Berhasil Dihapus');
    }
}
