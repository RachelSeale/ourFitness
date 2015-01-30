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
			<img class="logo" src="images/logo2.png">
	  		<h1 class="title"><a href="index.php">Our Fitness </a></h1>
		</header>  
		<section class="site">
			<div class="welcome-info">
				<h2> Looking for local sport activities? Looking to get fit? </h2>
				<p> Use We Our Fitness to search to find local sporting activities and gyms near you. Also while your here search for healthy recipes and share your experices with the hashtag <a href="trends.php"><b>#WeOurFitness</b></a></p>
			</div>
		</section>

		<section class="search-location">
			<div class="content">
				<form class="site" action="map.php" method="GET">
					<h2>Find local sport activities!</h2>
					<input for="form-input" type="text" value="Enter your location here" id="location-input" name="location">
					<button class="searchLocationBtn" type="submit">Find</button><br>
			
					<label for="">2miles
						<input type="radio" name="radius" value="2" checked />
					</label>

					<label for=""> 5miles
						<input type="radio" name="radius" value="5" />
					</label>
				</form>

				<p><b>OR</br></p>

				<button id="location-button" type="button">Find my location</button>
	 		</div>
 		</section>

 		<section class="site">
		 	<div class="sub-content">
		 		<div class="idea1">
		 			<h2>Search</h2>		 				
					<img src="images/search.png"></img>
				</div>
			 	<div class="idea2">
			 		<h2>Find</h2>
					<img src="images/find.png"></img>
		 		</div>
		 		<div class="idea3">
					<h2>Go & Share</h2>
		 			<img src="images/share.png"></img>
	 			</div>
			</div>
		</section>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
		<script src="js/nav.js"></script>
		<script src="js/home.js"></script>
		<script id="mapAddress" type="text/x-handlerbars-template">
			<li>
				<h3>{{name}}</h3>
				<p><img src="{{icon}}" alt="{{types}}"></p>
			</li>
		</script>
	</body>
</html>