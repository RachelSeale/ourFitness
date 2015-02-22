<!DOCTYPE html>
<html>
<head>
		<title>Our Fitness</title>
		<!-- Custom CSS -->
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
	<body>
		<?php include("header.php"); ?>
		<header class="recipe-header">
	  		<h1 class="title">
	  			<img class="logo" src="images/logo2.png">
	  			<a href="index.php">Our Fitness</a>
	  		</h1>
	  		<h2> Looking for healthy recipes? Looking to get fit? </h2>
		</header>
		<section class="site">
		<form class="search-recipes form-wrapper" action='./search.php' method='get'>
			<input type='text' name='k' size='50' placeholder="Search recipes"/>
			<input type='submit' value='Search'/>
		</form>

		<section class="list-of-recipes">
	  	  <!-- Recipe Start -->
		<div class="recipe"> 
			<div class="image">
		    	<img src="images/food/starters/prawnScrewer.png"> 
		  		<div class="likes">
		    		<i class="fa fa-heart-o lv" data-test="pulse"></i>
				</div>
		 		<div class="name">
		 			<h3>Spicy Chilli Prawn Skewer</h3>
		 		</div>
			</div>
	  		<ul class="icons">
			    <li><i class="fa fa-clock-o"></i> 30 Minutes</li>
			    <li><i class="fa fa-tachometer"></i> 250 Calories</li>
			    <li><i class="fa fa-cutlery"></i> 4 People</li>
	  		</ul>
		</div>
	  <!-- Recipe End -->
	  	  <!-- Recipe Start -->
		<div class="recipe"> 
			<div class="image">
		    	<img src="images/food/starters/bruschetta.png"> 
		  		<div class="likes">
		    		<i class="fa fa-heart-o lv" data-test="pulse"></i>
				</div>
		 		<div class="name">
		 			<h3>Tomatoe and Basil Bruschetta</h3>
		 		</div>
			</div>
	  		<ul class="icons">
			    <li><i class="fa fa-clock-o"></i> 30 Minutes</li>
			    <li><i class="fa fa-tachometer"></i> 250 Calories</li>
			    <li><i class="fa fa-cutlery"></i> 4 People</li>
	  		</ul>
		</div>
	  <!-- Recipe End -->
	  	  <!-- Recipe Start -->
		<div class="recipe"> 
			<div class="image">
		    	<img src="images/food/starters/sushi.png"> 
		  		<div class="likes">
		    		<i class="fa fa-heart-o lv" data-test="pulse"></i>
				</div>
		 		<div class="name">
		 			<h3>Vegetarian Sushi Rolls</h3>
		 		</div>
			</div>
	  		<ul class="icons">
			    <li><i class="fa fa-clock-o"></i> 30 Minutes</li>
			    <li><i class="fa fa-tachometer"></i> 250 Calories</li>
			    <li><i class="fa fa-cutlery"></i> 4 People</li>
	  		</ul>
		</div>
	  <!-- Recipe End -->
	  	  <!-- Recipe Start -->
		<div class="recipe"> 
			<div class="image">
		    	<img src="images/food/starters/vegSoup.png"> 
		  		<div class="likes">
		    		<i class="fa fa-heart-o lv" data-test="pulse"></i>
				</div>
		 		<div class="name">
		 			<h3>Vegatable Soup</h3>
		 		</div>
			</div>
	  		<ul class="icons">
			    <li><i class="fa fa-clock-o"></i> 30 Minutes</li>
			    <li><i class="fa fa-tachometer"></i> 250 Calories</li>
			    <li><i class="fa fa-cutlery"></i> 4 People</li>
	  		</ul>
		</div>
	  <!-- Recipe End -->
	  <!-- Recipe Start -->
		<div class="recipe"> 
			<div class="image">
		    	<img src="images/food/starters/baconSalad.png"> 
		  		<div class="likes">
		    		<i class="fa fa-heart-o lv" data-test="pulse"></i>
				</div>
		 		<div class="name">
		 			<h3>Pancetta Salad</h3>
		 		</div>
			</div>
	  		<ul class="icons">
			    <li><i class="fa fa-clock-o"></i> 30 Minutes</li>
			    <li><i class="fa fa-tachometer"></i> 250 Calories</li>
			    <li><i class="fa fa-cutlery"></i> 4 People</li>
	  		</ul>
		</div>
	  <!-- Recipe End -->
	  <!-- Recipe Start -->
		<div class="recipe"> 
			<div class="image">
		    	<img src="images/food/starters/scallops.png"> 
		  		<div class="likes">
		    		<i class="fa fa-heart-o lv" data-test="pulse"></i>
				</div>
		 		<div class="name">
		 			<h3>Scallops with lime & coriander</h3>
		 		</div>
			</div>
	  		<ul class="icons">
			    <li><i class="fa fa-clock-o"></i> 30 Minutes</li>
			    <li><i class="fa fa-tachometer"></i> 250 Calories</li>
			    <li><i class="fa fa-cutlery"></i> 4 People</li>
	  		</ul>
		</div>
	  <!-- Recipe End -->
	  	</section>

		</section>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
		<script src="js/nav.js"></script>
		<script src="js/home.js"></script>
		<script src="js/likeFunction.js"></script>
		<script id="mapAddress" type="text/x-handlerbars-template">
			<li>
				<h3>{{name}}</h3>
				<p><img src="{{icon}}" alt="{{types}}"></p>
			</li>
		</script>
	</body>
</html>