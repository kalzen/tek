@extends('layouts.master')
@section('content')

            <div class="col-full">
                <div class="row">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="home-v1-slider home-slider">
                                <div class="slider-1"
                                    style="background-image: url(assets/images/slider/home-v1-background.jpg);">
                                    <img src="{{asset('samfan/assets/images/slider/home-v1-img-1.png')}}" alt="">
                                    <div class="caption">
                                        <div class="title">Turn. Click. Expand. Smart modular design simplifies adding
                                            storage for growing media.</div>
                                        <div class="sub-title">Powerful Six Core processor, vibrant 4KUHD display output
                                            and fast SSD elegantly cased in a soft alloy design.</div>
                                        <div class="button">Get Yours now
                                            <i class="tm tm-long-arrow-right"></i>
                                        </div>
                                        <div class="bottom-caption">Free shipping on US Terority</div>
                                    </div>
                                </div>
                                <!-- .slider-1 -->
                                <div class="slider-1 slider-2"
                                    style="background-image: url(assets/images/slider/home-v1-background.jpg);">
                                    <img src="{{asset('samfan/assets/images/slider/home-v1-img-2.png')}}" alt="">
                                    <div class="caption">
                                        <div class="title">The new-tech gift you
                                            <br> are wishing for is
                                            <br> right here
                                        </div>
                                        <div class="sub-title">Big screens in incredibly slim designs
                                            <br>that in your hand.
                                        </div>
                                        <div class="button">Browse now
                                            <i class="tm tm-long-arrow-right"></i>
                                        </div>
                                        <div class="bottom-caption">Free shipping on US Terority </div>
                                    </div>
                                </div>
                                <!-- .slider-2 -->
                            </div>
                            <!-- .home-v1-slider -->
                            <section class="section-top-categories section-categories-carousel"
                                id="categories-carousel-1">
                                <header class="section-header">
                                    <h4 class="pre-title">Danh mục</h4>
                                    <h2 class="section-title">Mua theo loại sản phẩm

                                        <!-- .custom-slick-nav -->
                                </header>
                                <!-- .section-header -->
                                <div class="product-categories-1 product-categories-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#categories-carousel-1 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                        <div class="woocommerce columns-5">
                                            <div class="products">
                                                @foreach ($shared_categories as $cat)
                                                <div class="product-category product first">
                                                    <a href="{{route('product.catalogue', ['alias' => $cat->slug])}}">
                                                        <img width="224" height="197" alt="{{$cat->name}}" src="{{$cat->image->url}}">
                                                        <h2 class="woocommerce-loop-category__title">
                                                        {{$cat->name}}
                                                        </h2>
                                                    </a>
                                                </div>
                                                @endforeach
                                                <!-- .product-category -->
                                                
                                            </div>
                                            <!-- .products -->
                                        </div>
                                        <!-- .woocommerce -->
                                    </div>
                                <!-- .product-categories-carousel -->
                            </section>
                            <!-- .section-categories-carousel -->
                          
                            <section class="section-hot-new-arrivals section-products-carousel-tabs techmarket-tabs">
                                <div class="section-products-carousel-tabs-wrap">
                                    <header class="section-header">
                                        <h2 class="section-title">Hot Best Sellers</h2>
                                        <ul role="tablist" class="nav justify-content-end">
                                            <li class="nav-item"><a class="nav-link active" href="#tab-59f89f08825d50"
                                                    data-toggle="tab">Top 20</a></li>
                                            <li class="nav-item"><a class="nav-link " href="#tab-59f89f08825d51"
                                                    data-toggle="tab">Audio &amp; Video</a></li>
                                            <li class="nav-item"><a class="nav-link " href="#tab-59f89f08825d52"
                                                    data-toggle="tab">Laptops &amp; Computers</a></li>
                                            <li class="nav-item"><a class="nav-link " href="#tab-59f89f08825d53"
                                                    data-toggle="tab">Video Cameras</a></li>
                                        </ul>
                                    </header>
                                    <!-- .section-header -->
                                    <div class="tab-content">
                                        <div id="tab-59f89f08825d50" class="tab-pane active" role="tabpanel">
                                            <div class="products-carousel" data-ride="tm-slick-carousel"
                                                data-wrap=".products"
                                                data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce">
                                                        <div class="products">
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/12.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Bbd
                                                                        23-Inch Screen LED-Lit Monitorss Buds</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="{{asset('samfan/assets/images/products/14.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 262.81</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">399.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band
                                                                        Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/6.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Gear
                                                                        Virtual Reality 3D with Bluetooth Glasses</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/1.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Smart
                                                                        Watches 3 SWR50</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/15.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 399.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band
                                                                        Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="{{asset('samfan/assets/images/products/7.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 789.95</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">999.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">
                                                                        Bluetooth on-ear PureBass Headphones</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/8.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Video &
                                                                        Air Quality Monitor</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/10.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Xtreme
                                                                        ultimate splashproof portable speaker</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/16.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 262.81</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band
                                                                        Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="{{asset('samfan/assets/images/products/2.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 309.95</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">459.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">ZenBook
                                                                        3 Ultrabook 8GB 512SSD W10</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/3.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">On-ear
                                                                        Wireless NXTG</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/4.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">4K
                                                                        Action Cam with Wi-Fi & GPS</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/9.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Watch
                                                                        Stainless with Grey Suture Leather Strap</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/5.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">XONE
                                                                        Wireless Controller</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/11.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Xtreme
                                                                        ultimate splashproof portable speaker</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/13.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Drone
                                                                        WIFI FPV With 4K</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                        </div>
                                                    </div>
                                                    <!-- .woocommerce -->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        <!-- .tab-pane -->
                                        <div id="tab-59f89f08825d51" class="tab-pane " role="tabpanel">
                                            <div class="products-carousel" data-ride="tm-slick-carousel"
                                                data-wrap=".products"
                                                data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce">
                                                        <div class="products">
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="{{asset('samfan/assets/images/products/7.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 789.95</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">999.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">
                                                                        Bluetooth on-ear PureBass Headphones</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/15.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 399.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band
                                                                        Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/16.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 262.81</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band
                                                                        Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/12.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Bbd
                                                                        23-Inch Screen LED-Lit Monitorss Buds</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/10.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Xtreme
                                                                        ultimate splashproof portable speaker</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="{{asset('samfan/assets/images/products/14.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 262.81</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">399.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band
                                                                        Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/4.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">4K
                                                                        Action Cam with Wi-Fi & GPS</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/6.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Gear
                                                                        Virtual Reality 3D with Bluetooth Glasses</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/9.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Watch
                                                                        Stainless with Grey Suture Leather Strap</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="{{asset('samfan/assets/images/products/2.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 309.95</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">459.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">ZenBook
                                                                        3 Ultrabook 8GB 512SSD W10</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/3.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">On-ear
                                                                        Wireless NXTG</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/8.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Video &
                                                                        Air Quality Monitor</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/5.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">XONE
                                                                        Wireless Controller</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/13.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Drone
                                                                        WIFI FPV With 4K</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/11.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Xtreme
                                                                        ultimate splashproof portable speaker</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/1.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Smart
                                                                        Watches 3 SWR50</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                        </div>
                                                    </div>
                                                    <!-- .woocommerce -->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        <!-- .tab-pane -->
                                        <div id="tab-59f89f08825d52" class="tab-pane " role="tabpanel">
                                            <div class="products-carousel" data-ride="tm-slick-carousel"
                                                data-wrap=".products"
                                                data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce">
                                                        <div class="products">
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/10.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Xtreme
                                                                        ultimate splashproof portable speaker</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="{{asset('samfan/assets/images/products/2.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 309.95</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">459.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">ZenBook
                                                                        3 Ultrabook 8GB 512SSD W10</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="{{asset('samfan/assets/images/products/7.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 789.95</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">999.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">
                                                                        Bluetooth on-ear PureBass Headphones</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/6.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Gear
                                                                        Virtual Reality 3D with Bluetooth Glasses</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/12.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Bbd
                                                                        23-Inch Screen LED-Lit Monitorss Buds</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="{{asset('samfan/assets/images/products/14.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 262.81</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">399.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band
                                                                        Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/11.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Xtreme
                                                                        ultimate splashproof portable speaker</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/13.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Drone
                                                                        WIFI FPV With 4K</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/8.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Video &
                                                                        Air Quality Monitor</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/5.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">XONE
                                                                        Wireless Controller</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/4.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">4K
                                                                        Action Cam with Wi-Fi & GPS</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/9.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Watch
                                                                        Stainless with Grey Suture Leather Strap</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/3.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">On-ear
                                                                        Wireless NXTG</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/16.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 262.81</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band
                                                                        Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/1.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Smart
                                                                        Watches 3 SWR50</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/15.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 399.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band
                                                                        Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                        </div>
                                                    </div>
                                                    <!-- .woocommerce -->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        <!-- .tab-pane -->
                                        <div id="tab-59f89f08825d53" class="tab-pane " role="tabpanel">
                                            <div class="products-carousel" data-ride="tm-slick-carousel"
                                                data-wrap=".products"
                                                data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce">
                                                        <div class="products">
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/9.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Watch
                                                                        Stainless with Grey Suture Leather Strap</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/10.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Xtreme
                                                                        ultimate splashproof portable speaker</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/6.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Gear
                                                                        Virtual Reality 3D with Bluetooth Glasses</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/15.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 399.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band
                                                                        Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/5.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">XONE
                                                                        Wireless Controller</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/16.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 262.81</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band
                                                                        Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/4.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">4K
                                                                        Action Cam with Wi-Fi & GPS</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/1.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Smart
                                                                        Watches 3 SWR50</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/12.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Bbd
                                                                        23-Inch Screen LED-Lit Monitorss Buds</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/8.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Video &
                                                                        Air Quality Monitor</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="{{asset('samfan/assets/images/products/2.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 309.95</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">459.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">ZenBook
                                                                        3 Ultrabook 8GB 512SSD W10</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/13.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Drone
                                                                        WIFI FPV With 4K</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="{{asset('samfan/assets/images/products/14.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 262.81</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">399.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band
                                                                        Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <span class="onsale">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                    </span>
                                                                    <img src="{{asset('samfan/assets/images/products/7.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 789.95</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">999.00</span>
                                                                        </del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">
                                                                        Bluetooth on-ear PureBass Headphones</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/3.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">On-ear
                                                                        Wireless NXTG</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow"
                                                                        class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html"
                                                                    class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset('samfan/assets/images/products/11.jpg')}}"
                                                                        width="224" height="197" class="wp-post-image"
                                                                        alt="">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount"> 456.00</span>
                                                                    </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Xtreme
                                                                        ultimate splashproof portable speaker</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                        href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link"
                                                                        href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                        </div>
                                                    </div>
                                                    <!-- .woocommerce -->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        <!-- .tab-pane -->
                                    </div>
                                    <!-- .tab-content -->
                                </div>
                                <!-- .section-products-carousel-tabs-wrap -->
                            </section>
                            <!-- .section-products-carousel-tabs -->
                            <div class="banners">
                                <div class="row">
                                    <div class="banner banner-long text-in-right">
                                        <a href="#">
                                            <div style="background-size: cover; background-position: center center; background-image: url( {{asset('samfan/assets/images/banner/3-2.jpg')}}); height: 259px;"
                                                class="banner-bg">
                                                <div class="caption">
                                                    <div class="banner-info">
                                                        <h3 class="title">
                                                            <strong>Shop now</strong> to find savings on everything you
                                                            need
                                                            <br> for the big game.
                                                        </h3>
                                                    </div>
                                                    <!-- /.banner-info -->
                                                    <span class="banner-action button">Xem thêm</span>
                                                </div>
                                                <!-- /.caption -->
                                            </div>
                                            <!-- /.banner-bg -->
                                        </a>
                                    </div>
                                    <!-- /.banner -->
                                    <div class="banner banner-short text-in-left">
                                        <a href="#">
                                            <div style="background-size: cover; background-position: center center; background-image: url( {{asset('samfan/assets/images/banner/3-3.jpg')}}); height: 259px;"
                                                class="banner-bg">
                                                <div class="caption">
                                                    <div class="banner-info">
                                                        <h3 class="title">
                                                            <strong>1000 mAh</strong>
                                                            <br> Power Bank Pro.
                                                        </h3>
                                                    </div>
                                                    <!-- /.banner-info -->
                                                    <span class="price">Chỉ từ 159.000 đ</span>
                                                    <span class="banner-action button">Mua ngay</span>
                                                </div>
                                                <!-- /.caption -->
                                            </div>
                                            <!-- /.banner-bg -->
                                        </a>
                                    </div>
                                    <!-- /.banner -->
                                </div>
                                <!-- /.row -->
                            </div>
                            
                            <div class="features-list">
                                <div class="features">
                                    <div class="feature">
                                        <div class="media">
                                            <i class="feature-icon d-flex mr-3 tm tm-free-delivery"></i>
                                            <div class="media-body feature-text">
                                                <h5 class="mt-0">Miễn phí vận chuyển</h5>
                                                <span>Phạm vi toàn quốc</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .feature -->
                                    <div class="feature">
                                        <div class="media">
                                            <i class="feature-icon d-flex mr-3 tm tm-free-return"></i>
                                            <div class="media-body feature-text">
                                                <h5 class="mt-0">Bảo hành chính hãng</h5>
                                                <span>7 ngày đổi hàng</span>
                                            </div>
                                        </div>
                                        <!-- .media -->
                                    </div>
                                    <!-- .feature -->
                                    <div class="feature">
                                        <div class="media">
                                            <i class="feature-icon d-flex mr-3 tm tm-feedback"></i>
                                            <div class="media-body feature-text">
                                                <h5 class="mt-0">Hỗ trợ tư vấn</h5>
                                                <span>8-21h hàng ngày</span>
                                            </div>
                                        </div>
                                        <!-- .media -->
                                    </div>
                                    <!-- .feature -->
                                    <div class="feature">
                                        <div class="media">
                                            <i class="feature-icon d-flex mr-3 tm tm-best-brands"></i>
                                            <div class="media-body feature-text">
                                                <h5 class="mt-0">093.2278.555</h5>
                                                <span>Đặt hàng ngay</span>
                                            </div>
                                        </div>
                                        <!-- .media -->
                                    </div>
                                    <!-- .feature -->
                                </div>
                                <!-- .features -->
                            </div>
                            <!-- .fullwidth-notice -->
                        </main>
                        <!-- #main -->
                    </div>
                    <!-- #primary -->
                </div>
                <!-- .row -->
            </div>
            <!-- .col-full -->
        
@endsection