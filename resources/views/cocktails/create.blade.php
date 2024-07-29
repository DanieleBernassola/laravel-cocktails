@extends('layouts.backoffice')
<<<<<<< HEAD

{{-- cocktail.create --}}
@section('content')
<div class="container my-5">
    <div class="row g-3">
        <h3 class="text-blue">Creare il tuo cocktail</h3>
        <hr class="text-purple">

        <div class="col">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>         
            @endif
        </div>

        <form action="{{ route('cocktails.store')}}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="name" class="text-blue">Cocktail Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="ex: Mojito" required>
            </div>

            <div class="form-group mb-3">
                <label for="ingredients" class="text-blue">Cocktail's ingredients</label>
                <textarea class="form-control" id="ingredients" name="ingredients" placeholder="ex: Lemon, Tequila, Sugar"></textarea>
            </div>

            <div class="form-group mb-3">
                <label for="price" class="text-blue">Price</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="ex: 5.99" required>
            </div>

            <div class="form-group mb-3">
                <label for="gradation" class="text-blue">Gradation</label>
                <input type="number" step="0.01" class="form-control" id="gradation" name="gradation" placeholder="ex: 5.00" required>
            </div>

            <div class="form-group mb-3">
                <label for="is_alcoholic" class="text-blue">Is Alcoholic</label>
                <select class="form-control" id="is_alcoholic" name="is_alcoholic" required>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class='col-md-12'>
                <button class="btn btn-primary" type="submit">Clicca qui per creare il tuo cocktail</button>
            </div>
        </form>
=======

    @section('content')
    <div class="container">
        <div class="row">

            {{-- Intestazione --}}
                <h1 class="text-center my-4">Crea il tuo cocktail personalizzato</h1>
            {{-- FINE Intestazione --}}

            {{-- Form card --}}
            <div class="col">

                {{-- Gestione errori --}}
                @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>         
                    @endif
                {{-- FINE Gestione errori --}}

                    {{-- Form --}}
                    <div class="col-7 m-auto">
                        <form action="{{ route('cocktails.store')}}" method="POST"> 
                            @csrf

                            <label for="name" class="form-label ">Nome: </label>
                            <input type="text" id="name" class="form-control mb-5" name="name" placeholder="Nome cocktail">
    
                            <label for="ingredients" class="form-label ">Ingredienti: </label>
                            <input type="text" id="ingredients" class="form-control mb-5" name="ingredients" placeholder="Ingredienti cocktail">
                            
                            <label for="price" class="form-label ">Prezzo: </label>
                            <input type="number" id="price" class="form-control mb-5" name="price" placeholder="Prezzo cocktail">

                            <label for="is_alcoholic" class="form-label ">Alcolico o analcolico?</label>
                            <select id="is_alcoholic" class="form-select mb-5" aria-label="Default select example" name="is_alcoholic">
                                <option value="" selected></option>
                                <option value="alcoholic">Alcolico</option>
                                <option value="non-alcoholic">Analcolico</option>
                            </select>
    
                            <label for="gradation" class="form-label ">Gradazione alcolica: </label>
                            <input type="text" id="gradation" class="form-control mb-5" name="gradation" placeholder="Gradazione alcolica">
                        
                            <button class="mt-4 d-block m-auto px-3 py-1" type="submit">Clicca qui per creare il tuo cocktail</button>
                        </div>
                    </form>
                    {{-- FINE Form --}}
            </div> 
            {{-- FINE Form card --}}
        </div>
>>>>>>> 775448b547451072388402f80395b32d2439a53b
    </div>
</div>
@endsection
