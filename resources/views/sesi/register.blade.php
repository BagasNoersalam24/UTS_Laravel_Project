<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" class="css">

<div class="w-50 center border rounded px-3 py-3 mx-auto d-flex flex-wrap align-items-center">
    <img src="https://t3.ftcdn.net/jpg/01/71/29/48/360_F_171294824_FDLwEWTzlfVr8iE0qojO0mmai44fdbIj.jpg" style="max-height: 50px; max-width: 50px" class="me-2">
    <span class="fs-4 text-secondary">Noers Game</span>
</div>

<div class="w-50 center border rounded px-3 py-3 mx-auto">
    <h1 class="text-center mb-4">Register</h1>
    <form action="/sesi/create" method="POST" class="">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="name" value="{{ Session::get('name') }}" name="name" class="form-control bg-light border-0 shadow-sm px-4" placeholder="Masukkan nama">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control bg-light border-0 shadow-sm px-4" placeholder="Masukkan email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control bg-light border-0 shadow-sm px-4" placeholder="Masukkan password">
        </div>
        <div class="mb-3 d-grid">
            <button name="submit" type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
        <div class="mb-3 text-center">
            <span>Sudah punya akun?<a href="/sesi">Login</a></span>
        </div>
    </form>
</div>

<style>
    form {
        max-width: 400px;
        margin: 0 auto;
    }

   .form-control {
        border-radius: 0;
    }

   .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        border-radius: 0;
    }

   .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
    }

   .btn-block {
        font-size: 18px;
        font-weight: bold;
        padding: 10px 0;
    }
</style>