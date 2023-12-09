@extends('back/dashboard.layout.template')

{{-- panggil sidebar menu --}}
@section('content')

{{-- content --}}
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kategori</h1>
    {{-- FORM --}}
    <div class="row">
      <div class="dropdown">
        <div class="col-6">
          <div class="mb-3">
              <a href="/kategori/add" class="btn btn-primary" type="submit">Tambah Kategori</a>
          </div>
        </div>
    </div>
    {{-- FORM --}}
    {{-- TABLE --}}
    <div class="row">
        <div class="col-12">
          <table class="table table-bordered table-hover" id="table-kategori">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Action</th>
                </tr>
              </thead> 
          </table>
        </div>
    </div>
    {{-- TABLE --}}
  </div>
@endsection