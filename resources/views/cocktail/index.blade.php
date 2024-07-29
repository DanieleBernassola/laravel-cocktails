@extends('layouts.backoffice')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3">
            <h3 class="text-blue text-uppercase">cocktails list</h3>
            <hr class="text-purple">
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    {{-- <th class="text-uppercase">#</th> --}}
                    <th class="text-uppercase text-blue ">name</th>
                    <th class="text-uppercase text-blue">Alcoholic</th>
                    <th class="text-uppercase text-blue">price</th>
                    <th class="text-uppercase text-blue">action</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($cocktails as $cocktail)
                    <tr>
                        {{-- <td>
                            <div>
                                <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-100" style="max-width: 50px; min-width: 50px;">
                            </div>
                        </td> --}}
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
                        {{-- <td class="text-center">
                            <a href="{{ route('projects.show', $project->id) }}" class="btn btn-info rounded-1">
                                <i class="fa-regular fa-eye" style="color: #ffffff;"></i>
                            </a>
                            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning rounded-1">
                                <i class="fa-solid fa-pencil" style="color: #ffffff;"></i>
                            </a>
                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger rounded-1">
                                    <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                                </button>
                            </form>
                        </td> --}}
                    </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</div>


@endsection