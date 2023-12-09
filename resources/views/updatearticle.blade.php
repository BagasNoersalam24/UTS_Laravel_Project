@extends('back/dashboard.layout.template')

{{-- panggil sidebar menu --}}
@section('content')

{{-- content --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> New Article </h1> 
      </div>
      <div class="w-50 left border rounded px-3 py-3 ">
        <form action="/artikel/update/{{$article->id}}" method="POST" class="">
            @csrf
            <div class="mb-3">
                <label for="Judul" class="form-label">Judul</label>
                <input type="text"  name="tittle" class="form-control bg-light border-0 shadow-sm px-4" value="{{$article->tittle}}">
            </div>
            <div class="mb-3">
                <label for="Kategori" class="form-label">Kategori</label>
                <input type="text"  name="kategori" class="form-control bg-light border-0 shadow-sm px-4" value="">
            </div>
            <div class="form-group">
                <label for="konten">Konten</label>
                <textarea name="konten" class="form-control" id="exampleFormControlTextarea1" rows="4">{{$article->content}}</textarea>
              </div>
              
              <button type="submit" class="btn btn-success">update</button>
        </form>
    </main>
@endsection