<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use DB;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Book::all();
        return view('katalog.books.book', compact('books'));
    }

    public function cetak()
    {
        //
        $books = Book::all();
        return view('katalog.books.cetak', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('katalog.books.create');
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
            'kode' => 'required|unique:books',
            'judul' => 'required',
            'penulis' => 'required',
            'tahun' => 'required',
            'penerbit' => 'required',
            'jumlah' => 'required',
            'genre_id' => 'required'
        ]);

        Book::create($request->all());

        return redirect('/book')->with('status', 'Data buku berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $books = DB::table('books')->where('id', $id)->first();
        return view('katalog.books.edit', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        DB::table('books')->where('id', $id)->update(
            [
                'kode' => $request->kode,
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'tahun' => $request->tahun,
                'penerbit' => $request->penerbit,
                'jumlah' => $request->jumlah,
                'genre_id' => $request->genre_id
            ]
        );
        return redirect('/book')->with('status', 'Data buku berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('books')->where('id', $id)->delete();
        return redirect('/book')->with('status', 'Data buku berhasil dihapus!');
    }
}
