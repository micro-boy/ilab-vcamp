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
				CheckOut Page
			============================================== 
			-->
			<div class="checkout-section pt-250 pb-100 lg-pt-150 sm-pb-50">
				<div class="container">
					<div class="checkout-toggle-area mb-80 md-mb-60">
						<p>Already have an account? <button class="d-inline-block" data-bs-toggle="collapse" data-bs-target="#login-form">Click here to login.</button></p>
						<form action="#" id="login-form" class="collapse">
							<p>Please enter your details below.</p>
							<div class="row">
								<div class="col-md-6"><input type="text" placeholder="User name or email"></div>
								<div class="col-md-6"><input type="password" placeholder="Password"></div>
							</div>
							
							<button class="theme-btn-one">Login</button>
							<a href="#" class="lost-passw">Lost your Password?</a>
						</form>
						<p>Have a promo code? <button class="d-inline-block" data-bs-toggle="collapse" data-bs-target="#promo-code">Click to enter your code.</button></p>
						<form action="#" id="promo-code" class="collapse">
							<p>Please enter your promo code below.</p>
							<input type="text" placeholder="Coupon code">
							<button class="theme-btn-one">Apply coupon</button>
						</form>
					</div> <!-- /.checkout-toggle-area -->
					<form action="#" class="checkout-form">
						<div class="row">
							<div class="col-xl-6 col-lg-7">
								<h2 class="main-title">Billign Details</h2>
								<div class="user-profile-data">
									<div class="row">
										<div class="col-lg-6"><input type="text" placeholder="First Name*" class="single-input-wrapper"></div>
										<div class="col-lg-6"><input type="text" placeholder="Last Name*" class="single-input-wrapper"></div>
										<div class="col-12"><input type="text" placeholder="Company Name*" class="single-input-wrapper"></div>
										<div class="col-12">
											<select class="theme-select-menu">
												<option value="">Country*</option>
												<option value="AF">Afghanistan</option>
											    <option value="AX">&Aring;land Islands</option>
											    <option value="AL">Albania</option>
											    <option value="DZ">Algeria</option>
											    <option value="AS">American Samoa</option>
											    <option value="AD">Andorra</option>
											    <option value="AO">Angola</option>
											    <option value="AI">Anguilla</option>
											    <option value="AQ">Antarctica</option>
											    <option value="AG">Antigua and Barbuda</option>
											    <option value="AR">Argentina</option>
											    <option value="AM">Armenia</option>
											    <option value="AW">Aruba</option>
											    <option value="AU">Australia</option>
											    <option value="AT">Austria</option>
											    <option value="AZ">Azerbaijan</option>
											    <option value="BS">Bahamas</option>
											    <option value="BH">Bahrain</option>
											    <option value="BD">Bangladesh</option>
											    <option value="BB">Barbados</option>
											    <option value="BY">Belarus</option>
											    <option value="BE">Belgium</option>
											    <option value="BZ">Belize</option>
											    <option value="BJ">Benin</option>
											    <option value="BM">Bermuda</option>
											    <option value="BT">Bhutan</option>
											    <option value="BO">Bolivia, Plurinational State of</option>
											    <option value="BA">Bosnia and Herzegovina</option>
											    <option value="BW">Botswana</option>
											    <option value="BV">Bouvet Island</option>
											    <option value="BR">Brazil</option>
											    <option value="IO">British Indian Ocean Territory</option>
											    <option value="BN">Brunei Darussalam</option>
											    <option value="BG">Bulgaria</option>
											    <option value="BF">Burkina Faso</option>
											    <option value="BI">Burundi</option>
											    <option value="KH">Cambodia</option>
											    <option value="CM">Cameroon</option>
											    <option value="CA">Canada</option>
											    <option value="CV">Cape Verde</option>
											    <option value="KY">Cayman Islands</option>
											    <option value="CF">Central African Republic</option>
											    <option value="TD">Chad</option>
											    <option value="CL">Chile</option>
											    <option value="CN">China</option>
											    <option value="CX">Christmas Island</option>
											    <option value="CC">Cocos (Keeling) Islands</option>
											    <option value="CO">Colombia</option>
											    <option value="KM">Comoros</option>
											    <option value="CG">Congo</option>
											    <option value="CD">Congo, the Democratic Republic of the</option>
											    <option value="CK">Cook Islands</option>
											    <option value="CR">Costa Rica</option>
											    <option value="CI">C&ocirc;te d'Ivoire</option>
											    <option value="HR">Croatia</option>
											    <option value="CU">Cuba</option>
											    <option value="CY">Cyprus</option>
											    <option value="CZ">Czech Republic</option>
											    <option value="DK">Denmark</option>
											    <option value="DJ">Djibouti</option>
											    <option value="DM">Dominica</option>
											    <option value="DO">Dominican Republic</option>
											    <option value="EC">Ecuador</option>
											    <option value="EG">Egypt</option>
											    <option value="SV">El Salvador</option>
											    <option value="GQ">Equatorial Guinea</option>
											    <option value="ER">Eritrea</option>
											    <option value="EE">Estonia</option>
											    <option value="ET">Ethiopia</option>
											    <option value="FK">Falkland Islands (Malvinas)</option>
											    <option value="FO">Faroe Islands</option>
											    <option value="FJ">Fiji</option>
											    <option value="FI">Finland</option>
											    <option value="FR">France</option>
											    <option value="GF">French Guiana</option>
											    <option value="PF">French Polynesia</option>
											    <option value="TF">French Southern Territories</option>
											    <option value="GA">Gabon</option>
											    <option value="GM">Gambia</option>
											    <option value="GE">Georgia</option>
											    <option value="DE">Germany</option>
											    <option value="GH">Ghana</option>
											    <option value="GI">Gibraltar</option>
											    <option value="GR">Greece</option>
											    <option value="GL">Greenland</option>
											    <option value="GD">Grenada</option>
											    <option value="GP">Guadeloupe</option>
											    <option value="GU">Guam</option>
											    <option value="GT">Guatemala</option>
											    <option value="GG">Guernsey</option>
											    <option value="GN">Guinea</option>
											    <option value="GW">Guinea-Bissau</option>
											    <option value="GY">Guyana</option>
											    <option value="HT">Haiti</option>
											    <option value="HM">Heard Island and McDonald Islands</option>
											    <option value="VA">Holy See (Vatican City State)</option>
											    <option value="HN">Honduras</option>
											    <option value="HK">Hong Kong</option>
											    <option value="HU">Hungary</option>
											    <option value="IS">Iceland</option>
											    <option value="IN">India</option>
											    <option value="ID">Indonesia</option>
											    <option value="IR">Iran, Islamic Republic of</option>
											    <option value="IQ">Iraq</option>
											    <option value="IE">Ireland</option>
											    <option value="IM">Isle of Man</option>
											    <option value="IL">Israel</option>
											    <option value="IT">Italy</option>
											    <option value="JM">Jamaica</option>
											    <option value="JP">Japan</option>
											    <option value="JE">Jersey</option>
											    <option value="JO">Jordan</option>
											    <option value="KZ">Kazakhstan</option>
											    <option value="KE">Kenya</option>
											    <option value="KI">Kiribati</option>
											    <option value="KP">Korea, Democratic People's Republic of</option>
											    <option value="KR">Korea, Republic of</option>
											    <option value="KW">Kuwait</option>
											    <option value="KG">Kyrgyzstan</option>
											    <option value="LA">Lao People's Democratic Republic</option>
											    <option value="LV">Latvia</option>
											    <option value="LB">Lebanon</option>
											    <option value="LS">Lesotho</option>
											    <option value="LR">Liberia</option>
											    <option value="LY">Libyan Arab Jamahiriya</option>
											    <option value="LI">Liechtenstein</option>
											    <option value="LT">Lithuania</option>
											    <option value="LU">Luxembourg</option>
											    <option value="MO">Macao</option>
											    <option value="MK">Macedonia, the former Yugoslav Republic of</option>
											    <option value="MG">Madagascar</option>
											    <option value="MW">Malawi</option>
											    <option value="MY">Malaysia</option>
											    <option value="MV">Maldives</option>
											    <option value="ML">Mali</option>
											    <option value="MT">Malta</option>
											    <option value="MH">Marshall Islands</option>
											    <option value="MQ">Martinique</option>
											    <option value="MR">Mauritania</option>
											    <option value="MU">Mauritius</option>
											    <option value="YT">Mayotte</option>
											    <option value="MX">Mexico</option>
											    <option value="FM">Micronesia, Federated States of</option>
											    <option value="MD">Moldova, Republic of</option>
											    <option value="MC">Monaco</option>
											    <option value="MN">Mongolia</option>
											    <option value="ME">Montenegro</option>
											    <option value="MS">Montserrat</option>
											    <option value="MA">Morocco</option>
											    <option value="MZ">Mozambique</option>
											    <option value="MM">Myanmar</option>
											    <option value="NA">Namibia</option>
											    <option value="NR">Nauru</option>
											    <option value="NP">Nepal</option>
											    <option value="NL">Netherlands</option>
											    <option value="AN">Netherlands Antilles</option>
											    <option value="NC">New Caledonia</option>
											    <option value="NZ">New Zealand</option>
											    <option value="NI">Nicaragua</option>
											    <option value="NE">Niger</option>
											    <option value="NG">Nigeria</option>
											    <option value="NU">Niue</option>
											    <option value="NF">Norfolk Island</option>
											    <option value="MP">Northern Mariana Islands</option>
											    <option value="NO">Norway</option>
											    <option value="OM">Oman</option>
											    <option value="PK">Pakistan</option>
											    <option value="PW">Palau</option>
											    <option value="PS">Palestinian Territory, Occupied</option>
											    <option value="PA">Panama</option>
											    <option value="PG">Papua New Guinea</option>
											    <option value="PY">Paraguay</option>
											    <option value="PE">Peru</option>
											    <option value="PH">Philippines</option>
											    <option value="PN">Pitcairn</option>
											    <option value="PL">Poland</option>
											    <option value="PT">Portugal</option>
											    <option value="PR">Puerto Rico</option>
											    <option value="QA">Qatar</option>
											    <option value="RE">R&eacute;union</option>
											    <option value="RO">Romania</option>
											    <option value="RU">Russian Federation</option>
											    <option value="RW">Rwanda</option>
											    <option value="BL">Saint Barth&eacute;lemy</option>
											    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
											    <option value="KN">Saint Kitts and Nevis</option>
											    <option value="LC">Saint Lucia</option>
											    <option value="MF">Saint Martin (French part)</option>
											    <option value="PM">Saint Pierre and Miquelon</option>
											    <option value="VC">Saint Vincent and the Grenadines</option>
											    <option value="WS">Samoa</option>
											    <option value="SM">San Marino</option>
											    <option value="ST">Sao Tome and Principe</option>
											    <option value="SA">Saudi Arabia</option>
											    <option value="SN">Senegal</option>
											    <option value="RS">Serbia</option>
											    <option value="SC">Seychelles</option>
											    <option value="SL">Sierra Leone</option>
											    <option value="SG">Singapore</option>
											    <option value="SK">Slovakia</option>
											    <option value="SI">Slovenia</option>
											    <option value="SB">Solomon Islands</option>
											    <option value="SO">Somalia</option>
											    <option value="ZA">South Africa</option>
											    <option value="GS">South Georgia and the South Sandwich Islands</option>
											    <option value="ES">Spain</option>
											    <option value="LK">Sri Lanka</option>
											    <option value="SD">Sudan</option>
											    <option value="SR">Suriname</option>
											    <option value="SJ">Svalbard and Jan Mayen</option>
											    <option value="SZ">Swaziland</option>
											    <option value="SE">Sweden</option>
											    <option value="CH">Switzerland</option>
											    <option value="SY">Syrian Arab Republic</option>
											    <option value="TW">Taiwan, Province of China</option>
											    <option value="TJ">Tajikistan</option>
											    <option value="TZ">Tanzania, United Republic of</option>
											    <option value="TH">Thailand</option>
											    <option value="TL">Timor-Leste</option>
											    <option value="TG">Togo</option>
											    <option value="TK">Tokelau</option>
											    <option value="TO">Tonga</option>
											    <option value="TT">Trinidad and Tobago</option>
											    <option value="TN">Tunisia</option>
											    <option value="TR">Turkey</option>
											    <option value="TM">Turkmenistan</option>
											    <option value="TC">Turks and Caicos Islands</option>
											    <option value="TV">Tuvalu</option>
											    <option value="UG">Uganda</option>
											    <option value="UA">Ukraine</option>
											    <option value="AE">United Arab Emirates</option>
											    <option value="GB">United Kingdom</option>
											    <option value="US">United States</option>
											    <option value="UM">United States Minor Outlying Islands</option>
											    <option value="UY">Uruguay</option>
											    <option value="UZ">Uzbekistan</option>
											    <option value="VU">Vanuatu</option>
											    <option value="VE">Venezuela, Bolivarian Republic of</option>
											    <option value="VN">Viet Nam</option>
											    <option value="VG">Virgin Islands, British</option>
											    <option value="VI">Virgin Islands, U.S.</option>
											    <option value="WF">Wallis and Futuna</option>
											    <option value="EH">Western Sahara</option>
											    <option value="YE">Yemen</option>
											    <option value="ZM">Zambia</option>
											    <option value="ZW">Zimbabwe</option>
											</select>
										</div>
										<div class="col-12"><input type="text" placeholder="Street Address*" class="single-input-wrapper"></div>
										<div class="col-lg-4"><input type="text" placeholder="Town/City*" class="single-input-wrapper"></div>
										<div class="col-lg-4"><input type="text" placeholder="State*" class="single-input-wrapper"></div>
										<div class="col-lg-4"><input type="text" placeholder="Zip Code*" class="single-input-wrapper"></div>
										<div class="col-lg-6"><input type="email" placeholder="Email Address*" class="single-input-wrapper"></div>
										<div class="col-lg-6"><input type="text" placeholder="Phone Number*" class="single-input-wrapper"></div>
										<div class="col-12">
											<ul class="checkbox-list style-none">
												<li>
													<input type="checkbox" id="new-account">
													<label for="new-account">Create Account?</label>
												</li>
												<li>
													<input type="checkbox" id="shipping">
													<label for="shipping">Ship to Different Address?</label>
												</li>
											</ul>
										</div>
										<div class="col-12">
											<div class="other-note-area">
												<p>Order Note (Optional)</p>
												<textarea></textarea>
											</div> <!-- /.other-note-area -->
										</div>
									</div> <!-- /.row -->
								</div> <!-- /.user-profile-data -->
							</div> <!-- /.col- -->

							<div class="col-xxl-4 col-lg-5 ms-auto">
								<div class="order-confirm-sheet md-mt-60">
									<h2 class="main-title">Order Details</h2>
									<div class="order-review">
										<table class="product-review">
											<tbody>
												<tr>
													<th>
														<span>Bluthooth Speaker</span>
													</th>
													<td><span>$123.78</span></td>
												</tr>
												<tr>
													<th>
														<span>Subtotal</span>
													</th>
													<td><span>$123.78</span></td>
												</tr>
												<tr>
													<th>
														<span>Shipping</span>
													</th>
													<td><span>$5.00</span></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<th><span>Total</span></th>
													<td><span>$128.00</span></td>
												</tr>
											</tfoot>
										</table> <!-- /.product-review -->
										<div class="payment-option">
											<ul class="payment-list style-none">
												<li>
													<input type="radio" name="paymenttype" value="directbank" checked="checked" class="payment-radio-button">
													<label>Direct Bank Transfer</label>
													<p>Make your payment directly into our account. Plase use your Order ID as payment reference.</p>
												</li>
												<li>
													<input type="radio" name="paymenttype" value="paypal" class="payment-radio-button">
													<label>PayPal</label>
												</li>
												<li>
													<input type="radio" name="paymenttype" value="creditCard" id="credit-card" class="payment-radio-button">
													<label>Credit Card</label>
												</li>
												<li class="credit-card-form">
													<div class="row">
														<div class="col-12">
															<h6>Card number</h6>
															<input type="text">
														</div>
														<div class="col-8">
															<h6>Expiry date</h6>
															<div class="d-flex align-items-center">
																<input type="tel" placeholder="MM">
																<span>/</span>
																<input type="tel" placeholder="YY">
															</div>
														</div>
														<div class="col-4 ml-auto">
															<h6>CVV</h6>
															<input type="text">
														</div>
													</div>
												</li>
											</ul> <!-- /.payment-list -->
										</div> <!-- /.payment-option -->
										<p class="policy-text">Your personal data will be use for your order, support your experience through this website & for other purpose described in our privacy policy</p>
										<div class="agreement-checkbox">
											<input type="checkbox" id="agreement">
											<label for="agreement">I have read and agree to the website terms and conditions*</label>
										</div> <!-- /.agreement-checkbox -->

										<button class="theme-btn-seven w-100">Place Order</button>
									</div> <!-- /.order-review -->
								</div> <!-- /.order-confirm-sheet -->
							</div>
						</div> <!-- /.row -->
					</form> <!-- /.checkout-form -->
				</div> <!-- /.container -->
			</div> <!-- /.checkout-section -->
			
			


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