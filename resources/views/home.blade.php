<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello City</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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

        .main{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .main h1{
            margin-bottom: 10px;
            font-weight: 600;
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
        }
    </style>
</head>

<body>
    <main class="main">
        <h1>Hello from Camerun</h1>
        <h3>It's currently 08:00 AM.</h3>
    </main>
    <footer class="footer">
        <p>&copy; Copyright 2022 - <a href="/about"> About us</a></p>
    </footer>
</body>

</html>
