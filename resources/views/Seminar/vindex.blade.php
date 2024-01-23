@extends('layouts.lysidebar')

@section('content')
<link rel="stylesheet" href="/css/jabatan.css">
<title>Seminar</title>
<body>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mt-4 mb-4">Seminar</h2>
            <div>
                <a class="btn btn-primary mr-2" href="{{ url('seminar/create') }}">
                    Tambah
                </a>
                
                <!-- <button class="btn btn-secondary">Tahun Ajaran</button> -->
            </div>
        </div>
        <table id="seminarTable" class="table">
            <thead>
                <tr>
                    <th scope="col">Nama Seminar</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Angka Kredit</th>
                    <th scope="col">satuan_hasil</th>
                    <th scope="col">Jumlah Angka Kredit</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">filename</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pdata as $item) 
                <tr>
                    <td>{{$item->nama_seminar}}</td>
                    <td>{{$item->tgl}}</td>
                    <td>{{$item->angka_kredit}}</td>
                    <td>{{$item->satuan_hasil}} SKS</td>
                    <td>{{$item->jumlah_ak}}</td>
                    <td>{{$item->keterangan}}</td>
                    <td>
                    <!-- <a class="btn btn-primary mr-2" href="{{ url('seminar/'.$item->id.'/downloadDocument') }}">
                        {{$item->filename}}
                    </a> -->
                    <a class="btn btn-primary mr-2" href="{{ url('berkas_seminar/'.$item->filename) }}">
                        {{$item->filename}}
                    </a>
                    </td>

                    <td>
                    <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('seminar/'.$item->id) }}" method="post">
                        @csrf 
                        @method('DELETE')
                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-delete">Delete</button>
                        </div>
                    </form>
                    </td>
                
                @endforeach
            </tbody>
        </table>
        {{ $pdata ->links() }}
    </div>
</body>
@endsection
