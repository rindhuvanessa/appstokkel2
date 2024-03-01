@extends('admin.layout')
@section('content')
<form>
  <div class="mb-3">
    <label for="namasupplier" class="form-label">Namasupplier</label>
    <input type="namasupplier" class="form-control" id="namasupplier" aria-describedby="Safira">
  </div>
  <div class="mb-3">
    <label for="nomorwhatsapp" class="form-label">Nomorwhatsapp</label>
    <input type="nomorwhatsapp" class="form-control" id="nomorwhatsapp" aria-describedby="081234567892">
  </div>
  <div class="mb-3">
    <label for="alamatperusahaan" class="form-label">Alamatperusahaan</label>
    <textarea type="alamatperusahaan" id="alamatperusahaan" cols="30" rows="10" aria-describedby="Jl. Jakabaring"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
