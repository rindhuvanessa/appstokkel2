@extends('admin.layout')
@section('content')
    <h1>Barang Keluar</h1>
    <hr>
    <a class="btn btn-primary" href="tambahbkeluar" role="button">Tambah Barang Keluar</a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Tanggal Faktur</th>
      <th scope="col">Stok</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Subtotal</th>
      <th scope="col">User_Id</th>
      <th scope="col">Tanggal Buat</th>
      <th scope="col">Cabang</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($bkeluar as $sup)
    <tr>
    <th scope="row">{{$loop->iteration}}</th>
      <td>{{$sup->tanggalfaktur}}</td>
      <td>{{$sup->stok}}</td>
      <td>{{$sup->jumlah}}</td>
      <td>{{$sup->subtotal}}</td>
      <td>{{$sup->user_id}}</td>
      <td>{{$sup->tanggalbuat}}</td>
      <td>{{$sup->cabang}}</td>
      <td><a href="/editbkeluar/{{$sup->id}}" class="btn btn-success">Edit</a></td>
      <td><a href="/hapusbkeluar/{{$sup->id}}" class="btn btn-danger">Delete</a></td> 
    </tr>
@endforeach
  @endsection