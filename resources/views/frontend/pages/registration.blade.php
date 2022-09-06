@extends('frontend.layouts.master')

@section('title', 'Registration')

@section('content')

  <!-- My Account Section Start -->
    <div class="rs-my-account pt-70 pb-70 md-pt-20 md-pb-20">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row align-items-center">
                <div class="col-lg-6 md-mb-50 p-4">
                    <div class="rs-login">
                        <h2 class="title pb-30 md-pb-15">Regitration</h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" style="color: red" />

                            <div class="form-group mb-10">
                                <label for="name">Name<span>*</span></label>
                                <input id="name" name="name" class="form-control-mod" type="text" required=""> 
                                <label for="phone">Mobile<span>*</span></label>
                                <input id="phone" name="phone" class="form-control-mod" type="text" required=""> 
                                <label for="district">District<span>*</span></label>
                                <input id="district" name="district" class="form-control-mod" type="text" required=""> 
                                <label for="password">Password <span>*</span></label>
                                <input id="password" name="password" class="form-control-mod" type="password" required="">
                                <label for="password_confirmation" >Confirm Password <span>*</span></label>
                                <input id="password_confirmation"  name="password_confirmation" class="form-control-mod" type="password" required="">
                                <div class="d-flex gap-4"> 
                                    <label for="client" class="d-flex gap-1"><input type="radio" name="usertype" value="client" id="client"> <small>Client</small></label>
                                    <label for="freelancer" class="d-flex gap-1"><input type="radio" name="usertype" value="freelancer" id="freelancer"> <small>Freelancer</small></label>
                                </div>
                            </div>
                            <button class="add-btn" type="submit">Sign Up</button>
                        </form>
                        <div class="last-password pt-30 d-flex justify-content-between">
                            <a href="{{ route('password.request') }}">Lost your password?</a>
                            <span>Have an account? <a href="{{ route('login') }}">Login</a></span>
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


@push('css')
  
    
@endpush