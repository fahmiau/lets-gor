@extends('app')
@section('title','Lets GOR')
    
@section('header')
  @include('layouts.nav')
@endsection

@section('content')
  <div class="container">
    <div class="row justify-content-center ">
      <div class="col-md-6">
        <h5 class="text-center mt-3">History</h5>
        <div class="row">
          <div class="col-12">

            <div id="accordion">
              {{-- loop disini --}}
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    {{-- tiap id dikasih loop iteration --}}
                    <div class="card-header" id="order">
                      <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#orderDetail" aria-expanded="true" aria-controls="orderDetail">
                          1. Gor Title
                        </button>
                      </h5>
                    </div>
                    <div id="orderDetail" class="collapse show" aria-labelledby="order" data-parent="#accordion">
                      <div class="card-body">
                        <p>Tanggal</p>
                        <p>Jam</p>
                        <p>Alamat</p>
                        <p>Status</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- loop sampai sini --}}
            </div>

          </div>
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