@extends('layouts.lysidebar')

@section('content')
<!-- START FORM -->
<link rel="stylesheet" href="/css/profil.css">
<form action="{{ url('seminar') }}" method='post' enctype="multipart/form-data">
@csrf
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="mb-3 row">
      <label for="nama_seminar" class="col-sm-2 col-form-label">Nama Seminar</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama_seminar" name="nama_seminar" placeholder="nama_seminar" value="">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="tgl" name="tgl" placeholder="tgl" value="">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="angka_kredit" class="col-sm-2 col-form-label">Angka Kredit</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="angka_kredit" name="angka_kredit" placeholder="angka_kredit" value="">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="satuan_hasil" class="col-sm-2 col-form-label">Satuan Hasil</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="satuan_hasil" name="satuan_hasil" placeholder="satuan_hasil" value="">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="jumlah_ak" class="col-sm-2 col-form-label">Jumlah Angka Kredit</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="jumlah_ak" name="jumlah_ak" placeholder="jumlah_ak" value="">
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

