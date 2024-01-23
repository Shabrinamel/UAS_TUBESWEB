@extends('layouts.lysidebar')

@section('content')
<!-- START FORM -->
<link rel="stylesheet" href="/css/profil.css">
<form action="{{ url('jabatan') }}" method='post'>
@csrf
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="mb-3 row">
      <label for="nama_jabatan" class="col-sm-2 col-form-label">Nama Jabatan</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" placeholder="nama_jabatan" value="">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="masa" class="col-sm-2 col-form-label">Masa</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="masa" name="masa" placeholder="masa" value="">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="tahun_awal" class="col-sm-2 col-form-label">Tahun Awal</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tahun_awal" name="tahun_awal" placeholder="tahun_awal" value="">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="tahun_akhir" class="col-sm-2 col-form-label">Tahun Akhir</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tahun_akhir" name="tahun_akhir" placeholder="tahun_akhir" value="">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="inputBidangMinat" class="col-sm-2 col-form-label">Fakultas</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="fakultas" name="fakultas" placeholder="fakultas" value="">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="inputTGLL" class="col-sm-2 col-form-label">Prodi</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="prodi" name="prodi" placeholder="prodi" value="">
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

