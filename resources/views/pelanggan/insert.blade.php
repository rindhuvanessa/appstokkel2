@extends('admin.layout')
@section('content')
<form action="/savepelanggan" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mb-3"> 
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama" aria-describedby="masukan nama pelanggan">
  </div>
  <div class="mb-3" >
    <label for="nomortelepon" class="form-label">Nomor Telepon</label>
    <input type="text" name="nomortelepon" class="form-control" id="nomortelepon" aria-describedby="masukan nama barang">
  </div>
  <div class="mb-3" >
    <label for="alamat" class="form-label">Alamat</label>
    <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10" aria-describedby="masukan alamat"></textarea>
  </div>
  <div> 
    <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
    <select type="text" name="jeniskelamin" class="form-control" id="jeniskelamin" aria-describedby="masukan jenis kelamin">
      <option value="Laki-Laki">Laki-Laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
  </div>
  <div class="mb-3"> 
    <label for="kota" class="form-label">Kota</label>
    <input type="text" name="kota" class="form-control" id="kota" aria-describedby="masukan nama kota">
  </div>
  <div class="mb-3"> 
    <label for="provinsi" class="form-label">Provinsi</label>
    <input type="text" name="provinsi" class="form-control" id="provinsi" aria-describedby="masukan nama provinsi">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
