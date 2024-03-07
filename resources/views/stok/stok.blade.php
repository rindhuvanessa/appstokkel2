@extends('admin.layout')
@section('content')
    <h1>Stok</h1>
    <hr>
    <a class="btn btn-primary" href="tambahstok" role="button">Tambah Stok</a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Kode</th>
      <th scope="col">Harga List</th>
      <th scope="col">Stok</th>
      <th scope="col">Cabang</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
@foreach ($stok as $sup)
    <tr>
    <th scope="row">{{$loop->iteration}}</th>
      <td>{{$sup->kode}}</td>
      <td>{{$sup->nama}}</td>
      <td>{{$sup->hargalist}}</td>
      <td>{{$sup->stok}}</td>
      <td>{{$sup->cabang}}</td>
      <td><a href="/editstok/{{$sup->id}}" class="btn btn-success">Edit</a></td>
      <td><a href="/hapusstok/{{$sup->id}}" class="btn btn-danger">Delete</a></td> 
    </tr>
@endforeach
  </tbody>
</table>
@endsection