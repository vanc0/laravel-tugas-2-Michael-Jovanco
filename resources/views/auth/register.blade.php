<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
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
            gap: 24px;
        }
        .logo-jadwal {
            width: 80px;
            height: 80px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #f53003;
            margin-bottom: 8px;
            text-align: center;
        }
        .form-group {
            width: 100%;
            margin-bottom: 16px;
        }
        label {
            font-size: 15px;
            font-weight: 500;
            color: #333;
            margin-bottom: 4px;
            display: block;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            font-size: 15px;
            margin-top: 4px;
            margin-bottom: 2px;
            background: #fafafa;
        }
        input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus {
            outline: none;
            border-color: #f53003;
        }
        .error-message {
            color: #d41e00;
            font-size: 13px;
            margin-top: 2px;
        }
        .btn-register {
            background: #f53003;
            color: #fff;
            border: none;
            border-radius: 6px;
            width: 100%;
            padding: 12px 0;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            margin-top: 8px;
            transition: background 0.2s;
        }
        .btn-register:hover {
            background: #d41e00;
        }
        .login-link {
            display: block;
            text-align: center;
            margin-top: 12px;
            color: #f53003;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.2s;
        }
        .login-link:hover {
            color: #d41e00;
        }
    </style>
</head>
<body>
    <div class="center-box">
        <div class="logo-jadwal">
            <!-- Simple "jadwal" calendar logo SVG -->
            <img src="{{ asset('images/logo_orange.png') }}" alt="" style="width: 150px; height: 150px;">
        </div>
        <div class="form-title">Register</div>
        <form method="POST" action="{{ route('register') }}" style="width:100%;">
            @csrf
            <div class="form-group">
                <label for="name">{{ __('Name') }}</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                @if ($errors->has('name'))
                    <div class="error-message">{{ $errors->first('name') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                @if ($errors->has('email'))
                    <div class="error-message">{{ $errors->first('email') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="new-password">
                @if ($errors->has('password'))
                    <div class="error-message">{{ $errors->first('password') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                @if ($errors->has('password_confirmation'))
                    <div class="error-message">{{ $errors->first('password_confirmation') }}</div>
                @endif
            </div>
            <button type="submit" class="btn-register">{{ __('Register') }}</button>
        </form>
        <a class="login-link" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>
    </div>
</body>
</html>
