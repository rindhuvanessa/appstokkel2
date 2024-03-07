@extends('admin.layout')
@section('content')
<form action="/updatepelanggan/{{$pelanggan->id}}" method="post" enctype="multipart/form-data">
@method('put')
  @csrf
  <div class="mb-3"> 
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama" value="{{$suplayer->nama}}">
  </div>
  <div class="mb-3" >
    <label for="nomortelepon" class="form-label">Nomor Telepon</label>
    <input type="text" name="nomortelepon" class="form-control" id="nomortelepon" value="{{$suplayer->nomortelepon}}">
  </div>
  <div class="mb-3" >
    <label for="alamat" class="form-label">Alamat</label>
    <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10">value="{{$suplayer->alamat}}"</textarea>
  </div>
  <div class="mb-3"> 
    <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
    <input type="text" name="jeniskelamin" class="form-control" id="jeniskelamin" value="{{$suplayer->jeniskelamin}}">
  </div>
  <div class="mb-3"> 
    <label for="kota" class="form-label">Kota</label>
    <input type="text" name="kota" class="form-control" id="kota" value="{{$suplayer->kota}}">
  </div>
  <div class="mb-3"> 
    <label for="provinsi" class="form-label">Provinsi</label>
    <input type="text" name="provinsi" class="form-control" id="provinsi" value="{{$suplayer->provinsi}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
