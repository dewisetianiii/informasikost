@extends('layouts.backend')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <center>
                <div class="p-3 mb-2 bg-secondary text-white">Data Fasilitas Kamar</div>
                </center>
                <center>
                    <br>
                    <a href="{{ route('kamar.create') }}" class="btn btn-outline-info">Tambah</a>
                </center>
                <div class="table-responsive">
                    <br>
                    <table class="table table-striped table-bordered" >
                        <tr class="table table-striped">
                            <th>No</th>
                            <th>Fasilitas Kamar</th>
                            <th colspan="3" style="text-align:center;">Action</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach ($kamar as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->fasilitas_kamar }}</td>
                                <td><a href="{{ route('kamar.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                                <td><a href="{{ route('kamar.show', $data->id) }}" class="btn btn-md btn-info">Detail Data</a></td>
                                <td>
                                    <form action="{{ route('kamar.destroy', $data->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn sm btn-danger" type="submit">Hapus Data</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection