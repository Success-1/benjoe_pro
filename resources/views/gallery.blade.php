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
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p></p>
						<h1>Explore Our Gallery</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- latest news -->
	<div class="latest-news mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="">
							<div class="latest-news-bg news-bg-1"></div>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="">
							<div class="latest-news-bg news-bg-2"></div>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="#">
							<div class="latest-news-bg news-bg-3"></div>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="">
							<div class="latest-news-bg news-bg-4"></div>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="#">
							<div class="latest-news-bg news-bg-5"></div>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="#">
							<div class="latest-news-bg news-bg-6"></div>
						</a>
					</div>
				</div>
				<div class="hero-btns mx-auto">
					<a href="/home#aboutus" class="boxed-btn" id="aboutus">Learn more</a>
					<!-- <a href="contact.html" class="bordered-btn">Contact Us</a> -->
				</div>

			</div>


		</div>
	</div>
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