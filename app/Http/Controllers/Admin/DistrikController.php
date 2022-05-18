<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\distrik;
use Illuminate\Http\Request;

class DistrikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $distrik = distrik::all();
        return view('admin.distrik.index', [
            'distrik' => $distrik
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.distrik.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        distrik::create([
            'kd_distrik' => $request->kd_distrik,
            'nm_distrik' => $request->nm_distrik
        ]);

        return redirect()->route('distrik.index')
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
        $distrik = distrik::find($id);
        return view('admin.distrik.update',[
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
        distrik::find($id)->update([
            'kd_distrik' => $request->kd_distrik,
            'nm_distrik' => $request->nm_distrik,
        ]);

        return redirect()->route('distrik.index')
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
        distrik::destroy($id);
        return redirect()->route('distrik.index')
            ->with('berhasil', 'Data Berhasil Dihapus');
    }
}
