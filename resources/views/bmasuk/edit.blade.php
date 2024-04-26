@extends('admin.layout')
@section('content')
<form action="/updatebmasuk/{{$bmasuk->id}}" method="post" enctype="multipart/form-data">
@method('put')
  @csrf
  <div class="mb-3"> 
    <label for="tglfktr" class="form-label">Tanggal Faktur</label>
    <input type="date" name="tglfktr" class="form-control" id="tglfktr" value="{{$bmasuk->tanggalfaktur}}">
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
    <input type="number" name="hargabeli" class="form-control" id="hargabeli" value="{{$bmasuk->hargabeli}}">
  </div>
  <div class="mb-3" >
    <label for="jumlahbm" class="form-label">Jumlah Barang Masuk</label>
    <input type="number" name="jumlahbm" class="form-control" id="jumlahbm" value="{{$bmasuk->jumlah}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
