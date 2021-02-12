@extends('layouts.home')

@section('title')
Prodotti
@endsection

@section('prodotti')
<main>
<h2>LE LUNGHE</h2>
<div class="lunghe">
    @foreach($data as $products)
    @if($products['tipo']== 'lunga')
        <div class="card">
            <img src="{{ $products['src'] }}" alt=""> 
        </div>
    @endif
    @endforeach
</div>
</main>
@endsection
