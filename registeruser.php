<?php session_start(); ?>
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
		<?php

			if (isset($_POST ['email']) && isset($_POST ['password']) && $_POST ['name']) {
				$email = $_POST ['email'];
				$password = $_POST ['password'];
				$name = $_POST ['name'];

				if ($email === "" && $password === "" && $name === "") {
					// Fail if basic validation
					return false;
				}

				echo $email.$password.$name;

				$conn = new mysqli("localhost", "root", "root", "tutorials");
				$sql = "INSERT INTO users (email, name, password) values ('$email','$name','$password')";

				if ($conn->query($sql) === true) {
					$formSubmitted = true;
					$_SESSION['name'] = $name;
				} else {
					echo "failed";
				}
			}

			if (isset($_SESSION['name'])) {
				$name = $_SESSION['name'];
				echo "<h1>Hello, $name! How are you today?</h1>";
			} else {
		?>


		<section class="site">

				<form method="POST">
					<ul>
						<li><input type='text' name='name' size='50' value='Name' /></li>
						<li><input type='email' name='email' size='50' value='Email' /></li>
						<li><input type='password' name='password' size='50' value='' /></li>
						<li><input type='password' name='confirmPassword' size='50' value='' /></li>
					</ul>

					<button type="submit"> Submit</button>
				</form>
		</section>

		<?php } ?>

		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
		<script src="js/nav.js"></script>
		<script src="js/home.js"></script>
		<script src="js/likeFunction.js"></script>
	</body>
</html>