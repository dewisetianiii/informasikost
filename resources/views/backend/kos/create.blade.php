@extends('layouts.backend')

@section('content')

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
                                <label for="">Harga</label>
                                <input type="number" name="harga" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Type Motor</label>
                                <input type="text" name="motor_type" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Pilihan Warna kos</label>
                                <input type="text" name="motor_warna_pilihan" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Harga Motor</label>
                                <input type="number" name="motor_harga" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Gambar Motor</label>
                                <input type="file" name="motor_gambar" class="form-control" required>
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