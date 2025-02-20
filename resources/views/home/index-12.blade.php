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
		<div class="main-page-wrapper dark-bg">
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
			<header class="theme-main-menu sticky-menu theme-menu-one dark-bg">
				<div class="inner-content">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo"><a href="{{ url('home.index') }}"><img src="{{ URL::asset('images/logo/vCamp_10.png') }}" alt="" width="37"></a></div>
						
						<div class="right-widget d-flex align-items-center">
							<button class="sidebar-nav-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="{{ URL::asset('images/icon/icon_70.svg') }}" alt=""></button>
						</div> <!-- /.right-widget -->
					</div>
				</div> <!-- /.inner-content -->
			</header> <!-- /.theme-main-menu -->


			
			<!-- 
			=============================================
				Theme Hero Banner
			============================================== 
			-->
			<div class="hero-banner-eleven">
				<div class="banner-intro">
					<img src="{{ URL::asset('images/assets/sticker_01.png') }}" alt="" class="brand-logo">
					<div class="heading">
						<h1 class="name font-recoleta">Rashed Reza</h1>
						<div class="text-lg-end">
							<div class="d-inline-block">
								<h2 class="font-recoleta cd-headline letters rotate-2">
									<span class="cd-words-wrapper">
								     	<b class="is-visible">Photographer</b>
								    	<b>Shutterbug</b>
								    	<b>Cameraman</b>
								    </span>
								</h2>
								<p>15+ years of experience</p>
							</div>
						</div>
					</div> <!-- /.heading -->
				</div> <!-- /.banner-intro -->
				<img src="{{ URL::asset('images/shape/shape_57.svg') }}" alt="" class="shapes shape-one">
			</div> <!-- /.hero-banner-eleven -->

			


			<!-- 
			=============================================
				Portfolio Gallery One
			============================================== 
			-->
			<div class="portfolio-gallery-one pb-140 md-pb-80">
				<div class="wrapper m-auto">
					<div class="row gx-xl-5">
						<div class="col-lg-3 col-sm-6">
							<div class="portfolio-slider-one mt-30" data-slick='{"autoplaySpeed": 3000}'>
								<div class="item">
									<div class="img-meta">
										<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="arrow tran4s d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-right"></i></a>
										<img src="{{ URL::asset('images/media/img_92.jpg') }}" alt="" class="w-100">
										<div class="hover-content">
											<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="c-name font-recoleta tran3s">The Drunken</a>
											<span class="tran3s">Food, Event</span>
										</div> <!-- /.hover-content -->
									</div> <!-- /.img-meta -->
								</div> <!-- /.item -->
								<div class="item">
									<div class="img-meta">
										<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="arrow tran4s d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-right"></i></a>
										<img src="{{ URL::asset('images/media/img_96.jpg') }}" alt="" class="w-100">
										<div class="hover-content">
											<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="c-name font-recoleta tran3s">Lettuce Entertain</a>
											<span class="tran3s">Landscape</span>
										</div> <!-- /.hover-content -->
									</div> <!-- /.img-meta -->
								</div> <!-- /.item -->
							</div> <!-- /.portfolio-slider-one -->
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="portfolio-slider-one mt-30" data-slick='{"autoplaySpeed": 3500}'>
								<div class="item">
									<div class="img-meta">
										<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="arrow tran4s d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-right"></i></a>
										<img src="{{ URL::asset('images/media/img_93.jpg') }}" alt="" class="w-100">
										<div class="hover-content">
											<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="c-name font-recoleta tran3s">Leaping Lizard</a>
											<span class="tran3s">Model, Fashion</span>
										</div> <!-- /.hover-content -->
									</div> <!-- /.img-meta -->
								</div> <!-- /.item -->
								<div class="item">
									<div class="img-meta">
										<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="arrow tran4s d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-right"></i></a>
										<img src="{{ URL::asset('images/media/img_97.jpg') }}" alt="" class="w-100">
										<div class="hover-content">
											<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="c-name font-recoleta tran3s">Juan More Taco</a>
											<span class="tran3s">Architecture, Event</span>
										</div> <!-- /.hover-content -->
									</div> <!-- /.img-meta -->
								</div> <!-- /.item -->
							</div> <!-- /.portfolio-slider-one -->
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="portfolio-slider-one mt-30" data-slick='{"autoplaySpeed": 3200}'>
								<div class="item">
									<div class="img-meta">
										<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="arrow tran4s d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-right"></i></a>
										<img src="{{ URL::asset('images/media/img_94.jpg') }}" alt="" class="w-100">
										<div class="hover-content">
											<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="c-name font-recoleta tran3s">Goldilox Bagels</a>
											<span class="tran3s">People, Film</span>
										</div> <!-- /.hover-content -->
									</div> <!-- /.img-meta -->
								</div> <!-- /.item -->
								<div class="item">
									<div class="img-meta">
										<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="arrow tran4s d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-right"></i></a>
										<img src="{{ URL::asset('images/media/img_98.jpg') }}" alt="" class="w-100">
										<div class="hover-content">
											<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="c-name font-recoleta tran3s">Cookie Monstah</a>
											<span class="tran3s">Wedding, Event</span>
										</div> <!-- /.hover-content -->
									</div> <!-- /.img-meta -->
								</div> <!-- /.item -->
							</div> <!-- /.portfolio-slider-one -->
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="portfolio-slider-one mt-30" data-slick='{"autoplaySpeed": 3300}'>
								<div class="item">
									<div class="img-meta">
										<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="arrow tran4s d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-right"></i></a>
										<img src="{{ URL::asset('images/media/img_95.jpg') }}" alt="" class="w-100">
										<div class="hover-content">
											<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="c-name font-recoleta tran3s">Divine Pastabilities</a>
											<span class="tran3s">Wedding, Model</span>
										</div> <!-- /.hover-content -->
									</div> <!-- /.img-meta -->
								</div> <!-- /.item -->
								<div class="item">
									<div class="img-meta">
										<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="arrow tran4s d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-right"></i></a>
										<img src="{{ URL::asset('images/media/img_99.jpg') }}" alt="" class="w-100">
										<div class="hover-content">
											<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="c-name font-recoleta tran3s">The Lockhart Bar</a>
											<span class="tran3s">Health & Wellnes</span>
										</div> <!-- /.hover-content -->
									</div> <!-- /.img-meta -->
								</div> <!-- /.item -->
							</div> <!-- /.portfolio-slider-one -->
						</div>
					</div> <!-- /.row -->
				</div> <!-- /.wrapper -->

				<a href="#services" class="scroll-btn d-flex align-items-center justify-content-center tran3s ripple-btn"><img src="{{ URL::asset('images/icon/icon_73.svg') }}" alt="" width="26"></a>
				<img src="{{ URL::asset('images/shape/shape_58.svg') }}" alt="" class="shapes shape-one">
			</div> <!-- /.portfolio-gallery-one -->
			


			<!-- 
			=============================================
				Vcamp Text Block Fifteen
			============================================== 
			-->
			<div class="vcamp-text-block-fifteen" data-aos="fade-up">
				<h2 class="font-recoleta d-flex flex-wrap justify-content-center d-lg-block">
					<span>Landscape, <a class="fancybox hover-img" data-fancybox="" href="images/media/img_101.jpg" tabindex="-1"><img src="{{ URL::asset('images/media/img_101.jpg') }}" alt="" class="w-100"></a></span>

					<span>Model, <a class="fancybox hover-img" data-fancybox="" href="images/media/img_100.jpg" tabindex="-1"><img src="{{ URL::asset('images/media/img_100.jpg') }}" alt="" class="w-100"></a></span>

					<span>Street, <a class="fancybox hover-img" data-fancybox="" href="images/media/img_102.jpg" tabindex="-1"><img src="{{ URL::asset('images/media/img_102.jpg') }}" alt="" class="w-100"></a></span>

					<span>Product, <a class="fancybox hover-img" data-fancybox="" href="images/media/img_103.jpg" tabindex="-1"><img src="{{ URL::asset('images/media/img_103.jpg') }}" alt="" class="w-100"></a></span>

					<span>Fashion, <a class="fancybox hover-img" data-fancybox="" href="images/media/img_100.jpg" tabindex="-1"><img src="{{ URL::asset('images/media/img_100.jpg') }}" alt="" class="w-100"></a></span>

					<span>Film,<a class="fancybox hover-img" data-fancybox="" href="images/media/img_104.jpg" tabindex="-1"><img src="{{ URL::asset('images/media/img_104.jpg') }}" alt="" class="w-100"></a></span>

					<span>Architecture <a class="fancybox hover-img" data-fancybox="" href="images/media/img_105.jpg" tabindex="-1"><img src="{{ URL::asset('images/media/img_105.jpg') }}" alt="" class="w-100"></a></span>

					<span>Event, <a class="fancybox hover-img" data-fancybox="" href="images/media/img_106.jpg" tabindex="-1"><img src="{{ URL::asset('images/media/img_106.jpg') }}" alt="" class="w-100"></a></span>

					<span>Wedding, <a class="fancybox hover-img" data-fancybox="" href="images/media/img_107.jpg" tabindex="-1"><img src="{{ URL::asset('images/media/img_107.jpg') }}" alt="" class="w-100"></a></span>

					<span>People, <a class="fancybox hover-img" data-fancybox="" href="images/media/img_108.jpg" tabindex="-1"><img src="{{ URL::asset('images/media/img_108.jpg') }}" alt="" class="w-100"></a></span>

					<span>Event, <a class="fancybox hover-img" data-fancybox="" href="images/media/img_106.jpg" tabindex="-1"><img src="{{ URL::asset('images/media/img_106.jpg') }}" alt="" class="w-100"></a></span>

					<span>Food, <a class="fancybox hover-img" data-fancybox="" href="images/media/img_109.jpg" tabindex="-1"><img src="{{ URL::asset('images/media/img_109.jpg') }}" alt="" class="w-100"></a></span>

					<span>Health & Wellnes. <a class="fancybox hover-img" data-fancybox="" href="images/media/img_110.jpg" tabindex="-1"><img src="{{ URL::asset('images/media/img_110.jpg') }}" alt="" class="w-100"></a></span>
				</h2>
			</div> <!-- /.vcamp-text-block-fifteen -->




			<!-- 
			=============================================
				Vcamp Text Block Sixteen
			============================================== 
			-->
			<div class="vcamp-text-block-sixteen mt-225 pb-140 lg-mt-100 md-p0">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-6 ms-auto order-lg-2" data-aos="fade-left">
							<div class="text-wrapper ps-xxl-5">
								<div class="title-style-eleven">
									<h2 class="title">Hi. I’m <br>Rashed Reza</h2>
								</div>
								<div class="quote-wrapper">
									<img src="{{ URL::asset('images/icon/icon_103.svg') }}" alt="" class="icon">
									<p>A passionate <i>photograher</i> who are working in this field for <i>last 10 years.</i> I’m ready to give you my best.</p>
									<img src="{{ URL::asset('images/assets/sign_01.png') }}" alt="" class="sign">
								</div> <!-- /.quote-wrapper -->
							</div> <!-- /.text-wrapper -->
						</div>
						<div class="col-lg-5" data-aos="fade-right">
							<div class="img-wrapper">
								<img src="{{ URL::asset('images/assets/sticker_02.png') }}" alt="" class="brand-logo">
								<img src="{{ URL::asset('images/shape/shape_59.svg') }}" alt="" class="shapes shape-one">
								<div class="img-meta"><img src="{{ URL::asset('images/media/img_111.jpg') }}" alt=""></div>
							</div> <!-- /.img-wrapper -->
						</div>
					</div>
				</div>
				<img src="{{ URL::asset('images/shape/shape_60.svg') }}" alt="" class="shapes shape-two">
			</div> <!-- /.vcamp-text-block-sixteen -->





			<!-- 
			=============================================
				Vcamp Feature Section Thirteen
			============================================== 
			-->
			<div class="vcamp-feature-section-thirteen mt-130 mb-225 lg-mb-120" id="services">
				<div class="box-layout">
					<div class="container">
						<div class="title-style-eleven mb-55">
							<div class="upper-title">MY Services</div>
						</div>
					</div>

					<div class="card-style-thirteen" data-aos="fade-up">
						<div class="container">
							<div class="d-md-flex justify-content-between align-items-center">
								<div class="title-wrapper">
									<img src="{{ URL::asset('images/media/img_112.jpg') }}" alt="" class="hover-img tran3s">
									<h3 class="font-recoleta">Wedding Photography</h3>
									<p>Subtitle of you services here.</p>
								</div> <!-- /.title-wrapper -->
								<a href="#" class="arrow-icon tran3s sm-mt-10"><i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div> <!-- /.card-style-thirteen -->
					<div class="card-style-thirteen" data-aos="fade-up">
						<div class="container">
							<div class="d-md-flex justify-content-between align-items-center">
								<div class="title-wrapper">
									<img src="{{ URL::asset('images/media/img_113.jpg') }}" alt="" class="hover-img tran3s">
									<h3 class="font-recoleta">Event Organiser</h3>
									<p>Subtitle of you services here.</p>
								</div> <!-- /.title-wrapper -->
								<a href="#" class="arrow-icon tran3s sm-mt-10"><i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div> <!-- /.card-style-thirteen -->
					<div class="card-style-thirteen" data-aos="fade-up">
						<div class="container">
							<div class="d-md-flex justify-content-between align-items-center">
								<div class="title-wrapper">
									<img src="{{ URL::asset('images/media/img_114.jpg') }}" alt="" class="hover-img tran3s">
									<h3 class="font-recoleta">Product Marketing</h3>
									<p>Subtitle of you services here.</p>
								</div> <!-- /.title-wrapper -->
								<a href="#" class="arrow-icon tran3s sm-mt-10"><i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div> <!-- /.card-style-thirteen -->
					<div class="card-style-thirteen" data-aos="fade-up">
						<div class="container">
							<div class="d-md-flex justify-content-between align-items-center">
								<div class="title-wrapper">
									<img src="{{ URL::asset('images/media/img_115.jpg') }}" alt="" class="hover-img tran3s">
									<h3 class="font-recoleta">Videography</h3>
									<p>Subtitle of you services here.</p>
								</div> <!-- /.title-wrapper -->
								<a href="#" class="arrow-icon tran3s sm-mt-10"><i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div> <!-- /.card-style-thirteen -->
				</div> <!-- /.box-layout -->
			</div> <!-- /.vcamp-feature-section-thirteen -->



			<!-- 
			=============================================
				Portfolio Gallery Two
			============================================== 
			-->
			<div class="portfolio-gallery-two pb-100 mb-100 sm-mb-40 md-pb-10">
				<div class="main-wrapper">
					<div class="row">
						<div class="col-sm-6">
							<div class="title-style-eleven mb-60" data-aos="fade-up">
								<h2 class="title">My Recent Work.</h2>
							</div>

							<div class="gallery-item mb-100 sm-mb-50" data-aos="fade-up">
								<a class="fancybox hover-img d-block" data-fancybox="" href="images/gallery/img_01.jpg" tabindex="-1"><img src="{{ URL::asset('images/gallery/img_01.jpg') }}" alt="" class="w-100"></a>
								<div class="hover-content">
									<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="c-name font-recoleta tran3s">Shoe Promo</a>
									<span class="tran3s">Product</span>
								</div> <!-- /.hover-content -->
								<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="arrow tran4s">+</a>
							</div> <!-- /.gallery-item -->
							<div class="gallery-item mb-100 sm-mb-50" data-aos="fade-up">
								<a class="fancybox hover-img d-block" data-fancybox="" href="images/gallery/img_03.jpg" tabindex="-1"><img src="{{ URL::asset('images/gallery/img_03.jpg') }}" alt="" class="w-100"></a>
								<div class="hover-content">
									<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="c-name font-recoleta tran3s">Wedding Shot</a>
									<span class="tran3s">Wedding</span>
								</div> <!-- /.hover-content -->
								<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="arrow tran4s">+</a>
							</div> <!-- /.gallery-item -->
						</div>
						<div class="col-sm-6">
							<div class="gallery-item mb-100 sm-mb-50" data-aos="fade-up">
								<a class="fancybox hover-img d-block" data-fancybox="" href="images/gallery/img_02.jpg" tabindex="-1"><img src="{{ URL::asset('images/gallery/img_02.jpg') }}" alt="" class="w-100"></a>
								<div class="hover-content">
									<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="c-name font-recoleta tran3s">Fashion Show</a>
									<span class="tran3s">Fashio, Model</span>
								</div> <!-- /.hover-content -->
								<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="arrow tran4s">+</a>
							</div> <!-- /.gallery-item -->
							<div class="gallery-item mb-100 sm-mb-50" data-aos="fade-up">
								<a class="fancybox hover-img d-block" data-fancybox="" href="images/gallery/img_04.jpg" tabindex="-1"><img src="{{ URL::asset('images/gallery/img_04.jpg') }}" alt="" class="w-100"></a>
								<div class="hover-content">
									<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="c-name font-recoleta tran3s">Jumbo Barger</a>
									<span class="tran3s">Food</span>
								</div> <!-- /.hover-content -->
								<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="arrow tran4s">+</a>
							</div> <!-- /.gallery-item -->
						</div>
					</div>
				</div> <!-- /.main-wrapper -->
				<img src="{{ URL::asset('images/shape/shape_61.svg') }}" alt="" class="shapes shape-one">
			</div> <!-- /.portfolio-gallery-two -->



			<!-- 
			=============================================
				Feedback Section Twelve
			============================================== 
			-->
			<div class="feedback-section-twelve">
				<div class="slider-wrapper">
					<div class="feedback_slider_eight">
						<div class="item">
							<div class="testimonial-block-three text-center tran3s">
								<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_104.svg') }}" alt=""></div>
								<p class="font-recoleta">Having a home based business is  wonderful asset to your life. The problem still stands comes time your business . I know you have looked .</p>
								<h6>Rashed kabir</h6>
							</div> <!-- /.testimonial-block-three -->
						</div>

						<div class="item">
							<div class="testimonial-block-three text-center tran3s">
								<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_104.svg') }}" alt=""></div>
								<p class="font-recoleta">Having a home based business is  wonderful asset to your life. The problem still stands comes time your business . I know you have looked .</p>
								<h6>Rashed kabir</h6>
							</div> <!-- /.testimonial-block-three -->
						</div>

						<div class="item">
							<div class="testimonial-block-three text-center tran3s">
								<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_104.svg') }}" alt=""></div>
								<p class="font-recoleta">Having a home based business is  wonderful asset to your life. The problem still stands comes time your business . I know you have looked .</p>
								<h6>Rashed kabir</h6>
							</div> <!-- /.testimonial-block-three -->
						</div>
						<div class="item">
							<div class="testimonial-block-three text-center tran3s">
								<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_104.svg') }}" alt=""></div>
								<p class="font-recoleta">Having a home based business is  wonderful asset to your life. The problem still stands comes time your business . I know you have looked .</p>
								<h6>Rashed kabir</h6>
							</div> <!-- /.testimonial-block-three -->
						</div>
						
					</div> <!-- /.feedback_slider_eight -->
				</div> <!-- /.slider-wrapper -->
			</div> <!-- /.feedback-section-twelve -->




			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer class="vcamp-footer-five pt-300 lg-pt-100 pb-20">
				<div class="container">
					<div class="row">
						<div class="col-xxl-11 m-auto" data-aos="fade-up">
							<div class="title-style-eleven text-center">
								<div class="upper-title pb-50 lg-pb-20">CONTACT US</div>
								<h2 class="title">Work inquiry, Job oportunities? Send Message.</h2>
							</div>
							<a href="{{ url('pages.support.contactV2') }}" class="arrow d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_105.svg') }}" alt=""></a>
						</div>
					</div>
				</div>
				<div class="bottom-footer text-center text-sm-start mt-300 lg-mt-130">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-sm-4 order-sm-0 mb-15">
								<div class="logo"><a href="{{ url('home.index') }}"><img src="{{ URL::asset('images/logo/vCamp_10.png') }}" alt="" width="37"></a></div>
							</div>
							<div class="col-sm-4 order-sm-2 mb-15">
								<ul class="d-flex justify-content-center justify-content-sm-end style-none social-site">
									<li><a href="#">Fa.</a></li>
									<li><a href="#">Insta.</a></li>
									<li><a href="#">Tw.</a></li>
								</ul>
							</div>
							<div class="col-sm-4 order-sm-1 mb-15">
								<p class="text-center m0">Made with love</p>
							</div>
						</div>
					</div>
				</div>
				<div class="bg"></div>
				<img src="{{ URL::asset('images/media/img_117.jpg') }}" alt="" class="shapes shape-one" data-aos="fade-up" data-aos-delay="100">
				<img src="{{ URL::asset('images/media/img_118.jpg') }}" alt="" class="shapes shape-two" data-aos="fade-up" data-aos-delay="100">
				<img src="{{ URL::asset('images/media/img_119.jpg') }}" alt="" class="shapes shape-three" data-aos="fade-up">
				<img src="{{ URL::asset('images/media/img_120.jpg') }}" alt="" class="shapes shape-four" data-aos="fade-up">
				<img src="{{ URL::asset('images/shape/shape_62.svg') }}" alt="" class="shapes shape-five">
			</footer> <!-- /.vcamp-footer-five -->


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
    	<!-- Animated Headline -->
    	<script src="{{ URL::asset('vendor/animated-headline-master/main.js') }}"></script>

		<!-- Theme js -->
		<script src="{{ URL::asset('js/theme.js') }}"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>