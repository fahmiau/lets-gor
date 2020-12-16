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
        <div class="col-md-6">
          <h5 class="text-center mt-3">History</h5>
          <div class="row">
            <div class="col-12">

              <div id="accordion">
                {{-- loop disini --}}
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      {{-- tiap id dikasih loop iteration --}}
                      <div class="card-header" id="order">
                        <h5 class="mb-0">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#orderDetail" aria-expanded="true" aria-controls="orderDetail">
                            1. Gor Title
                          </button>
                        </h5>
                      </div>
                      <div id="orderDetail" class="collapse show" aria-labelledby="order" data-parent="#accordion">
                        <div class="card-body">
                          <p>Tanggal</p>
                          <p>Jam</p>
                          <p>Alamat</p>
                          <p>Status</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- loop sampai sini --}}
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