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
  @endsection