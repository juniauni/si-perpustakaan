<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use DB;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $genres = Genre::all();
        return view('katalog.genres.genre', compact('genres'));
    }

    public function cetak()
    {
        //
        $genres = Genre::all();
        return view('katalog.genres.cetak', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('katalog.genres.create');
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
        // $genres = new Genre;
        // $genres->kode = $request->kode;
        // $genres->genre = $request->genre;
        // $genres->save();

        // Genre::create([
        //     'kode' => $request->kode,
        //     'genre' => $request->genre
        // ]);

        $request->validate([
            'kode' => 'required|unique:genres',
            'genre' => 'required'
        ]);

        Genre::create($request->all());

        return redirect('/genre')->with('status', 'Data genre berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function show(Genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $genres = DB::table('genres')->where('id', $id)->first();
        return view('katalog.genres.edit', compact('genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        DB::table('genres')->where('id', $id)->update(
            [
                'kode' => $request->kode,
                'genre' => $request->genre
            ]
        );
        return redirect('/genre')->with('status', 'Data genre berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('genres')->where('id', $id)->delete();
        return redirect('/genre')->with('status', 'Data genre berhasil dihapus!');
    }
}
