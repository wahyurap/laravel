@extends('master')

@section('content')
<div class="m-3">
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Buat Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{route('postingan.store')}}">
    @csrf
      <div class="card-body">
        <!-- <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul">
          @error('judul')
            <div class="alert alert-danger">Form Judul harus diisi</div>
          @enderror
        </div> -->
        <div class="form-group">
          <label for="isi">Isi</label>
          <input type="text" class="form-control" id="isi" name="isi" placeholder="Masukkan Isi">
          @error('isi')
            <div class="alert alert-danger">Form Isi harus diisi</div>
          @enderror
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-info">Buat</button>
      </div>
    </form>
  </div>
</div>

@endsection
