@extends('layouts.gorku')
@section('title', 'Booking | GOR Ku | LetsGOR!')
@section('subtitle', 'Booking')
@section('content')
<div class="row">
    <div class="col-md-12">
    <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Booking Terbaru</h4>
                  <p class="card-category">Request penyewaan yang perlu disetujui</p>
                </div>
                <div class="card-body">
                  @if($message = Session::get('message'))
                    <p class="alert alert-info">{{$message}}</p>
                  @endif
                  <ul class="nav nav-pills">
                    <li class="nav-item">
                      <a class="nav-link {{request()->is('gorku/booking/terbaru') ? 'active' : '' }}" href="/gorku/booking/terbaru">Terbaru</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link {{request()->is('gorku/booking/history') ? 'active' : '' }}" href="/gorku/booking/history">History</a>
                    </li>
                  </ul>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          No. Transaksi
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Tanggal
                        </th>
                        <th>
                          Jam Mulai
                        </th>
                        <th>
                          Jam Selesai
                        </th>
                        
                        <th style="text-align:right">
                          
                        </th>
                      </thead>
                      <tbody>
                        @foreach($bookings as $book)
                        @if($book['approval'] == 'Pending' && $book['status'] == 'Lunas')
                        <tr>
                          <td>
                            {{$book['id']}}
                          </td>
                          <td>
                            {{$book['name']}}
                          </td>
                          <td>
                            {{date('d M Y', strtotime($book['tanggal']))}}
                          </td>
                          <td>
                            {{date('H:i', strtotime($book['start_hour']))}}
                          </td>
                          <td>
                            {{date('H:i', strtotime($book['finish_hour']))}}
                          </td>
                         
                          <td style="text-align:right">
                            <a class="btn btn-primary" href="/gorku/booking/{{$book['id']}}">View</a>
                          </td>
                        </tr>
                        @endif
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
    </div>
</div>
@endsection