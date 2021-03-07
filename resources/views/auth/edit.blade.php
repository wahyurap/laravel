@extends('adminlte.master')

@section('content')
<div class="m-3">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit pertanyaan {{$pertanyaan->id}}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
    @csrf
    @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul" value="{{old ('judul', $pertanyaan->judul)}}" placeholder="Masukkan Nama Masakan">
          @error('judul')
            <div class="alert alert-danger">Form Judul harus diisi</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="isi">Isi</label>
          <input type="text" class="form-control" id="isi" name="isi" value="{{old ('isi', $pertanyaan->isi)}}" placeholder="Masukkan isi">
          @error('isi')
            <div class="alert alert-danger">Form Isi harus diisi</div>
          @enderror
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
    </form>
  </div>
</div>

@endsection
