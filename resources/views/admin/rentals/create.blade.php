@extends('layout.mainlayout_admin')

@section('content')
<div class="page-wrapper page-settings">
    <div class="content">
        @component('admin.components.pageheader')
            @slot('title') Add Rental @endslot
        @endcomponent
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.rentals.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="user_id">User</label>
                        <select name="user_id" id="user_id" class="form-control">
                            <option value="" disabled selected>Select User</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="car_id">Car</label>
                        <select name="car_id" id="car_id" class="form-control">
                            <option value="" disabled selected>Select Car</option>
                            @foreach ($cars as $car)
                                <option value="{{ $car->id }}">{{ $car->make }} {{ $car->model }}</option>
                            @endforeach
                        </select>
                        @error('car_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="start_date">Start Date</label>
                        <input type="date" name="start_date" id="start_date" class="form-control" value="{{ old('start_date') }}">
                        @error('start_date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="end_date">End Date</label>
                        <input type="date" name="end_date" id="end_date" class="form-control" value="{{ old('end_date') }}">
                        @error('end_date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Add Rental</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
