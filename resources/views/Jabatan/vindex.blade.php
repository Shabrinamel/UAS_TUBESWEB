@extends('layouts.lysidebar')

@section('content')
<link rel="stylesheet" href="/css/jabatan.css">
<title>Jabatan</title>
<body>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mt-4 mb-4">Jabatan</h2>
            <div>
                <a class="btn btn-primary mr-2" href="{{ url('jabatan/create') }}">
                    Tambah
                </a>
                <!-- <button class="btn btn-secondary">Tahun Ajaran</button> -->
            </div>
        </div>
        <table id="JabatanTable" class="table">
            <thead>
                <tr>
                    <th scope="col">Nama Jabatan</th>
                    <th scope="col">Masa Jabatan</th>
                    <th scope="col">Tahun awal</th>
                    <th scope="col">Tahun Akhir</th>
                    <th scope="col">Fakultas</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pdata as $item) 
                <tr>
                    <td>{{$item->nama_jabatan}}</td>
                    <td>{{$item->masa}}</td>
                    <td>{{$item->tahun_awal}}</td>
                    <td>{{$item->tahun_akhir}}</td>
                    <td>{{$item->fakultas}}</td>
                    <td>{{$item->prodi}}</td>
                    <td>
                        <a class="btn btn-primary mr-2" href="{{ url('jabatan/'.$item->id.'/edit') }}">
                            edit
                        </a>
                    </td>
                
                @endforeach
            </tbody>
        </table>
        {{ $pdata ->links() }}
    </div>
</body>
@endsection
