<!DOCTYPE html>
<html lang="en">

<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Benjoe</title>
    
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->

    <link rel="shortcut icon" href="{{ asset('images/1-removebg-preview.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- Example: Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>

	<!--PreLoader-->
	<!-- <div class="loader">
		<div class="loader-inner">
			<div class="circle"></div>
		</div>
	</div> -->
	<!--PreLoader Ends-->

	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="/home">
								<!-- <h3 style="color: white;">BENJOE <small style="font-size: 16px;">AGRO</small></h3> -->
								<img src="{{ asset('images/1-removebg-preview.png') }}" alt="" >
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="/home">Home</a>
								</li>
								<li><a href="home#aboutus">About</a></li>
								<li><a href="home#services">Services</a></li>
								<li><a href="/gallery">Gallery</a></li>
								<li><a href="/contact">Contact</a></li>
								<li>
									<div class="header-icons">
										<!-- <a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a> -->
										<!-- <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a> -->
										<a class="mobile-hide" href="/login">Login</a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->

	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle" style="color: #ffff !important;">More Than a Farm, A Future in Every
								Seed</p>
							<h2 style="color: #ffff !important;">Discover the power of modern farming, from agribusiness
								solutions to unforgettable farm tours, we grow with purpose.</h2>
							<div class="hero-btns">
								<a href="/home" class="boxed-btn" id="aboutus">Learn more</a>
								<!-- <a href="contact.html" class="bordered-btn">Contact Us</a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- About us section -->
	<div class="product-section mt-80 mb-80">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="section-title">
					<h3><span class="orange-text">About</span> us</h3>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p> -->
				</div>
			</div>
		</div>
		<div class="abt-section mb-150">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="abt-bg">
							<!-- <a href="https://www.youtube.com/watch?v=DBLlFWYcIGQ"
								class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a> -->
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="abt-text">
							<!-- <p class="top-sub">Since Year 1999</p> -->
							<h2>We are <span class="orange-text">BENJOE Agro</span></h2>
							<p>Benjoe and Sons Agro Farm Ltd is a pioneering, multimillion-naira enterprise transforming Nigeria’s agricultural landscape through mechanized farming, agribusiness, and agritourism. With operations rooted in innovation and sustainability, we manage thousands of hectares of farmland, producing a wide range of food products that serve both local and international markets. </p>
							<p>Our impact goes beyond food, we drive rural development through agricultural training, consultancy, and immersive farm tours that inspire the next generation of agripreneurs.</p>
							<a href="/contact" class="boxed-btn mt-4" id="services">know more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About us section -->

	<!-- product section -->
	<div class="product-section mt-80 mb-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Our</span> Services</h3>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
							beatae optio.</p> -->
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="/home#services"><img src="{{ asset('images/agritech.jpg') }}" alt=""></a>
						</div>
						<h3>Mechanized Farming</h3>
						<!-- <p class="product-price"><span>Per Kg</span> 85$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a> -->
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="/home#services"><img src="{{ asset('images/agribusiness.jpg') }}" alt=""></a>
						</div>
						<h3>Agribusiness</h3>
						<!-- <p class="product-price"><span>Per Kg</span> 70$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a> -->
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="/home#services"><img src="{{ asset('images/agritourism.jpg') }}" alt=""></a>
						</div>
						<h3>Agritourism</h3>
						<!-- <p class="product-price"><span>Per Kg</span> 35$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product section -->

	<!-- cart banner section -->
	<!-- <section class="cart-banner pt-100 pb-100">
		<div class="container">
			<div class="row clearfix">
				< !--Image Column-- >
				<div class="image-column col-lg-6">
					<div class="image">
						<div class="price-box">
							<div class="inner-price">
								<span class="price">
									<strong>30%</strong> <br> off per kg
								</span>
							</div>
						</div>
						<img src="assets/img/a.jpg" alt="">
					</div>
				</div>
				<! --Content Column-- >
				<div class="content-column col-lg-6">
					<h3><span class="orange-text">Deal</span> of the month</h3>
					<h4>Hikan Strwaberry</h4>
					<div class="text">Quisquam minus maiores repudiandae nobis, minima saepe id, fugit ullam similique!
						Beatae, minima quisquam molestias facere ea. Perspiciatis unde omnis iste natus error sit
						voluptatem accusant</div>
					<! --Countdown Timer-- >
					<div class="time-counter">
						<div class="time-countdown clearfix" data-countdown="2020/2/01">
							<div class="counter-column">
								<div class="inner"><span class="count">00</span>Days</div>
							</div>
							<div class="counter-column">
								<div class="inner"><span class="count">00</span>Hours</div>
							</div>
							<div class="counter-column">
								<div class="inner"><span class="count">00</span>Mins</div>
							</div>
							<div class="counter-column">
								<div class="inner"><span class="count">00</span>Secs</div>
							</div>
						</div>
					</div>
					<a href="cart.html" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
				</div>
			</div>
		</div>
	</section> -->
	<!-- end cart banner section -->

	<!-- testimonail-section -->
	<div class="testimonia-section mt-100 mb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">What </span>Drives Us</h3>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
							beatae optio.</p> -->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="testimonia d-flex">
					<div class="client-meta col-lg-6 col-md-12 col-sm-12">
						<div class="client-avater">
							<!-- <img src="assets/img/avaters/avatar1.png" alt=""> -->
						</div>
						<h3 class="text-center">Mission</h3>
						<p class="testimonial-body">
							To drive national food security and rural transformation through sustainable mechanized farming, innovative agribusiness solutions, and inclusive agritourism, delivering high-quality agricultural products while empowering communities and future agripreneurs.
						</p>
					</div>
					<div class="client-meta col-lg-6 col-md-12 col-sm-12">
						<div class="client-avater">
							<!-- <img src="assets/img/avaters/avatar1.png" alt=""> -->
						</div>
						<h3 class="text-center">Vission</h3>
						<p class="testimonial-body">
							To become Africa's leading agro-enterprise, recognized for revolutionizing agriculture, advancing rural development, and inspiring global excellence in food production and agritourism.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- end testimonail-section -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Reliable Delivery</h3>
							<p>Timely and safe delivery guaranteed</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Quality Assurance</h3>
							<p>Top-tier products, tested and trusted</p>
							
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>Get support all day</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p >Benjoe and Sons Agro Farm Ltd is a leading Nigerian agribusiness driving food production, training, and rural development through mechanized farming and agritourism.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>Plot 12B Umueze Ibeme, Isiala Mbano imo state.</li>
							<li>plot 102B Egbu, Owerri,Imo state.</li>
							<li>benjoeagrofarmcompany@gmail.com</li>
							<li>+2347051219719</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Links</h2>
						<ul>
							<li><a href="/home">Home</a></li>
							<li><a href="#aboutus">About</a></li>
							<li><a href="/home#services">Services</a></li>
							<!-- <li><a href="news.html">News</a></li> -->
							<li><a href="/contact">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<!-- <p>Subscribe to our mailing list to get the latest updates.</p>-->
						<form action="/home">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->

	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2025 - <a href="/home">Benjoe agro</a>, All Rights
						Reserved.<br>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target=""><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target=""><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target=""><i class="fab fa-linkedin"></i></a></li>
							<!-- <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->

	<!-- jquery -->
	<script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
	<!-- bootstrap -->
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- count down -->
	<script src="{{ asset('js/jquery.countdown.js') }}"></script>
	<!-- isotope -->
	<script src="{{ asset('js/jquery.isotope-3.0.6.min.js') }}"></script>
	<!-- waypoints -->
	<script src="{{ asset('js/waypoints.js') }}"></script>
	<!-- owl carousel -->
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<!-- magnific popup -->
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<!-- mean menu -->
	<script src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
	<!-- sticker js -->
	<script src="{{ asset('js/sticker.js') }}"></script>
	<!-- main js -->
	<!-- <script src="{{ asset('build/assets/app.js') }}"></script> -->

</body>
</html>