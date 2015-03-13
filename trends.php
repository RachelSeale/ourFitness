<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>@activegirlsussex - Our Fitness</title>
	<!-- Custom CSS -->
    <link rel="stylesheet" href="css/index.css">
</head>
	<body>
		<?php include("header.php"); ?>
		<header class="recipe-header">
	  		<h1 class="title">
	  			<img class="logo" src="images/logo2.png">
	  			<a href="index.php">Our Fitness</a>
	  		</h1>
	  		<h2 class="hashtag-name"><a href="https://instagram.com/activegirlsussex/">#girlsourfitness</a></h2>
		</header>
		<section class="site">
			<div class="content">
				<div class="instafeed" id="instafeed">
				</div>
			</div>
		

		<script type="text/javascript" src="js/instafeed.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/nav.js"></script>
		<script type="text/javascript">
		    var userFeed = new Instafeed({
		        get: 'user',
		        userId: 1582417946,
		        resolution: 'low_resolution',
		        accessToken: '1582417946.467ede5.5af2eb172d8b44778708310f7319403b',
		        sortBy: 'most-liked',
		        limit: 60,
		        template: '<div class="insta-images"><a href={{link}}><img src={{image}}></a><p><i class="fa fa-heart lv"></i>{{likes}} {{caption}}</p></div>'
		        
		    });
		    userFeed.run();
		</script>
		
	</body>
</html>