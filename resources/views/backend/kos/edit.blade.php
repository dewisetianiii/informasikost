@extends('layouts.backend')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data Fasilitas Kost/Kontrakan</div>
                <div class="card-body">
                    <form action="{{ route('kos.update', $kos->id) }}" method="post" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
    <div class="form-group">
        <label for="">Nama</label>
        <input class="form-control" value="{{ $kos->nama }}" type="text" name="nama">
    </div>
    <div class="form-group">
        <label for="">Alamat</label>
        <input class="form-control" value="{{ $kos->alamat }}" type="text" name="alamat">
    </div>
    <div class="form-group">
    @php $kamar = \App\Kamar::all(); @endphp
        <label for="">Fasilitas Kamar</label>
        <select name="id_kamar[]" class="form-control" multiple>
            @foreach($kamar as $data)
                <option value="{{ $data->id }}" {{ (in_array($data->id, $selected)) ? 'selected="selected"' : '' }}>{{ $data->fasilitas_kamar }}</option>
            @endforeach
        </select>
    </div>
    {{-- <div class="form-group">
        <label for="">Fasilitas Parkir</label>
        <select name="parkir" class="form-control">
            @foreach($parkir as $data)
                <option value="{{ $data->id }}"
                    {{ $kos->Parkir->id ==
                        $data->id ? 'selected="selected"' : '' }}>
                    {{ $data->fasilitas_parkir }}
                </option>
            @endforeach
        </select>
    </div> --}}
    <div class="form-group">
        <label for="">Harga</label>
        <input class="form-control" value="{{ $kos->harga }}" type="text" name="harga">
    </div>
    <div class="form-group">
        <label for="">Luas Kamar</label>
        <input class="form-control" value="{{ $kos->luas_kamar }}" type="text" name="luaskamar">
    </div>
    <div class="form-group">
        <label for="">Telepon</label>
        <input class="form-control" value="{{ $kos->telepon }}" type="text" name="telepon">
    </div>
    <div class="form-group">
        <label for="">Gambar</label><br>
        <img src="{{ asset('assets/img/kos/'.$kos->gambar) }}" alt="" height="250px" width="250px">
        <input type="file" class="form-control" name="gambar">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">
        Simpan Data
        </button>
    </div>
    <div class="form-group">
        <a href="{{ url('/kos') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection