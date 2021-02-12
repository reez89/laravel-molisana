@extends('layouts.app')
@section('title')
Home
@endsection
@section('content')
<header>
    <img src="{{ asset('img/logo.png') }}" alt="">
</header>
<nav>
    <a href="/">HOME</a>
    <a href="prodotti">PRODOTTI</a>
    <a href="contatti">CONTATTI</a>
</nav>
@endsection
