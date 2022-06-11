<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', env('APP_NAME'))</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <style>
        *,
        *:before,
        *:after {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            scroll-behavior: smooth;
            font-family: 'Overpass', sans-serif;
            color: #e7e8f2;
            font-weight: 300;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #f9322c;
        }

        b {
            font-weight: 400;
            color: #f9322c;
        }

        html,
        body {
            height: 100%;
        }

        body {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #171923;
            overflow: hidden;
        }

        .circle {
            position: absolute;
            top: -60%;
            width: 500px;
            height: 500px;
            background: #1A1723;
            border: 2px solid #f9322c;
            border-radius: 50%;
        }

        .button{
            display: inline;
            position: absolute;
            border: none;
            background: transparent;
            background: #fff;
            left: 20px;
            bottom: 60px;
        }

        .button span{
            display: inline-block;
            font-size: 16px;
            color: #fff;
            font-weight: 500;
            padding: 14px;
            background: #f9322c;
            transition: .3s ease;
        }

        .button span:hover{
            transform: translate(8px, -8px)
        }

        .header {
            position: absolute;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            z-index: 2;
        }

        .header a {
            text-decoration: underline;
            font-size: 18px;
            padding: 10px;
        }

        .main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .main h1 {
            margin-bottom: 10px;
            font-weight: 600;
        }

        .main h3 {
            color: #d7d7dc;
        }

        .main img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .img-orange{
            border: 2px solid #f9322c;
        }

        .img-white{
            border: 2px solid #d7d7dc;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            border-top: 1px solid #D7D7DC43;
        }
    </style>
</head>

<body>
    <header class="header">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
    </header>

    <div class="circle"></div>
    <a href="https://github.com/ln-dev7/HelloCity-Laravel" class="button"><span>Laravel Application</span></a>

    @yield('content')

    <footer class="footer">
        <p>
            @if (Route::is('home'))
                LN -
            @endif
            &copy; Copyright {{ date('Y') }}
        </p>
    </footer>
</body>

</html>
