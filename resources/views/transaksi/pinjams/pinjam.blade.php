@extends('layout/main')

@section('title', 'Peminjaman')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3">Data Peminjaman</h1>

                <a href="/pinjam/create" class="btn btn-primary my-3">Tambah Data Peminjaman</a>
                <a href="/pinjam/cetak" class="btn btn-primary my-3" target="blank">Cetak</a>

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
                            <th scope="col">Tanggal</th>
                            <th scope="col">Pegawai</th>
                            <th scope="col">Anggota</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pinjams as $pjm)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$pjm->kode}}</td>
                                <td>{{$pjm->tanggal}}</td>
                                <td>{{$pjm->pegawai_id}}</td>
                                <td>{{$pjm->anggota_id}}</td>
                                <td>{{$pjm->buku_id}}</td>
                                <td>
                                    <a href="{{ url('pinjam/'.$pjm->id) }}/edit" class="btn btn-primary">Edit</a>
                                    <form action="{{ url('pinjam/'.$pjm->id) }}"  method="post" class="d-inline">
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