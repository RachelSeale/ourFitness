<!DOCTYPE html>
<html>
<head>
	<title>Our Fitness - Recipes!</title>
	<!-- Custom CSS -->
    <link rel="stylesheet" href="css/index.css">
</head>

	<body>
		<?php include("header.php"); ?>
		<header class="header">
	  		<h1 class="title"><a href="/">#girlsourfitness</a></h1>
		</header>  
		<section class="site">
				<div class="content">
					<div id="instafeed"></div>
				</div>
		

		<script type="text/javascript" src="js/instafeed.min.js"></script>
		<script type="text/javascript">
		    var userFeed = new Instafeed({
		        get: 'user',
		        userId: 1582417946,
		        accessToken: '1582417946.467ede5.5af2eb172d8b44778708310f7319403b',
		        limit: 60
		    });
		    userFeed.run();
		</script>
		
	</body>
</html>