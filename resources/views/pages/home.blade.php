@extends('base')

@section('title')
    {{ config('app.name') }}
@endsection

@section('content')
    <main class="main">
        <img class="img-white" src="/images/cameroun.png" alt="cameroun">
        <h1>Hello from Douala</h1>
        <h3>It's currently <b>{{ date('h:i A') }}</b></h3>
    </main>
@endsection
