<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use Illuminate\Http\Request;
use DB;

class PinjamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pinjams = Pinjam::all();
        return view('transaksi.pinjams.pinjam', compact('pinjams'));
    }

    public function cetak()
    {
        //
        $pinjams = Pinjam::all();
        return view('transaksi.pinjams.cetak', compact('pinjams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('transaksi.pinjams.create');
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
            'kode' => 'required|unique:pinjams',
            'tanggal' => 'required',
            'pegawai_id' => 'required',
            'anggota_id' => 'required',
            'buku_id' => 'required'
        ]);

        Pinjam::create($request->all());

        return redirect('/pinjam')->with('status', 'Data transaksi peminjaman berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function show(Pinjam $pinjam)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pinjams = DB::table('pinjams')->where('id', $id)->first();
        return view('transaksi.pinjams.edit', compact('pinjams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        DB::table('pinjams')->where('id', $id)->update(
            [
                'kode' => $request->kode,
                'tanggal' => $request->tanggal,
                'pegawai_id' => $request->pegawai_id,
                'anggota_id' => $request->anggota_id,
                'buku_id' => $request->buku_id
            ]
        );
        return redirect('/pinjam')->with('status', 'Data transaksi pinjam berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('pinjams')->where('id', $id)->delete();
        return redirect('/pinjam')->with('status', 'Data transaksi berhasil dihapus!');
    }
}
