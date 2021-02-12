@extends('layouts.home')

@section('title')
Prodotti
@endsection

@section('prodotti')
<main>
<h2>LE LUNGHE</h2>
<div class="card-container">
    @foreach($data as $products)
    @if($products['tipo']== 'lunga')
        <div class="card">
            <img src="{{ $products['src'] }}" alt=""> 
            <div class="overlay">       
            <img src="{{ asset('/img/icon.svg') }}" alt="">
                <p>{{ $products['titolo'] }}</p>
                <p>{{ $products['cottura'] }}</p>
            </div>
        </div>
    @endif
    @endforeach
</div>
<h2>LE CORTE</h2>
<div class="card-container">
    @foreach($data as $products)
    @if($products['tipo']== 'corta')
        <div class="card">
            <img src="{{ $products['src'] }}" alt=""> 
            <div class="overlay">       
                <img src="{{ asset('/img/icon.svg') }}" alt="">
                <p>{{ $products['titolo'] }}</p>
                <p>{{ $products['cottura'] }}</p>
            </div>
        </div>
    @endif
    @endforeach
</div>
<h2>LE CORTISSIME</h2>
<div class="card-container">
    @foreach($data as $products)
    @if($products['tipo']== 'cortissima')
        <div class="card">
            <img src="{{ $products['src'] }}" alt=""> 
            <div class="overlay">       
            <img src="{{ asset('/img/icon.svg') }}" alt="">
                <p>{{ $products['titolo'] }}</p>
                <p>{{ $products['cottura'] }}</p>
            </div>
        </div>
    @endif
    @endforeach
</div>
</main>
@endsection
