@extends('layouts.lysidebar')

@section('content')
<link rel="stylesheet" href="/css/jabatan.css">
<title>Pengembangan Diri</title>
<body>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mt-4 mb-4">Pengembangan Diri</h2>
            <div>
                <a class="btn btn-primary mr-2" href="{{ url('pengembangandiri/create') }}">
                    Tambah
                </a>
                
                <!-- <button class="btn btn-secondary">Tahun Ajaran</button> -->
            </div>
        </div>
        <table id="JabatanTable" class="table">
            <thead>
                <tr>
                    <th scope="col">Kegiatan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Durasi</th>
                    <th scope="col">Angka Kredit (Tim Penilai)</th>
                    <th scope="col">Angka Kredit (Tim instansi)</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">filename</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pdata as $item) 
                <tr>
                    <td>{{$item->Kegiatan}}</td>
                    <td>{{$item->tgl}}</td>
                    <td>{{$item->durasi}}</td>
                    <td>{{$item->ak_penilaian}}</td>
                    <td>{{$item->ak_instansi}}</td>
                    <td>{{$item->keterangan}}</td>
                    <td>                    
                        <a class="btn btn-primary mr-2" href="{{ url('berkas_pengembangan/'.$item->filename) }}">
                        {{$item->filename}}
                        </a>
                    </td>
                    <td>
                    <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('pengembangandiri/'.$item->id) }}" method="post">
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
