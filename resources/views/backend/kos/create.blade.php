@extends('layouts.backend')

@section('content')
<br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Kost/Kontrakan</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">Tambah Data Kost/Kontrakan</div>
                    <div class="card-body">
                    <form action="{{ route('kos.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control" required>
                                </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Fasilitas Kamar</label>
                                <select name="id_kamar[]" class="form-control" id="select2" multiple>
                        @foreach($kamar as $data)
                            <option value="{{ $data->id }}">
                                {{ $data->fasilitas_kamar }}
                            </option>
                        @endforeach
                                </select>
                            </div>
                            {{-- <div class="form-group">
                                <label for="">Fasilitas Parkir</label>
                                <select name="parkir[]" class="form-control" id="select2" multiple>
                        @foreach($parkir as $data)
                            <option value="{{ $data->id }}">
                                {{ $data->fasilitas_parkir }}
                            </option>
                        @endforeach
                                </select>
                            </div> --}}
                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="text" name="harga" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Luas Kamar</label>
                                <input type="text" name="luaskamar" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <input type="file" name="gambar" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Telepon</label>
                                <input type="text" name="telepon" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-md btn-info">Simpan</button>
                            <a name="" id="" class="btn btn-md btn-warning" 
                            href="{{ route('kos.index') }}" role="button">Kembali</a>
                            
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection