@extends('layouts.lysidebar')

@section('content')
<!-- START FORM -->
<link rel="stylesheet" href="/css/profil.css">
<form action="{{ url('pendidikan') }}" method='post'>
@csrf
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="mb-3 row">
      <label for="jenjang" class="col-sm-2 col-form-label">jenjang</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="jenjang" name="jenjang" placeholder="jenjang" value="">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="prodi" class="col-sm-2 col-form-label">Program Studi</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="prodi" name="prodi" placeholder="prodi" value="">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="universitas" class="col-sm-2 col-form-label">Universitas</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="universitas" name="universitas" placeholder="universitas" value="">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="tawalp" class="col-sm-2 col-form-label">Tahun Awal Pneidikan</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tawalp" name="tawalp" placeholder="tawalp" value="">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="takhirp" class="col-sm-2 col-form-label">Tahun Akhir Pendidikan</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="takhirp" name="takhirp" placeholder="takhirp" value="">
      </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
    </form>
    <a class="btn btn-primary mr-2" href="{{ url('pendidikan') }}">
      Cancel
    </a>
</div>
<!-- AKHIR FORM -->
@endsection

