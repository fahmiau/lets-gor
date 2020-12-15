<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sementara</title>
</head>
<body>
    <h1>Nanti ubah mi bikin file baru aja buat view nya</h1>
        @if($message = Session::get('error'))
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @endif
    <form action="/login" method="POST">
        @csrf
        <input type="text" name="email" placeholder="email"><br>
        <input type="password" name="password" placeholder="password"><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>