<!DOCTYPE html>
<html lang="vi-VN">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <link rel="preconnect" href="https://images.samsung.com/" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- SEO -->
    <title>Samsung Việt Nam | Thiết Bị Di Động | Tivi | Điện Gia Dụng</title>
    <meta name="title" content="Samsung Việt Nam | Thiết Bị Di Động | Tivi | Điện Gia Dụng" />
    <meta name="google-site-verification" content="mGsmugIW0iwQfmza2w-o6BE6en6sB-hJ7WfuMkRvrzc" />
    <meta name="facebook-domain-verification" />
    <link rel="canonical" href="{{route('index')}}" />
    <meta name="keywords"
        content="samsung, điện thoại samsung, tivi samsung, điện gia dụng samsung, sản phẩm công nghệ" />
    <meta name="description"
        content="Khám phá công nghệ hàng đầu thế giới tại Samsung Việt Nam và mua sắm các sản phẩm chính hãng như Điện thoại di động, TiVi, thiết bị gia dụng và hơn thế nữa." />
    <meta name="sitecode" content="vn" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('tek/assets/css/styles.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('tek/assets/css/product-detail.css')}}" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<body>
    <div class="partner-bar-wrap ">
        <div class="partner-bar py-2 justify-content-between d-flex align-items-between">
        <span class="partner-bar__msg__text">Miễn phí: Giao hàng  - Lắp đặt toàn quốc</span>
        <span class="partner-bar__msg__text">Sản phẩm Chính hãng – Xuất VAT </span>
        <span class="partner-bar__msg__text">Trả góp 0% Mua trước – Trả sau</span>
        </div>
    </div>
    @include('partials.header')
    <div id="content" role="main">
    @yield('content')
    </div>
</body>
<footer class="footer">
    <!--googleoff: all-->
    <div class="footer">
        <div class="footer-column">
            <h2 class="hidden">Footer Navigation</h2>
            <div class="footer-column__item">
                <img class="img-responsive w-100 d-block" src="{{asset('tek/assets/logo.jpg')}}" alt="">
            </div>
            <div class="footer-column__item">
                <div class="footer-category">
                    <h3 class="footer-category__title" id="footer-category-title-0">Sản Phẩm &amp; Dịch Vụ</h3>
                    <a class="footer-category__anchor" href="javascript:void(0);" role="button"
                        aria-labelledby="footer-category-title-0" an-tr="nv01_footer sitemap|menu1Depth"
                        an-ca="navigation" an-ac="footer" an-la="products &amp; services">
                        <span class="hidden" data-i18n-open="mở" data-i18n-close="Đóng">mở</span>
                        <svg class="icon" focusable="false">
                            <use xlink:href="#open-down-regular" href="#open-down-regular"></use>
                        </svg>
                    </a>

                    <div class="footer-category__list-wrap">
                        <ul class="footer-category__list" role="list">
                            @foreach ($shared_categories as $cat)
                                <li class="footer-category__item" role="listitem">
                                    <a class="footer-category__link"
                                        href="{{route('product.catalogue', ['alias' => $cat->slug])}}"
                                        an-tr="nv01_footer sitemap--cta-menu" an-ca="navigation" an-ac="footer"
                                        an-la="products &amp; services:smartphones"
                                        aria-label="{{$cat->name}}">{{$cat->name}}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-column__item">
                <div class="footer-category">
                    <h3 class="footer-category__title" id="footer-category-title-4">Về chúng tôi</h3>
                    <a class="footer-category__anchor" href="javascript:void(0);" role="button"
                        aria-labelledby="footer-category-title-4" an-tr="nv01_footer sitemap|menu1Depth"
                        an-ca="navigation" an-ac="footer" an-la="about-us">
                        <span class="hidden" data-i18n-open="mở" data-i18n-close="Đóng">mở</span>
                        <svg class="icon" focusable="false">
                            <use xlink:href="#open-down-regular" href="#open-down-regular"></use>
                        </svg>
                    </a>
                    <div class="footer-category__list-wrap">
                        <ul class="footer-category__list" role="list">
                            <li class="footer-category__item" role="listitem">
                                <a class="footer-category__link new-window" href="#" target="_blank"
                                    an-tr="nv01_footer sitemap--cta-menu" an-ca="navigation" an-ac="footer"
                                    an-la="about-us:company-info" aria-label="Giới thiệu">
                                    Giới thiệu
                                    <svg class="icon" focusable="false">
                                        <use xlink:href="#outlink-bold" href="#outlink-bold"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="footer-category__item" role="listitem">
                                <a class="footer-category__link new-window" href="#" target="_blank"
                                    an-tr="nv01_footer sitemap--cta-menu" an-ca="navigation" an-ac="footer"
                                    an-la="about-us:business-area" aria-label="Quy trình giao hàng">
                                    Quy trình giao hàng
                                    <svg class="icon" focusable="false">
                                        <use xlink:href="#outlink-bold" href="#outlink-bold"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="footer-category__item" role="listitem">
                                <a class="footer-category__link new-window"
                                    href="//www.samsung.com/vn/about-us/brand-identity/" target="_blank"
                                    an-tr="nv01_footer sitemap--cta-menu" an-ca="navigation" an-ac="footer"
                                    an-la="about-us:brand-identity" aria-label="Lợi ích mua hàng">
                                    Lợi ích mua hàng
                                    <svg class="icon" focusable="false">
                                        <use xlink:href="#outlink-bold" href="#outlink-bold"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="footer-category__item" role="listitem">
                                <a class="footer-category__link new-window" href="#" target="_blank"
                                    an-tr="nv01_footer sitemap--cta-menu" an-ca="navigation" an-ac="footer"
                                    an-la="about-us:careers" aria-label="Hướng dẫn mua hàng">
                                    Hướng dẫn mua hàng
                                    <svg class="icon" focusable="false">
                                        <use xlink:href="#outlink-bold" href="#outlink-bold"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="footer-category__item" role="listitem">
                                <a class="footer-category__link new-window" href="//www.samsung.com/vn/about-us/ethics/"
                                    target="_blank" an-tr="nv01_footer sitemap--cta-menu" an-ca="navigation"
                                    an-ac="footer" an-la="about-us:ethics" aria-label="Xuất hóa đơn VAT">
                                    Xuất hóa đơn VAT
                                    <svg class="icon" focusable="false">
                                        <use xlink:href="#outlink-bold" href="#outlink-bold"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-column__item">
                <div class="footer-category">
                    <h3 class="footer-category__title" id="footer-category-title-2">Bạn Cần Hỗ Trợ?</h3>
                    <a class="footer-category__anchor" href="javascript:void(0);" role="button"
                        aria-labelledby="footer-category-title-2" an-tr="nv01_footer sitemap|menu1Depth"
                        an-ca="navigation" an-ac="footer" an-la="help support">
                        <span class="hidden" data-i18n-open="mở" data-i18n-close="Đóng">mở</span>
                        <svg class="icon" focusable="false">
                            <use xlink:href="#open-down-regular" href="#open-down-regular"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="footer-column__item">
                <div class="footer-category">
                    <h3 class="footer-category__title" id="footer-category-title-3">Sự bền vững</h3>
                    <a class="footer-category__anchor" href="javascript:void(0);" role="button"
                        aria-labelledby="footer-category-title-3" an-tr="nv01_footer sitemap|menu1Depth"
                        an-ca="navigation" an-ac="footer" an-la="sustainability">
                        <span class="hidden" data-i18n-open="mở" data-i18n-close="Đóng">mở</span>
                        <svg class="icon" focusable="false">
                            <use xlink:href="#open-down-regular" href="#open-down-regular"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-copyright-wrap">
                <div class="footer-copyright-align">
                    <p class="footer-copyright">Copyright© 2024 Stek. All rights reserved.</p>
                    <div class="footer-legal">Công ty TNHH Stek</div>
                </div>
                <div class="footer-local-logo">
                    <div class="footer-local-logo--wrap">
                        <div class="footer-local-logo__item">
                            <a class="footer-local-logo__link" href="http://online.gov.vn/Home/WebDetails/59771"
                                an-tr="nv02_footer bottom--cta-logo" an-ca="navigation" an-ac="footer"
                                an-la="bottom:local logo:gov-logos-3">
                                <div class="image image--main-loaded">
                                    <img class="image__main responsive-img image--loaded"
                                        data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-nv02image-533484910"
                                        data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-nv02image-533484910"
                                        alt="gov-logos-3"
                                        src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-nv02image-533484910"
                                        style="">
                                </div>
                            </a>
                        </div>
                        <div class="footer-local-logo__item">
                            <a class="footer-local-logo__link" href="http://online.gov.vn/Home/WebDetails/26575"
                                an-tr="nv02_footer bottom--cta-logo" an-ca="navigation" an-ac="footer"
                                an-la="bottom:local logo:gov-logos-2">
                                <div class="image image--main-loaded">
                                    <img class="image__main responsive-img image--loaded"
                                        data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-nv02image-533484888"
                                        data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-nv02image-533484888"
                                        alt="gov-logos-2"
                                        src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-nv02image-533484888"
                                        style="">
                                </div>
                            </a>
                        </div>
                        <div class="footer-local-logo__item">
                            <a class="footer-local-logo__link" href="//www.samsung.com/vn/#"
                                an-tr="nv02_footer bottom--cta-logo" an-ca="navigation" an-ac="footer"
                                an-la="bottom:local logo:gov-logos-1">
                                <div class="image image--main-loaded">
                                    <img class="image__main responsive-img image--loaded"
                                        data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-nv02image-533484762"
                                        data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-nv02image-533484762"
                                        alt="gov-logos-1"
                                        src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-nv02image-533484762"
                                        style="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{asset('tek/assets/js/main.js')}}"></script>

</html>