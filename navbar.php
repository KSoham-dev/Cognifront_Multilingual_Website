<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>Cognifront : Fresh &amp; Crispy Products for You</title>

		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

		<!-- fontawsome -->
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

		<!-- bootstrap 5.3 -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	</head>
	<body>
		<section id="navbar">
			<nav class="navbar bg-body-tertiary navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">
						<img src="assets\cognifront-logo-transparent.png" alt="" width="100">
					</a>

					<button class="navbar-toggler hide" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					
					<div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo03">
						<ul class="navbar-nav d-flex list-group-horizontal">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Teaching Tool</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Industrial Solutions</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Internships</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Contact</a>
							</li>
						</ul>
					</div>
					<div class="navbar justify-content-end">
						<ul class="navbar-nav d-flex list-group-horizontal">
							<li class="nav-item divider dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="countryDropName">
									<img src="assets/country-squared/in.svg" height="10" style="margin-right: 10px;"> 
									<span class="country-name">IN</span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" id="countrySel">
								</ul>
							</li>
							
							<li class="nav-item divider dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="langDropName">
									EN
								</a>
								<ul class="dropdown-menu dropdown-menu-end" id="langSel">
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#" class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
									<i class="fa-solid fa-bars"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</section>

		<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">What are you looking for?</h5>
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
				<nav id="menu">
					<ul>
						<li><a href="https://www.cognifront.com">Home</a></li>
						<li><a href="iteachers.php#teachingtools">Teaching Tools</a></li>
						<li><a href="iteachers.php#books">Books</a></li>
						<li><a href="iindustrial.php">Industrial Solutions</a></li>
						<li><a href="istudents.php#internships">Internships</a></li>
						<li><a href="iapply.php">Jobs &amp; Career</a></li>
						<li><a href="https://www.cognifront.com/videos">Video Gallery</a></li>
						<li><a href="https://www.cognifront.com/testimonials">Testimonials</a></li>
						<li><a href="idownload.php">Downloads</a></li>
						<li><a href="apps/iotcloud">IoT Cloud</a></li>
					</ul>
				</nav>

				<section class="get-in-touch">
					<header class="major ">
						<h5 class="offcanvas-title">Get in touch</h5>
					</header>
					<hr>
					<p style="font-size: small;">Got queries, suggestions, compliments? Absolutely feel free to get in touch.</p>
					<ul class="contact">
						<li class="fa-envelope"><a href="mailto:info@cognifront.com"><i class="fa-regular fa-envelope" style="color: #00f088;"></i>  info@cognifront.com</a></li>
						<hr>
						<li class="fa-phone"><a href="tel:+912534057313"><i class="fa-solid fa-phone" style="color: #00f088;"></i>  0253 4057313</a></li>
						<hr>
						<li class="fa-box-open"><a href="isuggest.php"><i class="fa-solid fa-box-open" style="color: #00f088;"></i>  Suggestions Box</a></li>
						<hr>

						<li class="fa-home"><i class="fa-solid fa-location-dot" style="color: #00f088;"></i> #1, Trishala, Ramnagar, Behind Mahalakshmi Mall, Panchawati, Nashik 422003 Maharashtra, Bharat (India)
						<div id="cogmap" style="height:300px;"></div>
						</li>
					</ul>
				</section>

				<footer id="footer">
					<p class="copyright">&copy; 2025 Cognifront. All rights reserved. </p>
				</footer>
			</div>
		</div>
    
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="assets/lang.js"></script>
	<script src="assets/countries.js"></script>
	<script src="assets/country-lang-selector.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>	
		var cogmap = L.map('cogmap').setView([20.014472495510027, 73.79838751876756], 17);
		var marker = L.marker([20.014472495510027, 73.79838751876756]).addTo(cogmap);

		L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
		}).addTo(cogmap);

		var polygon = L.polygon([
		[51.509, -0.08],
		[51.503, -0.06],
		[51.51, -0.047]
		]).addTo(cogmap);

		marker.bindPopup("<b>Hello!</b><br><a href='https://www.cognifront.com/'>Cognifront</a>").openPopup();
    </script>
    </body>
</html>
