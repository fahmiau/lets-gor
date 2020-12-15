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
        <link rel="stylesheet" href="{{asset("css/home.css")}}">

        <!-- Styles -->
        
    </head>
    <body>
        {{-- Header --}}
        <div id="header">
            <div class="bg-img">
                <nav>
                @if(Session::has('token_api')))
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">{{session('name')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/logout">Logout</a>
                        </li>
                    </ul>
                    @else
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/register">Daftar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/login">Masuk</a>
                        </li>
                    </ul>
                @endif
                </nav>
                <div class="container">
                    <h1>Let's Gor!</h1>
                    <h4>Temukan GOR yang Kamu Inginkan!</h4>
                    
                    <div class="row justify-content-md-center">
                        <div class="col-md-6">
                            <form action="">
                                @csrf
                                <div class="input-group flex-nowrap">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><img src="{{asset('/icons/geo-alt.svg')}}" alt="" width="20px" height="20px"></span>
                                    </div>
                                    <div class="input-group-prepend">
                                        <select name="lokasi" id="lokasi" class="form-control">
                                            <option selected>Lokasi</option>
                                            <option value="bandung">Bandung</option>
                                            <option value="jakarta">Jakarta</option>
                                            <option value="depok">Depok</option>
                                            <option value="bekasi">Bekasi</option>
                                        </select>
                                    </div>
                                       <input type="text" class="form-control" placeholder="Nama GOR" name="nama-gor">
                                    {{-- <div class="input-group-append"> --}}
                                        <button class="btn btn-light" type="submit">Cari</button>
                                    {{-- </div> --}}
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        {{-- Rekomendasi --}}
        <div id="rekomendasi" class="container">
            <div class="text-center">
                <h3>Rekomendasi</h3>
                <h5>Temukan gelanggang olahraga sesuai dengan keinginanmu</h5>
            </div>
            <div class="row">
                <div class="col-md-4 gor-card">
                    <div class="card">
                        <img src="{{asset('assets/GOR-1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gor Mekarsari</h5>
                            <p>Lokasi :</p>
                            <p>Jam Buka :<br />
                            Jam Tutup :</p>
                            <p>Status Lapangan : x digunakan dari y<br />
                            Kisaran harga :</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gor-card">
                    <div class="card">
                        <img src="{{asset('assets/GOR-1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gor-card">
                    <div class="card">
                        <img src="{{asset('assets/GOR-1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gor-card">
                    <div class="card">
                        <img src="{{asset('assets/GOR-1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
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
                    <a class="nav-link active" id="kategori" data-toggle="tab" href="#kategori" role="tab" aria-controls="kategori" aria-selected="true">Kategori</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="kota" data-toggle="tab" href="#kota" role="tab" aria-controls="kota" aria-selected="false">Kota</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="populer" data-toggle="tab" href="#populer" role="tab" aria-controls="populer" aria-selected="false">Populer</a>
                </li>
            </ul>
            
            <div class="tab-content">
                <div class="tab-pane active kategori" id="kategori" role="tabpanel" aria-labelledby="kategori">
                    <div class="row">
                        <div class="col-s6 col-md-3">
                            <a href="">
                                <img class="icon-olahraga" src="{{asset("assets/badmintonicon.png")}}" alt="">
                            </a>
                        </div>
                        <div class="col-s6 col-md-3">
                            <a href="">
                                <img class="icon-olahraga" src="{{asset("assets/basketicon.png")}}" alt="">
                            </a>
                        </div>
                        <div class="col-s6 col-md-3">
                            <a href="">
                                <img class="icon-olahraga" src="{{asset("assets/tennisicon.png")}}" alt="">
                            </a>
                        </div>
                        <div class="col-s6 col-md-3">
                            <a href="">
                                <img class="icon-olahraga" src="{{asset("assets/soccericon.png")}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="kota" role="tabpanel" aria-labelledby="kota">
                    
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
    <script>
        $(document).ready(function(){
            $('#groupTab a').on('click', function (e) {
                e.preventDefault()
                $(this).tab('show')
                });
            console.log('asdasd');
        });
    </script>
</html>