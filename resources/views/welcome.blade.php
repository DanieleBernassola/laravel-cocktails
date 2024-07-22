@extends('layouts.app')

@section('content')
<div class="homepage">

    <div class="jumbo d-flex align-items-center justify-content-center">
        <span>DISCOVER OUR COCKTAILS</span>
    </div>

    <div class="container py-5">

        <div class="row g-5">

            @foreach ($cocktails as $cocktail)

                <div class="col-4">
                    <div class="card position-relative h-100 border-0 grow">
                        @if ($cocktail->is_alcoholic)
                            <span class="alcoholic p-1 rounded z-3 text-danger">ALCOHOLIC</span>
                        @endif
                        <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/378f6866713031.5b1fb686824f6.jpg" class="card-img" alt="cocktail">
                        <div class="card-img-overlay">
                            <h5 class="card-title pt-5 text-white">{{ $cocktail->name }}</h5>
                        </div>
                    </div>
                </div>

            @endforeach
            
        </div>
    </div>
</div>

    

@endsection