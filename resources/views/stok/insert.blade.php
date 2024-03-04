@extends('admin.layout')
@section('content')
<form action="/savestok" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mb-3"> 
    <label for="kode" class="form-label">Kode</label>
    <input type="text" name="kode" class="form-control" id="kode" aria-describedby="masukan nama kode">
  </div>
  <div class="mb-3" >
    <label for="nama" class="form-label">Nama Barang</label>
    <input type="text" name="namap" class="form-control" id="nama" aria-describedby="masukan nama barang">
  </div>
  <div class="mb-3"> 
    <label for="hargalist" class="form-label">Harga</label>
    <input type="text" name="hargalist" class="form-control" id="hargalist" aria-describedby="masukan harga">
  </div>
  <div class="mb-3"> 
    <label for="stok" class="form-label">Stok</label>
    <input type="text" name="stok" class="form-control" id="stok" aria-describedby="masukan stok">
  </div>
  <div class="mb-3"> 
    <label for="suplayer_id" class="form-label">Suplayer</label>
    <select id="suplayer_id" name="suplayer_id" class="form-control">
        @foreach ($suplayer as $suplayer)
            <option value="{{ $suplayer->id }}">{{ $suplayer->suplayer }}</option>
        @endforeach
    </select>
  </div>
  <div class="mb-3"> 
    <label for="cabang" class="form-label">Cabang</label>
    <input type="text" name="cabang" class="form-control" id="cabang" aria-describedby="masukan cabang">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
