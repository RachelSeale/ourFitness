<!DOCTYPE html>
<html>
<head>
	<title>Our Fitness - Recipes!</title>
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

		<section class="site recipe-page">
				<form class="search-recipes form-wrapper" action='./search.php' method='get'>
					<input type='text' name='k' size='50' placeholder="Search recipes"/>
					<input type='submit' value='Search'/>
				</form>
				<p><b>Our Fitness</b> is all about keeping fit and healthy. So this is the place to find great recipes and learn about quality cooking that everyone can try and enjoy. So why not try out our inspirational healthy, fun and colourful dishes from starters to desserts!</p>
				

				<section class="list-of-courses">

				  	  <!-- Course Start -->
					<div class="course"> 
						<div class="image-overlay">
							<div class="image">
						    	<img src="images/food/blueberrySmoothie.png"> 
						 		<div class="name">
						 			<h3>Drinks</h3>
						 		</div>
							</div>
						</div>
				  		<ul class="media">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et arcu sit amet purus tincidunt vehicula a ut nibh. Maecenas vitae hendrerit ipsum</p>
				  		</ul>
					</div>
				  <!-- Course End -->
				  <!-- Course Start -->
					<div class="course"> 
						<a href="starters.php">
						<div class="image-overlay">
							<div class="image">
						    	<img src="images/food/starters/prawnScrewer.png"> 
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
					<div class="course"> 
						<a href="mains.php">
						<div class="image-overlay">
							<div class="image">
						    	<img src="images/food/mains/vegCurry.png"> 
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
					<div class="course"> 
						<a href="desserts.php">
						<div class="image-overlay">
							<div class="image">
						    	<img src="images/food/desserts/nuttyYogurt.png"> 
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
					<div class="course">
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
	</body>
</html>
