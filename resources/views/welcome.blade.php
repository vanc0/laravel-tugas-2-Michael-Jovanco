<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        body {
            background: linear-gradient(135deg, #f8f8f8 0%, #f2e9e4 100%);
            min-height: 100vh;
            margin: 0;
            font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .center-box {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.07);
            width: 350px;
            padding: 40px 32px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 32px;
        }
        .logo-jadwal {
            width: 80px;
            height: 80px;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 12px 0;
            border-radius: 6px;
            border: none;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.2s, color 0.2s;
            text-align: center;
            text-decoration: none;
        }
        .btn-login {
            background: #f53003;
            color: #fff;
            margin-bottom: 12px;
        }
        .btn-login:hover {
            background: #d41e00;
        }
        .btn-register {
            background: #fff;
            color: #f53003;
            border: 2px solid #f53003;
        }
        .btn-register:hover {
            background: #f53003;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="center-box">
        <div class="logo-jadwal">
            <!-- Simple "jadwal" calendar logo SVG -->
            <img src="{{ asset('images/logo_orange.png') }}" alt="" style="width: 150px; height: 150px;">
        </div>
        <a href="{{ route('login') }}" class="btn btn-login">Login</a>
        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn btn-register">Register</a>
        @endif
    </div>
</body>
</html>
