@extends('admin.layout')
@section('content')
<form action="/savebkeluar" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mb-3"> 
    <label for="tanggalfaktur" class="form-label">Tanggal Faktur</label>
    <input type="date" name="tanggalfaktur" class="form-control" id="namasuplayer" aria-describedby="masukan tanggal faktur">
  </div>
  <div class="mb-3" >
    <label for="stok_id" class="form-label">Nama Barang</label>
    <select id="jbt_namabarang" name="jbt_namabarang" class="form-control">
        @foreach ($jbt as $jabatan)
    
        @endforeach
  </div>
  <div class="mb-3" >
    <label for="jumlah" class="form-label">Jumlah</label>
    <input number="jumlah" class="form-control" id="jumlah" cols="30" rows="10" aria-describedby="tuliskan jumlah"></textarea>
  </div>
  <div class="mb-3" >
    <label for="subtotal" class="form-label">Subtotal</label>
    <input type="text" name="subtotal" class="form-control" id="subtotal" aria-describedby="masukan subtotal">
  </div>
  <div class="mb-3" >
    <label for="user_id" class="form-label">User_id</label>
    <input type="text" name="user_id" class="form-control" id="user_id" aria-describedby="masukan user">
        @foreach
        @endforeach
  </div>
  <div class="mb-3" >
    <label for="tanggalbuat" class="form-label">Tanggal Buat</label>
    <input type="date" name="tanggalbuat" class="form-control" id="tanggalbuat" aria-describedby="masukan tanggal">
  </div>
  <div class="mb-3" >
    <label for="cabang" class="form-label">Cabang</label>
    <input type="text" name="cabang" class="form-control" id="cabang" aria-describedby="masukan nama cabang">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
