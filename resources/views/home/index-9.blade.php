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
			<header class="theme-main-menu theme-menu-four dark-bg">
				<div class="inner-content">
					<div class="d-flex align-items-center justify-content-between">
						<div class="left-widget d-flex align-items-center">
							<div class="logo d-flex align-items-center">
								<a href="{{ url('home.index') }}" class="w-100 h-100 d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/logo/vCamp_07.svg') }}" alt=""></a>
							</div>
							<form action="#" class="search-form d-none d-md-block">
								<input type="text" placeholder="Search here...">
								<button class="tran3s"><i class="bi bi-search"></i></button>
							</form>
						</div>
						
						<div class="right-widget d-flex align-items-center">
							<div class="d-none d-sm-block">
								<a href="{{ url('shop.sign-in') }}" class="d-flex align-items-center login-btn">
									<img src="{{ URL::asset('images/icon/icon_44.svg') }}" alt="">
									<span>login</span>
								</a>
							</div>
							<div class="cart-group-wrapper">
								<button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
							    	<img src="{{ URL::asset('images/icon/icon_72.svg') }}" alt="" class="m-auto">
							    	<span class="item-count">02</span>
							  	</button>
							  	<div class="dropdown-menu dropdown-menu-end dark-dropdown">
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
							<button class="sidebar-nav-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="{{ URL::asset('images/icon/icon_70.svg') }}" alt="" class="m-auto"></button>
						</div> <!-- /.right-widget -->
					</div>
				</div> <!-- /.inner-content -->
			</header> <!-- /.theme-main-menu -->



			<!-- 
			=============================================
				One Page Section Two
			============================================== 
			-->
			<div class="page-scroll-element-two dark-bg">
				<div class="scroll-bar"></div>
				<div class="social-elemnet">
					<ul class="style-none d-flex align-items-center">
						<li><a href="#" class="tran3s">Fb.</a></li>
						<li><a href="#" class="tran3s">Tw.</a></li>
						<li><a href="#" class="tran3s">Inst.</a></li>
					</ul>
				</div>
				<a href="#" class="chat-icon d-flex align-items-center justify-content-center"><i class="bi bi-chat-left"></i></a>

				<div id="page-scroll-container-two">
					<div class="spl-section-two section">
						<div class="section-no">01</div>
						<div class="main-wrapper h-100 d-md-flex align-items-center justify-content-between">
							<div class="text-holder">
								<h2 class="item-title font-recoleta">Best Summer Item.</h2>
								<ul class="style-none product-info row gx-0">
									<li>
										<div class="label-title">Price</div>
										<div class="price">$78.00</div>
									</li>
									<li>
										<div class="label-title">Size</div>
										<ul class="style-none d-flex align-items-center size-custome-input">
											<li>
												<input type="radio" name="size" value="small" class="size-check-btn">
												<label>S</label>
											</li>
											<li>
												<input type="radio" name="size" value="medium" class="size-check-btn" checked="checked">
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
									</li>
									<li>
										<div class="label-title">Color</div>
										<ul class="style-none d-flex align-items-center color-custome-input">
											<li>
												<input type="radio" name="color" value="color01" class="color-check-btn" checked="checked">
												<label style="background:#C3D2D2;"></label>
											</li>
											<li>
												<input type="radio" name="color" value="color02" class="color-check-btn">
												<label style="background:#E9DCC8;"></label>
											</li>
											<li>
												<input type="radio" name="color" value="color03" class="color-check-btn">
												<label style="background:#D5C9F8;"></label>
											</li>
										</ul>
									</li>
								</ul> <!-- /.product-info -->

								<div class="button-group d-flex align-items-center">
									<a href="{{ url('shop.productV3') }}" class="shop-btn">SHOP NOW</a>
									<a href="#" class="add-to-fav tran3s"><i class="bi bi-suit-heart"></i></a>
									<a href="#" class="add-cart-btn tran3s">+</a>
								</div> <!-- /.button-group -->
							</div> <!-- /.text-holder -->

							<div class="product-img-holder">
								<img src="{{ URL::asset('images/shop/img_16.png') }}" alt="" class="product-img">
								<img src="{{ URL::asset('images/shop/img_17.png') }}" alt="" class="offer-img">
							</div> <!-- /.product-img-holder -->
						</div> <!-- /.main-wrapper -->
					</div> <!-- /.spl-section-two -->


					<div class="spl-section-two section">
						<div class="section-no">02</div>
						<div class="main-wrapper h-100 d-md-flex align-items-center justify-content-between">
							<div class="text-holder">
								<h2 class="item-title font-recoleta">Best Winter Item.</h2>
								<ul class="style-none product-info row gx-0">
									<li>
										<div class="label-title">Price</div>
										<div class="price">$65.00</div>
									</li>
									<li>
										<div class="label-title">Size</div>
										<ul class="style-none d-flex align-items-center size-custome-input">
											<li>
												<input type="radio" name="size" value="small" class="size-check-btn">
												<label>S</label>
											</li>
											<li>
												<input type="radio" name="size" value="medium" class="size-check-btn" checked="checked">
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
									</li>
									<li>
										<div class="label-title">Color</div>
										<ul class="style-none d-flex align-items-center color-custome-input">
											<li>
												<input type="radio" name="color" value="color01" class="color-check-btn" checked="checked">
												<label style="background:#C3D2D2;"></label>
											</li>
											<li>
												<input type="radio" name="color" value="color02" class="color-check-btn">
												<label style="background:#E9DCC8;"></label>
											</li>
											<li>
												<input type="radio" name="color" value="color03" class="color-check-btn">
												<label style="background:#D5C9F8;"></label>
											</li>
										</ul>
									</li>
								</ul> <!-- /.product-info -->

								<div class="button-group d-flex align-items-center">
									<a href="{{ url('shop.productV3') }}" class="shop-btn">SHOP NOW</a>
									<a href="#" class="add-to-fav tran3s"><i class="bi bi-suit-heart"></i></a>
									<a href="#" class="add-cart-btn tran3s">+</a>
								</div> <!-- /.button-group -->
							</div> <!-- /.text-holder -->

							<div class="product-img-holder">
								<img src="{{ URL::asset('images/shop/img_16.png') }}" alt="" class="product-img">
								<img src="{{ URL::asset('images/shop/img_17.png') }}" alt="" class="offer-img">
							</div> <!-- /.product-img-holder -->
						</div> <!-- /.main-wrapper -->
					</div> <!-- /.spl-section-two -->


					<div class="spl-section-two section">
						<div class="section-no">03</div>
						<div class="main-wrapper h-100 d-md-flex align-items-center justify-content-between">
							<div class="text-holder">
								<h2 class="item-title font-recoleta">Best Summer Item.</h2>
								<ul class="style-none product-info row gx-0">
									<li>
										<div class="label-title">Price</div>
										<div class="price">$75.00</div>
									</li>
									<li>
										<div class="label-title">Size</div>
										<ul class="style-none d-flex align-items-center size-custome-input">
											<li>
												<input type="radio" name="size" value="small" class="size-check-btn">
												<label>S</label>
											</li>
											<li>
												<input type="radio" name="size" value="medium" class="size-check-btn" checked="checked">
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
									</li>
									<li>
										<div class="label-title">Color</div>
										<ul class="style-none d-flex align-items-center color-custome-input">
											<li>
												<input type="radio" name="color" value="color01" class="color-check-btn" checked="checked">
												<label style="background:#C3D2D2;"></label>
											</li>
											<li>
												<input type="radio" name="color" value="color02" class="color-check-btn">
												<label style="background:#E9DCC8;"></label>
											</li>
											<li>
												<input type="radio" name="color" value="color03" class="color-check-btn">
												<label style="background:#D5C9F8;"></label>
											</li>
										</ul>
									</li>
								</ul> <!-- /.product-info -->

								<div class="button-group d-flex align-items-center">
									<a href="{{ url('shop.productV3') }}" class="shop-btn">SHOP NOW</a>
									<a href="#" class="add-to-fav tran3s"><i class="bi bi-suit-heart"></i></a>
									<a href="#" class="add-cart-btn tran3s">+</a>
								</div> <!-- /.button-group -->
							</div> <!-- /.text-holder -->

							<div class="product-img-holder">
								<img src="{{ URL::asset('images/shop/img_16.png') }}" alt="" class="product-img">
								<img src="{{ URL::asset('images/shop/img_17.png') }}" alt="" class="offer-img">
							</div> <!-- /.product-img-holder -->
						</div> <!-- /.main-wrapper -->
					</div> <!-- /.spl-section-two -->


				</div> <!-- /#page-scroll-container-two -->
			</div> <!-- /.page-scroll-element-two -->



			



			
			
			


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