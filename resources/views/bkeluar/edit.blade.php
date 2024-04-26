@extends('admin.layout')
@section('content')
<form action="/updatebkeluar/{{$bkeluar->id}}" method="post" enctype="multipart/form-data">
@method('put')
  @csrf
  <div class="mb-3"> 
    <label for="tanggalfkt" class="form-label">Tanggal Faktur</label>
    <input type="date" name="tanggalfkt" class="form-control" id="tanggalfkt" value="{{$bkeluar->tanggalfkt}}">
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
    <label for="jumlahbk" class="form-label">Jumlah Barang Keluar</label>
    <input type="number" name="jumlahbk" class="form-control" id="jumlahbk"  value="{{$bkeluar->jumlahbk}}">
  </div>
  <div class="mb-3" >
    <label for="pelanggan_id" class="form-label">Nama Pengguna</label>
    <select id="pelanggan_id" name="pelanggan_id" class="form-control">
        @foreach ($namapengguna as $np)
        <option value="{{$np->id }}">{{ $np->namap }}</option>
        @endforeach
        </select>
  </div>
  <div class="mb-3" >
    <label for="tanggalbuat" class="form-label">Tanggal Buat</label>
    <input type="date" name="tanggalbuat" class="form-control" id="tanggalbuat" value="{{$bkeluar->tanggalbuat}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
