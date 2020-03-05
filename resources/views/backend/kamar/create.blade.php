@extends('layouts.backend')

@section('content')
<br><br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Fasilitas Kamar</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">Tambah Data Fasilitas Kamar</div>
                    <div class="card-body">
                    <form action="{{ route('kamar.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Fasilitas Kamar</label>
                                <input type="text" name="fasilitas_kamar" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-md btn-info">Simpan</button>
                            <a name="" id="" class="btn btn-md btn-warning" 
                            href="{{ route('kamar.index') }}" role="button">Kembali</a>                        
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection