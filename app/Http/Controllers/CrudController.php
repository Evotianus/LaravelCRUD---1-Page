<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datatable = Data::all();
        return view('index', compact('datatable'));
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
        Data::create([
            'kodebarang' => $request->kodebrg,
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'merk' => $request->merk,
            'satuan' => $request->satuan,
            'jlh_stok' => $request->jlh_stok,
            'hargajual' => $request->harga_jual,
            'hargabeli' => $request->harga_beli,
            'ket' => $request->ket
        ]);

        return redirect('/');
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
        Data::where('id', $id)
            ->update([
                'kodebarang' => $request->kodebrg,
                'nama' => $request->nama,
                'jenis' => $request->jenis,
                'merk' => $request->merk,
                'satuan' => $request->satuan,
                'jlh_stok' => $request->jlh_stok,
                'hargajual' => $request->harga_jual,
                'hargabeli' => $request->harga_beli,
                'ket' => $request->ket
        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $id)
    {
        Data::destroy($id->id);

        return redirect('/');
    }
}
