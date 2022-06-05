@extends('layout/main')

@section('title', 'Edit Data Pegawai')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Form Edit Data Pegawai</h1>
                
                <form method="post" action="{{('/employee/'.$employees->id)}}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" placeholder="Masukkan Kode" name="kode" value="{{ $employees->kode }}">
                        @error('kode')<div class="invalid-feedback">
                           {{$message}}
                        </div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Pegawai</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama Pegawai" name="nama" value="{{ $employees->nama }}">
                        @error('nama')<div class="invalid-feedback">
                           {{$message}}
                        </div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="{{ $employees->alamat }}">
                        @error('alamat')<div class="invalid-feedback">
                           {{$message}}
                        </div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Masukkan Username" name="username" value="{{ $employees->username }}">
                        @error('username')<div class="invalid-feedback">
                           {{$message}}
                        </div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan Password" name="password" value="{{ $employees->password }}">
                        @error('password')<div class="invalid-feedback">
                           {{$message}}
                        </div>@enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection