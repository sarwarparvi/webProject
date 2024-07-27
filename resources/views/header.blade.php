<header class="header header-9">
    <div class="container new-header">
        <div class="header-top header-right">
            <div class="header-right">
                <ul class="top-menu text-white" style="margin-top: 10px">
                    <li>
                        <a href="#">Links</a>
                        <ul>
                            <li>
                                <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
                            </li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            @if(session('customer_id'))
                            <li>
                                <div class="dropdown cart-dropdown-customer">
                                    <a href="#" class="dropdown-toggle-customer" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                        <i class="icon-user text-white"></i>
                                        <span class="cart-txt">
                                            @if (Auth::guard('customer')->check())
                                            <a>{{ Auth::guard('customer')->user()->first_name }}</a>
                                            @endif
                                        </span>
                                    </a>

                                    <div class="dropdown-menu-customer dropdown-menu-right-customer">
                                        <div class="dropdown-cart-action-customer">
                                            <a href="customer_logout" class="btn btn-primary">Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @else
                            <li>
                                <a href="#signin-modal" data-toggle="modal"><i class="fa fa-sign-in"></i>Login</a>
                            </li>
                            @endif
                        </ul>
                    </li>
                </ul>
                <!-- End .top-menu -->
            </div>
            <!-- End .header-right -->
        </div>
        <!-- End .header-top -->
    </div>

    <div class="header-middle sticky-header">
        <div class="container">

            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>

                <a href="index.html" class="logo">
                    <img src="assets/assets/images/demos/demo-12/logo.png" alt="Molla Logo" width="82" height="25" />
                </a>
            </div>
            <!-- End .header-left -->

            <div class="header-right">
                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li class="megamenu-container active">
                            <a href="/index" class="">Home</a>
                        </li>
                        <li>
                            <a href="hotels" class="">Hotels</a>
                        </li>
                        <li>
                            <a href="product.html" class="">Cars</a>
                        </li>
                        <li>
                            <a href="#" class="">Resturants</a>
                        </li>
                    </ul>
                    <!-- End .menu -->
                </nav>
                <!-- End .main-nav -->

                <div class="header-search">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <label for="q" class="sr-only">Search</label>
                            <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required />
                        </div>
                        <!-- End .header-search-wrapper -->
                    </form>
                </div>
                <!-- End .header-search -->

                <a href="wishlist.html" class="wishlist-link">
                    <i class="icon-heart-o"></i>
                    <span class="wishlist-count">3</span>
                </a>

                <div class="dropdown cart-dropdown">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="icon-shopping-cart"></i>
                        <span class="cart-count">2</span>
                        <span class="cart-txt">$ 164,00</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-cart-products">
                            <div class="product">
                                <div class="product-cart-details">
                                    <h4 class="product-title">
                                        <a href="product.html">Beige knitted elastic runner shoes</a>
                                    </h4>

                                    <span class="cart-product-info">
                                        <span class="cart-product-qty">1</span>
                                        x $84.00
                                    </span>
                                </div>
                                <!-- End .product-cart-details -->

                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="assets/images/products/cart/product-1.jpg" alt="product" />
                                    </a>
                                </figure>
                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                            </div>
                            <!-- End .product -->

                            <div class="product">
                                <div class="product-cart-details">
                                    <h4 class="product-title">
                                        <a href="product.html">Blue utility pinafore denim dress</a>
                                    </h4>

                                    <span class="cart-product-info">
                                        <span class="cart-product-qty">1</span>
                                        x $76.00
                                    </span>
                                </div>
                                <!-- End .product-cart-details -->

                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="assets/images/products/cart/product-2.jpg" alt="product" />
                                    </a>
                                </figure>
                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .cart-product -->

                        <div class="dropdown-cart-total">
                            <span>Total</span>

                            <span class="cart-total-price">$160.00</span>
                        </div>
                        <!-- End .dropdown-cart-total -->

                        <div class="dropdown-cart-action">
                            <a href="cart.html" class="btn btn-primary">View Cart</a>
                            <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                        </div>
                        <!-- End .dropdown-cart-total -->
                    </div>
                    <!-- End .dropdown-menu -->
                </div>
                <!-- End .cart-dropdown -->

            </div>
            <!-- End .header-right -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .header-middle -->
</header>

<!-- <section class="ftco-section">


    <nav class="navbar nav-tabs navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light  fixed-top" id="ftco-navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active"><a href="{{url('/home')}}" class="nav-link">Home</a></li>

                    <li class="nav-item"><a href="{{url('/hotels')}}" class="nav-link">Hotels</a></li>
                    <li class="nav-item"><a href="{{url('/cars')}}" class="nav-link">Cars</a></li>
                    <li class="nav-item"><a href="{{url('/resturants')}}" class="nav-link">Resturants</a></li>
                </ul>

                <ul class="justify-content-end navbar-nav">
                    <li class="nav-item"><a href="{{url('/adminlogin')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block" style="margin: 5px;">Admin Login</a></li>

                    @session('user')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-logout" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{session('user')}}
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="rounded-circle" height="30" alt="" loading="lazy" />
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">My profile</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
                    </li>
                    @else
                    <li class="nav-item"><a href="{{url('/login')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block" style="margin: 5px;">Login</a></li>
                    @endsession
                </ul>
            </div>
        </div>

    </nav>

</section> -->