@extends('layout.mainlayout_admin')

@section('content')
<div class="page-wrapper page-settings">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <h4>Manage Reports</h4>
                <a href="{{ route('admin.reports.create') }}" class="btn btn-primary mb-3">Add Report</a>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Car</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Report Details</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $report)
                            <tr>
                                <td>{{ $report->id }}</td>
                                <td>{{ $report->user->name }}</td>
                                <td>{{ $report->car->make }} {{ $report->car->model }}</td>
                                <td>{{ $report->start_date }}</td>
                                <td>{{ $report->end_date }}</td>
                                <td>{{ $report->report_details }}</td>
                                <td>
                                    <a href="{{ route('admin.reports.edit', $report->id) }}" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.reports.destroy', $report->id) }}" method="POST" style="display:inline-block;">
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
    </div>
</div>
@endsection
