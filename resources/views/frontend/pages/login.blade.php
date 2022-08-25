@extends('frontend.layouts.master')

@section('title', 'Login')

@section('content')

  <!-- My Account Section Start -->
    <div class="rs-my-account pt-70 pb-70 md-pt-20 md-pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 md-mb-50  p-4">
                    <div class="rs-login">
                        <h2 class="title pb-30 md-pb-15">Login</h2>
                        <div class="form-group mb-30">
                            <label>Phone<span>*</span></label>
                            <input id="fname" name="fname" class="form-control-mod" type="text" required=""> 
                            <label>Password <span>*</span></label>
                            <input id="tname" name="text" class="form-control-mod" type="text" required="">
                        </div>
                        <button class="add-btn" type="submit">Log In</button>
                        <label>
                            <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">
                            <span>Remember me</span>
                        </label>
                        <div class="last-password pt-30 d-flex justify-content-between">
                            <a href="#">Lost your password?</a>
                            <a class="btn btn-success btn-sm text-white" href="{{ URL('/register')}}">Sign Up</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-custom-bg-img">
                        <img src="{{ asset('frontend/images/hero/login bg.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- My Account Section Start -->
@endsection
