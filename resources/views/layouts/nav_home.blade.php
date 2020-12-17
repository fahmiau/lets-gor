<div id="header">
  <div class="bg-img">
      <nav>
      @if(Session::has('token_api'))
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