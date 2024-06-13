<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Techmarket HTML</title>
    <link rel="stylesheet" type="text/css" href="{{asset('samfan/assets/css/bootstrap.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('samfan/assets/css/font-awesome.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('samfan/assets/css/bootstrap-grid.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('samfan/assets/css/bootstrap-reboot.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('samfan/assets/css/font-techmarket.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('samfan/assets/css/slick.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('samfan/assets/css/techmarket-font-awesome.css')}}"
        media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('samfan/assets/css/slick-style.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('samfan/assets/css/animate.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('samfan/assets/css/style.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('samfan/assets/css/colors/blue.css')}}" media="all" />
    @if(Route::is('product.*') ) 
    <link rel="stylesheet" type="text/css" href="https://www.samsung.com/etc.clientlibs/samsung/clientlibs/consumer/global/clientlib-templates/page-standard-pd.min.48429ebca17449d100b162f97aea90f3.css" media="all" />
    <link rel="stylesheet" type="text/css" href="https://www.samsung.com/etc.clientlibs/samsung/clientlibs/consumer/global/clientlib-templates/page" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('samfan/assets/css/product-detail.css')}}" media="all" />
    @endif
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,900" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('samfan/assets/images/fav-icon.png')}}">
</head>

<body class="woocommerce-active @if(Route::is('product.*') ) single-product full-width normal @else page-template-template-homepage-v1 @endif can-uppercase">
    <div id="page" class="hfeed site">
        <div class="top-bar top-bar-v1">
            <div class="col-full">
                <ul id="menu-top-bar-left" class="nav justify-content-center">
                    <li class="menu-item animate-dropdown">
                        <a title="Miễn phí: Giao hàng  - Lắp đặt toàn quốc" href="#">Miễn phí: Giao hàng - Lắp đặt toàn
                            quốc</a>
                    </li>
                    <li class="menu-item animate-dropdown">
                        <a title="Sản phẩm Chính hãng – Xuất VAT " href="#">Sản phẩm Chính hãng – Xuất VAT </a>
                    </li>
                    <li class="menu-item animate-dropdown">
                        <a title="Fast returnings program" href="#">Trả góp 0% Mua trước – Trả sau </a>
                    </li>
                </ul>
                <!-- .nav -->
            </div>
            <!-- .col-full -->
        </div>
        @include('partials.header')
        <!-- .top-bar-v1 -->
         <!-- ============================================================= Header End ============================================================= -->
        <div id="content" class="site-content">
        @yield('content')
        </div>
        <!-- #content -->
         @include('partials.footer')
        
        <!-- .site-footer -->
    </div>
    <script type="text/javascript" src="{{asset('samfan/assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('samfan/assets/js/tether.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('samfan/assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('samfan/assets/js/jquery-migrate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('samfan/assets/js/hidemaxlistitem.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('samfan/assets/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('samfan/assets/js/hidemaxlistitem.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('samfan/assets/js/jquery.easing.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('samfan/assets/js/scrollup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('samfan/assets/js/jquery.waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('samfan/assets/js/waypoints-sticky.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('samfan/assets/js/pace.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('samfan/assets/js/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('samfan/assets/js/scripts.js')}}"></script>
    @if(Route::is('product.*') ) 
    <!-- <script type="text/javascript" src="{{asset('samfan/assets/js/scripts.js')}}"></script> -->
    @endif
</body>

</html>