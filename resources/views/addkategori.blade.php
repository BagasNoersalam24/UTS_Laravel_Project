@extends('back/dashboard.layout.template')

{{-- panggil sidebar menu --}}
@section('content')

{{-- content --}}
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add Kategori</h1>
    {{-- FORM --}}
    <div class="row">
      <div class="dropdown ml-auto">
        <div class="col-6 border rounded px-3 py-3">
          <form action="/kategori/add" method="POST" class="">
              @csrf
              <div class="mb-5">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" name="name" id="inp-kategori" class="form-control border-0 px-4" placeholder="Nama kategori">
              </div>
              <div class="mb-3 text-end">
                  <button class="btn btn-primary" type="submit">Save</button>
              </div>
          </form>
        </div>
    </div>
    {{-- FORM --}}
  </div>
@endsection