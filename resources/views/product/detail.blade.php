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


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

	<div class="pd-g-product-promotion-bar aem-GridColumn aem-GridColumn--default--12">

	</div>
	<div class="pd-g-usp-banner aem-GridColumn aem-GridColumn--default--12">



	</div>
	<div class="pd-g-header-navigation aem-GridColumn aem-GridColumn--default--12">
		<div class="us-epp-discount-keep" style="display: none;"></div>




		<div class="pd-header-navigation-keep">
			<div class="pd-header-navigation bg-black" id="anchorContainer" style="">
				<!-- /* mobile - menu toggle : pd-header-navigation__menu--open/pd-header-navigation__menu--close */-->
				<div class="pd-header-navigation__header pd-header-navigation__menu--close">
					<h1 class="pd-header-navigation__headline">
						<strong class="pd-header-navigation__headline-text">{{$product->title}}</strong>
					</h1>

					<div class="pd-header-navigation__menu-wrap">
						<button type="button" aria-label="prev"
							class="pd-header-navigation__btn pd-header-navigation__btn-prev">
							<svg class="icon" focusable="false">
								<use xlink:href="#previous-regular" href="#previous-regular"></use>
							</svg>
						</button>
						<div class="pd-header-navigation__menu-inner">

							<input type="hidden" name="featureAnchorListYn" id="featureAnchorListYn" value="N">


							<ul class="pd-header-navigation__menu">




								<li id="anchor_pd-g-feature-benefit" class="pd-header-navigation__menu-item" style="">
									<a href="#benefit" an-tr="pdd01_anchor nav-product detail-text-menu"
										an-ca="navigation" an-ac="secondary navi" an-la="secondary navi:features"
										aria-label="Tính Năng">Tính Năng<svg class="icon">
											<use xlink:href="#done-bold" href="#done-bold"></use>
										</svg></a>
								</li>
								<li id="anchor_pd-g-feature-gallery-carousel-pim"
									class="pd-header-navigation__menu-item" style="display: none; margin-left: 0px;">
									<a href="#gallery" an-tr="pdd01_anchor nav-product detail-text-menu"
										an-ca="navigation" an-ac="secondary navi" an-la="secondary navi:gallery"
										aria-label="Hình Ảnh">Hình Ảnh<svg class="icon">
											<use xlink:href="#done-bold" href="#done-bold"></use>
										</svg></a>
								</li>






								<li id="anchor_pd-g-product-specs" class="pd-header-navigation__menu-item" style="">
									<a href="#specs" an-tr="pdd01_anchor nav-product detail-text-menu"
										an-ca="navigation" an-ac="secondary navi" an-la="secondary navi:spec"
										aria-label="Thông Số Kỹ Thuật">Thông Số Kỹ Thuật<svg class="icon">
											<use xlink:href="#done-bold" href="#done-bold"></use>
										</svg></a>
								</li>


								<li id="reviewWrap" class="pd-header-navigation__menu-item">
									<a href="#reviews" an-tr="pdd01_anchor nav-product detail-text-menu"
										an-ca="navigation" an-ac="secondary navi" an-la="secondary navi:review"
										aria-label="Đánh giá">Đánh giá<svg class="icon">
											<use xlink:href="#done-bold" href="#done-bold"></use>
										</svg></a>
								</li>
								<li id="anchor_pd-g-product-support" class="pd-header-navigation__menu-item" style="">
									<a href="#support" an-tr="pdd01_anchor nav-product detail-text-menu"
										an-ca="navigation" an-ac="secondary navi" an-la="secondary navi:support"
										aria-label="Hỗ Trợ">Hỗ Trợ<svg class="icon">
											<use xlink:href="#done-bold" href="#done-bold"></use>
										</svg></a>
								</li>
								<li id="anchor_pd-g-product-compare" class="pd-header-navigation__menu-item">
									<a href="#compare" an-tr="pdd01_anchor nav-product detail-text-menu"
										an-ca="navigation" an-ac="secondary navi" an-la="secondary navi:compare"
										aria-label="So Sánh">So Sánh<svg class="icon">
											<use xlink:href="#done-bold" href="#done-bold"></use>
										</svg></a>
								</li>
								<!-- /* feature pd anchor-nav 에서만 사용 */-->
								<li class="pd-header-navigation__menu-item" id="anchorWtb"
									style="display: none; margin-left: 0px;">

									<a href="javascript:;" class="js-cta-buy" data-modelcode="SM-M156BDBUXXV"
										data-iacode="01010500" an-tr="pdd01_anchor nav-product detail-text-where to buy"
										an-ca="buy cta" an-ac="where to buy" an-la="where to buy"
										aria-label="Mua ở đâu">Mua ở đâu<svg class="icon">
											<use xlink:href="#done-bold" href="#done-bold"></use>
										</svg>
									</a>


								</li>


							</ul>
							<div class="pd-header-navigation__menu-bar"
								style="left: 280.031px; width: 54px; display: none;"></div>
						</div>
						<button type="button" aria-label="next"
							class="pd-header-navigation__btn pd-header-navigation__btn-next">
							<svg class="icon" focusable="false">
								<use xlink:href="#next-regular" href="#next-regular"></use>
							</svg>
						</button>
						<div class="pd-header-navigation__menu-epromoter-cta">
							<button class="cta cta--label cta--icon cta--icon-leading" an-ca="content click"
								an-ac="feature" an-la="floating chat:chat with an expert">
								Trò chuyện với chuyên gia
								<svg class="icon" focusable="false" aria-hidden="true">
									<use xlink:href="#message-regular" href="#message-regular"></use>
								</svg>
							</button>
						</div>
					</div>
				</div>
				<div class="pd-buying-price">
					<div class="pd-buying-price__wrap">
						<div class="pd-buying-price__new-price" data-promotionprice="{{$product->price}}">
							{{number_format($product->price)}}₫</div>
					</div>
					<!-- /* desktop - add to cart button */-->

					<div class="pd-buying-price__cta"><a class="cta cta--contained cta--emphasis anchorBtn" href="#"
							style="" data-pimsubtype="galaxy m" data-pvitype="mobile" data-pvisubtype="smartphone"
							data-modelrevenue="4690400" data-modelprice="4690400" data-modelqty="1"
							data-modelcurrency="vnd" data-modelcode="SM-M156BDBUXXV" data-modelname="SM-M156B/DSN"
							data-modeldisplay="Galaxy M15 5G" data-discountprice=""
							an-tr="pdd01_anchor nav-product detail-cta-buy page" an-ca="buy cta" an-ac="buy now"
							an-la="buy now">MUA NGAY</a></div>


				</div>
			</div>
			<div class="pd-header-navigation__dummy">
				<div class="pd-header-navigation__dummy-headline"></div>

				<div class="pd-header-navigation__dummy-menu"></div>
			</div>
		</div>

	</div>
	<div class="container">
		<div class="row">
			{!!$product->content!!}
		</div>
	</div>
</div>


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