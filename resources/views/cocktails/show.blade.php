@extends('layouts.backoffice')

@section('show-home')
    <div class="container my-5">

        <h2 class="text-center my-5">Cocktail</h2>

        <a href="{{ route('cocktails.index') }}">Torna all'elenco</a>
        <a href="{{ route('cocktails.edit', $cocktails->id) }}">Modifica</a>

    </div>
    </div>
@endsection
