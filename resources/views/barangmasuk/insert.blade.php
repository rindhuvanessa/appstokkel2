@extends('admin.layout')
@section('content')
<form action="/savebmasuk" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mb-3"> 
    <label for="tanggalfaktur" class="form-label">tanggal faktur</label>
    <input type="date" name="tanggal faktur" class="form-control" id="tanggal faktur" aria-describedby="masukan nama tanggal">
  </div>
  <div class="mb-3" >
    <label for="namabarang" class="form-label">Nama barang</label>
    <input type="text" name="namabarang" class="form-control" id="namabarang" aria-describedby="masukan nama barang">
  </div>
  <div class="mb-3" >
    <label for="hargabeli" class="form-label">harga beli</label>
    <input type="text" name="hargabeli" class="form-control" id="hargabeli" aria-describedby="masukan harga beli">
  </div>
  <div class="mb-3" >
    <label for="jumlah" class="form-label"> jumlah</label>
    <input type="text" name="jumlah" class="form-control" id="jumlah" aria-describedby="masukan jumlah">
  </div>
  <button type="submit" class="btn btn-primary">save barang</button>
</form>
@endsection
