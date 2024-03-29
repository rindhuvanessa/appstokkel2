@extends('admin.layout')
@section('content')
<form action="/updatebkeluar/{{ $bkeluar->id}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mb-3"> 
    <label for="tanggalfaktur" class="form-label">Tanggal Faktur</label>
    <input type="date" name="tanggalfaktur" class="form-control" id="tanggalfaktur" aria-describedby="masukan tanggal faktur">
  </div>
  <div class="mb-3" >
    <label for="stok_id" class="form-label">Nama Barang</label>
    <select id="nb_namabarang" name="nb_namabarang" class="form-control">
        @foreach ($namabarang as $nb)
          <option value="{{ $nb->id }}">{{$nb->namab}}</option>
        @endforeach
        </select>
  </div>
  <div class="mb-3" >
    <label for="jumlah" class="form-label">Jumlah</label>
    <input type="number" name="jumlah" class="form-control" id="jumlah"  aria-describedby="tuliskan jumlah">
  </div>
  <div class="mb-3" >
    <label for="subtotal" class="form-label">Subtotal</label>
    <input type="text" name="subtotal" class="form-control" id="subtotal" aria-describedby="masukan subtotal">
  </div>
  <div class="mb-3" >
    <label for="user_id" class="form-label">Nama Pengguna</label>
    <select id="namapengguna" name="namapengguna" class="form-control">
        @foreach ($namapengguna as $np)
        <option value="{{$np->id }}">{{ $np->namap }}</option>
        @endforeach
        </select>
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
