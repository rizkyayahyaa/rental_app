@extends('layout.mainlayout')

@section('content')
<div class="container">

    <!-- Cars Available Section -->
    <section class="featured-categories-section my-5">
        <div class="text-center mb-4">
            <h2 class="font-weight-bold">Cars Available</h2>
            <p class="text-muted">Explore our selection of available cars for rent.</p>
        </div>
        <div class="row">
            @foreach($cars as $car)
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="service-widget service-two border rounded shadow-sm overflow-hidden h-100 d-flex flex-column">
                        <div class="service-img position-relative">
                            @if($car->photo)
                                <img class="img-fluid card-img-top" alt="{{ $car->name }}" src="{{ asset('storage/' . $car->photo) }}">
                            @else
                                <img class="img-fluid card-img-top" alt="No Image" src="{{ URL::asset('/assets/img/no-image.png') }}">
                            @endif
                        </div>
                        <div class="service-content p-3 flex-grow-1 d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="font-weight-bold">{{ $car->name }}</h3>
                                <p class="text-muted">Model: {{ $car->model }}</p>
                                <p class="font-weight-bold">Price: Rp{{ number_format($car->price, 2) }}</p>
                            </div>
                            <a href="{{ route('book.form', ['carId' => $car->id]) }}" class="btn btn-primary mt-3">Book Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- /Cars Available Section -->

    @component('components.model-popup')
    @endcomponent
    @component('components.scrollToTop')
    @endcomponent
@endsection

@push('styles')
<style>
    .service-widget {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .service-widget:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-img-top {
        object-fit: cover;
        height: 200px;
    }
</style>
@endpush
