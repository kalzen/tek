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
@section('styles')

@endsection
@section('content')<div class="root responsivegrid">


    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

        <div class="pd-g-product-promotion-bar aem-GridColumn aem-GridColumn--default--12">

            <section class="notification-bar notification-bar--toggle" style="height: 48px;">
                <div class="notification-bar__inner">
                    <div class="notification-bar__column notification-bar__column--collapsed">
                        <div class="notification-bar__column-inner">
                            <div class="notification-bar__text notification-bar__text-pc"><span>Samsung Advantage Thoải
                                    mái mua sắm và trải nghiệm ưu đãi độc quyền tại Samsung.com/vn</span></div>
                            <div class="notification-bar__text notification-bar__text-mo"><span>Samsung Advantage Thoải
                                    mái mua sắm và trải nghiệm ưu đãi độc quyền tại Samsung.com/vn</span></div>
                            <div class="notification-bar__cta">
                                <a class="cta cta--label cta--black cta--icon" href="/vn/offer/samsungadvantage/"
                                    title="Tìm hiểu ngay" target="_self"
                                    an-tr="cod02_promotion bar-product finder-text-link" an-ca="content click"
                                    an-ac="feature"
                                    an-la="top banner:Samsung Advantage  Thoải mái mua sắm và trải nghiệm ưu đãi độc quyền tại Samsung.com/vn:learn more">Tìm
                                    hiểu ngay<svg class="icon" focusable="false">
                                        <use xlink:href="#next-bold" href="#next-bold"></use>
                                    </svg>
                                </a>


                            </div>
                        </div>
                    </div>
                    <div class="notification-bar__column notification-bar__column--expanded">
                        <div class="notification-bar__column-inner">
                            <h2 class="notification-bar__headline">Samsung Advantage Thoải mái mua sắm và trải nghiệm ưu
                                đãi độc quyền tại Samsung.com/vn</h2>
                            <div class="notification-bar__cta">
                                <a class="cta cta--label cta--black cta--icon" href="/vn/offer/samsungadvantage/"
                                    title="Tìm hiểu ngay" target="_self"
                                    an-tr="cod02_promotion bar-product finder-text-link" an-ca="content click"
                                    an-ac="feature"
                                    an-la="top banner:Samsung Advantage  Thoải mái mua sắm và trải nghiệm ưu đãi độc quyền tại Samsung.com/vn:learn more">Tìm
                                    hiểu ngay<svg class="icon" focusable="false">
                                        <use xlink:href="#next-bold" href="#next-bold"></use>
                                    </svg>
                                </a>


                            </div>
                        </div>
                    </div>
                    <button type="button" class="notification-bar__toggle-btn"
                        an-tr="cod02_promotion bar-product finder-image-link" an-ca="indication" an-ac="view more"
                        an-la="view more">
                        <span class="hidden">Click to Expand</span>
                        <svg class="icon icon--open" focusable="false">
                            <use xlink:href="#open-down-bold" href="#open-down-bold"></use>
                        </svg>
                        <svg class="icon icon--close" focusable="false">
                            <use xlink:href="#close-up-bold" href="#close-up-bold"></use>
                        </svg>
                    </button>
                </div>
            </section>


        </div>
        <div class="nv-g-visual-lnb aem-GridColumn aem-GridColumn--default--12">











        </div>
        <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">


            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

                <div class="pd-g-product-finder-v2 aem-GridColumn aem-GridColumn--default--12">

                    <section
                        class="pd03-product-finder pd03-product-finder--horizontal margin-bottom--normal js-pfv2-finder"
                        data-usefilter="false" data-usefiltertype="true" data-usecomparebutton="true"
                        data-usehighlightcard="false" data-desktopcardlayout="horizontal"
                        data-desktopbuttonposition="horizontal" data-mobilebuttonposition="horizontal"
                        data-productgroupcode="01000000" data-highlightalttext="Galaxy S22 product images"
                        data-highlightbar="Sản Phẩm Nổi Bật" data-skuofhighlightcard="aaa">
                        <!-- SEO script -->


                        <div class="pd03-product-finder__wrap">
                            <div class="pd03-product-finder__header">






                                <div class="us-epp-discount-keep">

                                    <div class="us-epp-discount-dummy"></div>
                                </div>


                                <div class="pd03-product-finder__filters-bar-epromoter-cta mobile-only">
                                    <button class="cta cta--label cta--icon cta--icon-leading js-epromoter-cta"
                                        an-ca="content click" an-ac="feature" an-la="floating chat:chat with an expert">
                                        Trò chuyện với chuyên gia
                                        <svg class="icon" focusable="false" aria-hidden="true">
                                            <use xlink:href="#message-regular" href="#message-regular"></use>
                                        </svg>
                                    </button>
                                </div>


                                <div class="pd03-product-finder__filters-bar" style="">
                                    <div class="pd03-product-finder__filters-bar-wrap">
                                        <div class="pd03-product-finder__filters-bar-filters">
                                            <button href="javascript:void(0)"
                                                class="pd03-product-finder__filters-bar-filters-cta is-opened"
                                                role="button" aria-expanded="true"
                                                an-tr="pd03_product finder:filter-product finder-action-filter"
                                                an-ca="filter and sort" an-ac="filter" an-la="filter:close"
                                                disabled="true">
                                                <svg class="icon icon--open" focusable="false">
                                                    <use xlink:href="#filter-select-bold" href="#filter-select-bold">
                                                    </use>
                                                </svg>
                                                <svg class="icon icon--closed" focusable="false">
                                                    <use xlink:href="#filter-bold" href="#filter-bold"></use>
                                                </svg>
                                                Bộ lọc
                                            </button>
                                            <div class="pd03-product-finder__filters-bar-filters-result">
                                                <span
                                                    class="pd03-product-finder__filters-bar-filters-result-desktop js-pfv2-result-total-count"
                                                    aria-live="polite">49 Kết quả</span>
                                                <span
                                                    class="pd03-product-finder__filters-bar-filters-reset cta--desktop-disabled">
                                                    <a class="cta cta--underline cta--black js-pfv2-reset-filters-cta"
                                                        href="javascript:;" title="Đặt lại Bộ lọc"
                                                        an-tr="pd03_product finder:filter-product finder-action-filter"
                                                        an-ca="filter and sort" an-ac="filter" an-la="filter:reset">
                                                        Đặt lại Bộ lọc </a>
                                                </span>
                                            </div>
                                        </div>


                                        <div class="pd03-product-finder__filters-bar-epromoter-cta desktop-only">
                                            <button class="cta cta--label cta--icon cta--icon-leading js-epromoter-cta"
                                                an-ca="content click" an-ac="feature"
                                                an-la="floating chat:chat with an expert">
                                                Trò chuyện với chuyên gia
                                                <svg class="icon" focusable="false" aria-hidden="true">
                                                    <use xlink:href="#message-regular" href="#message-regular"></use>
                                                </svg>
                                            </button>
                                        </div>



                                        <div class="pd03-product-finder__filters-bar-select">
                                            <div class="menu js-pfv2-sortby-wrap selected">
                                                <select class="menu__select" tabindex="-1"
                                                    data-default-messageop="Theo Khuyến Nghị"
                                                    data-default-value="Recommended" aria-hidden="true">
                                                    <option value="newest"
                                                        an-tr="pd03_product finder:sort-product finder-text-sort"
                                                        an-ca="filter and sort" an-ac="sort" an-la="sort:newest">Mới
                                                        Nhất</option>

                                                    <option value="mostclicked"
                                                        an-tr="pd03_product finder:sort-product finder-text-sort"
                                                        an-ca="filter and sort" an-ac="sort" an-la="sort:most clicked">
                                                        Phổ Biến Nhất</option>


                                                    <option value="highestrated"
                                                        an-tr="pd03_product finder:sort-product finder-text-sort"
                                                        an-ca="filter and sort" an-ac="sort" an-la="sort:highest rated">
                                                        Highest Rated</option>


                                                    <option value="recommended"
                                                        an-tr="pd03_product finder:sort-product finder-text-sort"
                                                        an-ca="filter and sort" an-ac="sort" an-la="sort:recommended"
                                                        selected="">
                                                        Theo Khuyến Nghị

                                                    </option>

                                                    <option value="pricedecending"
                                                        an-tr="pd03_product finder:sort-product finder-text-sort"
                                                        an-ca="filter and sort" an-ac="sort"
                                                        an-la="sort:price decending">Giá: từ cao đến thấp</option>
                                                    <option value="priceascending"
                                                        an-tr="pd03_product finder:sort-product finder-text-sort"
                                                        an-ca="filter and sort" an-ac="sort"
                                                        an-la="sort:price ascending"> Giá: từ thấp đến cao</option>


                                                    <option value="onlineavailability"
                                                        an-tr="pd03_product finder:sort-product finder-text-sort"
                                                        an-ca="filter and sort" an-ac="sort"
                                                        an-la="sort:online availability">Có Hàng Online</option>


                                                    <option value="mostreviewed"
                                                        an-tr="pd03_product finder:sort-product finder-text-sort"
                                                        an-ca="filter and sort" an-ac="sort" an-la="sort:most reviewed">
                                                        Xem nhiều nhất</option>

                                                </select>
                                                <button class="menu__select-field" aria-haspopup="listbox"
                                                    aria-expanded="false" data-aria-label="click to sort results"
                                                    aria-label="Theo Khuyến Nghị: click to sort results">
                                                    <span class="menu__select-field-text">Theo Khuyến Nghị</span>
                                                    <svg class="menu__select-field-icon down" focusable="false">
                                                        <use xlink:href="#open-down-bold" href="#open-down-bold"></use>
                                                    </svg>
                                                    <svg class="menu__select-field-icon up" focusable="false">
                                                        <use xlink:href="#close-up-bold" href="#close-up-bold"></use>
                                                    </svg>
                                                </button>
                                                <div class="menu__list-wrap scrollbar" aria-hidden="true"
                                                    style="visibility: hidden;">
                                                    <div class="scrollbar__wrap" style="max-height: 0px;">
                                                        <ul class="menu__list scrollbar__contents" role="listbox">
                                                            <li class="menu__list-option-wrap" role="presentation"
                                                                an-tr="pd03_product finder:sort-product finder-text-sort"
                                                                an-ca="filter and sort" an-ac="sort"
                                                                an-la="sort:newest"><button class="menu__list-option"
                                                                    aria-selected="false" role="option"><span
                                                                        class="menu__list-option-text">Mới
                                                                        Nhất</span><svg class="menu__list-option-icon"
                                                                        focusable="false">
                                                                        <use xlink:href="#done-bold" href="#done-bold">
                                                                        </use>
                                                                    </svg></button></li>
                                                            <li class="menu__list-option-wrap" role="presentation"
                                                                an-tr="pd03_product finder:sort-product finder-text-sort"
                                                                an-ca="filter and sort" an-ac="sort"
                                                                an-la="sort:most clicked"><button
                                                                    class="menu__list-option" aria-selected="false"
                                                                    role="option"><span
                                                                        class="menu__list-option-text">Phổ Biến
                                                                        Nhất</span><svg class="menu__list-option-icon"
                                                                        focusable="false">
                                                                        <use xlink:href="#done-bold" href="#done-bold">
                                                                        </use>
                                                                    </svg></button></li>
                                                            <li class="menu__list-option-wrap" role="presentation"
                                                                an-tr="pd03_product finder:sort-product finder-text-sort"
                                                                an-ca="filter and sort" an-ac="sort"
                                                                an-la="sort:highest rated"><button
                                                                    class="menu__list-option" aria-selected="false"
                                                                    role="option"><span
                                                                        class="menu__list-option-text">Highest
                                                                        Rated</span><svg class="menu__list-option-icon"
                                                                        focusable="false">
                                                                        <use xlink:href="#done-bold" href="#done-bold">
                                                                        </use>
                                                                    </svg></button></li>
                                                            <li class="menu__list-option-wrap active"
                                                                role="presentation"
                                                                an-tr="pd03_product finder:sort-product finder-text-sort"
                                                                an-ca="filter and sort" an-ac="sort"
                                                                an-la="sort:recommended"><button
                                                                    class="menu__list-option" aria-selected="true"
                                                                    role="option"><span
                                                                        class="menu__list-option-text">Theo Khuyến
                                                                        Nghị</span><svg class="menu__list-option-icon"
                                                                        focusable="false">
                                                                        <use xlink:href="#done-bold" href="#done-bold">
                                                                        </use>
                                                                    </svg></button></li>
                                                            <li class="menu__list-option-wrap" role="presentation"
                                                                an-tr="pd03_product finder:sort-product finder-text-sort"
                                                                an-ca="filter and sort" an-ac="sort"
                                                                an-la="sort:price decending"><button
                                                                    class="menu__list-option" aria-selected="false"
                                                                    role="option"><span
                                                                        class="menu__list-option-text">Giá: từ cao đến
                                                                        thấp</span><svg class="menu__list-option-icon"
                                                                        focusable="false">
                                                                        <use xlink:href="#done-bold" href="#done-bold">
                                                                        </use>
                                                                    </svg></button></li>
                                                            <li class="menu__list-option-wrap" role="presentation"
                                                                an-tr="pd03_product finder:sort-product finder-text-sort"
                                                                an-ca="filter and sort" an-ac="sort"
                                                                an-la="sort:price ascending"><button
                                                                    class="menu__list-option" aria-selected="false"
                                                                    role="option"><span
                                                                        class="menu__list-option-text">Giá: từ thấp đến
                                                                        cao</span><svg class="menu__list-option-icon"
                                                                        focusable="false">
                                                                        <use xlink:href="#done-bold" href="#done-bold">
                                                                        </use>
                                                                    </svg></button></li>
                                                            <li class="menu__list-option-wrap" role="presentation"
                                                                an-tr="pd03_product finder:sort-product finder-text-sort"
                                                                an-ca="filter and sort" an-ac="sort"
                                                                an-la="sort:online availability"><button
                                                                    class="menu__list-option" aria-selected="false"
                                                                    role="option"><span
                                                                        class="menu__list-option-text">Có Hàng
                                                                        Online</span><svg class="menu__list-option-icon"
                                                                        focusable="false">
                                                                        <use xlink:href="#done-bold" href="#done-bold">
                                                                        </use>
                                                                    </svg></button></li>
                                                            <li class="menu__list-option-wrap" role="presentation"
                                                                an-tr="pd03_product finder:sort-product finder-text-sort"
                                                                an-ca="filter and sort" an-ac="sort"
                                                                an-la="sort:most reviewed"><button
                                                                    class="menu__list-option" aria-selected="false"
                                                                    role="option"><span
                                                                        class="menu__list-option-text">Xem nhiều
                                                                        nhất</span><svg class="menu__list-option-icon"
                                                                        focusable="false">
                                                                        <use xlink:href="#done-bold" href="#done-bold">
                                                                        </use>
                                                                    </svg></button></li>
                                                        </ul>
                                                    </div>
                                                    <div class="scrollbar-horizontal__track" style="display: none;">
                                                        <div class="scrollbar-horizontal__track-content">
                                                            <div class="scrollbar-horizontal__bar"></div>
                                                        </div>
                                                    </div>
                                                    <div class="scrollbar-vertical__track" style="">
                                                        <div class="scrollbar-vertical__track-content">
                                                            <div class="scrollbar-vertical__bar"
                                                                style="height: 0px; transform: translate3d(0px, 0px, 0px);">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="pd03-product-finder__progress" aria-live="polite"
                                        style="display: none;">
                                        <span class="pd03-product-finder__progress-line"></span>
                                        <span class="pd03-product-finder__progress-line-filled"
                                            style="width: 80%;"></span>
                                        <span class="hidden">loading</span>
                                    </div>
                                </div>
                            </div>

                            <div class="pd03-product-finder__inner">

                                <div class="pd03-product-finder__filters-list" style="display: block; opacity: 1;">
                                    <div class="pd03-product-finder__filters-list-wrap is-active">

                                        <div class="pd03-product-finder__filters-list-top">
                                            <h2 class="pf-finder-v2__filters-list-top-text">Bộ lọc</h2>

                                            <button href="javascript:void(0)"
                                                class="pd03-product-finder__filters-list-top-closed"
                                                an-tr="pd03_product finder:filter-product finder-action-filter"
                                                an-ca="filter and sort" an-ac="filter" an-la="filter:close">
                                                <span class="hidden">Đóng</span>
                                                <svg class="icon" focusable="false">
                                                    <use xlink:href="#delete-bold" href="#delete-bold"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="pd03-product-finder__filters-list-list">


                                            <div
                                                class="pd03-product-finder__filters-list-list-wrap js-pfv2-filter_list-wrap">
                                                <div class="pd03-product-finder__filters-list-list-area pd03-product-finder__filters-list-list--active"
                                                    data-name="Offers_0" style="display:block">
                                                    <h3 class="pd03-product-finder__filters-list-list-headline"><span
                                                            class="pd03-product-finder__filters-list-list-headline-text"
                                                            role="button" tabindex="0"
                                                            an-tr="pd03_product finder:filter-product finder-text-filter"
                                                            an-ca="filter and sort" an-ac="filter"
                                                            an-la="filter:offers">Offers<span class="hidden"
                                                                data-global-text="{&quot;Expand&quot; : &quot;Mở rộng&quot;,&quot;Collapse&quot; : &quot;Collapse&quot;}">Click
                                                                to Collapse</span><svg class="icon icon--open"
                                                                focusable="false" aria-hidden="true">
                                                                <use xlink:href="#open-down-regular"
                                                                    href="#open-down-regular"></use>
                                                            </svg><svg class="icon icon--closed" focusable="false"
                                                                aria-hidden="true">
                                                                <use xlink:href="#close-up-regular"
                                                                    href="#close-up-regular"></use>
                                                            </svg></span></h3>
                                                    <div class="pd03-product-finder__filters-list-item-wrap" style="">
                                                        <ul class="pd03-product-finder__filters-list-list-item">
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series14z02"
                                                                        data-filter-info="filter1@@14z02@@tradein-deals@@OR@@Offers"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:offers:tradein-deals">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series14z02"><span
                                                                                class="checkbox-radio__label-text">Hỗ
                                                                                trợ thu cũ đổi mới hấp
                                                                                dẫn</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series14z03"
                                                                        data-filter-info="filter1@@14z03@@samsung-care-plus@@OR@@Offers"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:offers:samsung-care-plus">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series14z03"><span
                                                                                class="checkbox-radio__label-text">Samsung
                                                                                Care+</span></label></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pd03-product-finder__filters-list-list-area pd03-product-finder__filters-list-list--active"
                                                    data-name="Online Availability_1" style="display:block">
                                                    <h3 class="pd03-product-finder__filters-list-list-headline"><span
                                                            class="pd03-product-finder__filters-list-list-headline-text"
                                                            role="button" tabindex="0"
                                                            an-tr="pd03_product finder:filter-product finder-text-filter"
                                                            an-ca="filter and sort" an-ac="filter"
                                                            an-la="filter:online availability">Mua Hàng Trực Tuyến<span
                                                                class="hidden"
                                                                data-global-text="{&quot;Expand&quot; : &quot;Mở rộng&quot;,&quot;Collapse&quot; : &quot;Collapse&quot;}">Click
                                                                to Collapse</span><svg class="icon icon--open"
                                                                focusable="false" aria-hidden="true">
                                                                <use xlink:href="#open-down-regular"
                                                                    href="#open-down-regular"></use>
                                                            </svg><svg class="icon icon--closed" focusable="false"
                                                                aria-hidden="true">
                                                                <use xlink:href="#close-up-regular"
                                                                    href="#close-up-regular"></use>
                                                            </svg></span></h3>
                                                    <div class="pd03-product-finder__filters-list-item-wrap" style="">
                                                        <ul class="pd03-product-finder__filters-list-list-item">
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series15z01"
                                                                        data-filter-info="filter2@@15z01@@pre-order@@OR@@Online Availability"
                                                                        disabled="disabled"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:online availability:pre-order">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series15z01"><span
                                                                                class="checkbox-radio__label-text">Đặt
                                                                                hàng trước</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series15z02"
                                                                        data-filter-info="filter2@@15z02@@online-exclusive@@OR@@Online Availability"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:online availability:online-exclusive">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series15z02"><span
                                                                                class="checkbox-radio__label-text">Độc
                                                                                quyền online</span></label></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pd03-product-finder__filters-list-list-area pd03-product-finder__filters-list-list--active"
                                                    data-name="Price Range_2" style="display:block">
                                                    <h3 class="pd03-product-finder__filters-list-list-headline"><span
                                                            class="pd03-product-finder__filters-list-list-headline-text"
                                                            role="button" tabindex="0"
                                                            an-tr="pd03_product finder:filter-product finder-text-filter"
                                                            an-ca="filter and sort" an-ac="filter"
                                                            an-la="filter:price range">Khoảng Giá<span class="hidden"
                                                                data-global-text="{&quot;Expand&quot; : &quot;Mở rộng&quot;,&quot;Collapse&quot; : &quot;Collapse&quot;}">Click
                                                                to Collapse</span><svg class="icon icon--open"
                                                                focusable="false" aria-hidden="true">
                                                                <use xlink:href="#open-down-regular"
                                                                    href="#open-down-regular"></use>
                                                            </svg><svg class="icon icon--closed" focusable="false"
                                                                aria-hidden="true">
                                                                <use xlink:href="#close-up-regular"
                                                                    href="#close-up-regular"></use>
                                                            </svg></span></h3>
                                                    <div class="pd03-product-finder__filters-list-item-wrap" style="">
                                                        <ul class="pd03-product-finder__filters-list-list-item">
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series16p01"
                                                                        data-filter-info="filter3@@16p01@@below-4000000@@OR@@Price Range"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:price range:below-4000000">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series16p01"><span
                                                                                class="checkbox-radio__label-text">Below
                                                                                4.000.000 ₫</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series16p02"
                                                                        data-filter-info="filter3@@16p02@@4000000-to-7000000@@OR@@Price Range"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:price range:4000000-to-7000000">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series16p02"><span
                                                                                class="checkbox-radio__label-text">4.000.000
                                                                                ₫ - 7.000.000 ₫</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series16p03"
                                                                        data-filter-info="filter3@@16p03@@7000000-to-14999000@@OR@@Price Range"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:price range:7000000-to-14999000">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series16p03"><span
                                                                                class="checkbox-radio__label-text">7.000.000₫
                                                                                - 14.999.000₫</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series16p04"
                                                                        data-filter-info="filter3@@16p04@@15000000-to-25000000@@OR@@Price Range"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:price range:15000000-to-25000000">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series16p04"><span
                                                                                class="checkbox-radio__label-text">15.000.000₫
                                                                                - 25.000.000₫</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series16p05"
                                                                        data-filter-info="filter3@@16p05@@above-25000000@@OR@@Price Range"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:price range:above-25000000">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series16p05"><span
                                                                                class="checkbox-radio__label-text">Above
                                                                                25.000.000₫</span></label></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pd03-product-finder__filters-list-list-area pd03-product-finder__filters-list-list--active"
                                                    data-name="product range ia_3" style="display:block">
                                                    <h3 class="pd03-product-finder__filters-list-list-headline"><span
                                                            class="pd03-product-finder__filters-list-list-headline-text"
                                                            role="button" tabindex="0"
                                                            an-tr="pd03_product finder:filter-product finder-text-filter"
                                                            an-ca="filter and sort" an-ac="filter"
                                                            an-la="filter:product range ia">Dòng điện thoại<span
                                                                class="hidden"
                                                                data-global-text="{&quot;Expand&quot; : &quot;Mở rộng&quot;,&quot;Collapse&quot; : &quot;Collapse&quot;}">Click
                                                                to Collapse</span><svg class="icon icon--open"
                                                                focusable="false" aria-hidden="true">
                                                                <use xlink:href="#open-down-regular"
                                                                    href="#open-down-regular"></use>
                                                            </svg><svg class="icon icon--closed" focusable="false"
                                                                aria-hidden="true">
                                                                <use xlink:href="#close-up-regular"
                                                                    href="#close-up-regular"></use>
                                                            </svg></span></h3>
                                                    <div class="pd03-product-finder__filters-list-item-wrap" style="">
                                                        <ul class="pd03-product-finder__filters-list-list-item">
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series01i08"
                                                                        data-filter-info="filter4@@01i08@@galaxy-z@@OR@@product range ia"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:product range ia:galaxy-z">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series01i08"><span
                                                                                class="checkbox-radio__label-text">Galaxy
                                                                                Z</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series01i01"
                                                                        data-filter-info="filter4@@01i01@@galaxy-s@@OR@@product range ia"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:product range ia:galaxy-s">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series01i01"><span
                                                                                class="checkbox-radio__label-text">Galaxy
                                                                                S</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series01i03"
                                                                        data-filter-info="filter4@@01i03@@galaxy-a@@OR@@product range ia"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:product range ia:galaxy-a">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series01i03"><span
                                                                                class="checkbox-radio__label-text">Galaxy
                                                                                A</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series01i07"
                                                                        data-filter-info="filter4@@01i07@@galaxy-m@@OR@@product range ia"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:product range ia:galaxy-m">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series01i07"><span
                                                                                class="checkbox-radio__label-text">Galaxy
                                                                                M</span></label></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pd03-product-finder__filters-list-list-area pd03-product-finder__filters-list-list--active"
                                                    data-name="product range series_4" style="display:block">
                                                    <h3 class="pd03-product-finder__filters-list-list-headline"><span
                                                            class="pd03-product-finder__filters-list-list-headline-text"
                                                            role="button" tabindex="0"
                                                            an-tr="pd03_product finder:filter-product finder-text-filter"
                                                            an-ca="filter and sort" an-ac="filter"
                                                            an-la="filter:product range series">Dòng Sản Phẩm<span
                                                                class="hidden"
                                                                data-global-text="{&quot;Expand&quot; : &quot;Mở rộng&quot;,&quot;Collapse&quot; : &quot;Collapse&quot;}">Click
                                                                to Collapse</span><svg class="icon icon--open"
                                                                focusable="false" aria-hidden="true">
                                                                <use xlink:href="#open-down-regular"
                                                                    href="#open-down-regular"></use>
                                                            </svg><svg class="icon icon--closed" focusable="false"
                                                                aria-hidden="true">
                                                                <use xlink:href="#close-up-regular"
                                                                    href="#close-up-regular"></use>
                                                            </svg></span></h3>
                                                    <div class="pd03-product-finder__filters-list-item-wrap" style="">
                                                        <ul class="pd03-product-finder__filters-list-list-item">
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series17z05"
                                                                        data-filter-info="filter5@@17z05@@bespoke-series@@OR@@product range series"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:product range series:bespoke-series">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series17z05"><span
                                                                                class="checkbox-radio__label-text">Bespoke
                                                                                series</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series17z06"
                                                                        data-filter-info="filter5@@17z06@@fold-series@@OR@@product range series"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:product range series:fold-series">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series17z06"><span
                                                                                class="checkbox-radio__label-text">Fold
                                                                                series</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series17z07"
                                                                        data-filter-info="filter5@@17z07@@flip-series@@OR@@product range series"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:product range series:flip-series">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series17z07"><span
                                                                                class="checkbox-radio__label-text">Flip
                                                                                series</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series17z08"
                                                                        data-filter-info="filter5@@17z08@@s23-series@@OR@@product range series"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:product range series:s23-series">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series17z08"><span
                                                                                class="checkbox-radio__label-text">S23
                                                                                series</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series17z09"
                                                                        data-filter-info="filter5@@17z09@@s22-series@@OR@@product range series"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:product range series:s22-series">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series17z09"><span
                                                                                class="checkbox-radio__label-text">S22
                                                                                series</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series17z10"
                                                                        data-filter-info="filter5@@17z10@@s21-series@@OR@@product range series"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:product range series:s21-series">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series17z10"><span
                                                                                class="checkbox-radio__label-text">S21
                                                                                series</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series17z11"
                                                                        data-filter-info="filter5@@17z11@@a54@@OR@@product range series"
                                                                        disabled="disabled"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:product range series:a54">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series17z11"><span
                                                                                class="checkbox-radio__label-text">A54</span></label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series17z12"
                                                                        data-filter-info="filter5@@17z12@@a34@@OR@@product range series"
                                                                        disabled="disabled"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:product range series:a34">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series17z12"><span
                                                                                class="checkbox-radio__label-text">A34</span></label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series17z13"
                                                                        data-filter-info="filter5@@17z13@@a23@@OR@@product range series"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:product range series:a23">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series17z13"><span
                                                                                class="checkbox-radio__label-text">A23</span></label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display: none;">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series17z14"
                                                                        data-filter-info="filter5@@17z14@@a14@@OR@@product range series"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:product range series:a14">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series17z14"><span
                                                                                class="checkbox-radio__label-text">A14</span></label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display: none;">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series17z15"
                                                                        data-filter-info="filter5@@17z15@@a04@@OR@@product range series"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:product range series:a04">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series17z15"><span
                                                                                class="checkbox-radio__label-text">A04</span></label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <div class="pd03-product-finder__filters-more"
                                                                style="display:block"><button type="button"
                                                                    class="pd03-product-finder__filters-more-button"
                                                                    data-global-text="{&quot;show&quot; : &quot;HIển thị nhiều hơn&quot;, &quot;less&quot; : &quot;HIển thị ít hơn&quot;}"
                                                                    style="display:block"><span>HIển thị nhiều
                                                                        hơn</span><svg class="icon icon--plus"
                                                                        focusable="false" aria-hidden="true">
                                                                        <use xlink:href="#plus-bold" href="#plus-bold">
                                                                        </use>
                                                                    </svg><svg class="icon icon--minus"
                                                                        focusable="false" aria-hidden="true">
                                                                        <use xlink:href="#minus-bold"
                                                                            href="#minus-bold"></use>
                                                                    </svg></button></div>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pd03-product-finder__filters-list-list-area pd03-product-finder__filters-list-list--active"
                                                    data-name="Display Size_5" style="display:block">
                                                    <h3 class="pd03-product-finder__filters-list-list-headline"><span
                                                            class="pd03-product-finder__filters-list-list-headline-text"
                                                            role="button" tabindex="0"
                                                            an-tr="pd03_product finder:filter-product finder-text-filter"
                                                            an-ca="filter and sort" an-ac="filter"
                                                            an-la="filter:display size">Kích Thước Màn Hình<span
                                                                class="hidden"
                                                                data-global-text="{&quot;Expand&quot; : &quot;Mở rộng&quot;,&quot;Collapse&quot; : &quot;Collapse&quot;}">Click
                                                                to Collapse</span><svg class="icon icon--open"
                                                                focusable="false" aria-hidden="true">
                                                                <use xlink:href="#open-down-regular"
                                                                    href="#open-down-regular"></use>
                                                            </svg><svg class="icon icon--closed" focusable="false"
                                                                aria-hidden="true">
                                                                <use xlink:href="#close-up-regular"
                                                                    href="#close-up-regular"></use>
                                                            </svg></span></h3>
                                                    <div class="pd03-product-finder__filters-list-item-wrap" style="">
                                                        <ul class="pd03-product-finder__filters-list-list-item">
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series02z06"
                                                                        data-filter-info="filter6@@02z06@@60-62@@OR@@Display Size"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:display size:60-62">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series02z06"><span
                                                                                class="checkbox-radio__label-text">6.0"
                                                                                - 6.2"</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series02z07"
                                                                        data-filter-info="filter6@@02z07@@63-65@@OR@@Display Size"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:display size:63-65">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series02z07"><span
                                                                                class="checkbox-radio__label-text">6.3"
                                                                                - 6.5"</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series02z08"
                                                                        data-filter-info="filter6@@02z08@@66-69@@OR@@Display Size"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:display size:66-69">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series02z08"><span
                                                                                class="checkbox-radio__label-text">6.6"
                                                                                - 6.9"</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series02z09"
                                                                        data-filter-info="filter6@@02z09@@over-70@@OR@@Display Size"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:display size:over-70">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series02z09"><span
                                                                                class="checkbox-radio__label-text">Hơn
                                                                                7.0"</span></label></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pd03-product-finder__filters-list-list-area pd03-product-finder__filters-list-list--active"
                                                    data-name="Storage _6" style="display:block">
                                                    <h3 class="pd03-product-finder__filters-list-list-headline"><span
                                                            class="pd03-product-finder__filters-list-list-headline-text"
                                                            role="button" tabindex="0"
                                                            an-tr="pd03_product finder:filter-product finder-text-filter"
                                                            an-ca="filter and sort" an-ac="filter"
                                                            an-la="filter:storage ">Bộ nhớ trong<span class="hidden"
                                                                data-global-text="{&quot;Expand&quot; : &quot;Mở rộng&quot;,&quot;Collapse&quot; : &quot;Collapse&quot;}">Click
                                                                to Collapse</span><svg class="icon icon--open"
                                                                focusable="false" aria-hidden="true">
                                                                <use xlink:href="#open-down-regular"
                                                                    href="#open-down-regular"></use>
                                                            </svg><svg class="icon icon--closed" focusable="false"
                                                                aria-hidden="true">
                                                                <use xlink:href="#close-up-regular"
                                                                    href="#close-up-regular"></use>
                                                            </svg></span></h3>
                                                    <div class="pd03-product-finder__filters-list-item-wrap" style="">
                                                        <ul class="pd03-product-finder__filters-list-list-item">
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series07o04"
                                                                        data-filter-info="filter7@@07o04@@32gb@@OR@@Storage "
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:storage :32gb">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series07o04"><span
                                                                                class="checkbox-radio__label-text">32GB</span></label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series07o05"
                                                                        data-filter-info="filter7@@07o05@@64gb@@OR@@Storage "
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:storage :64gb">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series07o05"><span
                                                                                class="checkbox-radio__label-text">64GB</span></label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series07o06"
                                                                        data-filter-info="filter7@@07o06@@128gb@@OR@@Storage "
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:storage :128gb">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series07o06"><span
                                                                                class="checkbox-radio__label-text">128GB</span></label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series07o08"
                                                                        data-filter-info="filter7@@07o08@@256gb@@OR@@Storage "
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:storage :256gb">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series07o08"><span
                                                                                class="checkbox-radio__label-text">256GB</span></label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series07o07"
                                                                        data-filter-info="filter7@@07o07@@512gb@@OR@@Storage "
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:storage :512gb">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series07o07"><span
                                                                                class="checkbox-radio__label-text">512GB</span></label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series07o09"
                                                                        data-filter-info="filter7@@07o09@@1tb@@OR@@Storage "
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:storage :1tb">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series07o09"><span
                                                                                class="checkbox-radio__label-text">1TB</span></label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pd03-product-finder__filters-list-list-area pd03-product-finder__filters-list-list--active"
                                                    data-name="Camera resolution_7" style="display:block">
                                                    <h3 class="pd03-product-finder__filters-list-list-headline"><span
                                                            class="pd03-product-finder__filters-list-list-headline-text"
                                                            role="button" tabindex="0"
                                                            an-tr="pd03_product finder:filter-product finder-text-filter"
                                                            an-ca="filter and sort" an-ac="filter"
                                                            an-la="filter:camera resolution">Độ phân giải Camera<span
                                                                class="hidden"
                                                                data-global-text="{&quot;Expand&quot; : &quot;Mở rộng&quot;,&quot;Collapse&quot; : &quot;Collapse&quot;}">Click
                                                                to Collapse</span><svg class="icon icon--open"
                                                                focusable="false" aria-hidden="true">
                                                                <use xlink:href="#open-down-regular"
                                                                    href="#open-down-regular"></use>
                                                            </svg><svg class="icon icon--closed" focusable="false"
                                                                aria-hidden="true">
                                                                <use xlink:href="#close-up-regular"
                                                                    href="#close-up-regular"></use>
                                                            </svg></span></h3>
                                                    <div class="pd03-product-finder__filters-list-item-wrap" style="">
                                                        <ul class="pd03-product-finder__filters-list-list-item">
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series04z11"
                                                                        data-filter-info="filter8@@04z11@@9-13mp@@OR@@Camera resolution"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:camera resolution:9-13mp">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series04z11"><span
                                                                                class="checkbox-radio__label-text">9 -
                                                                                13MP</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series04z07"
                                                                        data-filter-info="filter8@@04z07@@11-24-mp@@OR@@Camera resolution"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:camera resolution:11-24-mp">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series04z07"><span
                                                                                class="checkbox-radio__label-text">10 -
                                                                                24 MP</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series04z08"
                                                                        data-filter-info="filter8@@04z08@@25-49-mp@@OR@@Camera resolution"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:camera resolution:25-49-mp">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series04z08"><span
                                                                                class="checkbox-radio__label-text">25 -
                                                                                49 MP</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series04z09"
                                                                        data-filter-info="filter8@@04z09@@50-99-mp@@OR@@Camera resolution"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:camera resolution:50-99-mp">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series04z09"><span
                                                                                class="checkbox-radio__label-text">50 -
                                                                                99 MP</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series04z13"
                                                                        data-filter-info="filter8@@04z13@@over-200mp@@OR@@Camera resolution"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:camera resolution:over-200mp">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series04z13"><span
                                                                                class="checkbox-radio__label-text">Hơn
                                                                                200MP</span></label></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pd03-product-finder__filters-list-list-area pd03-product-finder__filters-list-list--active"
                                                    data-name="Feature_8" style="display:block">
                                                    <h3 class="pd03-product-finder__filters-list-list-headline"><span
                                                            class="pd03-product-finder__filters-list-list-headline-text"
                                                            role="button" tabindex="0"
                                                            an-tr="pd03_product finder:filter-product finder-text-filter"
                                                            an-ca="filter and sort" an-ac="filter"
                                                            an-la="filter:feature">Tính Năng<span class="hidden"
                                                                data-global-text="{&quot;Expand&quot; : &quot;Mở rộng&quot;,&quot;Collapse&quot; : &quot;Collapse&quot;}">Click
                                                                to Collapse</span><svg class="icon icon--open"
                                                                focusable="false" aria-hidden="true">
                                                                <use xlink:href="#open-down-regular"
                                                                    href="#open-down-regular"></use>
                                                            </svg><svg class="icon icon--closed" focusable="false"
                                                                aria-hidden="true">
                                                                <use xlink:href="#close-up-regular"
                                                                    href="#close-up-regular"></use>
                                                            </svg></span></h3>
                                                    <div class="pd03-product-finder__filters-list-item-wrap" style="">
                                                        <ul class="pd03-product-finder__filters-list-list-item">
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series05z11"
                                                                        data-filter-info="filter9@@05z11@@foldable@@OR@@Feature"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature:foldable">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series05z11"><span
                                                                                class="checkbox-radio__label-text">Màn
                                                                                hình gập</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series05z12"
                                                                        data-filter-info="filter9@@05z12@@long-lasting-battery-over-5000mah@@OR@@Feature"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature:long-lasting-battery-over-5000mah">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series05z12"><span
                                                                                class="checkbox-radio__label-text">Dung
                                                                                lượng pin lớn (Trên
                                                                                5000mAh)</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series05z14"
                                                                        data-filter-info="filter9@@05z14@@nightography@@OR@@Feature"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature:nightography">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series05z14"><span
                                                                                class="checkbox-radio__label-text">Mắt
                                                                                thần bóng đêm</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series05z15"
                                                                        data-filter-info="filter9@@05z15@@4k-video-recording@@OR@@Feature"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature:4k-video-recording">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series05z15"><span
                                                                                class="checkbox-radio__label-text">4K
                                                                                video recording</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series05z16"
                                                                        data-filter-info="filter9@@05z16@@8k-video-recording@@OR@@Feature"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature:8k-video-recording">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series05z16"><span
                                                                                class="checkbox-radio__label-text">8K
                                                                                video recording</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series05z13"
                                                                        data-filter-info="filter9@@05z13@@wireless-charging@@OR@@Feature"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature:wireless-charging">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series05z13"><span
                                                                                class="checkbox-radio__label-text">Sạc
                                                                                không dây</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series05z10"
                                                                        data-filter-info="filter9@@05z10@@s-pen-compatible@@OR@@Feature"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature:s-pen-compatible">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series05z10"><span
                                                                                class="checkbox-radio__label-text">Siêu
                                                                                bút S Pen tương thích</span></label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series05z20"
                                                                        data-filter-info="filter9@@05z20@@s-pen-embeded@@OR@@Feature"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature:s-pen-embeded">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series05z20"><span
                                                                                class="checkbox-radio__label-text">Siêu
                                                                                bút S Pen tích hợp</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series05z19"
                                                                        data-filter-info="filter9@@05z19@@expandable-storage-sd-card-slot@@OR@@Feature"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature:expandable-storage-sd-card-slot">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series05z19"><span
                                                                                class="checkbox-radio__label-text">Thẻ
                                                                                nhớ mở rộng (Khe cắm thẻ
                                                                                SD)</span></label></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pd03-product-finder__filters-list-list-area pd03-product-finder__filters-list-list--active"
                                                    data-name="Feature for A series_9" style="display:block">
                                                    <h3 class="pd03-product-finder__filters-list-list-headline"><span
                                                            class="pd03-product-finder__filters-list-list-headline-text"
                                                            role="button" tabindex="0"
                                                            an-tr="pd03_product finder:filter-product finder-text-filter"
                                                            an-ca="filter and sort" an-ac="filter"
                                                            an-la="filter:feature for a series">Tính năng cho dòng
                                                            A<span class="hidden"
                                                                data-global-text="{&quot;Expand&quot; : &quot;Mở rộng&quot;,&quot;Collapse&quot; : &quot;Collapse&quot;}">Click
                                                                to Collapse</span><svg class="icon icon--open"
                                                                focusable="false" aria-hidden="true">
                                                                <use xlink:href="#open-down-regular"
                                                                    href="#open-down-regular"></use>
                                                            </svg><svg class="icon icon--closed" focusable="false"
                                                                aria-hidden="true">
                                                                <use xlink:href="#close-up-regular"
                                                                    href="#close-up-regular"></use>
                                                            </svg></span></h3>
                                                    <div class="pd03-product-finder__filters-list-item-wrap" style="">
                                                        <ul class="pd03-product-finder__filters-list-list-item">
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series10z07"
                                                                        data-filter-info="filter10@@10z07@@2-day-battery@@AND@@Feature for A series"
                                                                        disabled="disabled"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature for a series:2-day-battery">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series10z07"><span
                                                                                class="checkbox-radio__label-text">Dung
                                                                                lượng pin đến 2 ngày</span></label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series10z08"
                                                                        data-filter-info="filter10@@10z08@@fast-charging@@AND@@Feature for A series"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature for a series:fast-charging">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series10z08"><span
                                                                                class="checkbox-radio__label-text">Sạc
                                                                                nhanh siêu tốc</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series10z10"
                                                                        data-filter-info="filter10@@10z10@@camera-with-ois@@AND@@Feature for A series"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature for a series:camera-with-ois">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series10z10"><span
                                                                                class="checkbox-radio__label-text">Tính
                                                                                năng Chụp quay Chống rung chuyên nghiệp
                                                                                OIS</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series10z04"
                                                                        data-filter-info="filter10@@10z04@@quad-camera@@AND@@Feature for A series"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature for a series:quad-camera">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series10z04"><span
                                                                                class="checkbox-radio__label-text">Bộ 4
                                                                                Camera vượt trội</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series10z03"
                                                                        data-filter-info="filter10@@10z03@@high-resolution-camera@@AND@@Feature for A series"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature for a series:high-resolution-camera">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series10z03"><span
                                                                                class="checkbox-radio__label-text">Camera
                                                                                độ phân giải cao</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series10z01"
                                                                        data-filter-info="filter10@@10z01@@storage@@AND@@Feature for A series"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature for a series:storage">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series10z01"><span
                                                                                class="checkbox-radio__label-text">Bộ
                                                                                nhớ trong</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series10z13"
                                                                        data-filter-info="filter10@@10z13@@microsd-up-to-1tb@@AND@@Feature for A series"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature for a series:microsd-up-to-1tb">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series10z13"><span
                                                                                class="checkbox-radio__label-text">Thẻ
                                                                                nhớ mở rộng</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series10z02"
                                                                        data-filter-info="filter10@@10z02@@6gb-or-more-memory@@AND@@Feature for A series"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature for a series:6gb-or-more-memory">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series10z02"><span
                                                                                class="checkbox-radio__label-text">Bộ
                                                                                nhớ đệm</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display:block">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series10z05"
                                                                        data-filter-info="filter10@@10z05@@big-screen@@AND@@Feature for A series"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature for a series:big-screen">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series10z05"><span
                                                                                class="checkbox-radio__label-text">Kích
                                                                                thước màn hình lớn</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display: none;">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series10z06"
                                                                        data-filter-info="filter10@@10z06@@super-amoled@@AND@@Feature for A series"
                                                                        disabled="disabled"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature for a series:super-amoled">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series10z06"><span
                                                                                class="checkbox-radio__label-text">Màn
                                                                                hình Super AMOLED</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display: none;">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series10z14"
                                                                        data-filter-info="filter10@@10z14@@super-smooth-scrolling@@AND@@Feature for A series"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature for a series:super-smooth-scrolling">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series10z14"><span
                                                                                class="checkbox-radio__label-text">Trải
                                                                                nghiệm cuộn lướt mượt mà</span></label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display: none;">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series10z09"
                                                                        data-filter-info="filter10@@10z09@@5g@@AND@@Feature for A series"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature for a series:5g">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series10z09"><span
                                                                                class="checkbox-radio__label-text">5G</span></label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display: none;">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series10z15"
                                                                        data-filter-info="filter10@@10z15@@infinity-o-display@@AND@@Feature for A series"
                                                                        disabled="disabled"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature for a series:infinity-o-display">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series10z15"><span
                                                                                class="checkbox-radio__label-text">Màn
                                                                                hình tràn viền vô cực
                                                                                Infinity-O</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display: none;">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series10z11"
                                                                        data-filter-info="filter10@@10z11@@water-resistant@@AND@@Feature for A series"
                                                                        disabled="disabled"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature for a series:water-resistant">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series10z11"><span
                                                                                class="checkbox-radio__label-text">Tính
                                                                                năng kháng nước </span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display: none;">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series10z12"
                                                                        data-filter-info="filter10@@10z12@@stereo-speaker@@AND@@Feature for A series"
                                                                        disabled="disabled"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature for a series:stereo-speaker">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series10z12"><span
                                                                                class="checkbox-radio__label-text">Âm
                                                                                thanh nổi</span></label></div>
                                                                </div>
                                                            </li>
                                                            <li class="pd03-product-finder__filters-list-list-items"
                                                                style="display: none;">
                                                                <div class="checkbox-radio"><input type="checkbox"
                                                                        name="checkbox" class="hidden"
                                                                        id="checkbox-series10z16"
                                                                        data-filter-info="filter10@@10z16@@octa-core-processor@@AND@@Feature for A series"
                                                                        an-tr="pd03_product finder:filter-product finder-list-filter"
                                                                        an-ca="filter and sort" an-ac="filter"
                                                                        an-la="filter:feature for a series:octa-core-processor">
                                                                    <div class="checkbox-radio__text-wrap"><label
                                                                            class="checkbox-radio__label"
                                                                            for="checkbox-series10z16"><span
                                                                                class="checkbox-radio__label-text">Bộ vi
                                                                                xử lý</span></label></div>
                                                                </div>
                                                            </li>
                                                            <div class="pd03-product-finder__filters-more"
                                                                style="display:block"><button type="button"
                                                                    class="pd03-product-finder__filters-more-button"
                                                                    data-global-text="{&quot;show&quot; : &quot;HIển thị nhiều hơn&quot;, &quot;less&quot; : &quot;HIển thị ít hơn&quot;}"
                                                                    style="display:block"><span>HIển thị nhiều
                                                                        hơn</span><svg class="icon icon--plus"
                                                                        focusable="false" aria-hidden="true">
                                                                        <use xlink:href="#plus-bold" href="#plus-bold">
                                                                        </use>
                                                                    </svg><svg class="icon icon--minus"
                                                                        focusable="false" aria-hidden="true">
                                                                        <use xlink:href="#minus-bold"
                                                                            href="#minus-bold"></use>
                                                                    </svg></button></div>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <!-- Filter List Html Area -->

                                            </div>
                                        </div>

                                        <div class="pd03-product-finder__filters-list-cta">
                                            <a class="cta cta--outlined cta--black reset-cta cta--dense js-pfv2-mobile-reset-cta"
                                                href="javascript:;" title="Đặt lại Bộ lọc" aria-label="Link Title"
                                                an-tr="pd03_product finder:filter-product finder-action-filter"
                                                an-ca="filter and sort" an-ac="filter" an-la="filter:reset"> Đặt lại Bộ
                                                lọc </a>
                                            <a class="cta cta--contained cta--emphasis cta--disabled view-cta cta--dense js-pfv2-view-results-cta"
                                                href="javascript:;" title="Xem kết quả" aria-label="Link Title"
                                                aria-disabled="true" tabindex="-1"
                                                an-tr="pd03_product finder:filter-product finder-action-filter"
                                                an-ca="filter and sort" an-ac="filter" an-la="filter:view result"> Xem
                                                kết quả <span class="js-pfv2-view-results-count"> ‎(49)‎ </span> </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="pd03-product-finder__content">
                                    <div class="pd03-product-finder__content-wrap js-pfv2-content-wrap"
                                        data-product-cardtype="default" data-gbm="im" data-mobile-two-card="false"
                                        data-shop-promo-only="false"><!--/* product-card-grid */-->

                                        @foreach ($products as $product)


                                            <div class="pd03-product-finder__content-item pd03-product-finder__content-item-view js-pfv2-product-card"
                                                data-productidx="1">
                                                <!--/* PD03 Product Card Component */-->
                                                <div class="pd03-product-card pd03-product-card--horizontal">

                                                    <div class="pd03-product-card__item">
                                                        <div class="pd03-product-card__product-image">
                                                            <!-- product images -->

                                                            <a class="pd03-product-card__product-image-link"
                                                                href="{{ route('product.detail',['alias' => $product->slug]) }}" data-modelcode="SM-A356ELBDXXV"
                                                                data-modelname="SM-A356E/DS" aria-label="Galaxy A35 5G"
                                                                an-tr="pd03_product finder:option-product finder-product-link"
                                                                an-ca="product click" an-ac="pf product card"
                                                                an-la="image click">
                                                                <div class="swiper-container" aria-live="polite"
                                                                    data-swiper-option="{
                                                &quot;componentEl&quot;:&quot;.pd03-product-card__image&quot;,
                                                &quot;slidesPerView&quot;:1,
                                                &quot;keepWrapper&quot;:true,
                                                &quot;loop&quot;: false,
                                                &quot;pagination&quot;:false
                                                }">
                                                                    <div class="swiper-wrapper">

                                                                        <div class="pd03-product-card__image-item swiper-slide"
                                                                            style="display: block;">
                                                                            <div class="image image--main-loaded">
                                                                                <img class="image__main responsive-img image--loaded"
                                                                                    src="{{$product->images->first()->url ?? ''}}"
                                                                                    style="">
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </a>

                                                            <!-- award icons -->

                                                            &lt;-- quick view --&gt;
                                                            <button
                                                                class="pd03-product-card__product-image-cta cta  cta--outlined cta--black pd03-product-card__quickview_btn "
                                                                aria-label="Button Label"
                                                                an-tr="pd03_product finder-product finder-quick view-option_click1"
                                                                an-ca="option click" an-ac="pf product card"
                                                                an-la="quick view">
                                                                Tổng Quan
                                                            </button>
                                                        </div>
                                                        <div class="pd03-product-card__product-content">
                                                            <!-- badge -->

                                                            <!-- wishlist -->

                                                            <div class="pd03-product-card__product-content-primary">
                                                                <div class="pd03-product-card__product-name">

                                                                    <a class="pd03-product-card__product-name-link"
                                                                        href="{{ route('product.detail',['alias' => $product->slug]) }}"
                                                                        aria-label="Galaxy A35 5G"
                                                                        data-modelcode="SM-A356ELBDXXV"
                                                                        data-modelname="SM-A356E/DS"
                                                                        an-tr="pd03_product finder:option-product finder-product-link"
                                                                        an-ca="product click" an-ac="pf product card"
                                                                        an-la="display name">
                                                                        <p class="pd03-product-card__product-name-text">
                                                                            {{$product->title}}
                                                                        </p>
                                                                    </a>

                                                                </div>
                                                                <!-- option chips -->

                                                                <div class="pd03-product-card__option-selector ">

                                                                    <div
                                                                        class="option-selector-v2 option-selector-v2__color-text">

                                                                        <div class="option-selector-v2__color-name">Màu sắc
                                                                            :
                                                                            <button type="button"
                                                                                class="option-selector-v2__color-name-text"
                                                                                disabled="true">
                                                                                <strong class="hidden"
                                                                                    data-global-text="{&quot;Expand&quot; : &quot;Click to Expand&quot;, &quot;Collapse&quot; : &quot;Nhấp để thu gọn&quot;}">Nhấp
                                                                                    để thu gọn</strong>
                                                                                <strong
                                                                                    class="option-selector-v2__color-name-text-in">Xanh
                                                                                    Iceblue</strong>
                                                                            </button>
                                                                            <div class="option-selector-v2__color-tooltip">
                                                                                Màu sắc : <strong
                                                                                    class="option-selector-v2__color-tooltip-text">Xanh
                                                                                    Iceblue</strong>
                                                                                <a href="javascript:void(0)"
                                                                                    class="option-selector-v2__color-tooltip-close"
                                                                                    role="button">
                                                                                    <span class="hidden">Close</span>
                                                                                    <svg class="icon icon-close"
                                                                                        focusable="false"
                                                                                        aria-hidden="true">
                                                                                        <use xlink:href="#delete-bold"
                                                                                            href="#delete-bold"></use>
                                                                                    </svg>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <!-- price area vertical -->

                                                                <div class="pd03-product-card__price for-vertical    ">


                                                                    <p class="pd03-product-card__price-second ">

                                                                        <span class="pd03-product-card__price-label">
                                                                            <span class="hidden">Price before discount:
                                                                            </span>
                                                                            chiết khấu 300.000&nbsp;₫ (giá gốc
                                                                            <del>8.289.600&nbsp;₫</del>)
                                                                        </span>

                                                                    </p>
                                                                    <p class="pd03-product-card__price-main "
                                                                        data-pricetext="7.989.600&nbsp;₫">

                                                                        <span class="hidden">Tổng giá: </span>
                                                                        7.989.600&nbsp;₫

                                                                    </p>

                                                                    <div
                                                                        class="pd03-product-card__price-description no-data">



                                                                    </div>

                                                                </div>


                                                                <div class="pd03-product-card__stock  for-vertical ">

                                                                    <div class="pd03-product-card__stock-inner">

                                                                        <span class="pd03-product-card__stock-icons">
                                                                            <svg class="icon icon--in-stock"
                                                                                focusable="false" aria-hidden="true">
                                                                                <use xlink:href="#done-bold"
                                                                                    href="#done-bold"></use>
                                                                            </svg>
                                                                            <svg class="icon icon--out-of-stock"
                                                                                focusable="false" aria-hidden="true">
                                                                                <use xlink:href="#delete-bold"
                                                                                    href="#delete-bold"></use>
                                                                            </svg>
                                                                        </span>

                                                                        Có hàng
                                                                    </div>

                                                                </div>


                                                                <div class="pd03-product-card__spec ">
                                                            
                                                                    <ul class="pd03-product-card__spec-list" role="list">
                                                                        
                                                                    </ul>

                                                                </div>

                                                            </div>
                                                            <div class="pd03-product-card__product-content-secondary">
                                                                <!-- price area horizontal -->

                                                                <div class="pd03-product-card__price for-horizontal    ">


                                                                    <p class="pd03-product-card__price-second ">


                                                                    </p>
                                                                    <p class="pd03-product-card__price-main "
                                                                        data-pricetext="{{number_format($product->price)}}₫">

                                                                        <span class="hidden">Giá: </span>
                                                                        {{number_format($product->price)}}₫

                                                                    </p>

                                                                    <div
                                                                        class="pd03-product-card__price-description no-data">



                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="pd03-product-card__seller for-horizontal no-data">

                                                                </div>

                                                                <!-- energy fiche horizontal -->
                                                                <div
                                                                    class="pd03-product-card__fiche for-horizontal no-data">
                                                                </div>
                                                                <!-- stock status horizontal -->

                                                                <div class="pd03-product-card__stock  for-horizontal ">

                                                                    <div class="pd03-product-card__stock-inner">

                                                                        <span class="pd03-product-card__stock-icons">
                                                                            <svg class="icon icon--in-stock"
                                                                                focusable="false" aria-hidden="true">
                                                                                <use xlink:href="#done-bold"
                                                                                    href="#done-bold"></use>
                                                                            </svg>
                                                                            <svg class="icon icon--out-of-stock"
                                                                                focusable="false" aria-hidden="true">
                                                                                <use xlink:href="#delete-bold"
                                                                                    href="#delete-bold"></use>
                                                                            </svg>
                                                                        </span>

                                                                        Có hàng
                                                                    </div>

                                                                </div>

                                                                <!-- feature benefit -->

                                                                <div class="pd03-product-card__benefit  ">

                                                                    <div class="pd03-product-card__benefit-wrap ">
                                                                        

                                                                        <div class="pd03-product-card__benefit-tooltip">
                                                                            <button type="button"
                                                                                class="pd03-product-card__benefit-more pd03-product-card__quickview_btn">
                                                                                <span>Xem thêm</span>
                                                                            </button>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                                <!-- national flags and price campaign -->
                                                                <div class="pd03-product-card__nonshop-option no-data">
                                                                </div>
                                                                <!-- CTA area -->

                                                                <div class="pd03-product-card__label-cta-wrap">

                                                                    <button
                                                                        class="cta cta--outlined cta--black js-pfv2-learn-more"
                                                                        href="/vn/smartphones/galaxy-a/galaxy-a35-5g-awesome-iceblue-128gb-sm-a356elbdxxv/"
                                                                        data-modelcode="SM-A356ELBDXXV"
                                                                        data-modelname="SM-A356E/DS"
                                                                        aria-label="Tìm hiểu thêm:Galaxy A35 5G"
                                                                        an-tr="pd03_product finder:option-product finder-product-link"
                                                                        an-ca="product click" an-ac="pf product card"
                                                                        an-la="learn more click">
                                                                        Tìm hiểu thêm
                                                                    </button>

                                                                    <button
                                                                        class="cta cta--contained cta--black js-pfv2-buy-now "
                                                                        href="javascript:;" data-link_info=""
                                                                        data-config_info="/vn/smartphones/galaxy-a/galaxy-a35/buy/"
                                                                        data-pimsubtype="galaxy a" data-pvitype="mobile"
                                                                        data-pvisubtype="smartphone"
                                                                        data-modelrevenue="8289600" data-modelqty="1"
                                                                        data-modelcurrency="VND"
                                                                        data-modelcode="SM-A356ELBDXXV"
                                                                        data-modelname="SM-A356E/DS"
                                                                        data-modeldisplay="Galaxy A35 5G"
                                                                        data-discountprice="8289600"
                                                                        an-tr="pd03_product finder:buy cta-product finder-cta-button"
                                                                        an-ca="buy cta" an-ac="buy now"
                                                                        an-la="pf product card:buy now">
                                                                        Mua ngay
                                                                    </button>

                                                                </div>

                                                                <div class="pd03-product-card__icon-text-cta-wrap">
                                                                    <input type="hidden" class="wtbStockStatusText"
                                                                        value="inStock">
                                                                    <input type="hidden" class="useWtbStockFunction"
                                                                        value="N">


                                                                    <button
                                                                        class="cta cta--label cta--black cta--icon cta--icon-leading cta--icon-compare js-pfv2-compare-cta "
                                                                        data-modelcode="SM-A356ELBDXXV"
                                                                        data-modelname="SM-A356E/DS"
                                                                        an-tr="pd03_product finder:where to buy compare-product finder-text-compare"
                                                                        an-ca="content click" an-ac="feature"
                                                                        an-la="pf product card:compare"
                                                                        data-displayname="Galaxy A35 5G"
                                                                        data-addedmodelcode=""
                                                                        data-categorysubtypecode="01010400"
                                                                        data-text-pressed="Comparing"
                                                                        data-img-src="//images.samsung.com/is/image/samsung/p6pim/vn/sm-a356elbdxxv/gallery/vn-galaxy-a35-5g-sm-a356-sm-a356elbdxxv-thumb-540189807?$252_252_PNG$"
                                                                        data-img-alt="Galaxy A35 5G màu Xanh Iceblue">
                                                                        So Sánh
                                                                        <svg class="icon" focusable="false"
                                                                            aria-hidden="true">
                                                                            <use xlink:href="#default-circle-regular"
                                                                                href="#default-circle-regular"></use>
                                                                        </svg>
                                                                    </button>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/* // PD03 Product Card Component */-->
                                            </div>
                                        @endforeach
                                        <div class="pd03-product-finder__content-item pd03-product-finder__content-item-view js-pfv2-product-card"
                                            data-productidx="8">
                                            <!--/* PD03 Product Card Component */-->
                                            <div class="pd03-product-card pd03-product-card--horizontal">

                                                <div class="pd03-product-card__item">
                                                    <div class="pd03-product-card__product-image">
                                                        <!-- product images -->

                                                        <a class="pd03-product-card__product-image-link"
                                                            href="/vn/smartphones/galaxy-s24/"
                                                            data-modelcode="SM-S921BZYQXXV" data-modelname="SM-S921B/DS"
                                                            aria-label="Galaxy S24"
                                                            an-tr="pd03_product finder:option-product finder-product-link"
                                                            an-ca="product click" an-ac="pf product card"
                                                            an-la="image click">
                                                            <div class="swiper-container" aria-live="polite"
                                                                data-swiper-option="{
						&quot;componentEl&quot;:&quot;.pd03-product-card__image&quot;,
						&quot;slidesPerView&quot;:1,
						&quot;keepWrapper&quot;:true,
						&quot;loop&quot;: false,
						&quot;pagination&quot;:false
						}">
                                                                <div class="swiper-wrapper">

                                                                    <div
                                                                        class="pd03-product-card__image-item swiper-slide">
                                                                        <div class="image">
                                                                            <img class="image__main lazy-load responsive-img"
                                                                                data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/2401/gallery/vn-galaxy-s24-sm-s921bzyqxxv-thumb-539304798?$252_252_PNG$"
                                                                                data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/2401/gallery/vn-galaxy-s24-sm-s921bzyqxxv-thumb-539304798?$344_344_PNG$"
                                                                                alt="front Amber Yellow" role="img"
                                                                                data-comp-name="image"
                                                                                data-src="//images.samsung.com/is/image/samsung/p6pim/vn/2401/gallery/vn-galaxy-s24-sm-s921bzyqxxv-thumb-539304798?$252_252_PNG$">
                                                                        </div>
                                                                    </div>

                                                                    <div class="pd03-product-card__image-item swiper-slide"
                                                                        style="display: none;">
                                                                        <div class="image">
                                                                            <img class="image__main lazy-load responsive-img"
                                                                                data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/2401/gallery/vn-galaxy-s24-sm-s921bzyqxxv-thumb-539304788?$252_252_PNG$"
                                                                                data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/2401/gallery/vn-galaxy-s24-sm-s921bzyqxxv-thumb-539304788?$344_344_PNG$"
                                                                                alt="back Amber Yellow" role="img"
                                                                                data-comp-name="image"
                                                                                data-src="//images.samsung.com/is/image/samsung/p6pim/vn/2401/gallery/vn-galaxy-s24-sm-s921bzyqxxv-thumb-539304788?$252_252_PNG$">
                                                                        </div>
                                                                    </div>

                                                                    <div class="pd03-product-card__image-item swiper-slide"
                                                                        style="display: none;">
                                                                        <div class="image">
                                                                            <img class="image__main lazy-load responsive-img"
                                                                                data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/2401/gallery/vn-galaxy-s24-sm-s921bzyqxxv-thumb-539304789?$252_252_PNG$"
                                                                                data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/2401/gallery/vn-galaxy-s24-sm-s921bzyqxxv-thumb-539304789?$344_344_PNG$"
                                                                                alt="backl30 Amber Yellow" role="img"
                                                                                data-comp-name="image"
                                                                                data-src="//images.samsung.com/is/image/samsung/p6pim/vn/2401/gallery/vn-galaxy-s24-sm-s921bzyqxxv-thumb-539304789?$252_252_PNG$">
                                                                        </div>
                                                                    </div>

                                                                    <div class="pd03-product-card__image-item swiper-slide"
                                                                        style="display: none;">
                                                                        <div class="image">
                                                                            <img class="image__main lazy-load responsive-img"
                                                                                data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/2401/gallery/vn-galaxy-s24-sm-s921bzyqxxv-thumb-539304790?$252_252_PNG$"
                                                                                data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/2401/gallery/vn-galaxy-s24-sm-s921bzyqxxv-thumb-539304790?$344_344_PNG$"
                                                                                alt="backr30 Amber Yellow" role="img"
                                                                                data-comp-name="image"
                                                                                data-src="//images.samsung.com/is/image/samsung/p6pim/vn/2401/gallery/vn-galaxy-s24-sm-s921bzyqxxv-thumb-539304790?$252_252_PNG$">
                                                                        </div>
                                                                    </div>

                                                                    <div class="pd03-product-card__image-item swiper-slide"
                                                                        style="display: none;">
                                                                        <div class="image">
                                                                            <img class="image__main lazy-load responsive-img"
                                                                                data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/2401/gallery/vn-galaxy-s24-sm-s921bzyqxxv-thumb-539304791?$252_252_PNG$"
                                                                                data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/2401/gallery/vn-galaxy-s24-sm-s921bzyqxxv-thumb-539304791?$344_344_PNG$"
                                                                                alt="front2 Amber Yellow" role="img"
                                                                                data-comp-name="image"
                                                                                data-src="//images.samsung.com/is/image/samsung/p6pim/vn/2401/gallery/vn-galaxy-s24-sm-s921bzyqxxv-thumb-539304791?$252_252_PNG$">
                                                                        </div>
                                                                    </div>

                                                                    <div class="pd03-product-card__image-item swiper-slide"
                                                                        style="display: none;">
                                                                        <div class="image">
                                                                            <img class="image__main lazy-load responsive-img"
                                                                                data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/2401/gallery/vn-galaxy-s24-sm-s921bzyqxxv-thumb-539304792?$252_252_PNG$"
                                                                                data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/2401/gallery/vn-galaxy-s24-sm-s921bzyqxxv-thumb-539304792?$344_344_PNG$"
                                                                                alt="frontl30 Amber Yellow" role="img"
                                                                                data-comp-name="image"
                                                                                data-src="//images.samsung.com/is/image/samsung/p6pim/vn/2401/gallery/vn-galaxy-s24-sm-s921bzyqxxv-thumb-539304792?$252_252_PNG$">
                                                                        </div>
                                                                    </div>

                                                                    <div class="pd03-product-card__image-item swiper-slide"
                                                                        style="display: none;">
                                                                        <div class="image">
                                                                            <img class="image__main lazy-load responsive-img"
                                                                                data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/2401/gallery/vn-galaxy-s24-sm-s921bzyqxxv-thumb-539304793?$252_252_PNG$"
                                                                                data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/2401/gallery/vn-galaxy-s24-sm-s921bzyqxxv-thumb-539304793?$344_344_PNG$"
                                                                                alt="frontr30 Amber Yellow" role="img"
                                                                                data-comp-name="image"
                                                                                data-src="//images.samsung.com/is/image/samsung/p6pim/vn/2401/gallery/vn-galaxy-s24-sm-s921bzyqxxv-thumb-539304793?$252_252_PNG$">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </a>

                                                        <!-- award icons -->

                                                        &lt;-- quick view --&gt;
                                                        <button
                                                            class="pd03-product-card__product-image-cta cta  cta--outlined cta--black pd03-product-card__quickview_btn "
                                                            aria-label="Button Label"
                                                            an-tr="pd03_product finder-product finder-quick view-option_click1"
                                                            an-ca="option click" an-ac="pf product card"
                                                            an-la="quick view">
                                                            Tổng Quan
                                                        </button>
                                                    </div>
                                                    <div class="pd03-product-card__product-content">
                                                        <!-- badge -->

                                                        <div class="pd03-product-card__badge">
                                                            <span
                                                                class="badge-icon  badge-icon--label  badge-icon--bg-color-teal">#YouMake</span>

                                                        </div>

                                                        <!-- wishlist -->

                                                        <div class="pd03-product-card__product-content-primary">
                                                            <div class="pd03-product-card__product-name">

                                                                <a class="pd03-product-card__product-name-link"
                                                                    href="/vn/smartphones/galaxy-s24/"
                                                                    aria-label="Galaxy S24"
                                                                    data-modelcode="SM-S921BZYQXXV"
                                                                    data-modelname="SM-S921B/DS"
                                                                    an-tr="pd03_product finder:option-product finder-product-link"
                                                                    an-ca="product click" an-ac="pf product card"
                                                                    an-la="display name">
                                                                    <p class="pd03-product-card__product-name-text">
                                                                        Galaxy S24</p>
                                                                </a>

                                                            </div>
                                                            <!-- option chips -->

                                                            <div class="pd03-product-card__option-selector ">

                                                                <!-- (2021.04.14 수정) .option-selector-v2__color-text 추가 -->
                                                                <div
                                                                    class="option-selector-v2 option-selector-v2__color-text">

                                                                    <div class="option-selector-v2__color-name">Màu sắc
                                                                        :
                                                                        <button type="button"
                                                                            class="option-selector-v2__color-name-text"
                                                                            disabled="true">
                                                                            <strong class="hidden"
                                                                                data-global-text="{&quot;Expand&quot; : &quot;Click to Expand&quot;, &quot;Collapse&quot; : &quot;Nhấp để thu gọn&quot;}">Nhấp
                                                                                để thu gọn</strong>
                                                                            <strong
                                                                                class="option-selector-v2__color-name-text-in">Vàng
                                                                                Amber</strong>
                                                                        </button>
                                                                        <div class="option-selector-v2__color-tooltip">
                                                                            Màu sắc : <strong
                                                                                class="option-selector-v2__color-tooltip-text">Vàng
                                                                                Amber</strong>
                                                                            <a href="javascript:void(0)"
                                                                                class="option-selector-v2__color-tooltip-close"
                                                                                role="button">
                                                                                <span class="hidden">Close</span>
                                                                                <svg class="icon icon-close"
                                                                                    focusable="false"
                                                                                    aria-hidden="true">
                                                                                    <use xlink:href="#delete-bold"
                                                                                        href="#delete-bold"></use>
                                                                                </svg>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="option-selector-v2__wrap option-selector-v2__wrap--color-chip"
                                                                        data-global-text="{ &quot;selected&quot; : &quot;Đã chọn&quot; }">
                                                                        <div
                                                                            class="option-selector-v2__swiper option-selector-v2__swiper--min">
                                                                            <!-- (2021.07.07 수정) aria-live="polite" 삭제 -->
                                                                            <div
                                                                                class="option-selector-v2__swiper-container">
                                                                                <!-- (2021.07.07 수정) role="list" 추가 -->
                                                                                <div class="option-selector-v2__swiper-wrapper"
                                                                                    role="list" style="">

                                                                                    <div class="option-selector-v2__swiper-slide is-checked "
                                                                                        role="listitem">
                                                                                        <button type="button"
                                                                                            class="option-selector-v2__color js-pfv2-product-fmychip"
                                                                                            data-chiptype="color"
                                                                                            data-modeli="0"
                                                                                            an-tr="pd03_product finder:option-product finder-text-option"
                                                                                            an-ca="option click"
                                                                                            an-ac="pf product card"
                                                                                            an-la="color:amber yellow"
                                                                                            data-modelcode="SM-S921BZYQXXV"
                                                                                            data-modelname="SM-S921B/DS">

                                                                                            <span
                                                                                                class="option-selector-v2__color-code">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="36"
                                                                                                    height="35.999"
                                                                                                    viewBox="0 0 36 35.999">
                                                                                                    <g
                                                                                                        transform="translate(-18.001 9)">
                                                                                                        <rect width="36"
                                                                                                            height="35.999"
                                                                                                            transform="translate(18.001 -9)"
                                                                                                            fill="none">
                                                                                                        </rect>
                                                                                                        <path
                                                                                                            d="M18,0A18,18,0,1,1,0,18,18,18,0,0,1,18,0Z"
                                                                                                            transform="translate(18.001 -9)"
                                                                                                            fill="#f1ead4">
                                                                                                        </path>
                                                                                                        <!--/* [D] 제일 마지막 태그인 path의 fill 속성 값 변경 제외 */-->
                                                                                                        <path
                                                                                                            d="M18,1A17,17,0,0,0,5.979,30.019,17,17,0,1,0,30.02,5.979,16.889,16.889,0,0,0,18,1m0-1A18,18,0,1,1,0,18,18,18,0,0,1,18,0Z"
                                                                                                            transform="translate(18.001 -9)"
                                                                                                            fill="rgba(0,0,0,0.5)">
                                                                                                        </path>
                                                                                                    </g>
                                                                                                </svg>
                                                                                                <span
                                                                                                    class="hidden">Vàng
                                                                                                    Amber</span>

                                                                                            </span>

                                                                                        </button>
                                                                                    </div>

                                                                                    <div class="option-selector-v2__swiper-slide  "
                                                                                        role="listitem">
                                                                                        <button type="button"
                                                                                            class="option-selector-v2__color js-pfv2-product-fmychip"
                                                                                            data-chiptype="color"
                                                                                            data-modeli="2"
                                                                                            an-tr="pd03_product finder:option-product finder-text-option"
                                                                                            an-ca="option click"
                                                                                            an-ac="pf product card"
                                                                                            an-la="color:onyx black"
                                                                                            data-modelcode="SM-S921BZKQXXV"
                                                                                            data-modelname="SM-S921B/DS">

                                                                                            <span
                                                                                                class="option-selector-v2__color-code">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="36"
                                                                                                    height="35.999"
                                                                                                    viewBox="0 0 36 35.999">
                                                                                                    <g
                                                                                                        transform="translate(-18.001 9)">
                                                                                                        <rect width="36"
                                                                                                            height="35.999"
                                                                                                            transform="translate(18.001 -9)"
                                                                                                            fill="none">
                                                                                                        </rect>
                                                                                                        <path
                                                                                                            d="M18,0A18,18,0,1,1,0,18,18,18,0,0,1,18,0Z"
                                                                                                            transform="translate(18.001 -9)"
                                                                                                            fill="#4a4a4d">
                                                                                                        </path>
                                                                                                        <!--/* [D] 제일 마지막 태그인 path의 fill 속성 값 변경 제외 */-->
                                                                                                        <path
                                                                                                            d="M18,1A17,17,0,0,0,5.979,30.019,17,17,0,1,0,30.02,5.979,16.889,16.889,0,0,0,18,1m0-1A18,18,0,1,1,0,18,18,18,0,0,1,18,0Z"
                                                                                                            transform="translate(18.001 -9)"
                                                                                                            fill="rgba(0,0,0,0.5)">
                                                                                                        </path>
                                                                                                    </g>
                                                                                                </svg>
                                                                                                <span class="hidden">Đen
                                                                                                    Onyx</span>
                                                                                                <span
                                                                                                    class="blind">selected</span>
                                                                                            </span>

                                                                                        </button>
                                                                                    </div>

                                                                                    <div class="option-selector-v2__swiper-slide  "
                                                                                        role="listitem">
                                                                                        <button type="button"
                                                                                            class="option-selector-v2__color js-pfv2-product-fmychip"
                                                                                            data-chiptype="color"
                                                                                            data-modeli="4"
                                                                                            an-tr="pd03_product finder:option-product finder-text-option"
                                                                                            an-ca="option click"
                                                                                            an-ac="pf product card"
                                                                                            an-la="color:cobalt violet"
                                                                                            data-modelcode="SM-S921BZVQXXV"
                                                                                            data-modelname="SM-S921B/DS">

                                                                                            <span
                                                                                                class="option-selector-v2__color-code">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="36"
                                                                                                    height="35.999"
                                                                                                    viewBox="0 0 36 35.999">
                                                                                                    <g
                                                                                                        transform="translate(-18.001 9)">
                                                                                                        <rect width="36"
                                                                                                            height="35.999"
                                                                                                            transform="translate(18.001 -9)"
                                                                                                            fill="none">
                                                                                                        </rect>
                                                                                                        <path
                                                                                                            d="M18,0A18,18,0,1,1,0,18,18,18,0,0,1,18,0Z"
                                                                                                            transform="translate(18.001 -9)"
                                                                                                            fill="#52566d">
                                                                                                        </path>
                                                                                                        <!--/* [D] 제일 마지막 태그인 path의 fill 속성 값 변경 제외 */-->
                                                                                                        <path
                                                                                                            d="M18,1A17,17,0,0,0,5.979,30.019,17,17,0,1,0,30.02,5.979,16.889,16.889,0,0,0,18,1m0-1A18,18,0,1,1,0,18,18,18,0,0,1,18,0Z"
                                                                                                            transform="translate(18.001 -9)"
                                                                                                            fill="rgba(0,0,0,0.5)">
                                                                                                        </path>
                                                                                                    </g>
                                                                                                </svg>
                                                                                                <span class="hidden">Tím
                                                                                                    Cobalt</span>
                                                                                                <span
                                                                                                    class="blind">selected</span>
                                                                                            </span>

                                                                                        </button>
                                                                                    </div>

                                                                                    <div class="option-selector-v2__swiper-slide  "
                                                                                        role="listitem">
                                                                                        <button type="button"
                                                                                            class="option-selector-v2__color js-pfv2-product-fmychip"
                                                                                            data-chiptype="color"
                                                                                            data-modeli="6"
                                                                                            an-tr="pd03_product finder:option-product finder-text-option"
                                                                                            an-ca="option click"
                                                                                            an-ac="pf product card"
                                                                                            an-la="color:marble gray"
                                                                                            data-modelcode="SM-S921BZAQXXV"
                                                                                            data-modelname="SM-S921B/DS">

                                                                                            <span
                                                                                                class="option-selector-v2__color-code">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="36"
                                                                                                    height="35.999"
                                                                                                    viewBox="0 0 36 35.999">
                                                                                                    <g
                                                                                                        transform="translate(-18.001 9)">
                                                                                                        <rect width="36"
                                                                                                            height="35.999"
                                                                                                            transform="translate(18.001 -9)"
                                                                                                            fill="none">
                                                                                                        </rect>
                                                                                                        <path
                                                                                                            d="M18,0A18,18,0,1,1,0,18,18,18,0,0,1,18,0Z"
                                                                                                            transform="translate(18.001 -9)"
                                                                                                            fill="#c5c3c3">
                                                                                                        </path>
                                                                                                        <!--/* [D] 제일 마지막 태그인 path의 fill 속성 값 변경 제외 */-->
                                                                                                        <path
                                                                                                            d="M18,1A17,17,0,0,0,5.979,30.019,17,17,0,1,0,30.02,5.979,16.889,16.889,0,0,0,18,1m0-1A18,18,0,1,1,0,18,18,18,0,0,1,18,0Z"
                                                                                                            transform="translate(18.001 -9)"
                                                                                                            fill="rgba(0,0,0,0.5)">
                                                                                                        </path>
                                                                                                    </g>
                                                                                                </svg>
                                                                                                <span class="hidden">Xám
                                                                                                    Marble</span>
                                                                                                <span
                                                                                                    class="blind">selected</span>
                                                                                            </span>

                                                                                        </button>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="option-selector-v2__wrap option-selector-v2__wrap--capacity"
                                                                        data-global-text="{ &quot;selected&quot; : &quot;Đã chọn&quot; }">
                                                                        <div
                                                                            class="option-selector-v2__swiper option-selector-v2__swiper--min">
                                                                            <!-- (2021.07.07 수정) aria-live="polite" 삭제 -->
                                                                            <div
                                                                                class="option-selector-v2__swiper-container">
                                                                                <!-- (2021.07.07 수정) role="list" 추가 -->
                                                                                <div class="option-selector-v2__swiper-wrapper"
                                                                                    role="list" style="">

                                                                                    <div class="option-selector-v2__swiper-slide  "
                                                                                        role="listitem">
                                                                                        <button type="button"
                                                                                            class="option-selector-v2__size js-pfv2-product-fmychip"
                                                                                            data-chiptype="other"
                                                                                            data-modeli="7"
                                                                                            an-tr="pd03_product finder:option-product finder-text-option"
                                                                                            an-ca="option click"
                                                                                            an-ac="pf product card"
                                                                                            an-la="mobile memory:256gb"
                                                                                            data-modelcode="SM-S921BZYCXXV"
                                                                                            data-modelname="SM-S921B/DS">
                                                                                            <span
                                                                                                class="option-selector-v2__size-text">256GB</span>
                                                                                            <span
                                                                                                class="blind">selected</span>
                                                                                        </button>
                                                                                    </div>

                                                                                    <div class="option-selector-v2__swiper-slide is-checked "
                                                                                        role="listitem">
                                                                                        <button type="button"
                                                                                            class="option-selector-v2__size js-pfv2-product-fmychip"
                                                                                            data-chiptype="other"
                                                                                            data-modeli="0"
                                                                                            an-tr="pd03_product finder:option-product finder-text-option"
                                                                                            an-ca="option click"
                                                                                            an-ac="pf product card"
                                                                                            an-la="mobile memory:512 gb"
                                                                                            data-modelcode="SM-S921BZYQXXV"
                                                                                            data-modelname="SM-S921B/DS">
                                                                                            <span
                                                                                                class="option-selector-v2__size-text">512
                                                                                                GB</span>

                                                                                        </button>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="option-selector-v2__wrap option-selector-v2__wrap--capacity"
                                                                        data-global-text="{ &quot;selected&quot; : &quot;Đã chọn&quot; }">
                                                                        <div
                                                                            class="option-selector-v2__swiper option-selector-v2__swiper--min">
                                                                            <!-- (2021.07.07 수정) aria-live="polite" 삭제 -->
                                                                            <div
                                                                                class="option-selector-v2__swiper-container">
                                                                                <!-- (2021.07.07 수정) role="list" 추가 -->
                                                                                <div class="option-selector-v2__swiper-wrapper"
                                                                                    role="list" style="">

                                                                                    <div class="option-selector-v2__swiper-slide is-checked "
                                                                                        role="listitem">
                                                                                        <button type="button"
                                                                                            class="option-selector-v2__size js-pfv2-product-fmychip"
                                                                                            data-chiptype="other"
                                                                                            data-modeli="0"
                                                                                            an-tr="pd03_product finder:option-product finder-text-option"
                                                                                            an-ca="option click"
                                                                                            an-ac="pf product card"
                                                                                            an-la="other:8 gb"
                                                                                            data-modelcode="SM-S921BZYQXXV"
                                                                                            data-modelname="SM-S921B/DS">
                                                                                            <span
                                                                                                class="option-selector-v2__size-text">8
                                                                                                GB</span>

                                                                                        </button>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <!-- price area vertical -->

                                                            <div class="pd03-product-card__price for-vertical    ">


                                                                <p class="pd03-product-card__price-second no-data">

                                                                </p>
                                                                <p class="pd03-product-card__price-main "
                                                                    data-pricetext="26.490.000&nbsp;₫">

                                                                    <span class="hidden">Tổng giá: </span>
                                                                    26.490.000&nbsp;₫

                                                                </p>

                                                                <div
                                                                    class="pd03-product-card__price-description no-data">



                                                                </div>

                                                            </div>
                                                            <div class="pd03-product-card__seller for-vertical no-data">

                                                            </div>

                                                            <!-- package area vertical -->

                                                            <div class="pd03-product-card__combo-package">

                                                            </div>

                                                            <!-- energy fiche vertical -->
                                                            <div class="pd03-product-card__fiche for-vertical no-data">
                                                            </div>
                                                            <!-- stock status vertical -->

                                                            <div class="pd03-product-card__stock  for-vertical ">

                                                                <div class="pd03-product-card__stock-inner">

                                                                    <span class="pd03-product-card__stock-icons">
                                                                        <svg class="icon icon--in-stock"
                                                                            focusable="false" aria-hidden="true">
                                                                            <use xlink:href="#done-bold"
                                                                                href="#done-bold"></use>
                                                                        </svg>
                                                                        <svg class="icon icon--out-of-stock"
                                                                            focusable="false" aria-hidden="true">
                                                                            <use xlink:href="#delete-bold"
                                                                                href="#delete-bold"></use>
                                                                        </svg>
                                                                    </span>

                                                                    Có hàng
                                                                </div>

                                                            </div>

                                                            <!-- rating area -->
                                                            <div class="pd03-product-card__rating ">
                                                                <!--/* Rating 사용하지 않을 경우 아래 마크업 삭제 */-->
                                                                <a href="/vn/smartphones/galaxy-s24/reviews/"
                                                                    aria-label="0, (0), Galaxy S24 Reivew"
                                                                    data-modelcode="SM-S921BZYQXXV"
                                                                    data-modelname="SM-S921B/DS"
                                                                    an-tr="pd03_product finder:option-product finder-image-review"
                                                                    an-ca="review" an-ac="pf product card"
                                                                    an-la="read review">
                                                                    <!-- /* 전체 Empty: .rating--empty 추가 */ -->
                                                                    <span class="rating  rating--empty">
                                                                        <span class="hidden">Mức đánh giá</span>
                                                                        <span class="rating__inner">
                                                                            <span class="rating__star-list">
                                                                                <span class="rating__star-item"><span
                                                                                        class="rating__star-empty"></span><span
                                                                                        class="rating__star-filled"
                                                                                        style="width: 0%;"></span></span><span
                                                                                    class="rating__star-item"><span
                                                                                        class="rating__star-empty"></span><span
                                                                                        class="rating__star-filled"
                                                                                        style="width: 0%;"></span></span><span
                                                                                    class="rating__star-item"><span
                                                                                        class="rating__star-empty"></span><span
                                                                                        class="rating__star-filled"
                                                                                        style="width: 0%;"></span></span><span
                                                                                    class="rating__star-item"><span
                                                                                        class="rating__star-empty"></span><span
                                                                                        class="rating__star-filled"
                                                                                        style="width: 0%;"></span></span><span
                                                                                    class="rating__star-item"><span
                                                                                        class="rating__star-empty"></span><span
                                                                                        class="rating__star-filled"
                                                                                        style="width: 0%;"></span></span>
                                                                            </span>
                                                                            <strong class="rating__point"><span
                                                                                    class="hidden">Xếp hạng sản phẩm :
                                                                                </span><span>0</span></strong>
                                                                            <em class="rating__review-count">(<span
                                                                                    class="hidden">Số lượng xếp hạng
                                                                                    :</span><span>0</span>)</em>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <!-- spec -->

                                                            <div class="pd03-product-card__spec ">

                                                                <ul class="pd03-product-card__spec-list" role="list">
                                                                    <li class="pd03-product-card__spec-item"
                                                                        role="listitem">Giờ là lúc thiết lập tiêu chuẩn
                                                                        mới cho thiết bị di động, với Galaxy AI</li>
                                                                    <li class="pd03-product-card__spec-item"
                                                                        role="listitem">Viền cong và lớp hoàn thiện nhôm
                                                                        satin</li>
                                                                    <li class="pd03-product-card__spec-item"
                                                                        role="listitem">Space Zoom cho những bức ảnh
                                                                        chân dung hoàn hảo đến từng pixel và sức mạnh để
                                                                        chơi game</li>
                                                                </ul>

                                                            </div>

                                                        </div>
                                                        <div class="pd03-product-card__product-content-secondary">
                                                            <!-- price area horizontal -->

                                                            <div class="pd03-product-card__price for-horizontal    ">


                                                                <p class="pd03-product-card__price-second no-data">

                                                                </p>
                                                                <p class="pd03-product-card__price-main "
                                                                    data-pricetext="26.490.000&nbsp;₫">

                                                                    <span class="hidden">Tổng giá: </span>
                                                                    26.490.000&nbsp;₫

                                                                </p>

                                                                <div
                                                                    class="pd03-product-card__price-description no-data">



                                                                </div>

                                                            </div>
                                                            <div
                                                                class="pd03-product-card__seller for-horizontal no-data">

                                                            </div>

                                                            <!-- energy fiche horizontal -->
                                                            <div
                                                                class="pd03-product-card__fiche for-horizontal no-data">
                                                            </div>
                                                            <!-- stock status horizontal -->

                                                            <div class="pd03-product-card__stock  for-horizontal ">

                                                                <div class="pd03-product-card__stock-inner">

                                                                    <span class="pd03-product-card__stock-icons">
                                                                        <svg class="icon icon--in-stock"
                                                                            focusable="false" aria-hidden="true">
                                                                            <use xlink:href="#done-bold"
                                                                                href="#done-bold"></use>
                                                                        </svg>
                                                                        <svg class="icon icon--out-of-stock"
                                                                            focusable="false" aria-hidden="true">
                                                                            <use xlink:href="#delete-bold"
                                                                                href="#delete-bold"></use>
                                                                        </svg>
                                                                    </span>

                                                                    Có hàng
                                                                </div>

                                                            </div>

                                                            <!-- feature benefit -->

                                                            <div class="pd03-product-card__benefit  ">

                                                                <div class="pd03-product-card__benefit-wrap ">
                                                                    <ul class="pd03-product-card__benefit-list"
                                                                        role="list">

                                                                        <li class="pd03-product-card__benefit-item"
                                                                            role="listitem">
                                                                            <div
                                                                                class="pd03-product-card__benefit-icon">
                                                                                <svg class="icon" focusable="false">
                                                                                    <use xlink:href="#shopping-deal-regular"
                                                                                        href="#shopping-deal-regular">
                                                                                    </use>
                                                                                </svg>
                                                                            </div>
                                                                            <p class="pd03-product-card__benefit-text">
                                                                                - Nhập SSMIDYEAR ưu đãi 1 triệu
                                                                            </p>
                                                                        </li>

                                                                        <li class="pd03-product-card__benefit-item"
                                                                            role="listitem">
                                                                            <div
                                                                                class="pd03-product-card__benefit-icon">
                                                                                <svg class="icon" focusable="false">
                                                                                    <use xlink:href="#shipping-free-regular"
                                                                                        href="#shipping-free-regular">
                                                                                    </use>
                                                                                </svg>
                                                                            </div>
                                                                            <p class="pd03-product-card__benefit-text">
                                                                                Miễn Phí Vận Chuyển Toàn Quốc
                                                                            </p>
                                                                        </li>

                                                                        <li class="pd03-product-card__benefit-item"
                                                                            role="listitem">
                                                                            <div
                                                                                class="pd03-product-card__benefit-icon">
                                                                                <svg class="icon" focusable="false">
                                                                                    <use xlink:href="#return-order-regular"
                                                                                        href="#return-order-regular">
                                                                                    </use>
                                                                                </svg>
                                                                            </div>
                                                                            <p class="pd03-product-card__benefit-text">
                                                                                Đổi trả trong 14 ngày nếu phát sinh lỗi
                                                                                của nhà sản xuất
                                                                            </p>
                                                                        </li>

                                                                        <li class="pd03-product-card__benefit-item"
                                                                            role="listitem">
                                                                            <div
                                                                                class="pd03-product-card__benefit-icon">
                                                                                <svg class="icon" focusable="false">
                                                                                    <use xlink:href="#cracked-screen-trade-in"
                                                                                        href="#cracked-screen-trade-in">
                                                                                    </use>
                                                                                </svg>
                                                                            </div>
                                                                            <p class="pd03-product-card__benefit-text">
                                                                                Thu Cũ Đổi Mới Áp Dụng Cho Cả Thiết Bị
                                                                                Vỡ Màn Hình
                                                                            </p>
                                                                        </li>

                                                                    </ul>


                                                                    <div class="pd03-product-card__benefit-tooltip">
                                                                        <button type="button"
                                                                            class="pd03-product-card__benefit-more pd03-product-card__quickview_btn">
                                                                            <span>Xem thêm</span>
                                                                        </button>
                                                                        <!-- div class="pd03-product-card__benefit-tooltip-wrap" role="tooltip">
									<ul class="pd03-product-card__benefit-tooltip-list" role="list">
										<li class="pd03-product-card__benefit-tooltip-item" role="listitem">*- Nhập SSMIDYEAR ưu đãi 1 triệu</li><li class="pd03-product-card__benefit-tooltip-item" role="listitem">*- Thanh toán trước giảm thêm 1 triệu</li><li class="pd03-product-card__benefit-tooltip-item" role="listitem">*- Tặng ngay củ sạc 25W</li><li class="pd03-product-card__benefit-tooltip-item" role="listitem">*Miễn Phí Vận Chuyển Toàn Quốc</li><li class="pd03-product-card__benefit-tooltip-item" role="listitem">*Đổi trả trong 14 ngày nếu phát sinh lỗi của nhà sản xuất</li><li class="pd03-product-card__benefit-tooltip-item" role="listitem">*Thu Cũ Đổi Mới Áp Dụng Cho Cả Thiết Bị Vỡ Màn Hình</li>
									</ul>
									<button type="button" class="pd03-product-card__benefit-tooltip-close">
										<span class="hidden">Close</span>
										<svg class="icon">
											<use xlink:href="#delete-bold" href="#delete-bold"></use>
										</svg>
									</button>
								</div -->
                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <!-- national flags and price campaign -->
                                                            <div class="pd03-product-card__nonshop-option no-data">
                                                            </div>
                                                            <!-- CTA area -->

                                                            <div class="pd03-product-card__label-cta-wrap">

                                                                <button
                                                                    class="cta cta--outlined cta--black js-pfv2-learn-more"
                                                                    href="/vn/smartphones/galaxy-s24/"
                                                                    data-modelcode="SM-S921BZYQXXV"
                                                                    data-modelname="SM-S921B/DS"
                                                                    aria-label="Tìm hiểu thêm:Galaxy S24"
                                                                    an-tr="pd03_product finder:option-product finder-product-link"
                                                                    an-ca="product click" an-ac="pf product card"
                                                                    an-la="learn more click">
                                                                    Tìm hiểu thêm
                                                                </button>

                                                                <button
                                                                    class="cta cta--contained cta--black js-pfv2-buy-now "
                                                                    href="javascript:;" data-link_info=""
                                                                    data-config_info="/vn/smartphones/galaxy-s24/buy/"
                                                                    data-pimsubtype="galaxy s" data-pvitype="mobile"
                                                                    data-pvisubtype="smartphone"
                                                                    data-modelrevenue="26490000" data-modelqty="1"
                                                                    data-modelcurrency="VND"
                                                                    data-modelcode="SM-S921BZYQXXV"
                                                                    data-modelname="SM-S921B/DS"
                                                                    data-modeldisplay="Galaxy S24"
                                                                    data-discountprice="26490000"
                                                                    an-tr="pd03_product finder:buy cta-product finder-cta-button"
                                                                    an-ca="buy cta" an-ac="buy now"
                                                                    an-la="pf product card:buy now">
                                                                    Mua ngay
                                                                </button>

                                                            </div>

                                                            <div class="pd03-product-card__icon-text-cta-wrap">
                                                                <input type="hidden" class="wtbStockStatusText"
                                                                    value="inStock">
                                                                <input type="hidden" class="useWtbStockFunction"
                                                                    value="N">


                                                                <button
                                                                    class="cta cta--label cta--black cta--icon cta--icon-leading cta--icon-compare js-pfv2-compare-cta "
                                                                    data-modelcode="SM-S921BZYQXXV"
                                                                    data-modelname="SM-S921B/DS"
                                                                    an-tr="pd03_product finder:where to buy compare-product finder-text-compare"
                                                                    an-ca="content click" an-ac="feature"
                                                                    an-la="pf product card:compare"
                                                                    data-displayname="Galaxy S24" data-addedmodelcode=""
                                                                    data-categorysubtypecode="01010100"
                                                                    data-text-pressed="Comparing"
                                                                    data-img-src="//images.samsung.com/is/image/samsung/p6pim/vn/2401/gallery/vn-galaxy-s24-sm-s921bzyqxxv-thumb-539304798?$252_252_PNG$"
                                                                    data-img-alt="front Amber Yellow">
                                                                    So Sánh
                                                                    <svg class="icon" focusable="false"
                                                                        aria-hidden="true">
                                                                        <use xlink:href="#default-circle-regular"
                                                                            href="#default-circle-regular"></use>
                                                                    </svg>
                                                                </button>

                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/* // PD03 Product Card Component */-->
                                        </div><!--/* product-card-grid */-->
                                        <div class="pd03-product-finder__content-item pd03-product-finder__content-item-view js-pfv2-product-card"
                                            data-productidx="9">
                                            <!--/* PD03 Product Card Component */-->
                                            <div class="pd03-product-card pd03-product-card--horizontal">

                                                <div class="pd03-product-card__item">
                                                    <div class="pd03-product-card__product-image">
                                                        <!-- product images -->

                                                        <a class="pd03-product-card__product-image-link"
                                                            href="/vn/smartphones/galaxy-a/galaxy-a05s-black-128gb-sm-a057fzkgxxv/"
                                                            data-modelcode="SM-A057FZKGXXV" data-modelname="SM-A057F/DS"
                                                            aria-label="Galaxy A05s"
                                                            an-tr="pd03_product finder:option-product finder-product-link"
                                                            an-ca="product click" an-ac="pf product card"
                                                            an-la="image click">
                                                            <div class="swiper-container" aria-live="polite"
                                                                data-swiper-option="{
						&quot;componentEl&quot;:&quot;.pd03-product-card__image&quot;,
						&quot;slidesPerView&quot;:1,
						&quot;keepWrapper&quot;:true,
						&quot;loop&quot;: false,
						&quot;pagination&quot;:false
						}">
                                                                <div class="swiper-wrapper">

                                                                    <div
                                                                        class="pd03-product-card__image-item swiper-slide">
                                                                        <div class="image">
                                                                            <img class="image__main lazy-load responsive-img"
                                                                                data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/sm-a057fzkgxxv/gallery/vn-galaxy-a05s-sm-a057-sm-a057fzkgxxv-thumb-538358247?$252_252_PNG$"
                                                                                data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/sm-a057fzkgxxv/gallery/vn-galaxy-a05s-sm-a057-sm-a057fzkgxxv-thumb-538358247?$344_344_PNG$"
                                                                                alt="front Black" role="img"
                                                                                data-comp-name="image"
                                                                                data-src="//images.samsung.com/is/image/samsung/p6pim/vn/sm-a057fzkgxxv/gallery/vn-galaxy-a05s-sm-a057-sm-a057fzkgxxv-thumb-538358247?$252_252_PNG$">
                                                                        </div>
                                                                    </div>

                                                                    <div class="pd03-product-card__image-item swiper-slide"
                                                                        style="display: none;">
                                                                        <div class="image">
                                                                            <img class="image__main lazy-load responsive-img"
                                                                                data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/sm-a057fzkgxxv/gallery/vn-galaxy-a05s-sm-a057-sm-a057fzkgxxv-thumb-538358242?$252_252_PNG$"
                                                                                data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/sm-a057fzkgxxv/gallery/vn-galaxy-a05s-sm-a057-sm-a057fzkgxxv-thumb-538358242?$344_344_PNG$"
                                                                                alt="black Black" role="img"
                                                                                data-comp-name="image"
                                                                                data-src="//images.samsung.com/is/image/samsung/p6pim/vn/sm-a057fzkgxxv/gallery/vn-galaxy-a05s-sm-a057-sm-a057fzkgxxv-thumb-538358242?$252_252_PNG$">
                                                                        </div>
                                                                    </div>

                                                                    <div class="pd03-product-card__image-item swiper-slide"
                                                                        style="display: none;">
                                                                        <div class="image">
                                                                            <img class="image__main lazy-load responsive-img"
                                                                                data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/sm-a057fzkgxxv/gallery/vn-galaxy-a05s-sm-a057-sm-a057fzkgxxv-thumb-538358243?$252_252_PNG$"
                                                                                data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/sm-a057fzkgxxv/gallery/vn-galaxy-a05s-sm-a057-sm-a057fzkgxxv-thumb-538358243?$344_344_PNG$"
                                                                                alt="black Black" role="img"
                                                                                data-comp-name="image"
                                                                                data-src="//images.samsung.com/is/image/samsung/p6pim/vn/sm-a057fzkgxxv/gallery/vn-galaxy-a05s-sm-a057-sm-a057fzkgxxv-thumb-538358243?$252_252_PNG$">
                                                                        </div>
                                                                    </div>

                                                                    <div class="pd03-product-card__image-item swiper-slide"
                                                                        style="display: none;">
                                                                        <div class="image">
                                                                            <img class="image__main lazy-load responsive-img"
                                                                                data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/sm-a057fzkgxxv/gallery/vn-galaxy-a05s-sm-a057-sm-a057fzkgxxv-thumb-538358244?$252_252_PNG$"
                                                                                data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/sm-a057fzkgxxv/gallery/vn-galaxy-a05s-sm-a057-sm-a057fzkgxxv-thumb-538358244?$344_344_PNG$"
                                                                                alt="black Black" role="img"
                                                                                data-comp-name="image"
                                                                                data-src="//images.samsung.com/is/image/samsung/p6pim/vn/sm-a057fzkgxxv/gallery/vn-galaxy-a05s-sm-a057-sm-a057fzkgxxv-thumb-538358244?$252_252_PNG$">
                                                                        </div>
                                                                    </div>

                                                                    <div class="pd03-product-card__image-item swiper-slide"
                                                                        style="display: none;">
                                                                        <div class="image">
                                                                            <img class="image__main lazy-load responsive-img"
                                                                                data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/sm-a057fzkgxxv/gallery/vn-galaxy-a05s-sm-a057-sm-a057fzkgxxv-thumb-538358239?$252_252_PNG$"
                                                                                data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/sm-a057fzkgxxv/gallery/vn-galaxy-a05s-sm-a057-sm-a057fzkgxxv-thumb-538358239?$344_344_PNG$"
                                                                                alt="black Black" role="img"
                                                                                data-comp-name="image"
                                                                                data-src="//images.samsung.com/is/image/samsung/p6pim/vn/sm-a057fzkgxxv/gallery/vn-galaxy-a05s-sm-a057-sm-a057fzkgxxv-thumb-538358239?$252_252_PNG$">
                                                                        </div>
                                                                    </div>

                                                                    <div class="pd03-product-card__image-item swiper-slide"
                                                                        style="display: none;">
                                                                        <div class="image">
                                                                            <img class="image__main lazy-load responsive-img"
                                                                                data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/sm-a057fzkgxxv/gallery/vn-galaxy-a05s-sm-a057-sm-a057fzkgxxv-thumb-538358240?$252_252_PNG$"
                                                                                data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/sm-a057fzkgxxv/gallery/vn-galaxy-a05s-sm-a057-sm-a057fzkgxxv-thumb-538358240?$344_344_PNG$"
                                                                                alt="black Black" role="img"
                                                                                data-comp-name="image"
                                                                                data-src="//images.samsung.com/is/image/samsung/p6pim/vn/sm-a057fzkgxxv/gallery/vn-galaxy-a05s-sm-a057-sm-a057fzkgxxv-thumb-538358240?$252_252_PNG$">
                                                                        </div>
                                                                    </div>

                                                                    <div class="pd03-product-card__image-item swiper-slide"
                                                                        style="display: none;">
                                                                        <div class="image">
                                                                            <img class="image__main lazy-load responsive-img"
                                                                                data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/sm-a057fzkgxxv/gallery/vn-galaxy-a05s-sm-a057-sm-a057fzkgxxv-thumb-538358241?$252_252_PNG$"
                                                                                data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/sm-a057fzkgxxv/gallery/vn-galaxy-a05s-sm-a057-sm-a057fzkgxxv-thumb-538358241?$344_344_PNG$"
                                                                                alt="black Black" role="img"
                                                                                data-comp-name="image"
                                                                                data-src="//images.samsung.com/is/image/samsung/p6pim/vn/sm-a057fzkgxxv/gallery/vn-galaxy-a05s-sm-a057-sm-a057fzkgxxv-thumb-538358241?$252_252_PNG$">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </a>

                                                        <!-- award icons -->

                                                        &lt;-- quick view --&gt;
                                                        <button
                                                            class="pd03-product-card__product-image-cta cta  cta--outlined cta--black pd03-product-card__quickview_btn "
                                                            aria-label="Button Label"
                                                            an-tr="pd03_product finder-product finder-quick view-option_click1"
                                                            an-ca="option click" an-ac="pf product card"
                                                            an-la="quick view">
                                                            Tổng Quan
                                                        </button>
                                                    </div>
                                                    <div class="pd03-product-card__product-content">
                                                        <!-- badge -->

                                                        <!-- wishlist -->

                                                        <div class="pd03-product-card__product-content-primary">
                                                            <div class="pd03-product-card__product-name">

                                                                <a class="pd03-product-card__product-name-link"
                                                                    href="/vn/smartphones/galaxy-a/galaxy-a05s-black-128gb-sm-a057fzkgxxv/"
                                                                    aria-label="Galaxy A05s"
                                                                    data-modelcode="SM-A057FZKGXXV"
                                                                    data-modelname="SM-A057F/DS"
                                                                    an-tr="pd03_product finder:option-product finder-product-link"
                                                                    an-ca="product click" an-ac="pf product card"
                                                                    an-la="display name">
                                                                    <p class="pd03-product-card__product-name-text">
                                                                        Galaxy A05s</p>
                                                                </a>

                                                            </div>
                                                            <!-- option chips -->

                                                            <div class="pd03-product-card__option-selector ">

                                                                <!-- (2021.04.14 수정) .option-selector-v2__color-text 추가 -->
                                                                <div
                                                                    class="option-selector-v2 option-selector-v2__color-text">

                                                                    <div class="option-selector-v2__color-name">Màu sắc
                                                                        :
                                                                        <button type="button"
                                                                            class="option-selector-v2__color-name-text"
                                                                            disabled="true">
                                                                            <strong class="hidden"
                                                                                data-global-text="{&quot;Expand&quot; : &quot;Click to Expand&quot;, &quot;Collapse&quot; : &quot;Nhấp để thu gọn&quot;}">Nhấp
                                                                                để thu gọn</strong>
                                                                            <strong
                                                                                class="option-selector-v2__color-name-text-in">Đen
                                                                                Đá</strong>
                                                                        </button>
                                                                        <div class="option-selector-v2__color-tooltip">
                                                                            Màu sắc : <strong
                                                                                class="option-selector-v2__color-tooltip-text">Đen
                                                                                Đá</strong>
                                                                            <a href="javascript:void(0)"
                                                                                class="option-selector-v2__color-tooltip-close"
                                                                                role="button">
                                                                                <span class="hidden">Close</span>
                                                                                <svg class="icon icon-close"
                                                                                    focusable="false"
                                                                                    aria-hidden="true">
                                                                                    <use xlink:href="#delete-bold"
                                                                                        href="#delete-bold"></use>
                                                                                </svg>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="option-selector-v2__wrap option-selector-v2__wrap--color-chip"
                                                                        data-global-text="{ &quot;selected&quot; : &quot;Đã chọn&quot; }">
                                                                        <div
                                                                            class="option-selector-v2__swiper option-selector-v2__swiper--min">
                                                                            <!-- (2021.07.07 수정) aria-live="polite" 삭제 -->
                                                                            <div
                                                                                class="option-selector-v2__swiper-container">
                                                                                <!-- (2021.07.07 수정) role="list" 추가 -->
                                                                                <div class="option-selector-v2__swiper-wrapper"
                                                                                    role="list" style="">

                                                                                    <div class="option-selector-v2__swiper-slide is-checked "
                                                                                        role="listitem">
                                                                                        <button type="button"
                                                                                            class="option-selector-v2__color js-pfv2-product-fmychip"
                                                                                            data-chiptype="color"
                                                                                            data-modeli="0"
                                                                                            an-tr="pd03_product finder:option-product finder-text-option"
                                                                                            an-ca="option click"
                                                                                            an-ac="pf product card"
                                                                                            an-la="color:black"
                                                                                            data-modelcode="SM-A057FZKGXXV"
                                                                                            data-modelname="SM-A057F/DS">

                                                                                            <span
                                                                                                class="option-selector-v2__color-code">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="36"
                                                                                                    height="35.999"
                                                                                                    viewBox="0 0 36 35.999">
                                                                                                    <g
                                                                                                        transform="translate(-18.001 9)">
                                                                                                        <rect width="36"
                                                                                                            height="35.999"
                                                                                                            transform="translate(18.001 -9)"
                                                                                                            fill="none">
                                                                                                        </rect>
                                                                                                        <path
                                                                                                            d="M18,0A18,18,0,1,1,0,18,18,18,0,0,1,18,0Z"
                                                                                                            transform="translate(18.001 -9)"
                                                                                                            fill="#3b3d3f">
                                                                                                        </path>
                                                                                                        <!--/* [D] 제일 마지막 태그인 path의 fill 속성 값 변경 제외 */-->
                                                                                                        <path
                                                                                                            d="M18,1A17,17,0,0,0,5.979,30.019,17,17,0,1,0,30.02,5.979,16.889,16.889,0,0,0,18,1m0-1A18,18,0,1,1,0,18,18,18,0,0,1,18,0Z"
                                                                                                            transform="translate(18.001 -9)"
                                                                                                            fill="rgba(0,0,0,0.5)">
                                                                                                        </path>
                                                                                                    </g>
                                                                                                </svg>
                                                                                                <span class="hidden">Đen
                                                                                                    Đá</span>

                                                                                            </span>

                                                                                        </button>
                                                                                    </div>

                                                                                    <div class="option-selector-v2__swiper-slide  "
                                                                                        role="listitem">
                                                                                        <button type="button"
                                                                                            class="option-selector-v2__color js-pfv2-product-fmychip"
                                                                                            data-chiptype="color"
                                                                                            data-modeli="3"
                                                                                            an-tr="pd03_product finder:option-product finder-text-option"
                                                                                            an-ca="option click"
                                                                                            an-ac="pf product card"
                                                                                            an-la="color:light green"
                                                                                            data-modelcode="SM-A057FLGGXXV"
                                                                                            data-modelname="SM-A057F/DS">

                                                                                            <span
                                                                                                class="option-selector-v2__color-code">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="36"
                                                                                                    height="35.999"
                                                                                                    viewBox="0 0 36 35.999">
                                                                                                    <g
                                                                                                        transform="translate(-18.001 9)">
                                                                                                        <rect width="36"
                                                                                                            height="35.999"
                                                                                                            transform="translate(18.001 -9)"
                                                                                                            fill="none">
                                                                                                        </rect>
                                                                                                        <path
                                                                                                            d="M18,0A18,18,0,1,1,0,18,18,18,0,0,1,18,0Z"
                                                                                                            transform="translate(18.001 -9)"
                                                                                                            fill="#c1d1a6">
                                                                                                        </path>
                                                                                                        <!--/* [D] 제일 마지막 태그인 path의 fill 속성 값 변경 제외 */-->
                                                                                                        <path
                                                                                                            d="M18,1A17,17,0,0,0,5.979,30.019,17,17,0,1,0,30.02,5.979,16.889,16.889,0,0,0,18,1m0-1A18,18,0,1,1,0,18,18,18,0,0,1,18,0Z"
                                                                                                            transform="translate(18.001 -9)"
                                                                                                            fill="rgba(0,0,0,0.5)">
                                                                                                        </path>
                                                                                                    </g>
                                                                                                </svg>
                                                                                                <span
                                                                                                    class="hidden">Xanh
                                                                                                    Matcha</span>
                                                                                                <span
                                                                                                    class="blind">selected</span>
                                                                                            </span>

                                                                                        </button>
                                                                                    </div>

                                                                                    <div class="option-selector-v2__swiper-slide  "
                                                                                        role="listitem">
                                                                                        <button type="button"
                                                                                            class="option-selector-v2__color js-pfv2-product-fmychip"
                                                                                            data-chiptype="color"
                                                                                            data-modeli="5"
                                                                                            an-tr="pd03_product finder:option-product finder-text-option"
                                                                                            an-ca="option click"
                                                                                            an-ac="pf product card"
                                                                                            an-la="color:silver"
                                                                                            data-modelcode="SM-A057FZSGXXV"
                                                                                            data-modelname="SM-A057F/DS">

                                                                                            <span
                                                                                                class="option-selector-v2__color-code">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="36"
                                                                                                    height="35.999"
                                                                                                    viewBox="0 0 36 35.999">
                                                                                                    <g
                                                                                                        transform="translate(-18.001 9)">
                                                                                                        <rect width="36"
                                                                                                            height="35.999"
                                                                                                            transform="translate(18.001 -9)"
                                                                                                            fill="none">
                                                                                                        </rect>
                                                                                                        <path
                                                                                                            d="M18,0A18,18,0,1,1,0,18,18,18,0,0,1,18,0Z"
                                                                                                            transform="translate(18.001 -9)"
                                                                                                            fill="#cbc6c4">
                                                                                                        </path>
                                                                                                        <!--/* [D] 제일 마지막 태그인 path의 fill 속성 값 변경 제외 */-->
                                                                                                        <path
                                                                                                            d="M18,1A17,17,0,0,0,5.979,30.019,17,17,0,1,0,30.02,5.979,16.889,16.889,0,0,0,18,1m0-1A18,18,0,1,1,0,18,18,18,0,0,1,18,0Z"
                                                                                                            transform="translate(18.001 -9)"
                                                                                                            fill="rgba(0,0,0,0.5)">
                                                                                                        </path>
                                                                                                    </g>
                                                                                                </svg>
                                                                                                <span class="hidden">Bạc
                                                                                                    Sỉu</span>
                                                                                                <span
                                                                                                    class="blind">selected</span>
                                                                                            </span>

                                                                                        </button>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="option-selector-v2__wrap option-selector-v2__wrap--capacity"
                                                                        data-global-text="{ &quot;selected&quot; : &quot;Đã chọn&quot; }">
                                                                        <div
                                                                            class="option-selector-v2__swiper option-selector-v2__swiper--min">
                                                                            <!-- (2021.07.07 수정) aria-live="polite" 삭제 -->
                                                                            <div
                                                                                class="option-selector-v2__swiper-container">
                                                                                <!-- (2021.07.07 수정) role="list" 추가 -->
                                                                                <div class="option-selector-v2__swiper-wrapper"
                                                                                    role="list" style="">

                                                                                    <div class="option-selector-v2__swiper-slide is-checked "
                                                                                        role="listitem">
                                                                                        <button type="button"
                                                                                            class="option-selector-v2__size js-pfv2-product-fmychip"
                                                                                            data-chiptype="other"
                                                                                            data-modeli="0"
                                                                                            an-tr="pd03_product finder:option-product finder-text-option"
                                                                                            an-ca="option click"
                                                                                            an-ac="pf product card"
                                                                                            an-la="mobile memory:128 gb"
                                                                                            data-modelcode="SM-A057FZKGXXV"
                                                                                            data-modelname="SM-A057F/DS">
                                                                                            <span
                                                                                                class="option-selector-v2__size-text">128
                                                                                                GB</span>

                                                                                        </button>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="option-selector-v2__wrap option-selector-v2__wrap--capacity"
                                                                        data-global-text="{ &quot;selected&quot; : &quot;Đã chọn&quot; }">
                                                                        <div
                                                                            class="option-selector-v2__swiper option-selector-v2__swiper--min">
                                                                            <!-- (2021.07.07 수정) aria-live="polite" 삭제 -->
                                                                            <div
                                                                                class="option-selector-v2__swiper-container">
                                                                                <!-- (2021.07.07 수정) role="list" 추가 -->
                                                                                <div class="option-selector-v2__swiper-wrapper"
                                                                                    role="list" style="">

                                                                                    <div class="option-selector-v2__swiper-slide  "
                                                                                        role="listitem">
                                                                                        <button type="button"
                                                                                            class="option-selector-v2__size js-pfv2-product-fmychip"
                                                                                            data-chiptype="other"
                                                                                            data-modeli="1"
                                                                                            an-tr="pd03_product finder:option-product finder-text-option"
                                                                                            an-ca="option click"
                                                                                            an-ac="pf product card"
                                                                                            an-la="other:6 gb"
                                                                                            data-modelcode="SM-A057FZKHXXV"
                                                                                            data-modelname="SM-A057F/DS">
                                                                                            <span
                                                                                                class="option-selector-v2__size-text">6
                                                                                                GB</span>
                                                                                            <span
                                                                                                class="blind">selected</span>
                                                                                        </button>
                                                                                    </div>

                                                                                    <div class="option-selector-v2__swiper-slide is-checked "
                                                                                        role="listitem">
                                                                                        <button type="button"
                                                                                            class="option-selector-v2__size js-pfv2-product-fmychip"
                                                                                            data-chiptype="other"
                                                                                            data-modeli="0"
                                                                                            an-tr="pd03_product finder:option-product finder-text-option"
                                                                                            an-ca="option click"
                                                                                            an-ac="pf product card"
                                                                                            an-la="other:4 gb"
                                                                                            data-modelcode="SM-A057FZKGXXV"
                                                                                            data-modelname="SM-A057F/DS">
                                                                                            <span
                                                                                                class="option-selector-v2__size-text">4
                                                                                                GB</span>

                                                                                        </button>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <!-- price area vertical -->

                                                            <div class="pd03-product-card__price for-vertical    ">


                                                                <p class="pd03-product-card__price-second ">

                                                                    <span class="pd03-product-card__price-label">
                                                                        <span class="hidden">Price before discount:
                                                                        </span>
                                                                        chiết khấu 300.000&nbsp;₫ (giá gốc
                                                                        <del>3.989.700&nbsp;₫</del>)
                                                                    </span>

                                                                </p>
                                                                <p class="pd03-product-card__price-main "
                                                                    data-pricetext="3.689.700&nbsp;₫">

                                                                    <span class="hidden">Tổng giá: </span>
                                                                    3.689.700&nbsp;₫

                                                                </p>

                                                                <div
                                                                    class="pd03-product-card__price-description no-data">



                                                                </div>

                                                            </div>
                                                            <div class="pd03-product-card__seller for-vertical no-data">

                                                            </div>

                                                            <!-- package area vertical -->

                                                            <div class="pd03-product-card__combo-package">

                                                            </div>

                                                            <!-- energy fiche vertical -->
                                                            <div class="pd03-product-card__fiche for-vertical no-data">
                                                            </div>
                                                            <!-- stock status vertical -->

                                                            <div class="pd03-product-card__stock  for-vertical ">

                                                                <div class="pd03-product-card__stock-inner">

                                                                    <span class="pd03-product-card__stock-icons">
                                                                        <svg class="icon icon--in-stock"
                                                                            focusable="false" aria-hidden="true">
                                                                            <use xlink:href="#done-bold"
                                                                                href="#done-bold"></use>
                                                                        </svg>
                                                                        <svg class="icon icon--out-of-stock"
                                                                            focusable="false" aria-hidden="true">
                                                                            <use xlink:href="#delete-bold"
                                                                                href="#delete-bold"></use>
                                                                        </svg>
                                                                    </span>

                                                                    Có hàng
                                                                </div>

                                                            </div>

                                                            <!-- rating area -->
                                                            <div class="pd03-product-card__rating ">
                                                                <!--/* Rating 사용하지 않을 경우 아래 마크업 삭제 */-->
                                                                <a href="/vn/smartphones/galaxy-a/galaxy-a05s-black-128gb-sm-a057fzkgxxv/#reviews"
                                                                    aria-label="3.7, (13), Galaxy A05s Reivew"
                                                                    data-modelcode="SM-A057FZKGXXV"
                                                                    data-modelname="SM-A057F/DS"
                                                                    an-tr="pd03_product finder:option-product finder-image-review"
                                                                    an-ca="review" an-ac="pf product card"
                                                                    an-la="read review">
                                                                    <!-- /* 전체 Empty: .rating--empty 추가 */ -->
                                                                    <span class="rating ">
                                                                        <span class="hidden">Mức đánh giá</span>
                                                                        <span class="rating__inner">
                                                                            <span class="rating__star-list">
                                                                                <span class="rating__star-item"><span
                                                                                        class="rating__star-empty"></span><span
                                                                                        class="rating__star-filled"
                                                                                        style="width: 100%;"></span></span><span
                                                                                    class="rating__star-item"><span
                                                                                        class="rating__star-empty"></span><span
                                                                                        class="rating__star-filled"
                                                                                        style="width: 100%;"></span></span><span
                                                                                    class="rating__star-item"><span
                                                                                        class="rating__star-empty"></span><span
                                                                                        class="rating__star-filled"
                                                                                        style="width: 100%;"></span></span><span
                                                                                    class="rating__star-item"><span
                                                                                        class="rating__star-empty"></span><span
                                                                                        class="rating__star-filled"
                                                                                        style="width: 70%;"></span></span><span
                                                                                    class="rating__star-item"><span
                                                                                        class="rating__star-empty"></span><span
                                                                                        class="rating__star-filled"
                                                                                        style="width: 0%;"></span></span>
                                                                            </span>
                                                                            <strong class="rating__point"><span
                                                                                    class="hidden">Xếp hạng sản phẩm :
                                                                                </span><span>3.7</span></strong>
                                                                            <em class="rating__review-count">(<span
                                                                                    class="hidden">Số lượng xếp hạng
                                                                                    :</span><span>13</span>)</em>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <!-- spec -->

                                                            <div class="pd03-product-card__spec ">

                                                                <ul class="pd03-product-card__spec-list" role="list">
                                                                    <li class="pd03-product-card__spec-item"
                                                                        role="listitem">Màn hình độ phân giải cao FHD+
                                                                        rộng 6.7"</li>
                                                                    <li class="pd03-product-card__spec-item"
                                                                        role="listitem">Camera Góc Rộng 50MP </li>
                                                                    <li class="pd03-product-card__spec-item"
                                                                        role="listitem">Vi xử lý Octa-core mạnh mẽ </li>
                                                                </ul>

                                                            </div>

                                                        </div>
                                                        <div class="pd03-product-card__product-content-secondary">
                                                            <!-- price area horizontal -->

                                                            <div class="pd03-product-card__price for-horizontal    ">


                                                                <p class="pd03-product-card__price-second ">

                                                                    <span class="pd03-product-card__price-label">
                                                                        <span class="hidden">Price before discount:
                                                                        </span>
                                                                        chiết khấu 300.000&nbsp;₫ (giá gốc
                                                                        <del>3.989.700&nbsp;₫</del>)
                                                                    </span>

                                                                </p>
                                                                <p class="pd03-product-card__price-main "
                                                                    data-pricetext="3.689.700&nbsp;₫">

                                                                    <span class="hidden">Tổng giá: </span>
                                                                    3.689.700&nbsp;₫

                                                                </p>

                                                                <div
                                                                    class="pd03-product-card__price-description no-data">



                                                                </div>

                                                            </div>
                                                            <div
                                                                class="pd03-product-card__seller for-horizontal no-data">

                                                            </div>

                                                            <!-- energy fiche horizontal -->
                                                            <div
                                                                class="pd03-product-card__fiche for-horizontal no-data">
                                                            </div>
                                                            <!-- stock status horizontal -->

                                                            <div class="pd03-product-card__stock  for-horizontal ">

                                                                <div class="pd03-product-card__stock-inner">

                                                                    <span class="pd03-product-card__stock-icons">
                                                                        <svg class="icon icon--in-stock"
                                                                            focusable="false" aria-hidden="true">
                                                                            <use xlink:href="#done-bold"
                                                                                href="#done-bold"></use>
                                                                        </svg>
                                                                        <svg class="icon icon--out-of-stock"
                                                                            focusable="false" aria-hidden="true">
                                                                            <use xlink:href="#delete-bold"
                                                                                href="#delete-bold"></use>
                                                                        </svg>
                                                                    </span>

                                                                    Có hàng
                                                                </div>

                                                            </div>

                                                            <!-- feature benefit -->

                                                            <div class="pd03-product-card__benefit  ">

                                                                <div class="pd03-product-card__benefit-wrap ">
                                                                    <ul class="pd03-product-card__benefit-list"
                                                                        role="list">

                                                                        <li class="pd03-product-card__benefit-item"
                                                                            role="listitem">
                                                                            <div
                                                                                class="pd03-product-card__benefit-icon">
                                                                                <svg class="icon" focusable="false">
                                                                                    <use xlink:href="#shopping-deal-regular"
                                                                                        href="#shopping-deal-regular">
                                                                                    </use>
                                                                                </svg>
                                                                            </div>
                                                                            <p class="pd03-product-card__benefit-text">
                                                                                - Mua kèm củ sạc 25W giá chỉ 189k
                                                                            </p>
                                                                        </li>

                                                                        <li class="pd03-product-card__benefit-item"
                                                                            role="listitem">
                                                                            <div
                                                                                class="pd03-product-card__benefit-icon">
                                                                                <svg class="icon" focusable="false">
                                                                                    <use xlink:href="#shipping-free-regular"
                                                                                        href="#shipping-free-regular">
                                                                                    </use>
                                                                                </svg>
                                                                            </div>
                                                                            <p class="pd03-product-card__benefit-text">
                                                                                Miễn Phí Vận Chuyển Toàn Quốc
                                                                            </p>
                                                                        </li>

                                                                        <li class="pd03-product-card__benefit-item"
                                                                            role="listitem">
                                                                            <div
                                                                                class="pd03-product-card__benefit-icon">
                                                                                <svg class="icon" focusable="false">
                                                                                    <use xlink:href="#return-order-regular"
                                                                                        href="#return-order-regular">
                                                                                    </use>
                                                                                </svg>
                                                                            </div>
                                                                            <p class="pd03-product-card__benefit-text">
                                                                                Đổi trả trong 14 ngày nếu phát sinh lỗi
                                                                                của nhà sản xuất
                                                                            </p>
                                                                        </li>

                                                                        <li class="pd03-product-card__benefit-item"
                                                                            role="listitem">
                                                                            <div
                                                                                class="pd03-product-card__benefit-icon">
                                                                                <svg class="icon" focusable="false">
                                                                                    <use xlink:href="#cracked-screen-trade-in"
                                                                                        href="#cracked-screen-trade-in">
                                                                                    </use>
                                                                                </svg>
                                                                            </div>
                                                                            <p class="pd03-product-card__benefit-text">
                                                                                Thu Cũ Đổi Mới Áp Dụng Cho Cả Thiết Bị
                                                                                Vỡ Màn Hình
                                                                            </p>
                                                                        </li>

                                                                    </ul>


                                                                    <div class="pd03-product-card__benefit-tooltip">
                                                                        <button type="button"
                                                                            class="pd03-product-card__benefit-more pd03-product-card__quickview_btn">
                                                                            <span>Xem thêm</span>
                                                                        </button>
                                                                        <!-- div class="pd03-product-card__benefit-tooltip-wrap" role="tooltip">
									<ul class="pd03-product-card__benefit-tooltip-list" role="list">
										<li class="pd03-product-card__benefit-tooltip-item" role="listitem">*- Mua kèm củ sạc 25W giá chỉ 189k</li><li class="pd03-product-card__benefit-tooltip-item" role="listitem">*- Thanh toán trước ưu đãi đến 8% tối đa 2 triệu</li><li class="pd03-product-card__benefit-tooltip-item" role="listitem">*- Liên hệ mục CHAT để nhận thêm ưu đãi</li><li class="pd03-product-card__benefit-tooltip-item" role="listitem">*Miễn Phí Vận Chuyển Toàn Quốc</li><li class="pd03-product-card__benefit-tooltip-item" role="listitem">*Đổi trả trong 14 ngày nếu phát sinh lỗi của nhà sản xuất</li><li class="pd03-product-card__benefit-tooltip-item" role="listitem">*Thu Cũ Đổi Mới Áp Dụng Cho Cả Thiết Bị Vỡ Màn Hình</li>
									</ul>
									<button type="button" class="pd03-product-card__benefit-tooltip-close">
										<span class="hidden">Close</span>
										<svg class="icon">
											<use xlink:href="#delete-bold" href="#delete-bold"></use>
										</svg>
									</button>
								</div -->
                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <!-- national flags and price campaign -->
                                                            <div class="pd03-product-card__nonshop-option no-data">
                                                            </div>
                                                            <!-- CTA area -->

                                                            <div class="pd03-product-card__label-cta-wrap">

                                                                <button
                                                                    class="cta cta--outlined cta--black js-pfv2-learn-more"
                                                                    href="/vn/smartphones/galaxy-a/galaxy-a05s-black-128gb-sm-a057fzkgxxv/"
                                                                    data-modelcode="SM-A057FZKGXXV"
                                                                    data-modelname="SM-A057F/DS"
                                                                    aria-label="Tìm hiểu thêm:Galaxy A05s"
                                                                    an-tr="pd03_product finder:option-product finder-product-link"
                                                                    an-ca="product click" an-ac="pf product card"
                                                                    an-la="learn more click">
                                                                    Tìm hiểu thêm
                                                                </button>

                                                                <button
                                                                    class="cta cta--contained cta--black js-pfv2-buy-now"
                                                                    href="/vn/smartphones/galaxy-a/galaxy-a05s-black-128gb-sm-a057fzkgxxv/buy/"
                                                                    data-link_info="/vn/smartphones/galaxy-a/galaxy-a05s-black-128gb-sm-a057fzkgxxv/buy/"
                                                                    data-config_info="" data-pimsubtype="galaxy a"
                                                                    data-pvitype="mobile" data-pvisubtype="smartphone"
                                                                    data-modelrevenue="3989700" data-modelqty="1"
                                                                    data-modelcurrency="VND"
                                                                    data-modelcode="SM-A057FZKGXXV"
                                                                    data-modelname="SM-A057F/DS"
                                                                    data-modeldisplay="Galaxy A05s"
                                                                    data-discountprice="3989700"
                                                                    an-tr="pd03_product finder:buy cta-product finder-cta-button"
                                                                    an-ca="buy cta" an-ac="buy now"
                                                                    an-la="pf product card:buy now">
                                                                    Mua ngay
                                                                </button>

                                                            </div>

                                                            <div class="pd03-product-card__icon-text-cta-wrap">
                                                                <input type="hidden" class="wtbStockStatusText"
                                                                    value="inStock">
                                                                <input type="hidden" class="useWtbStockFunction"
                                                                    value="N">


                                                                <button
                                                                    class="cta cta--label cta--black cta--icon cta--icon-leading cta--icon-compare js-pfv2-compare-cta "
                                                                    data-modelcode="SM-A057FZKGXXV"
                                                                    data-modelname="SM-A057F/DS"
                                                                    an-tr="pd03_product finder:where to buy compare-product finder-text-compare"
                                                                    an-ca="content click" an-ac="feature"
                                                                    an-la="pf product card:compare"
                                                                    data-displayname="Galaxy A05s"
                                                                    data-addedmodelcode=""
                                                                    data-categorysubtypecode="01010400"
                                                                    data-text-pressed="Comparing"
                                                                    data-img-src="//images.samsung.com/is/image/samsung/p6pim/vn/sm-a057fzkgxxv/gallery/vn-galaxy-a05s-sm-a057-sm-a057fzkgxxv-thumb-538358247?$252_252_PNG$"
                                                                    data-img-alt="front Black">
                                                                    So Sánh
                                                                    <svg class="icon" focusable="false"
                                                                        aria-hidden="true">
                                                                        <use xlink:href="#default-circle-regular"
                                                                            href="#default-circle-regular"></use>
                                                                    </svg>
                                                                </button>

                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/* // PD03 Product Card Component */-->
                                        </div>
                                    </div>
                                    <div class="pd03-product-finder__content-cta js-pfv2-cta-area" style="">
                                        <a class="cta cta--outlined cta--black cta--icon js-pfv2-view-more-cta"
                                            href="javascript:void(0)"
                                            an-tr="pd03_product finder:sort-product finder-text-button"
                                            an-ca="indication" an-ac="view more" an-la="view more">
                                            Xem thêm
                                            <svg class="icon" focusable="false">
                                                <use xlink:href="#open-down-regular" href="#open-down-regular"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <div class="pd03-product-finder__compare-bar pd03-product-finder__compare-bar--thumb">
                                <button type="button" class="pd03-product-finder__compare-bar-fold-cta"
                                    data-js-action="compareFoldToggle">
                                    <span class="hidden"
                                        data-global-text="{&quot;Expand&quot; : &quot;Click to Expand&quot;, &quot;Collapse&quot; : &quot;Click to Collapse&quot;}">Nhấp
                                        để thu gọn</span>
                                    <svg class="icon icon--opened" focusable="false" aria-hidden="true">
                                        <use xlink:href="#open-down-bold" href="#open-down-bold"></use>
                                    </svg>
                                    <svg class="icon icon--closed" focusable="false" aria-hidden="true">
                                        <use xlink:href="#close-up-bold" href="#close-up-bold"></use>
                                    </svg>
                                </button>
                                <div class="pd03-product-finder__compare-bar-wrap">
                                    <div class="pd03-product-finder__compare-bar-box" aria-live="polite">
                                        <div class="pd03-product-finder__compare-bar-item">
                                            <div class="pd03-product-finder__compare-bar-item-thumb">
                                                <div class="image">
                                                    <img class="image__main responsive-img" data-desktop-src=""
                                                        data-mobile-src="" alt="Alternative Text" role="img"
                                                        data-comp-name="image" style="display: none;">
                                                </div>
                                            </div>
                                            <div class="pd03-product-finder__compare-bar-item-info">
                                                <p class="pd03-product-finder__compare-bar-item-product-name"></p>
                                                <p class="pd03-product-finder__compare-bar-item-description"></p>
                                                <p class="pd03-product-finder__compare-bar-item-price-excluding-vat">
                                                    Price without VAT: <span></span></p>
                                                <p class="pd03-product-finder__compare-bar-item-price-special">Price
                                                    with discount: <span></span></p>
                                                <p class="pd03-product-finder__compare-bar-item-price-rrp">Price before:
                                                    <del></del>
                                                </p>
                                                <button type="button"
                                                    class="pd03-product-finder__compare-bar-item-close"
                                                    an-tr="pd03_product finder:compare-product finder-cta-action"
                                                    an-ca="content click" an-ac="feature"
                                                    an-la="pf product card:compare:delete"
                                                    onclick="javascript:window.sg.components.pd03ProductFinder.comparebarSlotClose('m1');">
                                                    <span class="hidden">Đóng</span>
                                                    <svg class="icon" focusable="false">
                                                        <use xlink:href="#cancel-close-regular"
                                                            href="#cancel-close-regular"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pd03-product-finder__compare-bar-item">
                                            <div class="pd03-product-finder__compare-bar-item-thumb">
                                                <div class="image">
                                                    <img class="image__main responsive-img" data-desktop-src=""
                                                        data-mobile-src="" alt="Alternative Text" role="img"
                                                        data-comp-name="image" style="display: none;">
                                                </div>
                                            </div>
                                            <div class="pd03-product-finder__compare-bar-item-info">
                                                <p class="pd03-product-finder__compare-bar-item-product-name"></p>
                                                <p class="pd03-product-finder__compare-bar-item-description"></p>
                                                <p class="pd03-product-finder__compare-bar-item-price-excluding-vat">
                                                    Price without VAT: <span></span></p>
                                                <p class="pd03-product-finder__compare-bar-item-price-special">Price
                                                    with discount: <span></span></p>
                                                <p class="pd03-product-finder__compare-bar-item-price-rrp">Price before:
                                                    <del></del>
                                                </p>
                                                <button type="button"
                                                    class="pd03-product-finder__compare-bar-item-close"
                                                    an-tr="pd03_product finder:compare-product finder-cta-action"
                                                    an-ca="content click" an-ac="feature"
                                                    an-la="pf product card:compare:delete"
                                                    onclick="javascript:window.sg.components.pd03ProductFinder.comparebarSlotClose('m1');">
                                                    <span class="hidden">Đóng</span>
                                                    <svg class="icon" focusable="false">
                                                        <use xlink:href="#cancel-close-regular"
                                                            href="#cancel-close-regular"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="pd03-product-finder__compare-bar-item-another">
                                                <svg class="icon pd03-product-finder__compare-bar-item-another-icon"
                                                    focusable="false" aria-hidden="true">
                                                    <use xlink:href="#plus-bold" href="#plus-bold"></use>
                                                </svg>
                                                <p class="pd03-product-finder__compare-bar-item-another-text">Thêm sản
                                                    phẩm khác từ danh sách</p>
                                            </div>
                                        </div>
                                        <div class="pd03-product-finder__compare-bar-item">
                                            <div class="pd03-product-finder__compare-bar-item-thumb">
                                                <div class="image">
                                                    <img class="image__main responsive-img" data-desktop-src=""
                                                        data-mobile-src="" alt="Alternative Text" role="img"
                                                        data-comp-name="image" style="display: none;">
                                                </div>
                                            </div>
                                            <div class="pd03-product-finder__compare-bar-item-info">
                                                <p class="pd03-product-finder__compare-bar-item-product-name"></p>
                                                <p class="pd03-product-finder__compare-bar-item-description"></p>
                                                <p class="pd03-product-finder__compare-bar-item-price-excluding-vat">
                                                    Price without VAT: <span></span></p>
                                                <p class="pd03-product-finder__compare-bar-item-price-special">Price
                                                    with discount: <span></span></p>
                                                <p class="pd03-product-finder__compare-bar-item-price-rrp">Price before:
                                                    <del></del>
                                                </p>
                                                <button type="button"
                                                    class="pd03-product-finder__compare-bar-item-close"
                                                    an-tr="pd03_product finder:compare-product finder-cta-action"
                                                    an-ca="content click" an-ac="feature"
                                                    an-la="pf product card:compare:delete"
                                                    onclick="javascript:window.sg.components.pd03ProductFinder.comparebarSlotClose('m1');">
                                                    <span class="hidden">Đóng</span>
                                                    <svg class="icon" focusable="false">
                                                        <use xlink:href="#cancel-close-regular"
                                                            href="#cancel-close-regular"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="pd03-product-finder__compare-bar-item-another">
                                                <svg class="icon pd03-product-finder__compare-bar-item-another-icon"
                                                    focusable="false" aria-hidden="true">
                                                    <use xlink:href="#plus-bold" href="#plus-bold"></use>
                                                </svg>
                                                <p class="pd03-product-finder__compare-bar-item-another-text">Thêm sản
                                                    phẩm khác từ danh sách</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pd03-product-finder__compare-bar-cta">
                                        <button
                                            class="cta cta--underline cta--black cta--clear js-pfv2-compare-clear-cta"
                                            an-tr="pd03_product finder:compare-product finder-cta-action"
                                            an-ca="content click" an-ac="feature" an-la="pf product card:compare:reset">
                                            Xóa tất cả </button>
                                        <button
                                            class="cta cta--contained cta--black cta--disabled cta--compare js-pfv2-open-compare-layer"
                                            an-tr="pd03_product finder:compare-product finder-cta-action"
                                            an-ca="content click" an-ac="feature"
                                            an-la="pf product card:compare:view result"> So Sánh (<span
                                                class="current-cnt">0</span>/<span class="max-cnt">3</span>) </button>
                                    </div>
                                </div>



                                <div class="pd03-product-finder__snack-bar">
                                    <p class="pd03-product-finder__snack-bar-text">Loại sản phẩm có một không hai</p>


                                    <button class="cta cta--underline cta--white">
                                        Đóng
                                    </button>
                                </div>
                            </div>




                            <div style="display: none;">
                                <div id="pf-promotion_card_1">
                                    <div
                                        class="pd03-product-finder__content-item pd03-product-finder__content-item-view">



















                                        <section class="pd03-promotion-card pd03-promotion-card--horizontal  
						text-color--black desktop-text-position--left mobile-text-position--bottom">
                                            <input type="hidden" id="position">
                                            <div class="pd03-promotion-card__image">

                                                <div class="image">
                                                    <img class="image__preview lazy-load responsive-img"
                                                        data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/smartphones/PF_AI-Family_Promotion-card_1038x344_pc.jpg?$ORIGIN_JPG$"
                                                        data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/smartphones/PF_AI-Family_Promotion-card_660x1108_mo.jpg?$LazyLoad_Home_JPG$"
                                                        data-comp-name="image" alt=""
                                                        data-src="//images.samsung.com/is/image/samsung/assets/vn/smartphones/PF_AI-Family_Promotion-card_1038x344_pc.jpg?$ORIGIN_JPG$">

                                                    <img class="image__main lazy-load responsive-img"
                                                        data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/smartphones/PF_AI-Family_Promotion-card_1038x344_pc.jpg?$ORIGIN_JPG$"
                                                        data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/smartphones/PF_AI-Family_Promotion-card_660x1108_mo.jpg?$660_N_JPG$"
                                                        data-comp-name="image" alt=""
                                                        data-src="//images.samsung.com/is/image/samsung/assets/vn/smartphones/PF_AI-Family_Promotion-card_1038x344_pc.jpg?$ORIGIN_JPG$">

                                                </div>
                                            </div>
                                            <div class="pd03-promotion-card__content">
                                                <div class="pd03-promotion-card__text">
                                                    <h2 class="pd03-promotion-card__sub-headline">
                                                        Galaxy AI is here
                                                    </h2>
                                                    <div class="pd03-promotion-card__description">

                                                    </div>
                                                </div>
                                                <div class="pd03-promotion-card__cta">

                                                    <a class="cta cta--contained cta--black" href="/vn/galaxy-ai/"
                                                        title="Tìm hiểu thêm về Galaxy AI"
                                                        an-tr="pd03_product finder:content card-product finder-cta-button"
                                                        an-ca="content click" an-ac="feature"
                                                        an-la="content card:galaxy ai is here:learn more">Tìm hiểu
                                                        thêm</a>




                                                </div>
                                            </div>
                                        </section>
                                        <!-- 					/* // Promotion Card Component */ -->
                                    </div>
                                </div>

                                <div id="pf-promotion_card_2">
                                    <div
                                        class="pd03-product-finder__content-item pd03-product-finder__content-item-view">



















                                        <section class="pd03-promotion-card pd03-promotion-card--horizontal  
						text-color--black desktop-text-position--left mobile-text-position--bottom">
                                            <input type="hidden" id="position">
                                            <div class="pd03-promotion-card__image">

                                                <div class="image">
                                                    <img class="image__preview lazy-load responsive-img"
                                                        data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/smartphones/PF_E3_Online_Promotion-card_1038x344_pc.jpg?$ORIGIN_JPG$"
                                                        data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/smartphones/revised_PF_E3_Online_Promotion-card_660x1108_mo.jpg?$LazyLoad_Home_JPG$"
                                                        data-comp-name="image" alt=""
                                                        data-src="//images.samsung.com/is/image/samsung/assets/vn/smartphones/PF_E3_Online_Promotion-card_1038x344_pc.jpg?$ORIGIN_JPG$">

                                                    <img class="image__main lazy-load responsive-img"
                                                        data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/smartphones/PF_E3_Online_Promotion-card_1038x344_pc.jpg?$ORIGIN_JPG$"
                                                        data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/smartphones/revised_PF_E3_Online_Promotion-card_660x1108_mo.jpg?$660_N_JPG$"
                                                        data-comp-name="image" alt=""
                                                        data-src="//images.samsung.com/is/image/samsung/assets/vn/smartphones/PF_E3_Online_Promotion-card_1038x344_pc.jpg?$ORIGIN_JPG$">

                                                </div>
                                            </div>
                                            <div class="pd03-promotion-card__content">
                                                <div class="pd03-promotion-card__text">
                                                    <h2 class="pd03-promotion-card__sub-headline">
                                                        Galaxy S24 Ultra
                                                    </h2>
                                                    <div class="pd03-promotion-card__description">
                                                        Màu độc quyền tại Samsung.com
                                                    </div>
                                                </div>
                                                <div class="pd03-promotion-card__cta">

                                                    <a class="cta cta--contained cta--black"
                                                        href="/vn/smartphones/galaxy-s24-ultra/buy/"
                                                        title="Mua ngay Galaxy S24 Ultra ngay"
                                                        an-tr="pd03_product finder:content card-product finder-cta-button"
                                                        an-ca="content click" an-ac="feature"
                                                        an-la="content card:galaxy s24 ultra:buy now">Mua ngay</a>




                                                </div>
                                            </div>
                                        </section>
                                        <!-- 					/* // Promotion Card Component */ -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>



                    <!-- <div class="pd03-product-finder__quick-view-popup" role="dialog" aria-modal="true">
	</div> -->
                    <div class="pd03-product-finder__quick-view-popup " role="dialog" aria-modal="true">
                        <div class="layer-popup">
                            <div class="layer-popup__inner">
                                <div class="layer-popup__contents scrollbar">
                                    <div class="scrollbar__wrap">
                                        <div class="scrollbar__contents">
                                            <div class="quick-view__contents"></div>
                                        </div>
                                    </div>

                                    <div class="scrollbar-horizontal__track" style="display: none;">
                                        <div class="scrollbar-horizontal__track-content">
                                            <div class="scrollbar-horizontal__bar"></div>
                                        </div>
                                    </div>
                                    <div class="scrollbar-vertical__track" style="display: none;">
                                        <div class="scrollbar-vertical__track-content">
                                            <div class="scrollbar-vertical__bar"></div>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="layer-popup__close">
                                    <span class="hidden">Layer Popup Close</span>
                                    <svg class="icon" focusable="false" aria-hidden="true">
                                        <use xlink:href="#cancel-close-regular" href="#cancel-close-regular"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="cm-g-text-editor aem-GridColumn aem-GridColumn--default--12">







                    <!-- [Dialog] Page Type: Common -->

                    <div class="text-editor    bg-light-gray">
                        <div class="text-editor__inner-wrap padding-top--0 padding-bottom--0">
                            <div
                                class="text-editor__inner  desktop-padding-left-right--large mobile-padding-left-right--small  ">

                                <div class="text-editor__column-wrap">

                                    <div class="text-editor__column description-text-size--small">
                                        <p>*Hình ảnh mang tính chất minh họa. Các sản phẩm được bán riêng lẻ. Màu sắc
                                            tùy thuộc vào quốc gia và nhà bán lẻ. Tab S9 FE không hỗ trợ các tính năng
                                            AI.</p>
                                        <p>*Tính năng AI có sẵn sẽ tùy thuộc từng thiết bị. Cần phải đăng nhập tài khoản
                                            Samsung để sử dụng một số tính năng AI nhất định. Samsung không đưa ra bất
                                            kỳ lời hứa, đảm bảo hoặc cam kết nào về độ chính xác, đầy đủ, hoặc độ tin
                                            cậy của đầu ra do các tính năng AI cung cấp.&nbsp;</p>
                                        <p>*Tính năng AI có sẵn sẽ tùy thuộc từng thiết bị. Cần phải đăng nhập tài khoản
                                            Samsung để sử dụng một số tính năng AI nhất định. Samsung không đưa ra bất
                                            kỳ lời hứa, đảm bảo hoặc cam kết nào về độ chính xác, đầy đủ, hoặc độ tin
                                            cậy của đầu ra do các tính năng AI cung cấp.&nbsp;</p>
                                        <p>* Màu sắc và kiểu máy có sẵn có thể thay đổi tùy theo quốc gia hoặc nhà mạng.
                                        </p>
                                        <p>*&nbsp;Dựa trên thông số kỹ thuật của Galaxy S21 Ultra 5G. Có thể không áp
                                            dụng cho tất cả các model.</p>
                                        <p>* Hình ảnh được mô phỏng. Màu sắc có thể thay đổi tùy thuộc vào quốc gia hoặc
                                            nhà cung cấp. Galaxy A52 được xếp hạng IP67. Dựa trên các điều kiện thử
                                            nghiệm ngâm trong nước ở độ sâu lên đến 1 mét trong tối đa 30 phút. Không
                                            nên sử dụng ở bãi biển, bể bơi và trong nước xà phòng. Trong trường hợp làm
                                            đổ chất lỏng có đường vào điện thoại, vui lòng xả thiết bị bằng nước sạch,
                                            tránh tình trạng đọng nước khi ấn vào các phím. Chỉ an toàn đối với áp lực
                                            nước thấp. Áp lực nước cao như dòng nước chảy hoặc vòi hoa sen có thể làm
                                            hỏng thiết bị.</p>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- [Dialog] Page Type: Support Help, Use Box: off -->


                    <!-- [Dialog] Page Type: Support Help, Use Box: on, Use Box가 on이면 Component-theme 사용하지 않음 -->


                </div>
                <div class="nv-g-breadcrumb aem-GridColumn aem-GridColumn--default--12">












                    <div class="text-editor bg-light-gray" id="disclaimer">
                        <div class="text-editor__inner-wrap padding-top--24 padding-bottom--24">
                            <div
                                class="text-editor__inner desktop-padding-left-right--large mobile-padding-left-right--small">

                                <div class="text-editor__column-wrap">
                                    <div class="text-editor__column description-text-size--small" role="list">
                                        <p role="listitem">* Pin : Thời lượng pin thực tế thay đổi tùy thuộc vào môi
                                            trường mạng, các tính năng và ứng dụng được dùng, tần suất cuộc gọi và tin
                                            nhắn, số lần sạc và nhiều yếu tố khác.</p>
                                        <p role="listitem">* Bộ nhớ người dùng khả dụng : Bộ nhớ người dùng nhỏ hơn tổng
                                            bộ nhớ do bộ nhớ của hệ điều hành và phần mềm được sử dụng để chạy các tính
                                            năng của thiết bị. Bộ nhớ người dùng thực tế thay đổi tùy thuộc vào nhà mạng
                                            và có thể thay đổi sau khi thực hiện nâng cấp phần mềm.</p>
                                        <p role="listitem">* Mạng : Các băng thông mà thiết bị hỗ trợ có thể thay đổi
                                            tùy thuộc vào khu vực hoặc nhà cung cấp dịch vụ.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <nav class="breadcrumb" aria-label="Breadcrumb">
                        <div class="breadcrumb__inner">
                            <ul class="breadcrumb__path">



                                <li>

                                    <a aria-label="Home" an-tr="nv03_breadcrumb-product finder-text-breadcrumb"
                                        an-ca="navigation" an-ac="breadcrumb" an-la="breadcrumb:home" href="/vn/">
                                        <span class="breadcrumb__text-desktop">Home</span>
                                        <span class="breadcrumb__text-mobile">Home</span>
                                    </a>


                                    <svg class="icon" focusable="false" aria-hidden="true">
                                        <use xlink:href="#next-bold" href="#next-bold"></use>
                                    </svg>
                                </li>





                                <li>

                                    <a aria-label="Di Động" an-tr="nv03_breadcrumb-product finder-text-breadcrumb"
                                        an-ca="navigation" an-ac="breadcrumb" an-la="breadcrumb:mobile"
                                        href="/vn/mobile/">
                                        <span class="breadcrumb__text-desktop">Di Động</span>
                                        <span class="breadcrumb__text-mobile">Di Động</span>
                                    </a>


                                    <svg class="icon" focusable="false" aria-hidden="true">
                                        <use xlink:href="#next-bold" href="#next-bold"></use>
                                    </svg>
                                </li>





                                <li>

                                    <a aria-label="Điện Thoại Thông Minh"
                                        an-tr="nv03_breadcrumb-product finder-text-breadcrumb" an-ca="navigation"
                                        an-ac="breadcrumb" an-la="breadcrumb:smartphones" href="/vn/smartphones/">
                                        <span class="breadcrumb__text-desktop">Điện Thoại Thông Minh</span>
                                        <span class="breadcrumb__text-mobile">Điện Thoại Thông Minh</span>
                                    </a>


                                    <svg class="icon" focusable="false" aria-hidden="true">
                                        <use xlink:href="#next-bold" href="#next-bold"></use>
                                    </svg>
                                </li>




                                <li>
                                    <strong class="breadcrumb__text-desktop" aria-current="page">Tất cả điện thoại thông
                                        minh</strong>
                                    <strong class="breadcrumb__text-mobile" aria-current="page">Tất cả điện thoại thông
                                        minh</strong>
                                </li>


                            </ul>
                        </div>

                        <script type="application/ld+json" data-type="seo" data-object-type="BreadcrumbList"
                            data-id="6b30f07c-c6b8-4091-ae5b-29e3dcf3243d">{"@context":"http://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","name":"Home","item":"https://www.samsung.com/vn/","position":1},{"@type":"ListItem","name":"Di Động","item":"https://www.samsung.com/vn/mobile/","position":2},{"@type":"ListItem","name":"Điện Thoại Thông Minh","item":"https://www.samsung.com/vn/smartphones/","position":3},{"@type":"ListItem","name":"Tất cả điện thoại thông minh","item":"","position":4}]}</script>

                    </nav>
                </div>


            </div>
        </div>


    </div>
</div>

@endsection