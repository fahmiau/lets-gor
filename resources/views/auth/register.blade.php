<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Let's GOR - Register</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="{{asset("js/bootstrap.js")}}"></script>
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("css/login.css")}}">

    
  </head>
  <body>
    @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors as $key => $error)
                {{ $error[0] }} <br/>
                @endforeach
            </div>
        @endif
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-4 col-12">
          <div id="login-container">
            <h4>Registrasi</h4>
            <form action="/register" method="POST">
              @csrf
              <div class="form-group">
                <label for="name">Nama</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="John Doe">  
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="text" name="email" id="email" placeholder="email@mail.com">  
              </div>
              <div class="form-group">
                <label for="noHP">No. HP</label>
                <input class="form-control" type="text" name="noHP" id="noHP">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password">
              </div>
              <div class="form-group">
                <label for="c_password">Confirm Password</label>
                <input class="form-control" type="password" name="c_password" id="password">
              </div>
              <button class="btn btn-primary" type="submit">Login</button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </body>
</html>