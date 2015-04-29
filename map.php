<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
		<title>Find local activities - Our Fitness</title>
		<!-- Custom CSS -->
        <link rel="stylesheet" href="css/index.css">
</head>
	<body>
		<?php include("header.php"); ?>
		<header class="header">
			<img class="logo" src="images/logo2.png">
	  		<h1 class="title"><a href="index.php">Our Fitness </a></h1>
		</header> 
		<div class="welcome-info">
			<h2> Looking for local sport activities? Looking to get fit? </h2> 	
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse odio ligula, fermentum id sem a, bibendum pharetra risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sed velit nec mi rhoncus gravida. Sed scelerisque sagittis ex id efficitur.</p>
		</div>
		<section class="site">
			<div>
				<form class="searchLocationForm" id="location-form">
					<input for="form-input" type="text" placeholder="Enter your location here" id="location-input" name="location" />

					<button class="searchLocationBtn" type="submit">Go</button>
					<p>OR</p>
					<button class="locationBtn" id="location-button" type="button">Find my location</button>
					<label for="">2miles
						<input type="radio" name="radius" value="2" checked />
					</label>

					<label for=""> 5miles
						<input type="radio" name="radius" value="5" />
					</label>
				</form>
			</div>
			<div class="resultsMapSection">
				<div id="map-canvas" style="width: 100%; height: 300px"></div>
			</div>

			<div class="resultAddressSection">
				<ol id="resultsAddressList">

	 			</ol>
			</div>

 		</section>
 		<?php include("footer.php"); ?>
 		<script id="mapAddress" type="text/x-handlerbars-template">
 			<!-- pulling these parameters and displaying them from google maps -->
			<li>
				<h3>{{name}}</h3>
				<p><img src="{{icon}}" alt="{{types}}"></p><br>
				<p>{{formatted_address}}</p><br>
				<div class="telphoneNo"><b>Tel:</b>{{formatted_phone_number}}</div><br>
				<p><a href="{{website}}">{{name}} Website</a></p>

			</li>
		</script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
		<script src="js/location.js"></script>
		<script src="js/nav.js"></script>
		<script src="js/handlebars.js"></script>
	</body>
</html>