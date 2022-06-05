@extends('layout/main')

@section('title', 'Members')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Profil Anggota</h1>
                
                <a href="/member/create" class="btn btn-primary my-3">Tambah Data Anggota</a>
                <a href="/member/cetak" class="btn btn-primary my-3" target="blank">Cetak</a>

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
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Nomor HP</th>
                            <th scope="col">Email</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($members as $mbr)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$mbr->kode}}</td>
                                <td>{{$mbr->nama}}</td>
                                <td>{{$mbr->alamat}}</td>
                                <td>{{$mbr->tlp}}</td>
                                <td>{{$mbr->email}}</td>
                                <td>
                                    <a href="{{ url('member/'.$mbr->id) }}/edit" class="btn btn-primary">Edit</a>
                                    <form action="{{ url('member/'.$mbr->id) }}"  method="post" class="d-inline">
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