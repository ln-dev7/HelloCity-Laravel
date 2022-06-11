<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About | Hello City</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@400;600;700&display=swap" rel="stylesheet">

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

        a{
            text-decoration: none;
            color: #f9322c;
        }

        b{
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
        }

        .header{
            position: absolute;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        .header a{
            text-decoration: underline;
            font-size: 18px;
            padding: 10px;
        }

        .main{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .main h3 {
            color: #d7d7dc;
        }

        .footer{
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
        <a href="/">Home</a>
        <a href="/about">About</a>
    </header>
    <main class="main">
        <h2>Coded by <a href="https://lndev.me">LN Dev</a></h2>
    </main>
    <footer class="footer">
        <p>&copy; Copyright {{date('Y')}}</p>
    </footer>
</body>

</html>
