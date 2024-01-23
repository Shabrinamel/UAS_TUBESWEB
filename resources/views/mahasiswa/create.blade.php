@extends('layouts.template')

@section('konten')
<!-- START FORM -->
<form action='{{ url('mahasiswa') }}' method='post'>
@csrf
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="mb-3 row">
      <label for="nama" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{ $email }}" readonly>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="">
      </div>
    </div>
    <div class="fmb-3 row>
      <label for="nip" class="col-sm-2 col-form-label">NIP</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" value="">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="inputUnitKerja" class="col-sm-2 col-form-label">Unit Kerja</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="unit_kerja" name="unit_kerja" placeholder="Unit Kerja" value="">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="inputBidangMinat" class="col-sm-2 col-form-label">Bidang Minat</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="bidang_minat" name="bidang_minat" placeholder="Bidang Minat" value="">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="inputTGLL" class="col-sm-2 col-form-label">Tanggal Lahir</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="tgll" name="tgll" placeholder="TGLL" >
      </div>
    </div>
    <div class="mb-3 row">
      <label for="inputJK" class="col-sm-2 col-form-label">Jenis Kelamin</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="jk" name="jk" placeholder="Jenis Kelamin" value="">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="inputMGL" class="col-sm-2 col-form-label">Masa Golongan Lama</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="mgl" name="mgl" placeholder="Masa Golongan Lama" value="">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="inputMGB" class="col-sm-2 col-form-label">Masa Golongan Baru</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="mgb" name="mgb" placeholder="Masa Golongan Baru" value="">
      </div>
    <!-- <div class="form-group row"> -->
    <!-- <div class="col-sm-10 offset-sm-2"> -->
        <!-- <button type="button" class="btn submit" onclick="">Simpan</button> -->
        <!-- <input type="submit" value="Submit"> -->
        <!-- <a href="/store" class="button">Simpan</a> -->
    <!-- </div> -->
    <!-- </div> -->

    <!-- <div class="mb-3 row">
        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name='nim' id="nim">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='nama' id="nama">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='jurusan' id="jurusan">
        </div>
    </div> -->
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
    </form>
</div>
<!-- AKHIR FORM -->
@endsection

