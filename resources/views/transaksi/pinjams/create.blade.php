@extends('layout/main')

@section('title', 'Tambah Data Pinjam')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Form Tambah Data Pinjam</h1>
                
                <form method="post" action="/pinjam">
                    @csrf
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" placeholder="Masukkan Kode" name="kode" value="{{ old('kode') }}">
                        @error('kode')<div class="invalid-feedback">
                           {{$message}}
                        </div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" placeholder="Masukkan Tanggal" name="tanggal" value="{{ old('tanggal') }}">
                        @error('tanggal')<div class="invalid-feedback">
                           {{$message}}
                        </div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="pegawai_id">Pegawai</label>
                        <input type="text" class="form-control @error('pegawai_id') is-invalid @enderror" id="pegawai_id" placeholder="Masukkan Pegawai" name="pegawai_id" value="{{ old('pegawai_id') }}">
                        @error('pegawai_id')<div class="invalid-feedback">
                           {{$message}}
                        </div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="anggota_id">Anggota</label>
                        <input type="text" class="form-control @error('anggota_id') is-invalid @enderror" id="anggota_id" placeholder="Masukkan Anggota" name="anggota_id" value="{{ old('anggota_id') }}">
                        @error('anggota_id')<div class="invalid-feedback">
                           {{$message}}
                        </div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="buku_id">Judul</label>
                        <input type="text" class="form-control @error('buku_id') is-invalid @enderror" id="buku_id" placeholder="Masukkan Judul" name="buku_id" value="{{ old('buku_id') }}">
                        @error('buku_id')<div class="invalid-feedback">
                           {{$message}}
                        </div>@enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection