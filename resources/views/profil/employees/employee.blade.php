@extends('layout/main')

@section('title', 'Employees')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Profil Pegawai</h1>
                
                <a href="/employee/create" class="btn btn-primary my-3">Tambah Data Pegawai</a>
                <a href="/employee/cetak" class="btn btn-primary my-3" target="blank">Cetak</a>

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
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $empl)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$empl->kode}}</td>
                                <td>{{$empl->nama}}</td>
                                <td>{{$empl->alamat}}</td>
                                <td>{{$empl->username}}</td>
                                <td>{{$empl->password}}</td>
                                <td>
                                    <a href="{{ url('employee/'.$empl->id) }}/edit" class="btn btn-primary">Edit</a>
                                    <form action="{{ url('employee/'.$empl->id) }}"  method="post" class="d-inline">
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