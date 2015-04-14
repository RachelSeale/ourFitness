<?php 
	session_start();
	// connect to database
	include ('../connect.php');
	$conn = new mysqli($database, $username, $password, "tutorials");
	include ('sanitize.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Search Recipes- Our Fitness</title>
	<!-- Custom CSS -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
	<body class="search-page">
		<?php include("header.php"); ?>
		<header class="recipe-header">
	  		<h1 class="title">
	  			<img class="logo" src="images/logo2.png">
	  			<a href="index.php">Our Fitness</a>
	  		</h1>
	  		<h2> Looking for healthy recipes? Looking to get fit? </h2>
		</header>

		<section class="site">
			<div class="recipe-content">
		  		<?php
		  			$liked = isset($_GET['liked']) ? true : false;

		  			if ($liked) {
		  				echo "<h2>Hi $name, here are your likes... </h2>";
		  			} else {
		  				echo "<h2>Find your favourite healthy and low calories recipes here...</h2>";	
		  			}
		  		?>
				<form class="search-recipes" action='./search.php' method='get'>
					<input type='hidden' name='course' value="<?php echo isset($_GET['course']) ? $_GET['course'] : '' ; ?>" />
					<input type='text' name='search' size='50' value='<?php echo isset($_GET['search']) ? $_GET['search'] : '' ; ?>' />
					<input type='submit' value='Search' />
					<input id="quick" type='checkbox' name='quick' /><label for="quick">Quick and Easy</label>
					<input id="vegetarian" type='checkbox' name='vegetarian' /><label for="vegetarian">Vegetarian</label>
				</form>
				<section class="list-of-recipes">
				<?php
					//setting variables - determine if a variable is set and is not NULL
					$search = isset($_GET['search']) ? $_GET['search'] : false;
					$course = isset($_GET['course']) ? $_GET['course'] : false;
					$quick = isset($_GET['quick']) ? $_GET['quick'] : false;
					$vegetarian = isset($_GET['vegetarian']) ? $_GET['vegetarian'] : false;

					$terms = explode(" ", $search);
					if (isset($_SESSION['id'])) {
						$userID = $_SESSION['id'];

						//search all(*) from search table, userID from likes table and join 
						$query = "SELECT search.*, likes.userID AS liked FROM search LEFT JOIN likes ON search.id = likes.recipeID AND likes.userID=$userID ";
					} else {

						// else show all from search table
						$query = "SELECT * FROM search ";
					}

					$filters = array();

					if ($quick) {
						array_push($filters, "`cooking time` <= 30 ");

					}

					if ($vegetarian) {
						array_push($filters, "vegetarian = 'yes' ");

					}


					if ($course) {
					
						array_push($filters, "course = '$course' ");
					
					}

					if ($liked && $userID) {
					
						array_push($filters, "likes.userID = '$userID' ");
					
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

					//if there are filters join them into the search query
					if (count($filters) > 0) {
						$query .= "WHERE ".join("AND ", $filters);
					}

					$result = $conn->query($query);
					$numrows = $result->num_rows;
					if ($numrows > 0) {

						while ($row = $result->fetch_assoc()) {
							//fetch that row with that id

							$id = $row ['id'];
							$title = $row ['title'];
							$description = $row ['description'];
							$keywords = $row ['keywords'];
							$link = $row ['link'];
							$servingSize = $row ['serving size'];
							$calories = $row ['calories'];
							$cookingTime = $row ['cooking time'];

							//display 
							echo "
									<div class='recipe'> 
									<a href='recipepage.php?id=$id'>
										<div class='image'>
									    	<img src='images/recipeImages/$id.jpg'> 
									  		<div class='likes'>
									    		<i class='fa ".($row['liked'] ? 'fa-heart' : 'fa-heart-o')." lv' data-id='$id' data-test='pulse'></i>
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
								  	</a>
									</div>
								  ";

						}

					}
					//else display message telling the user that what they search has no results
					else {
						$message = "No results";

						if ($search) {
							$message .= " for <b>$search</b>";
						}

						if ($course) {
							$message .= " in <b>$course</b>"; 
						}

						echo $message;
					}
				?>
			</section>
			<?php include("footer.php"); ?>
			</div>
		</section>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
		<script src="js/nav.js"></script>
		<script src="js/jquery.uniform.min.js"></script>
		<script src="js/home.js"></script>
		<script src="js/likeFunction.js"></script>
	</body>
</html>