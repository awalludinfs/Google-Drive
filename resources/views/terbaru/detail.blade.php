@extends('layout.main')

@section('judul','Detail Data|Latihan6')

@section('halaman')
<style>
    body {

        background-image: url('/img/bbg.jpg');
    }
</style>
<a href="/terbaru" class="btn btn-info rounded float-end" type="back">back</a>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1 class="mt-3 text-dark">Detail Data</h1>
                <table class="table table-bordered">
                    <tbody> 
                        <tr>
                            <td width="35%" class="bg-info">No</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td width="35%" class="bg-info">Gambar</td>
                            <td><img src="/img/ppbd.jpg" alt="" width="200px" width="200px"></td>
                        </tr>
                        <tr>
                            <td width="35%" class="bg-info">Judul</td>
                            <td>Web Desain</td>
                        </tr>
                        <tr>
                            <td width="35%" class="bg-info">isi</td>
                            <td>Desain Web Adalah Suatu Web</td>
                        </tr>
                        <tr>
                            <td width="35%" class="bg-info">status</td>
                            <td><button class="btn btn-success">Baru</button></td>
                        </tr>
                        <tr>
                            <td width="35%" class="bg-info">Create_at</td>
                            <td>2022-01-25 04:25:36</td>
                        </tr>
                        <tr>
                            <td width="35%" class="bg-info">Update_at</td>
                            <td>2022-01-25 04:25:36</td>
                        </tr>
                    </tbody>
                </div>
        </div>
    </div>
@endsection