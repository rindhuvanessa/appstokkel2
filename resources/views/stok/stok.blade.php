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
      <th scope="col">Suplayer_id</th>
      <th scope="col">Cabang</th>
      <th scope="col">Editt</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
@foreach ($suplayer as $sup)
    <tr>
    <th scope="row">{{$loop->iteration}}</th>
      <td>{{$sup->namasupplier}}</td>
      <td>{{$sup->nomorwhatsaap}}</td>
      <td>{{$sup->alamatperusahaan}}</td>
      <td><a href="/edit/{{$sup->id}}" class="btn btn-success">Editt</a></td>
      <td><a href="/hapus/{{$sup->id}}" class="btn btn-danger">Delete</a></td> 
    </tr>
@endforeach
  </tbody>
</table>
@endsection