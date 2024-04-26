@extends('admin.layout')
@section('content')
    <h1>Recap</h1>
    <hr>
    <div class="row">
            <div class="col-sm-8">
              <form class="row g-3 mb-3" method="get" action="/recap" enctype="multipart/form-data">
                @csrf
                  <div class="col-md-3">
                    <input type="date" value="{{ old('tgl_mulai') }}" name="tgl_mulai" class="form-control">
                  </div>
                  <div class="col-md-3">
                    <input type="date" value="{{ old('tgl_selesai') }}" name="tgl_selesai" class="form-control">
                  </div>
                  <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Tampil Data</button>
                  </div>
              </form>
            </div>
        </div>
  <table class="table">
  <h5>Barang Masuk</h5>
  <hr>
<thead>
  <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal Faktur</th>
      <th scope="col">Suplayer</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga Beli </th>
      <th scope="col">Jumlah Masuk</th>
  </tr>
</thead>
<tbody>
@foreach ($bmasuk as $sup)
    <tr>
    <th scope="row">{{$loop->iteration}}</th>
      <td>{{$sup->tglfktr}}</td>
      <td>{{$sup->suplayer->namasupplier}}</td>
      <td>{{$sup->stok->namab}}</td>
      <td>{{$sup->hargabeli}}</td>
      <td>{{$sup->jumlahbm}}</td> 
    </tr>
@endforeach
</tbody>
</table>

<table class="table">
<h5>Barang Keluar</h5>
<hr>
<thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal Faktur</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Subtotal</th>
      <th scope="col">Pelanggan</th>
      <th scope="col">Tanggal Buat</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($bkeluar as $sup)
    <tr>
    <th scope="row">{{$loop->iteration}}</th>
      <td>{{$sup->tanggalfkt}}</td>
      <td>{{$sup->stok->namab}}</td>
      <td>{{$sup->jumlahbk}}</td>
      <td>{{$sup->subtotal}}</td>
      <td>{{$sup->pelanggan->namap}}</td>
      <td>{{$sup->tanggalbuat}}</td>
    </tr>
@endforeach
  </tbody>
</table>
@endsection