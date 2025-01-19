@extends('layout.mainlayout_admin')

@section('content')
<div class="page-wrapper page-settings">
    <div class="content">
        <div class="page-header">
            <h4>Manage Cars</h4>
            <a href="{{ route('admin.cars.create') }}" class="btn btn-primary">Add New Car</a>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive table-div">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Model</th>
                                <th>Year</th>
                                <th>Price</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cars as $car)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $car->name }}</td>
                                    <td>{{ $car->model }}</td>
                                    <td>{{ $car->year }}</td>
                                    <td>${{ number_format($car->price, 2) }}</td>
                                    <td>
                                        @if($car->photo)
                                            <img src="{{ asset('storage/' . $car->photo) }}" alt="{{ $car->name }}" width="100">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ route('admin.cars.edit', $car->id) }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.cars.destroy', $car->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this car?')">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
