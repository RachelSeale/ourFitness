<?php 
	session_start();
	include ('../connect.php');
	$conn = new mysqli($database, $username, $password, "tutorials");
	include ('sanitize.php');
	
	if (isset($_POST ['email']) && isset($_POST ['password'])) {
		$email = $_POST ['email'];
		$password = $_POST ['password'];

		if ($email === "" && $password === "") {
			// Fail if basic validation
			return false;
		}
		
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
		if (isset($_GET['return_url'])) {
			header("location:".$_GET['return_url']);
			
		} else {
			header("location:index.php");
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login & Register - Our Fitness</title>
	<!-- Custom CSS -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
	<body class="search-page">
		<?php include("header.php"); ?>
		<header class="header">
			<img class="logo" src="images/logo2.png">
	  		<h1 class="title"><a href="index.php">Our Fitness </a></h1>
		</header>  

		<section class="site">
				<form class="login-form" method="POST">
					<h2>Login Here</h2>
					<p>Sign in to your account to access your faviourite recipes.</p>
					<ul>
						<li><input type='email' name='email' size='50' placeholder="Please enter your email address" /></li>
						<li><input type='password' name='password' size='50' placeholder="Your password" /></li>
						<button type="submit" name="login">Log In</button>
					</ul>
				</form>

				<form class="register-form" method="POST">
					<h2>Register Here</h2>
					<p>Create a Our Fitness account now to make liking and storing recipes quicker and easier.</p>
					<ul>
						<li><input type='text' name='name' size='50' placeholder='Name' /></li>
						<li><input type='email' name='email' size='50' placeholder='Email' /></li>
						<li><input type='password' name='password' size='50' placeholder='Please enter your password' /></li>
						<li><input type='password' name='confirmPassword' size='50' placeholder='Please re-enter your password' /></li>
					</ul>

					<button type="submit" name="register"> Submit</button>
				</form>
		</section>
		<?php include("footer.php"); ?>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
		<script src="js/nav.js"></script>
		<script src="js/home.js"></script>
		<script src="js/likeFunction.js"></script>
	</body>
</html>