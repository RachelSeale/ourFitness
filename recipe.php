<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Recipes - Our Fitness</title>
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
				<p><b>Our Fitness</b> is all about keeping fit and healthy. So this is the place to find great recipes and learn about quality cooking that everyone can try and enjoy. So why not try out our inspirational healthy, fun and colourful dishes from starters to desserts!</p>
				

				<section class="list-of-recipes">

				  	  <!-- Course Start -->
					<div class="recipe">
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
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et arcu sit amet purus tincidunt vehicula a ut nibh. Maecenas vitae hendrerit ipsum</p>
				  		</ul>
				  	</a>
					</div>
				  <!-- Course End -->
				  <!-- Course Start -->
					<div class="recipe"> 
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
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et arcu sit amet purus tincidunt vehicula a ut nibh. Maecenas vitae hendrerit ipsum</p>
				  		</ul>
				  		</a>
					</div>
				  <!-- Course End -->
				  <!-- Course Start -->
					<div class="recipe"> 
						<a href="search.php?course=starters">
						<div class="image-overlay">
							<div class="image">
						    	<img src="images/recipeImages/1.jpg"> 
						 		<div class="name">
						 			<h3>Starters</h3>
						 		</div>
							</div>
						</div>
				  		<ul class="media">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et arcu sit amet purus tincidunt vehicula a ut nibh. Maecenas vitae hendrerit ipsum</p>
				  		</ul>
				  		</a>
					</div>
				  <!-- Course End -->
				  <!-- Course Start -->
					<div class="recipe"> 
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
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et arcu sit amet purus tincidunt vehicula a ut nibh. Maecenas vitae hendrerit ipsum</p>
				  		</ul>
				  		</a>
					</div>
				  <!-- Course End -->
				  <!-- Course Start -->
					<div class="recipe"> 
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
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et arcu sit amet purus tincidunt vehicula a ut nibh. Maecenas vitae hendrerit ipsum</p>
				  		</ul>
				  		</a>
					</div>
				  <!-- Course End -->
				  <!-- Course Start -->
					<div class="recipe">
						<a href="snacks.php">
						<div class="image-overlay">
							<div class="image">
						    	<img src="images/food/ingrediants.png"> 
						 		<div class="name">
						 			<h3>Snacks / Light Bites</h3>
						 		</div>
							</div>
						</div>
				  		<ul class="media">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et arcu sit amet purus tincidunt vehicula a ut nibh. Maecenas vitae hendrerit ipsum</p>
				  		</ul>
				  		</a>
					</div>
				  <!-- Course End -->

			 </section>
		</section>
		<?php include("footer.php"); ?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/nav.js"></script>
	</body>
</html>
