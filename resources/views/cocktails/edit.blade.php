@extends('layouts.backoffice')

{{-- cocktail.edit --}}
@section('content')
<div class="container my-5">
    <div class="row g-3">
        <h3 class="text-blue">Modifica il tuo cocktail</h3>
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

        <form action="{{ route('cocktails.update', $cocktail->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="name" class="text-blue">Cocktail Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $cocktail->name) }}" placeholder="ex: Mojito" required>
            </div>

            <div class="form-group mb-3">
                <label for="ingredients" class="text-blue">Cocktail's ingredients</label>
                <textarea class="form-control" id="ingredients" name="ingredients" placeholder="ex: Lemon, Tequila, Sugar" required>{{ old('ingredients', $cocktail->ingredients) }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="price" class="text-blue">Price</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price', $cocktail->price) }}" placeholder="ex: 5.99" required>
            </div>

            <div class="form-group mb-3">
                <label for="gradation" class="text-blue">Gradation</label>
                <input type="number" step="0.01" class="form-control" id="gradation" name="gradation" value="{{ old('gradation', $cocktail->gradation) }}" placeholder="ex: 5.00" required>
            </div>

            <div class="form-group mb-3">
                <label for="is_alcoholic" class="text-blue">Is Alcoholic</label>
                <select class="form-control" id="is_alcoholic" name="is_alcoholic" required>
                    <option value="1" {{ old('is_alcoholic', $cocktail->is_alcoholic) == 1 ? 'selected' : '' }}>Si</option>
                    <option value="0" {{ old('is_alcoholic', $cocktail->is_alcoholic) == 0 ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <div class='col-md-12'>
                <button class="btn btn-primary" type="submit">Salva le modifiche</button>
            </div>
        </form>
    </div>
</div>
@endsection
