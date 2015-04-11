<?php
	session_start();
	include ('sanitize.php');
	// likes.php?id=1

	if (!isset($_SESSION['id'])) {
		return http_response_code(401);
	}

	if (!isset($_GET['id'])) {
		return http_response_code(400);
	}

	$user_id = $_SESSION['id'];
	$recipe_id = $_GET['id'];

	// MySQL

	include ('../connect.php');
	$conn = new mysqli($database, $username, $password, "tutorials");

	$sql = "SELECT likeID FROM likes WHERE userID=$user_id AND recipeID=$recipe_id";
	$exists = $conn->query($sql);

	// CHECK IF ALREADY IN TABLE IF NOT ADD IF YES REMOVED

	if ($exists->num_rows === 0) {

		$sql = "INSERT INTO `likes` (recipeID, userID) values('$recipe_id', '$user_id') ";

		if ($conn->query($sql) === true) {
			http_response_code(201);
			echo "LIKED";
			return;
		} else {
			return http_response_code(500);
		}

	} else {

		$row = $exists->fetch_row();
		$sql = "DELETE FROM `likes` WHERE likeID=$row[0] ";

		if ($conn->query($sql) === true) {
			http_response_code(200);
			echo "UNLIKED";
			return;

		} else {
			return http_response_code(500);
		}
	}
?>