@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')
    <!-- Slider Start -->
    <div class="rs-banner banner-style6">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-5 col-md-7">
                    <div class="sec-title4 mb-30">
                        <div class="sub-title">Welcome To</div>
                        <h2 class="title primary-color">Easy VAT</h2>
                        <div class="desc left-line-v">
                            <div class="draw-line start-draw"></div>
                            Praesent eu dolor eu orci vehicula euismod. Vivamus sed sollicitudin libero, vel malesuada velit. Nullam et maximus lorem. Suspendisse maximus.
                        </div>
                    </div>
                    <div class="btn-area">
                        <a class="readon2" href="#">All Tender<div class="btn-arrow"></div></a>
                    </div>
                </div>
                <div class="col-md-5 col-lg-7">
                    <div class="custom-tender-vector-file">
                        <img src="{{ asset('frontend/images/hero/vat vactor.webp')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider End -->

    <!-- Start client list section -->
    {{-- <div class="container mb-100">
        <div class="row custom-client-row">
            <div class="col-md-4 custom-bg-for-one">
                <div class="custom-section-parent">
                    <div class="custom-section-icon-wrap">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="custom-client-content-style">
                        <span>Happy Clients</span>
                        <div class="counter-number">
                            <span class="rs-count">11345</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 customs-bg-for-two">
                <div class="custom-section-parent">
                    <div class="custom-section-icon-two-wrap">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="custom-client-content-style-two">
                        <span><a href="{{ URL('/register')}}">As a Client</a></span>
                        <div style="padding-top: 5px;" class="counter-number">
                            <span class="rs-count">15345</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 custom-bg-for-one">
                <div class="custom-section-parent">
                    <div class="custom-section-icon-wrap">
                        <i class="fa fa-handshake-o" aria-hidden="true"></i>
                    </div>
                    <div class="custom-client-content-style-three">
                        <span><a href="{{ URL('/register')}}">As a Freelancer</a></span>
                        <div style="padding-top: 5px;" class="counter-number">
                            <span class="rs-count">17345</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- end client list section -->

    <!-- Premium Services Section Start -->
    <div id="rs-services" class="rs-services style2 gray-bg pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="sec-title2 mb-60 md-mb-40">

                <div class="text-center">
                    <div class="sub-text">OUR SERVICES</div>
                    <h2 class="title mb-0 md-pb-20">Custom IT Solutions for Your Successful Business <span>Successful Business.</span>
                    </h2>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-wrap">
                        <div class="icon-position">
                            <div class="service-icon">
                                <i class="fa fa-code"></i>
                            </div>
                        </div>
                        <div class="content-part">
                            <h3 class="title"><a href="#">VAT Registration</a></h3>
                            <div class="desc">YOU CAN CREATE ACCOUNT AND SUBMIT OFFER VAT</div>
                            <div class="custom-apply-btn">
                                <a href="#">Registration</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-wrap">
                        <div class="icon-position">
                            <div class="service-icon">
                                <i class="fa fa-code"></i>
                            </div>
                        </div>
                        <div class="content-part">
                            <h3 class="title"><a href="#">................</a></h3>
                            <div class="desc">........................................ <br> ...........................</div>
                            <div class="custom-apply-btn">
                                <a href="#">Registration</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-wrap">
                        <div class="icon-position">
                            <div class="service-icon">
                                <i class="fa fa-code"></i>
                            </div>
                        </div>
                        <div class="content-part">
                            <h3 class="title"><a href="#">...........</a></h3>
                            <div class="desc">.......................................... <br> ...........................</div>
                            <div class="custom-apply-btn">
                                <a href="#">Registration</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
    <!-- Premium Services Section End -->

    <!-- Testimonial Section Start -->
    <div class="rs-testimonial style2 bg10 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="sec-title2 text-center md-left mb-30">
                <div class="sub-text">Testimonials</div>
                <h2 class="title mb-0 white-color">What Our Clients Say About Our<br> Digital Services</h2>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
                data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
                data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true"
                data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2"
                data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3"
                data-md-device-nav="false" data-md-device-dots="true">

                <div class="testi-wrap">
                    <div class="item-content">
                        <p>Customer support is excellent and documentation good – novice can easily understand.
                            Although I had a problem with the performance, thanks to the customer support, we have
                            solved this problem as well.</p>
                    </div>
                    <div class="testi-content">
                        <div class="image-wrap">
                            <img src="{{ asset('frontend/images/testimonial/avatar/1.jpg')}}" alt="Testimonial">
                        </div>
                        <div class="testi-information">
                            <div class="testi-name">David Warner</div>
                            <span class="testi-title">Envato User</span>
                        </div>
                    </div>
                </div>

                <div class="testi-wrap">
                    <div class="item-content">
                        <p>Customer support is excellent and documentation good – novice can easily understand.
                            Although I had a problem with the performance, thanks to the customer support, we have
                            solved this problem as well.</p>
                    </div>
                    <div class="testi-content">
                        <div class="image-wrap">
                            <img src="{{ asset('frontend/images/testimonial/avatar/2.jpg')}}" alt="Testimonial">
                        </div>
                        <div class="testi-information">
                            <div class="testi-name">Emily Blunt</div>
                            <span class="testi-title">Web Developer</span>
                        </div>
                    </div>
                </div>

                <div class="testi-wrap">
                    <div class="item-content">
                        <p>Customer support is excellent and documentation good – novice can easily understand.
                            Although I had a problem with the performance, thanks to the customer support, we have
                            solved this problem as well.</p>
                    </div>
                    <div class="testi-content">
                        <div class="image-wrap">
                            <img src="{{ asset('frontend/images/testimonial/avatar/3.jpg')}}" alt="Testimonial">
                        </div>
                        <div class="testi-information">
                            <div class="testi-name">Ansu Fati</div>
                            <span class="testi-title">Marketing</span>
                        </div>
                    </div>
                </div>

                <div class="testi-wrap">
                    <div class="item-content">
                        <p>Customer support is excellent and documentation good – novice can easily understand.
                            Although I had a problem with the performance, thanks to the customer support, we have
                            solved this problem as well.</p>
                    </div>
                    <div class="testi-content">
                        <div class="image-wrap">
                            <img src="{{ asset('frontend/images/testimonial/avatar/4.jpg')}}" alt="Testimonial">
                        </div>
                        <div class="testi-information">
                            <div class="testi-name">Angelina Jolie</div>
                            <span class="testi-title">Graphic Designer</span>
                        </div>
                    </div>
                </div>

                <div class="testi-wrap">
                    <div class="item-content">
                        <p>Customer support is excellent and documentation good – novice can easily understand.
                            Although I had a problem with the performance, thanks to the customer support, we have
                            solved this problem as well.</p>
                    </div>
                    <div class="testi-content">
                        <div class="image-wrap">
                            <img src="{{ asset('frontend/images/testimonial/avatar/1.jpg')}}" alt="Testimonial">
                        </div>
                        <div class="testi-information">
                            <div class="testi-name">David Warner</div>
                            <span class="testi-title">Envato User</span>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->

     <!-- Blog Start -->
     <div class="rs-blog style2 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row y-middle md-mb-30">
                <div class="col-lg-12 mb-20 md-mb-10">
                    <div class="sec-title2">
                        <div class="sub-text">LATEST BLOG</div>
                        <h2 class="title mb-23" style="text-align: center;">Read The Latest Articles from Our Blog Post</span></h2>
                    </div>
                </div>
                
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
                data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
                data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true"
                data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2"
                data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3"
                data-md-device-nav="false" data-md-device-dots="true">
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="#"><img src="{{ asset('frontend/images/blog/1.jpg')}}" alt="Blog"></a>
                        <ul class="post-categories">
                            <li><a href="blog-details.html">Easy Vat</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta mb-10">
                            <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                            <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">
                            How to post offer VAT
                        </a></h3>
                        <p>
                            fast time you need regitration on easytender and you can offer vat or apply vat...
                        </p>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="#"><img src="{{ asset('frontend/images/blog/2.jpg')}}" alt="Blog"></a>
                        <ul class="post-categories">
                            <li><a href="#">Easy Vat</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta mb-10">
                            <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                            <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">
                            How to apply on VAT
                        </a></h3>
                        <p>
                            fast time you need ragistration on easytender and you can offer vat or apply vat...
                        </p>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="#"><img src="{{ asset('frontend/images/blog/3.jpg')}}" alt="Blog"></a>
                        <ul class="post-categories">
                            <li><a href="#">Easy Vat</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta mb-10">
                            <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                            <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">
                            How to use easyvat
                        </a></h3>
                        <p>
                            fast time you need ragistration on easytender and you can offer vat or apply vat...
                        </p>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="#"><img src="{{ asset('frontend/images/blog/3.jpg')}}" alt="Blog"></a>
                        <ul class="post-categories">
                            <li><a href="#">Easy Vat</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta mb-10">
                            <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                            <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">
                            How to use easyvat
                        </a></h3>
                        <p>
                            fast time you need ragistration on easytender and you can offer vat or apply vat...
                        </p>
                    </div>
                </div>
               
                
            </div>
        </div>
    </div>
    <!-- Blog End -->

@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom.css')}}">
@endpush

@push('js')
    <script>

    </script>
@endpush