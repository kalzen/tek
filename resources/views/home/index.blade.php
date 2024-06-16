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
                                        <h2 class="section-title">Sản phẩm nổi bật</h2>
                                        <ul role="tablist" class="nav justify-content-end">
                                            @foreach ($catalogues as $cat)
                                            <li class="nav-item"><a class="nav-link @if($loop->index==0) active @endif" href="#tab-{{$cat->slug}}"
                                                    data-toggle="tab">{{$cat->name}}</a></li>
                                                    @endforeach
                                        </ul>
                                    </header>
                                    <!-- .section-header -->
                                    <div class="tab-content">
                                        @foreach ($catalogues as $cat)
                                        <div id="tab-{{$cat->slug}}" class="tab-pane @if($loop->index==0) active @endif" role="tabpanel">
                                            <div class="products-carousel" data-ride="tm-slick-carousel"
                                                data-wrap=".products"
                                                data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce">
                                                        <div class="products">
                                                            @foreach ($cat->packages as $package)
                                                            @if ($package->products->count())
                                                            <div class="product first">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Yêu thích</a>
                                        </div>
                                        <!-- .yith-wcwl-add-to-wishlist -->
                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                            href="{{ route('product.detail', ['alias' => $package->products->first()->slug] ?? '') }}">
                                            <img width="224" height="197" alt=""
                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                src="{{$package->products->first()->images->first()->url ?? ''}}">
                                            <span class="price">
                                                <span class="woocommerce-Price-amount amount">
                                                    <span
                                                        class="woocommerce-Price-currencySymbol"></span>{{number_format($package->products->first()->price)}} đ</span>
                                            </span>
                                            <h2 class="woocommerce-loop-product__title">{{$package->name}}</h2>
                                            @if(isset($package->options) && $package->options!= null)
                                            @foreach (json_decode($package->options) as $option)
                                                @if($option->fmyChipType == "COLOR")
                                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                                    @foreach($option->optionList as $color)
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                            viewBox="0 0 50 50">
                                                            <g transform="translate(-18.001 9)">
                                                                <rect width="25" height="25" transform="translate(18.001 -9)"
                                                                    fill="none"></rect>
                                                                <path d="M18,0A18,18,0,1,1,0,18,18,18,0,0,1,18,0Z"
                                                                    transform="translate(18.001 -9)" fill="{{$color->optionCode}}">
                                                                </path>
                                                                <path
                                                                    d="M18,1A17,17,0,0,0,5.979,30.019,17,17,0,1,0,30.02,5.979,16.889,16.889,0,0,0,18,1m0-1A18,18,0,1,1,0,18,18,18,0,0,1,18,0Z"
                                                                    transform="translate(18.001 -9)" fill="rgba(0,0,0,0.5)"></path>
                                                            </g>
                                                        </svg>
                                                    @endforeach
                                            
                                                    </div>
                                                @endif
                                            @endforeach
                                            @endif
                                        </a>
                                        <!-- .woocommerce-LoopProduct-link -->
                                        <div class="hover-area">
                                            <a class="button add_to_cart_button" data-model="{{$package->products->first()->code}}" href="#">Thêm giỏ hàng</a>
                                            <a class="add-to-compare-link" href="#">So sánh</a>
                                        </div>
                                        <!-- .hover-area -->
                                                            </div>
                                                            @endif
                                                            @endforeach
                                                            
                                                        </div>
                                                    </div>
                                                    <!-- .woocommerce -->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        @endforeach
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