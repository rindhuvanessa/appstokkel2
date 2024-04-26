@extends('admin.layout')
@section('content')
<form action="/savebmasuk" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mb-3"> 
    <label for="tglfktr" class="form-label">Tanggal Faktur</label>
    <input type="date" name="tglfktr" class="form-control" id="tglfktr" aria-describedby="masukan nama tanggal">
  </div>
  <div class="mb-3"> 
    <label for="suplayer_id" class="form-label">Suplayer</label>
    <select name="suplayer_id" class="form-control" id="suplayer_id">
        @foreach ($suplayer as $spy)
            <option value="{{ $spy->id }}">{{$spy->namasupplier}}</option>
        @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="stok_id" class="form-label">Nama barang</label>
    <select name="stok_id" class="form-control" id="stok_id">
        @foreach ($namabarang as $nb)
            <option value="{{ $nb->id }}">{{$nb->namab}}</option>
        @endforeach
    </select>
  </div>
  <div class="mb-3" >
    <label for="hargabeli" class="form-label">Harga Beli</label>
    <input type="number" name="hargabeli" class="form-control" id="hargabeli" aria-describedby="masukan harga beli">
  </div>
  <div class="mb-3" >
    <label for="jumlahbm" class="form-label">Jumlah Barang Masuk</label>
    <input type="number" name="jumlahbm" class="form-control" id="jumlahbm" aria-describedby="masukan jumlah barang masuk">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
