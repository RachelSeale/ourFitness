<section class="site">
	<div id="menu" >
	<a href="#menu" class="menu-link"></a>
	    <nav id="nav" class="nav toggle-nav" >
	        <ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="map.php">Map</a></li>
				<li><a href="recipe.php">Recipes</a></li>
				<li><a href="trends.php">#Trends</a></li>
				<li><a href="/contact.html">Contact</a></li>
				<li>
					<?php
		          		if (isset($_SESSION['name'])) {
							$name = $_SESSION['name'];
							echo "
								<div class='welcome-message'>
									<h2>Hello, $name! How are you today?</h2>
									<a href='logout.php'>Log Out</a>
								</div>";
						} else {
							echo "<a href='registeruser.php'>Login</a>"; 
						}
					?>
				</li>
	        </ul>
	    </nav>
	</div>
</section>