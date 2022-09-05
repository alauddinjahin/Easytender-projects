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
                         <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group mb-30">
                                <label for="email">Phone<span>*</span></label>
                                <input id="email" name="email" class="form-control-mod" type="text" required="" autofocus> 
                                <label for="password">Password <span>*</span></label>
                                <input  id="password" name="password" class="form-control-mod" type="password" required="" autocomplete="current-password">
                            </div>
                            <button class="add-btn" type="submit">Log In</button>
                            <label>
                                <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">
                                <span>Remember me</span>
                            </label>
                        </form>
                        <div class="last-password pt-30 d-flex justify-content-between">
                            <a href="{{ route('password.request') }}">Lost your password?</a>
                            <span>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></span>
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
