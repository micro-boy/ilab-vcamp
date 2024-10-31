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
			<!--<div class="offcanvas offcanvas-end sidebar-nav" tabindex="-1" id="offcanvasRight">
				<div class="offcanvas-header">
				    <div class="logo"><a href="{{ url('home.index') }}"><img src="{{ URL::asset('images/logo/vCamp_01.png') }}" alt="" width="127"></a></div>
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
			</div>--> <!-- /.sidebar-nav -->


			<!-- 
			=============================================
				Theme Main Menu
			============================================== 
			-->
			<header class="theme-main-menu sticky-menu theme-menu-one">
				<div class="inner-content">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo"><a href="{{ url('home.index') }}"><img src="{{ URL::asset('images/logo/vCamp_01.png') }}" alt="" width="127"></a></div>
						<nav class="navbar navbar-expand-lg">
							<button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						    	<span></span>
						 	</button>
						    <div class="collapse navbar-collapse" id="navbarNav">
						    	<ul class="navbar-nav">
						    		<li class="d-block d-lg-none"><div class="logo"><a href="{{ url('home.index') }}"><img src="{{ URL::asset('images/logo/vCamp_01.png') }}" alt="" width="127"></a></div></li>
							        <li class="nav-item active dropdown mega-dropdown">
							        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Beranda</a>
							        	<!--<ul class="dropdown-menu">
							                <li class="pb-20">
							                	<div class="row gx-2">
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home02.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index') }}" class="dropdown-item"><span>Creative Agency</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-2') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home01.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-2') }}" class="dropdown-item"><span>Business</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-3') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home03.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-3') }}" class="dropdown-item"><span>Agency Minimal</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-4') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home04.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-4') }}" class="dropdown-item"><span>Service Provider</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-5') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home05.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-5') }}" class="dropdown-item"><span>Startup</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-6') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home06.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-6') }}" class="dropdown-item"><span>Design Studio Light</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-7') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home07.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-7') }}" class="dropdown-item"><span>Design Studio Dark</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-8') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home08.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-8') }}" class="dropdown-item"><span>Shop Standard</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-9') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home09.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-9') }}" class="dropdown-item"><span>Shop Creative</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-10') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home10.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-10') }}" class="dropdown-item"><span>Startup Agency</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-11') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home11.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-11') }}" class="dropdown-item"><span>Consulting Agency</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-12') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home13.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-12') }}" class="dropdown-item"><span>Photographer Portfolio</span><i class="tag">New</i></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-13') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home14.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-13') }}" class="dropdown-item"><span>Designer Portfolio</span><i class="tag">New</i></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-14') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home15.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-14') }}" class="dropdown-item"><span>Marketing Agency</span><i class="tag">New</i></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-15') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home18.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-15') }}" class="dropdown-item"><span>Design Agency Portfolio</span><i class="tag">New</i></a>
							                		</div>
													<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-16') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home16.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-16') }}" class="dropdown-item"><span>Startup Modern</span><i class="tag">New</i></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.coming-soon') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home12.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.coming-soon') }}" class="dropdown-item"><span>Coming Soon</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<div class="d-block img-meta">
							                				<img src="{{ URL::asset('images/nav-img/home17.jpg') }}" alt="" class="tran4s">
							                				<div class="cs d-flex align-items-center justify-content-center"><span>Coming Soon</span></div>
							                			</div>
							                			<div class="dropdown-item"><span>Business</span></div>
							                		</div>
							                	</div>
							                </li>
						                </ul>-->
						            </li>
						            <li class="nav-item dropdown mega-dropdown">
							        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Fasilitas</a>
						                <!--<ul class="dropdown-menu">
							                <li>
							                	<div class="row">
							                		<div class="col-lg-3">
							                			<div class="menu-column">
							                				<h6 class="mega-menu-title">Headers</h6>
							                				<ul class="style-none mega-dropdown-list">
							                					<li><a href="{{ url('elements.headers.ui-headerV1') }}" class="dropdown-item"><span>Basic Header</span></a></li>
							                					<li><a href="{{ url('elements.headers.ui-headerV2') }}" class="dropdown-item"><span>Basic Dark Header</span></a></li>
							                					<li><a href="{{ url('elements.headers.ui-headerV3') }}" class="dropdown-item"><span>Classic light Header</span></a></li>
							                					<li><a href="{{ url('elements.headers.ui-headerV4') }}" class="dropdown-item"><span>Classic Dark Header</span></a></li>
							                					<li><a href="{{ url('elements.headers.ui-headerV5') }}" class="dropdown-item"><span>eCommerce Light Header</span></a></li>
							                					<li><a href="{{ url('elements.headers.ui-headerV6') }}" class="dropdown-item"><span>eCommerce Dark Header</span></a></li>
							                					<li><a href="{{ url('elements.headers.ui-headerV7') }}" class="dropdown-item"><span>Center Logo Header</span></a></li>
							                					<li><a href="{{ url('elements.headers.ui-headerV8') }}" class="dropdown-item"><span>Search Input Header</span></a></li>
							                					<li><a href="{{ url('elements.headers.ui-headerV9') }}" class="dropdown-item"><span>Search Popup Header</span></a></li>
							                				</ul>
							                			</div>
							                		</div>
							                		<div class="col-lg-3">
							                			<div class="menu-column">
							                				<h6 class="mega-menu-title">BASIC</h6>
							                				<ul class="style-none mega-dropdown-list">
							                					<li><a href="{{ url('elements.basic.ui-menuV1') }}" class="dropdown-item"><span>Full Screen Menu</span></a></li>
							                					<li><a href="{{ url('elements.basic.ui-menuV2') }}" class="dropdown-item"><span>Full Screen Menu Dark</span></a></li>
							                					<li><a href="{{ url('elements.basic.ui-menuV3') }}" class="dropdown-item"><span>Dark Dropdown Menu</span></a></li>
							                					<li><a href="{{ url('elements.basic.ui-menuV4') }}" class="dropdown-item"><span>Icon Menu</span></a></li>
							                					<li><a href="{{ url('elements.basic.ui-animated-text') }}" class="dropdown-item"><span>Animated Text</span></a></li>
							                					<li><a href="{{ url('elements.basic.ui-blog-post') }}" class="dropdown-item"><span>Blog Post</span></a></li>
							                					<li><a href="{{ url('elements.basic.ui-button') }}" class="dropdown-item"><span>Buttons</span></a></li>
							                					<li><a href="{{ url('elements.basic.ui-contact') }}" class="dropdown-item"><span>Contact Us</span></a></li>
							                				</ul>
							                			</div>
							                		</div>
							                		<div class="col-lg-3">
							                			<div class="menu-column">
							                				<h6 class="mega-menu-title">Essential</h6>
							                				<ul class="style-none mega-dropdown-list">
							                					<li><a href="{{ url('elements.essential.ui-counter') }}" class="dropdown-item"><span>Counter</span></a></li>
							                					<li><a href="{{ url('elements.essential.ui-cta') }}" class="dropdown-item"><span>Call To Action</span></a></li>
							                					<li><a href="{{ url('elements.essential.ui-faq') }}" class="dropdown-item"><span>FAQ's</span></a></li>
							                					<li><a href="{{ url('elements.essential.ui-feature-block') }}" class="dropdown-item"><span>Feature Block</span></a></li>
							                					<li><a href="{{ url('elements.essential.ui-footer') }}" class="dropdown-item"><span>Footers</span></a></li>
							                					<li><a href="{{ url('elements.essential.ui-form') }}" class="dropdown-item"><span>Forms</span></a></li>
							                					<li><a href="{{ url('elements.essential.ui-gallery') }}" class="dropdown-item"><span>Gallery</span></a></li>
							                					<li><a href="{{ url('elements.essential.ui-heading') }}" class="dropdown-item"><span>Heading</span></a></li>
							                				</ul>
							                			</div>
							                		</div>
							                		<div class="col-lg-3">
							                			<div class="menu-column">
							                				<h6 class="mega-menu-title">Content</h6>
							                				<ul class="style-none mega-dropdown-list">
							                					<li><a href="{{ url('elements.content.ui-hero-section') }}" class="dropdown-item"><span>Hero Section</span></a></li>
							                					<li><a href="{{ url('elements.content.ui-list-item') }}" class="dropdown-item"><span>List Item</span></a></li>
							                					<li><a href="{{ url('elements.content.ui-pagination') }}" class="dropdown-item"><span>Pagination</span></a></li>
							                					<li><a href="{{ url('elements.content.ui-service') }}" class="dropdown-item"><span>Service Feature</span></a></li>
							                					<li><a href="{{ url('elements.content.ui-subscribe-form') }}" class="dropdown-item"><span>Subscribe Form</span></a></li>
							                					<li><a href="{{ url('elements.content.ui-team') }}" class="dropdown-item"><span>Team Member</span></a></li>
							                					<li><a href="{{ url('elements.content.ui-testimonial') }}" class="dropdown-item"><span>Testimonial</span></a></li>
							                					<li><a href="{{ url('elements.content.ui-text-block') }}" class="dropdown-item"><span>Text Block</span></a></li>
							                				</ul>
							                			</div>
							                		</div>
							                	</div>
							                </li>
						                </ul>-->
						            </li>
							        <li class="nav-item dropdown mega-dropdown">
							        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Katalog</a>
						                <!--<ul class="dropdown-menu">
							                <li>
							                	<div class="row justify-content-between">
							                		<div class="col-lg-2">
							                			<div class="menu-column">
							                				<h6 class="mega-menu-title">Boxed Layout</h6>
							                				<ul class="style-none mega-dropdown-list">
							                					<li><a href="{{ url('portfolio.boxed_layout.portfolioV1') }}" class="dropdown-item"><span>Portfolio Classic</span></a></li>
							                					<li><a href="{{ url('portfolio.boxed_layout.portfolioV4') }}" class="dropdown-item"><span>Portfolio Overlay</span></a></li>
							                					<li><a href="{{ url('portfolio.boxed_layout.portfolioV7') }}" class="dropdown-item"><span>Portfolio Modern</span></a></li>
							                					<li><a href="{{ url('portfolio.boxed_layout.portfolioV10') }}" class="dropdown-item"><span>Portfolio Standard</span></a></li>
							                					<li><a href="{{ url('portfolio.boxed_layout.portfolioV13') }}" class="dropdown-item"><span>Portfolio Video Lightbox</span></a></li>
							                					<li><a href="{{ url('portfolio.boxed_layout.portfolioV16') }}" class="dropdown-item"><span>Portfolio Metro</span></a></li>
							                					<li><a href="{{ url('portfolio.boxed_layout.portfolioV18') }}" class="dropdown-item"><span>Portfolio Masonry</span></a></li>
							                					<li><a href="{{ url('portfolio.boxed_layout.portfolioV23') }}" class="dropdown-item"><span>Portfolio Masonry 2</span></a></li>
							                					<li><a href="{{ url('portfolio.boxed_layout.portfolioV24') }}" class="dropdown-item"><span>Portfolio carousel</span></a></li>
							                				</ul>
							                			</div>
							                		</div>
							                		<div class="col-lg-2">
							                			<div class="menu-column">
							                				<h6 class="mega-menu-title d-none d-lg-inline-block">Boxed Layout</h6>
							                				<ul class="style-none mega-dropdown-list">
							                					<li><a href="{{ url('portfolio.boxed_layout.portfolioV26') }}" class="dropdown-item"><span>Portfolio carousel 2</span></a></li>
							                					<li><a href="{{ url('portfolio.boxed_layout.portfolioV27') }}" class="dropdown-item"><span>Portfolio carousel 3</span></a></li>
							                					<li><a href="{{ url('portfolio.boxed_layout.portfolioV28') }}" class="dropdown-item"><span>Portfolio carousel 4</span></a></li>
							                					<li><a href="{{ url('portfolio.boxed_layout.portfolioV30') }}" class="dropdown-item"><span>Portfolio 1 Column</span></a></li>
							                					<li><a href="{{ url('portfolio.boxed_layout.portfolioV31') }}" class="dropdown-item"><span>Portfolio 2 Column</span></a></li>
							                					<li><a href="{{ url('portfolio.boxed_layout.portfolioV32') }}" class="dropdown-item"><span>Portfolio 3 Column</span></a></li>
							                					<li><a href="{{ url('portfolio.boxed_layout.portfolioV33') }}" class="dropdown-item"><span>Portfolio 4 Column</span></a></li>
							                					<li><a href="{{ url('portfolio.boxed_layout.portfolioV34') }}" class="dropdown-item"><span>Portfolio 5 Column</span></a></li>
							                				</ul>
							                			</div>
							                		</div>
							                		<div class="col-lg-2">
							                			<div class="menu-column">
							                				<h6 class="mega-menu-title">Full-width Layout</h6>
							                				<ul class="style-none mega-dropdown-list">
							                					<li><a href="{{ url('portfolio.full-width_layout.portfolioV2') }}" class="dropdown-item"><span>Portfolio Classic</span></a></li>
							                					<li><a href="{{ url('portfolio.full-width_layout.portfolioV5') }}" class="dropdown-item"><span>Portfolio Overlay</span></a></li>
							                					<li><a href="{{ url('portfolio.full-width_layout.portfolioV8') }}" class="dropdown-item"><span>Portfolio Modern</span></a></li>
							                					<li><a href="{{ url('portfolio.full-width_layout.portfolioV11') }}" class="dropdown-item"><span>Portfolio Standard</span></a></li>
							                					<li><a href="{{ url('portfolio.full-width_layout.portfolioV14') }}" class="dropdown-item"><span>Portfolio Video Lightbox</span></a></li>
							                					<li><a href="{{ url('portfolio.full-width_layout.portfolioV20') }}" class="dropdown-item"><span>Portfolio With Sidebar</span></a></li>
							                					<li><a href="{{ url('portfolio.full-width_layout.portfolioV22') }}" class="dropdown-item"><span>Portfolio Masonry</span></a></li>
							                					<li><a href="{{ url('portfolio.full-width_layout.portfolioV29') }}" class="dropdown-item"><span>Portfolio carousel</span></a></li>
							                					<li><a href="{{ url('portfolio.full-width_layout.portfolioV35') }}" class="dropdown-item"><span>Portfolio Creative</span></a></li>
							                				</ul>
							                			</div>
							                		</div>
							                		<div class="col-lg-2">
							                			<div class="menu-column">
							                				<h6 class="mega-menu-title">Dark Layout</h6>
							                				<ul class="style-none mega-dropdown-list">
							                					<li><a href="{{ url('portfolio.dark_layout.portfolioV3') }}" class="dropdown-item"><span>Portfolio Classic</span></a></li>
							                					<li><a href="{{ url('portfolio.dark_layout.portfolioV6') }}" class="dropdown-item"><span>Portfolio Overlay</span></a></li>
							                					<li><a href="{{ url('portfolio.dark_layout.portfolioV9') }}" class="dropdown-item"><span>Portfolio Modern</span></a></li>
							                					<li><a href="{{ url('portfolio.dark_layout.portfolioV12') }}" class="dropdown-item"><span>Portfolio Standard</span></a></li>
							                					<li><a href="{{ url('portfolio.dark_layout.portfolioV15') }}" class="dropdown-item"><span>Portfolio Video Lightbox</span></a></li>
							                					<li><a href="{{ url('portfolio.dark_layout.portfolioV17') }}" class="dropdown-item"><span>Portfolio Metro</span></a></li>
							                					<li><a href="{{ url('portfolio.dark_layout.portfolioV19') }}" class="dropdown-item"><span>Portfolio Masonry</span></a></li>
							                					<li><a href="{{ url('portfolio.dark_layout.portfolioV21') }}" class="dropdown-item"><span>Portfolio With Sidebar</span></a></li>
							                					<li><a href="{{ url('portfolio.dark_layout.portfolioV25') }}" class="dropdown-item"><span>Portfolio carousel</span></a></li>
							                				</ul>
							                			</div>
							                		</div>
							                		<div class="col-lg-2">
							                			<div class="menu-column">
							                				<h6 class="mega-menu-title">Single Portfolio</h6>
							                				<ul class="style-none mega-dropdown-list">
							                					<li><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV1') }}" class="dropdown-item"><span>Single Portfolio 01</span></a></li>
							                					<li><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}" class="dropdown-item"><span>Single Portfolio 02</span></a></li>
							                					<li><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV3') }}" class="dropdown-item"><span>Single Portfolio 03</span></a></li>
							                					<li><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV4') }}" class="dropdown-item"><span>Single Portfolio 04</span></a></li>
							                					<li><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="dropdown-item"><span>Single Portfolio 05</span></a></li>
							                					<li><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV6') }}" class="dropdown-item"><span>Single Portfolio 06</span></a></li>
							                				</ul>
							                			</div>
							                		</div>
							                	</div>
							                </li>
						                </ul>-->
						            </li>
						            <li class="nav-item dropdown mega-dropdown-md">
							        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Berita</a>
						                <!--<ul class="dropdown-menu">
							                <li>
							                	<div class="row">
							                		<div class="col-lg-4">
							                			<div class="menu-column">
							                				<h6 class="mega-menu-title">Essential</h6>
							                				<ul class="style-none mega-dropdown-list">
							                					<li><a href="{{ url('pages.essential.about-usV1') }}" class="dropdown-item"><span>About Minimal</span></a></li>
										            			<li><a href="{{ url('pages.essential.about-usV2') }}" class="dropdown-item"><span>About Classic</span></a></li>
										            			<li><a href="{{ url('pages.essential.teamV1') }}" class="dropdown-item"><span>Team Standard</span></a></li>
										            			<li><a href="{{ url('pages.essential.teamV2') }}" class="dropdown-item"><span>Team Classic: Dark</span></a></li>
										            			<li><a href="{{ url('pages.essential.pricingV1') }}" class="dropdown-item"><span>Pricing Standard</span></a></li>
										            			<li><a href="{{ url('pages.essential.pricingV2') }}" class="dropdown-item"><span>Pricing Standard: Dark</span></a></li>
							                				</ul>
							                			</div>
							                		</div>
							                		<div class="col-lg-4">
							                			<div class="menu-column">
							                				<h6 class="mega-menu-title">Support</h6>
							                				<ul class="style-none mega-dropdown-list">
							                					<li><a href="{{ url('pages.support.contactV1') }}" class="dropdown-item"><span>Contact Business</span></a></li>
										            			<li><a href="{{ url('pages.support.contactV2') }}" class="dropdown-item"><span>Contact Agency</span></a></li>
										            			<li><a href="{{ url('pages.support.contactV3') }}" class="dropdown-item"><span>Contact Standard</span></a></li>
										            			<li><a href="{{ url('pages.support.serviceV1') }}" class="dropdown-item"><span>Service Minimal</span></a></li>
										            			<li><a href="{{ url('pages.support.serviceV3') }}" class="dropdown-item"><span>Service Minimal: Dark</span></a></li>
										            			<li><a href="{{ url('pages.support.serviceV2') }}" class="dropdown-item"><span>Service Classic</span></a></li>
							                				</ul>
							                			</div>
							                		</div>
							                		<div class="col-lg-4">
							                			<div class="menu-column">
							                				<h6 class="mega-menu-title">Others</h6>
							                				<ul class="style-none mega-dropdown-list">
							                					<li><a href="{{ url('pages.other.testimonialV1') }}" class="dropdown-item"><span>Testimonial Classic</span></a></li>
										            			<li><a href="{{ url('pages.other.testimonialV2') }}" class="dropdown-item"><span>Testimonial Standard</span></a></li>
										            			<li><a href="{{ url('pages.other.testimonialV3') }}" class="dropdown-item"><span>Testimonial Basic: Dark</span></a></li>
							                					<li><a href="{{ url('pages.other.faqV1') }}" class="dropdown-item"><span>Faq Standard</span></a></li>
							                					<li><a href="{{ url('pages.other.faqV2') }}" class="dropdown-item"><span>Faq With filter</span></a></li>
							                					<li><a href="{{ url('pages.error.404') }}" class="dropdown-item"><span>404 Error</span></a></li>
							                				</ul>
							                			</div>
							                		</div>
							                	</div>
							                </li>
						                </ul>-->
						            </li>
						            <li class="nav-item dropdown">
							        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Layanan</a>
						                <ul class="dropdown-menu">
						                	<!--<li class="dropdown-submenu dropdown">
							                	<a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Shop Elements</span></a>
							                	<ul class="dropdown-menu">
									            	<li><a href="{{ url('shop.product-detailsV1') }}" class="dropdown-item"><span>Shop Details</span></a></li>
										            <li><a href="{{ url('shop.checkout') }}" class="dropdown-item"><span>Checkout</span></a></li>
										            <li><a href="{{ url('shop.cart') }}" class="dropdown-item"><span>Cart</span></a></li>
										            <li><a href="{{ url('shop.sign-in') }}" class="dropdown-item"><span>Sign In</span></a></li>
										            <li><a href="{{ url('shop.sign-up') }}" class="dropdown-item"><span>Sign Up</span></a></li>
									            </ul>
							                </li>-->
							                <li><a href="{{ url('home.index-5') }}" class="dropdown-item"><span>Pendidikan</span></a></li>
							                <li><a href="{{ url('home.index-5') }}" class="dropdown-item"><span>Penelitian</span></a></li>
							                <li><a href="{{ url('home.index-5') }}" class="dropdown-item"><span>Pengujian</span></a></li>
						                </ul>
						            </li>
							        <li class="nav-item dropdown">
							        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Pengumuman</a>
						                <!--<ul class="dropdown-menu">
							                <li><a href="{{ url('blog.blogV1') }}" class="dropdown-item"><span>Grid Layout</span></a></li>
							                <li><a href="{{ url('blog.blogV2') }}" class="dropdown-item"><span>Grid Dark Layout</span></a></li>
							                <li><a href="{{ url('blog.blogV3') }}" class="dropdown-item"><span>List With Sidebar</span></a></li>
							                <li><a href="{{ url('blog.blogV4') }}" class="dropdown-item"><span>Full Width Dark</span></a></li>
							                <li class="dropdown-submenu dropdown">
							                	<a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Blog Details</span></a>
							                	<ul class="dropdown-menu">
									            	<li><a href="{{ url('blog.blog-detailsV1') }}" class="dropdown-item"><span>Standard</span></a></li>
										            <li><a href="{{ url('blog.blog-detailsV2') }}" class="dropdown-item"><span>Featured Image</span></a></li>
										            <li><a href="{{ url('blog.blog-detailsV3') }}" class="dropdown-item"><span>Creative Dark</span></a></li>
									            </ul>
							                </li>
						                </ul>-->
						            </li>
									<li class="nav-item dropdown">
							        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Galeri</a>
						                <!--<ul class="dropdown-menu">
							                <li><a href="{{ url('blog.blogV1') }}" class="dropdown-item"><span>Grid Layout</span></a></li>
							                <li><a href="{{ url('blog.blogV2') }}" class="dropdown-item"><span>Grid Dark Layout</span></a></li>
							                <li><a href="{{ url('blog.blogV3') }}" class="dropdown-item"><span>List With Sidebar</span></a></li>
							                <li><a href="{{ url('blog.blogV4') }}" class="dropdown-item"><span>Full Width Dark</span></a></li>
							                <li class="dropdown-submenu dropdown">
							                	<a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Blog Details</span></a>
							                	<ul class="dropdown-menu">
									            	<li><a href="{{ url('blog.blog-detailsV1') }}" class="dropdown-item"><span>Standard</span></a></li>
										            <li><a href="{{ url('blog.blog-detailsV2') }}" class="dropdown-item"><span>Featured Image</span></a></li>
										            <li><a href="{{ url('blog.blog-detailsV3') }}" class="dropdown-item"><span>Creative Dark</span></a></li>
									            </ul>
							                </li>
						                </ul>-->
						            </li>
						    	</ul>
						    	<div class="mobile-content d-block d-lg-none">
						    		<form action="#" class="search-form">
								  		<input type="text" placeholder="Search here..">
								  		<button><i class="bi bi-search"></i></button>
								  	</form>

								  	<div class="address-block">
								  		<h4 class="title">Our Address</h4>
								  		<p>Chowrastar Mirpur- 1210, Sangu <br>River, Dhaka</p>
								  		<p>Urgent issue? call us at <br><a href="tel:310.841.5500">310.841.5500</a></p>
								  	</div>
						    	</div> <!-- /.mobile-content -->
						    </div>
						</nav>
						<div class="right-widget d-flex align-items-center">
							<!--<a href="{{ url('shop.sign-in') }}" class="d-flex align-items-center login-btn">-->
							<a href="{{ url('home.index-5') }}" class="d-flex align-items-center login-btn">
								<img src="{{ URL::asset('images/icon/icon_01.svg') }}" alt="">
								<span>login</span>
							</a>
							<button class="sidebar-nav-button d-none d-lg-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="{{ URL::asset('images/icon/icon_02.svg') }}" alt=""></button>
						</div> <!-- /.right-widget -->
					</div>
				</div> <!-- /.inner-content -->
			</header> <!-- /.theme-main-menu -->


			
			<!-- 
			=============================================
				Theme Hero Banner
			============================================== 
			-->
			<div class="hero-banner-five mt-225 md-mt-150">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 ms-auto">
							<a class="fancybox video-icon d-flex align-items-center justify-content-center" data-fancybox="" href="https://www.youtube.com/embed/aXFSJTjVjw0" tabindex="0">
								<img src="{{ URL::asset('images/icon/icon_41.svg') }}" alt="">
							</a>
							<h1 class="hero-heading">We’r the WordPress guru.</h1>
							<p class="hero-sub-heading text-lg">We are helping client to create WordPress websites with our talented expert.</p>
							<form action="#">
								<input type="email" placeholder="ihidago@ujufidnan.gov">
								<button>Try free demo</button>
							</form>
							<p class="term-text">Already a member? <a href="{{ url('shop.sign-in') }}">Sign in.</a></p>
						</div>
					</div>
				</div>
				<div class="illustration-container">
					<img src="{{ URL::asset('images/ilab/ilab2.jpg') }}" alt="">
				</div> <!-- /.illustration-container -->
			</div> <!-- /.hero-banner-five -->

			

			<!-- 
			=============================================
				Vcamp Feature Section Three
			============================================== 
			-->
			<div class="vcamp-feature-section-three mt-200 lg-mt-120">
				<div class="container">
					<div class="row align-items-center mb-40 md-mb-20">
						<div class="col-lg-5 col-md-6 col-sm-8" data-aos="fade-right">
							<div class="title-style-five">
								<h2 class="title">Our included service.</h2>
							</div>
						</div>
						<div class="col-md-6 col-sm-4 me-auto text-sm-end text-start" data-aos="fade-left">
							<a href="{{ url('pages.support.serviceV1') }}" class="theme-btn-five position-relative xs-mt-30">See all Services</a>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-sm-6" data-aos="fade-up">
							<div class="card-style-three mt-50">
								<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_24.svg') }}" alt="" class="tran3s"></div>
								<h4 class="title">Core WordPress</h4>
								<ul class="style-none">
									<li>Personalization</li>
									<li>Third-Party Integrations</li>
									<li>First-Party Analytics</li>
									<li>Hosting Setup</li>
									<li>Securty</li>
								</ul>
							</div> <!-- /.card-style-three -->
						</div>
						<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
							<div class="card-style-three mt-50">
								<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_25.svg') }}" alt="" class="tran3s"></div>
								<h4 class="title">Platform Audit</h4>
								<ul class="style-none">
									<li>Full Consultation</li>
									<li>Code Review</li>
									<li>Staff Augmentation</li>
									<li>Support</li>
								</ul>
							</div> <!-- /.card-style-three -->
						</div>
						<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
							<div class="card-style-three mt-50">
								<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_26.svg') }}" alt="" class="tran3s"></div>
								<h4 class="title">e-Commerce</h4>
								<ul class="style-none">
									<li>Custom Checkout Flow</li>
									<li>Customer identity</li>
									<li>Conversion Rate Optimization</li>
									<li>Security Checkup</li>
									<li>Data enrty</li>
								</ul>
							</div> <!-- /.card-style-three -->
						</div>
						<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
							<div class="card-style-three mt-50">
								<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_27.svg') }}" alt="" class="tran3s"></div>
								<h4 class="title">Marketing</h4>
								<ul class="style-none">
									<li>Microsites</li>
									<li>Marketing Automation</li>
									<li>SEO & SMM</li>
									<li>Lead Generation</li>
								</ul>
							</div> <!-- /.card-style-three -->
						</div>
					</div>
				</div>
			</div> <!-- /.vcamp-feature-section-three -->
			


			<!--
			=====================================================
				Case Study Section Two
			=====================================================
			-->
			<div class="case-study-two mt-200 lg-mt-120">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-lg-5 col-md-6">
							<div class="title-style-five text-center text-md-start md-pb-30">
								<h2 class="title">Our selected work.</h2>
							</div>
						</div>
						<div class="col-lg-5 col-md-6 d-flex justify-content-center justify-content-md-end">
							<a href="{{ url('portfolio.boxed_layout.portfolioV1') }}" class="theme-btn-six ripple-btn">See all Portfolio</a>
						</div>
					</div>

					<div class="row gx-xl-5 mt-20">
						<div class="col-md-6" data-aos="fade-up">
							<div class="case-block-two position-relative mt-50 lg-mt-30">
								<img src="{{ URL::asset('images/media/img_31.jpg') }}" alt="" class="img-meta w-100">
								<div class="hover-content d-flex align-items-center justify-content-center">
									<a class="fancybox position-relative" data-fancybox="" href="images/media/img_31.jpg" tabindex="0"><i class="bi bi-arrows-angle-expand"></i></a>
								</div>
							</div> <!-- /.case-block-two -->
						</div>
						<div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
							<div class="case-block-two position-relative mt-50 lg-mt-30">
								<img src="{{ URL::asset('images/media/img_32.jpg') }}" alt="" class="img-meta w-100">
								<div class="hover-content d-flex align-items-center justify-content-center">
									<a class="fancybox position-relative" data-fancybox="" href="images/media/img_32.jpg" tabindex="0"><i class="bi bi-arrows-angle-expand"></i></a>
								</div>
							</div> <!-- /.case-block-two -->
						</div>
						<div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
							<div class="case-block-two position-relative mt-50 lg-mt-30">
								<img src="{{ URL::asset('images/media/img_33.jpg') }}" alt="" class="img-meta w-100">
								<div class="hover-content d-flex align-items-center justify-content-center">
									<a class="fancybox position-relative" data-fancybox="" href="images/media/img_33.jpg" tabindex="0"><i class="bi bi-arrows-angle-expand"></i></a>
								</div>
							</div> <!-- /.case-block-two -->
						</div>
						<div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
							<div class="case-block-two position-relative mt-50 lg-mt-30">
								<img src="{{ URL::asset('images/media/img_34.jpg') }}" alt="" class="img-meta w-100">
								<div class="hover-content d-flex align-items-center justify-content-center">
									<a class="fancybox position-relative" data-fancybox="" href="images/media/img_34.jpg" tabindex="0"><i class="bi bi-arrows-angle-expand"></i></a>
								</div>
							</div> <!-- /.case-block-two -->
						</div>
					</div>
				</div>
			</div> <!-- /.case-study-two -->




			<!--
			=====================================================
				Vcamp Text Block Five
			=====================================================
			-->
			<div class="vcamp-text-block-five mt-200 lg-mt-120">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-xxl-5 col-lg-6">
							<div class="text-wrapper">
								<div class="title-style-five">
									<div class="upper-title">Why choose us</div>
									<h2 class="title">Create <br> visual strategy lorem.</h2>
								</div>
								<p class="text-lg">Lorem ipsum dolor sit amet cons qui</p>
							</div>
						</div>
						<div class="col-xl-5 col-lg-6 ms-auto">
							<div class="accordion accordion-style-one md-mt-30" id="accordionOne">
								<div class="accordion-item">
								    <div class="accordion-header" id="headingOne">
								      	<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								        	Secure & Trsuted
								      	</button>
								    </div>
								    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionOne">
								    	<div class="accordion-body">
								        	<p>Our founders Dustin Moskovitz and Justin quis Rosenstein met while leading Engineering team at Facebook. </p>
								    	</div>
								    </div>
							  	</div>
							  	<div class="accordion-item">
								    <div class="accordion-header" id="headingTwo">
								      	<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								        	Expert Members
								      	</button>
								    </div>
								    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionOne">
								      	<div class="accordion-body">
								        	<p>Our founders Dustin Moskovitz and Justin quis Rosenstein met while leading Engineering team at Facebook. </p>
								    	</div>
								    </div>
							  	</div>
							  	<div class="accordion-item">
								    <div class="accordion-header" id="headingThree">
								   		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								        	Big Resoruces
								      	</button>
								    </div>
								    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionOne">
								    	<div class="accordion-body">
								        	<p>Our founders Dustin Moskovitz and Justin quis Rosenstein met while leading Engineering team at Facebook. </p>
								    	</div>
								    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.vcamp-text-block-five -->



			<!--
			=====================================================
				Vcamp Fancy Banner Two
			=====================================================
			-->
			<div class="fancy-banner-two mt-200 lg-mt-110">
				<div class="container p0 h-100">
					<div class="inner-content h-100 position-relative d-flex align-items-center justify-content-center">
						<a class="fancybox video-icon d-flex align-items-center justify-content-center" data-fancybox="" href="https://www.youtube.com/embed/aXFSJTjVjw0" tabindex="0">
							<img src="{{ URL::asset('images/icon/icon_43.svg') }}" alt="">
						</a>
						<div class="counter-section-two">
							<div class="counter-container">
								<div class="row g-0">
									<div class="col-6">
										<div class="counter-block-two text-center">
											<div class="main-count"><span class="counter">3.5</span>k</div>
											<p>Using vCamp</p>
										</div> <!-- /.counter-block-two -->
									</div>
									<div class="col-6">
										<div class="counter-block-two text-center bg-color">
											<div class="main-count"><span class="counter">50</span>k+</div>
											<p>Successfull Project</p>
										</div> <!-- /.counter-block-two -->
									</div>
								</div>
							</div> <!-- /.counter-container -->
						</div> <!-- /.counter-section-two -->
					</div> <!-- /.inner-content -->
				</div>
			</div> <!-- /.fancy-banner-two -->



			<!--
			=====================================================
				Feedback Section Eight
			=====================================================
			-->
			<div class="feedback-section-eight mt-225 lg-mt-120">
				<div class="container">
					<div class="feedback_slider_four">
						<div class="item">
							<div class="row">
								<div class="col-xl-7 col-md-6 order-md-last">
									<div class="feedback-wrapper">
										<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_33.svg') }}" alt=""></div>
										<blockquote>Commonly used in the graphic, print, query <span>Publishing</span> industries for previewing layouts & visual mockups.</blockquote>
										<h6 class="name">Martin Jona <br><span>USA</span></h6>
									</div> <!-- /.feedback-wrapper -->
								</div>
								<div class="col-xl-5 col-md-6 order-md-first">
									<div class="image-container">
										<img src="{{ URL::asset('images/media/img_36.jpg') }}" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-xl-7 col-md-6 order-md-last">
									<div class="feedback-wrapper">
										<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_33.svg') }}" alt=""></div>
										<blockquote>Having a home based business makes wonderful asset to your life. The <span>WordPress VIP</span> stands it comes time advertise.</blockquote>
										<h6 class="name">Rashed Ka. <br><span>USA</span></h6>
									</div> <!-- /.feedback-wrapper -->
								</div>
								<div class="col-xl-5 col-md-6 order-md-first">
									<div class="image-container">
										<img src="{{ URL::asset('images/media/img_37.jpg') }}" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-xl-7 col-md-6 order-md-last">
									<div class="feedback-wrapper">
										<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_33.svg') }}" alt=""></div>
										<blockquote>Certainly from my perspective, WordPress has been a great success with <span>WordPress VIP</span> giving us that enterprise.</blockquote>
										<h6 class="name">Zubayer Hasan <br><span>SPAIN</span></h6>
									</div> <!-- /.feedback-wrapper -->
								</div>
								<div class="col-xl-5 col-md-6 order-md-first">
									<div class="image-container">
										<img src="{{ URL::asset('images/media/img_38.jpg') }}" alt="">
									</div>
								</div>
							</div>
						</div>
					</div> <!-- /.feedback_slider_four -->
				</div>
			</div> <!-- /.feedback-section-eight -->




			<!--
			=====================================================
				Blog Section Three
			=====================================================
			-->
			<div class="blog-section-three mt-180 lg-mt-100">
				<div class="container">
					<div class="row align-items-center mb-70 md-mb-20">
						<div class="col-sm-6">
							<div class="title-style-five">
								<div class="upper-title">News</div>
								<h2 class="title">Our Blog.</h2>
							</div>
						</div>
						<div class="col-sm-6 d-sm-flex justify-content-end">
							<a href="{{ url('blog.blogV2') }}" class="theme-btn-six ripple-btn xs-mt-30">Go to Blog</a>
						</div>
					</div>
					<div class="row gx-xl-5">
						<div class="col-lg-4 col-md-6 md-mt-40">
							<article class="blog-meta-three">
								<a href="{{ url('blog.blog-detailsV3') }}" class="tag">Soltuion</a>
								<a href="{{ url('blog.blog-detailsV3') }}" class="title">Our experience at WordCamp in Nagpur</a>
								<div class="post-info">Featured - <span class="date">18 Jul 20</span></div>
								<div class="post-footer d-flex align-items-center justify-content-between">
									<img src="{{ URL::asset('images/blog/logo_06.png') }}" alt="" class="logo">
									<a href="{{ url('blog.blog-detailsV3') }}" class="read-more tran3s"><img src="{{ URL::asset('images/icon/icon_16.svg') }}" alt=""></a>
								</div> <!-- /.post-footer -->
							</article>
						</div>
						<div class="col-lg-4 col-md-6 md-mt-40">
							<article class="blog-meta-three">
								<a href="{{ url('blog.blog-detailsV3') }}" class="tag">WordPress</a>
								<a href="{{ url('blog.blog-detailsV3') }}" class="title">Event Recap: <br> Careers open Source & Beyond</a>
								<div class="post-info">Featured - <span class="date">18 Jul 20</span></div>
								<div class="post-footer d-flex align-items-center justify-content-between">
									<img src="{{ URL::asset('images/blog/logo_07.png') }}" alt="" class="logo">
									<a href="{{ url('blog.blog-detailsV3') }}" class="read-more tran3s"><img src="{{ URL::asset('images/icon/icon_16.svg') }}" alt=""></a>
								</div> <!-- /.post-footer -->
							</article>
						</div>
						<div class="col-lg-4 col-md-6 md-mt-40">
							<article class="blog-meta-three">
								<a href="{{ url('blog.blog-detailsV3') }}" class="tag">Development</a>
								<a href="{{ url('blog.blog-detailsV3') }}" class="title">Speaking remotely at WordCamp US.</a>
								<div class="post-info">Featured - <span class="date">18 Jul 20</span></div>
								<div class="post-footer d-flex align-items-center justify-content-between">
									<img src="{{ URL::asset('images/blog/logo_08.png') }}" alt="" class="logo">
									<a href="{{ url('blog.blog-detailsV3') }}" class="read-more tran3s"><img src="{{ URL::asset('images/icon/icon_16.svg') }}" alt=""></a>
								</div> <!-- /.post-footer -->
							</article>
						</div>
					</div>
				</div>
			</div> <!-- /.blog-section-three -->



			<!--
			=====================================================
				Vcamp Fancy Banner Three
			=====================================================
			-->
			<div class="fancy-banner-three">
				<div class="inner-content position-relative">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-xxl-5 col-lg-6 col-md-8">
								<h2 class="title font-recoleta text-center text-md-start">Have any project in mind?</h2>
							</div>
							<div class="col-lg-6 col-md-4 d-flex justify-content-md-end justify-content-center">
								<a href="{{ url('pages.support.contactV1') }}" class="theme-btn-six ripple-btn sm-mt-30">Let’s Discuss</a>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.fancy-banner-three -->



			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer class="vcamp-footer-two pt-150 lg-pt-100">
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-lg-2 mb-40">
							<div class="logo"><a href="{{ url('home.index') }}"><img src="{{ URL::asset('images/logo/vCamp_01.png') }}" alt="" width="127"></a></div>
						</div>
						<div class="col-lg-2 col-md-3 col-sm-6 mb-40">
							<h5 class="title">Links</h5>
							<ul class="footer-list style-none">
								<li><a href="{{ url('home.index') }}">Home</a></li>
								<li><a href="{{ url('pages.essential.pricingV1') }}">Pricing</a></li>
								<li><a href="{{ url('pages.essential.about-usV1') }}">About us</a></li>
								<li><a href="{{ url('pages.support.serviceV2') }}">Service</a></li>
								<li><a href="{{ url('pages.support.serviceV3') }}">Features</a></li>
								<li><a href="{{ url('blog.blogV4') }}">Blog</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 mb-40">
							<h5 class="title">Legal</h5>
							<ul class="footer-list style-none">
								<li><a href="{{ url('pages.other.faqV1') }}">Terms of use</a></li>
								<li><a href="{{ url('pages.other.faqV1') }}">Terms & conditions</a></li>
								<li><a href="{{ url('pages.other.faqV1') }}">Privacy policy</a></li>
								<li><a href="{{ url('pages.other.faqV1') }}">Cookie policy</a></li>
							</ul>
						</div>
						<div class="col-lg-4 col-md-6 mb-40">
							<div class="newsletter">
								<h5 class="title">Newslettert</h5>
								<p>Join over <span>68,000</span> people getting our emails</p>
								<form action="#">
									<input type="email" placeholder="Enter your email">
									<button class="dark-btn">Sign Up</button>
								</form>
								<div class="info">We only send interesting and relevant emails.</div>
							</div> <!-- /.newsletter -->
						</div>
					</div>
				</div>
				<div class="container">
					<div class="bottom-footer">
						<div class="row">
							<div class="col-lg-4 order-lg-1 mb-15">
								<ul class="d-flex justify-content-center justify-content-lg-start footer-nav style-none">
									<li><a href="{{ url('pages.other.faqV1') }}">Privacy & Terms.</a></li>
									<li><a href="{{ url('pages.support.contactV1') }}">Contact Us</a></li>
								</ul>
							</div>
							<div class="col-lg-4 order-lg-3 mb-15">
								<ul class="d-flex justify-content-center justify-content-lg-end social-icon style-none">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
								</ul>
							</div>
							<div class="col-lg-4 order-lg-2 mb-15">
								<p class="copyright text-center">Copyright @2022 vcamp inc.</p>
							</div>
						</div>
					</div>
				</div>
			</footer> <!-- /.vcamp-footer-two -->


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