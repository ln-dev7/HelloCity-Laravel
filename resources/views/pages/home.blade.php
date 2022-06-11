@extends('base')

@section('title')
    {{ config('app.name') }}
@endsection

@section('content')
    <main class="main">
        <h1>Hello from Douala</h1>
        <h3>It's currently <b>{{ date('h:i A') }}</b></h3>
    </main>
@endsection
