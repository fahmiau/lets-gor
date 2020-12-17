@extends('app')
@section('title','Lets GOR - Home')
    
@section('header')
    @include('layouts.nav_home')
@endsection

@section('content')
    
{{-- Rekomendasi --}}
    <div id="rekomendasi" class="container">
        <div class="text-center">
            <h3>Rekomendasi</h3>
            <h5>Temukan gelanggang olahraga sesuai dengan keinginanmu</h5>
        </div>
        <div class="row">
            @foreach($gors as $gor)
            <div class="col-md-4 gor-card">
                <a href="/gor/{{$gor['id']}}">
                <div class="card zoom">
                    <img src="{{asset('assets/GOR-1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$gor['nama']}}</h5>
                        <p>Lokasi : {{$gor['alamat_lengkap']}}, {{$gor['kota']}}</p>
                        <p>Jam Buka : {{date('H:i', strtotime($gor['open_hour']))}}<br />
                            Jam Tutup : {{date('H:i', strtotime($gor['close_hour']))}}</p>
                            <p>Harga : Rp. Rp. {{number_format($gor['harga_per_jam'], 0, ".", ".")}}</p>
                    </div>
                </div>
            </a>
            </div>
            @endforeach
        </div>
    </div>
        {{-- Cari --}}
    <div class="green-bg py-4">
        
        <div class="container">
            <div class="text-center">
                <h3>Cari berdasarkan</h3>
            </div>
            <ul class="nav nav-tabs justify-content-center" id="groupTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="kategori-tab" data-toggle="pills" href="#kategori" role="tab" aria-controls="kategori" aria-selected="true">Kategori</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="kota-tab" data-toggle="pills" href="#kota" role="tab" aria-controls="kota" aria-selected="false">Kota</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="populer-tab" data-toggle="pills" href="#populer" role="tab" aria-controls="populer" aria-selected="false">Populer</a>
                </li>
            </ul>
            
            <div class="tab-content">
                <div class="tab-pane active kategori" id="kategori" role="tabpanel" aria-labelledby="kategori">
                    <div class="row justify-content-center">
                        <div class="col-s6 col-md-3">
                            <a href="/gor/kategori/5">
                                <img class="icon-olahraga" src="{{asset("assets/badmintonicon.png")}}" alt="">
                                <p style="text-align:center" for="">test</p>
                            </a>
                        </div>
                        <div class="col-s6 col-md-3">
                            <a href="/gor/kategori/1">
                                <img class="icon-olahraga" src="{{asset("assets/basketicon.png")}}" alt="">
                            </a>
                        </div>
                        <div class="col-s6 col-md-3">
                            <a href="/gor/kategori/4">
                                <img class="icon-olahraga" src="{{asset("assets/soccericon.png")}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="kota" role="tabpanel" aria-labelledby="kota">
                    <div class="row justify-content-center">
                        <div class="col-s6 col-md-4">
                            <a href="/gor/kategori/5">
                                <img class="icon-olahraga" src="https://img.icons8.com/bubbles/2x/city.png" alt="">
                                <p style="text-align:center" for="">Jakarta</p>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/gor/kategori/5">
                                <img class="icon-olahraga" src="https://img.icons8.com/bubbles/2x/city.png" alt="">
                                <p style="text-align:center" for="">Bogor</p>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/gor/kategori/5">
                                <img class="icon-olahraga" src="https://img.icons8.com/bubbles/2x/city.png" alt="">
                                <p style="text-align:center" for="">Bandung</p>
                            </a>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-s6 col-md-4">
                            <a href="/gor/kategori/5">
                                <img class="icon-olahraga" src="https://img.icons8.com/bubbles/2x/city.png" alt="">
                                <p style="text-align:center" for="">Yogyakarta</p>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/gor/kategori/5">
                                <img class="icon-olahraga" src="https://img.icons8.com/bubbles/2x/city.png" alt="">
                                <p style="text-align:center" for="">Bekasi</p>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/gor/kategori/5">
                                <img class="icon-olahraga" src="https://img.icons8.com/bubbles/2x/city.png" alt="">
                                <p style="text-align:center" for="">Semarang</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="populer" role="tabpanel" aria-labelledby="populer">
                    
                </div>
            </div>
            
        </div>
    </div>
    <div class="text-center">
        <div class="mt-5 mb-5">
            <h3>Mengapa Anda Harus Memilih Kami?</h3>
            <p class="mt-4">Dengan Let'sGOR kami akan membantu anda untuk menemukan tempat olahraga sesuai keinginan dan kebutuhuan anda!</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div>
                    <div class="mb-3">
                        <img class="icon-size" src="{{asset("assets/pin.svg")}}" alt="">
                    </div>
                    <div>
                        <p>
                            Temukan apa yang anda inginkan
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <div class="mb-3">
                        <img class="icon-size" src="{{asset("assets/stopwatch.svg")}}" alt="">
                    </div>
                    <div>
                        <p>
                            Pesan tempat dengan ceepat dan mudah
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <div class="mb-3">
                        <img class="icon-size" src="{{asset("assets/square-blocks-outline.svg")}}" alt="">
                    </div>
                    <div>
                        <p>
                            Kemudahan dalm menggunakan informasi
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function(){
        $('#groupTab a').on('click', function (e) {
            e.preventDefault()
            $(this).tab('show')
            });
        console.log('asdasd');
    });
</script>
@endsection