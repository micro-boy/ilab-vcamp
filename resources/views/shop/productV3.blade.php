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
			<header class="theme-main-menu sticky-menu theme-menu-one">
				<div class="inner-content">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo"><a href="{{ url('home.index') }}"><img src="{{ URL::asset('images/logo/vCamp_09.svg') }}" alt=""></a></div>
						
						<div class="right-widget d-flex align-items-center">
							<form action="#" class="eCommerce-search d-none d-sm-block">
								<input type="text" placeholder="Search here">
								<img src="{{ URL::asset('images/icon/icon_76.svg') }}" alt="" class="icon">
							</form>
							<div class="user-profile-action">
								<button class="dropdown-toggle login-btn d-flex align-items-center" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
							    	<img src="{{ URL::asset('images/icon/icon_01.svg') }}" alt="">
									<span class="d-none d-sm-block">Account</span>
							  	</button>
							  	<div class="dropdown-menu dropdown-menu-end">
								    <ul class="style-none">
										<li><a href="#"><img src="{{ URL::asset('images/icon/icon_78.svg') }}" alt="" class="icon svg"> My Profile</a></li>
										<li><a href="#"><img src="{{ URL::asset('images/icon/icon_79.svg') }}" alt="" class="icon svg"> Settings</a></li>
										<li><a href="#"><img src="{{ URL::asset('images/icon/icon_80.svg') }}" alt="" class="icon svg"> Billing Address</a></li>
										<li><a href="#"><img src="{{ URL::asset('images/icon/icon_81.svg') }}" alt="" class="icon svg"> Wishlist</a></li>
									</ul>
							  	</div>
							</div> <!-- /.user-profile-action -->
							<div class="cart-group-wrapper">
								<button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
							    	<img src="{{ URL::asset('images/icon/icon_71.svg') }}" alt="" class="m-auto">
							    	<span class="item-count">02</span>
							  	</button>
							  	<div class="dropdown-menu dropdown-menu-end">
								    <ul class="style-none cart-product-list">
										<li class="d-flex align-items-center selected-item">
											<a href="#" class="item-img d-flex align-items-center justify-content-center">
												<img src="{{ URL::asset('images/shop/img_18.png') }}" alt="">
											</a>
											<div class="item-info">
												<a href="#" class="name">Rolex Watch</a>
												<div class="price">$38.00 <span class="quantity">x 1</span></div>
											</div> <!-- /.item-info -->
										</li> <!-- /.selected-item -->
										<li class="d-flex align-items-center selected-item">
											<a href="#" class="item-img d-flex align-items-center justify-content-center">
												<img src="{{ URL::asset('images/shop/img_19.png') }}" alt="">
											</a>
											<div class="item-info">
												<a href="#" class="name">Vibrant Shoe.</a>
												<div class="price">$125.00 <span class="quantity">x 1</span></div>
											</div> <!-- /.item-info -->
										</li> <!-- /.selected-item -->
									</ul> <!-- /.cart-product-list -->
									<div class="subtotal d-flex justify-content-between align-items-center">
										<div class="title">Subtotal</div>
										<div class="total-price">$163.00</div>
									</div>
									<ul class="style-none button-group">
										<li><a href="{{ url('shop.cart') }}" class="view-cart">View Cart</a></li>
										<li><a href="{{ url('shop.checkout') }}" class="checkout">Checkout</a></li>
									</ul>
							  	</div>
							</div>
							<button class="sidebar-nav-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="{{ URL::asset('images/icon/icon_68.svg') }}" alt=""></button>
						</div> <!-- /.right-widget -->
					</div>
				</div> <!-- /.inner-content -->
			</header> <!-- /.theme-main-menu -->


			
			<!-- 
			=============================================
				Inside Page Banner
			============================================== 
			-->
			<div class="inside-hero-nine">
				<div class="main-wrapper text-center border-bottom">
					<div class="container">
						<h2 class="page-title font-recoleta">Shop</h2>
						<p>Simple and beautiful way to sell products</p>
					</div>
				</div>
				<div class="breadcrumb-area">
					<div class="container">
						<div class="d-flex align-items-center justify-content-between">
							<nav class="breadcrumb-style-one mt-20">
								<ol class="breadcrumb style-none">
								    <li class="breadcrumb-item"><a href="{{ url('home.index') }}">Home</a></li>
								    <li class="breadcrumb-item active" aria-current="page">Shop</li>
								</ol>
							</nav>
							<div class="share-dropdown mt-20">
								<button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
							    	Share
							  	</button>
							  	<div class="dropdown-menu dropdown-menu-end">
								    <ul class="d-flex justify-content-between social-icon style-none">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram"></i></a></li>
										<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
									</ul>
							  	</div>
							</div>
						</div>
					</div>
				</div> <!-- /.breadcrumb-area -->
			</div> <!-- /.inside-hero-nine -->

			


			<!-- 
			=============================================
				Product Section Five
			============================================== 
			-->
			<div class="product-section-five dark-layout">
				<div class="box-layout">
					<div class="row gx-xxl-5">
						<div class="col-xl-3 col-lg-4">
							<div class="shop-filter-sidebar mt-110 md-mt-10 md-mb-70">
								<div class="search-area">
									<form action="#">
										<input type="text" placeholder="Search">
										<button><i class="bi bi-search"></i></button>
									</form>
								</div> <!-- /.search-area -->
								<div class="accordion shop-filter-accordion">
									<div class="accordion-item">
									    <div class="accordion-header">
									      	<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
									        	Categories
									      	</button>
									    </div>
									    <div id="collapseOne" class="accordion-collapse collapse show">
									    	<div class="accordion-body">
									        	<ul class="style-none category-filter">
										  			<li class="nav-item">
										  				<a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Winter Collections</a>
										  				<ul class="dropdown-menu">
														    <li><a class="dropdown-item" href="#">Hoodies</a></li>
														    <li><a class="dropdown-item" href="#">Jacket</a></li>
														    <li><a class="dropdown-item" href="#">Others</a></li>
														</ul>
										  			</li>
										  			<li class="nav-item">
										  				<a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Woman</a>
										  				<ul class="dropdown-menu">
														    <li><a class="dropdown-item" href="#">Kurtis</a></li>
														    <li><a class="dropdown-item" href="#">Western</a></li>
														    <li><a class="dropdown-item" href="#">Shoes</a></li>
														</ul>
										  			</li>
										  			<li class="nav-item">
										  				<a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Men</a>
										  				<ul class="dropdown-menu">
														    <li><a class="dropdown-item" href="#">T-Shirts</a></li>
														    <li><a class="dropdown-item" href="#">Jeans</a></li>
														    <li><a class="dropdown-item" href="#">Polo Shirts</a></li>
														</ul>
										  			</li>
										  			<li class="nav-item">
										  				<a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Groming</a>
										  				<ul class="dropdown-menu">
														    <li><a class="dropdown-item" href="#">Hoodies</a></li>
														    <li><a class="dropdown-item" href="#">Jacket</a></li>
														    <li><a class="dropdown-item" href="#">Others</a></li>
														</ul>
										  			</li>
										  			<li class="nav-item">
										  				<a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Electronics</a>
										  				<ul class="dropdown-menu">
														    <li><a class="dropdown-item" href="#">Hoodies</a></li>
														    <li><a class="dropdown-item" href="#">Jacket</a></li>
														    <li><a class="dropdown-item" href="#">Others</a></li>
														</ul>
										  			</li>
										  		</ul> <!-- /.category-filter -->
									    	</div>
									    </div>
								  	</div>
								  	<div class="accordion-item">
									    <div class="accordion-header">
									      	<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
									        	Filter by Price
									      	</button>
									    </div>
									    <div id="collapseTwo" class="accordion-collapse collapse">
									      	<div class="accordion-body">
									        	<ul class="style-none price-filter-input">
													<li>
														<input type="checkbox" name="price" value="lowTohigh" class="price-check-btn">
														<label>Price (Low > High)</label>
													</li>
													<li>
														<input type="checkbox" name="price" value="highTolow" class="price-check-btn">
														<label>Price (High > Low)</label>
													</li>
												</ul>
									    	</div>
									    </div>
								  	</div>
								  	<div class="accordion-item">
									    <div class="accordion-header">
									   		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
									        	Color
									      	</button>
									    </div>
									    <div id="collapseThree" class="accordion-collapse collapse">
									    	<div class="accordion-body">
									        	<ul class="style-none d-flex align-items-center color-custome-input">
													<li>
														<input type="checkbox" name="color" value="color01" class="color-check-btn">
														<label style="background:#C3D2D2;"></label>
													</li>
													<li>
														<input type="checkbox" name="color" value="color02" class="color-check-btn">
														<label style="background:#E9DCC8;"></label>
													</li>
													<li>
														<input type="checkbox" name="color" value="color03" class="color-check-btn">
														<label style="background:#D5C9F8;"></label>
													</li>
												</ul>
									    	</div>
									    </div>
									</div>
									<div class="accordion-item">
									    <div class="accordion-header">
									   		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
									        	Size
									      	</button>
									    </div>
									    <div id="collapseFour" class="accordion-collapse collapse">
									    	<div class="accordion-body">
									        	<ul class="style-none d-flex align-items-center size-custome-input">
													<li>
														<input type="checkbox" name="size" value="small" class="size-check-btn">
														<label>S</label>
													</li>
													<li>
														<input type="checkbox" name="size" value="medium" class="size-check-btn">
														<label>M</label>
													</li>
													<li>
														<input type="checkbox" name="size" value="large" class="size-check-btn">
														<label>L</label>
													</li>
													<li>
														<input type="checkbox" name="size" value="extra large" class="size-check-btn">
														<label>XL</label>
													</li>
												</ul>
									    	</div>
									    </div>
									</div>
								</div> <!-- /.shop-filter-accordion -->
							</div> <!-- /.shop-filter-sidebar -->
						</div>
						<div class="col-xl-9 col-lg-8">
							<div class="shop-page-header d-sm-flex align-items-center justify-content-between">
								<p>Showing 1–6 of 10 results</p>
								<ul class="shop-filter-one style-none d-sm-flex align-items-center">
									<li>
										<select class="theme-select-menu">
											<option value="Popularity">Popularity</option>
											<option value="Trending items">Trending items</option>
											<option value="Newest items">Newest items</option>
										</select>
									</li>
								</ul>
							</div> <!-- /.shop-page-header -->
							<div class="products-wrapper mt-55 md-mt-30">
								<div class="row">
									<div class="col-xl-4 col-md-6" data-aos="fade-up">
										<div class="product-block-three mb-45">
											<div class="img-holder">
												<a href="{{ url('shop.product-detailsV1') }}" class="d-flex align-items-center justify-content-center h-100">
													<img src="{{ URL::asset('images/shop/img_14.png') }}" alt="" class="product-img tran4s">
												</a>
												<div class="tag-one">SALE</div>
											</div> <!-- /.img-holder -->
											<div class="product-meta">
												<ul class="style-none d-flex justify-content-center rating">
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star"></i></li>
												</ul>
												<a href="{{ url('shop.product-detailsV1') }}" class="product-title">Quilted Gilet With Hood</a>
												<div class="price">$17.99</div>	
											</div> <!-- /.product-meta -->
										</div> <!-- /.product-block-three -->
									</div>
									<div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
										<div class="product-block-three mb-45">
											<div class="img-holder">
												<a href="{{ url('shop.product-detailsV1') }}" class="d-flex align-items-center justify-content-center h-100">
													<img src="{{ URL::asset('images/shop/img_10.png') }}" alt="" class="product-img tran4s">
												</a>
											</div> <!-- /.img-holder -->
											<div class="product-meta">
												<ul class="style-none d-flex justify-content-center rating">
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star"></i></li>
												</ul>
												<a href="{{ url('shop.product-detailsV1') }}" class="product-title">Quilted Gilet With Hood</a>
												<div class="price">$17.99</div>	
											</div> <!-- /.product-meta -->
										</div> <!-- /.product-block-three -->
									</div>
									<div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
										<div class="product-block-three mb-45">
											<div class="img-holder">
												<a href="{{ url('shop.product-detailsV1') }}" class="d-flex align-items-center justify-content-center h-100">
													<img src="{{ URL::asset('images/shop/img_15.png') }}" alt="" class="product-img tran4s">
												</a>
											</div> <!-- /.img-holder -->
											<div class="product-meta">
												<ul class="style-none d-flex justify-content-center rating">
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star"></i></li>
												</ul>
												<a href="{{ url('shop.product-detailsV1') }}" class="product-title">Quilted Gilet With Hood</a>
												<div class="price">$17.99</div>	
											</div> <!-- /.product-meta -->
										</div> <!-- /.product-block-three -->
									</div>
									<div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
										<div class="product-block-three mb-45">
											<div class="img-holder">
												<a href="{{ url('shop.product-detailsV1') }}" class="d-flex align-items-center justify-content-center h-100">
													<img src="{{ URL::asset('images/shop/img_12.png') }}" alt="" class="product-img tran4s">
												</a>
												<div class="tag-two">OUT OF STOCK</div>
											</div> <!-- /.img-holder -->
											<div class="product-meta">
												<ul class="style-none d-flex justify-content-center rating">
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star"></i></li>
												</ul>
												<a href="{{ url('shop.product-detailsV1') }}" class="product-title">Quilted Gilet With Hood</a>
												<div class="price">$17.99</div>	
											</div> <!-- /.product-meta -->
										</div> <!-- /.product-block-three -->
									</div>
									<div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
										<div class="product-block-three mb-45">
											<div class="img-holder">
												<a href="{{ url('shop.product-detailsV1') }}" class="d-flex align-items-center justify-content-center h-100">
													<img src="{{ URL::asset('images/shop/img_13.png') }}" alt="" class="product-img tran4s">
												</a>
											</div> <!-- /.img-holder -->
											<div class="product-meta">
												<ul class="style-none d-flex justify-content-center rating">
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star"></i></li>
												</ul>
												<a href="{{ url('shop.product-detailsV1') }}" class="product-title">Quilted Gilet With Hood</a>
												<div class="price">$17.99</div>	
											</div> <!-- /.product-meta -->
										</div> <!-- /.product-block-three -->
									</div>
									<div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
										<div class="product-block-three mb-45">
											<div class="img-holder">
												<a href="{{ url('shop.product-detailsV1') }}" class="d-flex align-items-center justify-content-center h-100">
													<img src="{{ URL::asset('images/shop/img_04.png') }}" alt="" class="product-img tran4s">
												</a>
											</div> <!-- /.img-holder -->
											<div class="product-meta">
												<ul class="style-none d-flex justify-content-center rating">
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star"></i></li>
												</ul>
												<a href="{{ url('shop.product-detailsV1') }}" class="product-title">Quilted Gilet With Hood</a>
												<div class="price">$17.99</div>	
											</div> <!-- /.product-meta -->
										</div> <!-- /.product-block-three -->
									</div>
									<div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
										<div class="product-block-three mb-45">
											<div class="img-holder">
												<a href="{{ url('shop.product-detailsV1') }}" class="d-flex align-items-center justify-content-center h-100">
													<img src="{{ URL::asset('images/shop/img_03.png') }}" alt="" class="product-img tran4s">
												</a>
											</div> <!-- /.img-holder -->
											<div class="product-meta">
												<ul class="style-none d-flex justify-content-center rating">
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star"></i></li>
												</ul>
												<a href="{{ url('shop.product-detailsV1') }}" class="product-title">Quilted Gilet With Hood</a>
												<div class="price">$17.99</div>	
											</div> <!-- /.product-meta -->
										</div> <!-- /.product-block-three -->
									</div>
									<div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
										<div class="product-block-three mb-45">
											<div class="img-holder">
												<a href="{{ url('shop.product-detailsV1') }}" class="d-flex align-items-center justify-content-center h-100">
													<img src="{{ URL::asset('images/shop/img_16.png') }}" alt="" class="product-img tran4s">
												</a>
											</div> <!-- /.img-holder -->
											<div class="product-meta">
												<ul class="style-none d-flex justify-content-center rating">
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star"></i></li>
												</ul>
												<a href="{{ url('shop.product-detailsV1') }}" class="product-title">Quilted Gilet With Hood</a>
												<div class="price">$17.99</div>	
											</div> <!-- /.product-meta -->
										</div> <!-- /.product-block-three -->
									</div>
									<div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
										<div class="product-block-three mb-45">
											<div class="img-holder">
												<a href="{{ url('shop.product-detailsV1') }}" class="d-flex align-items-center justify-content-center h-100">
													<img src="{{ URL::asset('images/shop/img_09.png') }}" alt="" class="product-img tran4s">
												</a>
												<div class="tag-one">SALE</div>
											</div> <!-- /.img-holder -->
											<div class="product-meta">
												<ul class="style-none d-flex justify-content-center rating">
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star-fill"></i></li>
													<li><i class="bi bi-star"></i></li>
												</ul>
												<a href="{{ url('shop.product-detailsV1') }}" class="product-title">Quilted Gilet With Hood</a>
												<div class="price">$17.99</div>	
											</div> <!-- /.product-meta -->
										</div> <!-- /.product-block-three -->
									</div>
								</div>
								<div class="page-pagination-one pt-45 lg-pt-30">
									<ul class="d-flex align-items-center style-none">
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li>...</li>
										<li><a href="#">Last</a></li>
										<li class="arrow"><a href="#"><i class="bi bi-arrow-right"></i></a></li>
									</ul>
								</div>
							</div> <!-- /.products-wrapper -->
						</div>
					</div>
				</div> <!-- /.box-layout -->
			</div> <!-- /.product-section-five -->


			


			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer class="vcamp-footer-two pt-130 lg-pt-100">
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
    	<!-- Select js -->
    	<script src="{{ URL::asset('vendor/selectize.js/selectize.min.js') }}"></script>

		<!-- Theme js -->
		<script src="{{ URL::asset('js/theme.js') }}"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>