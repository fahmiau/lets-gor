<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Sementara</title>
</head>
<body>
    <h1>Nanti ubah mi bikin file baru aja buat view nya</h1>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors as $key => $error)
                {{ $error[0] }} <br/>
                @endforeach
            </div>
        @endif
    <form action="/register" method="POST">
    @csrf
        <input type="text" name="name" placeholder="name"><br>
        <input type="email" name="email" placeholder="email"><br>
        <input type="text" name="noHP" placeholder="no HP"><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="password" name="c_password" placeholder="confirm password"><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>