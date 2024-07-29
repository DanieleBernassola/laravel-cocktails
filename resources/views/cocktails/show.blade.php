@extends('layouts.backoffice')

@section('content')
    <div class="container">
        <div class="row">
            <h3 class="text-blue my-5">Informazioni cocktail</h3>
            <div class="col mb-5">
                <h3 class="text-blue">Nome: {{ $cocktail->name }}</h3>
                <p class="text-blue">Ingredienti: {{ $cocktail->ingredients }}</p>
                <p class="text-blue">Prezzo: {{ $cocktail->price }} $</p>
                @if ($cocktail->is_alcoholic)
                    <p class="text-danger">ALCOLICO</p>
                    <p class="text-danger">Gradazione alcolica: {{ $cocktail->gradation }}</p>
                    @else
                    <p class="text-purple">Analcolico</p>
                @endif

                @foreach ($cocktail_ingredients as $cocktail_ingredient)
                <p class="text-dark">{{ $cocktail_ingredient->cocktail_id }}</p>
                    
                @endforeach

                <a href="{{ route('cocktails.index') }}" class="btn btn-primary rounded-1">
                    <i class="fa-solid fa-list" style="color: #ffffff;"></i>
                </a>
                <a href="{{ route('cocktails.edit', $cocktail->id) }}" class="btn btn-warning rounded-1">
                    <i class="fa-solid fa-pencil" style="color: #ffffff;"></i>
                </a>
                <form action="{{ route('cocktails.destroy', $cocktail->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger rounded-1">
                        <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                    </button>
                </form>
            </div>
        </div>

    </div>
    </div>
@endsection
