@extends('layouts.backoffice')

<<<<<<< HEAD
{{-- cocktail.index --}}

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3">
            <h3 class="text-blue text-uppercase">cocktails list</h3>
            <hr class="text-purple">
        </div>
        <div class="col-md-12">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-uppercase text-blue ">name</th>
                    <th class="text-uppercase text-blue">Alcoholic</th>
                    <th class="text-uppercase text-blue">price</th>
                    <th class="text-uppercase -center text-blue">action</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($cocktails as $cocktail)
                    <tr>
                        <td>
                            <div>
                                <p class=" fw-bolder text-purple">{{ $cocktail->name }}</p>
                            </div>
                        </td>
                        <td>
                            <div>
                                @if ($cocktail->is_alcoholic == 0)
                                    <p class="text-danger"> is alcoholic</p>
                                    @else
                                    <p class="text-blue"> is not alcoholic</p>
                                @endif
                            </div>
                        </td>
                        <td>
                            <div>
                                <p class=" fw-bolder text-purple">{{ $cocktail->price }}</p>
                            </div>
                        </td>
                        <td>
                            <td class="text-center">
                            <a href="{{ route('cocktails.show', $cocktail->id) }}" class="btn btn-info rounded-1">
                                <i class="fa-regular fa-eye" style="color: #ffffff;"></i>
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
                        </td> 
                    </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</div>


@endsection
=======
    @section('content')
        <p>Sono l'index</p>
    @endsection
>>>>>>> 775448b547451072388402f80395b32d2439a53b
