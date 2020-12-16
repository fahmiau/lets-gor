@extends('layouts.gorku')
@section('title', 'GOR Ku | LetsGOR')
@section('subtitle', 'Dashboard')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
            <a href="/gor/{{$gorku['id']}}"><h4 class="card-title ">{{$gorku['nama']}}</h4></a>
            <p class="card-category">{{$gorku['nama_kategori']}}</p>
        </div>
        <div class="card-body">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="https://fooddiversity.today/wp-content/uploads/2016/05/placeholder.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://fooddiversity.today/wp-content/uploads/2016/05/placeholder.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://fooddiversity.today/wp-content/uploads/2016/05/placeholder.png" alt="Third slide">
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
        </div>
      </div>
      <div class="card">
        <div class="card-header">
            <h3 class="card-title "><strong>Informasi GOR</strong></h3>
        </div>
        <div class="card-body">
          <h4>Lokasi : </h4>
          <p>{{$gorku['alamat_lengkap']}}, <strong>{{$gorku['kota']}}</strong></p>
          <hr>
          <h4>Telp :</h4>
          <p>{{$gorku['telp']}}</p>
          <hr>
          <h4>Tarif per Jam :</h4>
          <p>Rp. {{number_format($gorku['harga_per_jam'], 0, ".", ".")}}</p>
          <hr>
        </div>
      </div>
    </div>
  </div>
@endsection