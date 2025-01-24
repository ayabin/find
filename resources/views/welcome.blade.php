<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/scss/app.scss', 'resources/js/app.js'])
        @endif
    </head>
    <body>
        <div id="container">
            <div id="header">
                <div>LOGO</div>
                @if (Route::has('login'))
                    <nav>
                        @auth
                            <a href="{{ url('/dashboard') }}">ダッシュボード</a>
                        @else
                            <a href="{{ route('login') }}">ログイン</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">会員登録（無料）</a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
            <main>
                <div class="container">
                    .container
                </div>
            </main>
            @include('layouts.footer')
        </div>
    </body>
</html>
