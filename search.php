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
		</section>
	</body>
</html>