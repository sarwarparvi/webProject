@extends('master')
@section("index-content")
<main class="main">
    @if ($errors->any())
    <div class="alert alert-danger col-sm-4 col-sm-offset-4">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div>
        <div class="intro-slider-container mb-3 mb-lg-5">
            <div class="intro-slider owl-carousel owl-simple owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{"nav":true, "dots": true, "loop": true, "autoplay":true, "data-pause":true, "autoplayTimeout":5000}'>
                <div class="intro-slide" style="
                background-image: url(assets/assets/images/demos/demo-12/slider/slide-1.jpg);
              ">
                    <div class="container">
                        <div class="home_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="home_content text-center">
                                            <div class="home_title">A Luxury Stay</div>
                                            <div class="booking_form_container">
                                                <form action="#" class="booking_form">
                                                    <div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
                                                        <div class="booking_input_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
                                                            <div>
                                                                <input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Where You Want to Go" required="required" />
                                                            </div>
                                                            <div>
                                                                <input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" required="required" />
                                                            </div>
                                                            <div>
                                                                <input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" required="required" />
                                                            </div>
                                                            <div>
                                                                <input type="text" class="booking_input booking_input_b" placeholder="Children" required="required" />
                                                            </div>
                                                            <div>
                                                                <input type="text" class="booking_input booking_input_b" placeholder="hotel" required="required" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <button class="booking_button trans_200">
                                                                Book Now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .intro-content -->
                </div>

                <div class="intro-slide" style="
                background-image: url(assets/assets/images/demos/demo-12/slider/slide-2.jpg);
              ">
                    <div class="container">
                        <div class="home_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="home_content text-center">
                                            <div class="home_title">A Luxury Stay</div>
                                            <div class="booking_form_container">
                                                <form action="#" class="booking_form">
                                                    <div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
                                                        <div class="booking_input_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
                                                            <div>
                                                                <input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Where You Want to Go" required="required" />
                                                            </div>
                                                            <div>
                                                                <input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" required="required" />
                                                            </div>
                                                            <div>
                                                                <input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" required="required" />
                                                            </div>
                                                            <div>
                                                                <input type="text" class="booking_input booking_input_b" placeholder="Children" required="required" />
                                                            </div>
                                                            <div>
                                                                <input type="text" class="booking_input booking_input_b" placeholder="hotel" required="required" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <button class="booking_button trans_200">
                                                                Book Now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .intro-content -->
                </div>
                <div class="intro-slide" style="
                background-image: url(assets/assets/images/demos/demo-12/slider/slide-3.jpg);
              ">
                    <div class="container">
                        <div class="home_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="home_content text-center">
                                            <div class="home_title">A Luxury Stay</div>
                                            <div class="booking_form_container">
                                                <form action="#" class="booking_form">
                                                    <div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
                                                        <div class="booking_input_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
                                                            <div>
                                                                <input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Where You Want to Go" required="required" />
                                                            </div>
                                                            <div>
                                                                <input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" required="required" />
                                                            </div>
                                                            <div>
                                                                <input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" required="required" />
                                                            </div>
                                                            <div>
                                                                <input type="text" class="booking_input booking_input_b" placeholder="Children" required="required" />
                                                            </div>
                                                            <div>
                                                                <input type="text" class="booking_input booking_input_b" placeholder="hotel" required="required" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <button class="booking_button trans_200">
                                                                Book Now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .intro-content -->
                </div>
                <!-- End .intro-slide -->
            </div>
            <!-- End .intro-slider owl-carousel owl-simple -->

            <span class="slider-loader text-white"></span><!-- End .slider-loader -->
        </div>
        <!-- End .intro-slider-container -->
        @if(session('customer_id'))
        <h4>{{ session('customer_id') }}</h4>
        @endif
        @if (Auth::guard('customer')->check())
        <p>Welcome, {{ Auth::guard('customer')->user()->first_name }}</p>
        @else
        <p>You are not logged in.</p>
        @endif


        <!-- Filters -->
        <div class="container">
            <div class="toolbox toolbox-filter">
                <div class="toolbox-left">
                    <a href="#" class="filter-toggler">Filters

                    </a>
                </div>
                <!-- End .toolbox-left -->
                <div class="toolbox-right">
                    <ul class="nav-filter product-filter">
                        <li class="active"><a href="#" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".furniture">Furniture</a></li>
                        <li><a href="#" data-filter=".lighting">Lighting</a></li>
                        <li><a href="#" data-filter=".accessories">Accessories</a></li>
                        <li><a href="#" data-filter=".sale">Sale</a></li>
                    </ul>
                </div>
                <!-- End .toolbox-right -->
            </div>
            <!-- End .filter-toolbox -->

            <div class="widget-filter-area" id="product-filter-area">
                <a href="#" class="widget-filter-clear">Clean All</a>

                <div class="filter-area-wrapper">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h3 class="widget-title">Category:</h3>
                                <!-- End .widget-title -->

                                <div class="filter-items filter-items-count">
                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cat-1" />
                                            <label class="custom-control-label" for="cat-1">All</label>
                                        </div>
                                        <!-- End .custom-checkbox -->
                                        <span class="item-count">24</span>
                                    </div>
                                    <!-- End .filter-item -->

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cat-2" />
                                            <label class="custom-control-label" for="cat-2">Furniture</label>
                                        </div>
                                        <!-- End .custom-checkbox -->
                                        <span class="item-count">3</span>
                                    </div>
                                    <!-- End .filter-item -->

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cat-3" />
                                            <label class="custom-control-label" for="cat-3">Lighting</label>
                                        </div>
                                        <!-- End .custom-checkbox -->
                                        <span class="item-count">2</span>
                                    </div>
                                    <!-- End .filter-item -->

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cat-4" />
                                            <label class="custom-control-label" for="cat-4">Accessories</label>
                                        </div>
                                        <!-- End .custom-checkbox -->
                                        <span class="item-count">4</span>
                                    </div>
                                    <!-- End .filter-item -->

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cat-5" />
                                            <label class="custom-control-label" for="cat-5">Sale</label>
                                        </div>
                                        <!-- End .custom-checkbox -->
                                        <span class="item-count">2</span>
                                    </div>
                                    <!-- End .filter-item -->
                                </div>
                                <!-- End .filter-items -->
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h3 class="widget-title">Sort by:</h3>
                                <!-- End .widget-title -->

                                <div class="filter-items">
                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="radio" class="custom-control-input" checked id="sort-1" name="sortby" />
                                            <label class="custom-control-label" for="sort-1">Default</label>
                                        </div>
                                        <!-- End .custom-checkbox -->
                                    </div>
                                    <!-- End .filter-item -->

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="radio" class="custom-control-input" id="sort-2" name="sortby" />
                                            <label class="custom-control-label" for="sort-2">Popularity</label>
                                        </div>
                                        <!-- End .custom-checkbox -->
                                    </div>
                                    <!-- End .filter-item -->

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="radio" class="custom-control-input" id="sort-3" name="sortby" />
                                            <label class="custom-control-label" for="sort-3">Average Rating</label>
                                        </div>
                                        <!-- End .custom-checkbox -->
                                    </div>
                                    <!-- End .filter-item -->

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="radio" class="custom-control-input" id="sort-4" name="sortby" />
                                            <label class="custom-control-label" for="sort-4">Newness</label>
                                        </div>
                                        <!-- End .custom-checkbox -->
                                    </div>
                                    <!-- End .filter-item -->

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="radio" class="custom-control-input" id="sort-5" name="sortby" />
                                            <label class="custom-control-label" for="sort-5">Price: Low to High</label>
                                        </div>
                                        <!-- End .custom-checkbox -->
                                    </div>
                                    <!-- End .filter-item -->

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="radio" class="custom-control-input" id="sort-6" name="sortby" />
                                            <label class="custom-control-label" for="sort-6">Price: High to Low</label>
                                        </div>
                                        <!-- End .custom-checkbox -->
                                    </div>
                                    <!-- End .filter-item -->
                                </div>
                                <!-- End .filter-items -->
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h3 class="widget-title">Price:</h3>
                                <!-- End .widget-title -->

                                <div class="filter-price">
                                    <div class="filter-price-text">
                                        Price Range:
                                        <span id="filter-price-range"></span>
                                    </div>
                                    <!-- End .filter-price-text -->

                                    <div id="price-slider"></div>
                                    <!-- End #price-slider -->
                                </div>
                                <!-- End .filter-price -->
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-sm-6 col-lg-3 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .filter-area-wrapper -->
            </div>
            <!-- End #product-filter-area.widget-filter-area -->

            <div class="products-container" data-layout="fitRows">
                @foreach($hotels as $hotel)
                <div class="product-item furniture col-6 col-md-4 col-lg-3" data-hotel-id="{{ $hotel->id }}">
                    <div class="product product-4">
                        <figure class="product-media">
                            <a href="hotelslist.html">
                                <img src="assets/assets/images/demos/demo-11/products/hotel-1.jpeg" alt="Product image" class="product-image" />
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div>
                            <!-- End .product-action -->

                            <div class="product-action">
                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                            </div>
                            <!-- End .product-action -->
                        </figure>
                        <!-- End .product-media -->

                        <div class="product-body" style="text-align: center;">
                            <h3 class="product-title">
                                <a href="hotelslist.html">
                                    <h5>{{ $hotel->name }}</h5>
                                </a>
                            </h3>
                            <!-- End .product-title -->
                        </div>
                        <!-- End .product-body -->
                    </div>
                    <!-- End .product -->
                </div>
                <!-- End .product-item -->
                @endforeach
            </div>

            <!-- End .products-container -->
        </div>
        <!-- End .container -->

        <div class="more-container text-center mt-0 mb-7">
            <a href="hotelslist.html" class="btn btn-outline-dark-3 btn-more"><span>more products</span><i class="la la-refresh"></i></a>
        </div>
        <!-- End .more-container -->
    </div>

    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <!-- Login Form -->
                                    <form id="login-form" method="POST" action="{{ url('customer_login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="email">Username or email address *</label>
                                            <input type="text" class="form-control" id="email" name="email" required />
                                        </div>
                                        <!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="password">Password *</label>
                                            <input type="password" class="form-control" id="password" name="password" required />
                                        </div>
                                        <!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember" />
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div>
                                            <!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div>
                                        <!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div>
                                            <!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div>
                                            <!-- End .col-6 -->
                                        </div>
                                        <!-- End .row -->
                                    </div>
                                    <!-- End .form-choice -->
                                </div>
                                <!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <!-- Registration Form -->
                                    <form id="register-form" method="POST" action="{{ url('customer_register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="first_name">First Name *</label>
                                            <input type="text" class="form-control" id="first_name" name="first_name" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="last_name">Last Name *</label>
                                            <input type="text" class="form-control" id="last_name" name="last_name" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your email address *</label>
                                            <input type="email" class="form-control" id="email" name="email" required />
                                        </div>

                                        <div class="form-group">
                                            <label for="password">Password *</label>
                                            <input type="password" class="form-control" id="password" name="password" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="password_confirmation">Confirm Password *</label>
                                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required confirm />
                                        </div>

                                        <div class="form-group">
                                            <label for="phone">Phone *</label>
                                            <input type="tel" class="form-control" id="phone" name="phone" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address *</label>
                                            <input type="text" class="form-control" id="address" name="address" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="city">City *</label>
                                            <input type="text" class="form-control" id="city" name="city" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="state">State *</label>
                                            <input type="text" class="form-control" id="state" name="state" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="country">Country *</label>
                                            <input type="text" class="form-control" id="country" name="country" required />
                                        </div>
                                        <!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required />
                                                <label class="custom-control-label" for="register-policy">I agree to the
                                                    <a href="#">privacy policy</a> *</label>
                                            </div>
                                            <!-- End .custom-checkbox -->
                                        </div>
                                        <!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div>
                                            <!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div>
                                            <!-- End .col-6 -->
                                        </div>
                                        <!-- End .row -->
                                    </div>
                                    <!-- End .form-choice -->
                                </div>
                                <!-- .End .tab-pane -->
                            </div>
                            <!-- End .tab-content -->
                        </div>
                        <!-- End .form-tab -->
                    </div>
                    <!-- End .form-box -->
                </div>
                <!-- End .modal-body -->
            </div>
            <!-- End .modal-content -->
        </div>
        <!-- End .modal-dialog -->
    </div>
</main>
@endsection