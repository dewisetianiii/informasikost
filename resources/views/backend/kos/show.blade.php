@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data Kost/Kontrakan</div>
                <div class="card-body">
    <div class="form-group">
        <label for="">Nama</label>
        <input class="form-control" value="{{ $kos->nama }}" type="text" name="nama" disabled>
    </div>
    <div class="form-group">
        <label for="">Alamat</label>
        <input class="form-control" value="{{ $kos->alamat }}" type="text" name="alamat" disabled>
    </div>
    <div class="form-group">
        <label for="">Fasilitas Kamar</label>
        <input class="form-control" value="{{ $kos->kamar->fasilitas_kamar }}" type="text" name="kamar" disabled>
    </div>
    <div class="form-group">
        <label for="">Fasilitas parkir</label>
        <input class="form-control" value="{{ $kos->parkir->fasilitas_parkir }}" type="text" name="parkir" disabled>
    </div>
    <div class="form-group">
        <label for="">Harga</label>
        <input class="form-control" value="{{ $kos->harga }}" type="text" name="harga" disabled>
    </div>
    <div class="form-group">
        <label for="">Luas kamar</label>
        <input class="form-control" value="{{ $kos->luas_kamar }}" type="text" name="luaskamar" disabled>
    </div>
    <div class="form-group">
        <label for="">Telepon</label>
        <input class="form-control" value="{{ $kos->telepon }}" type="text" name="telepon" disabled>
    </div>
    <div class="form-group">
        <label for="">Gambar</label><br>
        <img src="{{ asset('assets/img/kos/'.$kos->gambar) }}" alt="" height="250px" width="250px">
        <input type="file" class="form-control" name="gambar" disabled>
    </div>
    <div class="form-group">
        <a href="{{ url('/kos') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </div>
            </div>
                </div>
                    </div>
                        </div>
                            @endsection