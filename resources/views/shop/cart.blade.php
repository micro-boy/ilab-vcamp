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
				Cart Page
			============================================== 
			-->
			<div class="cart-section pt-250 pb-100 lg-pt-150 sm-pb-50">
				<div class="container">
					<form action="#" class="cart-list-form">
						<div class="table-responsive">
							<table class="table">
							    <thead>
								    <tr>
								      <th colspan="2">Product</th>
								      <th>Price</th>
								      <th>QTY</th>
								      <th>Total</th>
								      <th>&nbsp;</th>
								    </tr>
								</thead>
								<tbody>
									<tr>
										<td class="product-thumbnails"><a href="#" class="product-img"><img src="{{ URL::asset('images/shop/img_31.png') }}" alt=""></a></td>
										<td class="product-info">
											<a href="#" class="product-name">Rolex Gold Watch</a>
											<div class="serial">#859632007881</div>
											<ul class="style-none">
												<li class="size">Size: 23”</li>
												<li class="color">Color: Red</li>
											</ul>
										</td>
										<td class="price"><span>$99.00</span></td>
										<td class="quantity">
											<ul class="order-box style-none">
												<li><div class="btn value-decrease">-</div></li>
												<li><input type="number" min="1" max="22" value="1" disabled class="product-value val"></li>
												<li><div class="btn value-increase">+ </div></li>
											</ul>
										</td>
										<td class="price total-price"><span>$99.00</span></td>
										<td><a href="#" class="remove-product">x</a></td>
									</tr>
									<tr>
										<td class="product-thumbnails"><a href="#" class="product-img"><img src="{{ URL::asset('images/shop/img_32.png') }}" alt=""></a></td>
										<td class="product-info">
											<a href="#" class="product-name">Quilted Gilet With Hood</a>
											<div class="serial">#859632007881</div>
											<ul class="style-none">
												<li class="size">Size: 23”</li>
												<li class="color">Color: N/A</li>
											</ul>
										</td>
										<td class="price"><span>$120.00</span></td>
										<td class="quantity">
											<ul class="order-box style-none">
												<li><div class="btn value-decrease">-</div></li>
												<li><input type="number" min="1" max="22" value="1" disabled class="product-value val"></li>
												<li><div class="btn value-increase">+ </div></li>
											</ul>
										</td>
										<td class="price total-price"><span>$120.00</span></td>
										<td><a href="#" class="remove-product">x</a></td>
									</tr>
									<tr>
										<td class="product-thumbnails"><a href="#" class="product-img"><img src="{{ URL::asset('images/shop/img_33.png') }}" alt=""></a></td>
										<td class="product-info">
											<a href="#" class="product-name">Jogers with Black strip</a>
											<div class="serial">#859632007881</div>
											<ul class="style-none">
												<li class="size">Size: N/A</li>
												<li class="color">Color: Red</li>
											</ul>
										</td>
										<td class="price"><span>$143.00</span></td>
										<td class="quantity">
											<ul class="order-box style-none">
												<li><div class="btn value-decrease">-</div></li>
												<li><input type="number" min="1" max="22" value="1" disabled class="product-value val"></li>
												<li><div class="btn value-increase">+ </div></li>
											</ul>
										</td>
										<td class="price total-price"><span>$143.00</span></td>
										<td><a href="#" class="remove-product">x</a></td>
									</tr>
								</tbody>
							</table>
						</div> <!-- /.table-responsive -->

						<div class="d-sm-flex justify-content-between cart-footer">
							<div class="coupon-section d-flex flex-column">
								<div class="coupon-form d-lg-flex align-items-center">
									<input type="text" placeholder="Enter your code">
									<button class="theme-btn-seven md-mt-20 xs-mb-20">Apply Coupne</button>
								</div> <!-- /.coupon-form -->
								<div class="mt-auto"><button class="theme-btn-seven update-cart-button">Update cart</button></div>
							</div> <!-- /.coupon-section -->

							<div class="cart-total-section d-flex flex-column sm-pt-40">
								<table class="cart-total-table">
									<tbody>
										<tr>
											<th>Subtotal</th>
											<td>$276.65</td>
										</tr>
										<tr>
											<th>Shipping Cost</th>
											<td>$13.00</td>
										</tr>
										<tr>
											<th>Total</th>
											<td>$289.65</td>
										</tr>
									</tbody>
								</table> <!-- /.cart-total-table -->
								<a href="{{ url('shop.checkout') }}" class="theme-btn-seven checkout-process mt-30">Checkout</a>
							</div>
						</div> <!-- /.cart-footer -->
					</form>
				</div> <!-- /.container -->
			</div> <!-- /.cart-section -->
			
			


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