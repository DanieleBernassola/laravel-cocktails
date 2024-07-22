@extends('layouts.backoffice')

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="text-center my-5">Informazioni cocktail</h2>
            <div class="col mb-5">
                <h2>Nome: {{ $cocktail->name }}</h2>
                <p>Ingredienti: {{ $cocktail->ingredients }}</p>
                <p>Prezzo: {{ $cocktail->price }}€</p>
                @if ($cocktail->is_alcoholic)
                    <h3>ALCOLICO</h3>
                    <p>Gradazione alcolica: {{ $cocktail->gradation }}%</p>
                @endif

                <a href="{{ route('cocktails.index') }}" class="text-decoration-none">Torna all'elenco</a>
                <a href="{{ route('cocktails.edit', $cocktail->id) }}" class="text-decoration-none">Modifica</a>
            </div>
        </div>

    </div>
    </div>
@endsection
