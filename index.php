<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
		<title>Our Fitness - Health and Fitness Tips</title>
		<!-- Custom CSS -->
        <link rel="stylesheet" href="css/index.css">
        <meta name="viewport" content="width=device-width">
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
				<form class="searchLocationForm" action="map.php" method="GET">
					<h2>Find local sport activities!</h2>
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
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mollis viverra leo, ut laoreet felis viverra eget. Etiam quis sem eget metus mattis convallis. Mauris pulvinar augue ex, nec auctor ante auctor at. In sit amet tellus a nisi venenatis semper. Praesent sit amet sollicitudin lorem. Nulla aliquet, felis vitae mollis auctor, lorem eros tempus massa, vel placerat justo metus sit amet magna.</p>
				</div>
			 	<div class="idea2">
			 		<h2>Find</h2>
					<img src="images/icons/map.png"></img>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mollis viverra leo, ut laoreet felis viverra eget. Etiam quis sem eget metus mattis convallis. Mauris pulvinar augue ex, nec auctor ante auctor at. In sit amet tellus a nisi venenatis semper. Praesent sit amet sollicitudin lorem. Nulla aliquet, felis vitae mollis auctor, lorem eros tempus massa, vel placerat justo metus sit amet magna.</p>
		 		</div>
		 		<div class="idea3">
					<h2>Go & Share</h2>
		 			<img src="images/icons/share.png"></img>
		 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mollis viverra leo, ut laoreet felis viverra eget. Etiam quis sem eget metus mattis convallis. Mauris pulvinar augue ex, nec auctor ante auctor at. In sit amet tellus a nisi venenatis semper. Praesent sit amet sollicitudin lorem. Nulla aliquet, felis vitae mollis auctor, lorem eros tempus massa, vel placerat justo metus sit amet magna.</p>
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