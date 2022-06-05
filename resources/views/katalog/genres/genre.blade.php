@extends('layout/main')

@section('title', 'Genres')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-7">
                <h1 class="mt-3">Genre Buku</h1>
                
                <a href="/genre/create" class="btn btn-primary my-3">Tambah Data Genre</a>
                <a href="/genre/cetak" class="btn btn-primary my-3" target="blank">Cetak</a>

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
                            <th scope="col">Genre</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($genres as $gnr)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$gnr->kode}}</td>
                                <td>{{$gnr->genre}}</td>
                                <td>
                                    <a href="{{ url('genre/'.$gnr->id) }}/edit" class="btn btn-primary">Edit</a>
                                    <form action="{{ url('genre/'.$gnr->id) }}"  method="post" class="d-inline">
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