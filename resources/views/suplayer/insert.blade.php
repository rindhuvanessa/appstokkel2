@extends('admin.layout')
@section('content')
<form action="/savesuplayer" method="post" enctype="multipart/form-data">
  @csrf
  <div>
    <label for="namasuplayer" class="form-label">Nama Suplayer</label>
    <input type="namasuplayer" class="form-control" id="namasuplayer" aria-describedby="masukan nama suplayer">
  </div>
  <div>
    <label for="nomorwhatsapp" class="form-label">Nomor Whatsapp</label>
    <input type="nomorwhatsapp" class="form-control" id="nomorwhatsapp" aria-describedby="masukan nomor whatsapp suplayer">
  </div>
  <div>
    <label for="alamatperusahaan" class="form-label">Alamat Perusahaan</label>
    <textarea type="alamatperusahaan" class="form-control" id="alamatperusahaan" cols="30" rows="10" aria-describedby="tuliskan alamat"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
