@extends('layouts.lysidebar')

@section('content')
<link rel="stylesheet" href="/css/profil.css">
<!-- START FORM -->
<form action="{{ url('jabatan/'.$hjabatan->id) }}" method='post'>
@csrf
@method('PUT')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="mb-3 row">
      <label for="Nama Jabatan" class="col-sm-2 col-form-label">Nama Jabatan</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" placeholder="nama_jabatan" value="{{$hjabatan->nama_jabatan}}" readonly>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="Masa" class="col-sm-2 col-form-label">Masa</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="masa" name="masa" placeholder="masa" value="{{$hjabatan->masa}}">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="Tahun Awal" class="col-sm-2 col-form-label">Tahun Awal</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tahun_awal" name="tahun_awal" placeholder="tahun_awal" value="{{$hjabatan->tahun_awal}}">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="Tahun Akhir" class="col-sm-2 col-form-label">Tahun Akhir</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tahun_akhir" name="tahun_akhir" placeholder="tahun_akhir" value="{{$hjabatan->tahun_akhir}}">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="Fakultas" class="col-sm-2 col-form-label">Fakultas</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="fakultas" name="fakultas" placeholder="fakultas" value="{{$hjabatan->fakultas}}">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="Prodi" class="col-sm-2 col-form-label">Prodi</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="prodi" name="prodi" placeholder="prodi" value="{{$hjabatan->prodi}}">
      </div>
    </div>
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
      </div>
    </form>
    <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('jabatan/'.$hjabatan->id) }}" method="post">
        @csrf 
        @method('DELETE')
        <div class="col-sm-10">
            <button type="submit" name="submit" class="btn btn-delete">Delete</button>
        </div>
    </form>
    <a class="btn btn-primary mr-2" href="{{ url('pendidikan') }}">
      Cancel
    </a>
</div>
<!-- AKHIR FORM -->
@endsection

