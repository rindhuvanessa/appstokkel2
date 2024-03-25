@extends('admin.layout')
@section('content')
    <h1>Barang Masuk</h1>
    <hr>
    <a class="btn btn-primary" href="tambahbmasuk" role="button">Tambah Barang Masuk</a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal Faktur</th>
      <th scope="col">Suplayer</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga Beli </th>
      <th scope="col">Jumlah Masuk</th>
      <th scope="col">Cabang</th>
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
      <td>{{$sup->namabarang}}</td>
      <td>{{$sup->stok->namab}}</td>
      <td>{{$sup->hargabeli}}</td>
      <td>{{$sup->jumlah}}</td>
      <td>{{$sup->cabang}}</td>
      <td><a href="/editbmasuk/{{$sup->id}}" class="btn btn-success">Edit</a></td>
      <td><a href="/hapusbmasuk/{{$sup->id}}" class="btn btn-danger">Delete</a></td> 
    </tr>
@endforeach
  </tbody>
</table>
@endsection