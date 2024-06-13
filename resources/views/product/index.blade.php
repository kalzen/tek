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
                    <ul role="tablist" class="shop-view-switcher nav nav-tabs">
                        <li class="nav-item">
                            <a href="#grid" title="Grid View" data-toggle="tab" class="nav-link">
                                <i class="tm tm-grid-small"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#grid-extended" title="Grid Extended View" data-toggle="tab" class="nav-link ">
                                <i class="tm tm-grid"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#list-view-large" title="List View Large" data-toggle="tab" class="nav-link active">
                                <i class="tm tm-listing-large"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#list-view" title="List View" data-toggle="tab" class="nav-link ">
                                <i class="tm tm-listing"></i>
                            </a>
                        </li>
                    </ul>


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
                    <div id="grid" class="tab-pane" role="tabpanel">
                        <div class="woocommerce columns-7">
                            <div class="products">
                                @foreach ($packages as $package)
                                @if ($package->products->count())
                                    <div class="product first">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Yêu thích</a>
                                        </div>
                                        <!-- .yith-wcwl-add-to-wishlist -->
                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                            href="{{ route('product.detail', ['alias' => $package->products->first()->slug]) }}">
                                            <img width="224" height="197" alt=""
                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                src="{{$package->products->first()->images->first()->url ?? ''}}">
                                            <span class="price">
                                                <span class="woocommerce-Price-amount amount">
                                                    <span
                                                        class="woocommerce-Price-currencySymbol"></span>{{number_format($package->products->first()->price)}}</span>đ
                                            </span>
                                            <h2 class="woocommerce-loop-product__title">{{$package->name}}</h2>
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
                                        </a>
                                        <!-- .woocommerce-LoopProduct-link -->
                                        <div class="hover-area">
                                            <a class="button" href="#">Thêm giỏ hàng</a>
                                            <a class="add-to-compare-link" href="#">So sánh</a>
                                        </div>
                                        <!-- .hover-area -->
                                    </div>
                                @endif
                                @endforeach
                            </div>
                            <!-- .products -->
                        </div>
                        <!-- .woocommerce -->
                    </div>
                    <!-- .tab-pane -->
                    <div id="grid-extended" class="tab-pane" role="tabpanel">
                        <div class="woocommerce columns-7">
                            <div class="products">
                            @foreach ($packages as $package)
                            @if ($package->products->count())
                                <div class="product first">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <a href="#" rel="nofollow" class="add_to_wishlist"> Yêu thích</a>
                                    </div>
                                    <!-- .yith-wcwl-add-to-wishlist -->
                                    <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                        href="{{ route('product.detail',['alias' => $package->products->first()->slug]) }}">
                                        <img width="224" height="197" alt=""
                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                            src="{{$package->products->first()->images->first()->url ?? ''}}">
                                        <span class="price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol"></span>{{number_format($package->products->first()->price)}}</span>đ
                                        </span>
                                        <h2 class="woocommerce-loop-product__title">{{$package->name}}
                                        </h2>
                                    </a>
                                    
                                    <!-- .techmarket-product-rating -->
                                    <span class="sku_wrapper">SKU:
                                        <span class="sku">{{$package->products->first()->code}}</span>
                                    </span>
                                    <div class="woocommerce-product-details__short-description">
                                        <ul>
                                        @foreach (json_decode($package->json_data, true)['modelList'][0]['keySummary'] as $item) 
                                        @if($item['displayType'] == "Feature")                       
                                        <li>{!! $item['title'] !!}</li>          
                                        @endif          
                                        @endforeach
                                        </ul>
                                    </div>
                                    <!-- .woocommerce-product-details__short-description -->
                                    <a class="button product_type_simple add_to_cart_button" href="#">Thêm giỏ hàng</a>
                                    <a class="add-to-compare-link" href="#">So sánh</a>
                                </div>
                                <!-- .product -->
                                 @endif
                            @endforeach
                            </div>
                            <!-- .products -->
                        </div>
                        <!-- .woocommerce -->
                    </div>
                    <!-- .tab-pane -->
                    <div id="list-view-large" class="tab-pane active" role="tabpanel">
                        <div class="woocommerce columns-1">
                            <div class="products">
                            @foreach ($packages as $package)
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
                                                    <span class="border border-black rounded-pill option-chips">{{$other->optionLocalName}}</span>
                                                    @endforeach 
                                                    </div>
                                                @endif
                                                @endforeach
                                                <div class="woocommerce-product-details__short-description mt-2">
                                                    <ul>
                                                    @foreach (json_decode($package->json_data, true)['modelList'][0]['keySummary'] as $item) 
                                                    @if($item['displayType'] == "Feature")                       
                                                    <li>{!! $item['title'] !!}</li>          
                                                    @endif          
                                                    @endforeach
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
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span
                                                            class="woocommerce-Price-currencySymbol"></span>{{number_format($package->products->first()->price)}}</span>đ
                                                </span>
                                                <!-- .price -->
                                                <a class="button add_to_cart_button" href="#">Thêm giỏ hàng</a>
                                                <a class="add-to-compare-link" href="#">So sánh</a>
                                            </div>
                                            <!-- .product-actions -->
                                        </div>
                                        <!-- .media-body -->
                                    </div>
                                    <!-- .media -->
                                </div>
                                <!-- .product -->
                            @endforeach
                            </div>
                            <!-- .products -->
                        </div>
                        <!-- .woocommerce -->
                    </div>
                    <!-- .tab-pane -->
                    <div id="list-view" class="tab-pane" role="tabpanel">
                        <div class="woocommerce columns-1">
                            <div class="products">
                            @foreach ($packages as $package)
                            @if ($package->products->count())
                                <div class="product list-view last">
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
                                                    <span class="border border-black rounded-pill option-chips">{{$other->optionLocalName}}</span>
                                                    @endforeach 
                                                    </div>
                                                @endif
                                                @endforeach
                                                <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    @foreach (json_decode($package->json_data, true)['modelList'][0]['keySummary'] as $item) 
                                                    @if($item['displayType'] == "Feature")                       
                                                    <li>{!! $item['title'] !!}</li>          
                                                    @endif          
                                                    @endforeach
                                                    </ul>
                                                </div>
                                                <!-- .woocommerce-product-details__short-description -->
                                            </div>
                                            <!-- .product-info -->
                                            <div class="product-actions">
                                                <div class="availability">
                                                    Tình trạng:
                                                    <p class="stock in-stock">Còn hàng</p>
                                                </div>
                                                <span class="price">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span
                                                            class="woocommerce-Price-currencySymbol"></span>{{number_format($package->products->first()->price)}}</span>đ
                                                </span>
                                                <!-- .price -->
                                                <a class="button add_to_cart_button" href="#">Thêm giỏ hàng</a>
                                                <a class="add-to-compare-link" href="#">So sánh</a>
                                            </div>
                                            <!-- .product-actions -->
                                        </div>
                                        <!-- .media-body -->
                                    </div>
                                    <!-- .media -->
                                </div>
                                @endif
                            @endforeach
                                <!-- .products -->
                            </div>
                        </div>
                        <!-- .woocommerce -->
                    </div>
                    <!-- .tab-pane -->
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
    </div>
    <!-- .row -->
</div>
@endsection