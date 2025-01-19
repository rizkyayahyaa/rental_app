@extends('layout.mainlayout_admin')
@section('content')
<div class="main-wrapper">
    <div class="login-pages">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    {{--  <div class="login-logo">
                        <img src="{{ URL::asset('/admin_assets/img/mobil.jpg') }}" alt="img">
                    </div>  --}}
                </div>
                <div class="col-lg-6 col-xl-7">
                    <div class="login-images">
                        <img src="{{ URL::asset('/admin_assets/img/mobil.jpeg') }}" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5">
                    <form action="{{ route('signin.custom') }}" method="POST" class="account-content">
                        @csrf
                        <div class="login-content">
                            <div class="login-contenthead">
                                <h5>Login</h5>
                            </div>

                            <div class="login-input">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="text" name="email" class="form-control" id="Email">
                                    <div class="text-danger pt-2">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-flex justify-content-between">
                                        <label>Password</label>
                                    </div>
                                    <div class="pass-group">
                                        <input type="password" class="form-control pass-input" name="password"
                                            id="password">
                                        <span class="fas toggle-password fa-eye-slash"></span>
                                        <div class="text-danger pt-2">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-checkbox m-0">
                                    <ul class="d-flex justify-content-between">
                                        <li>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span><i></i></span>
                                                <b class="check-content">Remember Me</b>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="login-button">
                                <button class="btn btn-login" type="submit">Login</button>
                            </div>
                            <div class="signinform text-center">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
