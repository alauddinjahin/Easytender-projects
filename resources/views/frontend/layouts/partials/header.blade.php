<div class="full-width-header">
    <!--Header Start-->
    <header id="rs-header" class="rs-header style2 header-transparent">
        <!-- Topbar Area Start -->
        <div class="topbar-area style1">
            <div class="container custom">
                <div class="row y-middle">
                    <div class="col-lg-9">
                        <div class="topbar-contact">
                            <ul>
                                <li>
                                    <i class="flaticon-email"></i>
                                    <a href="mailto:support@easytender.net">support@easytender.net</a>
                                </li>
                                <li>
                                    <i class="flaticon-call"></i>
                                    <a href="tel:+8801711059282"> (+88) 01711059282</a>
                                </li>
                                <li>
                                    <i class="flaticon-location"></i>
                                    Bangladash , Dhaka , Barguna
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right">
                        <div class="toolbar-sl-share">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar Area End -->
    
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container custom">
                <div class="row-table">
                    <div class="col-cell header-logo">
                        <div class="logo-area">
                            <a href="{{URL('/')}}">
                                <img src="{{ asset('frontend/images/logo/Easy-Vat-Logo.png')}}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-cell">
                        <div class="rs-menu-area">
                            <div class="main-menu">
                                <nav class="rs-menu hidden-md">
                                    <ul class="nav-menu">
                                        <li class="rs-mega-menu menu-item-has-children current-menu-item">
                                            <a href="{{URL('/')}}">Home</a>
                                        </li>
                                        <li class="rs-mega-menu menu-item-has-children ">
                                            <a href="{{URL('/all-tender')}}">Tender</a>
                                        </li>
                                        {{-- <li class="menu-item-has-children">
                                            <a href="#">Tender</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ URL('/offer-tender')}}">Offer Tender</a></li>
                                                <li><a href="{{ URL('/my-offer')}}">My Tender</a></li>
                                                <!-- <li><a href="{{ URL('/my-offer')}}">My Offer</a></li> -->
                                                <li><a href="{{ URL('/all-tender')}}">All Tender</a></li>
                                            </ul>
                                        </li> --}}
                                        <li class="menu-item-has-children">
                                            <a href="#">Other Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Tender Documents Purchase </a></li>
                                                <li><a href="#">PO Service</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li class="menu-item-has-children">
                                            <a href="{{ URL('/login') }}">Login / Registration</a>
                                        </li>
                                    </ul> <!-- //.nav-menu -->
                                </nav>
                            </div> <!-- //.main-menu -->
                        </div>
                    </div>
                    <div class="col-cell">
                        <div class="expand-btn-inner">
                            <ul>
                                <li class="humburger">
                                    <a id="nav-expander" class="nav-expander bar" href="#">
                                        <div class="bar">
                                            <span class="dot1"></span>
                                            <span class="dot2"></span>
                                            <span class="dot3"></span>
                                            <span class="dot4"></span>
                                            <span class="dot5"></span>
                                            <span class="dot6"></span>
                                            <span class="dot7"></span>
                                            <span class="dot8"></span>
                                            <span class="dot9"></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
        
    
        <!-- Canvas Mobile Menu start -->
        <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
          
            <ul class="nav-menu">
                <li class="rs-mega-menu menu-item-has-children current-menu-item">
                    <a href="{{URL('/')}}">Home</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Tender</a>
                    <ul class="sub-menu">
                        <li><a href="{{ URL('/offer-tender')}}">Offer Tender</a></li>
                        <li><a href="#">My Tender</a></li>
                        <li><a href="{{ URL('/all-tender')}}">All Tender</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Other Services</a>
                    <ul class="sub-menu">
                        <li><a href="#">Tender Documents Purchase </a></li>
                        <li><a href="#">PO Service</a></li>
                    </ul>
                </li>
                
                <li class="menu-item-has-children">
                    <a href="{{ URL('/login') }}">Login / Registration </a>
                </li>
            </ul>
            
            <!-- //.nav-menu -->
            {{-- <div class="canvas-contact">
                <div class="address-area">
                    <div class="address-list">
                        <div class="info-icon">
                            <i class="flaticon-location"></i>
                        </div>
                        <div class="info-content">
                            <h4 class="title">Address</h4>
                            <em>05 kandi BR. New York</em>
                        </div>
                    </div>
                    <div class="address-list">
                        <div class="info-icon">
                            <i class="flaticon-email"></i>
                        </div>
                        <div class="info-content">
                            <h4 class="title">Email</h4>
                            <em><a href="mailto:support@rstheme.com">support@rstheme.com</a></em>
                        </div>
                    </div>
                    <div class="address-list">
                        <div class="info-icon">
                            <i class="flaticon-call"></i>
                        </div>
                        <div class="info-content">
                            <h4 class="title">Phone</h4>
                            <em>+019988772</em>
                        </div>
                    </div>
                </div>
            </div> --}}
        </nav>
        <!-- Canvas Menu end -->
    </header>
    <!--Header End-->
</div>