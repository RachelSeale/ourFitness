<!DOCTYPE html>
<html>
<head>
	<title>The Search Engine - Search</title>
	<title>Our Fitness - Recipes!</title>
	<!-- Custom CSS -->
    <link rel="stylesheet" href="css/index.css">
</head>
	<body class="search-page">
		<header>
	  		<h1 class="title">
	  			<a href="/">Our Fitness Network</a>
	  		</h1>
		</header>

		<?php include("header.php"); ?>

		<section class="site">
			<div class="recipe-content">
				<h2>Find your favourite healthy and low calories recipes here...</h2>
				<form action='./search.php' method='get'>
					<input type='text' name='k' size='50' value='<?php echo $_GET['k']; ?>' />
					<input type='submit' value='Search' />
				</form>

				<?php
					$k = $_GET['k'];
					$terms = explode(" ", $k);
					$query = "SELECT * FROM search WHERE ";

					foreach ($terms as $each){
						$i++;
						if ($i == 1)
							$query .= "keywords LIKE '%$each%' ";
						else 
							$query .= "OR keywords LIKE '%$each%' ";

					}

					//conect to database

					mysql_connect("localhost", "root", "root");
					mysql_select_db("tutorials");

					$query = mysql_query($query);
					$numrows = mysql_num_rows($query);
					if ($numrows > 0) {

						while ($row = mysql_fetch_assoc($query)) {
							$id = $row ['id'];
							$title = $row ['title'];
							$description = $row ['description'];
							$keywords = $row ['keywords'];
							$link = $row ['link'];

							echo "<h2><a href='$link'>$title</a></h2>
							$description<br /><br />";

						}

					}

					else 
						echo "No results for <b>$k</b>";

				?>
			</div>
			<div class="side-content">
				<h1> A-Z Rceipes </h1>
					<ul class="azRecipes">
						<li>
							<img src="images/blueberry-muffin.jpg">
							<h2> Blueberry Muffins!</h2>
						</li>
						<li>
							<img src="images/passion-yogurt.jpg">
							<h2> Passion Fruit Yogurt</h2>
						</li>
						<li>
							<img src="images/raspberry-mess.jpg">
							<h2> Raspberry Mess</h2>
						</li>
						<li>
							<img src="images/berry-gronola.jpg">
							<h2> Berry Gronola</h2>
						</li>
						<li>
							<img src="images/berry-yogurt.jpg">
							<h2> Berry Yogurt</h2>
						</li>
						<li>
							<img src="images/veg-soup.jpg">
							<h2> Vegatable Soup </h2>
						</li>
					</ul>
			</div>
		</section>
	</body>
</html>