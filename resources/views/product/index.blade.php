@extends('layouts.master')
@section('meta')
@if(isset($catalogue))
    <title>{{$catalogue->name}} - {{env('APP_NAME')}}</title>
    <meta name="keywords" content="{{$catalogue->tags->pluck('name')->join(', ')}}" />
    <meta name="description" content="{{$catalogue->description}}" />
    <meta property="og:image" content="{{$catalogue->image->url ?? ''}}">
    <meta property="og:type" content="product">
    <meta property="og:title" content="{{$catalogue->name}}">
    <meta property="og:description" content="{{$catalogue->description}}">
@else
    <title>Sản phẩm - {{env('APP_NAME')}}</title>
    <meta name="keywords" content="{{env('APP_NAME')}}" />
    <meta name="description" content="{{env('APP_NAME')}}" />
    <meta property="og:image" content="{{env('APP_LOGO')}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{env('APP_NAME')}}">
    <meta property="og:description" content="{{env('APP_NAME')}}">
@endif
@stop
@section('content')
<div class="col-full">
    <div class="row">
        <nav class="woocommerce-breadcrumb">
            <a href="{{route('index')}}">Trang chủ</a>
            <span class="delimiter">
                <i class="tm tm-breadcrumbs-arrow-right"></i>
            </span>
            <a href="#">{{$catalogue->name}}</a>
            <span class="delimiter">
                <i class="tm tm-breadcrumbs-arrow-right"></i>
            </span>Danh sách sản phẩm
        </nav>
        <!-- .woocommerce-breadcrumb -->
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="shop-control-bar">
                    <div class="handheld-sidebar-toggle">
                        <button type="button" class="btn sidebar-toggler">
                            <i class="fa fa-sliders"></i>
                            <span>Lọc</span>
                        </button>
                    </div>
                    <!-- .handheld-sidebar-toggle -->
                    <h1 class="woocommerce-products-header__title page-title">{{$catalogue->name}}</h1>
                   


                    <!-- .woocommerce-ordering -->
                    <nav class="techmarket-advanced-pagination">
                        <form class="form-adv-pagination" method="post">
                            <input type="number" value="1" class="form-control" step="1" max="5" min="1" size="2"
                                id="goto-page">
                        </form> of 5<a href="#" class="next page-numbers">→</a>
                    </nav>
                    <!-- .techmarket-advanced-pagination -->
                </div>
                <!-- .shop-control-bar -->
                <div class="tab-content">
                    <!-- .tab-pane -->
                    <div id="list-view-large" class="tab-pane active" role="tabpanel">
                        <div class="woocommerce columns-1">
                            <div class="products">
                            @foreach ($packages as $package)
                            @if ($package->products->count())
                                <div class="product list-view-large first ">
                                    <div class="media">
                                        <img width="224" height="197" alt=""
                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                            src="{{$package->products->first()->images->first()->url ?? ''}}">
                                        <div class="media-body">
                                            <div class="product-info">
                                                <div class="yith-wcwl-add-to-wishlist">
                                                    <a href="#" rel="nofollow" class="add_to_wishlist"> Yêu thích</a>
                                                </div>
                                                <!-- .yith-wcwl-add-to-wishlist -->
                                                <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                    href="{{ route('product.detail',['alias' => $package->products->first()->slug]) }}">
                                                    <h2 class="woocommerce-loop-product__title">{{$package->name}}</h2>
                                                    
                                                </a>
                                                <!-- .brand -->
                                                @if(isset($package->options) && $package->options!= null)
                                                @foreach (json_decode($package->options) as $option)
                                                @if($option->fmyChipType == "COLOR")
                                                    <div class="d-flex align-items-center justify-content-start mt-2">
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
                                                @else
                                                    <div class="d-flex align-items-center justify-content-start mt-2">
                                                    @foreach($option->optionList as $other)
                                                    <span data-package="{{$package->id}}" data-name="{{$option->fmyChipType}}" data-value="{{$other->optionCode}}" class="border border-black rounded-pill option-chips getprice">{{$other->optionLocalName}}</span>
                                                    @endforeach 
                                                    </div>
                                                @endif
                                                @endforeach
                                                @endif
                                                <div class="woocommerce-product-details__short-description mt-2">
                                                    <ul>
                                                    @if (isset(json_decode($package->json_data, true)['modelList'][0]['uspDescription']))
                                                    @foreach (json_decode($package->json_data, true)['modelList'][0]['uspDescription'] as $item) 
                                                                    
                                                    <li>{!! $item !!}</li>          
                                                         
                                                    @endforeach
                                                    @endif
                                                    </ul>
                                                </div>
                                                <!-- .woocommerce-product-details__short-description -->
                                                <span class="sku_wrapper">SKU:
                                                    <span class="sku">{{$package->products->first()->code}}</span>
                                                </span>
                                            </div>
                                            <!-- .product-info -->
                                            <div class="product-actions">
                                                <div class="availability">
                                                    Tình trạng:
                                                    <p class="stock in-stock">Còn hàng</p>
                                                </div>
                                                <span class="price">
                                                    <span id="package-{{$package->id}}" class="woocommerce-Price-amount amount">
                                                        {{number_format($package->products->first()->price)}}</span>đ
                                                </span>
                                                <!-- .price -->
                                                <a id="cart-{{$package->id}}" data-model="{{$package->products->first()->code}}" class="button add_to_cart_button" href="#">Thêm giỏ hàng</a>
                                                <a class="add-to-compare-link" href="#">So sánh</a>
                                            </div>
                                            <!-- .product-actions -->
                                        </div>
                                        <!-- .media-body -->
                                    </div>
                                    <!-- .media -->
                                </div>
                                <!-- .product -->
                                 @endif
                            @endforeach
                            </div>
                            <!-- .products -->
                        </div>
                        <!-- .woocommerce -->
                    </div>>
                </div>
                <!-- .tab-content -->
                <div class="shop-control-bar-bottom">
                    
                    <p class="woocommerce-result-count">
                        Showing 1&ndash;15 of 73 results
                    </p>
                    <!-- .woocommerce-result-count -->
                    <nav class="woocommerce-pagination">
                        <ul class="page-numbers">
                            <li>
                                <span class="page-numbers current">1</span>
                            </li>
                            <li><a href="#" class="page-numbers">2</a></li>
                            <li><a href="#" class="page-numbers">3</a></li>
                            <li><a href="#" class="page-numbers">4</a></li>
                            <li><a href="#" class="page-numbers">5</a></li>
                            <li><a href="#" class="next page-numbers">→</a></li>
                        </ul>
                        <!-- .page-numbers -->
                    </nav>
                    <!-- .woocommerce-pagination -->
                </div>
                <!-- .shop-control-bar-bottom -->
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
        <div id="secondary" style="opacity:0" class="widget-area shop-sidebar" role="complementary">
                            <div class="widget woocommerce widget_product_categories techmarket_widget_product_categories" id="techmarket_product_categories_widget-2">
                                <ul class="product-categories ">
                                    <li class="product_cat">
                                        <span>Browse Categories</span>
                                        <ul>
                                            <li class="cat-item">
                                                <a href="product-category.html">
                                                    <span class="no-child"></span>Televisions</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="product-category.html">
                                                    <span class="no-child"></span>Home Theater &amp; Audio</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="product-category.html">
                                                    <span class="child-indicator">
                                                        <i class="fa fa-angle-right"></i>
                                                    </span>Headphones</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="product-category.html">
                                                    <span class="child-indicator">
                                                        <i class="fa fa-angle-right"></i>
                                                    </span>Digital Cameras</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="product-category.html">
                                                    <span class="child-indicator">
                                                        <i class="fa fa-angle-right"></i>
                                                    </span>Cells &amp; Tablets</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="product-category.html">
                                                    <span class="no-child"></span>Smartwatches</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="product-category.html">
                                                    <span class="child-indicator">
                                                        <i class="fa fa-angle-right"></i>
                                                    </span>Games &amp; Consoles</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="product-category.html">
                                                    <span class="no-child"></span>Printer</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="product-category.html">
                                                    <span class="no-child"></span>TV &amp; Video</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="product-category.html">
                                                    <span class="child-indicator">
                                                        <i class="fa fa-angle-right"></i>
                                                    </span>Home Entertainment</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="product-category.html">
                                                    <span class="child-indicator">
                                                        <i class="fa fa-angle-right"></i>
                                                    </span>Computers &amp; Laptops</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="product-category.html">
                                                    <span class="no-child"></span>Notebooks</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="product-category.html">
                                                    <span class="child-indicator">
                                                        <i class="fa fa-angle-right"></i>
                                                    </span>Desktop PCs</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="product-category.html">
                                                    <span class="no-child"></span>Mac Computers</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="product-category.html">
                                                    <span class="child-indicator">
                                                        <i class="fa fa-angle-right"></i>
                                                    </span>All in One PC</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="product-category.html">
                                                    <span class="child-indicator">
                                                        <i class="fa fa-angle-right"></i>
                                                    </span>Audio &amp; Music</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="product-category.html">
                                                    <span class="no-child"></span>PC Components</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="product-category.html">
                                                    <span class="child-indicator">
                                                        <i class="fa fa-angle-right"></i>
                                                    </span>Desktop PCs</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="product-category.html">
                                                    <span class="no-child"></span>Monitors</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div id="techmarket_products_filter-3" class="widget widget_techmarket_products_filter">
                                <span class="gamma widget-title">Filters</span>
                                <div class="widget woocommerce widget_price_filter" id="woocommerce_price_filter-2">
                                    <p>
                                        <span class="gamma widget-title">Filter by price</span>
                                        </p><div class="price_slider_amount">
                                            <input id="amount" type="text" placeholder="Min price" data-min="6" value="33" name="min_price" style="display: none;">
                                            <button class="button" type="submit">Filter</button>
                                        </div>
                                        <div id="slider-range" class="price_slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span></div>
                                </div>
                                <div class="widget woocommerce widget_layered_nav maxlist-more" id="woocommerce_layered_nav-2">
                                    <span class="gamma widget-title">Brands</span>
                                    <ul>
                                        <li class="wc-layered-nav-term ">
                                            <a href="#">apple</a>
                                            <span class="count">(2)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">bosch</a>
                                            <span class="count">(1)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">cannon</a>
                                            <span class="count">(1)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">connect</a>
                                            <span class="count">(1)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">galaxy</a>
                                            <span class="count">(3)</span>
                                        </li>
                                        <li class="wc-layered-nav-term " style="display: none;"><a href="#">gopro</a>
                                            <span class="count">(1)</span>
                                        </li>
                                        <li class="wc-layered-nav-term " style="display: none;"><a href="#">kinova</a>
                                            <span class="count">(1)</span>
                                        </li>
                                        <li class="wc-layered-nav-term " style="display: none;"><a href="#">samsung</a>
                                            <span class="count">(1)</span>
                                        </li>
                                    </ul><p class="maxlist-more"><a href="#">+ Show more</a></p>
                                </div>
                                <!-- .woocommerce widget_layered_nav -->
                                <div class="widget woocommerce widget_layered_nav maxlist-more" id="woocommerce_layered_nav-3">
                                    <span class="gamma widget-title">Color</span>
                                    <ul>
                                        <li class="wc-layered-nav-term "><a href="#">Black</a>
                                            <span class="count">(4)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">Blue</a>
                                            <span class="count">(4)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">Green</a>
                                            <span class="count">(5)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">Orange</a>
                                            <span class="count">(5)</span>
                                        </li>
                                        <li class="wc-layered-nav-term "><a href="#">Red</a>
                                            <span class="count">(4)</span>
                                        </li>
                                        <li class="wc-layered-nav-term " style="display: none;"><a href="#">Yellow</a>
                                            <span class="count">(5)</span>
                                        </li>
                                        <li class="wc-layered-nav-term " style="display: none;"><a href="#">Green</a>
                                            <span class="count">(5)</span>
                                        </li>
                                        <li class="wc-layered-nav-term " style="display: none;"><a href="#">Orange</a>
                                            <span class="count">(5)</span>
                                        </li>
                                        <li class="wc-layered-nav-term " style="display: none;"><a href="#">Red</a>
                                            <span class="count">(4)</span>
                                        </li>
                                        <li class="wc-layered-nav-term " style="display: none;"><a href="#">Yellow</a>
                                            <span class="count">(5)</span>
                                        </li>
                                    </ul><p class="maxlist-more"><a href="#">+ Show more</a></p>
                                </div>
                                <!-- .woocommerce widget_layered_nav -->
                            </div>
                            <div class="widget widget_techmarket_products_carousel_widget">
                                <section id="single-sidebar-carousel" class="section-products-carousel">
                                    <header class="section-header">
                                        <h2 class="section-title">Latest Products</h2>
                                        <nav class="custom-slick-nav"></nav>
                                    </header>
                                    <!-- .section-header -->
                                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;<a href=https://transvelo.github.io/" #\&quot;&gt;&lt;i="" tm-arrow-left\&quot;&gt;&lt;\="" i&gt;&lt;\="" a&gt;&quot;,&quot;nextarrow&quot;:&quot;&lt;a="" href="https://transvelo.github.io/&quot;#\&quot;><i" tm-arrow-right\&quot;&gt;&lt;\="" a&gt;&quot;,&quot;appendarrows&quot;:&quot;#single-sidebar-carousel="" .custom-slick-nav&quot;}"="">
                                        <div class="container-fluid">
                                            <div class="woocommerce columns-1">
                                                <div class="products slick-initialized slick-slider"><button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="">Previous</button>
                                                    <div aria-live="polite" class="slick-list draggable"><div class="slick-track" role="listbox" style="opacity: 1; width: 1578px; transform: translate3d(-263px, 0px, 0px);"><div class="landscape-product-widget product slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 263px;">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html" tabindex="-1">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-4.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                    </div><div class="landscape-product-widget product slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide00" style="width: 263px;">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html" tabindex="0">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-1.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                    </div><div class="landscape-product-widget product slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide01" style="width: 263px;">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html" tabindex="-1">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-2.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                    </div><div class="landscape-product-widget product slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide02" style="width: 263px;">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html" tabindex="-1">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-3.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                    </div><div class="landscape-product-widget product slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide03" style="width: 263px;">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html" tabindex="-1">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-4.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                    </div><div class="landscape-product-widget product slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" tabindex="-1" style="width: 263px;">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html" tabindex="-1">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="assets/images/products/sm-1.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                    </div></div></div>
                                                    
                                                    
                                                    
                                                <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="">Next</button></div>
                                                <!-- .products -->
                                            </div>
                                            <!-- .woocommerce -->
                                        </div>
                                        <!-- .container-fluid -->
                                    </div>
                                    <!-- .products-carousel -->
                                </section>
                                <!-- .section-products-carousel -->
                            </div>
                            <!-- .widget_techmarket_products_carousel_widget -->
                        </div>
    </div>
    <!-- .row -->
</div>

@endsection