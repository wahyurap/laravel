@extends('master')

@section('content')
<div class="card card-widget m-3">
  <div class="card-header">
    <div class="user-block">
      <img class="img-circle" src="{{asset('dist/img/user1-128x128.jpg')}}" alt="User Image">
      <span class="username mt-2"><a href="#">{{$postingan -> author -> name}}</a></span>
    </div>
    <!-- /.user-block -->
    <div class="card-tools">
      <form action="{{route('postingan.destroy', ['postingan' => $postingan->id])}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="delete" class="btn btn-danger btn-sm">
      </form>
    </div>
    <!-- /.card-tools -->
  </div>
  <!-- /.card-header -->
  <div class="card-body">
  <!-- post text -->
    <p>{{ $postingan -> isi }}</p>
    <!-- Social sharing buttons -->
    <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
    <span class="float-right text-muted">45 likes - 2 comments</span>
    <div class="card-footer card-comments mt-2">
      <div class="card-comment">
      <!-- User image -->
        @forelse()
          <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">

          <div class="comment-text">
            <span class="username">
              Maria Gonzales
            </span><!-- /.username -->
            Tes Komentar
          </div>
        <!-- /.comment-text -->
      </div>
      <!-- /.card-comment -->
    </div>
    <!-- /.card-footer -->
    <div class="card-footer">
      <form action="{{route('komentar.store')}}" method="post">
        @csrf
        <img class="img-fluid img-circle img-sm" src="{{asset('dist/img/user4-128x128.jpg')}}" alt="Alt Text">
        <!-- .img-push is used to add margin to elements next to floating images -->
        <div class="img-push">
          <input type="text" class="form-control form-control-sm" id="isi" name="isi" placeholder="Komentar disini">
          @error('isi')
            <div class="alert alert-danger">Komentar harus diisi</div>
          @enderror
          <button type="submit" class="btn btn-info btn-sm mt-1">Kirim</button>
        </div>
      </form>
    </div>
    <!-- /.card-footer -->
  </div>
</div>
@endsection
