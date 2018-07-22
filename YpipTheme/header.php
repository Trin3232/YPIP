<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="msapplication-TileColor" content="#00aba9">
	<meta name="msapplication-TileImage" content="../Images/Favicons/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta charset="utf-8">
	<meta name="description" content="property investor, networker, serviced accommodation">
	<meta name="keywords" content="property investor, networker, serviced accommodation">
	<meta name="robots" content="index,follow,noarchive">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

	<title>Your Partner In Property</title>
	<link rel="apple-touch-icon" sizes="57x57" href="../Images/Favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../Images/Favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../Images/Favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../Images/Favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../Images/Favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../Images/Favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../Images/Favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../Images/Favicons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../Images/Favicons/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../Images/Favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="192x192" href="../Images/Favicons/android-chrome-192x192.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../Images/Favicons/favicon-16x16.png">
	<link rel="manifest" href="../Images/Favicons/site.webmanifest">
	<link rel="mask-icon" href="../Images/Favicons/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma%7COpen+Sans%7CRoboto">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" integrity="sha384-2sS93OlLH4Rwt29UYd8nAkSYNrfCq3ll6oiJUuswWIHr0Pp9O6JfxtS/HWpC31kt" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
	<?php wp_head();?>
</head>

<body>
	<header>
		<div class="container">
			<!--Company Logo Jpeg -->
			<a href="index.html">
				<img id="ypip-logo-img" src="../Images/Logos Stock/ypip-logo-2.jpg" alt="ypip company logo" title="Your Partner In Property">
			</a>
			<nav class="navbar">
				<a href="contact.html" id="contact-tab">Contact Us</a>
				<div class="dropdown">
					<button class="dropbtn" id="services-tab" onclick="gotoservices()">Services</button>
					<div class="dropdown-content">
						<a href="networking.html" class="e-grey">Freebies</a>
						<a href="networking.html" class="l-b-pink">Networking</a>
					</div>
				</div>
				<div class="dropdown">
					<button class="dropbtn" id="accomod-tab" onclick="gotoaccommad()">Accommodation</button>
					<div class="dropdown-content">
						<a href="leigh-buzz.html" class="l-b-pink">Leighton Buzzard</a>
						<a href="glasgow.html" class="g-orange">Glasgow</a>
						<a href="edinburgh.html" class="e-grey">Edinburgh</a>
					</div>
				</div>
				<a href="about.html" id="about-tab">About</a>
				<a href="index.html" class="current" id="home-tab">Home</a>
			</nav>
		</header>
