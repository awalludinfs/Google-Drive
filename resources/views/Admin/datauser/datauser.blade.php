@extends('Admin.navbaradmin.utama')

@section('judul','Data User (Admin)|Latihan6')

@section('halaman')
<style>
    body {

        background-image: url('/img/bbg.jpg');
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h2 class="mt-2 text-dark">Data User</h2>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status')}}
                </div> 
            @endif
            <hr />
            <p class="fs-5">User</p>
            <table class="table table-bordered border-light table-dark">
                <thead>
                    <th scope="col">No</th>
                    <th scope="col">Status</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Status</th>
                    <th scope="col">Opsi</th>
                </thead>
                <tbody class="table-light">
                    @foreach ($user as $user)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>
                            @if( $user->status == 1)
                            <a href="{{ url ('datauser/status/'.$user->id )}}" class="btn btn-sm btn-danger">Non-Aktifkan</a>
                            @else
                            <a href="{{ url ('datauser/status/'.$user->id )}}" class="btn btn-sm btn-success">Aktifkan</a>    
                            @endif
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td><label class="btn {{ ($user->status == 1) ? 'btn-success' : 'btn-danger'}}">{{ ($user->status == 1) ? 'Aktif' : 'Tidak aktif' }}</label></td>
                        <td>
                            <a href="/detailusers" class="btn btn-info">Detail</a>
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