@extends('layout.main')

@section('judul','Drive Saya|Latihan5')

@section('halaman')
<style>
    body {

        background-image: url('/img/bbg.jpg');
    }
</style>
{{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">welcome to dashboard page , {{ auth()->user()->name }}</h1>
</div> --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h2 class="mt-2 text-dark">Drive Saya</h2>
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
                        < <td class="text-center">
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
