<?php
	//Taken from Chris Coyier - Sanitize Database Inputs - https://css-tricks.com/snippets/php/sanitize-database-inputs/
	function cleanInput ($input) {
	 
		$search = array(
			'@<script[^>]*?>.*?</script>@si',   // Strip out javascript
			'@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
			'@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
			'@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
		);

		return preg_replace($search, '', $input);
	}


	function sanitize ($input) {
		global $conn;

		if (is_array($input)) {
            return array_map('sanitize', $input);
        } else {
            if (get_magic_quotes_gpc()) {
                $input = stripslashes($input);
            }
            $input  = cleanInput($input);
			return $conn->real_escape_string($input);
        }
	}

	// Also use for getting POST/GET variables
	$_POST = sanitize($_POST);
	$_GET  = sanitize($_GET);

?>

