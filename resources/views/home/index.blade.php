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
		<div class="main-page-wrapper light-bg">
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
				Search
			============================================== 
			-->
			<div class="offcanvas offcanvas-top theme-search-form justify-content-center" tabindex="-1" id="offcanvasTop">
				<button type="button" class="close-btn tran3s" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></button>
				<div class="form-wrapper">
					<form action="#">
						<input type="text" placeholder="Search Keyword....">
						<button><i class="bi bi-search"></i></button>
					</form>
				</div> <!-- /.form-wrapper -->
			</div>


			<!-- 
			=============================================
				Theme Main Menu
			============================================== 
			-->
			<header class="theme-main-menu sticky-menu theme-menu-two">
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
						            <li class="nav-item dropdown mega-dropdown-md">
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
							<button class="menu-search-btn tran3s" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><i class="bi bi-search"></i></button>
							<a href="{{ url('pages.support.contactV2') }}" class="tran3s contact-btn d-none d-sm-block">
								<span>Contact Us</span>
							</a>
						</div> <!-- /.right-widget -->
					</div>
				</div> <!-- /.inner-content -->
			</header> 
			<!-- /.theme-main-menu -->


			
			<!-- 
			=============================================
				Theme Hero Banner
			============================================== 
			-->
			<div class="hero-banner-two">
				<div class="container h-100">
					<div class="main-content h-100">
						<div class="text-wrapper">
							<h1 class="hero-heading font-recoleta"><span>Expert</span> care your website.</h1>
							<p class="hero-sub-heading text-lg">We helpingclient  to create WordPress websites with our talented expert.</p>
							<ul class="button-group d-sm-flex align-items-center style-none">
								<li><a href="{{ url('pages.support.contactV2') }}" class="mt-15 demo-button tran3s">Try a free demo</a></li>
								<li><a href="{{ url('pages.support.contactV2') }}" class="mt-15 callback-button d-flex align-items-center"><span>Request a Callback</span> <img src="{{ URL::asset('images/icon/icon_23.svg') }}" alt="" class="ms-3"></a></li>
							</ul>
						</div> <!-- /.text-wrapper -->


						<div class="row gx-md-5 align-items-end h-100">
							<div class="col-3">
								<img src="{{ URL::asset('images/assets/screen_02.png') }}" alt="">
							</div>
							<div class="col-3">
								<img src="{{ URL::asset('images/assets/screen_03.png') }}" alt="" class="mb-35">
								<img src="{{ URL::asset('images/assets/screen_04.png') }}" alt="">
							</div>
							<div class="col-3">
								<img src="{{ URL::asset('images/assets/screen_05.png') }}" alt="" class="mb-35">
								<img src="{{ URL::asset('images/assets/screen_06.png') }}" alt="">
							</div>
							<div class="col-3">
								<img src="{{ URL::asset('images/assets/screen_07.png') }}" alt="" class="mb-35">
								<img src="{{ URL::asset('images/assets/screen_08.png') }}" alt="">
							</div>
						</div>
						<img src="{{ URL::asset('images/shape/shape_03.svg') }}" alt="" class="shapes shape-one">
					</div> <!-- /.main-content -->
				</div>
			</div> <!-- /.hero-banner-two -->

			


			<!-- 
			=============================================
				Vcamp Feature Section Three
			============================================== 
			-->
			<div class="vcamp-feature-section-three mt-200 lg-mt-150 md-mt-120">
				<div class="container">
					<div class="row align-items-center mb-75 lg-mb-50 md-mb-20">
						<div class="col-xl-6 col-lg-5" data-aos="fade-right">
							<div class="title-style-one">
								<h2 class="title">Best <span>WordPress</span> doctor.</h2>
							</div>
						</div>
						<div class="col-lg-5 ms-auto" data-aos="fade-left">
							<p class="meta-info-text text-lg ps-xxl-5 md-pt-20">Lorem ipsum dolor sit amet, consecte adiel sed do eiusmod tempor incidi ut labore split</p>
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
			=============================================
				Vcamp Text Block One
			============================================== 
			-->
			<div class="vcamp-text-block-one mt-300 xl-mt-200 md-mt-120">
				<div class="container">
					<div class="row">
						<div class="col-xxl-5 col-xl-6 col-lg-7 ms-auto">
							<div class="text-wrapper pt-0">
								<div class="title-style-two">
									<h3 class="title">We’ve been helping <span>cutomer</span> globally.</h3>
								</div>
								<p class="meta-info-text text-lg">Lorem ipsum dolor sit amet, consecte adiel sed do eiusmod tempor incidi ut labore split.</p>
								<a href="{{ url('pages.essential.about-usV1') }}" class="theme-btn-one ripple-btn">More about us</a>
							</div>
						</div>
					</div>
				</div>
				<div class="left-img-meta">
					<img src="{{ URL::asset('images/media/img_04.jpg') }}" alt="">
					<img src="{{ URL::asset('images/shape/shape_04.svg') }}" alt="" class="shapes shape-one">
				</div>
				<img src="{{ URL::asset('images/shape/shape_05.svg') }}" alt="" class="shapes shape-two">
			</div> <!-- /.vcamp-text-block-one -->




			<!--
			=====================================================
				Counter Section One
			=====================================================
			-->
			<div class="counter-section-one mt-225 xl-mt-150 md-mt-80">
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
				Feedback Slider Three
			=====================================================
			-->
			<div class="feedback-section-three dark-bg mt-110 lg-mt-70">
				<img src="{{ URL::asset('images/shape/shape_06.svg') }}" alt="" class="shapes shape-one">
				<div class="inner-content d-lg-flex align-items-center clearfix">
					<div class="text-wrapper">
						<div class="title-style-one white-vr">
							<h2 class="title"><span>Success</span> sotries from client.</h2>
						</div>
						<p>Lorem ipsum dolor sit amet cons elit adiel sed do eiusmd</p>
						<a href="{{ url('portfolio.boxed_layout.portfolioV1') }}" class="theme-btn-three white-vr">View all case study <i class="fas fa-angle-right"></i></a>
					</div><!--  /.text-wrapper -->

					<div class="slider-wrapper">
						<div class="feedback_slider_three">
							<div class="item">
								<div class="block-wrapper">
									<img src="{{ URL::asset('images/media/img_05.jpg') }}" alt="" class="screen">
									<div class="overlay-content d-flex align-items-end">
										<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}" class="d-flex justify-content-between align-items-center">
											<span>www.uiart.com</span>
											<img src="{{ URL::asset('images/icon/icon_28.svg') }}" alt="">
										</a>
									</div> <!-- /.overlay-content -->
								</div> <!-- /.block-wrapper -->
							</div>
							<div class="item">
								<div class="block-wrapper">
									<img src="{{ URL::asset('images/media/img_06.jpg') }}" alt="" class="screen">
									<div class="overlay-content d-flex align-items-end">
										<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}" class="d-flex justify-content-between align-items-center">
											<span>www.todo.com</span>
											<img src="{{ URL::asset('images/icon/icon_28.svg') }}" alt="">
										</a>
									</div> <!-- /.overlay-content -->
								</div> <!-- /.block-wrapper -->
							</div>
							<div class="item">
								<div class="block-wrapper">
									<img src="{{ URL::asset('images/media/img_07.jpg') }}" alt="" class="screen">
									<div class="overlay-content d-flex align-items-end">
										<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}" class="d-flex justify-content-between align-items-center">
											<span>www.icon8.com</span>
											<img src="{{ URL::asset('images/icon/icon_28.svg') }}" alt="">
										</a>
									</div> <!-- /.overlay-content -->
								</div> <!-- /.block-wrapper -->
							</div>
							<div class="item">
								<div class="block-wrapper">
									<img src="{{ URL::asset('images/media/img_06.jpg') }}" alt="" class="screen">
									<div class="overlay-content d-flex align-items-end">
										<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}" class="d-flex justify-content-between align-items-center">
											<span>www.todo.com</span>
											<img src="{{ URL::asset('images/icon/icon_28.svg') }}" alt="">
										</a>
									</div> <!-- /.overlay-content -->
								</div> <!-- /.block-wrapper -->
							</div>
						</div> <!-- /.feedback_slider_three -->
					</div> <!-- /.slider-wrapper -->
				</div> <!-- /.inner-content -->
			</div> <!-- /.feedback-section-three -->


			<!-- 
			=============================================
				Vcamp Feature Section Four
			============================================== 
			-->
			<div class="vcamp-feature-section-four mt-250 lg-mt-150 md-mt-120">
				<img src="{{ URL::asset('images/shape/shape_05.svg') }}" alt="" class="shapes shape-one">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-xl-5 col-lg-6" data-aos="fade-right">
							<div class="text-wrapper mb-130 lg-mb-70">
								<div class="title-style-one">
									<h2 class="title">Why <br> you <span>choose</span> vCamp.</h2>
								</div>
								<p class="meta-info-text text-lg">Lorem ipsum dolor sit consecte adiel sed do eiusmod tem incid ut labore split.</p>
								<a href="{{ url('pages.essential.about-usV2') }}" class="theme-btn-three">Learn more <i class="fas fa-angle-right"></i></a>
							</div> <!-- /.text-wrapper -->
						</div>
						<div class="col-lg-6 ms-auto">
							<div class="row gx-5">
								<div class="col-sm-6" data-aos="fade-up">
									<div class="card-style-four mb-130 lg-mb-70">
										<div class="icon d-flex align-items-end"><img src="{{ URL::asset('images/icon/icon_29.svg') }}" alt="" class="tran3s"></div>
										<h4 class="title">File sharing</h4>
										<p>Elit esse cillum dolore eu fugiat nulla pariatur</p>
									</div> <!-- /.card-style-four -->
								</div>
								<div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
									<div class="card-style-four mb-130 lg-mb-70">
										<div class="icon d-flex align-items-end"><img src="{{ URL::asset('images/icon/icon_30.svg') }}" alt="" class="tran3s"></div>
										<h4 class="title">Team Managment</h4>
										<p>Elit esse cillum dolore eu fugiat nulla pariatur</p>
									</div> <!-- /.card-style-four -->
								</div>
								<div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
									<div class="card-style-four mb-130 lg-mb-70">
										<div class="icon d-flex align-items-end"><img src="{{ URL::asset('images/icon/icon_31.svg') }}" alt="" class="tran3s"></div>
										<h4 class="title">Cloud storage</h4>
										<p>Elit esse cillum dolore eu fugiat nulla pariatur</p>
									</div> <!-- /.card-style-four -->
								</div>
								<div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
									<div class="card-style-four mb-130 lg-mb-70">
										<div class="icon d-flex align-items-end"><img src="{{ URL::asset('images/icon/icon_32.svg') }}" alt="" class="tran3s"></div>
										<h4 class="title">Voice & video call</h4>
										<p>Elit esse cillum dolore eu fugiat nulla pariatur</p>
									</div> <!-- /.card-style-four -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.vcamp-feature-section-four -->



			<!--
			=====================================================
				Feedback Slider Four
			=====================================================
			-->
			<div class="feedback-section-four mt-130 lg-mt-80 sm-mt-40">
				<img src="{{ URL::asset('images/shape/shape_09.svg') }}" alt="" class="shapes shape-two">
				<img src="{{ URL::asset('images/shape/shape_10.svg') }}" alt="" class="shapes shape-three">
				<img src="{{ URL::asset('images/shape/shape_11.svg') }}" alt="" class="shapes shape-four">
				<div class="container">
					<div class="feedback_slider_four">
						<div class="item">
							<div class="row">
								<div class="col-xl-7 col-md-6 order-md-last">
									<div class="feedback-wrapper">
										<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_33.svg') }}" alt=""></div>
										<blockquote class="font-recoleta">“Certainly from my perspective, WordPress has been a great success—with <span>WordPress VIP</span> giving us that enterprise-level of assured quality on top.”</blockquote>
										<h6 class="name">Martin Jonas <br><span>USA</span></h6>
									</div> <!-- /.feedback-wrapper -->
								</div>
								<div class="col-xl-5 col-md-6 order-md-first">
									<div class="image-container">
										<img src="{{ URL::asset('images/media/img_08.jpg') }}" alt="">
										<img src="{{ URL::asset('images/shape/shape_08.svg') }}" alt="" class="shapes shape-one">
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-xl-7 col-md-6 order-md-last">
									<div class="feedback-wrapper">
										<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_33.svg') }}" alt=""></div>
										<blockquote class="font-recoleta">“Having a home based business makes wonderful asset to your life. The <span>WordPress VIP</span> stands it comes time advertise your business for a cheap cost.”</blockquote>
										<h6 class="name">Rashed Ka. <br><span>USA</span></h6>
									</div> <!-- /.feedback-wrapper -->
								</div>
								<div class="col-xl-5 col-md-6 order-md-first">
									<div class="image-container">
										<img src="{{ URL::asset('images/media/img_09.jpg') }}" alt="">
										<img src="{{ URL::asset('images/shape/shape_08.svg') }}" alt="" class="shapes shape-one">
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-xl-7 col-md-6 order-md-last">
									<div class="feedback-wrapper">
										<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_33.svg') }}" alt=""></div>
										<blockquote class="font-recoleta">“Certainly from my perspective, WordPress has been a great success—with <span>WordPress VIP</span> giving us that enterprise-level of assured quality on top.”</blockquote>
										<h6 class="name">Zubayer Hasan <br><span>SPAIN</span></h6>
									</div> <!-- /.feedback-wrapper -->
								</div>
								<div class="col-xl-5 col-md-6 order-md-first">
									<div class="image-container">
										<img src="{{ URL::asset('images/media/img_10.jpg') }}" alt="">
										<img src="{{ URL::asset('images/shape/shape_08.svg') }}" alt="" class="shapes shape-one">
									</div>
								</div>
							</div>
						</div>
					</div> <!-- /.feedback_slider_four -->
				</div>
			</div> <!-- /.feedback-section-four -->



			<!--
			=====================================================
				Contact Section Two
			=====================================================
			-->
			<div class="contact-section-two mt-200 mb-80 lg-mt-120">
				<div class="bg-wrapper">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-xl-5 col-lg-6 me-auto">
								<div class="contact-meta-one">
									<div class="title-style-one">
										<h2 class="title">Let’s talk <br>about your big <span>project</span></h2>
									</div>
									<p class="text-lg">eiusmod tempor incididunt. Ut enim mimu veniamnostrud elit.</p>
									<div class="help-text"><span>Urgent?</span> Call Us:</div>
									<a href="tel:+227-300-3676" class="call-button">+227 300-3676</a>
								</div> <!-- /.contact-meta-one -->
							</div>
							<div class="col-lg-6">
								<div class="form-style-one with-border md-mt-40">
									<form id="contact-form" action="inc/contact.php" data-toggle="validator">
										<div class="messages"></div>
										<div class="row controls">
											<div class="col-12">
												<div class="input-group-meta form-group mb-25">
													<label>Name*</label>
													<input type="text" placeholder="Rashed Kabir" name="name" required="required" data-error="Name is required.">
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
											<div class="col-12"><button class="theme-btn-one ripple-btn w-100">Send Message</button></div>
										</div>
									</form>
									<img src="{{ URL::asset('images/shape/shape_12.svg') }}" alt="" class="shapes shape-one">
								</div> <!-- /.form-style-one -->
							</div>
						</div>
					</div>
				</div> <!-- /.bg-wrapper -->
			</div> <!-- /.contact-section-two -->



			<!--
			=====================================================
				Partner Section Two
			=====================================================
			-->
			<div class="partner-section-two pt-180 mb-200 lg-pt-50 lg-mb-100">
				<img src="{{ URL::asset('images/shape/shape_13.svg') }}" alt="" class="shapes shape-one">
				<div class="container">
					<div class="row">
						<div class="col-xxl-7 col-xl-8 col-lg-6 col-md-8 col-sm-10 m-auto">
							<div class="title-style-one text-center">
								<div class="upper-title">Our partners</div>
								<h2 class="title">Our <span>partners</span> support us always</h2>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-11 m-auto">
							<div class="partent-logos">
								<div class="row g-0">
									<div class="col-md-3 col-6">
										<div class="logo d-flex align-items-center justify-content-center"><a href="#"><img src="{{ URL::asset('images/logo/logo-6.png') }}" alt="" class="tran3s"></a></div>
									</div>
									<div class="col-md-3 col-6">
										<div class="logo d-flex align-items-center justify-content-center"><a href="#"><img src="{{ URL::asset('images/logo/logo-7.png') }}" alt="" class="tran3s"></a></div>
									</div>
									<div class="col-md-3 col-6">
										<div class="logo d-flex align-items-center justify-content-center"><a href="#"><img src="{{ URL::asset('images/logo/logo-8.png') }}" alt="" class="tran3s"></a></div>
									</div>
									<div class="col-md-3 col-6">
										<div class="logo d-flex align-items-center justify-content-center"><a href="#"><img src="{{ URL::asset('images/logo/logo-9.png') }}" alt="" class="tran3s"></a></div>
									</div>
									<div class="col-md-3 col-6">
										<div class="logo d-flex align-items-center justify-content-center"><a href="#"><img src="{{ URL::asset('images/logo/logo-10.png') }}" alt="" class="tran3s"></a></div>
									</div>
									<div class="col-md-3 col-6">
										<div class="logo d-flex align-items-center justify-content-center"><a href="#"><img src="{{ URL::asset('images/logo/logo-11.png') }}" alt="" class="tran3s"></a></div>
									</div>
									<div class="col-md-3 col-6">
										<div class="logo d-flex align-items-center justify-content-center"><a href="#"><img src="{{ URL::asset('images/logo/logo-12.png') }}" alt="" class="tran3s"></a></div>
									</div>
									<div class="col-md-3 col-6">
										<div class="logo d-flex align-items-center justify-content-center"><a href="#"><img src="{{ URL::asset('images/logo/logo-13.png') }}" alt="" class="tran3s"></a></div>
									</div>
								</div>
							</div> <!-- /.partent-logos -->
						</div>
					</div>
				</div>
			</div> <!-- /.partner-section-two -->


			<!--
			=====================================================
				Address Section Two
			=====================================================
			-->
			<div class="address-section-two">
				<div class="container">
					<div class="inner-content">
						<div class="row g-0">
							<div class="col-md-6">
								<div class="address-block-two d-flex border-right">
									<img src="{{ URL::asset('images/icon/icon_34.svg') }}" alt="" class="icon">
									<div class="text-meta">
										<h4 class="title">Our Address</h4>
										<p>1012 Pebda Parkway, Mirpur 2 <br>Dhaka, Bangladesh</p>
									</div> <!-- /.text-meta -->
								</div> <!-- /.address-block-two -->
							</div>
							<div class="col-md-6">
								<div class="address-block-two d-flex">
									<img src="{{ URL::asset('images/icon/icon_35.svg') }}" alt="" class="icon">
									<div class="text-meta">
										<h4 class="title">Contact Info</h4>
										<p>Open a chat or give us call at <br><a href="#">310.841.5500</a></p>
									</div> <!-- /.text-meta -->
								</div> <!-- /.address-block-two -->
							</div>
						</div>
					</div> <!-- /.inner-content -->
				</div>
			</div> <!-- /.address-section-two -->
			


			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<div class="vcamp-footer-one dark-bg">
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
											<img src="{{ URL::asset('images/shape/shape_14.svg') }}" alt="" class="shape mt-15 d-none d-md-block">
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