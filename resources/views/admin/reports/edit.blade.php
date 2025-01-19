@extends('layout.mainlayout_admin')

@section('content')
<div class="page-wrapper page-settings">
    <div class="content">
        @component('admin.components.pageheader')
            @slot('title') Edit Report @endslot
        @endcomponent
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.reports.update', $report->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="user_id">User</label>
                        <select name="user_id" id="user_id" class="form-control">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ $user->id == $report->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="car_id">Car</label>
                        <select name="car_id" id="car_id" class="form-control">
                            @foreach ($cars as $car)
                                <option value="{{ $car->id }}" {{ $car->id == $report->car_id ? 'selected' : '' }}>{{ $car->make }} {{ $car->model }}</option>
                            @endforeach
                        </select>
                        @error('car_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="start_date">Start Date</label>
                        <input type="date" name="start_date" id="start_date" class="form-control" value="{{ $report->start_date }}">
                        @error('start_date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="end_date">End Date</label>
                        <input type="date" name="end_date" id="end_date" class="form-control" value="{{ $report->end_date }}">
                        @error('end_date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="report_details">Report Details</label>
                        <textarea name="report_details" id="report_details" class="form-control">{{ $report->report_details }}</textarea>
                        @error('report_details')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Update Report</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
