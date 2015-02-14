<!DOCTYPE html>
<html>
<head>
	<title>Our Fitness - Recipes!</title>
	<!-- Custom CSS -->
    <link rel="stylesheet" href="css/index.css">
</head>
	<body>
		<?php include("header.php"); ?>
		<header>
	  		<h1 class="title">
	  			<a href="index.php">Our Fitness Network</a>
	  		</h1>
		</header>

		<section class="site">
				<form class="search-recipes form-wrapper" action='./search.php' method='get'>
					<input type='text' name='k' size='50' placeholder="Search recipes"/>
					<input type='submit' value='Search'/>
				</form>
				<section class="cuisine-content">
					<div class="typesOfCuisine">
						<a href="https://www.rafclub.org.uk/">
							<img src="images/food/american.png"/>
							<div class="image-overlay">
								<h2>American</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et arcu sit amet purus tincidunt vehicula a ut nibh. Maecenas vitae hendrerit ipsum</p>
							</div>
						</a>
					</div>
					<div class="typesOfCuisine">
						<a href="http://www.soletrader.co.uk/">
							<img src="images/food/chiense.png"/>
							<div class="image-overlay">
								<h2>Chinese</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et arcu sit amet purus tincidunt vehicula a ut nibh. Maecenas vitae hendrerit ipsum</p>
							</div>
						</a>
					</div>
					<div class="typesOfCuisine">
			            <a href="http://en.steigenberger.com/">
			                <img src="images/food/vegCurry.png"/>
			                <div class="image-overlay">
			                    <h2>Indian</h2>
			                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et arcu sit amet purus tincidunt vehicula a ut nibh. Maecenas vitae hendrerit ipsum</p>
			                </div>
			        	</a>
			        </div>
			        <div class="typesOfCuisine">
			            <a href="http://en.steigenberger.com/">
			                <img src="images/food/italian.png"/>
			                <div class="image-overlay">
			                    <h2>Italian</h2>
			                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et arcu sit amet purus tincidunt vehicula a ut nibh. Maecenas vitae hendrerit ipsum</p>
			                </div>
			        	</a>
			        </div>
			        <div class="typesOfCuisine">
			            <a href="http://en.steigenberger.com/">
			                <img src="images/food/mexican.png"/>
			                <div class="image-overlay">
			                    <h2>Mexican</h2>
			                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et arcu sit amet purus tincidunt vehicula a ut nibh. Maecenas vitae hendrerit ipsum</p>
			                </div>
			        	</a>
			        </div>
			        <div class="typesOfCuisine">
			            <a href="http://en.steigenberger.com/">
			                <img src="images/food/thai.png"/>
			                <div class="image-overlay">
			                    <h2>Thai</h2>
			                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et arcu sit amet purus tincidunt vehicula a ut nibh. Maecenas vitae hendrerit ipsum</p>
			                </div>
			        	</a>
			        </div>
			 </section>
		</section>
	</body>
</html>