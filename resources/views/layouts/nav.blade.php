<nav class="navbar navbar-expand-lg navbar-light green-bg-dark">
  <a class="navbar-brand text-light" href="#">Let's GOR</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      @if(Session::has('token_api')))
        {{-- <ul class="nav justify-content-end"> --}}
          <li class="nav-item">
            <a class="nav-link text-light" href="#">{{session('name')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/logout">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/logout">History</a>
          </li>
        {{-- </ul> --}}
        @else
        {{-- <ul class="nav justify-content-end"> --}}
          <li class="nav-item">
            <a class="nav-link text-light" href="/register">Daftar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/login">Masuk</a>
          </li>
        {{-- </ul> --}}
      @endif
    </ul>
    <form class="form-inline my-2 my-lg-0">
      @csrf
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-light" type="submit">Search</button>
    </form>
  </div>
</nav>