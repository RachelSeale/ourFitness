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
	        </ul>
	    </nav>
	</div>

	<?php

			if (isset($_POST ['email']) && isset($_POST ['password'])) {
				$email = $_POST ['email'];
				$password = $_POST ['password'];

				if ($email === "" && $password === "") {
					// Fail if basic validation
					return false;
				}

				$conn = new mysqli("localhost", "root", "root", "tutorials");
				$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";

				$result = $conn->query($sql);

				if ($result->num_rows === 1) {
					while ($row = $result->fetch_assoc()) {
						$_SESSION['name'] = $row['name'];
					}
					$formSubmitted = true;
				} else {
					echo "Username and password did not match";
				}
			}

			if (isset($_SESSION['name'])) {
				$name = $_SESSION['name'];
				echo "<h1>Hello, $name! How are you today?</h1>
				<a href='logout.php'>Log Out</a>";
			} else {
		?>


		<section class="site">

				<form method="POST">
					<ul>
						<li><input type='email' name='email' size='50' value='Email' /></li>
						<li><input type='password' name='password' size='50' value='' /></li>
					</ul>

					<button type="submit"> Submit</button>
				</form>

		</section>

		<?php } ?>
</section>