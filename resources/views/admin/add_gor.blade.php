@extends('layouts.admin')
@section('title', 'Add GOR | LetsGOR')
@section('subtitle', 'Tambah data GOR')
@section('content')
<div class="row">
    <div class="col-md-12">
    <h1 class="mb-5">Add GOR</h1>
    @if($message = Session::get('message'))
        <p class="alert alert-info">{{$message}}</p><br>
    @endif
    <form action="" method="POST">
    @csrf
    <div class="form-group">
        <label for="">ID Pemilik</label><input class="form-control" type="text" name="id_pemilik" ><br>
    </div>
    <div class="form-group">
        <label for="">Kategori</label>
            <select class="form-control" name="id_kategori">
                <option disabled selected>Pilih Kategori</option>
                <option value="1">Basket</option>
                <option value="2">Futsal</option>
                <option value="3">Mini Soccer</option>
                <option value="4">Sepakbola</option>
                <option value="5">Bulu Tangkis</option>
                <option value="6">Voli</option>
            </select><br>
    </div>
    <div class="form-group">
        <label for="">Nama</label><input class="form-control" type="text" name="nama"><br>
    </div>
    <div class="form-group">
        <label for="">Deskripsi</label><br><textarea class="form-control" name="desc" rows="4" cols="50"></textarea><br>
    </div>
    <div class="form-group">
        <label for="">No Telp</label><input class="form-control" type="text" name="telp"><br>
    </div>
    <div class="form-group">
        <label for="">Kota</label><input class="form-control" type="text" name="kota"><br>
    </div>
    <div class="form-group">
        <label for="">Alamat</label><input class="form-control" type="text" name="alamat_lengkap"><br>
    </div>
    <div class="form-group">
        <label for="">Harga per Jam</label><input class="form-control"  type="text" name="harga_per_jam"><br>
    </div>
        <button type="submit">Submit</button>

    </form>
    
    </div>
</div>
@endsection