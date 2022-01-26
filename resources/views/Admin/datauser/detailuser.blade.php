@extends('Admin.navbaradmin.utama')

@section('judul','Detail User|Latihan6')

@section('halaman')
    
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h1 class="mt-3 text-dark">Detail Data User</h1>
            <table class="table table-bordered">
                <tbody>
                         <tr>
                            <td width="30%">Nama</td>
                            <td>Awalludin</td>
                        </tr>
                        <tr>
                            <td width="30%">email</td>
                            <td>awalludin24@gmail.com</td>
                        </tr>
                        <tr>
                            <td width="30%">password</td>
                            <td>$2y$10$ruPsSSFM167.Ia.DDYysgeZTD4D3QAJvfUBrBFCiZnBChPLfWeeoO</td>
                        </tr>
                        <tr>
                            <td width="30%">Status</td>
                            <td><label class="btn btn-success">Aktif</label></td>
                        </tr>
                        <tr>
                            <td width="30%">Created_at</td>
                            <td>2022-01-25 01:41:02</td>
                        </tr>
                        <tr>
                            <td width="30%">Update_at</td>
                            <td>2022-01-25 01:41:02</td>
                        </tr>
                </tbody>
            </table>
            <h3 class="mt-3 text-dark">File</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                    </tr>
                </thead>
                <tbody>s   
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="/img/ppbd.jpg" alt="" width="100px" height="100px"></td>
                        <td>PPBD</td>
                        <td>SMK NEGERI 1 PONOROGO</td>
                    </tr>
                </tbody>
            </table>
            <a href="/users" class="btn btn-warning" type="back">Back</a>
        </div>
    </div>
</div>
@endsection