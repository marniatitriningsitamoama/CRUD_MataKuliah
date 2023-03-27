@extends('matakuliahs.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Mata Kuliah</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('matakuliahs.create') }}"> Tambah Mata Kuliah</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama MataKuliah</th>
            <th>SKS</th>
            <th>Baru/Ulang</th>
            <th>Nilai</th>
            <th width="280px">Action</th>
        </tr>
        @php($nomor = 1)
        @foreach ($matakuliahs as $matakuliah)
            <tr>
                <td>{{ $nomor++ }}</td>
                <td>{{ $matakuliah->nama_matkul }}</td>
                <td>{{ $matakuliah->SKS }}</td>
                <td>{{ $matakuliah->baru_ulang }}</td>
                <td>{{ $matakuliah->nilai }}</td>
                <td>
                    <form action="{{ route('matakuliahs.destroy', $matakuliah->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('matakuliahs.show', $matakuliah->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('matakuliahs.edit', $matakuliah->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
    {{-- <div class="row text-center">
        {!! $matakuliah->links() !!}
    </div> --}}
@endsection
