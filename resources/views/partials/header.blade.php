<header id="masthead" class="site-header header-v1" style="background-image: none; ">
    <div class="col-full desktop-only">
        <div class="techmarket-sticky-wrap">
            <div class="row">
                <div class="site-branding">
                    <a href="{{route('index')}}" class="custom-logo-link" rel="home">
                        <img src="{{asset('samfan/assets/images/logo-samfan.png')}}" alt="logo">
                    </a>
                    <!-- /.custom-logo-link -->
                </div>
                <!-- /.site-branding -->
                <!-- ============================================================= End Header Logo ============================================================= -->
                <nav id="primary-navigation" class="primary-navigation" aria-label="Primary Navigation"
                    data-nav="flex-menu">
                    <ul id="menu-primary-menu" class="nav yamm">
                        @foreach ($shared_categories as $cat)
                            @if($loop->index < 6)
                                <li class="menu-item menu-item-has-children">
                                    <a title="{{$cat->name}}" aria-haspopup="true"
                                        href="{{route('product.catalogue', ['alias' => $cat->slug])}}">{{$cat->name}}<span
                                            class="caret"></span></a>

                                </li>
                            @endif
                        @endforeach
                    </ul>
                    <!-- .nav -->
                </nav>
                <!-- .primary-navigation -->
                <nav id="secondary-navigation" class="secondary-navigation" aria-label="Secondary Navigation"
                    data-nav="flex-menu">
                    <ul id="menu-secondary-menu" class="nav">
                        <li class="menu-item">
                            <a title="My Account" href="#">
                                <i class="tm tm-login-register"></i>Đăng ký / Đăng Nhập</a>
                        </li>
                        <li class="techmarket-flex-more-menu-item dropdown">
                            <a title="..." href="#" data-toggle="dropdown" class="dropdown-toggle">...</a>
                            <ul class="overflow-items dropdown-menu"></ul>
                        </li>
                    </ul>
                    <!-- .nav -->
                </nav>
                <!-- .secondary-navigation -->
            </div>
            <!-- /.row -->
        </div>
        <!-- .techmarket-sticky-wrap -->
        @if(Route::is('product.detail'))

        @else
            <div class="row align-items-center">
                <div id="departments-menu" class="dropdown departments-menu">
                    <button class="btn dropdown-toggle btn-block" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="tm tm-departments-thin"></i>
                        <span>Tất cả danh mục</span>
                    </button>
                    <ul id="menu-departments-menu" class="dropdown-menu yamm departments-menu-dropdown">
                        @foreach ($shared_categories as $cat)
                            <li class="menu-item menu-item-type-custom animate-dropdown">
                                <a title="{{$cat->name}}"
                                    href="{{route('product.catalogue', ['alias' => $cat->slug])}}">{{$cat->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- .departments-menu -->
                <form class="navbar-search" method="post" action="#">
                    @csrf
                    <label class="sr-only screen-reader-text" for="search">Search for:</label>
                    <div class="input-group">
                        <input type="text" id="search" class="form-control search-field product-search-field" dir="ltr"
                            value="" name="s" placeholder="Search for products" />
                        <div class="input-group-addon search-categories">
                            <select name='category_id' id='product_cat' class='postform resizeselect'>
                                <option value='0' selected='selected'>Tất cả sản phẩm</option>
                                @foreach ($shared_categories as $cat)
                                    <option class="level-0" value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- .input-group-addon -->
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-search"></i>
                                <span class="search-btn">Tìm kiếm</span>
                            </button>
                        </div>
                        <!-- .input-group-btn -->
                    </div>
                    <!-- .input-group -->
                </form>
                <!-- .navbar-search -->
                <ul class="header-compare nav navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="tm tm-compare"></i>
                            <span id="top-cart-compare-count" class="value">0</span>
                        </a>
                    </li>
                </ul>
                <!-- .header-compare -->
                <ul class="header-wishlist nav navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="tm tm-favorites"></i>
                            <span id="top-cart-wishlist-count" class="value">0</span>
                        </a>
                    </li>
                </ul>
                <!-- .header-wishlist -->
                <ul id="site-header-cart" class="site-header-cart menu">
                    <li class="animate-dropdown dropdown ">
                        <a class="cart-contents" href="#" data-toggle="dropdown" title="View your shopping cart">
                            <i class="tm tm-shopping-bag"></i>
                            <span class="count">0</span>
                            <span class="amount">
                                <span class="price-label">Giỏ hàng</span>0 đ</span>
                        </a>
                         <ul class="dropdown-menu dropdown-menu-mini-cart">
                                        <li>
                                            <div class="widget woocommerce widget_shopping_cart">
                                                <div class="widget_shopping_cart_content">
                                                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                                        
                                                    </ul>
                                                    <p class="woocommerce-mini-cart__total total">
                                                        <strong>Tổng tiền:</strong>
                                                        <span id="totalPrice" class="woocommerce-Price-amount amount">
                                                            0</span>
                                                    </p>
                                                    <p class="woocommerce-mini-cart__buttons buttons">
                                                        <a href="{{route('cart.index')}}" class="button wc-forward">Xem giỏ hàng</a>
                                                        <a href="{{route('checkout')}}" class="button checkout wc-forward">Thanh toán</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> 
                    </li>
                </ul>
                <!-- .site-header-cart -->
            </div>
        @endif
        <!-- /.row -->
    </div>
    <!-- .col-full -->

    <div class="col-full handheld-only">
        <div class="handheld-header">
            <div class="row">
                <div class="site-branding">
                    <a href="{{route('index')}}" class="custom-logo-link" rel="home">
                        <img src="{{asset('samfan/assets/images/logo-samfan.png')}}" alt="logo">
                    </a>
                    <!-- /.custom-logo-link -->
                </div>
                <!-- /.site-branding -->
                <!-- ============================================================= End Header Logo ============================================================= -->
                <div class="handheld-header-links">
                    <ul class="columns-3">
                        <li class="my-account">
                            <a href="login-and-register.html" class="has-icon">
                                <i class="tm tm-login-register"></i>
                            </a>
                        </li>
                        <li class="wishlist">
                            <a href="wishlist.html" class="has-icon">
                                <i class="tm tm-favorites"></i>
                                <span class="count">3</span>
                            </a>
                        </li>
                        <li class="compare">
                            <a href="compare.html" class="has-icon">
                                <i class="tm tm-compare"></i>
                                <span class="count">3</span>
                            </a>
                        </li>
                    </ul>
                    <!-- .columns-3 -->
                </div>
                <!-- .handheld-header-links -->
            </div>
            <!-- /.row -->
            <div class="techmarket-sticky-wrap">
                <div class="row">
                    <nav id="handheld-navigation" class="handheld-navigation" aria-label="Handheld Navigation">
                        <button class="btn navbar-toggler" type="button">
                            <i class="tm tm-departments-thin"></i>
                            <span>Menu</span>
                        </button>
                        <div class="handheld-navigation-menu">
                            <span class="tmhm-close">Close</span>
                            <ul id="menu-departments-menu-1" class="nav">
                                @foreach ($shared_categories as $cat)
                                    <li class="menu-item animate-dropdown">
                                        <a title="{{$cat->name}}"
                                            href="{{route('product.catalogue', ['alias' => $cat->slug])}}">{{$cat->name}}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <!-- .handheld-navigation-menu -->
                    </nav>
                    <!-- .handheld-navigation -->
                    <div class="site-search">
                        <div class="widget woocommerce widget_product_search">
                            <form role="search" method="get" class="woocommerce-product-search" action="#">
                                <label class="screen-reader-text" for="woocommerce-product-search-field-0">Tìm
                                    kiếm:</label>
                                <input type="search" id="woocommerce-product-search-field-0" class="search-field"
                                    placeholder="Search products&hellip;" value="" name="s" />
                                <input type="submit" value="Search" />
                                <input type="hidden" name="post_type" value="product" />
                            </form>
                        </div>
                        <!-- .widget -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- .techmarket-sticky-wrap -->
        </div>
        <!-- .handheld-header -->
    </div>
    <!-- .handheld-only -->
</header>
<!-- .header-v1 -->