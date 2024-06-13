@extends('layouts.master')
@section('meta')
<title>{{$product->title}}</title>
<meta name="keywords" content="{{collect($product->tags)->pluck('name')->join(',')}}" />
<meta name="description" content="{{substr(strip_tags($product->description), 0, 300)}}" />
<meta property="og:image" content="{{$product->images()->first()->url ?? ''}}">
<meta property="og:type" content="product">
<meta property="og:title" content="{{$product->title}}">
<meta property="og:description" content="{{substr(strip_tags($product->description), 0, 300)}}">
@stop
@section('styles')
@endsection
@section('content')
<div class="col-full">
    <div class="row">
        <!-- .woocommerce-breadcrumb -->
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="product product-type-simple">
                    <div class="single-product-wrapper">
                        <div class="product-images-wrapper thumb-count-4">
                            <!-- .onsale -->
                            <div id="techmarket-single-product-gallery"
                                class="techmarket-single-product-gallery techmarket-single-product-gallery--with-images techmarket-single-product-gallery--columns-4 images"
                                data-columns="4">
                                <div class="techmarket-single-product-gallery-images" data-ride="tm-slick-carousel"
                                    data-wrap=".woocommerce-product-gallery__wrapper"
                                    data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .techmarket-single-product-gallery-thumbnails__wrapper&quot;}">
                                    <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                                        data-columns="4">
                                        <a href="#" class="woocommerce-product-gallery__trigger">🔍</a>
                                        <figure class="woocommerce-product-gallery__wrapper ">
                                            @foreach ($product->images as $image)
                                            
                                            
                                            <div data-thumb="{{$image->url}}"
                                                class="woocommerce-product-gallery__image">
                                                <a href="{{$image->url}}" tabindex="0">
                                                    <img width="600" height="600"
                                                        src="{{$image->url}}"
                                                        class="attachment-shop_single size-shop_single wp-post-image"
                                                        alt="">
                                                </a>
                                            </div>
                                            @endforeach
                                        </figure>
                                    </div>
                                    <!-- .woocommerce-product-gallery -->
                                </div>
                                <!-- .techmarket-single-product-gallery-images -->
                                <div class="techmarket-single-product-gallery-thumbnails" data-ride="tm-slick-carousel" data-wrap=".techmarket-single-product-gallery-thumbnails__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;vertical&quot;:true,&quot;verticalSwiping&quot;:true,&quot;focusOnSelect&quot;:true,&quot;touchMove&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-up\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-down\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .woocommerce-product-gallery__wrapper&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:765,&quot;settings&quot;:{&quot;vertical&quot;:false,&quot;horizontal&quot;:true,&quot;verticalSwiping&quot;:false,&quot;slidesToShow&quot;:4}}]}">
                                    <figure class="techmarket-single-product-gallery-thumbnails__wrapper">
                                        @foreach($product->images as $image)
                                        <figure data-thumb="{{$image->url}}" class="techmarket-wc-product-gallery__image">
                                            <img width="180" height="180" src="{{$image->url}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
                                        </figure>
                                        @endforeach
                                    </figure>
                                    <!-- .techmarket-single-product-gallery-thumbnails__wrapper -->
                                </div>
                                <!-- .techmarket-single-product-gallery-thumbnails -->
                            </div>
                            <!-- .techmarket-single-product-gallery -->
                        </div>
                        <!-- .product-images-wrapper -->
                        <div class="summary entry-summary">
                            <div class="single-product-header">
                                <h1 class="product_title entry-title">{{$product->title}}</h1>
                                <a class="add-to-wishlist" href="#"> Yêu thích</a>
                            </div>
                            <p class="price">
                                        <ins>
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol"></span>{{number_format($product->price)}}</span>đ
                                        </ins>
                                    </p>
                            <!-- .single-product-header -->
                            <div class="single-product-meta">
                                
                                <div class="cat-and-sku">
                                    <span class="sku_wrapper">SKU:
                                        <span class="sku">{{$product->code}}</span>
                                    </span>
                                </div>
                                @foreach (json_decode($product->packages->first()->options) as $option)
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
                            </div>
                            <!-- .single-product-meta -->
                            <!--<div class="rating-and-sharing-wrapper">
                                <div class="woocommerce-product-rating">
                                    <div class="star-rating">
                                        <span style="width:100%">Rated
                                            <strong class="rating">5.00</strong> out of 5 based on
                                            <span class="rating">1</span> customer rating</span>
                                    </div>
                                    <a rel="nofollow" class="woocommerce-review-link" href="#reviews">(<span
                                            class="count">1</span> customer review)</a>
                                </div>
                            </div> -->
                            <!-- .rating-and-sharing-wrapper -->
                            <div class="woocommerce-product-details__short-description">
                                <ul>
                                @foreach (json_decode($product->packages->first()->json_data, true)['modelList'][0]['keySummary'] as $item) 
                                                    @if($item['displayType'] == "Feature")                       
                                                    <li>{!! $item['title'] !!}</li>          
                                                    @endif          
                                                    @endforeach
                                </ul>
                            </div>
                            <!-- .woocommerce-product-details__short-description -->
                            <div class="product-actions-wrapper">
                                <div class="product-actions">
                                    
                                    <!-- .single-product-header -->
                                    <form enctype="multipart/form-data" method="post" class="cart">
                                        <div class="quantity">
                                            <label for="quantity-input">Số lượng</label>
                                            <input type="number" size="4" class="input-text qty text" title="Qty"
                                                value="1" name="quantity" id="quantity-input">
                                        </div>
                                        <!-- .quantity -->
                                        <button class="single_add_to_cart_button button alt" value="185"
                                            name="add-to-cart" type="submit">Thêm giỏ hàng</button>
                                    </form>
                                    <!-- .cart -->
                                    <a class="add-to-compare-link" href="#">So sánh</a>
                                </div>
                                <!-- .product-actions -->
                            </div>
                            <!-- .product-actions-wrapper -->
                        </div>
                        <!-- .entry-summary -->
                    </div>
                    <!-- .tm-related-products-carousel -->
                    <div class="woocommerce-tabs wc-tabs-wrapper">
                        {!!$product->content!!}
                    </div>
                    <!-- .brands-carousel -->
                </div>
                <!-- .product -->
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
    </div>
    <!-- .row -->
</div>
<script>
    function appendVideoPlayer() {
        try {
            const videoContainer = document.querySelector('.video');
            if (!videoContainer) {
                console.error('Video container not found');
                return;
            }
            const videoData = JSON.parse(videoContainer.getAttribute('data-video-data'));
            if (!videoData) {
                console.error('Video data not found');
                return;
            }
            const videoElement = document.createElement('video');
            videoElement.classList.add('video-player');
            videoElement.setAttribute('playsinline', '');
            videoElement.setAttribute('loop', '');
            videoElement.setAttribute('preload', 'auto');
            videoElement.setAttribute('style', 'width: 100%; height: 100%;');
            const desktopSource = document.createElement('source');
            desktopSource.setAttribute('src', videoData.desktopSrc);
            desktopSource.setAttribute('type', 'video/mp4');
            videoElement.appendChild(desktopSource);
            const mobileSource = document.createElement('source');
            mobileSource.setAttribute('src', videoData.mobileSrc);
            mobileSource.setAttribute('type', 'video/mp4');
            videoElement.appendChild(mobileSource);
            videoElement.autoplay = videoData.autoplay;
            videoElement.muted = videoData.muted;
            videoElement.loop = videoData.loop;
            videoElement.controls = videoData.controls;
            const captionElement = document.createElement('p');
            captionElement.classList.add('hidden');
            captionElement.textContent = videoData.caption;
            videoElement.appendChild(captionElement);
            const figure = document.createElement('figure');
            figure.classList.add('video--played');
            figure.style.width = '100%';
            figure.style.height = '100%';
            figure.appendChild(videoElement);
            videoContainer.innerHTML = '';
            videoContainer.appendChild(figure);
        } catch (error) {
            console.error('Error appending video player:', error);
        }
    }
    document.addEventListener('DOMContentLoaded', () => {
        appendVideoPlayer();
    });
</script>
@endsection