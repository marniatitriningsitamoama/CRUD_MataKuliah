@extends('matakuliahs.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Add New matakul</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('matakuliahs.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('matakuliahs.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama MataKuliah:</strong>
                    <input type="text" name="nama_matkul" class="form-control" placeholder="nama matakuliah">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>SKS:</strong>
                    <input type="text" name="SKS" class="form-control" placeholder="SKS">
                </div>
            </div>
            <div class="form-group">
                <strong>Baru/Ulang:</strong>
                <select class="col-xs-12 col-sm-12 col-md-12" aria-label=".form-select-lg ">
                    <option selected>Pilih Menu</option>
                    <option value="1">Baru</option>
                    <option value="2">Ulang</option>
                </select>
            </div>
            {{-- <div class="form-group">
                    <strong>Baru/Ulang:</strong>
                    <input type="text" name="baru_ulang" class="form-control" placeholder="pilihans">
                </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nilai:</strong>
                    <input type="text" name="nilai" class="form-control" placeholder="nilai"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>

    </form>
@endsection
