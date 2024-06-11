@extends('layouts.master')
@section('content')
<div class="EPP-CO02_TBC-1 cm-g-text-block-container">
            <section class="text-block-container text-color--black " style="background: #FFFFFF">
                <div class="text-block-container__title-wrap">
                    <div class="text-block-container__headline-wrap">
                        <h2 class="text-block-container__headline">Mua theo loại sản phẩm</h2>
                    </div>
                </div>
            </section>
        </div>
        <section class="category-slider bg-white small-card py-4">
            <div class="container">
                <div class="row">
                    <div class="swiper category-slide">
                        <div class="swiper-wrapper">
                            @foreach ($catalogues as $cat)
                                <div class="swiper-slide">
                                    <a href="{{route('product.catalogue', ['alias' => $cat->slug])}}">
                                        <div class="thumb">
                                            <img src="{{$cat->image->url??''}}"
                                                alt="">
                                        </div>
                                        <span
                                            class="category-slider__card-title text-color--black fw-bold w-100 d-block text-center">{{$cat->name}}</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-4">
            <div class="container">
                <div class="row">
                    <div class="swiper home-slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="http://images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd01image-542124807"
                                    alt="slide">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd01image-542124780?imwidth=1366"
                                    alt="slide">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd01image-542262873?imwidth=1366"
                                    alt="slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
            .home-slide img {
                height: 100%;
                object-fit: cover;
            }
            .swiper-slide img
            {
                max-width: 100%;
            }
        </style>

@endsection