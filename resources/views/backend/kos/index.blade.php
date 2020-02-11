@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Data Kos/Kontrakan</div>
                <br>
                <center><a href="{{ route('kos.create') }}" class="btn btn-outline-info">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Harga</th>
                                <th>Luas Kamar</th>
                                <th>Fasilitas Kamar</th>
                                <th>Fasilitas Parkir</th>
                                <th>Telepon</th>
                                <th>Gambar</th>
                                <th colspan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($kos as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->harga }}</td>
                    <td>{{ $data->luas_kamar }}</td>
                    <td>{{ $data->kamar->fasilitas_kamar }}</td>
                    <td>{{ $data->parkir->fasilitas_parkir }}</td>
                    <td>{{ $data->telepon }}</td>
                    <td><img src="{{ asset('assets/img/kos/'.$data->gambar) }}" alt="" height="100px" width="100px"></td>
                    <td><a href="{{ route('kos.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('kos.show', $data->id) }}" class="btn btn-success">Detail Data</a></td>
                    <td><form action="{{ route('kos.destroy', $data->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn -sm btn-danger" type="submit">Hapus Data</button>
                    </form>
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection