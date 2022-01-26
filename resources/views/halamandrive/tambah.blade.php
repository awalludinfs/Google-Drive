@extends('layout.main')

@section('judul','Tambah data|Latihan5');

@section('halaman')
<style>
    body {

        background-image: url('/img/bbg.jpg');
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="mt-2 text-dark">Upload file</h2>
            <form action="{{ route('tambah') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="gambar" class="form-label text-dark">File</label>
                    <input type="file" name="gambar" class="form-control" id="gambar">
                </div>
                <div class="mb-3">
                    <label for="judul" class="form-label text-dark">Judul</label>
                    <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan Judul Anda" required> 
                </div>
                <div class="mb-3">
                    <label for="isi" class="form-label text-dark">isi</label>
                    <input type="text" name="isi" class="form-control" id="isi" placeholder="Masukkan Isi" required>
                </div>
                <div class="d-grip gap-2 d-md-block">
                    <button class="btn btn-info btn-lg" type="sumbit">Upload</button>
                    <a href="/drivesaya" class="btn btn-warning btn-lg" type="back">Back</a>
                </div>
                <input type="hidden" name="email" value="{{Session::get('email')}}">
            </form>
        </div>
    </div>
</div> 
@endsection