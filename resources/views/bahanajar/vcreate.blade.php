@extends('layouts.lysidebar')

@section('content')
<!-- START FORM -->
<link rel="stylesheet" href="/css/profil.css">
<form action="{{ url('bahanajar') }}" method='post' enctype="multipart/form-data">
@csrf
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="mb-3 row">
      <label for="Kegiatan" class="col-sm-2 col-form-label">Kegiatan</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="Kegiatan" name="Kegiatan" placeholder="Kegiatan" value="">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="tgl" name="tgl" placeholder="tgl" value="">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="ak_penilaian" class="col-sm-2 col-form-label">Angka Kredit Tim Penilai</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="ak_penilaian" name="ak_penilaian" placeholder="ak_penilaian" value="">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="ak_instansi" class="col-sm-2 col-form-label">Angka Kredit Instansi</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="ak_instansi" name="ak_instansi" placeholder="ak_instansi" value="">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="keterangan" value="">
      </div>
    </div>
    <!-- <div class="mb-3 row">
      <label for="filename" class="col-sm-2 col-form-label">Filename</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="filename" name="filename" placeholder="filename" value="">
      </div>
    </div> -->
    <div class="mb-3 row">
      <label for="fileinput" class="col-sm-2 col-form-label">File Input</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" id="fileinput" name="fileinput" placeholder="fileinput" value="">
      </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
    </form>
</div>
<!-- AKHIR FORM -->
@endsection

