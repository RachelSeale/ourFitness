<!DOCTYPE html>
<html>
<head>
	<title>The Search Engine - Search</title>
	<title>Our Fitness - Recipes!</title>
	<!-- Custom CSS -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
					<input type='hidden' name='course' value="<?php echo $_GET['course']; ?>" />
					<input type='text' name='search' size='50' value='<?php echo $_GET['search']; ?>' />
					<input type='submit' value='Search' />
					<input id="quick" type='checkbox' name='quick' /><label for="quick">Quick and Easy</label>
				</form>
				<section class="list-of-recipes">
				<?php
					$search = $_GET['search'];
					$course = $_GET['course'];
					$quick = $_GET['quick'];

					$terms = explode(" ", $search);
					$query = "SELECT * FROM search ";

					$filters = array();

					if ($quick) {
						array_push($filters, "`cooking time` <= 30 ");

					}


					if ($course) {
					
						array_push($filters, "course = '$course' ");
					
					}

					if ($search) {

						$searchQuery = "";

						foreach ($terms as $each){
							$i++;
							if ($i == 1)
								$searchQuery .= "keywords LIKE '%$each%' ";
							else 
								$searchQuery .= "OR keywords LIKE '%$each%' ";

						}

						array_push($filters, '('.$searchQuery.')');
					}

					if (count($filters) > 0) {
						$query .= "WHERE ".join("AND ", $filters);
					}

					echo $query;

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
							$servingSize = $row ['serving size'];
							$calories = $row ['calories'];
							$cookingTime = $row ['cooking time'];

							echo "
									<div class='recipe'> 
										<div class='image'>
									    	<img src='images/recipeImages/$id.png'> 
									  		<div class='likes'>
									    		<i class='fa fa-heart-o lv' data-test='pulse'></i>
											</div>
									 		<div class='name'>
									 			<h3>$title</h3>
									 		</div>
										</div>
								  		<ul class='icons'>
										    <li><i class='fa fa-clock-o'></i> $cookingTime Minutes</li>
										    <li><i class='fa fa-tachometer'></i> $calories Calories</li>
										    <li><i class='fa fa-cutlery'></i> $servingSize People</li>
								  		</ul>
									</div>
								  ";

						}

					}

					else 
						echo "No results for <b>$k</b>";

				?>
			</section>
			</div>
		</section>
	</body>
</html>