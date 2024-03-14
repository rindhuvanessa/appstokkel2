@extends('admin.layout')
@section('content')
<form action="/savebmasuk" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mb-3"> 
    <label for="suplayer_id" class="form-label">Suplayer</label>
    <select type="date" name="suplayer_id" class="form-control" id="suplayer_id">
        @foreach ($suplayer as $spy)
            <option value="{{ $spy->id }}">ggg</option>
            <option value="{{ $spy->id }}">{{$spy->suplayer}}</option>
        @endforeach
    </select>
  </div>
  <div class="mb-3"> 
    <label for="tanggalfaktur" class="form-label">Tanggal Faktur</label>
    <input name="tanggalfaktur" class="form-control" id="tanggalfaktur" aria-describedby="masukan nama tanggal">
  </div>
  <div class="mb-3">
    <label for="namabarang" class="form-label">Nama barang</label>
    <input type="text" name="namabarang" class="form-control" id="namabarang" aria-describedby="masukan nama barang">
  </div>
  <div class="mb-3" >
    <label for="hargabeli" class="form-label">Harga Beli</label>
    <input type="text" name="hargabeli" class="form-control" id="hargabeli" aria-describedby="masukan harga beli">
  </div>
  <div class="mb-3" >
    <label for="jumlah" class="form-label">Jumlah Masuk</label>
    <input type="text" name="jumlah" class="form-control" id="jumlah" aria-describedby="masukan jumlah masuk">
  </div>
  <button type="submit" class="btn btn-primary">save barang</button>
</form>
@endsection
