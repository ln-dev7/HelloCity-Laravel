@extends('base')

@section('title', 'Hello City')

@section('content')
<main class="main">
    <h1>Hello from Camerun</h1>
    <h3>It's currently <b>{{ date('h:i A') }}</b></h3>
</main>
@endsection
