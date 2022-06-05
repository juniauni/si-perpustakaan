@extends('layout/main')

@section('title', 'Tambah Data Anggota')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Form Tambah Data Anggota</h1>
                
                <form method="post" action="/member">
                    @csrf
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" placeholder="Masukkan Kode" name="kode" value="{{ old('kode') }}">
                        @error('kode')<div class="invalid-feedback">
                           {{$message}}
                        </div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Pegawai</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama Pegawai" name="nama" value="{{ old('nama') }}">
                        @error('nama')<div class="invalid-feedback">
                           {{$message}}
                        </div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="{{ old('alamat') }}">
                        @error('alamat')<div class="invalid-feedback">
                           {{$message}}
                        </div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="tlp">No. HP</label>
                        <input type="text" class="form-control @error('tlp') is-invalid @enderror" id="tlp" placeholder="Masukkan Usernamae" name="tlp" value="{{ old('tlp') }}">
                        @error('tlp')<div class="invalid-feedback">
                           {{$message}}
                        </div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Password" name="email" value="{{ old('email') }}">
                        @error('email')<div class="invalid-feedback">
                           {{$message}}
                        </div>@enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tamabah Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection