@extends('layouts.app')

@section('main-home')

    <div class="container my-5">

        <h1 class="text-center my-5">Cocktails</h1>

        <div class="row g-3">

            @for ($i = 0; $i < 6; $i++)
                <div class="col-4">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endfor
            
        </div>
    </div>

@endsection