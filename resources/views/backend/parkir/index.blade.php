@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Fasilitas parkir</div>
                
                <center>
                    <br>
                    <a href="{{ route('parkir.create') }}" class="btn btn-outline-info">Tambah</a>
                </center>
                <div class="table-responsive">
                    <br>
                    <table class="table"3 >
                        <tr>
                            <th>No</th>
                            <th>Fasilitas Parkir</th>
                            <th colspan="3" style="text-align:center;">Action</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach ($parkir as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->fasilitas_parkir }}</td>
                                <td><a href="{{ route('parkir.edit', $data->id) }}" class="btn btn sm btn-success">Edit</a></td>
                                <td><a href="{{ route('parkir.show', $data->id) }}" class="btn btn-md btn-info">Detail Data</a></td>
                                <td>
                                    <form action="{{ route('parkir.destroy', $data->id) }}" method="POST">
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