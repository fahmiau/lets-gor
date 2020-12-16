<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Let's GOR - Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="{{asset("js/bootstrap.js")}}"></script>
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("css/login.css")}}">
    <link rel="stylesheet" href="{{asset("css/gor.css")}}">

    
  </head>
  <body>
    @include('layouts.nav')

    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-md-12">
          <h5 class="text-center mt-3">Search Result "Keyword"</h5>
          <div class="row">
            
            <div class="col-6 col-md-3 gor-card">
              <div class="card">
                <img class="card-img-top" src="{{asset("assets/GOR-1.jpg")}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Gor title</h5>
                  <p class="card-text">Alamat</p>
                  <p class="card-text">Jam Buka</p>
                  <p class="card-text">Harga</p>
                  <a href="#" class="btn btn-success">Cek GOR</a>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-3 gor-card">
              <div class="card">
                <img class="card-img-top" src="{{asset("assets/GOR-1.jpg")}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Gor title</h5>
                  <p class="card-text">Jumlah lapang</p>
                  <p class="card-text">Alamat</p>
                  <p class="card-text">Harga</p>
                  <a href="#" class="btn btn-success">Cek GOR</a>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-3 gor-card">
              <div class="card">
                <img class="card-img-top" src="{{asset("assets/GOR-1.jpg")}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Gor title</h5>
                  <p class="card-text">Jumlah lapang</p>
                  <p class="card-text">Alamat</p>
                  <p class="card-text">Harga</p>
                  <a href="#" class="btn btn-success">Cek GOR</a>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-3 gor-card">
              <div class="card">
                <img class="card-img-top" src="{{asset("assets/GOR-1.jpg")}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Gor title</h5>
                  <p class="card-text">Jumlah lapang</p>
                  <p class="card-text">Alamat</p>
                  <p class="card-text">Harga</p>
                  <a href="#" class="btn btn-success">Cek GOR</a>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-3 gor-card">
              <div class="card">
                <img class="card-img-top" src="{{asset("assets/GOR-1.jpg")}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Gor title</h5>
                  <p class="card-text">Jumlah lapang</p>
                  <p class="card-text">Alamat</p>
                  <p class="card-text">Harga</p>
                  <a href="#" class="btn btn-success">Cek GOR</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </body>
  <script>
    $(document).ready(function(){
      $('.collapse').collapse();
    });
  </script>
</html>