<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,700" rel="stylesheet" type="text/css">
    <link href="https://file.myfontastic.com/LmgehMZSnDyZFbciU7zWK4/icons.css" rel="stylesheet">

    <!-- Styles -->
    {{--<link rel="stylesheet" type="text/css" href="css/app.css">--}}
    <link rel="stylesheet" type="text/css" href="css/my-login-css.css">
</head>
<body>
<div class="content">
    <div class="header-w3l">
        <h1>Datos de Acceso</h1>
    </div>
    <div class="main-content-agile">
        <div class="sub-main-w3">
            <form  role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <input placeholder="Usuario" name="email" id="email" class="user" type="text" required="" required autofocus><br>
                <input  placeholder="Contraseña" name="password" id="password" class="pass" type="password" required=""><br>
                <button type="submit"><span class="mrc-locker-streamline-unlock"></span></button>
            </form>
            <p class="forgot"><a href="{{ route('password.request') }}">¿Olvidó su contraseña?</a></p>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
