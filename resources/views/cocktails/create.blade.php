@extends('layouts.backoffice')
    @section('content')

    <div class="container my-5">
        <div class="row g-3">
            <h1 class="text-center my-5">Sezione per creare il tuo cocktail</h1>

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

                    <form action="{{ route('cocktails.store')}}" method="POST"> 
                        @csrf

                        <label for="name" class="form-label ">Nome: </label>
                        <input type="text" id="name" class="form-control" name="name" placeholder="Nome cocktail">
    
                        <label for="ingredients" class="form-label ">Ingredienti: </label>
                        <input type="text" id="ingredients" class="form-control" name="ingredients" placeholder="Ingredienti cocktail">
    
                        <label for="price" class="form-label ">Prezzo: </label>
                        <input type="number" id="price" class="form-control" name="price" placeholder="Nome cocktail">

                        <label for="is_alcoholic" class="form-label ">Alcolico?</label>
                        <input type="text" id="is_alcoholic" class="form-control" name="is_alcoholic" placeholder="Nome cocktail">
    
                        <label for="gradation" class="form-label ">Gradazione alcolica: </label>
                        <input type="text" id="gradation" class="form-control" name="gradation" placeholder="Nome cocktail">
                        
                        <button type="submit">Clicca qui per creare il tuo cocktail</button> 
                    </form>
            </div> 
        </div>
    </div>
    @endsection