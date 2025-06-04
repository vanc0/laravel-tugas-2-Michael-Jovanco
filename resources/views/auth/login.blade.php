<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
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
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            font-size: 15px;
            margin-top: 4px;
            margin-bottom: 2px;
            background: #fafafa;
        }
        input[type="email"]:focus, input[type="password"]:focus {
            outline: none;
            border-color: #f53003;
        }
        .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            width: 100%;
        }
        .remember-me label {
            margin: 0 0 0 8px;
            font-size: 14px;
            color: #666;
            font-weight: 400;
        }
        .forgot-link {
            color: #f53003;
            text-decoration: none;
            font-size: 14px;
            margin-left: auto;
            transition: color 0.2s;
        }
        .forgot-link:hover {
            color: #d41e00;
        }
        .btn-login {
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
        .btn-login:hover {
            background: #d41e00;
        }
        .error-message {
            color: #d41e00;
            font-size: 13px;
            margin-top: 2px;
        }
    </style>
</head>
<body>
    <div class="center-box">
        <div class="logo-jadwal">
            <!-- Simple "jadwal" calendar logo SVG -->
            <svg width="64" height="64" viewBox="0 0 64 64" fill="none">
                <rect x="8" y="16" width="48" height="40" rx="8" fill="#f53003" opacity="0.1"/>
                <rect x="8" y="16" width="48" height="40" rx="8" stroke="#f53003" stroke-width="2"/>
                <rect x="8" y="24" width="48" height="8" fill="#f53003" opacity="0.2"/>
                <rect x="8" y="24" width="48" height="8" stroke="#f53003" stroke-width="2"/>
                <rect x="16" y="8" width="4" height="16" rx="2" fill="#f53003"/>
                <rect x="44" y="8" width="4" height="16" rx="2" fill="#f53003"/>
                <!-- Dots for days -->
                <circle cx="20" cy="36" r="2" fill="#f53003"/>
                <circle cx="32" cy="36" r="2" fill="#f53003"/>
                <circle cx="44" cy="36" r="2" fill="#f53003"/>
                <circle cx="20" cy="48" r="2" fill="#f53003"/>
                <circle cx="32" cy="48" r="2" fill="#f53003"/>
                <circle cx="44" cy="48" r="2" fill="#f53003"/>
            </svg>
        </div>
        <div class="form-title">Login</div>
        @if (session('status'))
            <div class="error-message">{{ session('status') }}</div>
        @endif
        <form method="POST" action="{{ route('login') }}" style="width:100%;">
            @csrf
            <div class="form-group">
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                @if ($errors->has('email'))
                    <div class="error-message">{{ $errors->first('email') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="current-password">
                @if ($errors->has('password'))
                    <div class="error-message">{{ $errors->first('password') }}</div>
                @endif
            </div>
            <div class="remember-me">
                <input id="remember_me" type="checkbox" name="remember">
                <label for="remember_me">{{ __('Remember me') }}</label>
                @if (Route::has('password.request'))
                    <a class="forgot-link" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
            <button type="submit" class="btn-login">{{ __('Log in') }}</button>
        </form>
    </div>
</body>
</html>
