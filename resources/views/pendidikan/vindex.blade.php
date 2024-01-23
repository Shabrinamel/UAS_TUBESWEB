@extends('layouts.lysidebar')

@section('content')
<link rel="stylesheet" href="/css/jabatan.css">
<title>Pendidikan</title>
<body>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mt-4 mb-4">Pendidikan</h2>
            <div>
                <a class="btn btn-primary mr-2" href="{{ url('pendidikan/create') }}">
                    Tambah
                </a>
                
                <!-- <button class="btn btn-secondary">Tahun Ajaran</button> -->
            </div>
        </div>
        <table id="JabatanTable" class="table">
            <thead>
                <tr>
                    <th scope="col">Jenjang</th>
                    <th scope="col">Program Studi</th>
                    <th scope="col">Universitas</th>
                    <th scope="col">Tahun Pendidikan Awal</th>
                    <th scope="col">Tahun Pendidikan Akhir</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pdata as $item) 
                <tr>
                    <td>{{$item->jenjang}}</td>
                    <td>{{$item->prodi}}</td>
                    <td>{{$item->universitas}}</td>
                    <td>{{$item->tawalp}}</td>
                    <td>{{$item->takhirp}}</td>
                    <td>
                        <a class="btn btn-primary mr-2" href="{{ url('pendidikan/'.$item->id.'/edit') }}">
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
