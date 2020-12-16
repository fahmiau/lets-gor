<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Let's GOR</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="{{asset("js/bootstrap.js")}}"></script>
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("css/gor.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  </head>
  <body>
    @include('layouts.nav')

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
      <h3>Gor Title</h3>
      <p>Ketrangan lapang</p>
      <img style="float: left;" src="{{asset('/icons/geo-alt.svg')}}" alt="" width="20px" height="20px"><p>Alamat</p>
      <button class="btn btn-outline-success"><i class="fa fa-map-signs"></i> Petunjuk</button>
      <button class="btn btn-outline-success"><i class="fa fa-send"></i> Bagikan</button>
      <button class="btn btn-success"><i class="fa fa-plus"></i> Booking</button>
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
              <p>Alamat</p>
              <table>
                <tr>
                  <th rowspan="2" style="width:3rem"><img src="{{asset("icons/person-circle.svg")}}" alt="" width="40px"></th>
                  <td>PIC :</td>
                </tr>
                <tr>
                  <td>
                    no hp
                  </td>
                </tr>
              </table>
            </div>
            <div class="col-md-4">
              <h5 class="green-text mb-3">Jam Buka</h5>
              <table class="table table-striped table-success">
                <tr>
                  <td>Hari</td>
                  <td class="text-right">Jam</td>
                </tr>
                <tr>
                  <td>Hari</td>
                  <td class="text-right">Jam</td>
                </tr>
                <tr>
                  <td>Hari</td>
                  <td class="text-right">Jam</td>
                </tr>
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
    <div class="container text-center py-1 mt-5">
      Copyright 2020 LetsGOR Team
  </div>
  </body>
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
  </html>