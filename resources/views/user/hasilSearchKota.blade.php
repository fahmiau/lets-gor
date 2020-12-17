@extends('app')
@section('title','Lets GOR')
    
@section('header')
  @include('layouts.nav')
@endsection

@section('content')
  <div class="container">
    <div class="row justify-content-center ">
      <div class="col-md-12">
        <h3 class="text-center mt-5 mb-5">Menampilkan GOR di {{$nama_kota}}</h3>
        <div class="row">
          @foreach($gors as $gor)
          <div class="col-6 col-md-4 gor-card">
            <a href="/gor/{{$gor['id']}}">
            <div class="card zoom">
                <img src="{{asset('assets/GOR-1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$gor['nama']}}</h5>
                    <p>Lokasi : {{$gor['alamat_lengkap']}}, {{$gor['kota']}}</p>
                    <p>Jam Buka : {{date('H:i', strtotime($gor['open_hour']))}}<br />
                        Jam Tutup : {{date('H:i', strtotime($gor['close_hour']))}}</p>
                        <p>Harga : Rp. Rp. {{number_format($gor['harga_per_jam'], 0, ".", ".")}}</p>
                </div>
            </div>
            </a>
          </div>
          @endforeach
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