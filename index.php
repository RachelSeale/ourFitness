<!DOCTYPE html>
<html>
<head>
		<title>Our Fitness</title>
		<!-- Custom CSS -->
        <link rel="stylesheet" href="css/index.css">
</head>
	<body>

		<?php include("header.php"); ?>


		<button id="location-button" type="button">Find my location</button>

		<form id="location-form">
			<label for="form-input">Enter your lcoation here</label>
			<input type="text" id="location-input" name="location" />
			<button type="submit">Go</button>
		</form>
 
 		<div id="map-canvas" style="width: 100%; height: 400px"></div>


		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
		<script src="js/location.js"></script>
		<script src="js/nav.js"></script>
		<script src="js/color.js"></script>
		
	</body>
</html>