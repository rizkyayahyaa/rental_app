@extends('layout.mainlayout')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Book Car: {{ $car->name }}</h2>

    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Car Photo -->
    <div class="text-center mb-4">
        @if($car->photo)
            <img src="{{ asset('storage/' . $car->photo) }}" alt="{{ $car->name }}" class="img-fluid rounded" style="max-height: 300px; object-fit: cover;">
        @else
            <img src="{{ URL::asset('/assets/img/no-image.png') }}" alt="No Image" class="img-fluid rounded" style="max-height: 300px; object-fit: cover;">
        @endif
    </div>

    <!-- Booking Form -->
    <form action="{{ route('book.handle', $car->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" id="start_date" name="start_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" id="end_date" name="end_date" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Book Now</button>
    </form>
</div>
@endsection
