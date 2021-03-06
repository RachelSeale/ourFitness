<?php
	session_start();
	//conect to database
	include ('../connect.php');
	$conn = new mysqli($database, $username, $password, "tutorials");
	include ('sanitize.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Recipes - Our Fitness</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Health and fitness website, that provides you with step by step recipes that are healthy and tasty">
	<meta name="keywords" content="Health, healthy, fitness, recipes, fit, gyms, sport">
	<meta name="author" content="Our Fitness">
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
				<!--Once pressed search use the php from search.php -->
				<form class="search-recipes" action='./search.php' method='get'>
					<input type='hidden' name='course' value="<?php echo $_GET['course']; ?>" />
					<input type='text' name='search' size='50' value='<?php echo $_GET['search']; ?>' />
					<input type='submit' value='Search' />
					<div class='filters'>
						<input id="quick" type='checkbox' name='quick' /><label for="quick">Quick and Easy</label>
						<input id="vegetarian" type='checkbox' name='vegetarian' /><label for="vegetarian">Vegetarian</label>
					</div>
				</form>
				<section>
				<?php
					$id = $_GET['id'];
			
					$query = "SELECT * FROM search WHERE id = '$id'";

					if ($result = $conn->query($query)) {
						//fetch that row with that id
						while ($row = $result->fetch_assoc()) {
							$id = $row ['id'];
							$title = $row ['title'];
							$description = $row ['description'];
							$keywords = $row ['keywords'];
							$servingSize = $row ['serving size'];
							$calories = $row ['calories'];
							$protein = $row ['protein'];
							$carbs = $row ['carbs'];
							$sugar = $row ['sugar'];
							$fibre = $row ['fibre'];
							$cookingTime = $row ['cooking time'];
							$description = $row ['description'];
							$instructions = explode("\n", $row['instructions']);
							$ingrediants = explode("\n", $row['ingrediants']);

							$output = "
									<div class='recipe-page'>
										<div class='image'>
										    <img class='recipe-image' src='images/recipeImages/$id.jpg'> 
											<div class='likes'>
										    	<i class='fa fa-heart-o lv' data-id='$id' data-test='pulse'></i>
											</div>
										</div>

								 		<div class='details'>
								 			<h3>$title</h3>
							
									  		<ul class='icons'>
											    <li><i class='fa fa-clock-o'></i> $cookingTime Minutes</li>
											    <li><i class='fa fa-tachometer'></i> $calories Calories</li>
											    <li><i class='fa fa-cutlery'></i> $servingSize Servings</li>
									  		</ul>
									  		<div class='description'>
									  			<p>$description</p>
									  		</div>
									  		<div class='share-buttons'>
									  			<h2>Share : </h2>
												<a class='fb-share-button' href='http://www.facebook.com/sharer.php?u=http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]' title='Share on Facebook' class='service-links-facebook service-links-link service-links-popup-processed analytics-processed' rel='nofollow' data-service-name='Facebook'>
													<i class='icon icon-facebook'></i>
													<i class='fa fa-facebook-square'></i>
													<span class='service-links-text'> </span>
												</a>
												<a class='pinterest-share-button' href='http://pinterest.com/pin/create/bookmarklet?media=http://$_SERVER[HTTP_HOST]/images/recipeImages/$id.jpg' title='Pin it on Pinterest' class='service-links-pinterest' rel='nofollow' data-service-name='Pinterest'>
													<i class='icon icon-pinterest'></i>
													<i class='fa fa-pinterest-square'></i>
													<span class='service-links-text'></span>
												</a>
												<a href='https://twitter.com/share' class='tweet-share-button' data-via='Active_Sussex' data-count='none'>
													<i class='icon icon-twitter'></i>
													<i class='fa fa-twitter-square'></i>
													<span class='service-links-text'> </span>
												</a>
											</div>
											<div class='nutrition-servings'>
												<dl>											
													<dt><span>Calories</span></dt>
													<dd>$calories</dd>
												</dl>
												<dl>
													<dt><span>Protein</span></dt>
													<dd>$protein</dd>
												</dl>
												<dl>
													<dt><span>Carbs</span></dt>
													<dd>$carbs</dd>
												</dl>
												<dl>
													<dt><span>Sugar</span></dt>
													<dd>$sugar</dd>
												</dl>
												<dl>
													<dt><span>Fibre</span></dt>
													<dd>$fibre</dd>
												</dl>
											</div>
								  		</div>


									  	<div class='method'>
									  	
									  		<ul class= 'ingrediants'>
									  		<h2>Ingredients</h2>";
									  	
									  	//for every ingrediants display as list
									  	foreach ($ingrediants as $ingrediants) {
							 				$output .= "<li>$ingrediants</li>";
										}

							  			$output .= "</ul>
										  				<ol class='instructions'>
										  				<h2>Method</h2>
								  		";
							 	  		
								  		//for every instruction display as list
										foreach ($instructions as $instruction) {
										 	$output .= "<li>$instruction</li>";
										 }

										 $output .=	"
										 </ol>
										 </div>
										 </div>";

										echo $output;

						}

					}

					//else display message telling the user that what they search has no results
					else {
						echo "Not found";
					}
				?>
			</section>
			<?php include("footer.php"); ?>
			</div>


		<script>
		//changing colour
		var elems = document.getElementsByTagName("dd");
		for (var i=0, m=elems.length; i<m; i++) {
		  
			if (parseInt(elems[i].innerHTML, 10) >300) { 
		  	elems[i].style.color="red";
		  
		  	} else if (parseInt(elems[i].innerHTML, 10) >200) {
		    	elems[i].style.color="orange";
		    
		  	} else {
		    	elems[i].style.color="green";
		 	}
		}
		</script>

		<!--Sharing buttons - FB, Pintrest and Twitter -->	
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