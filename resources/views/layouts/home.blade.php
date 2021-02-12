@extends('layouts.app')
@section('title')
Home
@endsection
@section('content')
<header>
    <img src="{{ asset('img/logo.png') }}" alt="">
</header>
<nav>
    <a href="/" class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}">HOME</a>
    <a href="prodotti" class="{{Route::currentRouteName() === 'prodotti' ? 'active' : ''}}">PRODOTTI</a>
    <a href="contatti" class="{{Route::currentRouteName() === 'contatti' ? 'active' : ''}}">CONTATTI</a>
</nav>
@endsection
