<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CooffeCon.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<!-- <div class="top-menu"> -->
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center logo-wrap">
						<div id="fh5co-logo"><a href="{{route('homes')}}">CooffeCon<span>.</span></a></div>
					</div>
					<div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
						<a href="{{route('errors')}}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
						

								<a href="{{route('errors')}}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
					</div>
					<div class="col-xs-12 text-center menu-1 menu-wrap">
						<ul>
							<li ><a href="{{route('homes')}}">Home</a></li>
							<li><a href="{{route('shop')}}">Menu</a></li>
							<li class="has-dropdown">
								<a href="{{route('stores')}}">Stores</a>
							</li>
							<!--<li><a href="reservation.html">Reservation</a></li>-->
							<li><a href="{{route('aboutus')}}">About Us</a></li>                        	
							<!--<li><a href="contact.html">Contact</a></li> -->
						</ul>
					</div>

					


				</div>
				
			</div>
		<!-- </div> -->
	</nav>

	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<h1>We're sorry</h1>
							<h2>
                                It's not possible to process your request at this time.</h2>
                                <h2>Try another time... </h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<main role="main">

		<!--Area dinamica-->
		@yield('contenido')
	   
	</main>
	   

	<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h4>CoffeeCon</h4>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Links</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Menu</a></li>
						<li><a href="#">Stores</a></li>
						
					</ul>
				</div>

				<div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Categories</h4>
					<ul class="fh5co-footer-links">
						<li><a href="{{route('errors')}}">Login</a></li>
						<li><a href="{{route('shop')}}">Cart</a></li>
						<li><a href="{{route('stores')}}">Stores</a></li>
						<li><a  href="{{route('errors')}}">Info</a></li>
					</ul>
				</div>

				<div class="col-md-4 col-md-push-1 fh5co-widget">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li> Nuevo Perif. Ote. 555, Ejido San José, <br> Tateposco, 45425 Tonalá, Jal.</li>
						<li><a href="tel://1234567920">3334449129</a></li>
						<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
						<!--<li><a href="http://https://freehtml5.co">freehtml5.co</a></li> -->
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2023 CooffeCon Company. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">Joselyne CA, Angela ME</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="{{route('errors')}}"><i class="icon-twitter2"></i></a></li>
							<li><a href="{{route('errors')}}"><i class="icon-facebook2"></i></a></li>
							<li><a href="{{route('errors')}}"><i class="icon-linkedin2"></i></a></li>
							<li><a href="{{route('errors')}}"><i class="icon-dribbble2"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

