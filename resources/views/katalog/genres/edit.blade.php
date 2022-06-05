@extends('layout/main')

@section('title', 'Edit Data Genre')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Form Edit Data Genre</h1>
                
                <form method="post" action="{{('/genre/'.$genres->id)}}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" placeholder="Masukkan Kode" name="kode" value="{{ $genres->kode }}">
                        @error('kode')<div class="invalid-feedback">
                           {{$message}}
                        </div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="genre">Genre</label>
                        <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre" placeholder="Masukkan Genre" name="genre" value="{{ $genres->genre }}">
                        @error('genre')<div class="invalid-feedback">
                           {{$message}}
                        </div>@enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection