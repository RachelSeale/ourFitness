<?php 
	session_start(); 

	if (isset($_POST ['email']) && isset($_POST ['password'])) {
		$email = $_POST ['email'];
		$password = $_POST ['password'];

		if ($email === "" && $password === "") {
			// Fail if basic validation
			return false;
		}

		$conn = new mysqli("localhost", "root", "root", "tutorials");
		
		if (isset($_POST["login"])) {

			$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";

			$result = $conn->query($sql);

			if ($result->num_rows === 1) {
				while ($row = $result->fetch_assoc()) {
					$_SESSION['name'] = $row['name'];
					$_SESSION['id'] = $row['id'];
				}
				$formSubmitted = true;
			} else {
				echo "Username and password did not match";
			}

		} else if (isset($_POST["register"])) {
		
			$name = $_POST ['name'];

			if ($name === "") {
				// Fail if basic validation
				return false;
			}

			
			$sql = "INSERT INTO users (email, name, password) values ('$email','$name','$password')";

			if ($conn->query($sql) === true) {
				$formSubmitted = true;
				$_SESSION['name'] = $name;
				$_SESSION['id'] = $conn->insert_id;
			} else {
				echo "failed";
			}

		}
	}

	if (isset($_SESSION['name'])) {
		$name = $_SESSION['name'];
		header("location:index.php");
	}
?>

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

				<form method="POST">
					<ul>
						<li><input type='text' name='name' size='50' value='Name' /></li>
						<li><input type='email' name='email' size='50' value='Email' /></li>
						<li><input type='password' name='password' size='50' value='' /></li>
						<li><input type='password' name='confirmPassword' size='50' value='' /></li>
					</ul>

					<button type="submit" name="register"> Submit</button>
				</form>
		</section>
		<section class="site">

				<form class="login-form" method="POST">
					<ul>
						<li><input type='email' name='email' size='50' placeholder="Please enter your email address" /></li>
						<li><input type='password' name='password' size='50' placeholder="Your password" /></li>
						<button type="submit" name="login">Log In</button>
					</ul>
				</form>

		</section>

		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
		<script src="js/nav.js"></script>
		<script src="js/home.js"></script>
		<script src="js/likeFunction.js"></script>
	</body>
</html>