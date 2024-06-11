<nav id="component-id" class="nv00-gnb" role="navigation" aria-label="main navigation">
        <div class="nv00-gnb__inner-wrap">
            <div class="nv00-gnb__inner-wrap-looping--start" tabindex="0"></div>
            <div class="nv00-gnb__logo-wrap">
                <a href="{{route('index')}}" class="nv00-gnb__logo h-100" an-tr="nv00_gnb-1depth-navigation2"
                    an-ca="navigation" an-ac="gnb" an-la="logo" aria-label="Samsung">
                    <img style="height: 100%" src="{{asset('tek/assets/logo.jpg')}}" alt="logo">
                </a>
            </div>
            <div class="nv00-gnb__search-wrap">
                <button class="nv00-gnb__backward-btn">
                    <span class="hidden">previous menu</span>
                    <svg class="icon" focusable="false" aria-hidden="true">
                        <use xlink:href="#backward-bold" href="#backward-bold"></use>
                    </svg>
                </button>
                <button class="nv00-gnb__search-btn gnb__search-btn-js" an-tr="nv00_gnb-1depth-navigation2"
                    an-ca="navigation" an-ac="gnb" an-la="search">
                    <span class="hidden">search</span>
                    <svg class="icon" focusable="false" aria-hidden="true">
                        <use xlink:href="#search-bold" href="#search-bold"></use>
                    </svg>
                </button>
                <button class="nv00-gnb__close-btn" an-tr="nv00_gnb-gnb-navigation2" an-ca="navigation" an-ac="gnb"
                    an-la="gnb:close">
                    <span class="hidden">close menu</span>
                    <svg class="icon" focusable="false" aria-hidden="true">
                        <use xlink:href="#delete-bold" href="#delete-bold"></use>
                    </svg>
                </button>
            </div>
            <div class="nv00-gnb__user-account-wrap">
                <div class="nv00-gnb__user-account before-login hide">
                    <a class="nv00-gnb__user-account-link loginBtn" href="javascript:;" data-linkinfo=""
                        an-tr="nv00_gnb-1depth-navigation2" an-ca="navigation" an-ac="gnb" an-la="sign in sign up">
                        Đăng nhập/Sign-Up
                    </a>
                </div>
                <div class="nv00-gnb__user-account after-login">
                    <a class="nv00-gnb__user-account-link js-user-name">
                        <span class="account-icon js-gnb-afterlogin-no-image">
                            <svg class="icon" focusable="false" aria-hidden="true">
                                <use xlink:href="#user-bold" href="#user-bold"></use>
                            </svg>
                        </span>
                        <p class="user-name">2310 Hunghung</p>
                        <p class="hidden">Mở Menu của tôi</p>
                    </a>
                </div>
            </div>
            <div class="nv00-gnb__l0-menu-wrap">
                <ul class="nv00-gnb__l0-menu-list">
                    @foreach ($shared_categories as $cat)
                        <li class="nv00-gnb__l0-menu">
                            <a href="{{route('product.catalogue', ['alias' => $cat->slug])}}" class="nv00-gnb__l0-menu-btn"
                                role="menuitem" aria-expanded="false" aria-haspopup="true"
                                an-tr="nv00_gnb-1depth-navigation2" an-ca="navigation" an-ac="gnb" an-la="ưu đãi">
                                {{$cat->name}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>