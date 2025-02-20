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
			<header class="theme-main-menu sticky-menu theme-menu-one">
				<div class="inner-content">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo"><a href="{{ url('home.index') }}"><img src="{{ URL::asset('images/logo/vCamp_13.png') }}" alt="" width="37"></a></div>
						
						<div class="right-widget d-flex align-items-center">
							<button class="contact-fancy-btn" data-bs-toggle="modal" data-bs-target="#contactModal">
							  <em>Contact</em> <span>Me</span> <i class="bi bi-arrow-up-right"></i>
							</button>
						</div> <!-- /.right-widget -->
					</div>
				</div> <!-- /.inner-content -->
			</header> <!-- /.theme-main-menu -->


			
			<!-- 
			=============================================
				Theme Hero Banner
			============================================== 
			-->
			<div class="hero-banner-fourteen box-layout mt-225 lg-mt-200 md-mt-150">
				<div class="banner-intro position-relative">
					<div class="scroll-bar"></div>
					<div class="social-elemnet">
						<ul class="style-none d-flex align-items-center">
							<li><a href="#" class="tran3s">Fb.</a></li>
							<li><a href="#" class="tran3s">Tw.</a></li>
							<li><a href="#" class="tran3s">Inst.</a></li>
						</ul>
					</div>
					<div class="container">
						<div class="text-wrapper position-relative">
							<h1 class="hero-heading font-recoleta mb-65 lg-mb-30 pe-xxl-4"><span>Design</span>, Products, Brand In-House <span>development</span> & More.</h1>
							<div class="text-start text-lg-end">
								<div class="d-inline-block">
									<div class="ct-text text-start">Contact me for hire </div>
									<div class="mt-5"><a href="mailto:hey@vcampdesign.com" class="mail-info tran3s">hey@vcampdesign.com</a></div>
								</div>
							</div>
							<img src="{{ URL::asset('images/shape/shape_75.svg') }}" alt="" class="shape-one">
						</div>
					</div>
				</div> <!-- /.banner-intro -->
			</div> <!-- /.hero-banner-fourteen -->

			


			<!--
			=====================================================
				Portfolio Gallery Four
			=====================================================
			-->
			<div class="portfolio-gallery-four pt-200 lg-pt-100">
				<div class="container">
					<div class="wrapper">
						<div id="isotop-gallery-wrapper">
							<div class="grid-sizer"></div>
							<div class="isotop-item plugin item-xl">
								<div class="gallery-item mb-55 lg-mb-30">
									<div class="img-holder">
										<img src="{{ URL::asset('images/gallery/img_47.jpg') }}" alt="" class="img-meta w-100 tran6s">
										<a class="fancybox video-icon tran3s overlay-icon" data-fancybox="" href="https://www.youtube.com/embed/aXFSJTjVjw0"><i class="bi bi-play-fill"></i></a>
										<div class="caption tran3s d-flex justify-content-end flex-column">
											<span class="tag">UI/UX</span>
											<h6><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="pj-title">Anaylsis Application.</a></h6>
										</div> <!-- /.caption -->
									</div>
								</div> <!-- /.gallery-item -->
							</div> <!-- /.isotop-item -->
							<div class="isotop-item item-xl dev branding">
								<div class="gallery-item mb-55 lg-mb-30">
									<div class="img-holder">
										<img src="{{ URL::asset('images/gallery/img_53.jpg') }}" alt="" class="img-meta w-100 tran6s">
										<a class="fancybox tran3s overlay-icon zoom-icon" data-fancybox="" title="Click for large view" href="images/gallery/img_53.jpg" tabindex="0"><i class="bi bi-plus"></i></a>
										<div class="caption tran3s d-flex justify-content-end flex-column">
											<span class="tag">App</span>
											<h6><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="pj-title">The Bomb Squad</a></h6>
										</div> <!-- /.caption -->
									</div>
								</div> <!-- /.gallery-item -->
							</div> <!-- /.isotop-item -->
							<div class="isotop-item item-xl custom plugin">
								<div class="gallery-item mb-55 lg-mb-30">
									<div class="img-holder">
										<img src="{{ URL::asset('images/gallery/img_50.jpg') }}" alt="" class="img-meta w-100 tran6s">
										<a class="fancybox video-icon tran3s overlay-icon" data-fancybox="" href="https://www.youtube.com/embed/aXFSJTjVjw0"><i class="bi bi-play-fill"></i></a>
										<div class="caption tran3s d-flex justify-content-end flex-column">
											<span class="tag">Mobile</span>
											<h6><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="pj-title">Weekend Warriors</a></h6>
										</div> <!-- /.caption -->
									</div>
								</div> <!-- /.gallery-item -->
							</div> <!-- /.isotop-item -->
							<div class="isotop-item item-xl custom dev">
								<div class="gallery-item mb-55 lg-mb-30">
									<div class="img-holder">
										<img src="{{ URL::asset('images/gallery/img_56.jpg') }}" alt="" class="img-meta w-100 tran6s">
										<a class="fancybox tran3s overlay-icon zoom-icon" data-fancybox="" title="Click for large view" href="images/gallery/img_56.jpg" tabindex="0"><i class="bi bi-plus"></i></a>
										<div class="caption tran3s d-flex justify-content-end flex-column">
											<span class="tag">Branding</span>
											<h6><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="pj-title">Associations Now</a></h6>
										</div> <!-- /.caption -->
									</div>
								</div> <!-- /.gallery-item -->
							</div> <!-- /.isotop-item -->
							<div class="isotop-item item-xl branding">
								<div class="gallery-item mb-55 lg-mb-30">
									<div class="img-holder">
										<img src="{{ URL::asset('images/gallery/img_88.jpg') }}" alt="" class="img-meta w-100 tran6s">
										<a class="fancybox video-icon tran3s overlay-icon" data-fancybox="" href="https://www.youtube.com/embed/aXFSJTjVjw0"><i class="bi bi-play-fill"></i></a>
										<div class="caption tran3s d-flex justify-content-end flex-column">
											<span class="tag">Code</span>
											<h6><a href="{{ url('portfolio.single_portfolio.portfolio-detailsV5') }}" class="pj-title">The code Honors</a></h6>
										</div> <!-- /.caption -->
									</div>
								</div> <!-- /.gallery-item -->
							</div> <!-- /.isotop-item -->
						</div> <!-- /#isotop-gallery-wrapper -->

						<div class="load-more-item1 text-center mt-80 lg-mt-50">
							<a href="#" class="tran3s"><i class="bi bi-arrow-down"></i></a>
							<span class="pt-10">Load More</span>
						</div> <!-- /.load-more-item1 -->
					</div> <!-- /.wrapper -->
				</div>
			</div> <!-- /.portfolio-gallery-four -->
			



			<!-- 
			=============================================
				Vcamp Feature Section Sixteen
			============================================== 
			-->
			<div class="vcamp-feature-section-sixteen mt-100 lg-mt-80">
				<div class="container">
					<div class="border-top border-bottom pt-80 pb-50 lg-pt-60 lg-pb-20">
						<div class="row">
							<div class="col-xl-3">
								<div class="service-title lg-mb-50">WHAT WE DO</div>
							</div>
							<div class="col-xl-3 col-md-4">
								<div class="card-style-sixteen mb-40">
									<div class="card-title mb-40 lg-mb-20">Designing</div>
									<ul class="style-none">
										<li>Personalization</li>
										<li>Third-Party Integrations</li>
										<li>First-Party Analytics</li>
										<li>Hosting Setup</li>
										<li>Securty</li>
									</ul>
								</div> <!-- /.card-style-sixteen -->
							</div>
							<div class="col-xl-3 col-md-4">
								<div class="card-style-sixteen mb-40">
									<div class="card-title mb-40 lg-mb-20">Print/Brand</div>
									<ul class="style-none">
										<li>Full Consultation</li>
										<li>Code Review</li>
										<li>Staff Augmentation</li>
										<li>Support</li>
									</ul>
								</div> <!-- /.card-style-sixteen -->
							</div>
							<div class="col-xl-3 col-md-4">
								<div class="card-style-sixteen mb-40">
									<div class="card-title mb-40 lg-mb-20">Art/Illustration</div>
									<ul class="style-none">
										<li>Personalization</li>
										<li>Third-Party Integrations</li>
										<li>First-Party Analytics</li>
										<li>Hosting Setup</li>
										<li>Securty</li>
									</ul>
								</div> <!-- /.card-style-sixteen -->
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.vcamp-feature-section-sixteen -->


			<!--
			=====================================================
				Blog Section One
			=====================================================
			-->
			<div class="blog-section-one mt-140 lg-mt-120">
				<div class="container">
					<div class="row">
						<div class="col-12 m-auto">
							<div class="row align-items-center">
								<div class="col-xl-5 col-sm-6">
									<div class="title-style-one">
										<h2 class="title">Our Blog</h2>
									</div>
								</div>
								<div class="col-xl-7 col-sm-6 text-sm-end text-start">
									<a href="{{ url('blog.blogV2') }}" class="theme-btn-three xs-mt-30">Check our all news <i class="fas fa-angle-right"></i></a>
								</div>
							</div>
							<div class="mt-100 lg-mt-60">
								<div class="row gx-xxl-5">
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
				Vcamp Fancy Banner Twelve
			=====================================================
			-->
			<div class="fancy-banner-twelve position-relative pt-160 pb-50 mb-65 md-mb-20">
				<div class="container">
					<button class="contact-btn tran3s" data-bs-toggle="modal" data-bs-target="#contactModal">
						<img src="{{ URL::asset('images/icon/icon_118.svg') }}" alt="" class="m-auto">
					</button>
				</div>
				<div class="floating-text font-recoleta"><span>Contact Us. Contact Us . Contact Us. Contact Us. Contact Us . Contact Us.</span></div>
			</div> <!-- /.fancy-banner-twelve -->




			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<div class="vcamp-footer-six">
				<div class="container">
					<div class="d-lg-flex align-items-center justify-content-between text-center">
						<div class="logo pb-30 order-lg-1"><a href="{{ url('home.index') }}"><img src="{{ URL::asset('images/logo/vCamp_14.png') }}" alt="" width="90"></a></div>
						<p class="d-flex align-items-center justify-content-center mail-info theme-mb-0 pb-30 order-lg-3">
							<img src="{{ URL::asset('images/icon/icon_112.svg') }}" alt="" class="me-2">
							<a href="mailto:askreza@vcamp.com">askru@vcamp.com</a>
						</p>
						<ul class="style-none d-flex align-items-center justify-content-center social-icon pb-30 order-lg-2">
							<li><a href="#"><img src="{{ URL::asset('images/icon/icon_108.svg') }}" alt="" class="tran3s"></a></li>
							<li><a href="#"><img src="{{ URL::asset('images/icon/icon_109.svg') }}" alt="" class="tran3s"></a></li>
							<li><a href="#"><img src="{{ URL::asset('images/icon/icon_110.svg') }}" alt="" class="tran3s"></a></li>
							<li><a href="#"><img src="{{ URL::asset('images/icon/icon_111.svg') }}" alt="" class="tran3s"></a></li>
						</ul>
					</div>
				</div>
			</div> <!-- /.vcamp-footer-six -->



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