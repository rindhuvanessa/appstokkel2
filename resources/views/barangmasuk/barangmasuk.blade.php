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
      <th scope="col">Nama Barang</th>
      <th scope="col">Nama Suplayer</th>
      <th scope="col">Harga Beli </th>
      <th scope="col">Jumlah Masuk</th>
      <th scope="col">Tanggal Dibuat</th>
      <th scope="col">Admin</th>
      <th scope="col">Cabang</th>
    </tr>
  </thead>
  <tbody>
@foreach ($bmasuk as $sup)
<tr>
    <th scope="row">{{$loop->iteration}}</th>
      <td>{{$sup->tanggalfaktur}}</td>
      <td>{{$sup->namabarang}}</td>
      <td>{{$sup->suplayer}}</td>
      <td>{{$sup->hargabeli}}</td>
      <td>{{$sup->jumlah}}</td>
      <td><a href="/editbmasuk/{{$sup->id}}" class="btn btn-success">Edit</a></td>
      <td><a href="/hapusbmasuk/{{$sup->id}}" class="btn btn-danger">Delete</a></td> 
    </tr>
@endforeach
  </tbody>
</table>
@endsection