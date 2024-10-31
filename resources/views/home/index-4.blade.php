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
	<title>ILAB UNMUL</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="{{ URL::asset('images/ilab/logo/unmul2.webp') }}">
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
						<div class="icon"><img src="{{ URL::asset('images/ilab/logo/unmul.webp') }}" alt="" class="m-auto d-block"> <span></span></div>
						<div class="txt-loading mt-4">
							<span data-text-preloader="I" class="letters-loading">
								I
							</span>
							<span data-text-preloader="L" class="letters-loading">
								L
							</span>
							<span data-text-preloader="A" class="letters-loading">
								A
							</span>
							<span data-text-preloader="B" class="letters-loading">
								B
							</span>
							<span data-text-preloader=" " class="letters-loading">

							</span>
							<span data-text-preloader="U" class="letters-loading">
								U
							</span>
							<span data-text-preloader="N" class="letters-loading">
								N
							</span>
							<span data-text-preloader="M" class="letters-loading">
								M
							</span>
							<span data-text-preloader="U" class="letters-loading">
								U
							</span>
							<span data-text-preloader="L" class="letters-loading">
								L
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
				<div class="logo"><a href="{{ url('home.index-4') }}"><img src="{{ URL::asset('images/ilab/logo/unmul3.png') }}" alt="" width="127"></a></div>
				<button type="button" class="close-btn tran3s" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></button>
			</div>

			<div class="sidebar-nav-item">
				<ul class="style-none">
					<li class="nav-item">
						<a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Home</a>
						<ul class="dropdown-menu">
							<li><a href="{{ url('home.index-4') }}" class="dropdown-item"><span>Creative Agency</span></a></li>
							<li><a href="{{ url('home.index-4-2') }}" class="dropdown-item"><span>Business</span></a></li>
							<li><a href="{{ url('home.index-4-3') }}" class="dropdown-item"><span>Agency Minimal</span></a></li>
							<li><a href="{{ url('home.index-4') }}" class="dropdown-item"><span>Service Provider</span></a></li>
							<li><a href="{{ url('home.index-4-5') }}" class="dropdown-item"><span>Startup</span></a></li>
							<li><a href="{{ url('home.index-4-6') }}" class="dropdown-item"><span>Design Studio Light</span></a></li>
							<li><a href="{{ url('home.index-4-7') }}" class="dropdown-item"><span>Design Studio Dark</span></a></li>
							<li><a href="{{ url('home.index-4-8') }}" class="dropdown-item"><span>Shop Standard</span></a></li>
							<li><a href="{{ url('home.index-4-9') }}" class="dropdown-item"><span>Shop Creative</span></a></li>
							<li><a href="{{ url('home.index-4-10') }}" class="dropdown-item"><span>Startup Agency</span></a></li>
							<li><a href="{{ url('home.index-4-11') }}" class="dropdown-item"><span>Consulting Agency</span></a></li>
							<li><a href="{{ url('home.index-4-12') }}" class="dropdown-item"><span>Photographer Portfolio</span></a></li>
							<li><a href="{{ url('home.index-4-13') }}" class="dropdown-item"><span>Designer Portfolio</span></a></li>
							<li><a href="{{ url('home.index-4-14') }}" class="dropdown-item"><span>Marketing Agency</span></a></li>
							<li><a href="{{ url('home.index-4-15') }}" class="dropdown-item"><span>Design Agency Portfolio</span></a></li>
							<li><a href="{{ url('home.index-4-16') }}" class="dropdown-item"><span>Startup Modern</span></a></li>
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
					<div class="logo"><a href="{{ url('home.index-4') }}"><img src="{{ URL::asset('images/ilab/logo/unmul3.png') }}" alt="" width="127"></a></div>
					<nav class="navbar navbar-expand-lg">
						<button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav">
								<li class="d-block d-lg-none">
									<div class="logo"><a href="{{ url('home.index-4') }}"><img src="{{ URL::asset('images/logo/vCamp_01.png') }}" alt="" width="127"></a></div>
								</li>
								<li class="nav-item active dropdown mega-dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Beranda</a>
									<!--<ul class="dropdown-menu">
							                <li class="pb-20">
							                	<div class="row gx-2">
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-4') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home02.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-4') }}" class="dropdown-item"><span>Creative Agency</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-4-2') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home01.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-4-2') }}" class="dropdown-item"><span>Business</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-4-3') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home03.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-4-3') }}" class="dropdown-item"><span>Agency Minimal</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-4') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home04.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-4') }}" class="dropdown-item"><span>Service Provider</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-4-5') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home05.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-4-5') }}" class="dropdown-item"><span>Startup</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-4-6') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home06.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-4-6') }}" class="dropdown-item"><span>Design Studio Light</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-4-7') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home07.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-4-7') }}" class="dropdown-item"><span>Design Studio Dark</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-4-8') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home08.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-4-8') }}" class="dropdown-item"><span>Shop Standard</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-4-9') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home09.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-4-9') }}" class="dropdown-item"><span>Shop Creative</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-4-10') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home10.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-4-10') }}" class="dropdown-item"><span>Startup Agency</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-4-11') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home11.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-4-11') }}" class="dropdown-item"><span>Consulting Agency</span></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-4-12') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home13.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-4-12') }}" class="dropdown-item"><span>Photographer Portfolio</span><i class="tag">New</i></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-4-13') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home14.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-4-13') }}" class="dropdown-item"><span>Designer Portfolio</span><i class="tag">New</i></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-4-14') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home15.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-4-14') }}" class="dropdown-item"><span>Marketing Agency</span><i class="tag">New</i></a>
							                		</div>
							                		<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-4-15') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home18.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-4-15') }}" class="dropdown-item"><span>Design Agency Portfolio</span><i class="tag">New</i></a>
							                		</div>
													<div class="col-lg-2 mt-15 border-0 text-center home-sub-menu">
							                			<a href="{{ url('home.index-4-16') }}" class="d-block img-meta"><img src="{{ URL::asset('images/nav-img/home16.jpg') }}" alt="" class="tran4s"></a>
							                			<a href="{{ url('home.index-4-16') }}" class="dropdown-item"><span>Startup Modern</span><i class="tag">New</i></a>
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
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Layanan</a>
									<ul class="dropdown-menu">
										<li><a href="{{ url('home.index-4') }}" class="dropdown-item"><span>Pendidikan</span></a></li>
										<li><a href="{{ url('home.index-4') }}" class="dropdown-item"><span>Penelitian</span></a></li>
										<li><a href="{{ url('home.index-4') }}" class="dropdown-item"><span>Pengajuan</span></a></li>
										<!-- <li class="dropdown-submenu dropdown">
							                	<a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Blog Details</span></a>
							                	<ul class="dropdown-menu">
									            	<li><a href="{{ url('blog.blog-detailsV1') }}" class="dropdown-item"><span>Standard</span></a></li>
										            <li><a href="{{ url('blog.blog-detailsV2') }}" class="dropdown-item"><span>Featured Image</span></a></li>
										            <li><a href="{{ url('blog.blog-detailsV3') }}" class="dropdown-item"><span>Creative Dark</span></a></li>
									            </ul>
							                </li>-->
									</ul>
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
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Pengumuman</a>
									<!--<ul class="dropdown-menu">
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
						                </ul>-->
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Lainnya</a>
									<ul class="dropdown-menu">
										<li><a href="{{ url('home.index-4') }}" class="dropdown-item"><span>FAQ</span></a></li>
										<li><a href="{{ url('home.index-4') }}" class="dropdown-item"><span>Download</span></a></li>
										<li><a href="{{ url('home.index-4') }}" class="dropdown-item"><span>Galeri</span></a></li>
										<li><a href="{{ url('home.index-4') }}" class="dropdown-item"><span>Kontak</span></a></li>
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
				Theme Hero Banner
			============================================== 
			-->
		<div class="box-layout">
			<div class="hero-banner-four">
				<div class="hero_slider_two">
					<div class="item">
						<div class="content-wrapper">
							<img src="{{ URL::asset('images/ilab/galeri/ilab 2.jpg') }}" alt="" class="hero-img">
							<div class="slider-inner">
								<div class="hero-content">
									<a class="fancybox video-icon d-flex align-items-center justify-content-center" data-fancybox="" href="https://www.youtube.com/embed/2_MvPqJuyDY">
										<img src="{{ URL::asset('images/icon/icon_41.svg') }}" alt="">
									</a>
									<h2 class="hero-heading position-relative">Visi</h2>
									<p class="hero-sub-heading position-relative">Menjadi laboratorium terpadu bersertifikasi internasional yang mampu menyelenggarakan dan atau memfasilitasi penelitian di lingkungan iklim tropis lembab untuk menghasilkan produk-produk ilmiah unggulan yang bermanfaat kepada masyarakat.</p>
									<a href="{{ url('home.index-4') }}" class="theme-btn-one border0 ripple-btn">Let’s Talk</a>
								</div> <!-- /.hero-content -->
							</div> <!-- /.slider-inner -->
						</div>
					</div>
					<div class="item">
						<div class="content-wrapper">
							<img src="{{ URL::asset('images/ilab/galeri/ilab 16.jpg') }}" alt="" class="hero-img">
							<div class="slider-inner">
								<div class="hero-content">
									<a class="fancybox video-icon d-flex align-items-center justify-content-center" data-fancybox="" href="https://www.youtube.com/embed/2_MvPqJuyDY">
										<img src="{{ URL::asset('images/icon/icon_41.svg') }}" alt="">
									</a>
									<h2 class="hero-heading position-relative">Misi</h2>
									<p class="hero-sub-heading position-relative">Universitas Mulawarman memfasilitasi penelitian unggulan di lingkungan tropis lembab untuk peneliti internal dan global, menyediakan layanan pengujian laboratorium yang terjamin akurasi, serta mendukung kerjasama penelitian dan pelatihan dengan instansi dan industri, baik lokal maupun internasional.</p>
									<a href="{{ url('home.index-4') }}" class="theme-btn-one border0 ripple-btn">Let’s Talk</a>
								</div> <!-- /.hero-content -->
							</div> <!-- /.slider-inner -->
						</div>
					</div>
					<div class="item">
						<div class="content-wrapper">
							<img src="{{ URL::asset('images/ilab/galeri/ilab 17.jpg') }}" alt="" class="hero-img">
							<div class="slider-inner">
								<div class="hero-content">
									<a class="fancybox video-icon d-flex align-items-center justify-content-center" data-fancybox="" href="https://www.youtube.com/embed/2_MvPqJuyDY">
										<img src="{{ URL::asset('images/icon/icon_41.svg') }}" alt="">
									</a>
									<h2 class="hero-heading position-relative">Tujuan</h2>
									<p class="hero-sub-heading position-relative">Melaksanakan fungsi laboratorium terpadu yang terakreditasi sesuai dengan misi-misi yang diemban dalam mendukung bidang kemajuan keilmuan baik secara internal (Universitas Mulawarman) maupun pihak external secara internasional. </p>
									<a href="{{ url('home.index-4') }}" class="theme-btn-one border0 ripple-btn">Let’s Talk</a>
								</div> <!-- /.hero-content -->
							</div> <!-- /.slider-inner -->
						</div>
					</div>
				</div>
			</div> <!-- /.hero-banner-four -->
		</div> <!-- /.box-layout -->




		<!-- 
			=============================================
				Vcamp Text Block Three
			============================================== 
			-->
		<div class="vcamp-text-block-three dark-bg">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 ms-auto order-md-last" data-aos="fade-left">
						<div class="text-wrapper">
							<h6>Alamat</h6>
							<p></span>Jl. Long Apari, Gn. Kelua, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243</p>
							<div class="name position-relative">email: ilab@unmul.ac.id</div>
						</div>
					</div>
					<div class="col-md-6 text-md-start text-center" data-aos="fade-right">
						<div class="img-container position-relative d-inline-block sm-mt-50">
							<img src="{{ URL::asset('images/ilab/ilab.jpg') }}" alt="">
						</div>
					</div>
				</div>
			</div>
			<img src="{{ URL::asset('images/shape/shape_22.svg') }}" alt="" class="shapes shape-one">
		</div> <!-- /.vcamp-text-block-three -->




		<!-- 
			=============================================
				Vcamp Feature Section Three
			============================================== 
			-->
		<!--
			<div class="vcamp-feature-section-three mt-200 lg-mt-120">
				<div class="container">
					<div class="row align-items-center mb-50 md-mb-20">
						<div class="col-lg-5 col-md-6 col-sm-8" data-aos="fade-right">
							<div class="title-style-four">
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
							</div>  /.card-style-three
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
							</div>  /.card-style-three
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
							</div> /.card-style-three
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
							</div> /.card-style-three
						</div>
					</div>
				</div>
			</div> /.vcamp-feature-section-three -->



		<!--
			=====================================================
				Vcamp Text Block Four
			=====================================================
			-->
		<!--
			<div class="vcamp-text-block-four mt-200 lg-mt-120">
				<div class="row g-0">
					<div class="col-lg-6 d-flex left-side">
						<div class="content-wrapper w-100 h-100 position-relative">
							<div class="text-wrapper position-relative ms-lg-auto" data-aos="fade-right">
								<h2 class="title">Provide <br> best solution by our expert.</h2>
								<p>Client  to create with our talented expert.</p>
								<a href="{{ url('pages.support.serviceV2') }}" class="more-button ripple-btn"><i class="bi bi-chevron-right"></i></a>
							</div>  /.text-wrapper 
						</div> /.content-wrapper 
					</div> /.left-side 
					<div class="col-lg-6 d-flex right-side">
						<div class="content-wrapper w-100 h-100 position-relative">
							<div class="text-wrapper position-relative me-auto" data-aos="fade-left">
								<h2 class="title">Our recent <br> digital & strategy projects.</h2>
								<p>Client  to create with our talented expert.</p>
								<a href="{{ url('pages.support.serviceV3') }}" class="more-button ripple-btn"><i class="bi bi-chevron-right"></i></a>
							</div>  /.text-wrapper 
						</div>  /.content-wrapper 
					</div> /.right-side 
				</div>
			</div>  /.vcamp-text-block-four -->



		<!--
			=====================================================
				Case Study Section One
			=====================================================
			-->
		<div class="case-study-one dark-bg">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-xxl-5 col-xl-6 col-lg-5 col-md-7 col-sm-9">
						<div class="title-style-five white-vr text-center text-sm-start">
							<h2 class="title">Peralatan Laboratorium.</h2>
						</div>
					</div>
					<div class="col-md-5 col-sm-3 d-flex justify-content-center justify-content-sm-end">
						<ul class="slider-arrows d-flex style-none xs-mt-30">
							<li class="prev_case1 slick-arrow ripple-btn" style=""><i class="bi bi-arrow-left"></i></li>
							<li class="next_case1 slick-arrow ripple-btn" style=""><i class="bi bi-arrow-right"></i></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="slider-wrapper">
				<div class="case_slider_one">
					<div class="item">
						<div class="case-block-one position-relative">
							<img src="{{ URL::asset('images/ilab/media/img4.jpeg') }}" alt="" class="img-meta w-100">
							<div class="hover-content">
								<a href="{{ url('home.index-4') }}" class="theme-btn-one border0 ripple-btn">Lebih lanjut</a>
								<!-- <div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_11.svg') }}" alt=""></div>-->
								<blockquote>
									Metallographic Table/Wheel Manual Abrasive Saw, gergaji manual dengan roda abrasif untuk memotong sampel logam secara presisi, biasanya digunakan dalam analisis struktur mikro material.</blockquote>
								<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}" class="w-100 d-flex align-items-center justify-content-between">
									<span class="arrow"><i class="bi bi-chevron-right"></i></span>
								</a>
							</div> <!-- /.hover-content -->
						</div> <!-- /.case-block-one -->
					</div>
					<div class="item">
						<div class="case-block-one position-relative">
							<img src="{{  URL::asset('images/ilab/media/img11.jpeg')  }}" alt="" class="img-meta w-100">
							<div class="hover-content">
								<a href="{{ url('home.index-4') }}" class="theme-btn-one border0 ripple-btn">Lebih lanjut</a>
								<!-- <div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_11.svg') }}" alt=""></div>-->
								<blockquote>
									TSQ Quantis Plus LC-MS/MS adalah alat Liquid Chromatography-Mass Spectrometry (LC-MS/MS) yang dirancang untuk analisis kimia kualitatif dan kuantitatif. Alat ini menggabungkan Triple Quadrupole Mass Spectrometer dengan teknologi HESI (Heated Electrospray Ionization) dan APCI (Atmospheric Pressure Chemical Ionization), serta Diode Array Detector.</blockquote>
								<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}" class="w-100 d-flex align-items-center justify-content-between">
									<span class="arrow"><i class="bi bi-chevron-right"></i></span>
								</a>
							</div> <!-- /.hover-content -->
						</div> <!-- /.case-block-one -->
					</div>
					<div class="item">
						<div class="case-block-one position-relative">
							<img src="{{  URL::asset('images/ilab/media/img12.jpeg')  }}" alt="" class="img-meta w-100">
							<div class="hover-content">
								<a href="{{ url('home.index-4') }}" class="theme-btn-one border0 ripple-btn">Lebih lanjut</a>
								<!-- <div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_11.svg') }}" alt=""></div>-->
								<blockquote>
									Vanquish UHPLC adalah sistem Ultra High Performance Liquid Chromatography yang dirancang untuk analisis sampel dengan presisi tinggi. Alat ini memiliki fitur Semi/Preparative Autosampler untuk injeksi sampel otomatis, UV Detector untuk mendeteksi senyawa berdasarkan serapan UV, dan Fraction Collector untuk mengumpulkan fraksi sampel yang terpisah.
								</blockquote>
								<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}" class="w-100 d-flex align-items-center justify-content-between">
									<span class="arrow"><i class="bi bi-chevron-right"></i></span>
								</a>
							</div> <!-- /.hover-content -->
						</div> <!-- /.case-block-one -->
					</div>
					<div class="item">
						<div class="case-block-one position-relative">
							<img src="{{ URL::asset('images/ilab/media/img20.jpeg')  }}" alt="" class="img-meta w-100">
							<div class="hover-content">
								<a href="{{ url('home.index-4') }}" class="theme-btn-one border0 ripple-btn">Lebih lanjut</a>
								<!-- <div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_11.svg') }}" alt=""></div>-->
								<blockquote>
								Tabletop High Speed Centrifuge adalah centrifuge berkecepatan tinggi yang diletakkan di atas meja dan digunakan untuk memisahkan komponen dalam sampel cair berdasarkan densitasnya. Alat ini memutar sampel pada kecepatan tinggi untuk memisahkan bahan-bahan seperti sel, protein, atau partikel lainnya. Umumnya digunakan di laboratorium klinis, biologi molekuler, dan biokimia.</blockquote>
								<a href="{{ url('portfolio.single_portfolio.portfolio-detailsV2') }}" class="w-100 d-flex align-items-center justify-content-between">
									<span class="arrow"><i class="bi bi-chevron-right"></i></span>
								</a>
							</div> <!-- /.hover-content -->
						</div> <!-- /.case-block-one -->
					</div>
				</div> <!-- /.case_slider_one -->
			</div> <!-- /.slider-wrapper -->
			<img src="{{ URL::asset('images/shape/shape_23.svg') }}" alt="" class="shapes shape-one">
		</div> <!-- /.case-study-one -->


		<!--
			=====================================================
				Vcamp Text Block Five
			=====================================================
			-->
		<!--<div class="vcamp-text-block-five mt-170 lg-mt-120">
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
		</div>  /.vcamp-text-block-five -->



		<!--
			=====================================================
				Feedback Section Seven
			=====================================================
			-->
		<!-- <div class="feedback-section-seven mt-180 lg-mt-110">
			<div class="container">
				<div class="row">
					<div class="col-md-6 ms-auto">
						<div class="ps-xl-5">
							<div class="title-style-five">
								<div class="upper-title">Testimonials</div>
								<h2 class="title">Customer say about us.</h2>
							</div>
							<div class="feedback_slider_six mt-80 lg-mt-40">
								<div class="item">
									<div class="feedback-wrapper">
										<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_33.svg') }}" alt=""></div>
										<blockquote>We’v 9,000 agents around the io country, Find agents near your neighborhood graphic, print, and publishing industries for previewing layouts .</blockquote>
										<h6 class="name">Martin Jonas, <span>USA</span></h6>
									</div>
								</div>  /.item 
								<div class="item">
									<div class="feedback-wrapper">
										<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_33.svg') }}" alt=""></div>
										<blockquote>Certainly from my perspective, WordPress has been a great success—with WordPress VIP giving us that enterprise-level of assured quality on top.</blockquote>
										<h6 class="name">Rashed Ka, <span>USA</span></h6>
									</div>
								</div>  /.item 
								<div class="item">
									<div class="feedback-wrapper">
										<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/icon/icon_33.svg') }}" alt=""></div>
										<blockquote>Having a home based business makes wonderful asset to your life. The WordPress VIP stands it comes advertise your business at cheap cost.</blockquote>
										<h6 class="name">Zubayer Hasan, <span>USA</span></h6>
									</div>
								</div>  /.item 
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="counter-section-two" data-aos="fade-right">
				<img src="{{ URL::asset('images/media/img_29.jpg') }}" alt="" class="img-meta w-100">
				<div class="counter-container">
					<div class="row g-0">
						<div class="col-6">
							<div class="counter-block-two text-center">
								<div class="main-count font-recoleta"><span class="counter">3.5</span>k</div>
								<p>Using vCamp</p>
							</div>  /.counter-block-two 
						</div>
						<div class="col-6">
							<div class="counter-block-two text-center bg-color">
								<div class="main-count font-recoleta"><span class="counter">50</span>k+</div>
								<p>Successfull Project</p>
							</div>  /.counter-block-two
						</div>
					</div>
				</div>  /.counter-container 
			</div> /.counter-section-two 
		</div>  /.feedback-section-seven -->


		<!--
			=====================================================
				Team Section One
			=====================================================
			-->
		<div class="team-section-one mt-200 lg-mt-120">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-md-6 col-sm-8">
						<div class="title-style-five text-center text-sm-start">
							<h2 class="title">Tim dan Staff</h2>
						</div>
					</div>
					<div class="col-md-6 col-sm-3 d-flex justify-content-center justify-content-sm-end">
						<ul class="slider-arrows d-flex style-none xs-mt-30">
							<li class="prev_team1 slick-arrow ripple-btn" style=""><i class="bi bi-arrow-left"></i></li>
							<li class="next_team1 slick-arrow ripple-btn" style=""><i class="bi bi-arrow-right"></i></li>
						</ul>
					</div>
				</div>
			</div> <!-- /.container -->

			<div class="team_slider_one box-layout lg-mt-50">
				<div class="item">
					<div class="team-block-one position-relative">
						<img src="{{ URL::asset('images/ilab/team/img1.jpg') }}" alt="" class="team-img w-100">
						<div class="overlay-bg d-flex align-items-end">
							<div class="hover-content tran3s">
								<h6 class="name">Prof. Dr. Ir. H. Abdunnur, M.Si., IPU</h6>
								<div class="position">Pelindung</div>
								<ul class="social-icon d-flex style-none">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
						</div> <!-- /.overlay-bg -->
					</div> <!-- /.team-block-one -->
				</div> <!-- /.item -->
				<div class="item">
					<div class="team-block-one position-relative">
						<img src="{{ URL::asset('images/ilab/team/img2.jpg') }}" alt="" class="team-img w-100">
						<div class="overlay-bg d-flex align-items-end">
							<div class="hover-content tran3s">
								<h6 class="name">Prof. Dr. Lambang Subagiyo, M.Si</h6>
								<div class="position">Pengarah</div>
								<ul class="social-icon d-flex style-none">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
						</div> <!-- /.overlay-bg -->
					</div> <!-- /.team-block-one -->
				</div> <!-- /.item -->
				<div class="item">
					<div class="team-block-one position-relative">
						<img src="{{ URL::asset('images/ilab/team/img3.jpg') }}" alt="" class="team-img w-100">
						<div class="overlay-bg d-flex align-items-end">
							<div class="hover-content tran3s">
								<h6 class="name">Ir. Sukartiningsih, M.Sc, Ph.D., IPU</h6>
								<div class="position">Pengarah</div>
								<ul class="social-icon d-flex style-none">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
						</div> <!-- /.overlay-bg -->
					</div> <!-- /.team-block-one -->
				</div> <!-- /.item -->
				<div class="item">
					<div class="team-block-one position-relative">
						<img src="{{ URL::asset('images/ilab/team/img4.jpg') }}" alt="" class="team-img w-100">
						<div class="overlay-bg d-flex align-items-end">
							<div class="hover-content tran3s">
								<h6 class="name">Prof. Dr. H. Moh. Bahzar, M.Si</h6>
								<div class="position">Pengarah</div>
								<ul class="social-icon d-flex style-none">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
						</div> <!-- /.overlay-bg -->
					</div> <!-- /.team-block-one -->
				</div> <!-- /.item -->
				<div class="item">
					<div class="team-block-one position-relative">
						<img src="{{ URL::asset('images/ilab/team/img5.jpg') }}" alt="" class="team-img w-100">
						<div class="overlay-bg d-flex align-items-end">
							<div class="hover-content tran3s">
								<h6 class="name">Dr. Nataniel Dengen, S.Si., M.Si</h6>
								<div class="position">Pengarah</div>
								<ul class="social-icon d-flex style-none">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
						</div> <!-- /.overlay-bg -->
					</div> <!-- /.team-block-one -->
				</div> <!-- /.item -->
			</div>
		</div> <!-- /.team-section-one -->


		<!--
			=====================================================
				Blog Section One
			=====================================================
			-->
		<!--<div class="blog-section-one mt-180 lg-mt-120">
			<div class="container">
				<div class="row">
					<div class="col-xxl-11 m-auto">
						<div class="row align-items-center">
							<div class="col-xl-5 col-sm-6">
								<div class="title-style-five">
									<div class="upper-title">Latest News</div>
									<h2 class="title">Our Blog</h2>
								</div>
							</div>
							<div class="col-xl-7 col-sm-6 text-sm-end text-start">
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
										</div> /.post-footer 
									</article>  /.blog-meta-one 
								</div>
								<div class="col-lg-4 col-md-6 d-flex">
									<article class="blog-meta-one top-border">
										<a href="{{ url('blog.blog-detailsV3') }}" class="tag">Soltuion</a>
										<a href="{{ url('blog.blog-detailsV3') }}" class="title">Our experience at WordCamp in Nagpur</a>
										<div class="post-info">Featured - <span class="date">18 Jul 20</span></div>
										<div class="post-footer d-flex align-items-center justify-content-between">
											<img src="{{ URL::asset('images/blog/logo_01.jpg') }}" alt="" class="logo">
											<a href="{{ url('blog.blog-detailsV3') }}" class="read-more tran3s"><img src="{{ URL::asset('images/icon/icon_16.svg') }}" alt=""></a>
										</div>  /.post-footer 
									</article>  /.blog-meta-one 
								</div>
								<div class="col-lg-4 col-md-6 d-flex">
									<article class="blog-meta-one top-border">
										<a href="{{ url('blog.blog-detailsV3') }}" class="tag">theme</a>
										<a href="{{ url('blog.blog-detailsV3') }}" class="title">Motivation defining Moment of self Improvement</a>
										<div class="post-info">Featured - <span class="date">18 Jul 20</span></div>
										<div class="post-footer d-flex align-items-center justify-content-between">
											<img src="{{ URL::asset('images/blog/logo_02.jpg') }}" alt="" class="logo">
											<a href="{{ url('blog.blog-detailsV3') }}" class="read-more tran3s"><img src="{{ URL::asset('images/icon/icon_16.svg') }}" alt=""></a>
										</div> /.post-footer 
									</article>  /.blog-meta-one 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>  /.blog-section-one -->


		<!--
			=====================================================
				Vcamp Fancy Banner One
			=====================================================
			-->
		<!--<div class="fancy-banner-one mt-200 lg-mt-120">
			<div class="inner-content position-relative">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6">
							<div class="title-style-five white-vr">
								<h2 class="title">Join our <br>team be a great skills elite.</h2>
							</div>
						</div>
						<div class="col-xl-5 col-md-6 ms-auto">
							<p class="sm-pt-20">We’re a team of creatives who are excited about unique ideas & help.</p>
							<a href="{{ url('pages.support.contactV2') }}" class="theme-btn-one ripple-btn">Send you CV <img src="{{ URL::asset('images/icon/icon_42.svg') }}" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>  /.fancy-banner-one -->



		<!--
			=====================================================
				Footer
			=====================================================
			-->
		<footer class="vcamp-footer-two dark-footer pt-150 lg-pt-100">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-2 mb-40">
						<div class="logo"><a href="{{ url('home.index-4') }}"><img src="{{  URL::asset('images/ilab/logo/unmul4.webp')  }}" alt=""></a></div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6 mb-40">
						<h5 class="title">Links</h5>
						<ul class="footer-list style-none">
							<li><a href="{{ url('home.index-4') }}">Home</a></li>
							<li><a href="{{ url('home.index-4') }}">Pricing</a></li>
							<li><a href="{{ url('home.index-4') }}">About us</a></li>
							<li><a href="{{ url('home.index-4')}}">Service</a></li>
							<li><a href="{{url('home.index-4') }}">Features</a></li>
							<li><a href="{{url('home.index-4') }}">Blog</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 mb-40">
						<h5 class="title">Legal</h5>
						<ul class="footer-list style-none">
							<li><a href="{{url('home.index-4') }}">Terms of use</a></li>
							<li><a href="{{ url('home.index-4') }}">Terms & conditions</a></li>
							<li><a href="{{ url('home.index-4') }}">Privacy policy</a></li>
							<li><a href="{{ url('home.index-4') }}">Cookie policy</a></li>
						</ul>
					</div>
					<div class="col-lg-4 col-md-6 mb-40">
						<div class="newsletter">
							<h5 class="title">Newslettert</h5>
							<p>Join over <span>68,000</span> people getting our emails</p>
							<form action="#">
								<input type="email" placeholder="Enter your email">
								<button>Sign Up</button>
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
								<li><a href="{{ url('home.index-4')}}">Privacy & Terms.</a></li>
								<li><a href="{{ url('home.index-4') }}">Contact Us</a></li>
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
							<p class="copyright text-center">Copyright @2024 ILAB UNMUL.</p>
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