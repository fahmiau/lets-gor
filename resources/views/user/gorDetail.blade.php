@extends('app')
@section('title','Lets GOR')
    
@section('header')
  @include('layouts.nav')
@endsection

@section('content')
    

  {{-- Pake kondisi gambar pertama setengah container, gambar ke2 dst bikin row baru di setengah --}}
  <div class="container mt-3">
    <div class="row">
      <div class="col-md-6">
        <img src="{{asset("assets/GOR-1.jpg")}}" alt="" class="first-image">
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6">
            <img src="{{asset("assets/GOR-1.jpg")}}" alt="" class="first-image">
          </div>
          <div class="col-md-6">
            <img src="{{asset("assets/GOR-1.jpg")}}" alt="" class="first-image">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <h3>{{$gor['nama']}}</h3>
    <p>Lapangan {{$gor['nama_kategori']}}</p>
    <p>{{$gor['kota']}}</p>
    <p>{{$gor['alamat_lengkap']}}</p>
    <p>Rp. {{number_format($gor['harga_per_jam'], 0, ".", ".")}} / Jam</p>
    <img style="float: left;" src="{{asset('/icons/geo-alt.svg')}}" alt="" width="20px" height="20px"><p>Alamat</p>
    <button class="btn btn-outline-success"><i class="fa fa-map-signs"></i> Petunjuk</button>
    <button class="btn btn-outline-success"><i class="fa fa-send"></i> Bagikan</button>
    <button form="book" class="btn btn-outline-success"><i class="fa fa-plus"></i> Booking</button>
      <form method="POST" id="book" action="/checkout">
      @csrf
        <input type="hidden" value="{{$gor['id']}}" name="id_gor">
      </form>
  </div>

  <div class="container mt-4">
    <nav id="scroll-gor">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="#sekilas">Sekilas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#fasilitas">Fasilitas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#foto">Foto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#lapangan">Lapangan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#pemesanan">Pemesanan</a>
        </li>
      </ul>
    </nav>

    <div data-spy="scroll" data-target="#scroll-gor" data-offset="0">
      <div id="sekilas">
        <h4 class="mt-3">Tentang GOR Ini</h4>
        <div class="row">
          <div class="col-md-6">
            <h5 class="green-text">Informasi Kontak</h5>
            <p>{{$gor['alamat_lengkap']}}</p>
            <table>
              <tr>
                <th rowspan="2" style="width:3rem"><img src="{{asset("icons/person-circle.svg")}}" alt="" width="40px"></th>
                <td>PIC :</td>
              </tr>
              <tr>
                <td>
                  {{$gor['noHP_pemilik']}}
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-4">
            <h5 class="green-text mb-3">Jam Operasional</h5>
            <table class="table table-striped table-success">
              @foreach($jadwal as $j)
              <tr>
                <td>{{$j['hari']}}</td>
                <td class="text-right">{{date('H:i', strtotime($j['open_hour']))}} - {{date('H:i', strtotime($j['close_hour']))}}</td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
      <div id="fasilitas">
        <h4 class="mt-3">Fasilitas</h4>
        <button class="btn btn-success round-btn"><i class="fa fa-venus-mars fa-3x"></i></button>
        <button class="btn btn-success round-btn"><i class="fa fa-cutlery fa-3x"></i></button>
      </div>
      <div id="foto">
        <h4 class="mt-3">Foto</h4>
        <div class="row">
          {{-- di loop --}}
          <div class="col-md-3">
            <img src="{{asset("assets/GOR-1.jpg")}}" alt="" class="first-image">
          </div>
        </div>
      </div>
      <div id="lapangan" class="container">
        <h4 class="mt-3">Lapangan</h4>
        <div class="row border border-dark rounded">
          <div class="col-md-3 px-0">
            <img src="{{asset("assets/GOR-1.jpg")}}" alt="" style="height: 11rem">
          </div>
          <div class="col-md-6 my-auto ml-5">
            <h5>Lapangan 1</h5>
            <ul style="list-style: none">
              <li>Tipe Olahraga :</li>
              <li>Tipe Lapangan :</li>
              <li>Jenis Lapangan :</li>
            </ul>
            <h5 class="green-text">Harga Sewa</h5>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
<script>
  $(document).ready(function(){
    $('body').scrollspy({ target: '#scroll-gor' });
    $('#durasi').change(function(){
      console.log("asdwa");
      var total = $('#harga').val() * $('#durasi').val();
      console.log(total);
      $('#pembayaran').val(total);
      $('.total-pembayaran').find("span").text('Rp. '+ new Intl.NumberFormat().format(total));
    });
  });
</script>
@endsection
