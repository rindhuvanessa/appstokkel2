@extends('admin.layout')
@section('content')
    <h1>Suplayer</h1>
    <hr>
    <a class="btn btn-primary" href="tambahsuplayer" role="button">Tambah Suplayer</a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">tanggalfaktur</th>
      <th scope="col">namabarang</th>
      <th scope="col">hargabeli </th>
      <th scope="col">Alamat</th>
      <th scope="col">jumlah</th>
    </tr>
  </thead>
  <tbody>
@foreach ($suplayer as $sup)
    
@endforeach
  </tbody>
</table>
@endsection