<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Recipes - Our Fitness</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Health and fitness website, where you can search for delicous healthy recipes from starters to desserts">
	<meta name="keywords" content="Health, healthy, fitness, recipes, fit, gyms, sport, food">
	<meta name="author" content="Our Fitness">
	<!-- Custom CSS -->
    <link rel="stylesheet" href="css/index.css">
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

		<section class="site search-recipe-page">
				<form class="search-recipes form-wrapper" action='./search.php' method='get'>
					<input type='text' name='search' size='50' placeholder="Search recipes"/>
					<input type='submit' value='Search'/>
					<div class="recipeCheckboxes">
						<input id="quick" type='checkbox' name='quick' /><label for="quick">Quick and Easy</label>
						<input id="vegetarian" type='checkbox' name='vegetarian' /><label for="vegetarian">Vegetarian</label>
					</div>
				</form>
				<p><b class="website-name">Our Fitness</b> is all about keeping fit and healthy. This is the place to find great recipes and learn about quality cooking that everyone can try and enjoy. From starters through to desseets, why not try our range of healthy, fun and colourful dishes</p>
				

				<section class="list-of-recipes">

				  	  <!-- Course Start -->
					<div class="recipe courses">
						<a href="search.php?course=drinks">
						<div class="image-overlay">
							<div class="image">
						    	<img src="images/recipeImages/23.jpg"> 
						 		<div class="name">
						 			<h3>Drinks</h3>
						 		</div>
							</div>
						</div>
				  		<ul class="media">
							<p>Whether you&#8217;re looking for your first drink of the day, or a healthy evening tipple. You&#8217;ll no doubt find what you are looking for in our wide range of recipes. </p>
				  		</ul>
				  	</a>
					</div>
				  <!-- Course End -->
				  <!-- Course Start -->
					<div class="recipe courses"> 
						<a href="search.php?course=breakfast">
						<div class="image-overlay">
							<div class="image">
						    	<img src="images/recipeImages/7.jpg"> 
						 		<div class="name">
						 			<h3>Breakfast</h3>
						 		</div>
							</div>
						</div>
				  		<ul class="media">
							<p>Breakfast is the most important meal of the day. Why not make it unforgettable, by trying our range of healthy and tasty recipes.</p>
				  		</ul>
				  		</a>
					</div>
				  <!-- Course End -->
				  <!-- Course Start -->
					<div class="recipe courses"> 
						<a href="search.php?course=starters">
						<div class="image-overlay">
							<div class="image">
						    	<img src="images/recipeImages/2.jpg"> 
						 		<div class="name">
						 			<h3>Starters</h3>
						 		</div>
							</div>
						</div>
				  		<ul class="media">
							<p>Want memorable and simple recipes? Begin your evening meals with a selection of our favourite Starters which are sure to wow at any occasion. </p>
				  		</ul>
				  		</a>
					</div>
				  <!-- Course End -->
				  <!-- Course Start -->
					<div class="recipe courses"> 
						<a href="search.php?course=mains">
						<div class="image-overlay">
							<div class="image">
						    	<img src="images/recipeImages/13.jpg"> 
						 		<div class="name">
						 			<h3>Mains</h3>
					 			</div>
							</div>
						</div>
				  		<ul class="media">
							<p>Want super healthy, easy to make meals that also taste amazing? Look no further; we have a range of show stopping recipes that tick all the right boxes. </p>
				  		</ul>
				  		</a>
					</div>
				  <!-- Course End -->
				  <!-- Course Start -->
					<div class="recipe courses"> 
						<a href="search.php?course=desserts">
						<div class="image-overlay">
							<div class="image">
						    	<img src="images/recipeImages/16.jpg"> 
							 		<div class="name">
							 			<h3>Desserts</h3>
							 		</div>
							</div>
						</div>
				  		<ul class="media">
							<p>Always resisting desserts for fear it&#8217;s unhealthy? Never feel guilty again with our selection of healthy dessert recipes.</p>
				  		</ul>
				  		</a>
					</div>
				  <!-- Course End -->
				  <!-- Course Start -->
					<div class="recipe courses">
						<a href="search.php?course=snacks">
						<div class="image-overlay">
							<div class="image">
						    	<img src="images/recipeImages/32.jpg"> 
						 		<div class="name">
						 			<h3>Snacks / Light Bites</h3>
						 		</div>
							</div>
						</div>
				  		<ul class="media">
							<p>Find yourself snacking between meals? Click here to find alternative snack ideas that are nutritious, healthy, and will tide you over till your next meal. </p>
				  		</ul>
				  		</a>
					</div>
				  <!-- Course End -->

			 </section>
		</section>
		<?php include("footer.php"); ?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/nav.js"></script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-48209576-2', 'auto');
		  ga('send', 'pageview');

		</script>
	</body>
</html>
