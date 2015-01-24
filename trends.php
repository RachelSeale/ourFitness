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
		    var feed = new Instafeed({
		        get: 'tagged',
		        tagName: 'girlsourfitness',
		        clientId: 'd0cba10561564bfaae551ce7c9c44ad1',
		        limit: 60
		    });
		    feed.run();
		</script>
		
	</body>
</html>