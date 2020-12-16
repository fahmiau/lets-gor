@extends('layouts.gorku')
@section('title', 'Booking | GOR Ku | LetsGOR!')
@section('subtitle', 'Booking')
@section('content')
<div class="row">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Booking ID : {{$book['id']}}</h4>
            <p class="card-category">Informasi detail tentang booking</p>
        </div>
        <div class="card-body">
            <h3>Nama : {{$book['name']}}</h3>
            <h3>Booking Tanggal : {{$book['hari']}}, {{date('d M Y',strtotime($book['tanggal']))}}</h3>
            <h3>Jam mulai : {{date('H:i',strtotime($book['start_hour']))}}</h3>
            <h3>Jam selesai : {{date('H:i',strtotime($book['finish_hour']))}}</h3>
            <h3>Total : Rp. {{number_format($book['total'], 0, ".", ".")}}</h3>
            <h3>Approval : {{$book['approval']}}</h3>


            @if($book['approval'] == 'Pending')
            <p>Note : <br>Cocokkan dengan catatan gor anda
            <br>apabila tanggal dan jam benar - benar kosong, klik Approve, jika tidak klik Decline</p>
            
            <a href="/gorku/approve/{{$book['id']}}" class="btn btn-success">Approve</a>
            <a href="/gorku/decline/{{$book['id']}}" class="btn btn-danger">Decline</a>
            @else
            <a href="{{url()->previous()}}" class="btn btn-primary">Back</a>
            @endif
        </div>
        </div>
    </div>
</div>
@endsection