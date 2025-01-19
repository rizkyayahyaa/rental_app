<?php $page = 'user-signup'; ?>
@extends('layout.mainlayout')

@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 mx-auto">
                <div class="login-wrap">
                    <div class="login-back">
                        <a href="{{ url('/') }}"><img src="{{ URL::asset('/assets/img/icons/undo-icon.svg') }}" class="me-2" alt="icon">Back To Home</a>
                    </div>
                    <div class="login-header">
                        <h3>User Signup</h3>
                    </div>

                    <!-- Signup Form -->
                    <form action="{{ route('user-signup.submit') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="col-form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your name" value="{{ old('name') }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">E-mail</label>
                            <input type="email" name="email" class="form-control" placeholder="example@email.com" value="{{ old('email') }}">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-form-label">Phone Number</label>
                                <input type="text" name="phone_number" class="form-control form-control-lg group_formcontrol" id="phone" placeholder="(256) 789-6253" value="{{ old('phone_number') }}">
                                @error('phone_number')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">SIM Number</label>
                            <input type="text" name="sim_number" class="form-control" placeholder="Enter your SIM number" value="{{ old('sim_number') }}">
                            @error('sim_number')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-form-label d-block">Password <span class="brief-bio float-end">Must be 8 characters at least</span></label>
                            <div class="pass-group">
                                <input type="password" name="password" class="form-control pass-input" placeholder="*************">
                                <span class="toggle-password feather-eye"></span>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="*************">
                            @error('password_confirmation')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="custom_check">
                                    <input type="checkbox" name="rememberme" class="rememberme">
                                    <span class="checkmark"></span>Remember Me
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary w-100 login-btn" type="submit">Signup</button>
                        <p class="no-acc">Already have an account? <a href="{{ route('login') }}">Sign in</a></p>
                    </form>
                    <!-- /Signup Form -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
