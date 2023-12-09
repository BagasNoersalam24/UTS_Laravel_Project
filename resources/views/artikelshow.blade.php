@extends('back/dashboard.layout.template')

{{-- panggil sidebar menu --}}
@section('content')

{{-- content --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{$article->tittle}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">

          </div>
        </div>
      </div>

      <img src="https://storage.nu.or.id/storage/post/16_9/mid/1598374786.jpg">

      <hr>
      {!! $article->content !!}
    </main>

@endsection