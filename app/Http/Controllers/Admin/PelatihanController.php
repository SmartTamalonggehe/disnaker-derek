<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\pelatihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pelatihan = pelatihan::all();
        return view('admin.pelatihan.index', [
            'pelatihan' => $pelatihan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pelatihan.create');
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
        Storage::putFileAs('public/pelatihan', $request->poster, $nama_poster);

        pelatihan::create([
            'nm_pelatihan' => $request->nm_pelatihan,
            'jenis_pelatihan' => $request->jenis_pelatihan,
            'penyelengara' => $request->penyelengara,
            'poster' => $nama_poster
        ]);
        return redirect()->route('pelatihan.index')
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

        $pelatihan = pelatihan::find($id);
        return view('admin.pelatihan.update',[
                'pelatihan' => $pelatihan
            ]);
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
        Storage::putFileAs('public/pelatihan', $request->poster, $nama_poster);

        pelatihan::find($id)->update([
            'nm_pelatihan' => $request->nm_pelatihan,
            'jenis_pelatihan' => $request->jenis_pelatihan,
            'penyelengara' => $request->penyelengara,
            'poster' => $nama_poster
        ]);
        return redirect()->route('pelatihan.index')
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
        pelatihan::destroy($id);
        return redirect()->route('pelatihan.index')
            ->with('berhasil', 'Data Berhasil Dihapus');
    }
}
