@extends('layouts.lysidebar')

@section('content')
<link rel="stylesheet" href="/css/profil.css">
<!-- START FORM -->
<form action="{{ url('profil/'.$hprofil->email) }}" method='post'>
@csrf
@method('PUT')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="mb-3 row">
      <label for="nama" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$hprofil->email}}" readonly>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{$hprofil->nama}}">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="nip" class="col-sm-2 col-form-label">NIP</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" value="{{$hprofil->nip}}">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="inputUnitKerja" class="col-sm-2 col-form-label">Unit Kerja</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="unit_kerja" name="unit_kerja" placeholder="Unit Kerja" value="{{$hprofil->unit_kerja}}">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="inputBidangMinat" class="col-sm-2 col-form-label">Bidang Minat</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="bidang_minat" name="bidang_minat" placeholder="Bidang Minat" value="{{$hprofil->bidang_minat}}">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="inputTGLL" class="col-sm-2 col-form-label">Tanggal Lahir</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="tgll" name="tgll" placeholder="TGLL" value="{{$hprofil->tgll}}">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="inputJK" class="col-sm-2 col-form-label">Jenis Kelamin</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="jk" name="jk" placeholder="Jenis Kelamin" value="{{$hprofil->jk}}">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="inputMGL" class="col-sm-2 col-form-label">Masa Golongan Lama</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="mgl" name="mgl" placeholder="Masa Golongan Lama" value="{{$hprofil->mgl}}">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="inputMGB" class="col-sm-2 col-form-label">Masa Golongan Baru</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="mgb" name="mgb" placeholder="Masa Golongan Baru" value="{{$hprofil->mgl}}">
      </div>
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
      </div>
    </form>
    <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('profil/'.$hprofil->email) }}" method="post">
        @csrf 
        @method('DELETE')
        <button type="submit" name="submit" class="btn btn-delete">Delete</button>
    </form>
</div>
<!-- AKHIR FORM -->
@endsection

