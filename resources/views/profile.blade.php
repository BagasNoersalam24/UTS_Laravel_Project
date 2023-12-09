@extends('back/dashboard.layout.template')

{{-- panggil sidebar menu --}}
@section('content')

{{-- content --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Profile </h1>
      </div>
{{-- FORM --}}
    <div class="w-50 left border rounded px-3 py-3 ">
        <h1 class="text-center mb-4">Profile</h1>
        <form action="/sesi/create" method="POST" class="">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="name" value="{{ $data['name'] }}" name="name" class="form-control bg-light border-0 shadow-sm px-4" placeholder="Masukkan nama">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ $data['email'] }}" name="email" class="form-control bg-light border-0 shadow-sm px-4" placeholder="Masukkan email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control bg-light border-0 shadow-sm px-4" placeholder="Masukkan password">
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
    </div>
@endsection