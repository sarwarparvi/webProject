@extends('master')
@section("index-content")
<main class="main" style="margin-top: 100px;">
    <div>
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
                                <div class="rating">
                                    @if( $hotel->star_rating == 5)
                                    <label class="icon-star"></label>
                                    <label class="icon-star"></label>
                                    <label class="icon-star"></label>
                                    <label class="icon-star"></label>
                                    <label class="icon-star"></label>
                                    @elseif( $hotel->star_rating == 4)
                                    <label class="icon-star"></label>
                                    <label class="icon-star"></label>
                                    <label class="icon-star"></label>
                                    <label class="icon-star"></label>
                                    @elseif( $hotel->star_rating == 3)
                                    <label class="icon-star"></label>
                                    <label class="icon-star"></label>
                                    <label class="icon-star"></label>
                                    @elseif( $hotel->star_rating == 2)
                                    <label class="icon-star"></label>
                                    <label class="icon-star"></label>
                                    @elseif( $hotel->star_rating == 1)
                                    <label class="icon-star"></label>
                                    @endif
                                </div>
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

</main>
@endsection