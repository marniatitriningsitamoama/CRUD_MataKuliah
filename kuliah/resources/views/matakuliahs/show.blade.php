@extends('matakuliahs.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2> Show Mata Kuliah</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('matakuliahs.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama MataKuliah:</strong>
                {{ $matakuliah->nama_matkul }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>SKS:</strong>
                    {{ $matakuliah->SKS }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Baru/Ulang:</strong>
                    {{ $matakuliah->baru_ulang }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nilai:</strong>
                    {{ $matakuliah->nilai }}
                </div>
            </div>
        </div>
    @endsection
