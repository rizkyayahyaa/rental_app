@extends('layout.mainlayout_admin')

@section('content')
<div class="page-wrapper page-settings">
    <div class="content">
        @component('admin.components.pageheader')
            @slot('title') Edit Booking @endslot
        @endcomponent
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.bookingcustomer.update', $booking->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input type="date" id="start_date" name="start_date" class="form-control" value="{{ $booking->start_date }}" required>
                        @error('start_date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input type="date" id="end_date" name="end_date" class="form-control" value="{{ $booking->end_date }}" required>
                        @error('end_date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update Booking</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
