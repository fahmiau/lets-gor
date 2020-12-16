<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/checkout.css">
    <title>Booking di GOR | LetsGOR!</title>
  </head>
  <body>
    <div class="container">
    <form action="/checkout/confirmation" method="post">
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
                                <input type="text" class="form-control" value="Nando" readonly>
                            </div>
                        </div>
                        <div class="col-md-6 col-6">
                            <div class="form-group form-data">
                                <label>No HP</label>
                                <input type="text" class="form-control" value="087878770097" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-data">
                                <label>GOR</label>
                                <input type="text" class="form-control" value="GOR Bekasi" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-data">
                                <label>Harga / jam</label>
                                <input type="text" class="form-control" value="Rp. 70.000" readonly>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5 style="text-align:center">Atur Jadwal Booking</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-data">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" name="tanggal">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-data">
                                <label>Jam Mulai</label>
                                <input type="time" class="form-control" name="start_hour">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-data">
                                <label>Jam Selesai</label>
                                <input type="time" class="form-control" name="finish_hour">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="card-footer btn btn-success btn-continue" style="">Continue</button>
            </div>
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