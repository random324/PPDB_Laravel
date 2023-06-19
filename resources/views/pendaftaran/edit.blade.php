@extends('layouts.main')
@section('container')

    @if ($errors->any())
        <div class="pt-3">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <form action='{{ url('pendaftaran/' . $data->nim) }}' method='post' enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    {{ $data->nim }}
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                <div class="col-sm-10">
                    {{ $data->nisn }}
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="{{ $data->nama }}" id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis kelamin</label>
                <div class="col-sm-10" name="jenis_kelamin" value="{{ $data->jenis_kelamin }}" id="jenis_kelamin">
                    <input type="radio" value="Laki-Laki" checked name="jenis_kelamin">Laki-Laki<br>
                    <input type="radio" value="perempuan" name="jenis_kelamin">Perempuan<br>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <select class="col-sm-10" name="jurusan" value="{{ $data->jurusan }}" id="jurusan">
                    <option value="RPL">RPL</option>
                    <option value="TKJ">TKJ</option>
                    <option value="MM">MM</option>
                    <option value="BC">BC</option>
                </select>
            </div>
            @if ($data->gambar)
                <div class="mb-3">
                    <img src="{{ asset('foto/') . '/' . $data->gambar }}" width="70px" height="70px" alt="gambar">
                </div>
            @endif
            <div class="mb-3 row">
                <label for="gambar" class="col-sm-2 col-form-label">Foto terbaru</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name='gambar' value="{{ $data->gambar }}" id="gambar">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                </div>
            </div>
    </form>
    </div>
@endsection
