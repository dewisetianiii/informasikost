@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data Falisitas Parkir</div>
                <div class="card-body">
    <div class="form-group">
        <label for="">Falisitas Parkir</label>
        <input class="form-control" value="{{ $parkir->fasilitas_parkir }}" type="text" name="fasilitas_parkir" disabled>
    </div>
    <div class="form-group">
        <a href="{{ url('/parkir') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </div>
            </div>
                </div>
                    </div>
                        </div>
                            @endsection