<?php

namespace App\Http\Controllers\Pencaker;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\Models\pencaker;
use App\Models\persyaratan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PersyaratanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pencaker_id = Auth::user()->pencaker->id;

        $pencaker = pencaker::all();
        $persyaratan = persyaratan::where('pencaker_id', $pencaker_id)->first();
        return view('pencaker.dt_persyaratan.index', [
            'pencaker' => $pencaker,
            'persyaratan' => $persyaratan,
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
        $kirimEmail = (new MailController)->prosesData();
        if ($kirimEmail == "gagal") {
            return redirect()->back()->with('error', 'Gagal mengirim email');
        }

        $ekstensi_ktp = $request->file('ktp')->extension();
        $nama_ktp = time() . '.' . $ekstensi_ktp;
        Storage::putFileAs('public/persyaratan/ktp', $request->ktp, $nama_ktp);


        $ekstensi_ijasah = $request->file('ijasah')->extension();
        $nama_ijasah = time() . '.' . $ekstensi_ijasah;
        Storage::putFileAs('public/persyaratan/ijazah', $request->ijasah, $nama_ijasah);


        $ekstensi_sertifikat = $request->file('sertifikat')->extension();
        $nama_sertifikat = time() . '.' . $ekstensi_sertifikat;
        Storage::putFileAs('public/persyaratan/sertifikat', $request->sertifikat, $nama_sertifikat);

        $pencaker_id = Auth::user()->pencaker->id;

        persyaratan::create([
            'pencaker_id' => $pencaker_id,
            'ktp' => $nama_ktp,
            'ijasah' => $nama_ijasah,
            'sertifikat' => $nama_sertifikat,

        ]);
        return redirect()->route('persyaratan.index')
            ->with('berhasil', 'Data Berhasil Disimpan');
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
