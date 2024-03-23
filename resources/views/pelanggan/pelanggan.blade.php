@extends('admin.layout')
@section('content')
    <h1>Pelanggan</h1>
    <hr>
    <a class="btn btn-primary" href="tambahpelanggan" role="button">Tambah Pelanggan</a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nomor Telepon</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Kota</th>
      <th scope="col">Provinsi</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
@foreach ($pelanggan as $sup)
    <tr>
    <th scope="row">{{$loop->iteration}}</th>
      <td>{{$sup->namap}}</td>
      <td>{{$sup->nomortelepon}}</td>
      <td>{{$sup->alamat}}</td>
      <td>{{$sup->jeniskelamin}}</td>
      <td>{{$sup->kota}}</td>
      <td>{{$sup->provinsi}}</td>
      <td><a href="/editpelanggan/{{$sup->id}}" class="btn btn-success">Edit</a></td>
      <td><a href="/hapuspelanggan/{{$sup->id}}" class="btn btn-danger">Delete</a></td> 
    </tr>
@endforeach
  </tbody>
</table>
@endsection