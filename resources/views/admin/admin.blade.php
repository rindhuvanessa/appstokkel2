@extends('admin.layout')
@section('content')
<h1 class="mt-3">Admin</h1>
<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Cabang</th>
      <th scope="col">Delate</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Safira</td>
      <td>@safirahbrkh</td>
      <td>HRD</td>
      <td>tegal binangun</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>alencia</td>
      <td>@alencia</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
@endsection
