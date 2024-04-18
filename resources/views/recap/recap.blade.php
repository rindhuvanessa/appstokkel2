@extends('admin.layout')
@section('content')
    <h1>Recap</h1>
    <hr>
    <a class="btn btn-primary" href="tambahrecap" role="button"></a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal Faktur</th>
      <th scope="col">Suplayer</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga Beli </th>
      <th scope="col">Jumlah Masuk</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
@foreach ($bmasuk as $sup)
    <tr>
    <th scope="row">{{$loop->iteration}}</th>
      <td>{{$sup->tanggalfaktur}}</td>
      <td>{{$sup->suplayer->namasupplier}}</td>
      <td>{{$sup->stok->namab}}</td>
      <td>{{$sup->hargabeli}}</td>
      <td>{{$sup->jumlahbm}}</td>
      <td><a href="/editbmasuk/{{$sup->id}}" class="btn btn-success">Edit</a></td>
      <td><a href="/hapusbmasuk/{{$sup->id}}" class="btn btn-danger">Delete</a></td> 
    </tr>
@endforeach
  </tbody>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal Faktur</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Subtotal</th>
      <th scope="col">Pelanggan</th>
      <th scope="col">Tanggal Buat</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($bkeluar as $sup)
    <tr>
    <th scope="row">{{$loop->iteration}}</th>
      <td>{{$sup->tanggalfaktur}}</td>
      <td>{{$sup->stok->namab}}</td>
      <td>{{$sup->jumlah}}</td>
      <td>{{$sup->subtotal}}</td>
      <td>{{$sup->pelanggan->namap}}</td>
      <td>{{$sup->tanggalbuat}}</td>
      <td><a href="/editbkeluar/{{$sup->id}}" class="btn btn-success">Edit</a></td>
      <td><a href="/hapusbkeluar/{{$sup->id}}" class="btn btn-danger">Delete</a></td> 
    </tr>
@endforeach
  </tbody>
</table>
</table>
@endsection