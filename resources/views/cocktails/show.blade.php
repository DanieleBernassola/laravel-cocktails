@extends('layouts.backoffice')

@section('show-home')
    <div class="container my-5">

        <h2 class="text-center my-5">Cocktail</h2>

        <h3>Nome: {{ $cocktail->name }}</h3>
        <p>Ingredienti: {{ $cocktail->ingredients }}</p>
        <p>Prezzo: {{ $cocktail->price }}</p>
        @if ($cocktail->is_alcoholic)
            <p>ALCOLICO</p>
            <p>Gradazione alcolica: {{ $cocktail->gradation }}</p>
        @endif

        <a href="{{ route('cocktails.index') }}">Torna all'elenco</a>
        <a href="{{ route('cocktails.edit', $cocktail->id) }}">Modifica</a>

    </div>
    </div>
@endsection
