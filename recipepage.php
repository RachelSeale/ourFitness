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
					$id = $_GET['id'];
			
					$query = "SELECT * FROM search WHERE id = '$id'";


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
							$instructions = explode("\n", $row['instructions']);

							$output = "
									<div class='recipe'> 
										<div class='image'>
									    	<img src='images/recipeImages/$id.jpg'> 
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
								  		<ul>

										<div class='fb-share-button' data-layout='button_count'>
										</div>

										<a href='//www.pinterest.com/pin/create/button/'' data-pin-do='buttonBookmark'  data-pin-height='28'><img src='//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_28.png' /></a>
										<a href='https://twitter.com/share' class='twitter-share-button'>Tweet</a>
								  		";

							foreach ($instructions as $instruction) {
							 	$output .= "<li>$instruction</li>";
							 }

							$output .=	"</ul>
							</div>";

							echo $output;

						}

					}

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
			</div>

			<div id="fb-root"></div>
		<script>
		(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
				  fjs.parentNode.insertBefore(js, fjs);
		}

		(document, 'script', 'facebook-jssdk'));
		</script>
		<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
		
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		</section>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
		<script src="js/nav.js"></script>
		<script src="js/home.js"></script>
		<script src="js/likeFunction.js"></script>
	</body>
</html>