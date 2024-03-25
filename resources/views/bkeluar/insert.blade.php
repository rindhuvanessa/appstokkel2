@extends('admin.layout')
@section('content')
<form action="/savebkeluar" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mb-3"> 
    <label for="tanggalfaktur" class="form-label">Tanggal Faktur</label>
    <input type="date" name="tanggalfaktur" class="form-control" id="tanggalfaktur" aria-describedby="masukan tanggal faktur">
  </div>
  <div class="mb-3" >
    <label for="stok_id" class="form-label">Nama Barang</label>
    <select id="stok_id" name="stok_id" class="form-control">
        @foreach ($namabarang as $nb)
          <option value="{{ $nb->id }}">{{$nb->namab}}</option>
        @endforeach
        </select>
  </div>
  <div class="mb-3" >
    <label for="jumlah" class="form-label">Jumlah Masuk</label>
    <input type="number" name="jumlah" class="form-control" id="jumlah" aria-describedby="masukan jumlah masuk">
  </div>
    <div class="mb-3" >
    <label for="user_id" class="form-label">Nama Pengguna</label>
    <select id="user_id" name="user_id" class="form-control">
        @foreach ($namapengguna as $np)
        <option value="{{$np->id }}">{{ $np->namap}}</option>
        @endforeach
        </select>
  </div>
  <div class="mb-3" >
    <label for="tanggalbuat" class="form-label">Tanggal Buat</label>
    <input type="date" name="tanggalbuat" class="form-control" id="tanggalbuat" aria-describedby="masukan tanggal">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
