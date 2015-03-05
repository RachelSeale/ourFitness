<?php
	session_start();

	// likes.php?id=1

	// if (!isset($_SESSION['id'])) {
	// 	http_response_code(401);
	// 	return
	// }

	if (!isset($_GET['id'])) {
		http_response_code(400);
		return;
	}

	$user_id = $_SESSION['id'];
	$recipe_id = $_GET['id'];

	echo "$user_id";
	echo "$recipe_id";
	// MySQL

	

	$conn = new mysqli("localhost", "root", "root", "tutorials");
			$sql = "INSERT INTO `likes` (recipeID, userID) values ('$recipe_id', '$user_id') ";

			$result = $conn->query($sql);

			if ($conn->query($sql) === true) {
				echo "LIKED!";
			} else {
				echo "failed";
			}
			// CHECK IF ALREADY IN TABLE IF NOT ADD IF YES REMOVED
?>