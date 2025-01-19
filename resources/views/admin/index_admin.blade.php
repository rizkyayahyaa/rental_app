@extends('layout.mainlayout_admin')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <!-- Widget for Users, Cars, and Bookings counts -->
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12 d-flex widget-path widget-service">
                <div class="card">
                    <div class="card-body">
                        <div class="home-user">
                            <div class="home-userhead">
                                <div class="home-usercount">
                                    <span><img src="{{ URL::asset('/admin_assets/img/icons/user.svg') }}" alt="img"></span>
                                    <h6>User</h6>
                                </div>
                            </div>
                            <div class="home-usercontent">
                                <div class="home-usercontents">
                                    <div class="home-usercontentcount">
                                        <img src="{{ URL::asset('/admin_assets/img/icons/arrow-up.svg') }}" alt="img" class="me-2">
                                        <span class="counters" data-count="{{ $users->count() }}">{{ $users->count() }}</span>
                                    </div>
                                    <h5> Currently</h5>
                                </div>
                                <div class="homegraph">
                                    <img src="{{ URL::asset('/admin_assets/img/graph/graph1.png') }}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex widget-path widget-service">
                <div class="card">
                    <div class="card-body">
                        <div class="home-user home-provider">
                            <div class="home-userhead">
                                <div class="home-usercount">
                                    <span><img src="{{ URL::asset('/admin_assets/img/icons/user-circle.svg') }}" alt="img"></span>
                                    <h6>Booking Customer</h6>
                                </div>
                            </div>
                            <div class="home-usercontent">
                                <div class="home-usercontents">
                                    <div class="home-usercontentcount">
                                        <img src="{{ URL::asset('/admin_assets/img/icons/arrow-up.svg') }}" alt="img" class="me-2">
                                        <span class="counters" data-count="{{ $bookings->count() }}">{{ $bookings->count() }}</span>
                                    </div>
                                    <h5> Currently</h5>
                                </div>
                                <div class="homegraph">
                                    <img src="{{ URL::asset('/admin_assets/img/graph/graph2.png') }}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex widget-path widget-service">
                <div class="card">
                    <div class="card-body">
                        <div class="home-user home-service">
                            <div class="home-userhead">
                                <div class="home-usercount">
                                    <span><img src="{{ URL::asset('/admin_assets/img/icons/service.svg') }}" alt="img"></span>
                                    <h6>Cars</h6>
                                </div>
                            </div>
                            <div class="home-usercontent">
                                <div class="home-usercontents">
                                    <div class="home-usercontentcount">
                                        <img src="{{ URL::asset('/admin_assets/img/icons/arrow-up.svg') }}" alt="img" class="me-2">
                                        <span class="counters" data-count="{{ $cars->count() }}">{{ $cars->count() }}</span>
                                    </div>
                                    <h5> Currently</h5>
                                </div>
                                <div class="homegraph">
                                    <img src="{{ URL::asset('/admin_assets/img/graph/graph3.png') }}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex widget-path widget-service">
                <div class="card">
                    <div class="card-body">
                        <div class="home-user home-subscription">
                            <div class="home-userhead">
                                <div class="home-usercount">
                                    <span><img src="{{ URL::asset('/admin_assets/img/icons/money.svg') }}" alt="img"></span>
                                    <h6>Reports</h6>
                                </div>
                            </div>
                            <div class="home-usercontent">
                                <div class="home-usercontents">
                                    <div class="home-usercontentcount">
                                        <img src="{{ URL::asset('/admin_assets/img/icons/arrow-up.svg') }}" alt="img" class="me-2">
                                        <span class="counters" data-count="650">$650</span>
                                    </div>
                                    <h5> Currently</h5>
                                </div>
                                <div class="homegraph">
                                    <img src="{{ URL::asset('/admin_assets/img/graph/graph4.png') }}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Users Table -->
        <div class="row">
            <div class="col-lg-6 col-sm-12 d-flex widget-path">
                <div class="card">
                    <div class="card-body">
                        <div class="home-user">
                            <div class="home-head-user home-graph-header">
                                <h2>Customers</h2>
                                <a href="{{ url('admin/users/index') }}" class="btn btn-viewall">View All<img src="{{ URL::asset('/admin_assets/img/icons/arrow-right.svg') }}" class="ms-2" alt="img"></a>
                            </div>
                            <div class="table-responsive datatable-nofooter">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>SIM Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->phone }}</td>
                                                <td>{{ $user->sim_number }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cars Table -->
            <div class="col-lg-6 col-sm-12 d-flex widget-path">
                <div class="card">
                    <div class="card-body">
                        <div class="home-user">
                            <div class="home-head-user home-graph-header">
                                <h2>Cars</h2>
                                <a href="{{ url('admin/cars/index') }}" class="btn btn-viewall">View All<img src="{{ URL::asset('/admin_assets/img/icons/arrow-right.svg') }}" class="ms-2" alt="img"></a>
                            </div>
                            <div class="table-responsive datatable-nofooter">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Model</th>
                                            <th>Year</th>
                                            <th>Price</th>
                                            <th>Photo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cars as $car)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $car->name }}</td>
                                                <td>{{ $car->model }}</td>
                                                <td>{{ $car->year }}</td>
                                                <td>${{ $car->price }}</td>
                                                <td>
                                                    @if($car->photo)
                                                        <img src="{{ asset('storage/' . $car->photo) }}" alt="{{ $car->name }}" width="50">
                                                    @else
                                                        N/A
                                                    @endif
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
            <!-- Bookings Table -->
            <div class="col-lg-6 col-sm-12 d-flex widget-path">
                <div class="card">
                    <div class="card-body">
                        <div class="home-user">
                            <div class="home-head-user home-graph-header">
                                <h2>Booking Customers</h2>
                                <a href="{{ url('admin/bookingcustomer/index') }}" class="btn btn-viewall">View All<img src="{{ URL::asset('/admin_assets/img/icons/arrow-right.svg') }}" class="ms-2" alt="img"></a>
                            </div>
                            <div class="table-responsive datatable-nofooter">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>User</th>
                                            <th>Car</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($bookings as $booking)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $booking->user->name }}</td>
                                                <td>{{ $booking->car->name }}</td>
                                                <td>{{ $booking->start_date }}</td>
                                                <td>{{ $booking->end_date }}</td>
                                                <td>{{ $booking->status }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Reports Table -->
            <div class="col-lg-6 col-sm-12 d-flex widget-path">
                <div class="card">
                    <div class="card-body">
                        <div class="home-user">
                            <div class="home-head-user home-graph-header">
                                <h2>Reports</h2>
                                <a href="{{ url('admin/reports/index') }}" class="btn btn-viewall">View All<img src="{{ URL::asset('/admin_assets/img/icons/arrow-right.svg') }}" class="ms-2" alt="img"></a>
                            </div>
                            <div class="table-responsive datatable-nofooter">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>User</th>
                                            <th>Car</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($bookings as $booking)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $booking->user->name }}</td>
                                                <td>{{ $booking->car->name }}</td>
                                                <td>{{ $booking->start_date }}</td>
                                                <td>{{ $booking->end_date }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Booking List -->
    </div>
</div>
@endsection
