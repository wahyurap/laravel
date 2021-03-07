@extends('master')

@section('content')
  <div class="m-3">
    <div class="card">
      <!-- /.card-header -->
      <div class="card-body">
        <a class="btn btn-info mb-1" href="{{route('postingan.create')}}">Buat Postingan</a>
      </div>
      <!-- /.card-body -->
    </div>
  </div>

  @forelse($postingan as $key => $postingan)
  <div class="card card-widget ml-3 mr-3 mb-3">
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
    </div>
    <div class="card-footer card-comments">
      @forelse($komentar as $key => $komentar)
      <div class="card-comment">
      <!-- User image -->
          <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">

          <div class="comment-text">
            <span class="username">

            </span><!-- /.username -->
            {{$komentar -> isi}}
          </div>
          <hr>
      @empty
          <div class="comment-text">
            <p>Tidak Ada Komentar</p>
          </div>
        <!-- /.comment-text -->
      </div>
      @endforelse
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
  @empty
  <div class="m-3">
    <div class="card">
      <!-- /.card-header -->
      <div class="card-body text-center">
        <p>Tidak Ada Postingan</p>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
  @endforelse
@endsection
