@extends('layouts.gorku')
@section('title', 'GOR Ku | LetsGOR')
@section('subtitle', 'Dashboard')
@section('content')
  <div class="row">
    <div class="col-md-12">
    <form action="" method="POST">
      <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Atur Jadwal GOR</h4>
            <p class="card-category">Atur jadwal GOR untuk semua hari</p>
        </div>
        <div class="card-body">
            @csrf
            @if($message = Session::get('message'))
                <p class="alert alert-info">{{$message}}</p>
            @endif
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h2 style="text-align:center">Senin</h2>
                            <hr>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-6">
                                    <p style="text-align:center">Jam Buka</p>
                                    <div class="form-group">
                                        <input style="display:block;margin:auto" value="{{$senin['open_hour']}}" type="time" name="open_senin">
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <p style="text-align:center">Jam Tutup</p>
                                    <div class="form-group">
                                        <input style="display:block;margin:auto" value="{{$senin['close_hour']}}" type="time" name="close_senin">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h2 style="text-align:center">Selasa</h2>
                            <hr>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-6">
                                    <p style="text-align:center">Jam Buka</p>
                                    <div class="form-group">
                                        <input style="display:block;margin:auto" value="{{$selasa['open_hour']}}" type="time" name="open_selasa">
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <p style="text-align:center">Jam Tutup</p>
                                    <div class="form-group">
                                        <input style="display:block;margin:auto" value="{{$selasa['close_hour']}}" type="time" name="close_selasa">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h2 style="text-align:center">Rabu</h2>
                            <hr>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-6">
                                    <p style="text-align:center">Jam Buka</p>
                                    <div class="form-group">
                                        <input style="display:block;margin:auto" value="{{$rabu['open_hour']}}" type="time" name="open_rabu">
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <p style="text-align:center">Jam Tutup</p>
                                    <div class="form-group">
                                        <input style="display:block;margin:auto" value="{{$rabu['close_hour']}}" type="time" name="close_rabu">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h2 style="text-align:center">Kamis</h2>
                            <hr>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-6">
                                    <p style="text-align:center">Jam Buka</p>
                                    <div class="form-group">
                                        <input style="display:block;margin:auto" value="{{$kamis['open_hour']}}" type="time" name="open_kamis">
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <p style="text-align:center">Jam Tutup</p>
                                    <div class="form-group">
                                        <input style="display:block;margin:auto" value="{{$kamis['close_hour']}}" type="time" name="close_kamis">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h2 style="text-align:center">Jumat</h2>
                            <hr>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-6">
                                    <p style="text-align:center">Jam Buka</p>
                                    <div class="form-group">
                                        <input style="display:block;margin:auto" value="{{$jumat['open_hour']}}" type="time" name="open_jumat">
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <p style="text-align:center">Jam Tutup</p>
                                    <div class="form-group">
                                        <input style="display:block;margin:auto" value="{{$jumat['close_hour']}}" type="time" name="close_jumat">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h2 style="text-align:center">Sabtu</h2>
                            <hr>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-6">
                                    <p style="text-align:center">Jam Buka</p>
                                    <div class="form-group">
                                        <input style="display:block;margin:auto" value="{{$sabtu['open_hour']}}" type="time" name="open_sabtu">
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <p style="text-align:center">Jam Tutup</p>
                                    <div class="form-group">
                                        <input style="display:block;margin:auto" value="{{$sabtu['close_hour']}}" type="time" name="close_sabtu">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h2 style="text-align:center">Minggu</h2>
                            <hr>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-6">
                                    <p style="text-align:center">Jam Buka</p>
                                    <div class="form-group">
                                        <input style="display:block;margin:auto" value="{{$minggu['open_hour']}}" type="time" name="open_minggu">
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <p style="text-align:center">Jam Tutup</p>
                                    <div class="form-group">
                                        <input style="display:block;margin:auto" value="{{$minggu['close_hour']}}" type="time" name="close_minggu">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="card-footer">
        <button class="btn btn-primary" type="submit">Submit Jadwal</button>
        </div>
      </div>
    </form>
    </div>
  </div>
@endsection