@extends('app')
@section('title','Lets GOR')
    
@section('header')
  @include('layouts.nav')
@endsection

@section('content')
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
<script>
  $(document).ready(function(){
    $('.collapse').collapse();
  });
</script>
@endsection