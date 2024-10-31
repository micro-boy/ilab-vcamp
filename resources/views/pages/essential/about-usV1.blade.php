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
			<div class="offcanvas offcanvas-end sidebar-nav" tabindex="-1" id="offcanvasRight">
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
			</div> <!-- /.sidebar-nav -->


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
							        <li class="nav-item dropdown mega-dropdown">
							        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Home</a>
							        	<ul class="dropdown-menu">
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
						                </ul>
						            </li>
						            <li class="nav-item dropdown mega-dropdown">
							        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Elements</a>
						                <ul class="dropdown-menu">
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
						                </ul>
						            </li>
							        <li class="nav-item dropdown mega-dropdown">
							        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Portfolio</a>
						                <ul class="dropdown-menu">
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
						                </ul>
						            </li>
						            <li class="nav-item active dropdown mega-dropdown-md">
							        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Pages</a>
						                <ul class="dropdown-menu">
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
						                </ul>
						            </li>
						            <li class="nav-item dropdown">
							        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Shop</a>
						                <ul class="dropdown-menu">
						                	<li class="dropdown-submenu dropdown">
							                	<a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Shop Elements</span></a>
							                	<ul class="dropdown-menu">
									            	<li><a href="{{ url('shop.product-detailsV1') }}" class="dropdown-item"><span>Shop Details</span></a></li>
										            <li><a href="{{ url('shop.checkout') }}" class="dropdown-item"><span>Checkout</span></a></li>
										            <li><a href="{{ url('shop.cart') }}" class="dropdown-item"><span>Cart</span></a></li>
										            <li><a href="{{ url('shop.sign-in') }}" class="dropdown-item"><span>Sign In</span></a></li>
										            <li><a href="{{ url('shop.sign-up') }}" class="dropdown-item"><span>Sign Up</span></a></li>
									            </ul>
							                </li>
							                <li><a href="{{ url('shop.productV1') }}" class="dropdown-item"><span>Grid Layout</span></a></li>
							                <li><a href="{{ url('shop.productV2') }}" class="dropdown-item"><span>Grid With Sidebar</span></a></li>
							                <li><a href="{{ url('shop.productV3') }}" class="dropdown-item"><span>Dark Layout</span></a></li>
							                <li><a href="{{ url('shop.productV4') }}" class="dropdown-item"><span>Full Width Layout</span></a></li>
						                </ul>
						            </li>
							        <li class="nav-item dropdown">
							        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Blog</a>
						                <ul class="dropdown-menu">
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
						                </ul>
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
							<a href="{{ url('shop.sign-in') }}" class="d-flex align-items-center login-btn">
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
				Inside Page Banner
			============================================== 
			-->
			<div class="inside-hero-one hero-spacing">
				<div class="container">
					<h2 class="page-title font-recoleta">Inside Story</h2>
					<p>We’re empowering WordPress to do great things together</p>
				</div>
			</div> <!-- /.inside-hero-one -->
			


			<!-- 
			=============================================
				Vcamp Text Block One
			============================================== 
			-->
			<div class="vcamp-text-block-one mt-200 lg-mt-120">
				<div class="container">
					<div class="row">
						<div class="col-xxl-5 col-lg-6 ms-auto order-lg-last" data-aos="fade-left">
							<div class="text-wrapper pt-0">
								<a class="fancybox video-icon d-flex align-items-center justify-content-center" data-fancybox="" href="https://www.youtube.com/embed/aXFSJTjVjw0" tabindex="0">
									<img src="{{ URL::asset('images/icon/icon_41.svg') }}" alt="">
								</a>
								<div class="title-style-two">
									<h3 class="title">We’ve been helping <span>customer</span> globally.</h3>
								</div>
								<h6>Who we are?</h6>
								<p class="meta-info-text-two">Our founders Dustin Moskovitz and Justin Rosenstein met while leading Engineering teams at Facebook. As operations scaled, they grew frustrated by how difficult.</p>
							</div>
						</div>
						<div class="col-xxl-6 col-lg-6" data-aos="fade-right">
							<div class="img-container position-relative">
								<img src="{{ URL::asset('images/media/img_40.jpg') }}" alt="" class="ceo-avatar">
								<div class="quote-wrapper">
									<img src="{{ URL::asset('images/icon/icon_10.svg') }}" alt="" class="icon">
									<blockquote>Our partnership with vCamp Their support helped us to solve everything.</blockquote>
									<h6 class="name">Rashed Ka. <span>CEO vCamp</span></h6>
								</div> <!-- /.quote-wrapper -->
							</div>
						</div>
					</div>
				</div>
				<img src="{{ URL::asset('images/shape/shape_05.svg') }}" alt="" class="shapes shape-two">
			</div> <!-- /.vcamp-text-block-one -->




			<!--
			=====================================================
				Counter Section One
			=====================================================
			-->
			<div class="counter-section-one mt-170 lg-mt-120">
				<div class="inner-container">
					<div class="row">
						<div class="col-lg-3 col-sm-6" data-aos="fade-up">
							<div class="counter-block-one text-center mb-45">
								<div class="main-count font-recoleta"><span class="counter">3.5</span>k</div>
								<p class="theme-mb-0">Job done successfully</p>
							</div> <!-- /.counter-block-one -->
						</div>
						<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
							<div class="counter-block-one text-center mb-45">
								<div class="main-count font-recoleta"><span class="counter">20</span>million</div>
								<p class="theme-mb-0">3,280 avg rating</p>
							</div> <!-- /.counter-block-one -->
						</div>
						<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
							<div class="counter-block-one text-center mb-45">
								<div class="main-count font-recoleta"><span class="counter">50</span>k+</div>
								<p class="theme-mb-0">Contact Profile</p>
							</div> <!-- /.counter-block-one -->
						</div>
						<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
							<div class="counter-block-one text-center mb-45">
								<div class="main-count font-recoleta"><span class="counter">3,000</span>+</div>
								<p class="theme-mb-0">Using vCamp</p>
							</div> <!-- /.counter-block-one -->
						</div>
					</div>
				</div>
			</div>



			<!-- 
			=============================================
				Vcamp Feature Section Five
			============================================== 
			-->
			<div class="vcamp-feature-section-five mt-100 lg-mt-80">
				<div class="feature_slider_one">
					<div class="item">
						<div class="card-style-five">
							<img src="{{ URL::asset('images/media/img_41.jpg') }}" alt="" class="img-meta">
							<div class="hover-content">
								<h3 class="font-recoleta title"><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV1') }}">Best Selling <br>plugin.</a></h3>
								<p>Lorem ipsum dolor sit amet, consu adielit, sed do eiusmod</p>
							</div>
						</div> <!-- /.card-style-five -->
					</div> <!-- /.item -->
					<div class="item">
						<div class="card-style-five">
							<img src="{{ URL::asset('images/media/img_42.jpg') }}" alt="" class="img-meta">
							<div class="hover-content">
								<h3 class="font-recoleta title"><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV1') }}">Best Service <br>provider.</a></h3>
								<p>Lorem ipsum dolor sit amet, consu adielit, sed do eiusmod</p>
							</div>
						</div> <!-- /.card-style-five -->
					</div> <!-- /.item -->
					<div class="item">
						<div class="card-style-five">
							<img src="{{ URL::asset('images/media/img_43.jpg') }}" alt="" class="img-meta">
							<div class="hover-content">
								<h3 class="font-recoleta title"><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV1') }}">Highly Train <br>expert.</a></h3>
								<p>Lorem ipsum dolor sit amet, consu adielit, sed do eiusmod</p>
							</div>
						</div> <!-- /.card-style-five -->
					</div> <!-- /.item -->
					<div class="item">
						<div class="card-style-five">
							<img src="{{ URL::asset('images/media/img_44.jpg') }}" alt="" class="img-meta">
							<div class="hover-content">
								<h3 class="font-recoleta title"><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV1') }}">WP Award <br>winner.</a></h3>
								<p>Lorem ipsum dolor sit amet, consu adielit, sed do eiusmod</p>
							</div>
						</div> <!-- /.card-style-five -->
					</div> <!-- /.item -->
					<div class="item">
						<div class="card-style-five">
							<img src="{{ URL::asset('images/media/img_45.jpg') }}" alt="" class="img-meta">
							<div class="hover-content">
								<h3 class="font-recoleta title"><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV1') }}">Best Service <br>provider.</a></h3>
								<p>Lorem ipsum dolor sit amet, consu adielit, sed do eiusmod</p>
							</div>
						</div> <!-- /.card-style-five -->
					</div> <!-- /.item -->
				</div>
			</div> <!-- /.vcamp-feature-section-five -->



			<!--
			=====================================================
				Partner Section Three
			=====================================================
			-->
			<div class="partner-section-three mt-200 lg-mt-120">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-xl-5 col-lg-4 col-md-8">
							<div class="title-style-one">
								<h2 class="title">Our best <span>partners</span> for the long run.</h2>
							</div>
						</div>

						<div class="col-xl-6 col-lg-7 ms-auto">
							<p class="info-text">Over <span>32K+</span> software businesses growing with vCamp.</p>
							<div class="row">
								<div class="col-sm-4 col-6">
									<div class="logo d-flex align-items-center"><a href="#"><img src="{{ URL::asset('images/logo/logo-18.png') }}" alt="" class="tran3s"></a></div>
								</div>
								<div class="col-sm-4 col-6">
									<div class="logo d-flex align-items-center"><a href="#"><img src="{{ URL::asset('images/logo/logo-19.png') }}" alt="" class="tran3s"></a></div>
								</div>
								<div class="col-sm-4 col-6">
									<div class="logo d-flex align-items-center"><a href="#"><img src="{{ URL::asset('images/logo/logo-20.png') }}" alt="" class="tran3s"></a></div>
								</div>
								<div class="col-sm-4 col-6">
									<div class="logo d-flex align-items-center"><a href="#"><img src="{{ URL::asset('images/logo/logo-21.png') }}" alt="" class="tran3s"></a></div>
								</div>
								<div class="col-sm-4 col-6">
									<div class="logo d-flex align-items-center"><a href="#"><img src="{{ URL::asset('images/logo/logo-22.png') }}" alt="" class="tran3s"></a></div>
								</div>
								<div class="col-sm-4 col-6">
									<div class="logo d-flex align-items-center"><a href="#"><img src="{{ URL::asset('images/logo/logo-23.png') }}" alt="" class="tran3s"></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.partner-section-three -->



			<!--
			=====================================================
				Feedback Section Nine
			=====================================================
			-->
			<div class="feedback-section-nine box-layout mt-200 lg-mt-120">
				<div class="bg-wrapper">
					<div class="container">
						<div class="row align-items-center justify-content-between">
							<div class="col-xl-7 col-lg-6 col-md-8 m-auto">
								<div class="title-style-one text-center">
									<h2 class="title">What’s our <span>client</span> say about us.</h2>
								</div>
							</div>
						</div>
					</div> <!-- /.container -->

					<div class="feedback_slider_seven">
						<div class="item">
							<div class="testimonial-block-one">
								<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_15.svg') }}" alt=""></div>
								<blockquote>
									Certainly from my perspective been a great success with WP giving us that enterprises level assured quality.
								</blockquote>
								<div class="name">Martin Jonas <span>USA</span></div>
							</div> <!-- /.testimonial-block-one -->
						</div>
						<div class="item">
							<div class="testimonial-block-one">
								<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_15.svg') }}" alt=""></div>
								<blockquote>
									Certainly from my perspective been a great success with WP giving us that enterprises level assured quality.
								</blockquote>
								<div class="name">Martin Jonas <span>USA</span></div>
							</div> <!-- /.testimonial-block-one -->
						</div>
						<div class="item">
							<div class="testimonial-block-one">
								<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_15.svg') }}" alt=""></div>
								<blockquote>
									Certainly from my perspective been a great success with WP giving us that enterprises level assured quality.
								</blockquote>
								<div class="name">Martin Jonas <span>USA</span></div>
							</div> <!-- /.testimonial-block-one -->
						</div>
						<div class="item">
							<div class="testimonial-block-one">
								<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_15.svg') }}" alt=""></div>
								<blockquote>
									Certainly from my perspective been a great success with WP giving us that enterprises level assured quality.
								</blockquote>
								<div class="name">Martin Jonas <span>USA</span></div>
							</div> <!-- /.testimonial-block-one -->
						</div>
					</div> <!-- /.feedback_slider_seven -->
				</div> <!-- /.bg-wrapper -->
			</div> <!-- /.feedback-section-nine box-layout -->


			<!--
			=====================================================
				Blog Section One
			=====================================================
			-->
			<div class="blog-section-one mt-200 lg-mt-120">
				<div class="container">
					<div class="row">
						<div class="col-xxl-11 m-auto">
							<div class="row align-items-center">
								<div class="col-xl-5 col-md-6 col-sm-7">
									<div class="title-style-one">
										<div class="upper-title">Latest News</div>
										<h2 class="title">From <span>Archive</span></h2>
									</div>
								</div>
								<div class="col-xl-7 col-md-6 col-sm-5 text-sm-end text-start">
									<a href="{{ url('blog.blogV2') }}" class="theme-btn-three xs-mt-30">Check our all news <i class="fas fa-angle-right"></i></a>
								</div>
							</div>
							<div class="mt-100 lg-mt-60">
								<div class="row">
									<div class="col-lg-4 col-md-6 d-flex">
										<article class="blog-meta-one feature-post">
											<a href="{{ url('blog.blog-detailsV3') }}" class="tag">Plugin</a>
											<a href="{{ url('blog.blog-detailsV3') }}" class="title">Speaking remotely at WordCamp US.</a>
											<div class="post-info">Trending - <span class="date">18 Jul 20</span></div>
											<div class="post-footer d-flex align-items-center justify-content-between">
												<img src="{{ URL::asset('images/blog/logo_03.jpg') }}" alt="" class="logo">
												<a href="{{ url('blog.blog-detailsV3') }}" class="read-more tran3s"><img src="{{ URL::asset('images/icon/icon_16.svg') }}" alt=""></a>
											</div> <!-- /.post-footer -->
										</article> <!-- /.blog-meta-one -->
									</div>
									<div class="col-lg-4 col-md-6 d-flex">
										<article class="blog-meta-one top-border">
											<a href="{{ url('blog.blog-detailsV3') }}" class="tag">Soltuion</a>
											<a href="{{ url('blog.blog-detailsV3') }}" class="title">Our experience at WordCamp in Nagpur</a>
											<div class="post-info">Featured - <span class="date">18 Jul 20</span></div>
											<div class="post-footer d-flex align-items-center justify-content-between">
												<img src="{{ URL::asset('images/blog/logo_01.jpg') }}" alt="" class="logo">
												<a href="{{ url('blog.blog-detailsV3') }}" class="read-more tran3s"><img src="{{ URL::asset('images/icon/icon_16.svg') }}" alt=""></a>
											</div> <!-- /.post-footer -->
										</article> <!-- /.blog-meta-one -->
									</div>
									<div class="col-lg-4 col-md-6 d-flex">
										<article class="blog-meta-one top-border">
											<a href="{{ url('blog.blog-detailsV3') }}" class="tag">theme</a>
											<a href="{{ url('blog.blog-detailsV3') }}" class="title">Motivation defining Moment of self Improvement</a>
											<div class="post-info">Featured - <span class="date">18 Jul 20</span></div>
											<div class="post-footer d-flex align-items-center justify-content-between">
												<img src="{{ URL::asset('images/blog/logo_02.jpg') }}" alt="" class="logo">
												<a href="{{ url('blog.blog-detailsV3') }}" class="read-more tran3s"><img src="{{ URL::asset('images/icon/icon_16.svg') }}" alt=""></a>
											</div> <!-- /.post-footer -->
										</article> <!-- /.blog-meta-one -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.blog-section-one -->


			<!--
			=====================================================
				Vcamp Fancy Banner Three
			=====================================================
			-->
			<div class="box-layout mt-200 lg-mt-120">
				<div class="fancy-banner-three">
					<div class="inner-content position-relative">
						<div class="container">
							<div class="row align-items-center">
								<div class="col-xxl-5 col-lg-6 col-md-8">
									<h2 class="title font-recoleta text-center text-md-start">Have any project in mind?</h2>
								</div>
								<div class="col-lg-6 col-md-4 d-flex justify-content-md-end justify-content-center">
									<a href="{{ url('pages.support.contactV1') }}" class="theme-btn-four ripple-btn sm-mt-30">Let’s Discuss</a>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- /.fancy-banner-three -->
			</div>
			


			<!--
			=====================================================
				Contact Section One
			=====================================================
			-->
			<div class="contact-section-one mt-120 mb-80 lg-mt-80 lg-mb-40">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="address-block-one text-center mb-40">
								<div class="icon d-flex align-items-center justify-content-center m-auto"><img src="{{ URL::asset('images/icon/icon_17.svg') }}" alt=""></div>
								<h5 class="title">Our Address</h5>
								<p>1012 Pebda Parkway, Mirpur 2 <br>Dhaka, Bangladesh</p>
							</div> <!-- /.address-block-one -->
						</div>
						<div class="col-md-4">
							<div class="address-block-one text-center mb-40">
								<div class="icon d-flex align-items-center justify-content-center m-auto"><img src="{{ URL::asset('images/icon/icon_18.svg') }}" alt=""></div>
								<h5 class="title">Contact Info</h5>
								<p>Open a chat or give us call at <br><a href="tel:310.841.5500" class="call">310.841.5500</a></p>
							</div> <!-- /.address-block-one -->
						</div>
						<div class="col-md-4">
							<div class="address-block-one text-center mb-40">
								<div class="icon d-flex align-items-center justify-content-center m-auto"><img src="{{ URL::asset('images/icon/icon_19.svg') }}" alt=""></div>
								<h5 class="title">Live Support</h5>
								<p>live chat service <br><a href="#" class="webaddress">www.vcamplivechat.com</a></p>
							</div> <!-- /.address-block-one -->
						</div>
					</div>
				</div>
			</div> <!-- /.contact-section-one -->



			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<div class="vcamp-footer-one box-layout">
				<div class="bg-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-xxl-11 m-auto">
								<div class="subscribe-area">
									<div class="row align-items-center">
										<div class="col-md-6">
											<div class="title-style-three sm-pb-20">
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

								<div class="top-footer mt-80 md-mt-70">
									<div class="row">
										<div class="col-lg-4 col-md-2">
											<div class="logo"><a href="{{ url('home.index') }}"><img src="{{ URL::asset('images/logo/vCamp_01.png') }}" alt="" width="127"></a></div>
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
					<img src="{{ URL::asset('images/assets/ils_03.svg') }}" alt="" class="shapes illustration">
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