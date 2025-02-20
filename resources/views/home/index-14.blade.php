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
			<header class="theme-main-menu sticky-menu theme-menu-seven white-vr">
				<div class="inner-content">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo"><a href="{{ url('home.index') }}"><img src="{{ URL::asset('images/logo/vCamp_12.png') }}" alt="" width="127"></a></div>
						<nav class="navbar navbar-expand-lg">
							<button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						    	<span></span>
						 	</button>
						    <div class="collapse navbar-collapse dark-style" id="navbarNav">
						    	<ul class="navbar-nav">
						    		<li class="d-block d-lg-none"><div class="logo"><a href="{{ url('home.index') }}"><img src="{{ URL::asset('images/logo/vCamp_04.png') }}" alt="" width="127"></a></div></li>
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
							<a href="{{ url('shop.sign-in') }}" class="d-flex align-items-center login-btn">
								<img src="{{ URL::asset('images/icon/icon_44.svg') }}" alt="">
								<span class="font-zen">login</span>
							</a>
							<a href="{{ url('shop.sign-up') }}" class="d-none d-lg-block sign-up-btn font-zen">Sign Up</a>
						</div> <!-- /.right-widget -->
					</div>
				</div> <!-- /.inner-content -->
			</header> <!-- /.theme-main-menu -->


			
			<!-- 
			=============================================
				Theme Hero Banner
			============================================== 
			-->
			<div class="hero-banner-thirteen">
				<div class="container">
					<div class="row align-items-end justify-content-between">
						<div class="col-xxl-7 col-lg-6 col-md-8">
							<div class="text-wrapper position-relative">
								<h1 class="hero-heading font-zen">Qulaity, Experience & Brand.</h1>
								<p class="text-lg pt-15 pb-40 md-pb-30">We've done it carefully and simply. Combined with the ingredients makes for beautiful landings.</p>
								<a href="#" class="theme-btn-sixteen" data-bs-toggle="modal" data-bs-target="#contactModal">Get Started</a>
								<div class="demo-text font-zen">We’r trusted parnter of giant google</div>
							</div>
						</div>
					</div>

					<div class="right-content-wrapper">
						<img src="{{ URL::asset('images/shape/shape_73.svg') }}" alt="" class="circle-text shapes">
						<img src="{{ URL::asset('images/shape/shape_74.svg') }}" alt="" class="circle-shape shapes">
						<div class="hero_slider_four">
							<div class="item">
								<div class="img-meta">
									<img src="{{ URL::asset('images/media/img_128.jpg') }}" alt="" class="main-img">
									<div class="slide-count font-zen">Slider Image 01</div>
								</div>
							</div>
							<div class="item">
								<div class="img-meta">
									<img src="{{ URL::asset('images/media/img_129.jpg') }}" alt="" class="main-img">
									<div class="slide-count font-zen">Slider Image 02</div>
								</div>
							</div>
							<div class="item">
								<div class="img-meta">
									<img src="{{ URL::asset('images/media/img_130.jpg') }}" alt="" class="main-img">
									<div class="slide-count font-zen">Slider Image 03</div>
								</div>
							</div>
						</div>
						<div class="rating-box">
							<img src="{{ URL::asset('images/shape/shape_72.svg') }}" alt="">
							<div class="rate font-zen">9.3 <br><span>Rating</span></div>
						</div> <!-- /.rating-box -->
					</div> <!-- /.right-content-wrapper -->
				</div>
			</div> <!-- /.hero-banner-thirteen -->


			<!-- 
			=============================================
				Vcamp Feature Section Fourteen
			============================================== 
			-->
			<div class="vcamp-feature-section-fourteen mt-160 lg-mt-120">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-lg-5" data-aos="fade-right">
							<div class="title-style-thirteen">
								<div class="upper-title">What We Do</div>
								<h2 class="title">Experties Field.</h2>
							</div> <!-- /.title-style-thirteen -->
							<p class="pt-25 pb-30">Elit esse cillum dolore eu fugiat nulla pariatur lorem dui.</p>
							<a href="{{ url('pages.essential.about-usV2') }}" class="theme-btn-seventeen">Learn more</a>
						</div>
						<div class="col-lg-7 ms-auto md-mt-60">
							<div class="card-style-fourteen d-md-flex align-items-center" data-aos="fade-up">
								<div class="icon"><img src="{{ URL::asset('images/icon/icon_113.svg') }}" alt=""></div>
								<div class="title-wrapper">
									<h4><a href="#">Market Analysis .</a></h4>
									<p>Elit esse cillum dolore eu fugiat nulla pariatur lorem dui.</p>
								</div> <!-- /.title-wrapper -->
								<a href="#" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
							</div> <!-- /.card-style-fourteen -->
							<div class="card-style-fourteen d-md-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
								<div class="icon"><img src="{{ URL::asset('images/icon/icon_114.svg') }}" alt=""></div>
								<div class="title-wrapper">
									<h4><a href="#">Expert Consulting.</a></h4>
									<p>Elit esse cillum dolore eu fugiat nulla pariatur lorem dui.</p>
								</div> <!-- /.title-wrapper -->
								<a href="#" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
							</div> <!-- /.card-style-fourteen -->
							<div class="card-style-fourteen d-md-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
								<div class="icon"><img src="{{ URL::asset('images/icon/icon_115.svg') }}" alt=""></div>
								<div class="title-wrapper">
									<h4><a href="#">Digital Marketing.</a></h4>
									<p>Elit esse cillum dolore eu fugiat nulla pariatur lorem dui.</p>
								</div> <!-- /.title-wrapper -->
								<a href="#" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
							</div> <!-- /.card-style-fourteen -->
							<div class="card-style-fourteen d-md-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
								<div class="icon"><img src="{{ URL::asset('images/icon/icon_116.svg') }}" alt=""></div>
								<div class="title-wrapper">
									<h4><a href="#">Advance Digital solution.</a></h4>
									<p>The web is our passion, and we’re passionate about helping businesses reach their goals.</p>
								</div> <!-- /.title-wrapper -->
								<a href="#" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
							</div> <!-- /.card-style-fourteen -->
						</div>
					</div>
				</div>
			</div> <!-- /.vcamp-feature-section-fourteen -->


			<!-- 
			=============================================
				Vcamp Feature Section Fifteen
			============================================== 
			-->
			<div class="vcamp-feature-section-fifteen mt-150 lg-mt-100">
				<div class="container">
					<div class="row">
						<div class="col-lg-6" data-aos="fade-right">
							<div class="title-style-thirteen md-mb-20">
								<h2 class="title">Grow your business through vCamp.</h2>
							</div> <!-- /.title-style-thirteen -->
						</div>
						<div class="col-xxl-5 col-lg-6 ms-auto" data-aos="fade-left">
							<p class="sub-text">Top 10 digital agencies. We get international awards for projects we complete for our clients. The most awarded marketing agency.</p>
							<a href="{{ url('pages.essential.about-usV1') }}" class="theme-btn-eighteen font-zen">More About us</a>
						</div>
					</div>

					<div class="inner-wrapper position-relative mt-80 lg-mt-50" data-aos="fade-up">
						<div class="row gx-0">
							<div class="col-lg-4">
								<div class="card-style-fifteen text-center">
									<div class="main-count font-zen"><span class="counter">10</span>+</div>
									<h4 class="font-zen">Years Expereince</h4>
									<p>We’v experience more than <span>10+ years</span> with success.</p>
									<a href="#" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
								</div> <!-- /.card-style-fifteen -->
							</div>
							<div class="col-lg-4">
								<div class="card-style-fifteen text-center">
									<div class="main-count font-zen"><span class="counter">03</span>+</div>
									<h4 class="font-zen">Award Winner</h4>
									<p>We achive lot for our work from top certified agency.</p>
									<a href="#" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
								</div> <!-- /.card-style-fifteen -->
							</div>
							<div class="col-lg-4">
								<div class="card-style-fifteen text-center">
									<div class="main-count font-zen"><span class="counter">3</span>k+</div>
									<h4 class="font-zen">Successfull Job</h4>
									<p>We’v more than happy <span>3000+ client</span> all over the world.</p>
									<a href="#" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
								</div> <!-- /.card-style-fifteen -->
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.vcamp-feature-section-fifteen -->

			

			<!--
			=====================================================
				Portfolio Gallery Nine
			=====================================================
			-->
			<div class="portfolio-gallery-nine mt-150 lg-mt-100" data-aos="fade-up">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-xxl-5 col-xl-6 col-lg-5 col-md-7 col-sm-9">
							<div class="title-style-thirteen text-center text-sm-start">
								<h2 class="title">Our  Projects.</h2>
							</div> <!-- /.title-style-thirteen -->
						</div>
						<div class="col-md-5 col-sm-3 d-flex justify-content-center justify-content-sm-end">
							<ul class="slider-arrows d-flex style-none xs-mt-20">
								<li class="prev_btn2 slick-arrow ripple-btn"><i class="bi bi-arrow-left"></i></li>
								<li class="next_btn2 slick-arrow ripple-btn"><i class="bi bi-arrow-right"></i></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="portfolio-slider-five pt-80 lg-pt-40">
					<div class="item">
						<div class="gallery-item">
							<div class="img-holder position-relative">
								<img src="{{ URL::asset('images/gallery/img_111.jpg') }}" alt="" class="w-100">
								<div class="caption">
									<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
									<h6><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="pj-title font-zen tran3s">Best Selling <br>plugin.</a></h6>
								</div> <!-- /.caption -->
							</div> <!-- /.img-holder -->
						</div> <!-- /.gallery-item -->
					</div>
					<div class="item">
						<div class="gallery-item">
							<div class="img-holder position-relative">
								<img src="{{ URL::asset('images/gallery/img_112.jpg') }}" alt="" class="w-100">
								<div class="caption">
									<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
									<h6><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="pj-title font-zen tran3s">Best Service <br>provider.</a></h6>
								</div> <!-- /.caption -->
							</div> <!-- /.img-holder -->
						</div> <!-- /.gallery-item -->
					</div>
					<div class="item">
						<div class="gallery-item">
							<div class="img-holder position-relative">
								<img src="{{ URL::asset('images/gallery/img_113.jpg') }}" alt="" class="w-100">
								<div class="caption">
									<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
									<h6><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="pj-title font-zen tran3s">Client business <br>Model.</a></h6>
								</div> <!-- /.caption -->
							</div> <!-- /.img-holder -->
						</div> <!-- /.gallery-item -->
					</div>
					<div class="item">
						<div class="gallery-item">
							<div class="img-holder position-relative">
								<img src="{{ URL::asset('images/gallery/img_114.jpg') }}" alt="" class="w-100">
								<div class="caption">
									<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
									<h6><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="pj-title font-zen tran3s">Best Marketing <br>Strategy.</a></h6>
								</div> <!-- /.caption -->
							</div> <!-- /.img-holder -->
						</div> <!-- /.gallery-item -->
					</div>
					<div class="item">
						<div class="gallery-item">
							<div class="img-holder position-relative">
								<img src="{{ URL::asset('images/gallery/img_112.jpg') }}" alt="" class="w-100">
								<div class="caption">
									<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
									<h6><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="pj-title font-zen tran3s">Best Service <br>provider.</a></h6>
								</div> <!-- /.caption -->
							</div> <!-- /.img-holder -->
						</div> <!-- /.gallery-item -->
					</div>
				</div>
			</div> <!-- /.portfolio-gallery-nine -->
			



			<!--
			=====================================================
				Vcamp Text Block Eighteen
			=====================================================
			-->
			<div class="vcamp-text-block-eighteen mt-130 lg-mt-100">
				<div class="container">
					<div class="row align-items-xl-center">
						<div class="col-xxl-6 col-xl-7 col-lg-5" data-aos="fade-right">
							<div class="title-style-thirteen">
								<div class="upper-title">WHY CHOOSE US</div>
								<h2 class="title">We’ve been helping cutomer globally.</h2>
							</div> <!-- /.title-style-thirteen -->
						</div>
						<div class="col-xl-5 col-lg-6 ms-auto" data-aos="fade-left">
							<div class="accordion accordion-style-five md-mt-30" id="accordionOne">
								<div class="accordion-item">
								    <div class="accordion-header" id="headingOne">
								      	<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								        	Quality Services
								      	</button>
								    </div>
								    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionOne">
								    	<div class="accordion-body">
								        	<p>You can tackle this program at your own availability. So whether you have an hour per day spare or an hour per week.</p>
								    	</div>
								    </div>
							  	</div>
							  	<div class="accordion-item">
								    <div class="accordion-header" id="headingTwo">
								      	<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								        	Low Pricing
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
								        	Secure & Trusted
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
			</div> <!-- /.vcamp-text-block-eighteen -->


			<!--
			=====================================================
				Vcamp Fancy Banner Two
			=====================================================
			-->
			<div class="container">
				<div class="fancy-banner-ten mt-140 lg-mt-100" data-aos="fade-up">
					<div class="inner-content h-100 position-relative d-flex align-items-center justify-content-center">
						<a class="fancybox video-icon d-flex align-items-center justify-content-center" data-fancybox="" href="https://www.youtube.com/embed/aXFSJTjVjw0" tabindex="0">
							<i class="bi bi-play-fill"></i>
						</a>
					</div> <!-- /.inner-content -->
				</div>
			</div> <!-- /.fancy-banner-ten -->



			<!-- 
			=============================================
				Feedback Section Fourteen
			============================================== 
			-->
			<div class="feedback-section-fourteen" data-aos="fade-up">
				<div class="container">
					<div class="icon d-flex align-items-center justify-content-center mb-40 lg-mb-20"><img src="{{ URL::asset('images/icon/icon_117.svg') }}" alt="" class="icon"></div>
					<div class="row">
						<div class="col-xl-10 col-lg-9 m-auto">
							<div class="feedback_slider_nine">
								<div class="item">
									<div class="testimonial-block-five text-center tran3s">
										<p class="font-zen">Having a home based business is  wonderful asset to your life. The problem still stands comes time your business. Quis lorem elite.</p>
										<h6>Jesica Cowdhury, <span>USA</span></h6>
									</div> <!-- /.testimonial-block-five -->
								</div>

								<div class="item">
									<div class="testimonial-block-five text-center tran3s">
										<p class="font-zen">Apart from counting words and characters, our online editor improve word choice and writing style, and, optionally.</p>
										<h6>Frances Baldwin, <span>Houston</span></h6>
									</div> <!-- /.testimonial-block-five -->
								</div>

								<div class="item">
									<div class="testimonial-block-five text-center tran3s">
										<p class="font-zen">Knowing the word count of a text can be important. For example, if an author has to write a minimum or maximum amount of words.</p>
										<h6>Michael Phillips, <span>Norwich</span></h6>
									</div> <!-- /.testimonial-block-five -->
								</div>
							</div> <!-- /.feedback_slider_nine -->
						</div>
					</div>
				</div> <!-- /.container -->
				<div class="rating-box">
					<img src="{{ URL::asset('images/shape/shape_72.svg') }}" alt="">
					<div class="rate font-zen">9.3 <br><span>Rating</span></div>
				</div>
			</div> <!-- /.feedback-section-fourteen -->


			<!--
			=====================================================
				Team Section Six
			=====================================================
			-->
			<div class="team-section-six pt-120 pb-150 lg-pt-80 lg-pb-100">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-8 col-md-9 text-center text-md-start" data-aos="fade-right">
							<div class="title-style-thirteen">
								<h2 class="title">Our Team</h2>
							</div> <!-- /.title-style-thirteen -->
							<p class="text-lg pt-15 m0 lg-pt-10 sm-pb-30">We’ve skilled team to provide you qulaity services.</p>
						</div>
						<div class="col-lg-4 col-md-3 text-center text-md-end" data-aos="fade-left">
							<a href="#" class="theme-btn-seventeen">Join Now</a>
						</div>
					</div>
					<div class="row pt-35 lg-pt-20">
						<div class="col-lg-3 col-sm-6">
							<div class="team-block-five mt-30" data-aos="fade-up">
								<div class="img-holder"><img src="{{ URL::asset('images/team/img_26.jpg') }}" alt="" class="w-100"></div>
								<div class="text tran3s">
									<h6 class="name tran3">Rashed ul Kabir</h6>
									<div class="info tran3">Owner & Founder</div>
								</div> <!-- /.text -->
							</div> <!-- /.team-block-five -->
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="team-block-five mt-30" data-aos="fade-up" data-aos-delay="100">
								<div class="img-holder"><img src="{{ URL::asset('images/team/img_27.jpg') }}" alt="" class="w-100"></div>
								<div class="text tran3s">
									<h6 class="name tran3">Jubayer Hasan</h6>
									<div class="info tran3">Project Manager</div>
								</div> <!-- /.text -->
							</div> <!-- /.team-block-five -->
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="team-block-five mt-30" data-aos="fade-up" data-aos-delay="200">
								<div class="img-holder"><img src="{{ URL::asset('images/team/img_28.jpg') }}" alt="" class="w-100"></div>
								<div class="text tran3s">
									<h6 class="name tran3">Mahfuz Riad</h6>
									<div class="info tran3">Product Design</div>
								</div> <!-- /.text -->
							</div> <!-- /.team-block-five -->
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="team-block-five mt-30" data-aos="fade-up" data-aos-delay="300">
								<div class="img-holder"><img src="{{ URL::asset('images/team/img_29.jpg') }}" alt="" class="w-100"></div>
								<div class="text tran3s">
									<h6 class="name tran3">Eh Jwel</h6>
									<div class="info tran3">UI Design</div>
								</div> <!-- /.text -->
							</div> <!-- /.team-block-five -->
						</div>
					</div>
				</div>
			</div> <!-- /.team-section-six -->


			<!--
			=====================================================
				Blog Section Seven
			=====================================================
			-->
			<div class="blog-section-seven mt-110 lg-mt-80">
				<div class="container">
					<div class="title-style-thirteen text-center pb-35 lg-pb-10" data-aos="fade-up">
						<h2 class="title">Recent News</h2>
					</div> <!-- /.title-style-thirteen -->

					<div class="row gx-xl-5">
						<div class="col-sm-6" data-aos="fade-up">
							<article class="blog-meta-six mt-40">
								<div class="img-meta position-relative">
									<img src="{{ URL::asset('images/blog/blog_img_22.jpg') }}" alt="" class="w-100">
									<a href="{{ url('blog.blog-detailsV3') }}" class="tag">Soltuion</a>
								</div>
								<div class="post-info">Featured - <span class="date">18 Jul 2022</span></div>
								<a href="{{ url('blog.blog-detailsV3') }}" class="title">Print, publishing qui visual ux layout mockups.</a>
								<a href="{{ url('blog.blog-detailsV1') }}" class="read-more font-zen tran3s">Continue reading <i class="fas fa-angle-right"></i></a>
							</article> <!-- /.blog-meta-six -->
						</div>
						<div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
							<article class="blog-meta-six mt-40">
								<div class="img-meta position-relative">
									<img src="{{ URL::asset('images/blog/blog_img_23.jpg') }}" alt="" class="w-100">
									<a href="{{ url('blog.blog-detailsV3') }}" class="tag">MARKETING</a>
								</div>
								<div class="post-info"><span class="date">18 Jul 2022</span></div>
								<a href="{{ url('blog.blog-detailsV3') }}" class="title">Designer’s Checklist for Every UX/UI Project.</a>
								<a href="{{ url('blog.blog-detailsV1') }}" class="read-more font-zen tran3s">Continue reading <i class="fas fa-angle-right"></i></a>
							</article> <!-- /.blog-meta-six -->
						</div>
					</div>
				</div>
			</div> <!-- /.blog-section-seven -->



			<!--
			=====================================================
				Vcamp Fancy Banner Eleven
			=====================================================
			-->
			<div class="fancy-banner-eleven dark-style mt-150 lg-mt-100" >
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-7" data-aos="fade-right">
							<div class="title-style-thirteen white-vr">
								<div class="upper-title">Subscirbe Now</div>
								<h2 class="title">Subscribe to Our newsletter.</h2>
							</div> <!-- /.title-style-thirteen -->
						</div>
						<div class="col-lg-5" data-aos="fade-left">
							<div class="form-wrapper">
								<form action="#" class="position-relative">
									<input type="email" placeholder="Email address">
									<button><i class="bi bi-envelope"></i></button>
								</form>
								<div class="info">Already a member? <a href="{{ url('shop.sign-in') }}">Sign in.</a></div>
							</div> <!-- /.form-wrapper -->
						</div>
					</div>
				</div>
			</div> <!-- /.fancy-banner-eleven -->



			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer class="vcamp-footer-seven">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-lg-3 mb-40">
							<h2 class="intro font-zen">vCamp <br>Say <span>Hi to All!</span></h2>
							<ul class="d-flex social-icon style-none">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-2 col-md-3 col-sm-6 mb-40">
							<h5 class="title font-zen">Links</h5>
							<ul class="footer-list style-none">
								<li><a href="{{ url('home.index') }}">Home</a></li>
								<li><a href="{{ url('pages.essential.pricingV1') }}">Pricing</a></li>
								<li><a href="{{ url('pages.essential.about-usV1') }}">About us</a></li>
								<li><a href="{{ url('pages.support.serviceV2') }}">Service</a></li>
								<li><a href="{{ url('pages.support.serviceV3') }}">Features</a></li>
								<li><a href="{{ url('blog.blogV4') }}">Blog</a></li>
							</ul>
						</div>
						<div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6 mb-40">
							<h5 class="title font-zen">Legal</h5>
							<ul class="footer-list style-none">
								<li><a href="{{ url('pages.other.faqV1') }}">Terms of use</a></li>
								<li><a href="{{ url('pages.other.faqV1') }}">Terms &amp; conditions</a></li>
								<li><a href="{{ url('pages.other.faqV1') }}">Privacy policy</a></li>
								<li><a href="{{ url('pages.other.faqV1') }}">Cookie policy</a></li>
							</ul>
						</div>
						<div class="col-xxl-4 col-xl-3 col-lg-4 col-md-5 mb-40">
							<div class="address ps-xxl-5 ms-xxl-5">
								<h5 class="title font-zen">Contact</h5>
								<p>915 Cheshire Road, Stratford,<br> United States</p>
								<a href="#" class="email tran3s">ask@vcamp.com</a>
								<h5 class="title sm font-zen">Call us at</h5>
								<a href="#" class="call tran3s">(880) 230 750 009</a>
							</div> <!-- /.address -->
						</div>
					</div>
				</div>
				<div class="container">
					<div class="bottom-footer">
						<div class="row align-items-center">
							<div class="col-lg-4 order-lg-1 mb-15">
								<div class="logo text-center text-lg-start"><a href="{{ url('home.index') }}"><img src="{{ URL::asset('images/logo/vCamp_15.png') }}" alt=""></a></div>
							</div>
							<div class="col-lg-4 order-lg-3 mb-15">
								<ul class="d-flex justify-content-center justify-content-lg-end footer-nav style-none">
									<li><a href="{{ url('pages.other.faqV1') }}">Privacy &amp; Terms.</a></li>
									<li><a href="{{ url('pages.support.contactV1') }}">Contact Us</a></li>
								</ul>
							</div>
							<div class="col-lg-4 order-lg-2 mb-15">
								<p class="copyright text-center">Copyright @2022 vcamp inc.</p>
							</div>
						</div>
					</div>
				</div>
			</footer> <!-- /.vcamp-footer-seven -->



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