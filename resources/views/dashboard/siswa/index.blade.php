@extends('dashboard.layouts.main')

@section('container')
    @if (Session::has('success'))
        <div class="pt-3">
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        </div>
    @endif
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">welcome: {{ auth()->user()->username }}</h1>
    </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data siswa</h1>
    </div>


    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">nisn</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ asset('foto/' . $item->gambar) }}" width="70px" height="70px"
                                alt="gambar"></td>
                        <td>{{ $item->nisn }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jurusan }}</td>
                        <td>
                            <a href="{{ url('pendaftaran/' . $item->nim . '/edit') }}" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form onsubmit="return confirm('yakin menghapus data?')" class='d-inline'
                                action="{{ url('pendaftaran/' . $item->nim) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="badge bg-danger"><span
                                        data-feather="x-circle"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
