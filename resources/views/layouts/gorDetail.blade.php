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
    <script src="{{asset("js/mdb.min.js")}}"></script>
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("css/gor.css")}}">
    <link rel="stylesheet" href="{{asset("css/mdb.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light green-bg-dark">
      <a class="navbar-brand text-light" href="#">Let's GOR</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          @if(Session::has('token_api')))
            {{-- <ul class="nav justify-content-end"> --}}
              <li class="nav-item">
                <a class="nav-link text-light" href="#">{{session('name')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="/logout">Logout</a>
              </li>
            {{-- </ul> --}}
            @else
            {{-- <ul class="nav justify-content-end"> --}}
              <li class="nav-item">
                <a class="nav-link text-light" href="/register">Daftar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="/login">Masuk</a>
              </li>
            {{-- </ul> --}}
          @endif
        </ul>
        <form class="form-inline my-2 my-lg-0">
          @csrf
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-light my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    {{-- Pake kondisi gambar pertama setengah container, gambar ke2 dst bikin row baru di setengah --}}
    <div class="container">
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
        <div id="lapangan">
          <h4 class="mt-3">Lapangan</h4>
          <div class="row border border-dark">
            <div class="col-md-3">
              <img src="{{asset("assets/GOR-1.jpg")}}" alt="" style="height: 11rem">
            </div>
            <div class="col-md-6 my-auto ml-5">
              <h5>Lapangan 1</h5>
              <ul>
                <li>Tipe Olahraga :</li>
                <li>Tipe Lapangan :</li>
                <li>Jenis Lapangan :</li>
              </ul>
              <h5 class="green-text">Harga Sewa</h5>
            </div>
          </div>
        </div>
        <div id="pemesanan">
          <h4 class="mt-3">Pemesanan</h4>
          <form action="">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <h6 class="green-text">Lapangan</h6>
                  <select name="lapangan" id="lapangan" class="form-control border border-dark">
                    <option value="1">Lapangan 1</option>
                    <option value="2">Lapangan 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <h6 class="green-text">Nama</h6>
                  <input type="text" name="nama" id="nama" class="form-control border border-dark" placeholder="Masukkan Nama Anda Disini" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <h6 class="green-text">Email</h6>
                  <input type="text" name="email" id="email" class="form-control border border-dark" placeholder="Masukkan Email Anda Disini" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <h6 class="green-text">Nomor HP</h6>
                  <input type="text" name="nohp" id="nohp" class="form-control border border-dark" placeholder="Masukkan Nomor HP Anda Disini" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <h6 class="green-text">Keterangan</h6>
                  <textarea name="keterangan" id="keterangan" rows="2" class="form-control border border-dark" placeholder="Keterangan memesan tempat"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <h6 class="green-text">Tanggal pemesanan</h6>
                  <input placeholder="mm-dd-yyyy" type="date" id="tanggal" name="tanggal" class="form-control border border-dark" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <h6 class="green-text">Jam Mulai</h6>
                  <select name="jammulai" id="jammulai" class="form-control border border-dark" required>
                    <option value="7.00">7.00</option>
                    <option value="8.00">8.00</option>
                    <option value="9.00">9.00</option>
                    <option value="10.00">10.00</option>
                    <option value="11.00">11.00</option>
                    <option value="12.00">12.00</option>
                    <option value="13.00">13.00</option>
                    <option value="14.00">14.00</option>
                    <option value="15.00">15.00</option>
                    <option value="16.00">16.00</option>
                    <option value="17.00">17.00</option>
                    <option value="18.00">18.00</option>
                    <option value="19.00">19.00</option>
                    <option value="20.00">20.00</option>
                    <option value="21.00">21.00</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <h6 class="green-text">Jam Mulai</h6>
                  <input placeholder="" type="text" id="jammulai" name="jammulai" class="form-control border border-dark" required>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
  <script>
    $(document).ready(function(){
      $('body').scrollspy({ target: '#scroll-gor' });
      $('.datepicker').datepicker();
    });
  </script>
  </html>