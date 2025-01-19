<?php $page = 'about-us'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            About Us
        @endslot
        @slot('li_1')
            Home
        @endslot
        @slot('li_2')
            About Us
        @endslot
    @endcomponent

    <div class="content p-0">

        <!-- About -->
        <div class="about-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <div class="about-exp">
                                <span>10+ years of experiences</span>
                            </div>
                            <div class="abt-img">
                                <img src="{{ URL::asset('/assets/img/audi.png') }}" class="img-fluid" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h6>ABOUT OUR COMPANY</h6>
                            <h2>Your Trusted Car Rental Service</h2>
                            <p>Welcome to our car rental company, where we prioritize your convenience and satisfaction. With over a decade of experience, we are committed to providing top-quality rental vehicles and exceptional customer service. Whether you need a car for a day, a week, or longer, we have a wide range of vehicles to suit your needs.</p>
                            <p>Our fleet includes a variety of cars, from compact models for city driving to larger vehicles for family trips. We ensure that all our vehicles are well-maintained and ready to provide you with a smooth and comfortable ride. Our team is dedicated to making your rental experience as hassle-free as possible.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>Wide range of vehicles</li>
                                        <li>Flexible rental options</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>Affordable rates</li>
                                        <li>24/7 customer support</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /About -->

        <!-- Work Section -->
        <section class="work-section work-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-heading">
                            <h2>How It Works</h2>
                            <p>Simple and Convenient</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="work-box">
                            <div class="work-icon">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/work-icon.svg') }}" alt="img">
                                </span>
                            </div>
                            <h5>Choose Your Car</h5>
                            <p>Select from our wide range of vehicles that best suits your needs.</p>
                            <h4>01</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="work-box">
                            <div class="work-icon">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/find-icon.svg') }}" alt="img">
                                </span>
                            </div>
                            <h5>Make a Reservation</h5>
                            <p>Book your chosen vehicle through our user-friendly platform.</p>
                            <h4>02</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="work-box">
                            <div class="work-icon">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/place-icon.svg') }}" alt="img">
                                </span>
                            </div>
                            <h5>Pick Up & Drive</h5>
                            <p>Collect your vehicle and enjoy your journey with peace of mind.</p>
                            <h4>03</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Work Section -->

        <!-- Choose Us Section -->
        <div class="chooseus-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="choose-content">
                            <h2>Why Choose Us</h2>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus</p>
                            <div class="support-card">
                                <h4 class="support-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#aboutone"
                                        aria-expanded="false">24/7 Supports</a>
                                </h4>
                                <div id="aboutone" class="card-collapse collapse">
                                    <p>Our customer support team is available around the clock to assist you with any inquiries or issues.</p>
                                </div>
                            </div>
                            <div class="support-card">
                                <h4 class="support-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#abouttwo"
                                        aria-expanded="false">Client’s Reviews</a>
                                </h4>
                                <div id="abouttwo" class="card-collapse collapse">
                                    <p>We are proud of the positive feedback from our satisfied customers.</p>
                                </div>
                            </div>
                            <div class="support-card">
                                <h4 class="support-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#about3"
                                        aria-expanded="false">Professional Team</a>
                                </h4>
                                <div id="about3" class="card-collapse collapse">
                                    <p>Our team of professionals is dedicated to providing excellent service and support.</p>
                                </div>
                            </div>
                            <div class="support-card">
                                <h4 class="support-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#about4" aria-expanded="false">Best
                                        Services</a>
                                </h4>
                                <div id="about4" class="card-collapse collapse">
                                    <p>We strive to offer the best rental services to ensure your satisfaction.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="chooseus-img">
                            <img src="{{ URL::asset('/assets/img/rentall.png') }}" class="img-fluid" alt="img">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="choose-icon">
                            <img src="{{ URL::asset('/assets/img/icons/choose-icon.svg') }}" class="img-fluid"
                                alt="img">
                            <div class="choose-info">
                                <h5>1500+</h5>
                                <p>Satisfied Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="choose-icon">
                            <img src="{{ URL::asset('/assets/img/icons/choose-icon-01.svg') }}" class="img-fluid"
                                alt="img">
                            <div class="choose-info">
                                <h5>200+</h5>
                                <p>Vehicles in Fleet</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="choose-icon">
                            <img src="{{ URL::asset('/assets/img/icons/choose-icon.png') }}" class="img-fluid"
                                alt="img">
                            <div class="choose-info">
                                <h5>3000+</h5>
                                <p>Rides Completed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="choose-icon border-0">
                            <img src="{{ URL::asset('/assets/img/icons/choose-icon-03.svg') }}" class="img-fluid"
                                alt="img">
                            <div class="choose-info">
                                <h5>10+</h5>
                                <p>Years of experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Choose Us Section -->

        <!-- Service Section -->
        <div class="service-offer">
            <div class="container">
                <div class="col-md-12">
                    <div class="offer-paths about-offer">
                        <div class="offer-path-content">
                            <h3>Looking for the Best Car Rental Services?</h3>
                            <p>We provide top-notch car rental services with a wide range of vehicles to choose from. Book your car today and experience the best service in the industry.</p>
                            <a href="{{ url('car-listing') }}" class="btn btn-primary btn-views">Get Started<i
                                    class="feather-arrow-right-circle"></i></a>
                        </div>
                        <div class="offer-pathimg">
                            <img src="{{ URL::asset('/assets/img/service-img.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Service Section -->
    </div>
@endsection
