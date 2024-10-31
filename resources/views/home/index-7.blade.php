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
		<div class="h-100">
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
			<header class="theme-main-menu theme-menu-one dark-bg">
				<div class="inner-content">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo"><a href="{{ url('home.index') }}"><img src="{{ URL::asset('images/logo/vCamp_06.svg') }}" alt=""></a></div>
						
						<div class="right-widget d-flex align-items-center">
							<button class="sidebar-nav-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="{{ URL::asset('images/icon/icon_70.svg') }}" alt=""></button>
						</div> <!-- /.right-widget -->
					</div>
				</div> <!-- /.inner-content -->
			</header> <!-- /.theme-main-menu -->



			<!-- 
			=============================================
				One Page Section One
			============================================== 
			-->
			<div class="page-scroll-element-one dark-bg">
				<div class="scroll-bar"><span>Scroll</span></div>
				<div class="social-elemnet">
					<ul class="style-none d-flex align-items-center">
						<li>Follow us</li>
						<li>-</li>
						<li><a href="#" class="tran3s">Fb.</a></li>
						<li>-</li>
						<li><a href="#" class="tran3s">Tw.</a></li>
						<li>-</li>
						<li><a href="#" class="tran3s">Inst.</a></li>
					</ul>
				</div>
				<a href="#" class="chat-icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_69.svg') }}" alt=""></a>

				<div id="page-scroll-container-one">
					<div class="spl-section-one section">
						<div class="section-no">01.</div>
						<div class="container">
							<div class="row align-items-center">
								<div class="col-lg-6">
									<ul class="category-list style-none font-recoleta">
										<li class="active"><span>UI/UX</span></li>
										<li><span>Branding</span></li>
										<li><span>Print</span></li>
										<li><span>Illustration</span></li>
										<li><span>Web</span></li>
									</ul>
								</div>
								<div class="col-lg-5 ms-auto">
									<div id="carouselOne" class="carousel slide carousel-fade" data-bs-ride="carousel">
										<div class="carousel-indicators">
										    <button type="button" data-bs-target="#carouselOne" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
										    <button type="button" data-bs-target="#carouselOne" data-bs-slide-to="1" aria-label="Slide 2"></button>
										    <button type="button" data-bs-target="#carouselOne" data-bs-slide-to="2" aria-label="Slide 3"></button>
										</div>
										<div class="carousel-inner">
										    <div class="carousel-item active">
										    	<a class="d-block" href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}">
													<img src="{{ URL::asset('images/media/img_64.jpg') }}" alt="" class="w-100">
												</a>
										    </div>
										    <div class="carousel-item">
										    	<a class="d-block" href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}">
													<img src="{{ URL::asset('images/media/img_65.jpg') }}" alt="" class="w-100">
												</a>
										    </div>
										    <div class="carousel-item">
										    	<a class="d-block" href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}">
													<img src="{{ URL::asset('images/media/img_66.jpg') }}" alt="" class="w-100">
												</a>
										    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="spl-section-one section">
						<div class="section-no">02.</div>
						<div class="container">
							<div class="row align-items-center">
								<div class="col-lg-6">
									<ul class="category-list style-none font-recoleta">
										<li><span>UI/UX</span></li>
										<li class="active"><span>Branding</span></li>
										<li><span>Print</span></li>
										<li><span>Illustration</span></li>
										<li><span>Web</span></li>
									</ul>
								</div>
								<div class="col-lg-5 ms-auto">
									<div id="carouselTwo" class="carousel slide carousel-fade" data-bs-ride="carousel">
										<div class="carousel-indicators">
										    <button type="button" data-bs-target="#carouselTwo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
										    <button type="button" data-bs-target="#carouselTwo" data-bs-slide-to="1" aria-label="Slide 2"></button>
										    <button type="button" data-bs-target="#carouselTwo" data-bs-slide-to="2" aria-label="Slide 3"></button>
										</div>
										<div class="carousel-inner">
										    <div class="carousel-item active">
										    	<a class="d-block" href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}">
													<img src="{{ URL::asset('images/media/img_66.jpg') }}" alt="" class="w-100">
												</a>
										    </div>
										    <div class="carousel-item">
										    	<a class="d-block" href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}">
													<img src="{{ URL::asset('images/media/img_65.jpg') }}" alt="" class="w-100">
												</a>
										    </div>
										    <div class="carousel-item">
										    	<a class="d-block" href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}">
													<img src="{{ URL::asset('images/media/img_64.jpg') }}" alt="" class="w-100">
												</a>
										    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="spl-section-one section">
						<div class="section-no">03.</div>
						<div class="container">
							<div class="row align-items-center">
								<div class="col-lg-6">
									<ul class="category-list style-none font-recoleta">
										<li><span>UI/UX</span></li>
										<li><span>Branding</span></li>
										<li class="active"><span>Print</span></li>
										<li><span>Illustration</span></li>
										<li><span>Web</span></li>
									</ul>
								</div>
								<div class="col-lg-5 ms-auto">
									<div id="carouselThree" class="carousel slide carousel-fade" data-bs-ride="carousel">
										<div class="carousel-indicators">
										    <button type="button" data-bs-target="#carouselThree" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
										    <button type="button" data-bs-target="#carouselThree" data-bs-slide-to="1" aria-label="Slide 2"></button>
										    <button type="button" data-bs-target="#carouselThree" data-bs-slide-to="2" aria-label="Slide 3"></button>
										</div>
										<div class="carousel-inner">
										    <div class="carousel-item active">
										    	<a class="d-block" href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}">
													<img src="{{ URL::asset('images/media/img_65.jpg') }}" alt="" class="w-100">
												</a>
										    </div>
										    <div class="carousel-item">
										    	<a class="d-block" href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}">
													<img src="{{ URL::asset('images/media/img_64.jpg') }}" alt="" class="w-100">
												</a>
										    </div>
										    <div class="carousel-item">
										    	<a class="d-block" href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}">
													<img src="{{ URL::asset('images/media/img_66.jpg') }}" alt="" class="w-100">
												</a>
										    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="spl-section-one section">
						<div class="section-no">04.</div>
						<div class="container">
							<div class="row align-items-center">
								<div class="col-lg-6">
									<ul class="category-list style-none font-recoleta">
										<li><span>UI/UX</span></li>
										<li><span>Branding</span></li>
										<li><span>Print</span></li>
										<li class="active"><span>Illustration</span></li>
										<li><span>Web</span></li>
									</ul>
								</div>
								<div class="col-lg-5 ms-auto">
									<div id="carouselFour" class="carousel slide carousel-fade" data-bs-ride="carousel">
										<div class="carousel-indicators">
										    <button type="button" data-bs-target="#carouselFour" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
										    <button type="button" data-bs-target="#carouselFour" data-bs-slide-to="1" aria-label="Slide 2"></button>
										    <button type="button" data-bs-target="#carouselFour" data-bs-slide-to="2" aria-label="Slide 3"></button>
										</div>
										<div class="carousel-inner">
										    <div class="carousel-item active">
										    	<a class="d-block" href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}">
													<img src="{{ URL::asset('images/media/img_66.jpg') }}" alt="" class="w-100">
												</a>
										    </div>
										    <div class="carousel-item">
										    	<a class="d-block" href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}">
													<img src="{{ URL::asset('images/media/img_65.jpg') }}" alt="" class="w-100">
												</a>
										    </div>
										    <div class="carousel-item">
										    	<a class="d-block" href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}">
													<img src="{{ URL::asset('images/media/img_64.jpg') }}" alt="" class="w-100">
												</a>
										    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="spl-section-one section">
						<div class="section-no">05.</div>
						<div class="container">
							<div class="row align-items-center">
								<div class="col-lg-6">
									<ul class="category-list style-none font-recoleta">
										<li><span>UI/UX</span></li>
										<li><span>Branding</span></li>
										<li><span>Print</span></li>
										<li><span>Illustration</span></li>
										<li class="active"><span>Web</span></li>
									</ul>
								</div>
								<div class="col-lg-5 ms-auto">
									<div id="carouselFive" class="carousel slide carousel-fade" data-bs-ride="carousel">
										<div class="carousel-indicators">
										    <button type="button" data-bs-target="#carouselFive" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
										    <button type="button" data-bs-target="#carouselFive" data-bs-slide-to="1" aria-label="Slide 2"></button>
										    <button type="button" data-bs-target="#carouselFive" data-bs-slide-to="2" aria-label="Slide 3"></button>
										</div>
										<div class="carousel-inner">
										    <div class="carousel-item active">
										    	<a class="d-block" href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}">
													<img src="{{ URL::asset('images/media/img_64.jpg') }}" alt="" class="w-100">
												</a>
										    </div>
										    <div class="carousel-item">
										    	<a class="d-block" href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}">
													<img src="{{ URL::asset('images/media/img_65.jpg') }}" alt="" class="w-100">
												</a>
										    </div>
										    <div class="carousel-item">
										    	<a class="d-block" href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}">
													<img src="{{ URL::asset('images/media/img_66.jpg') }}" alt="" class="w-100">
												</a>
										    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.page-scroll-element-one -->





		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="{{ URL::asset('vendor/jquery.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<!-- Fullpage Scroll -->
		<script src="{{ URL::asset('vendor/fullScroll/jquery.pagepiling.min.js') }}"></script>
		<!-- Fancybox -->
		<script src="{{ URL::asset('vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>

		<!-- Theme js -->
		<script src="{{ URL::asset('js/theme.js') }}"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>