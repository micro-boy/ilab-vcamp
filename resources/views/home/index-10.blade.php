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

	<body data-bs-spy="scroll" data-bs-target=".theme-main-menu" data-bs-offset="150" tabindex="0">
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
			<header class="theme-main-menu sticky-menu theme-menu-five">
				<div class="inner-content">
					<div class="d-flex align-items-center justify-content-lg-center justify-content-between">
						<div class="logo"><a href="{{ url('home.index') }}"><img src="{{ URL::asset('images/logo/vCamp_08.svg') }}" alt=""></a></div>
						<nav class="navbar navbar-expand-lg">
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						      <span></span>
						    </button>
						    <div class="collapse navbar-collapse dark-style" id="navbarNav">
						    	<ul class="navbar-nav">
							        <li class="nav-item">
							        	<a class="nav-link" href="#about">About us</a>
						            </li>
						            <li class="nav-item">
							        	<a class="nav-link" href="#join-us">Join us</a>
						            </li>
							        <li class="nav-item">
							        	<a class="nav-link" href="#team">Team</a>
						            </li>
							        <li class="nav-item">
							        	<a class="nav-link" href="#news">News & Events</a>
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
					</div>
				</div> <!-- /.inner-content -->
			</header> <!-- /.theme-main-menu -->


			
			<!-- 
			=============================================
				Theme Hero Banner
			============================================== 
			-->
			<div class="hero-banner-seven">
				<div class="main-content">
					<div class="row justify-content-between align-items-start">
						<div class="col-xl-6 col-lg-8 col-md-8 ms-auto me-auto order-xl-2">
							<h1 class="title cd-headline rotate-1 lg-mb-60">
						    	<span>Being <span class="line-shape">founder</span> takes</span> guts.
						      	<!-- <span class="cd-words-wrapper">
						         	<b class="is-visible">guts.</b>
						         	<b>risk.</b>
						      	</span> -->
						   </h1>
						</div>
						<div class="col-xl-3 col-lg-5 col-sm-6 order-xl-1">
							<div class="img-meta-card d-flex flex-column">
								<img src="{{ URL::asset('images/media/img_67.png') }}" alt="">
								<p>We are Bams Founders <span>VC firm</span> & building companies in Emerging markets.</p>
							</div>
						</div>
						<div class="col-xl-3 col-lg-5 col-sm-6 order-xl-3">
							<div class="img-meta-card d-flex flex-sm-column-reverse flex-column">
								<img src="{{ URL::asset('images/media/img_68.png') }}" alt="">
								<p>We are Bams Founders lorem <span>a vCamp firm</span> Backing iq and building  companies dsu in Emerging markets.</p>
							</div>
						</div>
					</div>
				</div> <!-- /.main-content -->
				<a href="#about" class="scroll-btn"><img src="{{ URL::asset('images/icon/icon_73.svg') }}" alt=""></a>
			</div> <!-- /.hero-banner-seven -->

			


			<!-- 
			=============================================
				Vcamp Feature Section Nine
			============================================== 
			-->
			<div class="vcamp-feature-section-nine pt-170 lg-pt-120" id="about">
				<div class="container">
					<div class="title-style-seven text-center pb-60 lg-pb-20">
						<h2 class="title">We help shape your ideas and turn them into <span>real businesses. <img src="{{ URL::asset('images/shape/shape_53.svg') }}" alt=""></span></h2>
						<p>We turn bold ideas into market-leading companies.</p>
					</div> <!-- /.title-style-seven -->

					<div class="row">
						<div class="col-lg-4 col-sm-6" data-aos="fade-up">
							<div class="card-style-nine mt-40">
								<div class="img-holder d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/assets/ils_08.png') }}" alt=""></div>
								<h3>Build like <br>a co-founder</h3>
							</div> <!-- /.card-style-nine -->
						</div>
						<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
							<div class="card-style-nine mt-40">
								<div class="img-holder d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/assets/ils_09.png') }}" alt=""></div>
								<h3>Investing <br>as a Partner</h3>
							</div> <!-- /.card-style-nine -->
						</div>
						<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
							<div class="card-style-nine mt-40">
								<div class="img-holder d-flex align-items-center justify-content-center"><img src="{{ URL::asset('images/assets/ils_10.png') }}" alt=""></div>
								<h3>Work for our <br>company</h3>
							</div> <!-- /.card-style-nine -->
						</div>
					</div>
				</div>
			</div> <!-- /.vcamp-feature-section-nine -->
			


			<!-- 
			=============================================
				Vcamp Text Block Seven
			============================================== 
			-->
			<div class="vcamp-text-block-seven pt-180 lg-pt-120">
				<div class="container">
					<div class="row gx-xl-5">
						<div class="col-lg-6">
							<div class="title-style-seven md-pb-10">
								<h2 class="title">We Invest in  <span>Founders.<img src="{{ URL::asset('images/shape/shape_54.svg') }}" alt=""></span></h2>
							</div> <!-- /.title-style-seven -->
						</div>
						<div class="col-lg-6">
							<div class="text-wrapper">
								<p class="text-lg">We are the startup studio with a mission to partner with the best founders connecting them with ideas & placing them in unparalleled eco system of company builders and resources for growth.</p>
								<p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
								<h6 class="name">Rashed Ka. <span>CEO vCamp</span></h6>
							</div> <!-- /.text-wrapper -->
						</div>
					</div>
				</div>
			</div> <!-- /.vcamp-text-block-seven -->




			<!-- 
			=============================================
				Vcamp Text Block Eight
			============================================== 
			-->
			<div class="vcamp-text-block-eight dark-bg mt-180 lg-mt-120">
				<div class="container">
					<div class="row">
						<div class="col-xxl-6 col-lg-6 ms-auto">
							<div class="text-wrapper">
								<h6>Over 250k+ Clients</h6>
								<h2>A company is product of quality, tact, & heart.</h2>
							</div> <!-- /.text-wrapper -->
						</div>
					</div>
				</div>
				<img src="{{ URL::asset('images/assets/ils_11.png') }}" alt="" class="illustration shapes">
			</div> <!-- /.vcamp-text-block-eight -->



			<!-- 
			=============================================
				Vcamp Text Block Nine
			============================================== 
			-->
			<div class="vcamp-text-block-nine pt-180 pb-180 lg-pt-120 lg-pb-100" id="join-us">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-8 col-sm-11">
							<div class="text-wrapper">
								<h2>Join 1 million+ entrepreneurs that love what we do.</h2>
								<p class="text-lg">We are the startup studio with a mission to partner with the best founders connecting them with ideas and placing lorem.</p>
								<a href="{{ url('pages.support.contactV2') }}" class="theme-btn-nine">JOIN OUR FAMILY</a>
							</div> <!-- /.text-wrapper -->
						</div>
					</div>
				</div>
				<img src="{{ URL::asset('images/assets/ils_12.png') }}" alt="" class="illustration shapes" data-aos="fade-left">
			</div> <!-- /.vcamp-text-block-nine -->


			<!-- 
			=============================================
				Vcamp Text Block Ten
			============================================== 
			-->
			<div class="vcamp-text-block-ten dark-bg">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-6 col-sm-8 ms-auto">
							<div class="title-style-seven white-vr text-end text-md-start" data-aos="fade-left">
								<h2 class="title"><span class="bg-shape">20 cities</span> <br>and growing.</h2>
							</div> <!-- /.title-style-seven -->
						</div>
					</div>
				</div>
				<ul class="city-list style-none">
					<li>Egypt,</li>
					<li>Nigeria, </li>
					<li>DR Congo,</li>
					<li>Pakistan,</li>
					<li>Turkey,</li>
					<li>South Africa,</li>
					<li>Poland,</li>
					<li>DR Congo,</li>
					<li>Pakistan,</li>
					<li>Turkey,</li>
					<li>South Africa,</li>
				</ul>
			</div> <!-- /.vcamp-text-block-ten -->



			<!-- 
			=============================================
				Team Section Three
			============================================== 
			-->
			<div class="team-section-three pt-180 lg-pt-120" id="team">
				<div class="container">
					<div class="row">
						<div class="col-lg-9 m-auto">
							<div class="title-style-seven text-center pb-20 lg-p0">
								<h2 class="title">We’re our own Biggest <span>Investors <img src="{{ URL::asset('images/shape/shape_53.svg') }}" alt=""></span></h2>
								<p>Our mission is to most aligned fund for funders at the seed stage. Everyone on the investment team has started a company.</p>
							</div> <!-- /.title-style-seven -->
						</div>
					</div>

					<div class="row">
						<div class="col-xxl-11 m-auto">
							<div class="row">
								<div class="col-lg-4 col-sm-6" data-aos="fade-up">
									<div class="team-block-three">
										<div class="img-meta"><img src="{{ URL::asset('images/team/img_16.jpg') }}" alt="" class="w-100"></div>
										<h3 class="name"><a href="#">David Frankle</a></h3>
										<div class="designation">Managing Director</div>
										<ul class="d-flex justify-content-center social-icon style-none">
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										</ul>
									</div> <!-- /.team-block-three -->
								</div>
								<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
									<div class="team-block-three">
										<div class="img-meta"><img src="{{ URL::asset('images/team/img_17.jpg') }}" alt="" class="w-100"></div>
										<h3 class="name"><a href="#">Eric Pelay</a></h3>
										<div class="designation">Co-Founder</div>
										<ul class="d-flex justify-content-center social-icon style-none">
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										</ul>
									</div> <!-- /.team-block-three -->
								</div>
								<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
									<div class="team-block-three">
										<div class="img-meta"><img src="{{ URL::asset('images/team/img_18.jpg') }}" alt="" class="w-100"></div>
										<h3 class="name"><a href="#">Lewis Pittman</a></h3>
										<div class="designation">Managing Partners</div>
										<ul class="d-flex justify-content-center social-icon style-none">
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										</ul>
									</div> <!-- /.team-block-three -->
								</div>
								<div class="col-lg-4 col-sm-6" data-aos="fade-up">
									<div class="team-block-three">
										<div class="img-meta"><img src="{{ URL::asset('images/team/img_19.jpg') }}" alt="" class="w-100"></div>
										<h3 class="name"><a href="#">Marguerite Roy</a></h3>
										<div class="designation">Managing Director</div>
										<ul class="d-flex justify-content-center social-icon style-none">
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										</ul>
									</div> <!-- /.team-block-three -->
								</div>
								<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
									<div class="team-block-three">
										<div class="img-meta"><img src="{{ URL::asset('images/team/img_20.jpg') }}" alt="" class="w-100"></div>
										<h3 class="name"><a href="#">Bryan Taylor</a></h3>
										<div class="designation">Co-Founder</div>
										<ul class="d-flex justify-content-center social-icon style-none">
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										</ul>
									</div> <!-- /.team-block-three -->
								</div>
								<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
									<div class="team-block-three">
										<div class="img-meta"><img src="{{ URL::asset('images/team/img_21.jpg') }}" alt="" class="w-100"></div>
										<h3 class="name"><a href="#">Thomas Sparks</a></h3>
										<div class="designation">Managing Partners</div>
										<ul class="d-flex justify-content-center social-icon style-none">
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										</ul>
									</div> <!-- /.team-block-three -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.team-section-three -->



			<!--
			=====================================================
				Blog Section Six
			=====================================================
			-->
			<div class="blog-section-six dark-bg mt-180 lg-mt-120" id="news">
				<div class="container">
					<div class="title-style-eight text-center white-vr mb-160 lg-mb-100 md-mb-40">
						<h2 class="title"><span>Company News <img src="{{ URL::asset('images/shape/shape_56.svg') }}" alt=""></span></h2>
					</div> <!-- /.title-style-eight -->
					<div class="row gx-xl-5">
						<div class="col-lg-4 col-md-6 lg-mt-40">
							<article class="blog-meta-three featured-post">
								<a href="{{ url('blog.blog-detailsV1') }}" class="tag">Event</a>
								<a href="{{ url('blog.blog-detailsV1') }}" class="title">Speaking remotely at WordCamp US.</a>
								<div class="d-flex align-items-center justify-content-between">
									<div class="post-info">Trending - <span class="date">18 Jul 20</span></div>
									<a href="{{ url('blog.blog-detailsV1') }}" class="read-more tran3s"><img src="{{ URL::asset('images/icon/icon_74.svg') }}" alt=""></a>
								</div>
							</article>
						</div>
						<div class="col-lg-4 col-md-6 lg-mt-40">
							<article class="blog-meta-three">
								<a href="{{ url('blog.blog-detailsV1') }}" class="tag">Plugin</a>
								<a href="{{ url('blog.blog-detailsV1') }}" class="title">Ultimate uide to be a smart founder.</a>
								<div class="d-flex align-items-center justify-content-between">
									<div class="post-info">Featured - <span class="date">18 Jul 20</span></div>
									<a href="{{ url('blog.blog-detailsV1') }}" class="read-more tran3s"><img src="{{ URL::asset('images/icon/icon_74.svg') }}" alt=""></a>
								</div>
							</article>
						</div>
						<div class="col-lg-4 col-md-6 lg-mt-40">
							<article class="blog-meta-three">
								<a href="{{ url('blog.blog-detailsV1') }}" class="tag">Wordpress</a>
								<a href="{{ url('blog.blog-detailsV1') }}" class="title">Monthly Roundup event December 2021.</a>
								<div class="d-flex align-items-center justify-content-between">
									<div class="post-info">Featured - <span class="date">18 Jul 20</span></div>
									<a href="{{ url('blog.blog-detailsV1') }}" class="read-more tran3s"><img src="{{ URL::asset('images/icon/icon_74.svg') }}" alt=""></a>
								</div>
							</article>
						</div>
					</div>
					<div class="text-center mt-110 lg-mt-80">
						<a href="{{ url('blog.blogV1') }}" class="theme-btn-ten">READ MORE</a>
					</div>
				</div>
			</div> <!-- /.blog-section-six -->




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
    	<!-- Animated Headline -->
    	<script src="{{ URL::asset('vendor/animated-headline-master/main.js') }}"></script>

		<!-- Theme js -->
		<script src="{{ URL::asset('js/theme.js') }}"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>