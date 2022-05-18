<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\lowongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lowongan = lowongan::all();
        return view('admin.loker.index', [
            'lowongan' => $lowongan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.loker.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ekstensi_poster = $request->file('poster')->extension();
        $nama_poster = time() . '.' . $ekstensi_poster;
        Storage::putFileAs('public/loker/poster', $request->poster, $nama_poster);


        lowongan::create([
            'nm_perusahaan' => $request->nm_perusahaan,
            'umur_minimal' => $request->umur_minimal,
            'umur_maksimal' => $request->umur_maksimal,
            'pend_terakhir' => $request->pend_terakhir,
            'kehalian' => $request->kehalian,
            'keterangan' => $request->keterangan,
            'poster' => $nama_poster

        ]);
        return redirect()->route('loker.index')
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
        $lowongan = lowongan::find($id);
        return view('admin.lowongan.detail', [
            'lowongan' => $lowongan
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
        return view('admin.loker.update');
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
        $ekstensi_poster = $request->file('poster')->extension();
        $nama_poster = time() . '.' . $ekstensi_poster;
        Storage::putFileAs('public/loker/poster', $request->poster, $nama_poster);

        lowongan::find($id)->update([
            'nm_perusahaan' => $request->nm_perusahaan,
            'umur_minimal' => $request->umur_minimal,
            'umur_maksimal' => $request->umur_maksimal,
            'pend_terakhir' => $request->pend_terakhir,
            'keahlian' => $request->keahlian,
            'keterangan' => $request->keterangan,
            'poster' => $nama_poster

        ]);
        return redirect()->route('loker.index')
            ->with('berhasil', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        lowongan::destroy($id);
        return redirect()->route('loker.index')
            ->with('berhasil', 'Data Berhasil Dihapus');
    }
}
