<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<head>
	<meta name="viewport" content="width=device-width">
</head>
<section class="site">
	<div id="menu" >
	<a href="#menu" class="menu-link"></a>
	    <nav id="nav" class="nav toggle-nav" >
	        <ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="map.php">Map</a></li>
				<li><a href="recipe.php">Recipes</a></li>
				<li><a href="trends.php">#Trends</a></li>
				
					<?php
		          		if (isset($_SESSION['name'])) {
							$name = $_SESSION['name'];
							echo "
								
									<li><a href='search.php?liked=true'>Saved recipes</a></li>
									<li><a href='logout.php'>Log Out</a></li>
								
								";
						} else {
							echo "<li><a href='registeruser.php'><i class='fa fa-user'></i><b>Login</b></a></li>"; 
						}
					?>
				
	        </ul>
	    </nav>
	</div>
</section>