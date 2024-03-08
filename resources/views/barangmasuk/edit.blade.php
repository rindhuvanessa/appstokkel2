@extends('admin.layout')
@section('content')
<form action="/savebmasuk" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mb-3"> 
    <label for="suplayer_id" class="form-label">Suplayer</label>
    <select type="date" name="suplayer_id" class="form-control" id="suplayer_id">
        @foreach ($suplayer as $suplayer)
            <option value="{{ $suplayer->id }}">{{ $suplayer->suplayer }}</option>
        @endforeach
    </select>
  </div>
  <div class="mb-3"> 
    <label for="tanggalfaktur" class="form-label">Tanggal Faktur</label>
    <input name="tanggalfaktur" class="form-control" id="tanggalfaktur" value="{{$bmasuk->tanggalfaktur}}">>
  </div>
  <div class="mb-3">
    <label for="namabarang" class="form-label">Nama barang</label>
    <input type="text" name="namabarang" class="form-control" id="namabarang" value="{{$bmasuk->namabarang}}">>
  </div>
  <div class="mb-3" >
    <label for="hargabeli" class="form-label">Harga Beli</label>
    <input type="text" name="hargabeli" class="form-control" id="hargabeli" value="{{$bmasuk->hargabeli}}">
  </div>
  <div class="mb-3" >
    <label for="jumlah" class="form-label">Jumlah Masuk</label>
    <input type="text" name="jumlah" class="form-control" id="jumlah" value="{{$bmasuk->jumlah}}">
  </div>
  <button type="submit" class="btn btn-primary">save barang</button>
</form>
@endsection
