<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="keywords" content="Digital marketing agency, Digital marketing company, Digital marketing services, sass, software company">
		<meta name="description" content="vCamp Creative Personal Service HTML Template designed for personal service.">
      	<meta property="og:site_name" content="vCamp">
      	<meta property="og:url" content="https://heloshape.com/">
      	<meta property="og:type" content="website">
      	<meta property="og:title" content="vCamp-Creative Agency & Portfolio HTML5 Template">
		<meta name='og:image' content='images/assets/ogg.png'>
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#202020">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#202020">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#202020">
		<title>vCamp-Creative Agency & Portfolio Laravel Template</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="{{ URL::asset('images/fav-icon/icon.png') }}">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}" media="all">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/responsive.css') }}" media="all">

		<!-- Fix Internet Explorer ______________________________________-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="{{ URL::asset('vendor/html5shiv.js') }}"></script>
			<script src="{{ URL::asset('vendor/respond.js') }}"></script>
		<![endif]-->	
	</head>

	<body>
		<div class="main-page-wrapper">
			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<section>
				<div id="preloader">
					<div id="ctn-preloader" class="ctn-preloader">
						<div class="animation-preloader">
							<div class="icon"><img src="{{ URL::asset('images/logo/vCamp.svg') }}" alt="" class="m-auto d-block"> <span></span></div>
							<div class="txt-loading mt-4">
								<span data-text-preloader="C" class="letters-loading">
									C
								</span>
								<span data-text-preloader="A" class="letters-loading">
									A
								</span>
								<span data-text-preloader="M" class="letters-loading">
									M
								</span>
								<span data-text-preloader="P" class="letters-loading">
									P
								</span>
							</div>
						</div>	
					</div>
				</div>
			</section>

		


			<!-- 
			=============================================
				Theme Main Menu
			============================================== 
			-->
			<header class="theme-main-menu sticky-menu theme-menu-one">
				<div class="inner-content">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo"><a href="{{ url('home.index') }}"><img src="{{ URL::asset('images/logo/vCamp_13.png') }}" alt="" width="37"></a></div>
						
						<div class="right-widget d-flex align-items-center">
							<button class="contact-fancy-btn" data-bs-toggle="modal" data-bs-target="#contactModal">
							  <em>Contact</em> <span>Me</span> <i class="bi bi-arrow-up-right"></i>
							</button>
						</div> <!-- /.right-widget -->
					</div>
				</div> <!-- /.inner-content -->
			</header> <!-- /.theme-main-menu -->


			
			<!-- 
			=============================================
				Theme Hero Banner
			============================================== 
			-->
			<div class="hero-banner-twelve box-layout mt-150 sm-mt-100">
				<div class="banner-intro position-relative">
					<div class="scroll-bar"></div>
					<div class="social-elemnet">
						<ul class="style-none d-flex align-items-center">
							<li><a href="#" class="tran3s">Fb.</a></li>
							<li><a href="#" class="tran3s">Tw.</a></li>
							<li><a href="#" class="tran3s">Inst.</a></li>
						</ul>
					</div>
					<div class="container">
						<div class="row align-items-end justify-content-between">
							<div class="col-xl-9 col-lg-7 col-md-8">
								<div class="text-wrapper pt-70 md-pt-40 position-relative">
									<h1 class="hero-heading font-recoleta mb-55 lg-mb-30">Building digital products, brands & expereince</h1>
									<div class="ct-text">Contact me for hire </div>
									<div class="mt-5 mb-80 lg-mb-40"><a href="mailto:hey@vcampdesign.com" class="mail-info tran3s">hey@vcampdesign.com</a></div>
									<a href="#" class="theme-btn-fourteen"><i class="bi bi-arrow-up-right"></i></a>
									<div class="avatar-holder d-none d-md-block"><img src="{{ URL::asset('images/media/img_121.png') }}" alt=""></div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-5 col-md-4">
								<div class="d-flex flex-column align-items-lg-end">
									<img src="{{ URL::asset('images/assets/sticker_03.png') }}" alt="" class="brand-logo d-none d-md-block">
									<div class="feature-project mt-130 lg-mt-60">
										<div class="ft-tag">Featured project</div>
										<h6 class="ft-title"><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}">Cloud App Design.</a></h6>
										<img src="{{ URL::asset('images/logo/logo-24.png') }}" alt="" class="logo">
										<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="exp-btn">Explore</a>
									</div> <!-- /.feature-project -->
								</div>
							</div>
						</div>
					</div>
				</div> <!-- /.banner-intro -->
			</div> <!-- /.hero-banner-twelve -->

			


			<!--
			=====================================================
				Counter Section One
			=====================================================
			-->
			<div class="counter-section-one mt-170 md-mt-80">
				<div class="container border-bottom pb-30">
					<div class="row">
						<div class="col-lg-3 col-sm-6">
							<div class="counter-block-one text-center mb-45">
								<img src="{{ URL::asset('images/shape/shape_65.svg') }}" alt="" class="m-auto">
								<div class="main-count text-lg fw-light pt-10 font-recoleta"><span class="counter">3.5</span>k</div>
								<p class="theme-mb-0">Job done successfully</p>
							</div> <!-- /.counter-block-one -->
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="counter-block-one text-center mb-45">
								<img src="{{ URL::asset('images/shape/shape_65.svg') }}" alt="" class="m-auto">
								<div class="main-count text-lg fw-light pt-10 font-recoleta"><span class="counter">12</span></div>
								<p class="theme-mb-0">Award winner</p>
							</div> <!-- /.counter-block-one -->
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="counter-block-one text-center mb-45">
								<img src="{{ URL::asset('images/shape/shape_65.svg') }}" alt="" class="m-auto">
								<div class="main-count text-lg fw-light pt-10 font-recoleta"><span class="counter">10</span>+</div>
								<p class="theme-mb-0">Years Experience</p>
							</div> <!-- /.counter-block-one -->
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="counter-block-one text-center mb-45">
								<img src="{{ URL::asset('images/shape/shape_65.svg') }}" alt="" class="m-auto">
								<div class="main-count text-lg fw-light pt-10 font-recoleta"><span class="counter">1.2</span>k+</div>
								<p class="theme-mb-0">Worldwide Client</p>
							</div> <!-- /.counter-block-one -->
						</div>
					</div>
				</div>
			</div>
			


			<!--
			=====================================================
				Portfolio Gallery Three
			=====================================================
			-->
			<div class="portfolio-gallery-three pt-140 pb-150 lg-pt-120 lg-pb-120">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-xl-5 col-lg-4 col-md-6 col-sm-8">
							<div class="title-style-twelve text-center text-sm-start xs-mb-40">
								<h2 class="title">The Work I did for <span>client</span></h2>
							</div> <!-- /.title-style-twelve -->
						</div>
						<div class="col-md-5 col-sm-4 d-flex justify-content-center justify-content-sm-end">
							<a href="#" class="theme-btn-fifteen d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_106.svg') }}" alt=""></a>
						</div>
					</div>
					<ul class="style-none text-center d-lg-flex justify-content-between isotop-menu-wrapper control-nav-seven pt-90 pb-75 lg-pb-50 xs-pt-50">
						<li class="is-checked" data-filter="*">All</li>
						<li data-filter=".dev">Mobile</li>
						<li data-filter=".plugin">Webdesign</li>
						<li data-filter=".branding">Tyography</li>
						<li data-filter=".custom">Branding</li>
						<li data-filter=".print">Print</li>
						<li data-filter=".anim">Animation</li>
					</ul>

					<div id="isotop-gallery-wrapper" class="border-bottom pb-80 lg-pb-30">
						<div class="grid-sizer"></div>
						<div class="isotop-item plugin custom">
							<div class="gallery-item mb-60 lg-mb-50">
								<div class="img-holder">
									<img src="{{ URL::asset('images/gallery/img_20.jpg') }}" alt="" class="img-meta w-100 tran5s">
									<a class="fancybox expend d-flex align-items-center justify-content-center tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_20.jpg" tabindex="0"><i class="bi bi-plus"></i></a>
								</div>
								<div class="caption pe-xl-3 pt-30 lg-pt-20">
									<div class="d-flex align-items-center justify-content-between">
										<div>
											<span class="tag">PRINT</span>
											<h6><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="pj-title">Anaylsis Application.</a></h6>
										</div>
										<div>
											<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
										</div>
									</div>
								</div> <!-- /.caption -->
							</div> <!-- /.gallery-item -->
						</div> <!-- /.isotop-item -->
						<div class="isotop-item dev branding">
							<div class="gallery-item mb-60 lg-mb-50">
								<div class="img-holder">
									<img src="{{ URL::asset('images/gallery/img_21.jpg') }}" alt="" class="img-meta w-100 tran5s">
									<a class="fancybox expend d-flex align-items-center justify-content-center tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_21.jpg" tabindex="0"><i class="bi bi-plus"></i></a>
								</div>
								<div class="caption pe-xl-3 pt-30 lg-pt-20">
									<div class="d-flex align-items-center justify-content-between">
										<div>
											<span class="tag">MOBILE</span>
											<h6><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="pj-title">Weather App.</a></h6>
										</div>
										<div>
											<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
										</div>
									</div>
								</div> <!-- /.caption -->
							</div> <!-- /.gallery-item -->
						</div> <!-- /.isotop-item -->
						<div class="isotop-item plugin print">
							<div class="gallery-item mb-60 lg-mb-50">
								<div class="img-holder">
									<img src="{{ URL::asset('images/gallery/img_22.jpg') }}" alt="" class="img-meta w-100 tran5s">
									<a class="fancybox expend d-flex align-items-center justify-content-center tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_22.jpg" tabindex="0"><i class="bi bi-plus"></i></a>
								</div>
								<div class="caption pe-xl-3 pt-30 lg-pt-20">
									<div class="d-flex align-items-center justify-content-between">
										<div>
											<span class="tag">BRANDING</span>
											<h6><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="pj-title">e-Commerce App.</a></h6>
										</div>
										<div>
											<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
										</div>
									</div>
								</div> <!-- /.caption -->
							</div> <!-- /.gallery-item -->
						</div> <!-- /.isotop-item -->
						<div class="isotop-item dev custom anim">
							<div class="gallery-item mb-60 lg-mb-50">
								<div class="img-holder">
									<img src="{{ URL::asset('images/gallery/img_23.jpg') }}" alt="" class="img-meta w-100 tran5s">
									<a class="fancybox expend d-flex align-items-center justify-content-center tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_23.jpg" tabindex="0"><i class="bi bi-plus"></i></a>
								</div>
								<div class="caption pe-xl-3 pt-30 lg-pt-20">
									<div class="d-flex align-items-center justify-content-between">
										<div>
											<span class="tag">UI/UX</span>
											<h6><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="pj-title">Anaylsis Application.</a></h6>
										</div>
										<div>
											<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
										</div>
									</div>
								</div> <!-- /.caption -->
							</div> <!-- /.gallery-item -->
						</div> <!-- /.isotop-item -->
						<div class="isotop-item branding print">
							<div class="gallery-item mb-60 lg-mb-50">
								<div class="img-holder">
									<img src="{{ URL::asset('images/gallery/img_25.jpg') }}" alt="" class="img-meta w-100 tran5s">
									<a class="fancybox expend d-flex align-items-center justify-content-center tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_25.jpg" tabindex="0"><i class="bi bi-plus"></i></a>
								</div>
								<div class="caption pe-xl-3 pt-30 lg-pt-20">
									<div class="d-flex align-items-center justify-content-between">
										<div>
											<span class="tag">ILLUSTRATION</span>
											<h6><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="pj-title">Product Branding</a></h6>
										</div>
										<div>
											<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
										</div>
									</div>
								</div> <!-- /.caption -->
							</div> <!-- /.gallery-item -->
						</div> <!-- /.isotop-item -->
						<div class="isotop-item dev print">
							<div class="gallery-item mb-60 lg-mb-50">
								<div class="img-holder">
									<img src="{{ URL::asset('images/gallery/img_24.jpg') }}" alt="" class="img-meta w-100 tran5s">
									<a class="fancybox expend d-flex align-items-center justify-content-center tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_24.jpg" tabindex="0"><i class="bi bi-plus"></i></a>
								</div>
								<div class="caption pe-xl-3 pt-30 lg-pt-20">
									<div class="d-flex align-items-center justify-content-between">
										<div>
											<span class="tag">WEB DESIGN</span>
											<h6><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="pj-title">Anaylsis Application.</a></h6>
										</div>
										<div>
											<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
										</div>
									</div>
								</div> <!-- /.caption -->
							</div> <!-- /.gallery-item -->
						</div> <!-- /.isotop-item -->
						<div class="isotop-item branding anim">
							<div class="gallery-item mb-60 lg-mb-50">
								<div class="img-holder">
									<img src="{{ URL::asset('images/gallery/img_26.jpg') }}" alt="" class="img-meta w-100 tran5s">
									<a class="fancybox expend d-flex align-items-center justify-content-center tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_26.jpg" tabindex="0"><i class="bi bi-plus"></i></a>
								</div>
								<div class="caption pe-xl-3 pt-30 lg-pt-20">
									<div class="d-flex align-items-center justify-content-between">
										<div>
											<span class="tag">Branding</span>
											<h6><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="pj-title">The Organic Sac</a></h6>
										</div>
										<div>
											<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
										</div>
									</div>
								</div> <!-- /.caption -->
							</div> <!-- /.gallery-item -->
						</div> <!-- /.isotop-item -->
						<div class="isotop-item plugin custom anim">
							<div class="gallery-item mb-60 lg-mb-50">
								<div class="img-holder">
									<img src="{{ URL::asset('images/gallery/img_27.jpg') }}" alt="" class="img-meta w-100 tran5s">
									<a class="fancybox expend d-flex align-items-center justify-content-center tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_27.jpg" tabindex="0"><i class="bi bi-plus"></i></a>
								</div>
								<div class="caption pe-xl-3 pt-30 lg-pt-20">
									<div class="d-flex align-items-center justify-content-between">
										<div>
											<span class="tag">Mobile App</span>
											<h6><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="pj-title">Efficient Team Mobile</a></h6>
										</div>
										<div>
											<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
										</div>
									</div>
								</div> <!-- /.caption -->
							</div> <!-- /.gallery-item -->
						</div> <!-- /.isotop-item -->
					</div>
				</div>
			</div> <!-- /.portfolio-gallery-three -->




			<!-- 
			=============================================
				Feedback Section Thirteen
			============================================== 
			-->
			<div class="feedback-section-thirteen">
				<div class="container">
					<div class="icon d-flex align-items-center justify-content-center mb-40 lg-mb-20"><img src="{{ URL::asset('images/icon/icon_107.svg') }}" alt=""></div>
					<div class="row">
						<div class="col-xxl-9 col-lg-8 m-auto">
							<div class="feedback_slider_nine">
								<div class="item">
									<div class="testimonial-block-four text-center tran3s">
										<p class="font-recoleta">Having a home based business is  wonderful asset to your life. The problem still stands comes time your business . I know you have looked .</p>
										<h6>Jesica Cowdhury, <span>USA</span></h6>
									</div> <!-- /.testimonial-block-four -->
								</div>

								<div class="item">
									<div class="testimonial-block-four text-center tran3s">
										<p class="font-recoleta">Apart from counting words and characters, our online editor improve word choice and writing style, and, optionally, help you to detect grammar.</p>
										<h6>Frances Baldwin, <span>Houston</span></h6>
									</div> <!-- /.testimonial-block-four -->
								</div>

								<div class="item">
									<div class="testimonial-block-four text-center tran3s">
										<p class="font-recoleta">Knowing the word count of a text can be important. For example, if an author has to write a minimum or maximum amount of words.</p>
										<h6>Michael Phillips, <span>Norwich</span></h6>
									</div> <!-- /.testimonial-block-four -->
								</div>
							</div> <!-- /.feedback_slider_nine -->
						</div>
					</div>
				</div> <!-- /.container -->
				<img src="{{ URL::asset('images/media/img_122.png') }}" alt="" class="shapes shape_1">
				<img src="{{ URL::asset('images/media/img_123.png') }}" alt="" class="shapes shape_2">
				<img src="{{ URL::asset('images/media/img_124.png') }}" alt="" class="shapes shape_3">
				<img src="{{ URL::asset('images/media/img_125.png') }}" alt="" class="shapes shape_4">
				<img src="{{ URL::asset('images/media/img_126.png') }}" alt="" class="shapes shape_5">
				<img src="{{ URL::asset('images/media/img_127.png') }}" alt="" class="shapes shape_6">
				<img src="{{ URL::asset('images/shape/shape_69.svg') }}" alt="" class="shapes shape_7">
				<img src="{{ URL::asset('images/shape/shape_70.svg') }}" alt="" class="shapes shape_8">
			</div> <!-- /.feedback-section-thirteen -->


			<!--
			=====================================================
				Partner Slider
			=====================================================
			-->
			<div class="partner-slider-one mt-150 md-mt-80">
				<div class="container">
					<div class="partnerSliderOne">
						<div class="item">
							<div class="img-meta d-flex align-items-center justify-content-center" style="height:68px"><img src="{{ URL::asset('images/logo/logo-25.png') }}" alt=""></div>
						</div>
						<div class="item">
							<div class="img-meta d-flex align-items-center justify-content-center" style="height:68px"><img src="{{ URL::asset('images/logo/logo-26.png') }}" alt=""></div>
						</div>
						<div class="item">
							<div class="img-meta d-flex align-items-center justify-content-center" style="height:68px"><img src="{{ URL::asset('images/logo/logo-29.png') }}" alt=""></div>
						</div>
						<div class="item">
							<div class="img-meta d-flex align-items-center justify-content-center" style="height:68px"><img src="{{ URL::asset('images/logo/logo-28.png') }}" alt=""></div>
						</div>
						<div class="item">
							<div class="img-meta d-flex align-items-center justify-content-center" style="height:68px"><img src="{{ URL::asset('images/logo/logo-29.png') }}" alt=""></div>
						</div>
						<div class="item">
							<div class="img-meta d-flex align-items-center justify-content-center" style="height:68px"><img src="{{ URL::asset('images/logo/logo-26.png') }}" alt=""></div>
						</div>
						<div class="item">
							<div class="img-meta d-flex align-items-center justify-content-center" style="height:68px"><img src="{{ URL::asset('images/logo/logo-29.png') }}" alt=""></div>
						</div>
					</div>
				</div>
			</div> <!-- /.partner-slider-one -->




			<!--
			=====================================================
				Vcamp Fancy Banner Nine
			=====================================================
			-->
			<div class="fancy-banner-nine mt-150 lg-mt-100">
				<div class="container">
					<div class="inner-content position-relative">
						<img src="{{ URL::asset('images/shape/shape_71.svg') }}" alt="" class="shapes shape-one">
						<div class="row">
							<div class="col-md-11 m-auto">
								<div class="row align-items-center">
									<div class="col-xl-8 col-lg-7 col-md-9">
										<h2 class="title font-recoleta text-center text-md-start">Any <span>project</span> in mind? Let’s chat.</h2>
									</div>
									<div class="col-xl-4 col-lg-5 col-md-3 d-flex justify-content-md-end justify-content-center">
										<a href="{{ url('pages.support.contactV1') }}" class="arrow-btn org-color ripple-btn tran3s sm-mt-30"><i class="bi bi-arrow-up-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.fancy-banner-nine -->




			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<div class="vcamp-footer-six">
				<div class="container">
					<div class="d-lg-flex align-items-center justify-content-between text-center">
						<div class="logo pb-30 order-lg-1"><a href="{{ url('home.index') }}"><img src="{{ URL::asset('images/logo/vCamp_14.png') }}" alt="" width="90"></a></div>
						<p class="d-flex align-items-center justify-content-center mail-info theme-mb-0 pb-30 order-lg-3">
							<img src="{{ URL::asset('images/icon/icon_112.svg') }}" alt="" class="me-2">
							<a href="mailto:askreza@vcamp.com">askreza@vcamp.com</a>
						</p>
						<ul class="style-none d-flex align-items-center justify-content-center social-icon pb-30 order-lg-2">
							<li><a href="#"><img src="{{ URL::asset('images/icon/icon_108.svg') }}" alt="" class="tran3s"></a></li>
							<li><a href="#"><img src="{{ URL::asset('images/icon/icon_109.svg') }}" alt="" class="tran3s"></a></li>
							<li><a href="#"><img src="{{ URL::asset('images/icon/icon_110.svg') }}" alt="" class="tran3s"></a></li>
							<li><a href="#"><img src="{{ URL::asset('images/icon/icon_111.svg') }}" alt="" class="tran3s"></a></li>
						</ul>
					</div>
				</div>
			</div> <!-- /.vcamp-footer-six -->



			<!--
			=====================================================
				Modal
			=====================================================
			-->
			<!-- Modal -->
			<div class="modal fade" id="contactModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
			  	<div class="modal-dialog modal-xl">
				    <div class="modal-content">
				    	<div class="modal-header">
				        	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      	</div>
				      	<div class="modal-body p0">
				        	<div class="container">
								<div class="row">
									<div class="col-xl-11 m-auto">
										<div class="form-style-one">
											<form action="inc/contact.php" id="contact-form"  data-toggle="validator">
												<div class="messages"></div>
												<div class="row controls">
													<div class="col-sm-6">
														<div class="input-group-meta form-group mb-25">
															<label>First Name*</label>
															<input type="text" placeholder="Rashed" name="name" required="required" data-error="Name is required.">
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="input-group-meta form-group mb-25">
															<label>Last Name*</label>
															<input type="text" placeholder="Kabir" name="Lname" required="required" data-error="Name is required.">
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-12">
														<div class="input-group-meta form-group mb-25">
															<label>Select Service*</label>
															<select class="theme-select-menu" placeholder="Choose a Service...." name="category" required="required">
																<option value="">Choose a Service....</option>
																<option value="Digital Marketing">Digital Marketing</option>
																<option value="Website Design">Website Design</option>
																<option value="WordPress">WordPress</option>
																<option value="Web Analytics">Web Analytics</option>
																<option value="Web Programming">Web Programming</option>
																<option value="Infographic Design">Infographic Design</option>
															</select>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-12">
														<div class="input-group-meta form-group mb-40">
															<label>Email*</label>
															<input type="email" placeholder="rshdkabir@gmail.com" name="email" required="required" data-error="Valid email is required.">
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-12">
														<div class="input-group-meta form-group mb-35">
															<textarea placeholder="Your message*" name="message" required="required" data-error="Please,leave us a message."></textarea>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-12"><button class="theme-btn-one ripple-btn">Send Message</button></div>
												</div>
											</form>
										</div> <!-- /.form-style-one -->
									</div>
								</div>
							</div>
				    	</div>
				    </div> <!-- /.modal-content -->
			  	</div> <!-- /.modal-dialog -->
			</div>


			<button class="scroll-top">
				<i class="bi bi-arrow-up-short"></i>
			</button>
			
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="{{ URL::asset('vendor/jquery.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<!-- AOS js -->
		<script src="{{ URL::asset('vendor/aos-next/dist/aos.js') }}"></script>
		<!-- Slick Slider -->
		<script src="{{ URL::asset('vendor/slick/slick.min.js') }}"></script>
		<!-- js Counter -->
		<script src="{{ URL::asset('vendor/jquery.counterup.min.js') }}"></script>
		<script src="{{ URL::asset('vendor/jquery.waypoints.min.js') }}"></script>
		<!-- Fancybox -->
		<script src="{{ URL::asset('vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>
		<!-- validator js -->
    	<script src="{{ URL::asset('vendor/validator.js') }}"></script>
    	<!-- Telephone Select -->
		<script src="{{ URL::asset('vendor/intl-tel/build/js/intlTelInput.min.js') }}"></script>
		<!-- Select js -->
    	<script src="{{ URL::asset('vendor/selectize.js/selectize.min.js') }}"></script>
    	<!-- isotop -->
		<script  src="vendor/isotope.pkgd.min.js"></script>

		<!-- Theme js -->
		<script src="{{ URL::asset('js/theme.js') }}"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>