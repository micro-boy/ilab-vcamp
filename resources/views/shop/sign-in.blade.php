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
				Sign In
			============================================== 
			-->
			<div class="user-data-page clearfix d-md-flex">
				<div class="illustration-wrapper d-none d-md-flex align-items-center justify-content-between flex-column" style="background: #F9F5F0;;">
					<div class="row">
						<div class="col-xxl-8 col-xl-11 m-auto">
							<blockquote>"It is better to fail in originality than to succeed in imitation."</blockquote>
							<span class="bio">— Herman Melville</span>
						</div>
					</div>
					<div class="illustration-holder">
						<img src="{{ URL::asset('images/assets/ils_05.png') }}" alt="" class="illustration ms-auto">
					</div>
				</div> <!-- /.illustration-wrapper -->

				<div class="form-wrapper">
					<div class="d-flex justify-content-between align-items-center">
						<div class="logo"><a href="{{ url('home.index') }}"><img src="{{ URL::asset('images/logo/vCamp_01.png') }}" alt="" width="127"></a></div>
						<a href="{{ url('home.index') }}" class="go-back-button">Go to home</a>
					</div>
					<form action="#" class="user-data-form mt-80 lg-mt-50">
						<h2 class="font-recoleta">Hi <span>buddy</span>, welcome <br> Back!</h2>
						<p class="header-info pt-20 pb-50 lg-pb-30">Still don't have an account? <a href="{{ url('shop.sign-up') }}">Sign up</a></p>

						<div class="row">
							<div class="col-12">
								<div class="input-group-meta mb-30">
									<label>Email</label>
									<input type="email" placeholder="rshdkabir@gmail.com">
								</div>
							</div>
							<div class="col-12">
								<div class="input-group-meta mb-25">
									<label>Password</label>
									<input type="password" placeholder="Enter Password" class="pass_log_id">
									<span class="placeholder_icon"><span class="passVicon"><img src="{{ URL::asset('images/icon/icon_67.svg') }}" alt=""></span></span>
								</div>
							</div>
							<div class="col-12">
								<div class="agreement-checkbox d-flex justify-content-between align-items-center">
									<div>
										<input type="checkbox" id="remember">
										<label for="remember">Keep me logged in</label>
									</div>
									<a href="#">Forget Password?</a>
								</div> <!-- /.agreement-checkbox -->
							</div>
							<div class="col-12">
								<button class="theme-btn-one w-100 mt-50 mb-50">Login</button>
							</div>
							<div class="col-12">
								<p class="text-center copyright-text">Copyright @2022 vcamp inc.</p>
							</div>
						</div>
					</form>
				</div> <!-- /.form-wrapper -->
			</div> <!-- /.user-data-page -->
			
			


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
		<!-- MixIt Up -->
		<script src="{{ URL::asset('vendor/mixitup-3/mixitup.min.js') }}"></script>
		<!-- validator js -->
    	<script src="{{ URL::asset('vendor/validator.js') }}"></script>

		<!-- Theme js -->
		<script src="{{ URL::asset('js/theme.js') }}"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>