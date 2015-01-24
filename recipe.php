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
	  			<a href="/">Our Fitness Network</a>
	  		</h1>
		</header>


		<section class="site">

				<form class="search-recipes form-wrapper" action='./search.php' method='get'>
					<input type='text' name='k' size='50' placeholder="Search recipes"/>
					<input type='submit' value='Search'/>
				</form>

			<div class="recipe-content">
				<h1> Recipes </h1>
			</div>
			<div class="side-content">
				<h1>A-Z Rceipes</h1>
			</div>
		</section>
	</body>
</html>
