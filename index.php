<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
		<title>Our Fitness - Health and Fitness Tips</title>
		<!-- Custom CSS -->
        <link rel="stylesheet" href="css/index.css">
        <meta name="viewport" content="width=device-width">
        <script src="js/modernizr.js"></script>
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
				<p> Use <b class="website-name">Our Fitness</b> to find sporting activities and gyms in your area. Whilst you&#8217;re here, why not search for healthy recipes, try them out and share with your friends on social media using the hashtag <a href="trends.php"><b>#girlsourfitness</b></a></p>
			</div>
		</section>

		<section class="search-location">
			<div class="content">
				<form class="searchLocationForm" action="map.php" method="GET">
					<h2>Find local sporting activities!</h2>
					<input for="form-input" type="text" placeholder="Enter your location here" id="location-input" name="location">
					<button class="searchLocationBtn" type="submit">Find</button>
					<br />
				</form>

				<p><b>OR</br></p>

				<button class="locationBtn" id="location-button" type="button">Find my location</button>
	 		</div>
 		</section>

 		<section class="site">
		 	<div class="sub-content">
		 		<div class="idea1">
		 			<h2>Search</h2>		 				
					<img src="images/icons/search.png"></img>
					<p>Simply find your local gym by typing in your postcode or town. You can also search for healthy recipes to tickle your taste buds, and even save them for the future.</p>
				</div>
			 	<div class="idea2">
			 		<h2>Find</h2>
					<img src="images/icons/map.png"></img>
					<p>Now you've found your local gym, why not find healthy recipes to make after that gym session.</p>
		 		</div>
		 		<div class="idea3">
					<h2>Go & Share</h2>
		 			<img src="images/icons/share.png"></img>
		 			<p>Then why not share your Our Fitness experience with your family and friends. Simply share through our <a href="instagram.com/activegirlsussex/">Instagram</a>, <a href="https://twitter.com/Active_Sussex">Twitter</a> <a href="http://activegirlsussex.tumblr.com/">Tumblr</a> pages</p>
	 			</div>
			</div>
		</section>
		<?php include("footer.php"); ?>
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