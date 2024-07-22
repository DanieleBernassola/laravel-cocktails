@extends('layouts.backoffice')

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
    </div>
    @endsection