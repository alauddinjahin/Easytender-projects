@extends('frontend.layouts.master')

@section('title', 'About Us')

@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img1">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                   About Us
                    <span class="watermark">About Us</span>
                </h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- About Section Start -->
    <div class="rs-about style2 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-33 md-pr-15 md-mb-50">
                    <div class="images-part">
                        <img src="{{ asset('frontend/images/about/about-3.png')}}" alt="Images">
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="sec-title">
                        <h2 class="title pb-22">
                            We help to implement your ideas into automation
                        </h2>
                        <span class="sub-text big">We donec pulvinar magna id leoersi pellentesque impered dignissim
                            rhoncus euismod euismod eros vitae best consulting & financial services theme .</span>

                        <p class="margin-0 pt-15">Business ipsum dolor sit amet nsectetur cing elit. Suspe ndisse
                            suscipit sagittis leo sit met entum is not estibulum dignity sim posuere cubilia durae.
                            Leo sit met entum cubilia crae. At vero eos accusamus et iusto odio dignissimos
                            provident.</p>
                        <div class="btn-part mt-45 md-mt-30">
                            <a class="readon consultant discover" href="about.html">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rs-animation">
            <div class="animate-style">
                <img class="scale" src="{{ asset('frontend/images/about/tri-circle-1.png')}}" alt="About">
            </div>
        </div>
    </div>
    <!-- About Section End -->


@endsection