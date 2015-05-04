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
		<header class="header">
			<img class="logo" src="images/logo2.png">
	  		<h1 class="title"><a href="index.php">Our Fitness </a></h1>
		</header>  
		<section class="site">
			<div class="welcome-info">
				<h2> Looking for the health and fitness trends? </h2>
				<p> Come and look at all the health and fitness images from the <b class="website-name">Our Fitness</b> Instagram page, <a href="https://instagram.com/activegirlsussex/"><b>@activegirlsussex</b></a>. Feel free to follow, like, comment and share with friends and family! Or why not get involved yourself and use the hashtag <a href="https://instagram.com/explore/tags/girlsourfitness/"><b>#girlsourfitness</b></a></p>
			</div>
		<section class="site">	
				<div class="instafeed" id="instafeed"></div>	
		</section>


		<script type="text/javascript" src="js/instafeed.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/nav.js"></script>
		<script type="text/javascript">
		    var userFeed = new Instafeed({
		    	limit: 60,
		    	sortBy: 'most-liked',
		        get: 'user',
		        userId: 1582417946,
		        resolution: 'low_resolution',
		        accessToken: '1582417946.467ede5.5af2eb172d8b44778708310f7319403b',
		        template: '<div class="insta-images"><a href={{link}}><img src={{image}}></a><p><i class="fa fa-heart lv"></i>{{likes}} {{caption}}</p></div>'
		        
		    });
		    userFeed.run();
		</script>
	<?php include("footer.php"); ?>
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
