<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\distrik;
use App\Models\kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelurahan = Kelurahan::all();
        return view('admin.kelurahan.index', [
            'kelurahan' => $kelurahan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $distrik = distrik::all();
        return view('admin.kelurahan.create', [
            'distrik' => $distrik
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        kelurahan::create([
            'distrik_id' => $request->distrik_id,
            'nm_kelurahan' => $request->nm_kelurahan
        ]);

        return redirect()->route('kelurahan.index')
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $distrik = distrik::all();
        $kelurahan = kelurahan::find($id);
        return view('admin.kelurahan.update', [
            'kelurahan' => $kelurahan,
            'distrik' => $distrik
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
        kelurahan::find($id)->update([
            'distrik_id' => $request->distrik_id,
            'nm_kelurahan' => $request->nm_kelurahan
        ]);
        return redirect()->route('kelurahan.index')
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
        kelurahan::destroy($id);
        return redirect()->route('kelurahan.index')
            ->with('berhasil', 'Data Berhasil Dihapus');
    }
}
