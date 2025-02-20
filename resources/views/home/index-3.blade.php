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
				Sidebar Nav
			============================================== 
			-->
			<div class="offcanvas offcanvas-end sidebar-nav dark-style" tabindex="-1" id="offcanvasRight">
				<div class="offcanvas-header">
				    <div class="logo"><a href="{{ url('home.index') }}"><img src="{{ URL::asset('images/logo/vCamp_04.png') }}" alt="" width="127"></a></div>
				    <button type="button" class="close-btn tran3s" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></button>
				</div>
			  	
			  	<div class="sidebar-nav-item">
			  		<ul class="style-none">
			  			<li class="nav-item">
			  				<a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Home</a>
			  				<ul class="dropdown-menu">
							    <li><a href="{{ url('home.index') }}" class="dropdown-item"><span>Creative Agency</span></a></li>
							    <li><a href="{{ url('home.index-2') }}" class="dropdown-item"><span>Business</span></a></li>
							    <li><a href="{{ url('home.index-3') }}" class="dropdown-item"><span>Agency Minimal</span></a></li>
							    <li><a href="{{ url('home.index-4') }}" class="dropdown-item"><span>Service Provider</span></a></li>
							    <li><a href="{{ url('home.index-5') }}" class="dropdown-item"><span>Startup</span></a></li>
							    <li><a href="{{ url('home.index-6') }}" class="dropdown-item"><span>Design Studio Light</span></a></li>
							    <li><a href="{{ url('home.index-7') }}" class="dropdown-item"><span>Design Studio Dark</span></a></li>
							    <li><a href="{{ url('home.index-8') }}" class="dropdown-item"><span>Shop Standard</span></a></li>
							    <li><a href="{{ url('home.index-9') }}" class="dropdown-item"><span>Shop Creative</span></a></li>
							    <li><a href="{{ url('home.index-10') }}" class="dropdown-item"><span>Startup Agency</span></a></li>
							    <li><a href="{{ url('home.index-11') }}" class="dropdown-item"><span>Consulting Agency</span></a></li>
							    <li><a href="{{ url('home.index-12') }}" class="dropdown-item"><span>Photographer Portfolio</span></a></li>
							    <li><a href="{{ url('home.index-13') }}" class="dropdown-item"><span>Designer Portfolio</span></a></li>
							    <li><a href="{{ url('home.index-14') }}" class="dropdown-item"><span>Marketing Agency</span></a></li>
							    <li><a href="{{ url('home.index-15') }}" class="dropdown-item"><span>Design Agency Portfolio</span></a></li>
								<li><a href="{{ url('home.index-16') }}" class="dropdown-item"><span>Startup Modern</span></a></li>
							    <li><a href="{{ url('home.coming-soon') }}" class="dropdown-item"><span>Coming Soon</span></a></li>
							</ul>
			  			</li>
			  			<li class="nav-item dropdown">
					    	<a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Portfolio</a>
						    <ul class="dropdown-menu">
					            <li><a href="{{ url('portfolio.boxed_layout.portfolioV1') }}" class="dropdown-item"><span>Portfolio Classic</span></a></li>
					            <li><a href="{{ url('portfolio.boxed_layout.portfolioV7') }}" class="dropdown-item"><span>Portfolio Modern</span></a></li>
					            <li><a href="{{ url('portfolio.boxed_layout.portfolioV24') }}" class="dropdown-item"><span>Portfolio carousel</span></a></li>
					            <li><a href="{{ url('portfolio.dark_layout.portfolioV15') }}" class="dropdown-item"><span>Portfolio Video Lightbox</span></a></li>
					            <li><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV1') }}" class="dropdown-item"><span>Single Portfolio 01</span></a></li>
							    <li><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}" class="dropdown-item"><span>Single Portfolio 02</span></a></li>
						    </ul>
						</li>
			  			<li class="nav-item">
			  				<a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Pages</a>
			  				<ul class="dropdown-menu">
							    <li><a href="{{ url('pages.essential.about-usV1') }}" class="dropdown-item"><span>About Minimal</span></a></li>
								<li><a href="{{ url('pages.essential.teamV1') }}" class="dropdown-item"><span>Team Standard</span></a></li>
								<li><a href="{{ url('pages.essential.pricingV2') }}" class="dropdown-item"><span>Pricing Standard: Dark</span></a></li>
								<li><a href="{{ url('pages.support.serviceV1') }}" class="dropdown-item"><span>Service Minimal</span></a></li>
								<li><a href="{{ url('pages.other.testimonialV1') }}" class="dropdown-item"><span>Testimonial Classic</span></a></li>
							</ul>
			  			</li>
			  			<li class="nav-item"><a href="{{ url('blog.blogV1') }}">News</a></li>
			  			<li class="nav-item"><a href="{{ url('pages.support.contactV1') }}">Contact us</a></li>
			  		</ul>
			  	</div>
			  	<div><a href="{{ url('shop.sign-in') }}" class="theme-btn-one ripple-btn d-block"><img src="{{ URL::asset('images/icon/icon_22.svg') }}" alt="" class="me-2 ms-0"> login</a></div>
			  	<form action="#" class="search-form">
			  		<input type="text" placeholder="Search here..">
			  		<button><i class="bi bi-search"></i></button>
			  	</form>

			  	<div class="address-block">
			  		<h4 class="title">Our Address</h4>
			  		<p>Chowrastar Mirpur- 1210, Sangu <br>River, Dhaka</p>
			  		<p>Urgent issue? call us at <br><a href="tel:310.841.5500">310.841.5500</a></p>
			  	</div>
			  	<ul class="d-flex social-icon style-none mt-20">
					<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
				</ul>
			</div> <!-- /.sidebar-nav -->


			<!-- 
			=============================================
				Theme Main Menu
			============================================== 
			-->
			<header class="theme-main-menu sticky-menu theme-menu-three">
				<div class="inner-content">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo"><a href="{{ url('home.index') }}"><img src="{{ URL::asset('images/logo/vCamp_02.png') }}" alt="" style="width:127px"></a></div>
						<div class="right-widget d-flex align-items-center">
							<ul class="d-flex lang-select style-none">
								<li><a href="#">En.</a></li>
								<li><a href="#">Ru</a></li>
							</ul>
							<button class="sidebar-nav-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="{{ URL::asset('images/icon/icon_36.svg') }}" alt=""></button>
						</div> <!-- /.right-widget -->
					</div>
				</div> <!-- /.inner-content -->
			</header> <!-- /.theme-main-menu -->


			
			<!-- 
			=============================================
				Theme Hero Banner
			============================================== 
			-->
			<div class="hero-banner-three">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6">
							<h1 class="hero-heading font-recoleta md-pb-40">Provide Solution to your Business.</h1>
						</div>
						<div class="col-xl-5 col-lg-6">
							<h3 class="d-inline-block sub-heading">Hello, We’r vCamp <span class="d-inline-block"></span></h3>
							<p class="hero-sub-heading">We helping enterprises to create great WordPress websites perfectly.</p>
							<ul class="button-group d-sm-flex align-items-center style-none">
								<li><a href="{{ url('pages.support.contactV3') }}" class="mt-15 me-5 theme-btn-four">Let’s Talk</a></li>
								<li><a href="{{ url('portfolio.full-width_layout.portfolioV2') }}" class="mt-15 case-study-button d-flex align-items-center"><span>View Case Stidues</span> <img src="{{ URL::asset('images/icon/icon_37.svg') }}" alt="" class="ms-3"></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="slider-wrapper">
					<div class="video-wrapper">
						<video preload="" muted="muted" playsinline="" autoplay="" loop="">
        					<source src="https://creativegigstf.com/video/intro_3.mp4" type="video/mp4">
      					</video>
					</div> <!-- /.video-wrapper -->
				</div>
			</div> <!-- /.hero-banner-three -->


			<!-- 
			=============================================
				Partner Slider One
			============================================== 
			-->
			<div class="partner-slider-one-border mt-300 pt-110 xl-pt-30 md-mt-110">
				<div class="partner-slider-one">
					<div class="container">
						<p class="text-center theme-mb-0">Over <span>32K+</span> software businesses growing with vCamp.</p>
						<div class="partnerSliderOne">
							<div class="item">
								<div class="img-meta d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/logo/logo-1.png') }}" alt=""></div>
							</div>
							<div class="item">
								<div class="img-meta d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/logo/logo-2.png') }}" alt=""></div>
							</div>
							<div class="item">
								<div class="img-meta d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/logo/logo-3.png') }}" alt=""></div>
							</div>
							<div class="item">
								<div class="img-meta d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/logo/logo-4.png') }}" alt=""></div>
							</div>
							<div class="item">
								<div class="img-meta d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/logo/logo-5.png') }}" alt=""></div>
							</div>
							<div class="item">
								<div class="img-meta d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/logo/logo-2.png') }}" alt=""></div>
							</div>
							<div class="item">
								<div class="img-meta d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/logo/logo-4.png') }}" alt=""></div>
							</div>
						</div>
					</div>
				</div> <!-- /.partner-slider-one -->
			</div>

			


			<!-- 
			=============================================
				Vcamp Feature Section One
			============================================== 
			-->
			<div class="vcamp-feature-section-one mt-200 lg-mt-110">
				<div class="clearfix">
					<div class="container">
						<div class="row">
							<div class="col-xxl-4 col-lg-5" data-aos="fade-right">
								<div class="title-style-one">
									<div class="upper-title">What we do</div>
									<h2 class="title">Our <span>included</span> service.</h2>
								</div>
								<p class="meta-info-text text-lg">We helping client  to create  with our talented expert.</p>
								<a href="{{ url('pages.support.serviceV2') }}" class="theme-btn-one ripple-btn border0">Discover More <img src="{{ URL::asset('images/icon/icon_03.svg') }}" alt=""></a>
							</div>

							<div class="col-lg-7 ms-auto" data-aos="fade-left">
								<div class="row">
									<div class="col-sm-6">
										<div class="card-style-one">
											<div class="icon style-two d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_04.svg') }}" alt="" class="tran3s"></div>
											<h4 class="title">Core WP</h4>
											<p>Elit esse cillum dolore eu fugiat nulla pariatur</p>
											<a href="#" class="arrow-icon"><img src="{{ URL::asset('images/icon/icon_08.svg') }}" alt="" class="tran3s"></a>
										</div> <!-- /.card-style-one -->
									</div>
									<div class="col-sm-6">
										<div class="card-style-one">
											<div class="icon style-two d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_05.svg') }}" alt="" class="tran3s"></div>
											<h4 class="title">Plugin Development</h4>
											<p>quis nostrud exerct ullamo ea nisi ut aliqui com dolor</p>
											<a href="#" class="arrow-icon"><img src="{{ URL::asset('images/icon/icon_08.svg') }}" alt="" class="tran3s"></a>
										</div> <!-- /.card-style-one -->
									</div>
									<div class="col-sm-6">
										<div class="card-style-one">
											<div class="icon style-two d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_06.svg') }}" alt="" class="tran3s"></div>
											<h4 class="title">Installation</h4>
											<p>Duis aute irure dolor  reprehen derit in voluptat velit.</p>
											<a href="#" class="arrow-icon"><img src="{{ URL::asset('images/icon/icon_08.svg') }}" alt="" class="tran3s"></a>
										</div> <!-- /.card-style-one -->
									</div>
									<div class="col-sm-6">
										<div class="card-style-one">
											<div class="icon style-two d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_07.svg') }}" alt="" class="tran3s"></div>
											<h4 class="title">Customization</h4>
											<p>cupidatat non proident, sunt in culpa qui officia deserunt</p>
											<a href="#" class="arrow-icon"><img src="{{ URL::asset('images/icon/icon_08.svg') }}" alt="" class="tran3s"></a>
										</div> <!-- /.card-style-one -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- /.clearfix -->
			</div> <!-- /.vcamp-feature-section-one -->
			


			<!-- 
			=============================================
				Vcamp Text Block Two
			============================================== 
			-->
			<div class="vcamp-text-block-two mt-120 lg-mt-20 md-mt-100">
				<div class="container">
					<div class="row align-items-end">
						<div class="col-xxl-6 col-lg-7 ms-auto order-lg-last" data-aos="fade-left">
							<div class="text-wrapper">
								<div class="title-style-two">
									<h3 class="title">We’ve been helping <span>enterprise</span> globally.</h3>
								</div>
								<p class="meta-info-text text-lg">Lorem ipsum dolor sit amet, consecte adiel sed do eiusmod tempo ut labore.Lorem ipsum dolor sit amet, consecte adiel sed do eiusmod tempor incidi ut split.</p>
								<a href="{{ url('pages.essential.about-usV2') }}" class="theme-btn-three btn-color">Lear more about us <i class="fas fa-angle-right"></i></a>
							</div>
						</div>
						<div class="col-xxl-6 col-lg-5" data-aos="fade-up">
							<div class="img-container position-relative">
								<img src="{{ URL::asset('images/media/img_14.jpg') }}" alt="" class="ceo-avatar">
								<img src="{{ URL::asset('images/shape/shape_16.svg') }}" alt="" class="shapes shape-one">
								<div class="quote-wrapper">
									<img src="{{ URL::asset('images/icon/icon_10.svg') }}" alt="" class="icon">
									<blockquote>Our partnership with vCamp Their support helped us to solve everything.</blockquote>
									<h6 class="name">Rashed Ka. <span>CEO vCamp</span></h6>
								</div> <!-- /.quote-wrapper -->
							</div>
						</div>
					</div>
				</div>
				<img src="{{ URL::asset('images/shape/shape_17.svg') }}" alt="" class="shapes shape-two">
			</div> <!-- /.vcamp-text-block-two -->




			<!--
			=====================================================
				Counter Section One
			=====================================================
			-->
			<div class="counter-section-one border-bottom pb-50 mt-120 sm-pb-20">
				<div class="inner-container">
					<div class="row justify-content-center">
						<div class="col-md-3 col-sm-6" data-aos="fade-up">
							<div class="counter-block-one text-center mb-45">
								<div class="main-count font-recoleta"><span class="counter">20</span>million</div>
								<p class="theme-mb-0">3,280 avg rating</p>
							</div> <!-- /.counter-block-one -->
						</div>
						<div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
							<div class="counter-block-one text-center mb-45">
								<div class="main-count font-recoleta"><span class="counter">50</span>k+</div>
								<p class="theme-mb-0">Contact Profile</p>
							</div> <!-- /.counter-block-one -->
						</div>
						<div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
							<div class="counter-block-one text-center mb-45">
								<div class="main-count font-recoleta"><span class="counter">3,000</span>+</div>
								<p class="theme-mb-0">Using vCamp</p>
							</div> <!-- /.counter-block-one -->
						</div>
					</div>
				</div>
			</div>



			<!--
			=====================================================
				Feedback Slider Five
			=====================================================
			-->
			<div class="feedback-section-five mt-150 pb-30 lg-mt-110">
				<div class="inner-content">
					<div class="container">
						<div class="row">
							<div class="col-xxl-6 col-xl-7 col-lg-6 col-md-8 col-sm-10 m-auto">
								<div class="title-style-two text-center">
									<h3 class="title">Let’s check our <span>client</span>case study</h3>
								</div>
							</div>
						</div>
					</div><!--  /.container -->

					<div class="slider-wrapper">
						<div class="feedback_slider_three">
							<div class="item">
								<div class="block-wrapper">
									<img src="{{ URL::asset('images/media/img_15.jpg') }}" alt="" class="screen">
									<div class="overlay-content d-flex align-items-end">
										<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV1') }}" class="d-flex justify-content-between align-items-center">
											<span>www.uiart.com</span>
											<img src="{{ URL::asset('images/icon/icon_28.svg') }}" alt="">
										</a>
									</div> <!-- /.overlay-content -->
								</div> <!-- /.block-wrapper -->
							</div>
							<div class="item">
								<div class="block-wrapper">
									<img src="{{ URL::asset('images/media/img_16.jpg') }}" alt="" class="screen">
									<div class="overlay-content d-flex align-items-end">
										<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV1') }}" class="d-flex justify-content-between align-items-center">
											<span>www.todo.com</span>
											<img src="{{ URL::asset('images/icon/icon_28.svg') }}" alt="">
										</a>
									</div> <!-- /.overlay-content -->
								</div> <!-- /.block-wrapper -->
							</div>
							<div class="item">
								<div class="block-wrapper">
									<img src="{{ URL::asset('images/media/img_17.jpg') }}" alt="" class="screen">
									<div class="overlay-content d-flex align-items-end">
										<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV1') }}" class="d-flex justify-content-between align-items-center">
											<span>www.icon8.com</span>
											<img src="{{ URL::asset('images/icon/icon_28.svg') }}" alt="">
										</a>
									</div> <!-- /.overlay-content -->
								</div> <!-- /.block-wrapper -->
							</div>
							<div class="item">
								<div class="block-wrapper">
									<img src="{{ URL::asset('images/media/img_16.jpg') }}" alt="" class="screen">
									<div class="overlay-content d-flex align-items-end">
										<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV1') }}" class="d-flex justify-content-between align-items-center">
											<span>www.todo.com</span>
											<img src="{{ URL::asset('images/icon/icon_28.svg') }}" alt="">
										</a>
									</div> <!-- /.overlay-content -->
								</div> <!-- /.block-wrapper -->
							</div>
						</div> <!-- /.feedback_slider_three -->
					</div> <!-- /.slider-wrapper -->

					<div class="text-center mt-40 lg-mt-20"><a href="{{ url('portfolio.full-width_layout.portfolioV2') }}" class="theme-btn-four ripple-btn">View all case study</a></div>
				</div> <!-- /.inner-content -->
			</div> <!-- /.feedback-section-five -->


			<!--
			=====================================================
				Feedback Slider Six
			=====================================================
			-->
			<div class="feedback-section-six mt-250 lg-mt-100">
				<img src="{{ URL::asset('images/icon/icon_38.svg') }}" alt="" class="shapes quote-icon">
				<div class="container">
					<div class="title-style-two text-center">
						<h3 class="title">Client <span>Feedback</span></h3>
					</div>
				</div>

				<div class="slider-wrapper">
					<div class="feedback_slider_five ">
						<div class="item">
							<div class="block-wrapper">
								<div class="icon d-flex align-items-end"><img src="{{ URL::asset('images/logo/logo-14.png') }}" alt=""></div>
								<p>We’v 9,000 agents around the country, Find agents near your neighborhood.</p>
								<div class="d-flex align-items-center">
									<img src="{{ URL::asset('images/media/img_18.jpg') }}" alt="" class="avatar">
									<div class="name">Hasan Ali <span>KSA</span></div>
								</div>
							</div> <!-- /.block-wrapper -->
						</div>
						<div class="item">
							<div class="block-wrapper">
								<div class="icon d-flex align-items-end"><img src="{{ URL::asset('images/logo/logo-15.png') }}" alt=""></div>
								<p>We’v 9,000 agents around the country, Find agents near your neighborhood.</p>
								<div class="d-flex align-items-center">
									<img src="{{ URL::asset('images/media/img_18.jpg') }}" alt="" class="avatar">
									<div class="name">Rashed Ka <span>KSA</span></div>
								</div>
							</div> <!-- /.block-wrapper -->
						</div>
						<div class="item">
							<div class="block-wrapper">
								<div class="icon d-flex align-items-end"><img src="{{ URL::asset('images/logo/logo-16.png') }}" alt=""></div>
								<p>We’v 9,000 agents around the country, Find agents near your neighborhood.</p>
								<div class="d-flex align-items-center">
									<img src="{{ URL::asset('images/media/img_18.jpg') }}" alt="" class="avatar">
									<div class="name">Joe Nion <span>KSA</span></div>
								</div>
							</div> <!-- /.block-wrapper -->
						</div>
						<div class="item">
							<div class="block-wrapper">
								<div class="icon d-flex align-items-end"><img src="{{ URL::asset('images/logo/logo-17.png') }}" alt=""></div>
								<p>We’v 9,000 agents around the country, Find agents near your neighborhood.</p>
								<div class="d-flex align-items-center">
									<img src="{{ URL::asset('images/media/img_18.jpg') }}" alt="" class="avatar">
									<div class="name">Besik Ali <span>KSA</span></div>
								</div>
							</div> <!-- /.block-wrapper -->
						</div>
						<div class="item">
							<div class="block-wrapper">
								<div class="icon d-flex align-items-end"><img src="{{ URL::asset('images/logo/logo-16.png') }}" alt=""></div>
								<p>We’v 9,000 agents around the country, Find agents near your neighborhood.</p>
								<div class="d-flex align-items-center">
									<img src="{{ URL::asset('images/media/img_18.jpg') }}" alt="" class="avatar">
									<div class="name">Joe Nion <span>KSA</span></div>
								</div>
							</div> <!-- /.block-wrapper -->
						</div>
					</div> <!-- /.feedback_slider_five -->
					<ul class="d-flex justify-content-center slider-arrow style-none mt-80 lg-mt-40">
						<li class="prev_f slick-arrow"><i class="bi bi-arrow-left"></i></li>
						<li class="next_f slick-arrow"><i class="bi bi-arrow-right"></i></li>
					</ul>
				</div> <!-- /.slider-wrapper -->
				<img src="{{ URL::asset('images/shape/shape_18.svg') }}" alt="" class="shapes shape-one">
				<img src="{{ URL::asset('images/shape/shape_19.svg') }}" alt="" class="shapes shape-two">
			</div> <!-- /.feedback-section-six -->



			<!--
			=====================================================
				Blog Section Two
			=====================================================
			-->
			<div class="blog-section-two mt-200 lg-mt-120">
				<div class="container">
					<div class="row">
						<div class="col-xxl-11 m-auto">
							<div class="row align-items-center mb-50 lg-mb-20">
								<div class="col-sm-6">
									<div class="title-style-two">
										<h3 class="title">Our <span>News</span></h3>
									</div>
								</div>
								<div class="col-sm-6 d-sm-flex justify-content-end">
									<a href="{{ url('blog.blogV3') }}" class="theme-btn-one ripple-btn border0 xs-mt-20">Go to Blog</a>
								</div>
							</div>

							<div class="row gx-xl-5">
								<div class="col-md-4">
									<article class="blog-meta-two mt-40">
										<div class="img-meta"><img src="{{ URL::asset('images/blog/blog_img_01.jpg') }}" alt=""></div>
										<div class="post-meta">
											<div class="date">23 Apr, 2021</div>
											<a href="{{ url('blog.blog-detailsV3') }}" class="title">A Discount Cartridge dsu is Better Ever.</a>
											<a href="{{ url('blog.blog-detailsV3') }}" class="theme-btn-three">Continue reading <i class="fas fa-angle-right"></i></a>
										</div> <!-- /.post-meta -->
									</article> <!-- /.blog-meta-two -->
								</div>
								<div class="col-md-4">
									<article class="blog-meta-two mt-40">
										<div class="img-meta"><img src="{{ URL::asset('images/blog/blog_img_02.jpg') }}" alt=""></div>
										<div class="post-meta">
											<div class="date">15 may, 2021</div>
											<a href="{{ url('blog.blog-detailsV3') }}" class="title">A Discount Cartridge dsu is Better Ever.</a>
											<a href="{{ url('blog.blog-detailsV3') }}" class="theme-btn-three">Continue reading <i class="fas fa-angle-right"></i></a>
										</div> <!-- /.post-meta -->
									</article> <!-- /.blog-meta-two -->
								</div>
								<div class="col-md-4">
									<article class="blog-meta-two mt-40">
										<div class="img-meta"><img src="{{ URL::asset('images/blog/blog_img_03.jpg') }}" alt=""></div>
										<div class="post-meta">
											<div class="date">25 july, 2021</div>
											<a href="{{ url('blog.blog-detailsV3') }}" class="title">A Discount Cartridge dsu is Better Ever.</a>
											<a href="{{ url('blog.blog-detailsV3') }}" class="theme-btn-three">Continue reading <i class="fas fa-angle-right"></i></a>
										</div> <!-- /.post-meta -->
									</article> <!-- /.blog-meta-two -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.blog-section-two -->



			<!--
			=====================================================
				Address Section Two
			=====================================================
			-->
			<div class="address-section-two bg-color mt-200 lg-mt-120">
				<div class="container">
					<div class="row">
						<div class="col-xxl-11 m-auto">
							<div class="inner-content">
								<img src="{{ URL::asset('images/shape/shape_20.svg') }}" alt="" class="shapes shape-one">
								<div class="row g-0">
									<div class="col-md-6">
										<div class="address-block-two d-flex border-right">
											<img src="{{ URL::asset('images/icon/icon_39.svg') }}" alt="" class="icon">
											<div class="text-meta">
												<h4 class="title">Our Address</h4>
												<p>1012 Pebda Parkway, Mirpur 2 <br>Dhaka, Bangladesh</p>
											</div> <!-- /.text-meta -->
										</div> <!-- /.address-block-two -->
									</div>
									<div class="col-md-6">
										<div class="address-block-two d-flex">
											<img src="{{ URL::asset('images/icon/icon_40.svg') }}" alt="" class="icon">
											<div class="text-meta">
												<h4 class="title">Contact Info</h4>
												<p>Open a chat or give us call at <br><a href="#">310.841.5500</a></p>
											</div> <!-- /.text-meta -->
										</div> <!-- /.address-block-two -->
									</div>
								</div>
							</div> <!-- /.inner-content -->
						</div>
					</div>
				</div>
			</div> <!-- /.address-section-two -->



			<!--
			=====================================================
				Contact Section Three
			=====================================================
			-->
			<div class="contact-section-three mt-225 lg-mt-120">
				<div class="container">
					<div class="bg-wrapper">
						<div class="row align-items-center">
							<div class="col-xl-5 col-lg-6 order-lg-last ms-auto">
								<div class="contact-meta-one">
									<div class="title-style-one">
										<h2 class="title">Let’s talk <br>about your big <span>project</span></h2>
									</div>
									<p class="text-lg">eiusmod tempor incididunt. Ut enim mimu veniamnostrud elit.</p>
									<div class="help-text">For urgent help call us at</div>
									<a href="tel:+227-300-3676" class="call-button">+227 300-3676</a>
								</div> <!-- /.contact-meta-one -->
							</div>
							<div class="col-lg-6 order-lg-first">
								<div class="form-style-two md-mt-40">
									<form id="contact-form" action="inc/contact.php" data-toggle="validator">
										<div class="messages"></div>
										<div class="row controls">
											<div class="col-12">
												<div class="input-group-meta form-group mb-35">
													<label>Name*</label>
													<input type="text" placeholder="Rashed Kabir" name="name" required="required" data-error="Name is required.">
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta form-group mb-45">
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
											<div class="col-12"><button class="theme-btn-four ripple-btn w-100">Send Message</button></div>
										</div>
									</form>
								</div> <!-- /.form-style-two -->
							</div>
						</div>
					</div> <!-- /.bg-wrapper -->
				</div> 
			</div> <!-- /.contact-section-three -->



			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<div class="vcamp-footer-one dark-bg image-bg">
				<div class="clearfix">
					<div class="container">
						<div class="row">
							<div class="col-xxl-11 m-auto">
								<div class="subscribe-area">
									<div class="row align-items-center">
										<div class="col-md-6">
											<div class="title-style-three white-vr sm-pb-20">
												<h4 class="title">Get update by <span>signup</span> Newsletter</h4>
											</div>
										</div>
										<div class="col-md-6">
											<div class="subscribe-form">
												<form action="#">
													<input type="email" placeholder="Enter your email">
													<button class="ripple-btn">Join <img src="{{ URL::asset('images/icon/icon_20.svg') }}" alt="" class="ms-2 d-inline-block"></button>
												</form>
												<p>Already sign up? <a href="#">unsubscribe</a></p>
											</div> <!-- /.subscribe-form -->
										</div>
									</div>
								</div> <!-- /.subscribe-area -->

								<div class="top-footer mt-90 md-mt-70">
									<div class="row">
										<div class="col-lg-4 col-md-2 d-flex justify-content-between flex-column">
											<div class="logo"><a href="{{ url('home.index') }}"><img src="{{ URL::asset('images/logo/vCamp_02.png') }}" alt="" style="width:127px"></a></div>
											<img src="{{ URL::asset('images/shape/shape_21.svg') }}" alt="" class="shape mt-15 d-none d-md-block">
										</div>
										<div class="col-lg-3 col-md-3 col-sm-4">
											<h6 class="footer-title">Links</h6>
											<ul class="footer-nav-link style-none">
												<li><a href="{{ url('home.index') }}">Home</a></li>
												<li><a href="{{ url('pages.essential.pricingV1') }}">Pricing</a></li>
												<li><a href="{{ url('pages.essential.about-usV1') }}">About us</a></li>
												<li><a href="{{ url('pages.support.serviceV2') }}">Service</a></li>
												<li><a href="{{ url('pages.support.serviceV1') }}">Features</a></li>
												<li><a href="{{ url('blog.blogV3') }}">Blog</a></li>
											</ul>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-4">
											<h6 class="footer-title">Legal</h6>
											<ul class="footer-nav-link style-none">
												<li><a href="{{ url('pages.other.faqV1') }}">Terms of use</a></li>
												<li><a href="{{ url('pages.other.faqV1') }}">Terms & conditions</a></li>
												<li><a href="{{ url('pages.other.faqV1') }}">Privacy policy</a></li>
												<li><a href="{{ url('pages.other.faqV1') }}">Cookie policy</a></li>
											</ul>
										</div>
										<div class="col-lg-2 col-md-4 col-sm-4">
											<h6 class="footer-title">About Us</h6>
											<ul class="footer-nav-link style-none">
												<li><a href="{{ url('pages.other.testimonialV1') }}">Testimonial</a></li>
												<li><a href="{{ url('pages.essential.about-usV1') }}">About us</a></li>
												<li><a href="{{ url('pages.essential.teamV1') }}">Our Team</a></li>
												<li><a href="{{ url('shop.productV1') }}">Product</a></li>
												<li><a href="{{ url('blog.blogV2') }}">News</a></li>
												<li><a href="{{ url('pages.other.faqV1') }}">Terms of use</a></li>
											</ul>
										</div>
									</div>
								</div> <!-- /.top-footer -->
							</div>
						</div>
					</div>
				</div> <!-- /.bg-wrapper -->
				<div class="container">
					<div class="row">
						<div class="col-xxl-11 m-auto">
							<div class="bottom-footer">
								<div class="row">
									<div class="col-lg-4 order-lg-0 mb-15">
										<ul class="d-flex justify-content-center justify-content-lg-start footer-nav style-none">
											<li><a href="{{ url('pages.other.faqV1') }}">Privacy &amp; Terms.</a></li>
											<li><a href="{{ url('pages.support.contactV1') }}">Contact Us</a></li>
										</ul>
									</div>
									<div class="col-lg-4 order-lg-2 mb-15">
										<ul class="d-flex justify-content-center justify-content-lg-end social-icon style-none">
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										</ul>
									</div>
									<div class="col-lg-4 order-lg-1 mb-15">
										<p class="copyright text-center">Copyright @2022 vcamp inc.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.vcamp-footer-one -->


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

		<!-- Theme js -->
		<script src="{{ URL::asset('js/theme.js') }}"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>