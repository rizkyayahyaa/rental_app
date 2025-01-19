@extends('layout.mainlayout_admin')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <h4>Manage Rentals</h4>
            <a href="{{ route('admin.rentals.create') }}" class="btn btn-primary">Add New Rental</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Car</th>
                    <th>User</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rentals as $rental)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $rental->car->name }}</td>
                    <td>{{ $rental->user->name }}</td>
                    <td>{{ $rental->start_date }}</td>
                    <td>{{ $rental->end_date }}</td>
                    <td>
                        <a href="{{ route('admin.rentals.edit', $rental->id) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.rentals.destroy', $rental->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
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
@endsection
