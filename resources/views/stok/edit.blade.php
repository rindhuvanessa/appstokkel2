@extends('admin.layout')
@section('content')
<form action="/updatestok/{{$stok->id}}" method="post" enctype="multipart/form-data">
@method('put')
  @csrf
  <div class="mb-3"> 
    <label for="kode" class="form-label">Kode</label>
    <input type="text" name="kode" class="form-control" id="kode" value="{{$stok->kode}}">
  </div>
  <div class="mb-3" >
    <label for="nama" class="form-label">Nama Barang</label>
    <input type="text" name="nama" class="form-control" id="nama" value="{{$stok->nama}}">
  </div>
  <div class="mb-3"> 
    <label for="hargalist" class="form-label">Harga</label>
    <input type="number" name="hargalist" class="form-control" id="hargalist" value="{{$stok->hargalist}}">
  </div>
  <div class="mb-3"> 
    <label for="stok" class="form-label">Stok awal</label>
    <input type="text" name="stok" class="form-control" id="stok" value="{{$stok->stok}}">
  </div>
  <div class="mb-3"> 
    <label for="cabang" class="form-label">Cabang</label>
    <input type="text" name="cabang" class="form-control" id="cabang" value="{{$stok->cabang}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
