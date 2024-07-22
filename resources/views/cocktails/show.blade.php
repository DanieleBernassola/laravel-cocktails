@extends('layouts.backoffice')

@section('show-home')
    <div class="container my-5">

        <h2 class="text-center my-5">Cocktail</h2>

        <div class="row g-3">

            @foreach ($cocktails as $cocktail)
                <div class="col-4">
                    <div class="card position-relative h-100">
                        @if ($cocktail->is_alcoholic == 1)
                            <span class="alcoholic p-1 rounded">ALCOHOLIC</span>
                        @endif
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyATogFnv4VSmjGKaiJlEl_GY6bddoxE9hRQ&s"
                            class="card-img-top" alt="cocktail">
                        <div class="card-body">
                            <h5 class="card-title">{{ $cocktail->name }}</h5>
                            <p class="card-text">Ingredients: {{ $cocktail->ingredients }}</p>
                            <p class="card-text">Price: &euro;{{ $cocktail->price }}</p>
                            <p class="card-text">Gradation: {{ $cocktail->gradation }}&percnt; </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
