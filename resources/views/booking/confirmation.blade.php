<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/checkout.css">
    <title>Konfirmasi Pembayaran | LetsGOR!</title>
  </head>
  <body>
    <div class="container">
    <form action="/checkout/payment" method="post">
    <img class="logo" src="/assets/logo.png" alt="">
        <div class="row justify-content-center" style="">
            @csrf
            <div class="card main-card mb-5">
                <div class="card-body">
                    <h2 style="text-align:center">Booking</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <div class="form-group form-data">
                                <label>Nama</label>
                                <input type="text" class="form-control" value="{{session('name')}}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6 col-6">
                            <div class="form-group form-data">
                                <label>No HP</label>
                                <input type="text" class="form-control" value="{{session('noHP')}}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-data">
                                <label>GOR</label>
                                <input type="text" class="form-control" value="{{$data['nama']}}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label>Harga / Jam</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                            </div>
                                <input type="text" class="form-control" name="harga_per_jam" value="{{$data['harga_per_jam']}}" readonly>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5 style="text-align:center">Waktu yang dipesan</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-data">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" value="{{$data['tanggal']}}" name="tanggal" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-data">
                                <label>Jam Mulai</label>
                                <input type="time" class="form-control" value="{{$data['start_hour']}}" name="start_hour" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-data">
                                <label>Jam Selesai</label>
                                <input type="time" class="form-control" value="{{$data['finish_hour']}}" name="finish_hour" readonly>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                        <label>Total</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                            </div>
                                <input type="number" class="form-control" name="total" value="{{$total}}" readonly>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5 style="text-align:center" class="mb-3">Payment Method</h5>
                    <div class="row justify-content-center">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Bank Transfer</label>
                        </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Credit Card</label>
                        </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineRadio3" value="option3">
                            <label class="form-check-label" for="inlineRadio3">Gopay</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="card-footer btn btn-success btn-continue" style="">Pay!</button>
            </div>
            <!-- hidden -->
            <input type="hidden" name="id_gor" value="{{$id_gor}}">
        </div>
    </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>