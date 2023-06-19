@extends('layouts.main')
@section('container')
    @if (Session::has('success'))
        <div class="pt-3">
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        </div>
    @endif
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
    <form action='{{ url('pendaftaran') }}' method='post' enctype="multipart/form-data">
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='nim' value="{{ old('nim') }}" id="nim">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='nisn' value="{{ old('nisn') }}" id="nisn">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="{{ old('nama') }}" id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis kelamin</label>
                <div class="col-sm-10" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" id="jenis_kelamin">
                    <input type="radio" value="Laki-Laki" checked name="jenis_kelamin">Laki-Laki<br>
                    <input type="radio" value="perempuan" name="jenis_kelamin">Perempuan<br>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <select class="col-sm-10" name="jurusan" value="{{ old('jurusan') }}" id="jurusan">
                    <option value="RPL">RPL</option>
                    <option value="TKJ">TKJ</option>
                    <option value="MM">MM</option>
                    <option value="BC">BC</option>
                </select>
            </div>
            <div class="mb-3 row">
                <label for="gambar" class="col-sm-2 col-form-label">Foto terbaru</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name='gambar' value="{{ old('gambar') }}" id="gambar">
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
