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
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg login-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<!-- <p>Get 24/7 Support</p> -->
						<h1>Join us</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			{{-- Success message --}}
@if(session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif

{{-- Display validation errors --}}
@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
			<div class="row">
				<div class="col-lg-6 mb-5 mb-lg-0 col-md-12">
					<div class="form-title text-center">
						<h2>Sign up</h2>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form method="POST" action="{{ route('signup.store') }}" id="benjoe-contact">
							@csrf
							<p>
                                <label for="name">Name</label><br>
								<input type="text" placeholder="name" name="name" id="name">
							</p>
							<p>
                                <label for="name">Email</label><br>
								<input type="email" placeholder="Email" name="email" id="email">
							</p> 
							<p>
                                <label for="name">Phone</label><br>
								<input type="tel" placeholder="Phone" name="phone" id="phone">
							</p>
							<p>
                                <label for="name">Password</label><br>
								<input type="password" placeholder="Password" name="password" id="password">
							</p>
							<p>Already have an account? <a href="/login">Login</a> </p>
							<input type="hidden" name="token" value="FsWga4&@f6aw" />
							<p><input type="submit" value="Submit"></p>
						</form>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="contact-form-wrap">
						<img src="{{ asset('images/butterflies.jpg') }}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->

	

	<!-- google map section -->
	<!-- <div class="embed-responsive embed-responsive-21by9">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26432.42324808999!2d-118.34398767954286!3d34.09378509738966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf07045279bf%3A0xf67a9a6797bdfae4!2sHollywood%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1576846473265!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
	</div> -->
	<!-- end google map section -->


	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Benjoe and Sons Agro Farm Ltd is a leading Nigerian agribusiness driving food
							production, training, and rural development through mechanized farming and
							agritourism.</p>
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
							<li><a href="/home#aboutus">About</a></li>
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