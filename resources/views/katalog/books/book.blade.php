@extends('layout/main')

@section('title', 'Books')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3">Data Buku</h1>

                <a href="/book/create" class="btn btn-primary my-3">Tambah Data Buku</a>
                <a href="/book/cetak" class="btn btn-primary my-3" target="blank">Cetak</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $bk)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$bk->kode}}</td>
                                <td>{{$bk->judul}}</td>
                                <td>{{$bk->penulis}}</td>
                                <td>{{$bk->tahun}}</td>
                                <td>{{$bk->penerbit}}</td>
                                <td>{{$bk->jumlah}}</td>
                                <td>{{$bk->genre_id}}</td>
                                <td>
                                    <a href="{{ url('book/'.$bk->id) }}/edit" class="btn btn-primary">Edit</a>
                                    <form action="{{ url('book/'.$bk->id) }}"  method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</button>
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection