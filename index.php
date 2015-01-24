<!DOCTYPE html>
<html>
<head>
		<title>Our Fitness</title>
		<!-- Custom CSS -->
        <link rel="stylesheet" href="css/index.css">
</head>
	<body>
		<?php include("header.php"); ?>
		<header class="header">
	  		<h1 class="title"><a href="/">Our Fitness Network</a></h1>
		</header>  
		<section class="site">
			<div class="content">
				<button id="location-button" type="button">Find my location</button>

				<form id="location-form">
					<label for="form-input">Enter your lcoation here</label>
					<input type="text" id="location-input" name="location" />
					<button type="submit">Go</button>
			
					<label for="">2miles
						<input type="radio" name="radius" value="2" checked />
					</label>

					<label for=""> 5miles
						<input type="radio" name="radius" value="5" />
					</label>
				</form>
	 			<div id="map-canvas" style="width: 100%; height: 400px"></div>
	 		</div>
 		</section>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
		<script src="js/location.js"></script>
		<script src="js/nav.js"></script>
	
	</body>
</html>