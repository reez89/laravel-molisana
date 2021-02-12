@extends('layouts.app')
@section('title')
Home
@endsection
@section('content')
<header>
    <img src="{{ asset('img/logo.png') }}" alt="">
    <nav>
        <a href="/">HOME</a>
        <a href="prodotti">PRODOTTI</a>
        <a href="contatti">CONTATTI</a>
    </nav>
</header>
@endsection
