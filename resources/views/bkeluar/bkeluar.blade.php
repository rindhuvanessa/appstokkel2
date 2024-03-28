@extends('admin.layout')
@section('content')
    <h1>Barang Keluar</h1>
    <hr>
    <a class="btn btn-primary" href="tambahbkeluar" role="button">Tambah Barang Keluar</a>

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
      <td>{{$sup->jumlahbk}}</td>
      <td>{{$sup->subtotal}}</td>
      <td>{{$sup->pelanggan->namap}}</td>
      <td>{{$sup->tanggalbuat}}</td>
      <td><a href="/editbkeluar/{{$sup->id}}" class="btn btn-success">Edit</a></td>
      <td><a href="/hapusbkeluar/{{$sup->id}}" class="btn btn-danger">Delete</a></td> 
    </tr>
@endforeach
  </tbody>
</table>
  @endsection