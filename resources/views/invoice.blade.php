<!-- Add SweetAlert2 CSS and JS in your main layout if not already included -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@extends('layout.mainlayout')

@section('content')
<div class="container printable mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h2>Invoice</h2>
                </div>
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <img src="{{ URL::asset('/assets/img/carss.png')}}" alt="Company Logo" class="img-fluid mb-3" width="150">
                        <h4 class="card-title">Booking Confirmation</h4>
                    </div>

                    <div class="mb-3">
                        <h5>Car Details</h5>
                        <p><strong>Car:</strong> {{ $booking->car->name }}</p>
                        <p><strong>Start Date:</strong> {{ $booking->start_date }}</p>
                        <p><strong>End Date:</strong> {{ $booking->end_date }}</p>
                    </div>

                    <div class="mb-3">
                        <h5>User Details</h5>
                        <p><strong>User:</strong> {{ $booking->user->name }}</p>
                        <p><strong>Email:</strong> {{ $booking->user->email }}</p>
                    </div>

                    <div class="text-center mt-4">
                        <button onclick="window.print()" class="btn btn-primary no-print">Print Invoice</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SweetAlert2 for booking success -->
@if(session('success'))
    <script>
        Swal.fire({
            title: 'Success!',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
@endif
@endsection
