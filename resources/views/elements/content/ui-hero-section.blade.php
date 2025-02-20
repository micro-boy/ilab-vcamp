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
			<header class="theme-main-menu sticky-menu theme-menu-one white-vr position-absolute">
				<div class="inner-content">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo"><a href="{{ url('home.index') }}"><img src="{{ URL::asset('images/logo/vCamp_04.png') }}" alt="" width="127"></a></div>
						
						<div class="right-widget d-flex align-items-center">
							<a href="{{ url('shop.sign-in') }}" class="d-flex align-items-center login-btn">
								<img src="{{ URL::asset('images/icon/icon_44.svg') }}" alt="">
								<span>login</span>
							</a>
							<button class="sidebar-nav-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="{{ URL::asset('images/icon/icon_45.svg') }}" alt=""></button>
						</div> <!-- /.right-widget -->
					</div>
				</div> <!-- /.inner-content -->
			</header> <!-- /.theme-main-menu -->


			


			<!-- 
			=============================================
				Theme Hero Banner
			============================================== 
			-->
			<div class="hero-banner-nine">
				<div class="social-elemnet">
					<ul class="style-none d-flex align-items-center">
						<li><a href="#" class="tran3s">Fb.</a></li>
						<li><a href="#" class="tran3s">Tw.</a></li>
						<li><a href="#" class="tran3s">Inst.</a></li>
					</ul>
				</div>
				<div class="scroll-bar"><span>Scroll</span></div>
				<div class="hero_slider_three">
					<div class="item">
						<div class="bg-wrapper d-flex align-items-center justify-content-center" style="background-image:url(images/media/img_72.jpg);">
							<div class="container">
								<div class="row">
									<div class="col-xxl-8 col-xl-10 col-md-8 m-auto">
										<div class="text-wrapper text-center">
											<h1 class="hero-heading font-recoleta">Build your <span>brand</span> is simple.</h1>
											<p class="hero-sub-heading text-lg">Get the care you need from the professionals who are in their field </p>
											<a class="fancybox video-icon d-flex align-items-center justify-content-center" data-fancybox="" href="https://www.youtube.com/embed/aXFSJTjVjw0" tabindex="0">
												<img src="{{ URL::asset('images/icon/icon_41.svg') }}" alt="">
											</a>
										</div> <!-- /.text-wrapper -->
									</div>
								</div>
							</div>
							<div class="section-no">01.</div>
						</div> <!-- /.bg-wrapper -->
					</div>
					<div class="item">
						<div class="bg-wrapper d-flex align-items-center justify-content-center" style="background-image:url(images/media/img_73.jpg);">
							<div class="container">
								<div class="row">
									<div class="col-xxl-8 col-xl-10 col-md-8 m-auto">
										<div class="text-wrapper text-center">
											<h1 class="hero-heading font-recoleta">Get qulity <span>leads</span> is simple.</h1>
											<p class="hero-sub-heading text-lg">Get the care you need from the professionals who are in their field </p>
											<a class="fancybox video-icon d-flex align-items-center justify-content-center" data-fancybox="" href="https://www.youtube.com/embed/aXFSJTjVjw0" tabindex="0">
												<img src="{{ URL::asset('images/icon/icon_41.svg') }}" alt="">
											</a>
										</div> <!-- /.text-wrapper -->
									</div>
								</div>
							</div>
							<div class="section-no">02.</div>
						</div> <!-- /.bg-wrapper -->
					</div>
				</div> <!-- /.hero_slider_three -->
			</div> <!-- /.hero-banner-nine -->




			<!-- 
			=============================================
				Theme Hero Banner
			============================================== 
			-->
			<div class="hero-banner-one mt-225 md-mt-140 mb-150 md-mb-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-8">
							<h1 class="hero-heading font-recoleta theme-mb-0">We’r the <span class="d-inline-block position-relative">Word<em>Press</em></span> guru.</h1>
							<p class="hero-sub-heading text-lg">We are helping client to create WordPress websites with our talented expert.</p>
							<form action="#">
								<input type="email" placeholder="ihidago@ujufidnan.gov">
								<button>Try free demo</button>
							</form>
							<p class="term-text theme-mb-0">Already a member? <a href="{{ url('shop.sign-in') }}">Sign in.</a></p>
						</div>
					</div>
				</div>

				<div class="illustration-container">
					<img src="{{ URL::asset('images/assets/ils_01.svg') }}" alt="" class="m-auto">
				</div> <!-- /.illustration-container -->
			</div> <!-- /.hero-banner-one -->



			<!-- 
			=============================================
				Theme Hero Banner
			============================================== 
			-->
			<div class="hero-banner-ten">
				<div class="d-flex align-items-center justify-content-center h-100">
					<div class="container">
						<div class="row justify-content-between align-items-center">
							<div class="col-xxl-6 col-xl-7 col-lg-6">
								<h1 class="hero-heading font-recoleta">Get <span>qulity</span> experience & service.</h1>
								<p class="hero-sub-heading pe-xl-5">We've done it carefully and simply. Combined with the ingredients makes for beautiful landings.</p>
								<ul class="style-none button-group">
									<li><a href="#" class="btn-one">Get Started</a></li>
									<li><a href="#" class="btn-two">Learn More…</a></li>
								</ul>
							</div>
							<div class="col-xl-5 col-lg-6">
								<div class="form-style-four md-mt-40">
									<h3>Ready to Fly? Start your free trial today!</h3>
									<form action="inc/contact.php" id="contact-form"  data-toggle="validator">
										<div class="messages"></div>
										<div class="row controls">
											<div class="col-12">
												<div class="input-group-meta form-group mb-25">
													<label>Name*</label>
													<input type="text" placeholder="Rashed" name="name" required="required" data-error="Name is required.">
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta form-group mb-15">
													<label>Email*</label>
													<input type="email" placeholder="rshdkabir@gmail.com" name="email" required="required" data-error="Valid email is required.">
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="col-12 mb-15">
												<div class="agreement-checkbox">
													<input type="checkbox" id="agree_to_policy">
													<label for="agree_to_policy">Agree & Accept our <a href="#">Terms & Policy</a></label>
												</div>
											</div>
											<div class="col-12"><button class="theme-btn-one ripple-btn">Send Message</button></div>
										</div>
									</form>
								</div> <!-- /.form-style-four -->
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.hero-banner-ten -->




			<!-- 
			=============================================
				Theme Hero Banner
			============================================== 
			-->
			<div class="hero-banner-eight">
				<div class="social-elemnet">
					<ul class="style-none d-flex align-items-center">
						<li><a href="#" class="tran3s">Fb.</a></li>
						<li><a href="#" class="tran3s">Tw.</a></li>
						<li><a href="#" class="tran3s">Inst.</a></li>
					</ul>
				</div>
				<div class="scroll-bar"></div>
				
				<div class="banner-content h-100 d-md-flex align-items-center justify-content-between">
					<div class="text-wrapper">
						<h1 class="hero-heading">Boston Consulting Group.</h1>
						<p class="hero-sub-heading text-lg">We are helping client to create WordPress websites with our talented expert.</p>
						<a href="{{ url('pages.support.contactV3') }}" class="theme-btn-eleven ripple-btn">Consult with an exprt now!</a>
						<p class="term-text">Already a member? <a href="{{ url('shop.sign-in') }}">Sign in.</a></p>
					</div> <!-- /.text-wrapper -->

					<div class="img-wrapper position-relative">
						<img src="{{ URL::asset('images/media/img_69.png') }}" alt="">
					</div>
				</div> <!-- /.banner-content -->
			</div> <!-- /.hero-banner-eight -->





			<!-- 
			=============================================
				Theme Hero Banner
			============================================== 
			-->
			<div class="hero-banner-seven">
				<div class="main-content">
					<div class="row justify-content-between align-items-start">
						<div class="col-xl-6 col-lg-8 col-md-8 ms-auto me-auto order-xl-2">
							<h1 class="title cd-headline rotate-1 lg-mb-60">
						    	<span>Being <span class="line-shape">founder</span> takes</span> guts.
						      	<!-- <span class="cd-words-wrapper">
						         	<b class="is-visible">guts.</b>
						         	<b>risk.</b>
						      	</span> -->
						   </h1>
						</div>
						<div class="col-xl-3 col-lg-5 col-sm-6 order-xl-1">
							<div class="img-meta-card d-flex flex-column">
								<img src="{{ URL::asset('images/media/img_67.png') }}" alt="">
								<p>We are Bams Founders <span>VC firm</span> & building companies in Emerging markets.</p>
							</div>
						</div>
						<div class="col-xl-3 col-lg-5 col-sm-6 order-xl-3">
							<div class="img-meta-card d-flex flex-sm-column-reverse flex-column">
								<img src="{{ URL::asset('images/media/img_68.png') }}" alt="">
								<p>We are Bams Founders lorem <span>a vCamp firm</span> Backing iq and building  companies dsu in Emerging markets.</p>
							</div>
						</div>
					</div>
				</div> <!-- /.main-content -->
				<a href="#about" class="scroll-btn"><img src="{{ URL::asset('images/icon/icon_73.svg') }}" alt=""></a>
			</div> <!-- /.hero-banner-seven -->




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