@extends('back/dashboard.layout.template')

{{-- panggil sidebar menu --}}
@section('content')
{{-- content --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Dashboard </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          
          @if (session()->has('status'))
            <button type="button" class="btn btn-secondary"><a style="text-decoration: none; color:white" href="sesi">Login</a></button>
          @endif
        </div>
      </div>
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://storage.nu.or.id/storage/post/16_9/mid/1598374786.jpg" alt="Gambar 1" style="width: 980px; height: auto;">
          </div>
          <div class="carousel-item">
            <img src="https://asset.kompas.com/crops/f_--86QUZfej38ICD6X5Vh40XHc=/0x0:750x500/1200x800/data/photo/2022/05/31/629579ce1d14c.jpg" alt="Gambar 2" style="width: 1000px; height: 550px;">
          </div>
          <div class="carousel-item">
            <img src="https://cdn.eraspace.com/pub/media/mageplaza/blog/post/g/a/game-paling-seru-primary.jpg" alt="Gambar 2" style="width: 1000px; height: 550px;">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.0/dist/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

     
    </main>

@endsection