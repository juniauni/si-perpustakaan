<?php

namespace App\Http\Controllers;

use App\Models\Kembali;
use Illuminate\Http\Request;
use DB;

class KembalisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kembalis = Kembali::get();
        return view('transaksi.kembalis.kembali', compact('kembalis'));
    }

    public function cetak()
    {
        //
        $kembalis = Kembali::all();
        return view('transaksi.kembalis.cetak', compact('kembalis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('transaksi.kembalis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kode' => 'required|unique:kembalis',
            'tanggal' => 'required',
            'pegawai_id' => 'required',
            'anggota_id' => 'required',
            'buku_id' => 'required'
        ]);

        Kembali::create($request->all());

        return redirect('/kembali')->with('status', 'Data transaksi pengembalian berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kembali  $kembali
     * @return \Illuminate\Http\Response
     */
    public function show(Kembali $kembali)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kembali  $kembali
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kembalis = DB::table('kembalis')->where('id', $id)->first();
        return view('transaksi.kembalis.edit', compact('kembalis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kembali  $kembali
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        DB::table('kembalis')->where('id', $id)->update(
            [
                'kode' => $request->kode,
                'tanggal' => $request->tanggal,
                'pegawai_id' => $request->pegawai_id,
                'anggota_id' => $request->anggota_id,
                'buku_id' => $request->buku_id
            ]
        );
        return redirect('/kembali')->with('status', 'Data transaksi kembali berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kembali  $kembali
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('kembalis')->where('id', $id)->delete();
        return redirect('/kembali')->with('status', 'Data transaksi berhasil dihapus!');
    }
}
