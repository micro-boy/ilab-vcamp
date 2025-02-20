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
				<div class="breadcrumb-area">
					<div class="container">
						<div class="d-sm-flex align-items-center justify-content-between">
							<nav class="breadcrumb-style-one mt-20">
								<ol class="breadcrumb style-none">
								    <li class="breadcrumb-item"><a href="{{ url('home.index') }}">Home</a></li>
								    <li class="breadcrumb-item"><a href="{{ url('shop.productV1') }}">Shop</a></li>
								    <li class="breadcrumb-item active" aria-current="page">Quilted Gilet With Hood </li>
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
				Product Details One
			============================================== 
			-->
			<div class="product-details-one mt-40">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 order-lg-2">
							<div class="tab-content product-img-tab-content h-100">
							  	<div class="tab-pane fade show active h-100" id="img1" role="tabpanel" >
							  		<a class="fancybox h-100 w-100 d-flex align-items-center justify-content-center" data-fancybox="" href="images/shop/img_28.png" tabindex="-1">
										<img src="{{ URL::asset('images/shop/img_28.png') }}" alt="" class="m-auto">
									</a>
							  	</div>
							  	<div class="tab-pane fade h-100" id="img2" role="tabpanel" >
							  		<a class="fancybox h-100 w-100 d-flex align-items-center justify-content-center" data-fancybox="" href="images/shop/img_29.png" tabindex="-1">
										<img src="{{ URL::asset('images/shop/img_29.png') }}" alt="" class="m-auto">
									</a>
							  	</div>
							  	<div class="tab-pane fade h-100" id="img3" role="tabpanel" >
							  		<a class="fancybox h-100 w-100 d-flex align-items-center justify-content-center" data-fancybox="" href="images/shop/img_30.png" tabindex="-1">
										<img src="{{ URL::asset('images/shop/img_30.png') }}" alt="" class="m-auto">
									</a>
							  	</div>
							</div>
						</div>
						<div class="col-lg-1 order-lg-1">
							<ul class="nav nav-tabs flex-lg-column product-img-tab" id="myTab" role="tablist">
							  	<li class="nav-item">
							    	<button class="nav-link active" data-bs-toggle="tab" data-bs-target="#img1" type="button" role="tab"  aria-selected="true"><img src="{{ URL::asset('images/shop/img_28.png') }}" alt="" class="m-auto"></button>
							 	 </li>
							  	<li class="nav-item">
							    	<button class="nav-link" data-bs-toggle="tab" data-bs-target="#img2" type="button" role="tab"  aria-selected="false"><img src="{{ URL::asset('images/shop/img_29.png') }}" alt="" class="m-auto"></button>
							  	</li>
							  	<li class="nav-item">
							    	<button class="nav-link" data-bs-toggle="tab" data-bs-target="#img3" type="button" role="tab"  aria-selected="false"><img src="{{ URL::asset('images/shop/img_30.png') }}" alt="" class="m-auto"></button>
							  	</li>
							</ul>
						</div>
						<div class="col-lg-6 order-lg-3">
							<div class="product-info ps-xxl-5 md-mt-50">
								<div class="stock-tag">In Stock</div>
								<h3 class="product-name">Quilted Gilet With Hood</h3>
								<ul class="style-none d-flex align-items-center rating">
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star"></i></li>
									<li><a href="#">(2 Customer Reviews)</a></li>
								</ul>
								<div class="price">$49.00 - $53.00</div>
								<p class="availability">38 Piece Available  </p>
								<p class="description-text">Tote bag gochujang dreamcatcher fanny pack ban cold-pressed. Vape mlkshk sriracha marfa. </p>
								<ul class="product-feature style-none">
									<li>Free delivery available</li>
									<li>Use promo-code and save up to 25%</li>
								</ul>
								<div class="customize-order">
									<div class="row">
										<div class="col-xxl-11">
											<div class="row">
												<div class="col-lg-3 col-md-3 col-sm-4">
													<div class="quantity mt-25">
														<h6>Quantity</h6>
														<div class="button-group">
															<ul class="style-none d-flex align-items-center">
																<li><button class="value-decrease">-</button></li>
																<li><input type="number" min="1" max="22" value="1" disabled="" class="product-value val"></li>
																<li><button class="value-increase">+ </button></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-4">
													<div class="color-selection mt-25">
														<h6>Colors</h6>
														<ul class="style-none d-flex align-items-center color-custome-input">
															<li>
																<input type="radio" name="color" value="color01" class="color-check-btn" checked="checked">
																<label style="background:#9CD2FF;"></label>
															</li>
															<li>
																<input type="radio" name="color" value="color02" class="color-check-btn">
																<label style="background:#FF9153;"></label>
															</li>
															<li>
																<input type="radio" name="color" value="color03" class="color-check-btn">
																<label style="background:#5FF2BE;"></label>
															</li>
															<li>
																<input type="radio" name="color" value="color04" class="color-check-btn">
																<label style="background:#9A82FF;"></label>
															</li>
														</ul>
													</div>
												</div>
												<div class="col-xl-5 col-md-6 col-sm-4">
													<div class="size-selection mt-25">
														<h6>Size</h6>
														<ul class="style-none d-flex align-items-center size-custome-input">
															<li>
																<input type="radio" name="size" value="small" class="size-check-btn">
																<label>S</label>
															</li>
															<li>
																<input type="radio" name="size" value="medium" class="size-check-btn">
																<label>M</label>
															</li>
															<li>
																<input type="radio" name="size" value="large" class="size-check-btn">
																<label>L</label>
															</li>
															<li>
																<input type="radio" name="size" value="extra large" class="size-check-btn">
																<label>XL</label>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> <!-- /.customize-order -->
								<div class="button-group mt-30 d-sm-flex align-items-center">
									<a href="#" class="theme-btn-seven mt-15 me-sm-4 d-block">Add To Cart</a>
									<a href="#" class="theme-btn-nine mt-15 d-block">Add To wishlist</a>
								</div>
							</div> <!-- /.product-info -->
						</div>
					</div>

					<div class="product-review-tab mt-150 lg-mt-100">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
							    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#item1" type="button" role="tab"  aria-selected="true">Description</button>
							</li>
							<li class="nav-item">
							    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#item2" type="button" role="tab"  aria-selected="false">Technical Info</button>
							</li>
							<li class="nav-item">
							    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#item3" type="button" role="tab"  aria-selected="false">Feedback</button>
							</li>
						</ul>
						<div class="tab-content mt-50 lg-mt-20">
						  	<div class="tab-pane fade show active" id="item1" role="tabpanel" >
						  		<div class="row gx-5">
						  			<div class="col-xl-6">
						  				<h5>Specifications:</h5>
						  				<p>One touch of a red-hot stove is usually all we need to avoid that . The same is true as we experience in emotional sensation of stress from our first instances of social rejection ridicule.</p>
						  			</div>
						  			<div class="col-xl-6">
						  				<h5>Check product main features:</h5>
						  				<ul class="style-none product-feature">
						  					<li>Lorem ipsum best lightweight bra cool rejection avoid text</li>
						  					<li>Lightweight bras cool rejection quickly quis.</li>
						  					<li>We quickly learn to fear and automatically avoid potentially</li>
						  				</ul>
						  			</div>
						  		</div>
						  	</div>
						  	<div class="tab-pane fade" id="item2" role="tabpanel" >
						  		<div class="row gx-5">
						  			<div class="col-xl-6">
						  				<h5>Check product main features:</h5>
						  				<ul class="style-none product-feature">
						  					<li>Lorem ipsum best lightweight bra cool rejection avoid text</li>
						  					<li>Lightweight bras cool rejection quickly quis.</li>
						  					<li>We quickly learn to fear and automatically avoid potentially</li>
						  				</ul>
						  			</div>
						  			<div class="col-xl-6">
						  				<h5>Specifications:</h5>
						  				<p>One touch of a red-hot stove is usually all we need to avoid that . The same is true as we experience in emotional sensation of stress from our first instances of social rejection ridicule.</p>
						  			</div>
						  		</div>
						  	</div>
						  	<div class="tab-pane fade" id="item3" role="tabpanel" >
						  		<div class="user-comment-area">
						  			<div class="single-comment d-flex align-items-top">
						  				<img src="{{ URL::asset('images/blog/avatar_01.jpg') }}" alt="" class="user-img">
						  				<div class="user-comment-data">
						  					<h6 class="name">Rashed ka.</h6>
						  					<ul class="style-none d-flex rating">
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star"></i></li>
											</ul>
											<p>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in future. The same true we experience the emotional sensation.</p>
						  				</div> <!-- /.user-comment-data -->
						  			</div> <!-- /.single-comment -->
						  			<div class="single-comment d-flex align-items-top">
						  				<img src="{{ URL::asset('images/blog/avatar_02.jpg') }}" alt="" class="user-img">
						  				<div class="user-comment-data">
						  					<h6 class="name">Zubayer hasan</h6>
						  					<ul class="style-none d-flex rating">
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star"></i></li>
											</ul>
											<p>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in future. The same true we experience the emotional sensation.</p>
						  				</div> <!-- /.user-comment-data -->
						  			</div> <!-- /.single-comment -->
						  		</div>
						  	</div>
						</div>
					</div> <!-- /.product-review-tab -->

					<div class="vcamp-feature-section-ten border-bottom mt-60 pb-50 lg-pb-20">
						<div class="row">
							<div class="col-lg-3 col-sm-6">
								<div class="card-style-ten text-center mb-40">
									<div class="icon d-flex align-items-center justify-content-center m-auto"><img src="{{ URL::asset('images/icon/icon_84.svg') }}" alt="" class="tran3s"></div>
									<h4>Free Delivery within <br>3 days.</h4>
								</div> <!-- /.card-style-ten -->
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="card-style-ten text-center mb-40">
									<div class="icon d-flex align-items-center justify-content-center m-auto"><img src="{{ URL::asset('images/icon/icon_85.svg') }}" alt="" class="tran3s"></div>
									<h4>7 Days refund <br> policy.</h4>
								</div> <!-- /.card-style-ten -->
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="card-style-ten text-center mb-40">
									<div class="icon d-flex align-items-center justify-content-center m-auto"><img src="{{ URL::asset('images/icon/icon_86.svg') }}" alt="" class="tran3s"></div>
									<h4>Secure payment <br> methods</h4>
								</div> <!-- /.card-style-ten -->
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="card-style-ten text-center mb-40">
									<div class="icon d-flex align-items-center justify-content-center m-auto"><img src="{{ URL::asset('images/icon/icon_87.svg') }}" alt="" class="tran3s"></div>
									<h4>Store pickup <br>facility.</h4>
								</div> <!-- /.card-style-ten -->
							</div>
						</div>
					</div> <!-- /.vcamp-feature-section-ten -->
				</div>
			</div> <!-- /.product-details-one -->



			<!-- 
			=============================================
				Realated Product
			============================================== 
			-->
			<div class="related-product mt-150 lg-mt-100">
				<div class="container">
					<div class="border-bottom pb-150 lg-pb-60">
						<div class="row align-items-center justify-content-between pb-50">
							<div class="col-md-6 col-sm-8">
								<div class="title-style-ten text-center text-sm-start xs-pb-30">
									<h2 class="title">Releted Products</h2>
								</div>
							</div>
							<div class="col-md-6 col-sm-4 d-flex justify-content-center justify-content-sm-end">
								<ul class="slider-arrows product-slider-arrow-one d-flex style-none">
									<li class="prev_p4 slick-arrow ripple-btn" style=""><i class="bi bi-chevron-left"></i></li>
									<li class="next_p4 slick-arrow ripple-btn" style=""><i class="bi bi-chevron-right"></i></li>
								</ul>
							</div>
						</div>

						<div class="product_slider_four product_slider_space">
							<div class="item">
								<div class="product-block-two">
									<div class="img-holder">
										<a href="#" class="d-flex align-items-center justify-content-center h-100">
											<img src="{{ URL::asset('images/shop/img_09.png') }}" alt="" class="product-img tran4s">
										</a>
										<a href="#" class="cart-icon" title="Add To Cart"><i class="bi bi-cart-check"></i></a>
									</div> <!-- /.img-holder -->
									<div class="product-meta">
										<div class="d-lg-flex align-items-center justify-content-between">
											<a href="#" class="product-title">Quilted Gilet With Hood</a>
											<ul class="style-none d-flex rating">
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star"></i></li>
											</ul>
										</div>
										<div class="price">$17.99</div>
									</div> <!-- /.product-meta -->
								</div> <!-- /.product-block-two -->
							</div>
							<div class="item">
								<div class="product-block-two">
									<div class="img-holder">
										<a href="#" class="d-flex align-items-center justify-content-center h-100">
											<img src="{{ URL::asset('images/shop/img_10.png') }}" alt="" class="product-img tran4s">
										</a>
										<a href="#" class="cart-icon" title="Add To Cart"><i class="bi bi-cart-check"></i></a>
									</div> <!-- /.img-holder -->
									<div class="product-meta">
										<div class="d-lg-flex align-items-center justify-content-between">
											<a href="#" class="product-title">Jogers with Black strip</a>
											<ul class="style-none d-flex rating">
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star"></i></li>
												<li><i class="bi bi-star"></i></li>
											</ul>
										</div>
										<div class="price">$80.99</div>
									</div> <!-- /.product-meta -->
								</div> <!-- /.product-block-two -->
							</div>
							<div class="item">
								<div class="product-block-two">
									<div class="img-holder">
										<a href="#" class="d-flex align-items-center justify-content-center h-100">
											<img src="{{ URL::asset('images/shop/img_11.png') }}" alt="" class="product-img tran4s">
										</a>
										<div class="tag-two">OUT OF STOCK</div>
									</div> <!-- /.img-holder -->
									<div class="product-meta">
										<div class="d-lg-flex align-items-center justify-content-between">
											<a href="#" class="product-title">Rolex Gold Watch</a>
											<ul class="style-none d-flex rating">
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star"></i></li>
											</ul>
										</div>
										<div class="price">$217.99</div>
									</div> <!-- /.product-meta -->
								</div> <!-- /.product-block-two -->
							</div>
							<div class="item">
								<div class="product-block-two">
									<div class="img-holder">
										<a href="#" class="d-flex align-items-center justify-content-center h-100">
											<img src="{{ URL::asset('images/shop/img_12.png') }}" alt="" class="product-img tran4s">
										</a>
										<a href="#" class="cart-icon" title="Add To Cart"><i class="bi bi-cart-check"></i></a>
									</div> <!-- /.img-holder -->
									<div class="product-meta">
										<div class="d-lg-flex align-items-center justify-content-between">
											<a href="#" class="product-title">Men’s Nike T-Shirt</a>
											<ul class="style-none d-flex rating">
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star"></i></li>
											</ul>
										</div>
										<div class="price">$23.99</div>
									</div> <!-- /.product-meta -->
								</div> <!-- /.product-block-two -->
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.shop-new-collection-section -->
			




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