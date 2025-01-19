@extends('layout.mainlayout_admin')

@section('content')
<div class="page-wrapper page-settings">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive table-div">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User</th>
                                <th>SIM Number</th>
                                <th>Car</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookings as $index => $booking)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $booking->user->name }}</td>
                                    <td>{{ $booking->user->sim_number }}</td>
                                    <td>{{ $booking->car->name }}</td>
                                    <td>{{ $booking->start_date }}</td>
                                    <td>{{ $booking->end_date }}</td>
                                    <td>{{ ucfirst($booking->status) }}</td>
                                    <td>
                                        @if($booking->status == 'pending')
                                            <form action="{{ route('admin.bookingcustomer.approve', $booking->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure you want to approve this booking?')">
                                                    <i class="fas fa-check"></i> Approve
                                                </button>
                                            </form>
                                            <form action="{{ route('admin.bookingcustomer.reject', $booking->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-secondary" onclick="return confirm('Are you sure you want to reject this booking?')">
                                                    <i class="fas fa-times"></i> Reject
                                                </button>
                                            </form>
                                        @endif
                                        <a class="btn btn-warning" href="{{ route('admin.bookingcustomer.edit', $booking->id) }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.bookingcustomer.destroy', $booking->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this booking?')">
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
