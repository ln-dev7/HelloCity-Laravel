@extends('base')

@section('title', 'About | ' . config('app.name'))

@section('content')
    <main class="main">
        <img class="img-orange" src="/images/lndev.png" alt="lndev">
        <h2>Coded by <a href="https://lndev.me">LN Dev</a></h2>
    </main>
@endsection
