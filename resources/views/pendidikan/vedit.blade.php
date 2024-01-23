@extends('layouts.lysidebar')

@section('content')
<link rel="stylesheet" href="/css/profil.css">
<!-- START FORM -->
<form action="{{ url('pendidikan/'.$hpendidikan->id) }}" method='post'>
@csrf
@method('PUT')
<div class="my-3 p-3 bg-body rounded shadow-sm">
  <div class="mb-3 row">
      <label for="jenjang" class="col-sm-2 col-form-label">jenjang</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="jenjang" name="jenjang" placeholder="jenjang" value="{{$hpendidikan->jenjang}}">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="prodi" class="col-sm-2 col-form-label">Program Studi</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="prodi" name="prodi" placeholder="prodi" value="{{$hpendidikan->prodi}}">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="universitas" class="col-sm-2 col-form-label">Universitas</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="universitas" name="universitas" placeholder="universitas" value="{{$hpendidikan->universitas}}">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="tawalp" class="col-sm-2 col-form-label">Tahun Awal Pneidikan</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tawalp" name="tawalp" placeholder="tawalp" value="{{$hpendidikan->tawalp}}">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="takhirp" class="col-sm-2 col-form-label">Tahun Akhir Pendidikan</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="takhirp" name="takhirp" placeholder="takhirp" value="{{$hpendidikan->takhirp}}">
      </div>
    </div>
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
      </div>
    </form>
  <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('pendidikan/'.$hpendidikan->id) }}" method="post">
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

