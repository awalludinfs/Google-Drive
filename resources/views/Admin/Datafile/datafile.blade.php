@extends('Admin.navbaradmin.utama')

@section('judul','Data file (Admin)|Latihan6')

@section('halaman')
<style>
    body {

        background-image: url('/img/bbg.jpg');
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h2 class="mt-2 text-dark">Data file User</h2>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status')}}
                </div> 
            @endif
            <hr />
            <p class="fs-5">File</p>
            <table class="table table-bordered border-light table-dark">
                <thead>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Isi</th>
                    <th scope="col">Status</th>
                    <th scope="col">Email</th>
                    <th scope="col">Opsi</th>
                </thead>
                <tbody class="table-light">
                    @foreach ($Drivesayas as $Drivesaya)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td><img src="data:image/jpeg;base64,<?=base64_encode($Drivesaya->gambar)?>" width="200"
                                height="100"></td>
                        <td>{{ $Drivesaya->judul }}</td>
                        <td>{{ $Drivesaya->isi }}</td>
                        <td><button class="btn btn-success">{{ $Drivesaya->status }}</button></td>
                        <td>{{ $Drivesaya->email }}</td>
                         <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="#" method="POST">
                                <a href="#" class="btn btn-sm btn-primary">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection