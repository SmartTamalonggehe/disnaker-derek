<?php

namespace App\Http\Controllers\Pencaker;

use App\Http\Controllers\Controller;
use App\Models\kelurahan;
use App\Models\pencaker;
use App\Models\pendidikan;
use App\Models\persyaratan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PencakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $pencaker_id = Auth::user()->pencaker->id;

        // $pendidikan = pendidikan::where('pencaker_id', $pencaker_id)->first();
        // $persyaratan = persyaratan::where('pencaker_id', $pencaker_id)->first();


        $pencaker = pencaker::where('user_id', Auth::user()->id)->first();
        $kelurahan = kelurahan::all();
        return view('pencaker.dt_pencaker.index', [
            'pencaker' => $pencaker,
            'kelurahan' => $kelurahan,
            // 'persyaratan' => $persyaratan,
            // 'pendidikan' => $pendidikan,


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
        //pencaker
        $ekstensi_foto = $request->file('foto')->extension();
        $nama_foto = time() . '.' . $ekstensi_foto;
        Storage::putFileAs('public/pencaker', $request->foto, $nama_foto);


        //pencaker
        pencaker::create([
            'user_id' => Auth::user()->id,
            'no_penduduk' => $request->no_penduduk,
            'nm_pencaker' => $request->nm_pencaker,
            'tempat' => $request->tempat,
            'tgl_lahir' => $request->tgl_lahir,
            'kelurahan_id' => $request->kelurahan_id,
            'jenkel' => $request->jenkel,
            'status' => $request->status,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'foto' => $nama_foto
        ]);

        return redirect()->route('pencaker.index')
            ->with('berhasil', 'Data Berhasil Disimpan');



        //pendidikan=============================================
        // $pencaker_id = Auth::user()->pencaker->id;

        // pendidikan::create([
        //     'pencaker_id' => $pencaker_id,
        //     'pend_terakhir' => $request->pend_terakhir,
        //     'nm_instansi' => $request->nm_instansi,

        // ]);


        //persyaratan=========================================

        // $ekstensi_ktp = $request->file('ktp')->extension();
        // $nama_ktp = time() . '.' . $ekstensi_ktp;
        // Storage::putFileAs('public/persyaratan/ktp', $request->ktp, $nama_ktp);

        // $ekstensi_ijasah = $request->file('ijasah')->extension();
        // $nama_ijasah = time() . '.' . $ekstensi_ijasah;
        // Storage::putFileAs('public/persyaratan/ijazah', $request->ijasah, $nama_ijasah);

        // $ekstensi_sertifikat = $request->file('sertifikat')->extension();
        // $nama_sertifikat = time() . '.' . $ekstensi_sertifikat;
        // Storage::putFileAs('public/persyaratan/sertifikat', $request->sertifikat, $nama_sertifikat);


       

        // $pencaker_id = Auth::user()->pencaker->id;

        // persyaratan::create([
        //     'pencaker_id' => $pencaker_id,
        //     'ktp' => $nama_ktp,
        //     'ijasah' => $nama_ijasah,
        //     'sertifikat' => $nama_sertifikat,

        // ]);

        //===============================================
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
